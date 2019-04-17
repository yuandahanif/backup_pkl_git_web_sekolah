<div class="bag-kanan-main">
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
                        <td><a href="" class="edit"> <i class="far fa-edit"></i> edit</a></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </section>