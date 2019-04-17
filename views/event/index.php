<section class="container-berita">
    <!-- kiri -->
    <div class="sub-sec sec-kiri">
        <!-- aaaa -->
        <?php foreach ($data['event'] as $no => $index) :?>
            <?php $i = 0; if(is_numeric($no)) :?>
                <!-- event list -->
                <div class="list-event">
                    <div class="list-kiri">
                        <div class="tanggal"><?php echo $data['event']['tanggal']['tanggal_mulai'][$no]; ?> - <?php echo $data['event']['tanggal']['tanggal_selesai'][$no];?></div>
                        <div class="bulan" data-bulan="<?php echo $data['event']['tanggal']['bulan_mulai'][$no]; $i++; ?>"></div>
                    </div>
                    <div class="list-kanan">
                            <a href="#" class="nama-acara"><?= $index['nama_event'] ?></a>
                            <p class="deskripsi-acara">
                                <?= $index['deskripsi_event'] ?>
                            </p>
                    </div>
                    <div class="kanan-banget">
                    <i class="fas fa-map-marked-alt"></i>
                    <p><?= $index['tempat_event'] ?></p>
                    </div>
                </div>
            <?php endif;?>
        <?php endforeach;?>

        
        <ul class="pagination">
        <?php if ($data['curPage'] > 1):?>
            <li><a href="<?=$data['curPage']-1?>">&lt;</a></li>
        <?php endif;?>
            <?php for($i=1;$data['pagination']>=$i;$i++) :?>
                <?php if ($i == $data['curPage']) :?>
                    <li><a href="<?=BASEURL.'event/'.$i?>" class="selected-page"><?=$i?></a></li>
                    <?php continue;?>
                <?php endif;?>
                <li><a href="<?=BASEURL.'event/'.$i?>"><?=$i?></a></li>
            <?php endfor;?>
        <?php if ($data['curPage'] < $data['pagination']):?>
            <li><a href="<?=$data['curPage']+1?>">&gt;</a></li>
        <?php endif;?>
        </ul>
    </div>
