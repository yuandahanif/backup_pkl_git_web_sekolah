
<!-- kanan -->
<div class="profile-toggler" id="profile-toggle" style="background: url(<?= BASEURL;?>user/profile/img/<?= $data['profile']['avatar_user']?>);"></div>
    <div class="sec-kanan sub-sec">
        <div class="user">
            <div class="colse" id="close"><i class="fas fa-times"></i></div>
            <div class="img-user" style="background: url(<?= BASEURL;?>user/profile/img/<?= $data['profile']['avatar_user']?>);">
                <div> <i class="fas fa-cog fa-3x "></i> </div>
            </div>
            <a href="" class="nama-user"><?= $data['profile']['nama']?></a>
            <blockquote><?= $data['profile']['quotes']?></blockquote>
            <div class="role">Role : <span><?= $data['profile']['role']?></span></div>
                <div class="tombol-profile" data-control="<?= $data['profile']['tombol_profile']?>">
                    <a href="<?= BASEURL?>profile_siswa" class="edit "><i class="fas fa-user"></i> Profile</a>
                    <a href="<?= BASEURL?>nilai" class="nilai"><i class="far fa-chart-bar"></i> Laporan Nilai</a>
                    <a href="<?= BASEURL?>event" class="kalender d-none"><i class="far fa-calendar-alt"></i> Jadwal Event</a>
                </div>
        </div>
        <div class="kalender-event">
            <div class="event-header">Event Terbaru <span><?= date("Y"); ?></span></div>
                <div class="event-table">
                <?php foreach ($data['event_kanan'] as $no => $index) :?>
                    <?php $i = 0; if(is_numeric($no)) :?>
                        <a class="tanggal-event" href="" data-namaEvent="<?= $index['nama_event'] ?>" data-lokasiEvent="<?= $index['tempat_event'] ?>" data-tanggalMulaiEvent="<?= $index['tanggal_mulai_event'] ?>" data-tanggalAkhirEvent="<?= $index['tanggal_selesai_event'] ?>"   data-descEvent="<?= $index['deskripsi_event'] ?>" data-bulan="<?=$data['event_kanan']['tanggal']['bulan_mulai'][$no] ?>"><?php echo $data['event_kanan']['tanggal']['tanggal_mulai'][$no]; $i++; ?></a>
                    <?php endif;?>
                <?php endforeach;?>
                </div>
        </div>
    </div>