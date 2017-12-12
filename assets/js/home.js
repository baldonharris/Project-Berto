$(document).ready(function () {
    var $that = $(this);
    var rowTpl = _.template($('script#row-template').html());

    var loading     = function (mode) {
        $.LoadingOverlay(mode);
    };
    var serveTourists = function (url, callback) {
        $.get(url, {}, function (data) {
            var parsedData = JSON.parse(data);

            $('#tourist-spots').empty();
            for (var x=0; x < _.size(parsedData); x++) {
                $('#tourist-spots').append(rowTpl(parsedData[x]));
            }

            if (_.isUndefined(callback) === false) {
                callback();
            }
        });
    };

    $that.on('click', '.list-group-item', function (e) {
        e.preventDefault();
        loading('show');

        var url = $(this).closest('.list-group').data('retrieve') + '/' + $(this).data('type');

        $('.list-group-item').removeClass('active');
        $(this).addClass('active');

        serveTourists(url, function () {
            loading('hide');
        });
    });

    // on load trigger
    $('.list-group-item[data-type="adventure"]').trigger('click');
});
