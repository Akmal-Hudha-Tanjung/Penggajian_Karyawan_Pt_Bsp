<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Karyawan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tb_data_karyawan WHERE no_karyawan='" . $_GET ['no_karyawan'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>PT Bakrie Sumatera Plantations Tbk Kisaran</h2>
                        <h4>Jalan Ir. Juanda, Kisaran, <br> Kisaran Timur, Kabupaten Asahan, Sumatera Utara, 21202</h4>
                        <hr>
                        <h3>DATA KARYAWAN</h3>
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
                                
								<tr>
                                    <td>Nik</td> <td><?= $data['nik'] ?></td>
                                </tr>

                                <tr>
                                    <td>Nama Karyawan</td> <td><?= $data['nama_karyawan'] ?></td>
                                </tr>

                                <tr>
                                    <td>Alamat</td> <td><?= $data['alamat'] ?></td>
                                </tr>

                                <tr>
                                    <td>Jenis Kelamin</td> <td><?= $data['jenis_kelamin'] ?></td>
                                </tr>

								<tr>
                                    <td>Tanggal Lahir</td> <td><?= $data['tanggal_lahir'] ?></td>
                                </tr>

                                <tr>
                                    <td>Tempat Lahir</td> <td><?= $data['tempat_lahir'] ?></td>
                                </tr>

                                <tr>
                                    <td>No Hp</td> <td><?= $data['no_hp'] ?></td>
                                </tr>

                                <tr>
                                    <td>Pendidikan</td> <td><?= $data['pendidikan'] ?></td>
                                </tr>

                                <tr>
                                    <td>Foto</td> <td><img src="../profil/<?= $data['profil']?>" width="150" height="150"></td>
                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="text-right">
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
