<?php

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    $module = $page;
} else {
    $module = "";
}
switch ($module) {
    //------------Route Untuk Halaman Beranda------------//
    case 'dasboard': case '':
    require("views/dasboard/index.php");
    break;

    //------------Route Untuk Halaman Data mahasiswa-----------//
    case 'mahasiswa' :
    require("views/mahasiswa/index.php");
    break;
    
    
    default :
    require("404.php");
    break;
}
?>