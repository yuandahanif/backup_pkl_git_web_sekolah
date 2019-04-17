            <div class="bag-kanan-main">
                <form action="" method="post">
                    <button type="submit" id="hapus"><i class="far fa-trash-alt"></i> hapus kumpulan</button>
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
                    <?php foreach ($data['siswa'] as $n => $s) :?>
                    <tr>
                        <td><?= $s['nisn'] ?></td>
                        <td><?= $s['nis'] ?></td>
                        <td><?= $s['nama'] ?></td>
                        <td><?= $s['kelas'] ?></td>
                        <td><?= $s['jurusan'] ?></td>
                        <td><?= $s['jenis_kelamin'] ?></td>
                        <td><input type="checkbox" name="hapus" value="<?= $s['nis'] ?>"> | <a href="<?= BASEURL ?>_mimindev/hapus/data_siswa/nis/<?= $s['nis'] ?>" class="hapus"><i class="far fa-trash-alt"></i> hapus</a></td>
                    </tr>
                    <?php endforeach; ?>
                    
                </table>
                </form>
            </div>
        </div>
    </section>