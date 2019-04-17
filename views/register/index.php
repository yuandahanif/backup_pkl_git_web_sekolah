<section class="container">
        <div class="konten-kiri con-sec">
            <img class="logo-smk" src="<?= BASEURL; ?>images\smk-logo.png" alt="">
        </div>
        <div class="login con-sec">
            <form action="" method="post" id="register">
                <div class="title">SMK N TEMBARAK</div>
                <div class="nis">
                    <input required type="text" name="nis" id="nis" placeholder="Nis" autofocus>
                    <p class="nis-msg" id=""></p>
                </div>
                <div class="username">
                    <input required type="text" name="username" id="username-sigup" placeholder="Username" autofocus>
                    <p class="username-msg" id=""></p>
                </div>
                <div class="email">
                    <input required type="email" name="email" id="email" placeholder="email">
                    <p class="email-msg" id=""></p>
                </div>
                <!-- pass -->
                <div class="password">
                    <input required type="password" name="password" id="password-sigup" placeholder="password">
                    <p id="pass_eq_atas"></p>
                </div>
                <div class="re-password">
                        <input required type="password" name="re-password" id="re-password-sigup" placeholder="enter password again">
                        <p id="pass_eq"></p>
                    </div>
                    <!-- end pass -->
                <div class="sigin">
                    <button type="submit" name="register">register</button>
                </div>
                <p class="flash-msg" id="">
                    <?= Flasher::flash();?>
                </p>
                <p class="text-sigup">Already have an account <a href="<?= BASEURL;?>login">login</a></p>
            </form>
        </div>
    </section>