<section class="container-landing">
        <img class="logo-smk" src="<?= BASEURL?>images/smk-logo.png" alt="LOGO SMK">
        <div class="title-container">
                <h1 class="title-welcome">welcome to </h1>
                <h1 class="title-smk"> SMK NEGERI TEMBARAK</h1>
            </div>
    </section>
    <section class="jurusan">
        <div class="sub-con-jurusan">
            <a href=""><img src="<?= BASEURL?>images/rpl.png" alt="">
            Rekayasa perangkat lunak</a>
            <a href=""><img src="<?= BASEURL?>images/elind.png" alt="">
            Elektronika industri</a>
            <a href=""><img src="<?= BASEURL?>images/meka.png" alt="">
            Mekatronika</a>
        </div>
    </section>
    <section class="container-visimisi">
        <div class="sub-con-visimisi">
            <h1>visi</h1>
            <p>Menjadikan SMK N I Tembarak sebagai lembaga pendidikan unggulan, bertaraf  Nasional/Internasional  dan mampu bersaing di tingkat  global yang menghasilkan tamatan berkualitas  yang kompeten dan mandiri melalui pengembangan IMTAQ dan IPTEK.</p>
        </div>
        <div class="sub-con-visimisi">
            <h1>misi</h1>
            <p>
                <ol>
                    <li> Meningkatkan profesionalisme dan good governance SMK N  I Tembarak sebagai pusat pemberdayaan kompetensi.</li>
                    <li>Memberdayakan SMK untuk mengembangkan potensi lokal menjadi keungolan komparatif dengan mengembangkan keselarasan pengembangan teknologi dan lingkungan</li>
                    <li>Meningkatkan perluasan dan pemerataan  akses pendidikan kejuruan yang bermutu</li>
                    <li>Memberikan layanan prima terhadap warga sekolah  dalam semua aspek sarana dan prasarana untuk menghasilkan tenaga  kerja yang kompoten dan mandiri.</li>
                    <li>Mengintegrasikan IMTAQ dan IPTEK dalam proses pembelajaran untuk menghasilkan  tamatan yang berilmu pengetahuan, terampil,  berahlak mulia, beriman dan bertaqwa kepada Tuhan Yang Maha Esa.</li>
                    <li>Meningkatkan kualitas tamatan yang sesuai dengan standar Kompetensi Nasional (SKN) dalam menghadapi  Era Globalisasi.</li>
                    <li>Meningkatkan mutu sumber daya Manusia melalui dukungan IMTAQ  dan IPTEK</li>
                    <li>Melaksanakan KBM dan kegiatan Extra kurikuler untuk mengembangkan minat dan bakat dalam meraih prestasi, berbudi pekerti luhur dan berahlak mulia</li>
                </ol>
            </p>
        </div>
    </section>
    <section class="gallery">
        <div class="sub-con-gallery" id="photos">
            <?php for ($i = 0; $i < 9; $i++):?>
                <a class="photo" style="background-image:url(images/gallery/a<?= ($i+1) ?>-min.jpg" href=""></a>
            <?php endfor; ?>
        </div>
    </section>

    <!-- footer -->
    <section class="footer d-flex">
        <div class="foo-kiri">
            <a href="">This isn't SMK N Tembarak original site</a>
        </div>
        <div class="foo-tengah">
            <a href="">made with <i class="fas fa-heart"></i> by @yuaaaa </a>
        </div>
        <div class="foo-kanan">
            <ul class="social-media">
                <li><a href=""><i class="fab fa-facebook-square"></i></a></li>
                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                <li><a href=""><i class="fab fa-google-plus-square"></i></a></li>
                <li><a href=""><i class="fab fa-github-square"></i></a></li>
            </ul>
        </div>
    </section>