$(function () {
    $.each($('.pilih'), function (index, value) {
        $(value).on('click', function (e) {
            e.preventDefault();
            $(value).siblings().slideToggle();
            $(value).siblings().unbind(  );
        });

    });

});