$(function () {
    $(`input`).prop("autocomplete", "off");
    $(`img`).attr(`draggable`, false);
    var ShowAndHidePassword = function () {
        var e = $(`[data-toggle="sh-password"]`);
        e.length && e.each(function () {
            var target = $(this).data('target');
            $(this).click(() => {
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
    var TriggerInput = function () {
        $(`[data-toggle="trigger"],[trigger]`).on('input', function () {
            var val = $(this).val();
            var text = $(this).data('text');
            var target = $(this).data('target');
            if (val) {
                $(target).text(val);
            } else {
                $(target).text(text);
            }
        });
    }();

    var validation = function (form) {
        form.addEventListener(
            "submit",
            function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add("was-validated");
            },
            false
        );
    };
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName("needs-validation");
    // Loop over them and prevent submission
    Array.prototype.filter.call(forms, function (form) {
        validation(form);
    });

});
