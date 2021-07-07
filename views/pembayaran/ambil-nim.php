<?php

include "../../config/koneksi.php";
$nim_mhs = $_GET['inputNim'];
$sql_ceknim = mysqli_query($connect, "select * from mahasiswa
                    where nim='" . $nim_mhs . "'");
$dt_nama = mysqli_fetch_assoc($sql_ceknim);
$ada_mhs = mysqli_num_rows($sql_ceknim);
echo $dt_nama['nama'];
