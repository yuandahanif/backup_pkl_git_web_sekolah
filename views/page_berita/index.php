<section class="container-berita">
        <!-- kiri -->
        <div class="sub-sec sec-kiri">
            <div class="judul-berita"><?= $data['berita']['judul_berita'];?></div>
            <div class="tanggal-berita"><?= $data['berita']['tanggal_dibuat'];?></div>
            <div class="gambar-berita" style="background-image : url(<?=BASEURL?>images/asset/berita/<?= $data['berita']['gambar_berita'];?>);">
            </div>
            <div class="isi-berita">
                <p>
                    <?= $data['berita']['isi_berita'];?>
                </p>
            </div>
        </div>