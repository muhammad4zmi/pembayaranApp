<?php
$nim = $_GET['nim'];
$queryDelete = mysqli_query($connect, "DELETE FROM mahasiswa WHERE nim='$nim'");
if ($queryDelete) {
    $alert = "<div class=\"alert alert-success alert-dismissable\" id='pesan'>
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                <strong>Berhasil!</strong> Data Mahasiswa berhasil di hapus!.
              </div>";
    $_SESSION['alert'] = $alert;
} else {
    $alert = "<div class=\"alert alert-danger alert-dismissable\" id='pesan'>
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                <strong>Gagal!</strong><br/> Data mahasiswa Gagal Di Hapus.
              </div>";
    $_SESSION['alert'] = $alert;
}
?>
<script type="text/javascript">
    document.location = "index.php?page=mahasiswa";
</script>