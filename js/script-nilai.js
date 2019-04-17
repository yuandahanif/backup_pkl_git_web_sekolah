$(document).ready(function () {
    let conNilai = $('.nilai-akhir > div');
for (let i = 0 ; i < conNilai.length ; i++) {
    cekNilaiAkhir(conNilai[i]);
}

// disable click nilai
$('.daftar-nilai ul li a').click(function (e) { 
    e.preventDefault();
});
// tombol nilai on click
$('.nilai-header').on('click',(function (e){ 
    e.preventDefault();
    $('.event-laporan-nilai').toggleClass('show-nilai');
}));
// close nilai | click outside
const $nilai = $('.event-laporan-nilai');
    $(document).mouseup(function (e) {
        if (!$nilai.is(e.target) // if the target of the click isn't the container...
    && $nilai.has(e.target).length === 0) // ... nor a descendant of the container
    {
        $nilai.removeClass('show-nilai');
    }
    });
    $('.toggle').on('click', () => {
    $nilai.toggleClass('show-nilai');
    });

});

// fun cek nilai
function cekNilaiAkhir(e) {
    let eAkhir = $(e).attr('data-'+e.className);
    if (eAkhir >= 0 && eAkhir < 70) {
        $(e).addClass('nilai-rendah');
    } else if(eAkhir >= 70 && eAkhir <= 80) {
        $(e).addClass('nilai-cukup');
    }else if(eAkhir >= 80){
        $(e).addClass('nilai-tinggi');
    }
}
