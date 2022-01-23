<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Karyawan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail karyawan-->
        <?php
        include '../config/koneksi.php';
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>PT Bakrie Sumatera Plantations Tbk Kisaran</h2>
                        <h4>Jalan Ir. Juanda, Kisaran, <br> Kisaran Timur, Kabupaten Asahan, Sumatera Utara, 21202</h4>
                        <hr>
                        <h3>DATA SELURUH KARYAWAN</h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                                <thead>
								<tr>
                                <th><center>No.</center></th>
                                    <th><center>Nik</center></th>
                                    <th width="80%"><center>Nama Karyawan</center></th>
                                    <th><center>Alamat</th></center>
                                    <th width="80%"><center>Jenis Kelamin</center></th>
                                    <th><center>Tanggal Lahir</th>
                                    <th><center>Tempat Lahir</th>
                                    <th><center>No Hp</center></th>
                                    <th><center>Pendidikan</center></th>
                                    <th><center>Profil</center></th>
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
                                    <td><img src="../profil/<?= $data['profil']?>" width="120" height="100"></td>
                                    <td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="10" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kabag Hukum, S.Hum<strong></u><br>
                                        NIP.102871291416712
									</td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
