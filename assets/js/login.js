$(document).ready(function () {
    $('#login_form').submit(function (e) {
        e.preventDefault();

        var url = $(this).attr('action');

        $(this).ajaxSubmit({url: url, success: function (data) {
            if (parseInt(data) === 1) {
                window.location.href = $('#login_form').data('baseurl');
            } else {
                sweetAlert('Login Error', 'Incorrect username or password!', 'error');
            }
        }});
    });
});
