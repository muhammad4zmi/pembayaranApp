<?php

//membuat koneksi ke database
include "../../config/koneksi.php";

//variabel nim yang dikirimkan form.php
$nim = $_GET['nim'];

//mengambil data
$query = mysqli_query($connect, "select * from mahasiswa where nim='$nim'");
$mahasiswa = mysqli_fetch_array($query);
$data = array(
    'nama'      =>  $mahasiswa['nama']
    // 'jeniskelamin'      =>  $mahasiswa['jeniskelamin'],
    // 'jurusan'   =>  $mahasiswa['jurusan'],
    // 'notelp'      =>  $mahasiswa['notelp'],
    // 'email'      =>  $mahasiswa['email'],
    // 'alamat'    =>  $mahasiswa['alamat'],
);

//tampil data
echo json_encode($data);
