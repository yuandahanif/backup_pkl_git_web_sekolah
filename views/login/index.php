<section class="container">
        <div class="konten-kiri con-sec">
            <img class="logo-smk" src="<?= BASEURL; ?>images\smk-logo.png" alt="">
        </div>
        <div class="login con-sec">
            <form action="" method="post" id="login">
                <div class="title">SMK N TEMBARAK</div>
                <div class="username">
                    <input required type="text" name="username" id="username" placeholder="Username" autofocus>
                </div>
                <div class="password">
                    <input required type="password" name="password" id="password" placeholder="password">
                </div>
                <div class="sigin">
                    <button type="submit" name="login">login</button>
                </div>
                <p class="flash-msg" id="">
                    <?= Flasher::flash();?>
                </p>
                <p class="text-sigup">Don't have account <a href="<?= BASEURL;?>register">register</a></p>
            </form>
        </div>
    </section>