$(document).ready(function () {
    var modeModal   = 'create';
    var modeAccount = 'create';
    var currentCon  = 'tourist';
    var globalId    = 0;
    var accountId   = 0;
    var initData    = 1;
    var $that       = $(this);
    var accTpl      = _.template($('script#account-template').html());
    var trTpl       = _.template($('script#data-template').html());
    var emptyTpl    = _.template('<tr class="warning"><td colspan="11" class="text-center"><em>No data</em></td></tr>');
    var emptyAccTpl = _.template('<tr class="warning"><td colspan="3" class="text-center"><em>No data</em></td></tr>');
    var loading     = function (mode) {
        $.LoadingOverlay(mode);
    };
    var serveAccounts = function () {
        $.get('account/retrieve', {}, function (data) {
            var parsedData = JSON.parse(data);

            if (_.size(parsedData) > 0) {
                for (var x=0; x < _.size(parsedData); x++) {
                    parsedData[x]['mode'] = '';
                    if (parsedData[x]['username'] === 'admin') {
                        parsedData[x]['mode'] = 'hidden';
                    }
                    $('#account-table').find('tbody').append(accTpl(parsedData[x]));
                }
            } else {
                $('#account-table').find('tbody').append(emptyAccTpl());
            }

            $that.trigger('data-served');
            ++initData;
        });
    };
    var serveTourists = function (url, callback) {
        $('#tourist-table').find('tbody').empty();
        $.get(url, {}, function (data) {
            var parsedData = JSON.parse(data);

            if (_.size(parsedData) > 0) {
                for (var x=0; x < _.size(parsedData); x++) {
                    $('#tourist-table').find('tbody').append(trTpl(parsedData[x]));
                }
            } else {
                $('#tourist-table').find('tbody').append(emptyTpl());
            }

            if (_.isUndefined(callback)) {
                $that.trigger('data-served');
                ++initData;
            } else {
                callback();
            }
        });
    };

    $that.on('click', '#submit-manage-tourist', function (e) {
        e.preventDefault();
        loading('show');

        var inputs    = $('#manageTourist').find('input');
        var dataInput = {};
        var createUrl = $(this).data('create');
        var updateUrl = $(this).data('update');
        var url       = '';

        url = (modeModal === 'Create') ? createUrl : (updateUrl + '/' + globalId);
        $('#manageTourist').ajaxSubmit({url: url, success: function (data) {
            var dataInput = JSON.parse(data)['data'];

            if (modeModal === 'Create') {
                $('#tourist-table').find('tbody').append(trTpl(dataInput));
            } else {
                var $tr = $('#tourist-table').find('tr[data-id=' + globalId + ']');

                for (var name in dataInput) {
                    if (name !== 'picture') {
                        $tr.find('td[data-name=' + name + ']').text(dataInput[name]);
                    } else {
                        $tr.find('td[data-name=' + name + ']').find('a').text(dataInput[name]);
                        $tr.find('td[data-name=' + name + ']').find('a').attr('href', dataInput[name]);
                    }
                }
            }
            $('#manageModal').modal('hide');
            loading('hide');
        }});
    });

    $that.on('click', '.create-tourist', function () {
        modeModal = 'Create';
        $('#manageModal').modal('show');
    });

    $that.on('click', '.update-tourist', function () {
        modeModal = 'Update';
        globalId  = $(this).closest('tr').data('id');
        $('#manageModal').modal('show');
    });

    $that.on('click', '.delete', function () {
        var $this = $(this);
        var url   = $(this).data('delete') + '/' + $this.closest('tr').data('id');

        loading('show');
        $.get(url, {}, function (data) {
            var d = JSON.parse(data);
            var data = d.data;
            var status = d.status;

            loading('hide');
            if (status == true) {
                $this.closest('tr').remove();
            } else {
                sweetAlert('Account Error', 'Something is wrong!', 'error');
            }
        });
    });

    $that.on('click', '.preview-picture', function (e) {
        e.preventDefault();

        $('#previewModal').find('img.img-responsive').attr('src', $(this).attr('href'));
        $('#previewModal').modal('show');
    });

    $('#manageModal').on('show.bs.modal', function () {
        $(this).find('#manageModalLabel').find('span').text(modeModal);

        if (modeModal === 'Update') {
            var td = $('#tourist-table').find('tr[data-id=' + globalId + ']').find('td[data-name]');

            for (var x=0; x < _.size(td); x++) {
                var name  = $(td[x]).data('name');
                var value = $(td[x]).text();

                if (name !== 'picture') {
                    $('[name=' + name + ']').val(value);
                }
            }
        }
    });

    $('[id*="Modal"]').on('hide.bs.modal', function () {
        $('form').resetForm();
    });

    $('#filter-type').on('change', function () {
        var url = $(this).data('retrieve') + '/' + $(this).val();

        loading('show');
        serveTourists(url, function () {
            loading('hide');
        });
    });

    $that.on('click', '.manage-link', function (e) {
        e.preventDefault();

        var data = $(this).data('toggle');
        var this_li  = $(this).closest('li');
        var all_li = $(this).closest('ul').find('li');

        $(all_li).removeClass('active');
        $(this_li).addClass('active');

        $('#' + currentCon + '-container').toggle();
        $('#' + data + '-container').toggle();

        currentCon = data;
    });

    $that.on('click', '.manage-account', function (e) {
        e.preventDefault();

        modeAccount = $(this).data('mode');
        accountId = (modeAccount === 'Update') ? $(this).closest('tr').data('id') : accountId;

        $('#accountModal').modal('show');
    });

    $that.on('click', '#submit-manage-account', function (e) {
        e.preventDefault();

        var url       = $(this).data(modeAccount.toLowerCase());
        var dataInput = {};
        var status    = true;

        if (modeAccount === 'Update') {
            url = url + '/' + accountId;
        }

        $('#manageAccount').ajaxSubmit({url: url, success: function (data) {
            var d = JSON.parse(data);

            dataInput = d.data;
            status = d.status;

            if (status === true) {
                dataInput['mode'] = '';
                if (modeAccount === 'Create') {
                    $('#account-table').find('tbody').append(accTpl(dataInput));
                } else {
                    var $tr = $('#account-table').find('tr[data-id=' + accountId + ']');

                    for (var name in dataInput) {
                        $tr.find('td[data-name=' + name + ']').text(dataInput[name]);
                    }
                }

                $('#accountModal').modal('hide');
            } else {
                sweetAlert('Account Error', 'Existing username!', 'error');
            }
        }});
    });

    $('#accountModal').on('show.bs.modal', function () {
        $(this).find('#accountModalLabel').find('span').text(modeAccount);

        if (modeAccount === 'Update') {
            var td = $('#account-table').find('tr[data-id=' + accountId + ']').find('td[data-name]');

            for (var x=0; x < _.size(td); x++) {
                var name  = $(td[x]).data('name');
                var value = $(td[x]).text();

                $('[name=' + name + ']').val(value);
            }
        }
    });

    $that.on('data-served', function () {
        if (initData === 2) {
            loading('hide');
            initData = 1;
        }
    });

    // on load triggers
    loading('show');
    serveAccounts();
    serveTourists('tourist/retrieve/all');
    $('[id*="-container"]').hide();
    $('#' + currentCon + '-container').toggle();
    $('#account-container').removeClass('hidden');

	});
