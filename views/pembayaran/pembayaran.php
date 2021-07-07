<?php
include "../../config/koneksi.php";
$cari = $_GET['nim'];
$queryCari = mysqli_query($connect, "SELECT * FROM mahasiswa JOIN prodi WHERE mahasiswa.prodi=prodi.kodeprodi AND mahasiswa.nim='$cari'");
if (mysqli_num_rows($queryCari) > 0) {
    ?>
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
                                    <input type="text" class="form-control" id="" name="nim">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary" name="proses" id="klik">Cari Mahasiswa</button>
                            </div>
                        </div>



                    </div>

                </div>
            </form>



        </div>
    </div>

    <!--keterangan detail-->
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
                                    <input type="text" class="form-control" id="" name="nim">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary" name="proses" id="klik">Cari Mahasiswa</button>
                            </div>
                        </div>



                    </div>

                </div>
            </form>



        </div>
    </div>
</div>