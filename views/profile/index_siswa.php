<section class="container-berita">
        <!-- kiri -->
        <div class="sub-sec sec-kiri">
            <div class="bag-1">
                <div class="kiri">
                    <div class="img-profile" style="background-image: url(<?= BASEURL?>user/profile/img/<?= $data['siswa']['avatar_user']?>);"></div>
                </div>
                <div class="kanan">
                    <div class="nama"><?= $data['siswa']['nama'] ?></div>
                    <blockquote class="status"><?= $data['siswa']['quotes'] ?></blockquote>
                </div>
            </div>
            <div class="bag-2">
                <table>
                    <tr>
                        <td><p>Nisn</p></td><td><p>: <?= $data['siswa']['nisn'] ?></p></td>
                    </tr>
                    <tr>
                        <td><p>Nis</p></td><td><p>: <?= $data['siswa']['nis'] ?></p></td>
                    </tr>
                    <tr>
                        <td><p>kelas</p></td><td><p>: <?= $data['siswa']['kelas'] .' '. $data['siswa']['jurusan'] ?></p></td>
                    </tr>
                    <tr>
                        <td><p>Jenis Kelamin</p></td><td><p>: <?= $data['siswa']['jenis_kelamin'] ?></p></td>
                    </tr>
                    <tr>
                        <td><p>Agama</p></td><td><p>: <?= $data['siswa']['agama'] ?></p></td>
                    </tr>
                    <tr>
                        <td><p>Tempat dan Tanggal Lahir</p></td><td><p>: <?= $data['siswa']['tempat_lahir'].', '.$data['siswa']['tanggal_lahir'] ?></p></td>
                    </tr>
                </table>
            </div>
        </div>
    