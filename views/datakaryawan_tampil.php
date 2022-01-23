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
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span>Data Karyawan</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nik KTP</th>
                                <th>Nama Karyawan</th>
                                <th>Alamat</th>
                                <th>Jenis Kelamin</th>
                                <th>Tanggal Lahir</th>
                                <th>Tempat Lahir</th>
                                <th>No Hp</th>
                                <th>Pendidikan</th>
                                <th>Profil</th>
                                <th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tb_data_karyawan";
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
									<td><?= $data['nik'] ?></td>
									<td><?= $data['nama_karyawan'] ?></td>
									<td><?= $data['alamat'] ?></td>
                                    <td><?= $data['jenis_kelamin'] ?></td>
                                    <td><?= $data['tanggal_lahir'] ?></td>
                                    <td><?= $data['tempat_lahir'] ?></td>
                                    <td><?= $data['no_hp'] ?></td>
                                    <td><?= $data['pendidikan'] ?></td>
                                    <td><img src="profil/<?= $data['profil']?>" width="120" height="100"></td>
                                    <td>
                                        <a href="?page=datakaryawan&actions=detail&no_karyawan=<?= $data['no_karyawan'] ?>" class="btn btn-info btn-xs">
                                            <span class="fa fa-eye"></span>
                                        </a>
                    
                                        <a href="?page=datakaryawan&actions=edit&no_karyawan=<?= $data['no_karyawan'] ?>" class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"></span>
                                        </a>

                                        <a href="?page=datakaryawan&actions=delete&no_karyawan=<?= $data['no_karyawan'] ?>" class="btn btn-danger btn-xs">
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
                                        <a href="?page=datakaryawan&actions=tambah" class="btn btn-info btn-sm">
                                            Tambah Data Karyawan
                                        </a>
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
