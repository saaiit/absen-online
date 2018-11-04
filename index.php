<?php
session_start();

/** 
 * membuat variable untuk menghindari akses langsung ke file
 */
define('index', 'boleh akses');

require 'load.php';

require includes . '/paging.php';
?>
