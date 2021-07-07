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

                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <label for="nama" style="font-size: 12px;">Nim *</label>
                                <input type="text" name="nim" class="form-control" autofocus style="font-size: 12px;" placeholder="Masukkan nim" required>

                            </div>
                            <div class="form-group">

                                <label for="nama" style="font-size: 12px;">Tempat Lahir *</label>
                                <input type="text" name="tempat_lahir" class="form-control" autofocus style="font-size: 12px;" placeholder="Masukkan tempat lahir" required>

                            </div>
                            <div class="form-group">
                                <label for="telepon" style="font-size: 12px;">Jenis Kelamin</label>
                                <select name="jk" id="" class=" form-control" style="font-size: 12px;" required>
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Prempuan">Prempuan</option>

                                </select>
                            </div>



                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama" style="font-size: 12px;">Nama Lengkap *</label>
                                <input type="text" name="nama_lengkap" class="form-control" style="font-size: 12px;" placeholder="Masukkan nama Sesuai KK" required>

                            </div>
                            <div class="form-group">
                                <label for="nama" style="font-size: 12px;">Tanggal Lahir *</label>
                                <input type="text" name="tgl_lahir" class="form-control" style="font-size: 12px;" placeholder="Masukkan tanggal lahir" data-provide="datepicker" id="tgl_lahir" required>

                            </div>
                            <div class="form-group">
                                <label for="telepon" style="font-size: 12px;">Program Studi</label>
                                <select name="prodi" id="" class=" form-control" style="font-size: 12px;" required>
                                    <option value="">Pilih Prodi</option>
                                    <?php $prodi = mysqli_query($connect, "SELECT * FROM prodi");
                                    foreach ($prodi as $p) : ?>
                                        <option value="<?= $p['kodeprodi']; ?>"><?= $p['prodi']; ?></option>
                                    <?php endforeach; ?>

                                </select>
                            </div>

                        </div>

                    </div>
                    <div class="form-group">
                        <label for="alamat" style="font-size: 12px;">Alamat</label>
                        <textarea name="alamat" class=" form-control" style="font-size: 12px;"></textarea>

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