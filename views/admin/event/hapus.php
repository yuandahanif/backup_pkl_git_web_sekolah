<div class="bag-kanan-main">
                <form action="" method="post">
                    <button type="submit" id="hapus"><i class="far fa-trash-alt"></i> hapus kumpulan</button>
                <table>
                    <tr>
                        <th>no</th>
                        <th>Nama</th>
                        <th>tempat</th>
                        <th>tanggal mulai</th>
                        <th>tanggal selesai</th>
                        <th>Setting</th>
                    </tr>
                    <!-- isi -->
                    <?php  $i = 1; foreach ($data['event'] as $n => $e) :?>
                    <tr>
                        <td><?php echo $i; $i +=1; ?></td>
                        <td><?= $e['nama_event'] ?></td>
                        <td><?= $e['tempat_event'] ?></td>
                        <td><?= $e['tanggal_mulai_event'] ?></td>
                        <td><?= $e['tanggal_selesai_event'] ?></td>
                        <td><input type="checkbox" name="hapus" value="id"> | <a href="" class="hapus"><i class="far fa-trash-alt"></i> hapus</a></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
                </form>
            </div>
        </div>
    </section>