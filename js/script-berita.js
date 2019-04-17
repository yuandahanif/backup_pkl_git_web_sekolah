$(document).ready(function () {
    
    // profile resize
    updateWidth();
    $(window).resize(function(){
        updateWidth();
    });
    // opaen profile
    $('#profile-toggle').on('click',(function (e){ 
        e.preventDefault();
        $('.sec-kanan').addClass('profile-show').removeClass('d-none sec-kanan');
        $('#close').toggleClass('close-on');
    }));
    // close profile
        $('#close').on('click',(function (e){ 
            e.preventDefault();
            $('.profile-show').addClass('sec-kanan d-none').removeClass('profile-show');
            $('#close').toggleClass('close-on');
        }));
    // open event
    $('.tanggal-event').on('click',(function (e){ 
        e.preventDefault();
        $('#event-popup').toggleClass('event-popup event-popup-close');
        let detailEvent = {
            nama : $(this).attr('data-namaEvent'),
            tanggalMulai : $(this).attr('data-tanggalMulaiEvent'),
            tanggalAkhir : $(this).attr('data-tanggalAkhirEvent'),
            deskripsi : $(this).attr('data-descEvent'),
            lokasi : $(this).attr('data-lokasiEvent')
        };
            /*judul-event*/$('.judul-event').text(detailEvent.nama);
            /*lokasi-event*/$('.p-lokasi').text(detailEvent.lokasi);
            /*waktu-event mulai*/$('.waktu-event span:nth-child(1)').text('" '+detailEvent.tanggalMulai);
            /*waktu-event selesai*/$('.waktu-event span:nth-child(2)').text(detailEvent.tanggalAkhir+'"');
            /*keterangan-event*/$('.keterangan-event p').text(detailEvent.deskripsi);
    }));
        // close event
        $('#close-event').on('click',(function (e){ 
            e.preventDefault();
            $('#event-popup').toggleClass('event-popup event-popup-close');
        }));
});
// cek width
function updateWidth() {
    var containerWidth = $(window).innerWidth();
        if (containerWidth <= 905) {
            $('.sec-kanan').addClass('d-none');
            $('.kalender').removeClass('d-none');
            $('.kalender-event').addClass('d-none');
        }
        else{
            $('.sec-kanan').removeClass('d-none');
            $('.kalender').addClass('d-none');
            $('.kalender-event').removeClass('d-none');
        }
}