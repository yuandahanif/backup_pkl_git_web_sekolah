<?php
class Flasher{
    static function setFlash($pesan)
    {
        $_SESSION['pesan'] = $pesan;
    }
    static function flash()
    {
        if (isset($_SESSION['pesan'])) {
            echo ('*'.$_SESSION['pesan']);
            unset($_SESSION['pesan']);
                if (isset($_SESSION['pesan'])) {
                    session_unset($_SESSION['pesan']);
                }
        }
    }
}