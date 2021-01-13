<?php
session_start();
if (!isset($_SESSION['id_user'])) {
    $_SESSION['id_user'] = 'id_'.mt_rand(0, 10000)."_user";
}