$(function () {
    let b = $('.bulan').attr('data-bulan');
    for (let i = 0; i < b.length; i++) {
        let foo = $('.bulan');
        $(foo).text(ubahBulan(b));
    };

    $('.bulan').each(function (index, element) {
        // element == this
        
        $(element).text(ubahBulan($(element).attr('data-bulan')));
        
    });
});
function ubahBulan($b) { 
    let bulan = ['JAN','FEB','MAR','APR','MEI','JUN','JUL','AGS','SEP','OKT','NOV','DES'];
    return(bulan[$b-1]);
    
 }