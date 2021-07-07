<?php
include "../../config/koneksi.php";
$baca = mysqli_query($connect, "select * from jenis_pembayaran where jenis='" . $_POST["md"] . "'");
while ($r = mysqli_fetch_array($baca)) {

?>

    <option name="bts" value="<?php echo $r["bts_pembayaran"] ?>"><?php echo $r["bts_pembayaran"] ?></option><br>
<?php
}



?>