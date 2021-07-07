<?php
include "../../config/koneksi.php";
$baca = mysqli_query($connect, "SELECT * FROM jenis_pembayaran WHERE jenis='" . $_POST["md"] . "'");
while ($r = mysqli_fetch_array($baca)) {

?>

    <option name="nominal" value="<?php echo number_format($r["nominal"]); ?>"><?php echo $r["nominal"] ?></option>
<?php
}



?>