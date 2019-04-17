$(document).ready(function () {
    // membuat <style> di head
    var sheet = (function () { 
        // membuat tag <style>
        let style =document.createElement('style');
        	// Add a media (and/or media query) here if you'd like!
	        // style.setAttribute("media", "screen")
            // style.setAttribute("media", "only screen and (max-width : 1024px)")
        // webkit hack
        style.appendChild(document.createTextNode(""));
        // memanggil <style> di head
        document.head.appendChild(style);
        return style.sheet;
     })();
// data control
if ($('.tombol-profile').attr('data-control') == 'off') {
    $('.tombol-profile > a').addClass('disable');
        $('.tombol-profile > a').on('click', function () {
            alert('anda harus login dulu');
        });
    $('.img-user div').addClass('disable');
        $('.img-user div').on('click', function () {
            alert('anda harus login dulu');
        });
};
$('.menu-toggle').click(function (e) { 
    e.preventDefault();
    $('.nav-kanan ul').toggleClass('nav-active');
    $('header').toggleClass('header-on');
});
// visimisi
$('.container-visimisi > div').on('click', function (e) {
    $(e.currentTarget).toggleClass('vm-on vm-off');
    $('.vm-off > div:nth-child(2)').css('display','none');
    $(e.currentTarget).siblings().toggleClass('vm-on vm-off');
    $('.vm-on > div:nth-child(2)').fadeToggle(3500,'linear');
});
// ==================================================
    $(document).on( 'scroll', function(){
        var wscroll=$(this).scrollTop();
        // sheet.insertRule('.container-landing::after {right : -'+12+(wscroll/6)+'%}');
        // $('.container-landing::after').css('transform', 'translate('+wscroll/2+'%,0)');
        var wscroll=$(this).scrollTop();
    });
});

//  gallery =========================================
function getRandomSize(min, max) {
    return Math.round(Math.random() * (max - min) + min);
  }