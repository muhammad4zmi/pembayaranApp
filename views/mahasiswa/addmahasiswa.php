<?php
$nim = $_POST['nim'];
$nama_lengkap = $_POST['nama_lengkap'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$prodi = $_POST['prodi'];

// echo $nim;
// die;

//cek 
$cek = mysqli_query($connect, "SELECT * FROM mahasiswa WHERE nim='$nim'");
if (mysqli_num_rows($cek) > 0) {
    $alert = "<div class='alert alert-danger' role='alert'>
   Data sudah ada!
  </div>";
    $_SESSION['alert'] = $alert;
} else {
    $add_data = mysqli_query($connect, "INSERT INTO `mahasiswa` (`nim`, `nama`, `alamat`, `tempatlahir`, `tgl_lahir`, `jeniskelamin`, `prodi`)VALUES('$nim','$nama_lengkap','$alamat','$tempat_lahir','$tgl_lahir','$jk','$prodi')");
    if ($add_data) {
        $alert = "<div class='alert alert-success' role='alert'>
        Data Berhasil disimpan!
       </div>";
        $_SESSION['alert'] = $alert;
    } else {
        echo "Gagal";
    }
}
?>
<script type="text/javascript">
    document.location = "index.php?page=mahasiswa";
</script>