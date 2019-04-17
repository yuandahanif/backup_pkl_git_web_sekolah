<!-- landing -->
<section class="container-berita">
    <!-- kiri -->
    <div class="sub-sec sec-kiri">
        <!-- kiri -->
        <div class="nilai-kiri sub-nilai">
            <div class="nilai-header"> <h1>Ulangan Tengah Semester <span><?= $data['nilai']['semester']?></span> </h1> </div>
            <div class="daftar-nilai">
                <ul>
                    <?php foreach ($data['nilai']['sem_gasal'] as $semester => $mapel): ?>
                        <?php foreach ($mapel as $m => $nilai): ?>
                        
                            <li><a href=""><?= $m ?></a><span><?= $nilai ?></span></li>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </ul>
                <div class="nilai-akhir">
                <div class="nilai-terendah" data-nilai-terendah="<?= min($data['nilai']['sem_gasal'][0]) ?>"><span class="keterangan-nilai-akhir">Nilai Terendah</span></div>
                    <div class="nilai-rata-rata" data-nilai-rata-rata="<?= round(array_sum($data['nilai']['sem_gasal'][0])/count($data['nilai']['sem_gasal'][0])) ?>"><span class="keterangan-nilai-akhir">Nilai Rata-Rata</span></div>
                    <div class="nilai-tertinggi" data-nilai-tertinggi="<?= max($data['nilai']['sem_gasal'][0]) ?>"><span class="keterangan-nilai-akhir">Nilai Tertinggi</span></div>
                </div>
            </div>
        </div>
        <!-- kanan -->
        <div class="nilai-kiri sub-nilai">
            <div class="nilai-header"> <h1>Ulangan Akhir Semester <span><?= $data['nilai']['semester']?></span> </h1> </div>
            <div class="daftar-nilai">
                <ul>
                <?php foreach ($data['nilai']['sem_genap'] as $semester => $mapel): ?>
                        <?php foreach ($mapel as $m => $nilai): ?>
                            <li><a href=""><?= $m ?></a><span><?= $nilai ?></span></li>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </ul>
                <div class="nilai-akhir">
                    <div class="nilai-terendah" data-nilai-terendah="<?= min($data['nilai']['sem_genap'][0]) ?>"><span class="keterangan-nilai-akhir">Nilai Terendah</span></div>
                    <div class="nilai-rata-rata" data-nilai-rata-rata="<?= round(array_sum($data['nilai']['sem_genap'][0])/count($data['nilai']['sem_genap'][0])) ?>"><span class="keterangan-nilai-akhir">Nilai Rata-Rata</span></div>
                    <div class="nilai-tertinggi" data-nilai-tertinggi="<?= max($data['nilai']['sem_genap'][0]) ?>"><span class="keterangan-nilai-akhir">Nilai Tertinggi</span></div>
                </div>
            </div>
        </div>
    </div>
