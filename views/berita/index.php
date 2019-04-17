<section class="container-berita">
    <!-- kiri -->
    <div class="sub-sec sec-kiri">
        <?php foreach ($data['berita'] as $berita) :?>
            <div class="berita">
                <div class="img-berita" style="background: url(<?= BASEURL;?>images/asset/berita/<?= $berita['gambar_berita']?>);">
                </div>
                <div class="content-berita">
                    <a class="judul-berita" href="<?= BASEURL;?>pageberita/<?= $berita['id_berita']?>"><?= $berita['judul_berita']?></a>
                    <div class="tanggal-berita"><?= $berita['tanggal_dibuat']?></div>
                    <article class="artikel-berita">
                        <p><?= $berita['isi_berita']?></p>
                    </article>
                </div>
            </div>
        <?php endforeach;?>

        <!-- pagnation -->
        <ul class="pagination">
        <?php if ($data['curPage'] > 1):?>
            <li><a href="<?=$data['curPage']-1?>">&lt;</a></li>
        <?php endif;?>
            <?php for($i=1;$data['pagination']>=$i;$i++) :?>
                <?php if ($i == $data['curPage']) :?>
                    <li><a href="<?=BASEURL.'berita/'.$i?>" class="selected-page"><?=$i?></a></li>
                    <?php continue;?>
                <?php endif;?>
                <li><a href="<?=BASEURL.'berita/'.$i?>"><?=$i?></a></li>
            <?php endfor;?>
        <?php if ($data['curPage'] < $data['pagination']):?>
            <li><a href="<?=$data['curPage']+1?>">&gt;</a></li>
        <?php endif;?>
        </ul>
    </div>