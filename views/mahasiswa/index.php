<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Mahasiswa
        <a href="?page=add-mahasiswa" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-user-plus"></i>
            </span>
            <span class="text">Add Data</span>
        </a>
    </h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa</h6>
        </div>
        <div class="card-body">
            <?php
            if (isset($_SESSION['alert'])) {
                echo $_SESSION['alert'];
            }
            unset($_SESSION['alert']);
            ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size: 12px;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>JK</th>
                            <th>Prog. Studi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        include "config/koneksi.php";
                        $query = mysqli_query($connect, "SELECT * FROM mahasiswa JOIN prodi WHERE mahasiswa.prodi=prodi.kodeprodi");
                        $no = 1;
                        $j = mysqli_num_rows($query);

                        ?>
                        <?php if ($j > 0) : ?>
                            <?php foreach ($query as $k) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $k['nim']; ?></td>
                                    <td><?= $k['nama']; ?></td>
                                    <td><?= $k['alamat']; ?></td>
                                    <td><?= $k['tempatlahir']; ?></td>
                                    <td><?= date('d F Y', strtotime($k['tgl_lahir'])); ?></td>
                                    <td><?= $k['jeniskelamin']; ?></td>
                                    <td><?= $k['prodi']; ?></td>
                                    <td>
                                        <a href="?page=edit-mahasiswa&nim=<?= $k['nim']; ?>" class="btn btn-success btn-sm">Edit</a>
                                        <a href="?page=deleteMahasiswa&nim=<?= $k['nim']; ?>" class="btn btn-danger btn-sm" onclick="confirm('Yakin Hapus data ini?')">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <div class="alert alert-dismissable alert-info">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                Belum Ada Data Mahasiswa Yang di Inputkan. . .
                            </div>
                        <?php endif; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>