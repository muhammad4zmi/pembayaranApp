<?php
include "../../config/koneksi.php";
$baca = mysqli_query($connect, "select * from jenis_pembayaran where jenis='" . $_POST["md"] . "'");
while ($r = mysqli_fetch_array($baca)) {

?>
    <option name="periode" value="<?php echo $r["periode"] ?>"><?php echo $r["periode"] ?></option>

<?php
}



?>