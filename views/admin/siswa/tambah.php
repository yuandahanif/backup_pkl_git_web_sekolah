            <div class="bag-kanan-main">
            <!-- <?php var_dump($data['siswa']);var_dump($_POST);
            ?> -->
                <form action="" method="post" id="tambah-siswa">
                    <!-- kiri -->
                    <div class="form-kiri">
                        <div class="nis">
                            <label for="nis">nis</label>
                            <input type="number" name="nis" id="nis" placeholder="4 angka" value="<?php if (isset($data['siswa'])) { echo $data['siswa']['nis'] ."\" disabled";}?>>
                        </div>
                        <div class="nama">
                            <label for="nama">nama</label>
                            <input type="text" name="nama" id="nama" value="<?php if (isset($data['siswa'])) { echo $data['siswa']['nama'];}?>">
                        </div>
                        <div class="kelas">
                            <label for="kelas">kelas</label>  
                            <input type="radio" name="kelas" <?php if(isset($data['siswa']) && $data['siswa']['kelas'] == 'X') { echo 'checked'; } ?> value="X">X
                            <input type="radio" name="kelas" <?php if(isset($data['siswa']) && $data['siswa']['kelas'] == 'XI') { echo 'checked'; } ?> value="XI">XI
                            <input type="radio" name="kelas" <?php if(isset($data['siswa']) && $data['siswa']['kelas'] == 'XII') { echo 'checked'; } ?> value="XII">XII
                        </div>
                        <div class="jurusan">
                            <label for="jurusan">jurusan</label>
                            <select name="jurusan" id="jurusan">
                                <option value="Rekayasa Perangkat Lunak" <?php if(isset($data['siswa']) && $data['siswa']['jurusan'] == 'Rekayasa Perangkat Lunak') { echo 'selected'; } ?> >Rekayasa Perangkat Lunak</option>
                                <option value="Elektronika Industri" <?php if(isset($data['siswa']) && $data['siswa']['jurusan'] == 'Elektronika Industri') { echo 'selected'; } ?>>Elektronika Industri</option>
                                <option value="Mekatronika" <?php if(isset($data['siswa']) && $data['siswa']['jurusan'] == 'Mekatronika') { echo 'selected'; } ?>>Mekatronika</option>
                            </select>
                        </div>
                        <div class="submit">
                            <button type="submit" id="submit" name="submit"><i class="fas fa-user-plus"></i> Tambah</button>
                        </div>
                    </div>
                    <!-- kanan -->
                    <div class="form-kanan">
                        <div class="nisn">
                            <label for="nisn">nisn</label>
                            <input type="number" name="nisn" id="nisn" placeholder="max 12 angka" maxlength="12" value="<?php if (isset($data['siswa'])) { echo $data['siswa']['nisn'];}?>">
                        </div>
                        <div class="jenis-kelamin">
                            <label for="kelamin">jenis kelamin</label>  
                            <input type="radio" name="kelamin" <?php if(isset($data['siswa']) && $data['siswa']['jenis_kelamin'] == 'laki-laki') { echo 'checked'; } ?> value="laki-laki">laki-laki
                            <input type="radio" name="kelamin" <?php if(isset($data['siswa']) && $data['siswa']['jenis_kelamin'] == 'perempuan') { echo 'checked'; } ?> value="perempuan">perempuan
                        </div>
                        <div class="agama">
                            <label for="agama">Agama</label>
                            <select name="agama" id="agama">
                                <option value="islam" <?php if(isset($data['siswa']) && $data['siswa']['agama'] == 'islam') { echo 'selected'; } ?> >islam</option>
                                <option value="kristen" <?php if(isset($data['siswa']) && $data['siswa']['agama'] == 'kristen') { echo 'selected'; } ?>>kristen</option>
                                <option value="hindu" <?php if(isset($data['siswa']) && $data['siswa']['agama'] == 'hindu') { echo 'selected'; } ?>>hindu</option>
                                <option value="budha" <?php if(isset($data['siswa']) && $data['siswa']['agama'] == 'budha') { echo 'selected'; } ?>>budha</option>
                            </select>
                        </div>
                        <div class="tempat-tanggal">
                            <label for="tempat-tanggal">tempat dan tanggal lahir</label>
                            <div>
                                <input type="text" name="tempat-tanggal" id="tempat-tanggal" value="<?php if (isset($data['siswa'])) { echo $data['siswa']['tempat_lahir'];}?>">
                                <input type="date" name="tanggal-lahir" id="tanggal-lahir" value="<?php if (isset($data['siswa'])) { echo $data['siswa']['tanggal_lahir'];}?>">
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>