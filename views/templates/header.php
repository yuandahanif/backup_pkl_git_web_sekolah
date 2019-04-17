<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $data['title'] ?></title>
    <link href="http://smkntembarak.sch.id/templates/unitrii-et/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <link rel="stylesheet" href="<?= BASEURL?>css\reset css v1.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
    <?php if (isset($data['css'])) :?>
        <?php foreach ($data['css'] as $css ):?>
    <link rel="stylesheet" href="<?= BASEURL?>css/<?= $css ?>.css">
        <?php endforeach;?>
    <?php endif;?>
    
    <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
</head>
<body>

<!-- nav landing -->
<header class="grade-hitam">
        <nav>
            <a class="nav-brand" href="<?= BASEURL?>"><img src="<?= BASEURL?>images/smk-logo.png" alt="" /></a>
            <a class="menu-toggle"><i class="fas fa-bars"></i></a>
            <div class="nav-kanan">
                <ul>
                    <li><a href="<?= BASEURL?>berita" class="link-nav">BERITA</a></li>
                    <li><a href="<?= BASEURL?>profile" class="link-nav">PROFILE</a></li>
                    <li><a href="<?= BASEURL?>event" class="link-nav">EVENT</a></li>
                    <?php if ($data['login'] === 'login'):?>
                        <li><a class="login" href="<?= BASEURL?>logout">LOGOUT</a></li>
                    <?php else:?>
                        <li><a class="login" href="<?= BASEURL?>login">LOGIN</a></li>
                    <?php endif;?>
                </ul>
            </div>
            <div class="clearfix"></div>
        </nav>
    </header>