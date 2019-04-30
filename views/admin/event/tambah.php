<div class="bag-kanan-main">
                <form action="" method="post" id="tambah-siswa">
                    <!-- kiri -->
                    <div class="form-kiri">
                        <div class="nama">
                            <label for="nama">nama</label>
                            <input type="text" name="nama" id="nama" value="<?php if (isset($data['event'])) { echo $data['event']['nama_event'];}?>">
                        </div>
                        <div class="tempat">
                            <label for="tempat">tempat</label>
                            <input type="text" name="tempat" id="tempat" value="<?php if (isset($data['event'])) { echo $data['event']['tempat_event'];}?>">
                        </div>
                        <div class="tempat-tanggal">
                            <label for="tempat-tanggal">tanggal mulai dan selesai</label>
                            <div>
                                <input type="date" name="tanggal-mulai" id="tanggal-lahir" value="<?php if (isset($data['event'])) { echo $data['event']['tanggal_mulai_event'];}?>">
                                <input type="date" name="tanggal-selesai" id="tanggal-lahir" value="<?php if (isset($data['event'])) { echo $data['event']['tanggal_selesai_event'];}?>">
                            </div>
                        </div>
                        <div class="submit">
                            <button type="submit" id="tambah"><i class="fas fa-plus"></i> Tambah</button>
                        </div>
                    </div>
                    <!-- kanan -->
                    <div class="form-kanan">
                        <div class="deskripsi">
                            <label for="deskripsi">deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" cols="50" rows="9" placeholder="deskripsi...."><?php if (isset($data['event'])) { echo $data['event']['deskripsi_event'];}?></textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>