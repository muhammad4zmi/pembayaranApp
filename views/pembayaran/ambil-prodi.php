<?php

include "../../config/koneksi.php";
$nim_mhs = $_GET['inputNim'];
$sql_cekprodi = mysqli_query($connect, "SELECT * FROM mahasiswa JOIN prodi WHERE mahasiswa.prodi=prodi.kodeprodi AND mahasiswa.nim='" . $nim_mhs . "'");
$dt_prodi = mysqli_fetch_assoc($sql_cekprodi);
$ada_prodi = mysqli_num_rows($sql_cekprodi);
echo $dt_prodi['prodi'];
//echo $ada_mhs;
