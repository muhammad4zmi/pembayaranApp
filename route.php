<?php

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    $module = $page;
} else {
    $module = "";
}
switch ($module) {
        //------------Route Untuk Halaman Beranda------------//
    case 'dasboard':
    case '':
        require("views/dasboard/index.php");
        break;

        //------------Route Untuk Halaman Data mahasiswa-----------//
    case 'mahasiswa':
        require("views/mahasiswa/index.php");
        break;
    case 'add-mahasiswa':
        require("views/mahasiswa/create.php");
        break;
    case 'addMahasiswa':
        require("views/mahasiswa/addmahasiswa.php");
        break;
    case 'deleteMahasiswa':
        require("views/mahasiswa/delete-mahasiswa.php");
        break;
    case 'edit-mahasiswa':
        require("views/mahasiswa/edit-mahasiswa.php");
        break;
    case 'pembayaran':
        require("views/pembayaran/pembayaran.php");
        break;
    case 'list':
        require("views/pembayaran/list.php");
        break;
    case 'pencarian':
        require("views/pembayaran/cari.php");
        break;



    default:
        require("404.php");
        break;
}
