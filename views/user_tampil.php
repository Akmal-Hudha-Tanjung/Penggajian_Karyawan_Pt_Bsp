<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
                <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span>Kelola User</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>

                        </thead>
                        <tbody>
                          <tr>
                              <th>No.</th>
                              <th>Nama User</th>
                              <th>Password</th>
                              <th>Email</th>
                              <th>Nama</th>
                              <th>Level</th>
                              <th>Keterangan</th>
                              <th>AKSI</th>
                          </tr>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM user";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
									                  <td><?= $data['username'] ?></td>
									                  <td><?= $data['paswd'] ?></td>
									                  <td><?= $data['email'] ?></td>
                                                      <td><?= $data['nama'] ?></td>
                                                      <td><?= $data['level'] ?></td>
                                                      <td><?= $data['ket'] ?> </td>
                                    <td>
                                    <a href="?page=user&actions=detail&username=<?= $data['username'] ?>" class="btn btn-info btn-xs">
                                            <span class="fa fa-eye"></span>
                                        </a>
                                        <a href="?page=user&actions=edit&username=<?= $data['username'] ?>" class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"></span>
                                        </a>
                                        <a href="?page=user&actions=delete&username=<?= $data['username'] ?>" class="btn btn-danger btn-xs">
                                            <span class="fa fa-remove"></span>
                                        </a>
                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">
                                    <a href="?page=user&actions=tambah" class="btn btn-info btn-sm">
                                        Tambah</a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                Copyright &COPY; <?= date('Y')?> PT Bakrie Sumatera Plantations Tbk Kisaran 
                            </div>
                        </div>
                    </div>
            </div>

        </div>
    </div>
</div>
