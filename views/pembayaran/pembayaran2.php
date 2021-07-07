<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Form Add Mahasiswa

    </h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Add Data Mahasiswa</h6>
        </div>
        <div class="card-body">
            <form class="user" method="POST" action="?page=addMahasiswa">
                <div class="col-lg-12" id="pesan">
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <label for="nama" style="font-size: 12px;">Nim *</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Cari Berdasarkan NIM" aria-label="Search" aria-describedby="basic-addon2" style="font-size: 12px;" id="inputNim" value="" name="nim" title="" data-toggle="tooltip" data-original-title="Gunakan Nim Untuk Mencari Mahasiswa" autofocus>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary btn-sm" type="button" id="cek_nim">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">

                                <label for="nama" style="font-size: 12px;">Prodi *</label>
                                <input type="text" name="tempat_lahir" class="form-control" style="font-size: 12px;" placeholder="Masukkan Prodi" required id="inputProdi" readonly>

                            </div>
                            <div class="form-group">
                                <label for="telepon" style="font-size: 12px;">Jenis Pembayaran</label>
                                <select name="jk" id="mapel" class=" form-control" style="font-size: 12px;" required>
                                    <option value="">Pilih Jenis Pembayaran</option>
                                    <?php $jenis = mysqli_query($connect, "SELECT * FROM jenis_pembayaran");
                                    foreach ($jenis as $p) : ?>
                                        <option value="<?= $p['jenis']; ?>"><?= $p['jenis']; ?></option>
                                    <?php endforeach; ?>

                                </select>
                            </div>



                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama" style="font-size: 12px;">Nama Lengkap *</label>
                                <input type="text" name="nama_lengkap" class="form-control" style="font-size: 12px;" placeholder="Masukkan nama Sesuai KK" required id="inputNama" readonly>

                            </div>
                            <div class="form-group">
                                <label for="nama" style="font-size: 12px;">Tanggal Bayar *</label>
                                <input type="text" name="tgl_lahir" class="form-control" style="font-size: 12px;" placeholder="Masukkan tanggal lahir" data-provide="datepicker" id="tgl1" required>

                            </div>
                            <div class="form-group">
                                <label for="telepon" style="font-size: 12px;">Periode</label>
                                <select name="prodi" id="SK" class=" form-control" style="font-size: 12px;" required>


                                </select>
                            </div>

                        </div>

                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label>Status Pembayaran</label>
                            <select name="status" id="status" class="form-control" required>
                                <option>Pilih Status</option>
                                <option value="Lunas">Lunas</option>
                                <option value="Dispensasi">Dispensasi</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label>Tanggal Bayar/Batas Dispensasi</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="date" name="tanggal" id="tgl1" class="form-control" placeholder="yyyy/mm/dd" data-mask required />
                            </div><!-- /.input group -->
                        </div><!-- /.form group -->
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label>Tanggal Bayar/Batas Dispensasi</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <select id="tgl" class="form-control">
                                </select>
                            </div><!-- /.input group -->
                        </div><!-- /.form group -->
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jumlah Nominal Pembayaran (Rp)</label>
                            <input type="number" id="jmlPembayaran" min="1" name="jumlah" class="form-control" placeholder="Masukkan Nominal" required />


                        </div>
                    </div>


                    <div class="col-xs-6">
                        <div class="form-group" id="ketDenda">
                            <label>Denda</label>
                            <input type="text" id="jmlDenda" name="denda" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group" id="ketTotal">
                            <label>Total Bayar</label>
                            <input type="text" id="jmlBayar" name="total" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="text-left">
                        <a href="?page=mahasiswa" class="btn btn-sm btn-danger" name="kembali">
                            <i class="fas fa-arrow-left"></i>
                            Kembali</a>
                        <button type="submit" name="btn_simpan" class="btn btn-sm btn-success">
                            <i class="fas fa-save"></i>
                            Simpan </button>

                    </div>
                </div>
            </form>

        </div>
    </div>

</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $("#mapel").change(function() {

            var id_md = $("#mapel").val();
            $.ajax({
                type: "POST",
                dataType: "html",
                url: "views/pembayaran/ambil-jenis.php",
                data: "md=" + id_md,
                success: function(msg) {
                    if (msg == '') {
                        alert('Tidak ada data sk');
                    } else {
                        $("#SK").html(msg);


                    }
                }
            });

            $.ajax({
                type: "POST",
                dataType: "html",
                url: "views/pembayaran/ambil-bts.php",
                data: "md=" + id_md,
                success: function(msg) {
                    if (msg == '') {
                        alert('Tidak ada data sk');
                    } else {
                        $("#tgl").html(msg);


                    }
                }
            });

        });
    });
</script>
<script>
    $(document).ready(function() {

        $("#ketDenda").hide();
        $("#ketTotal").hide();
        $("#tgl1").change(function() {
            var tgl1 = $("#tgl1").val();
            var jmlPembayaran = $("#jmlPembayaran").val();
            var status = $("#status").val();
            if (status == "Dispensasi") {
                $("#ketDenda").show(0);
                $("#ketTotal").show(0);
                $("#jmlBayar").val(jmlPembayaran);
                $("#jmlDenda").val(0);
            } else {
                $.ajax({
                    url: "views/pembayaran/proses.php",
                    type: 'POST',
                    data: {
                        "jmlPembayaran": jmlPembayaran,
                        "tgl1": tgl1,
                        "tgl": $("#tgl").val()
                    },
                    success: function(data) {
                        console.log(data);
                        var totalBayar = parseInt(data) + parseInt(jmlPembayaran);
                        $("#ketDenda").show();
                        $("#ketTotal").show();
                        $("#jmlBayar").val(totalBayar);
                        $("#jmlDenda").val(data);
                    }
                });
                return false;
            }
        });
    });
</script>