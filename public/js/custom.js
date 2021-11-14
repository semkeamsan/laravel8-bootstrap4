$(function () {
    $(`input`).prop("autocomplete", "off");
    $(`img`).attr(`draggable`,false);
    var showHidePassword = function () {
        var e = $(`[data-toggle="sh-password"]`);
        e.length && e.each(function () {
            var target = $(this).data('target');
            $(this).click( () =>{
                if ($(target).attr('type') == 'password') {
                    $(target).attr('type', 'text');
                    $(this).find('i').removeClass().addClass('fal fa-eye-slash');
                } else {
                    $(target).attr('type', 'password');
                    $(this).find('i').removeClass().addClass('fal fa-eye');
                }
            });
        });
    }();



});
