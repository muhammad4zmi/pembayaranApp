<?php
include "../../config/koneksi.php";
$cari = $_GET['nim'];
$queryCari = mysqli_query($connect, "SELECT * FROM mahasiswa JOIN prodi WHERE mahasiswa.prodi=prodi.kodeprodi AND mahasiswa.nim='$cari'");
if (mysqli_num_rows($queryCari) > 0) {
    foreach ($queryCari as $data) {
        echo $data['nim'];
        echo $data['nama'];
        echo $data['prodi'];
    }
} else {
    echo "data tidak ada!";
}
