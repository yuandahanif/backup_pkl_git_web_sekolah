            <div class="bag-kanan-main">
                <table>
                    <tr>
                        <th>nisn</th>
                        <th>nis</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>Jenis Kelamin</th>
                        <th>Setting</th>
                    </tr>
                    <!-- isi -->
                    <?php foreach ($data['siswa'] as $numb => $s) :?>
                    <tr>
                        <td><?= $s['nisn'] ?></td>
                        <td><?= $s['nis'] ?></td>
                        <td><?= $s['nama'] ?></td>
                        <td><?= $s['kelas'] ?></td>
                        <td><?= $s['jurusan'] ?></td>
                        <td><?= $s['jenis_kelamin'] ?></td>
                        <td><a href="<?= BASEURL ?>_mimindev/tambahSiswa/<?= $s['nis'] ?>" class="edit"> <i class="far fa-edit"></i> edit</a></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </section>