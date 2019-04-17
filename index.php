<?php
if (!session_id())session_start();

require_once "setting/init.php";
$app = new App();