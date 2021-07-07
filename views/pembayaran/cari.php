<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Form Pembayaran Mahasiswa

    </h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Pembayaran Data Mahasiswa</h6>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3 row">
                                <label for="" class="col-sm-2 col-form-label">Mahasiswa</label>
                                <div class="col-sm-10">
                                    <select class="form-control select2bs4" id="mapel" style="width: 100%;" name="nim" required>

                                        <?php
                                        // include "../../config/koneksi.php";
                                        $querySeacrh = mysqli_query($connect, "SELECT * FROM mahasiswa WHERE nim ORDER BY nim ASC");
                                        foreach ($querySeacrh as $m) : ?>
                                            <option value="">Cari Mahasiswa Berdasarkan NIM atau NAMA</option>
                                            <option value="<?= $m['nim']; ?>"><?= $m['nim'] . ' - ' . $m['nama']; ?></option>

                                        <?php endforeach; ?>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-sm" name="proses"><i class="fas fa-search fa-sm"></i> Cari Mahasiswa</button>
                            </div>

                        </div>



                    </div>

                </div>
            </form>
            <script src="http://localhost:8888/pembayaranApp/vendor/jquery/jquery.min.js"></script>
            <script>
                $(document).ready(function() {

                    // $("#ketDenda").hide();
                    $("#detail").hide();
                });
            </script>


        </div>
    </div>

    <!--proses -->
    <?php if (isset($_POST['proses'])) : ?>
        <script>
            $(document).ready(function() {
                $("#detail").show(0);
            });
        </script>
        <?php
        $nim = $_POST['nim'];
        $queryCari = mysqli_query($connect, "SELECT * FROM mahasiswa JOIN prodi WHERE mahasiswa.prodi=prodi.kodeprodi AND mahasiswa.nim='$nim'");
        foreach ($queryCari as $m) {
            $nim = $m['nim'];
            $nama = $m['nama'];
            $kdprodi = $m['kodeprodi'];
            $prodi = $m['prodi'];
            $jk = $m['jeniskelamin'];
        }
        ?>
    <?php endif; ?>



    <!--detail pembayaran-->

    <div class="card shadow mb-4" id="detail">
        <div class="card-header">
            <!-- <h6 class="m-0 font-weight-bold text-primary">Form Detail Pembayaran Mahasiswa <?= $nama; ?></h6> -->
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="card mb-4 py-3 border-primary">
                                <div class="card-body">
                                    <h4 align="center">Detail Pembayaran <span class="badge badge-info"><?= $nim . ' - ' . $nama; ?></span></h4>
                                    <form action="">
                                        <div class="table-responsive">

                                            <table class="table responsive">
                                                <tr>
                                                    <td width="10%">NIM</td>
                                                    <td width="1%">:</td>
                                                    <td width=20%><input type="text" name="nim" class="form-control" value="<?= $nim; ?>" style="font-size: 12px;" readonly>
                                                        <input type="hidden" value="<?= $username; ?>">
                                                    </td>
                                                    <td width="10%">Nama Mahasiswa</td>
                                                    <td width="1%">:</td>
                                                    <td width=20%><strong><b><?php echo $nama; ?></b></strong></td>
                                                </tr>
                                                <tr>
                                                    <td width="10%">Program Studi</td>
                                                    <td width="1%">:</td>
                                                    <td width=20%><input type="hidden" name="prodi" value="<?= $kdprodi; ?>" style="font-size: 12px;" readonly><?= $prodi; ?></td>
                                                    <td width="10%">Jenis Kelamin</td>
                                                    <td width="1%">:</td>
                                                    <td width=20%><?= $jk; ?></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>

                                                </tr>
                                                <!-- <tr>
                                            <td>Kelas/Semester</td>
                                            <td>:</td>
                                            <td><strong><b></b></strong></td>
                                        </tr>
                                        <tr>
                                            <td>Wali Kelas</td>
                                            <td>:</td>
                                            <td><strong><b></b></strong></td>
                                        </tr>
                                        <tr>
                                            <td>Tahun Pelajaran</td>
                                            <td>:</td>
                                            <td><input type="text" name="tahun" class="form-control" required placeholder="Contoh: 2018/2019"></td>
                                        </tr> -->

                                            </table>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="telepon">Jenis Pembayaran</label>
                                                    <select name="jenis" id="jenis" class="form-control" style="width: 100%;">
                                                        <option value="">Pilih Jenis Pembayaran</option>
                                                        <?php $jenis = mysqli_query($connect, "SELECT * FROM jenis_pembayaran");
                                                        foreach ($jenis as $p) : ?>
                                                            <option value="<?= $p['jenis']; ?>"><?= $p['jenis']; ?></option>
                                                        <?php endforeach; ?>

                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Status Pembayaran</label>
                                                    <select name="status" id="status" class="form-control" required>
                                                        <option>Pilih Status</option>
                                                        <option value="Lunas">Lunas</option>
                                                        <option value="Dispensasi">Dispensasi</option>

                                                    </select>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="telepon">Periode</label>
                                                    <select name="prodi" id="periode" class=" form-control" required>
                                                        <option value="">Pilih Periode</option>


                                                    </select>
                                                </div>
                                                <div class="form-group" id="tgl_bayar">
                                                    <label for="nama">Tanggal Bayar *</label>
                                                    <input type="text" name="tgl_bayar" id="tgl" class="form-control" placeholder="Masukkan tanggal Bayar" data-provide="datepicker">

                                                </div>
                                                <div class="form-group">
                                                    <label>Nominal</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">Rp.</div>
                                                        </div>
                                                        <select id="nominal" class="form-control">
                                                            <option value="">Masukkan Nominal</option>
                                                        </select>

                                                    </div><!-- /.input group -->
                                                </div><!-- /.form group -->
                                                <!-- <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">Rp.</div>
                                                    </div>
                                                    <input type="text" class="form-control" id="harga" name="harga" autocomplete="off">
                                                </div> -->

                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="text-right">
                                                <a href="?page=mahasiswa" class="btn btn-sm btn-danger" name="kembali">
                                                    <i class="fas fa-arrow-left"></i>
                                                    Kembali</a>
                                                <button type="submit" name="btn_simpan" class="btn btn-sm btn-success">
                                                    <i class="fas fa-save"></i>
                                                    Payment </button>

                                            </div>
                                        </div>
                                    </form>

                                </div>

                            </div>

                        </div>




                    </div>

                </div>
            </form>



        </div>
    </div>

</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {

        $("#tgl_bayar").hide();
        $("#status").change(function() {
            var kps = $("#status").val();
            if (kps == "Dispensasi") {
                $("#tgl_bayar").show(0);
            } else {
                $("#tgl_bayar").hide(0);

            }
        });
    });
    // $("#ketTotal").show(0);
    // $("#jmlBayar").val(jmlPembayaran);
    // $("#jmlDenda").val(0);
</script>
<script>
    $(document).ready(function() {
        $("#jenis").change(function() {

            var id_md = $("#jenis").val();
            $.ajax({
                type: "POST",
                dataType: "html",
                url: "views/pembayaran/ambil-jenis.php",
                data: "md=" + id_md,
                success: function(msg) {
                    if (msg == '') {
                        alert('Tidak ada data jenis');
                    } else {
                        $("#periode").html(msg);


                    }
                }
            });

            $.ajax({
                type: "POST",
                dataType: "html",
                url: "views/pembayaran/ambil-nominal.php",
                data: "md=" + id_md,
                success: function(msg) {
                    if (msg == '') {
                        alert('Tidak ada data Nominal');
                    } else {
                        $("#nominal").html(msg);


                    }
                }
            });

        });
    });
</script>