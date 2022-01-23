<!DOCTYPE html>
<html>
    <head>
        <title>Slip Gaji</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tb_data_gaji WHERE no_gaji='" . $_GET ['no_gaji'] . "'";
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
                        <h3>Slip Gaji</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>Nama Karyawan</td> <td><?= $data['nama_karyawan'] ?></td>
                                </tr>
                                <tr>
                                    <td>Jabatan</td> <td><?= $data['jabatan'] ?></td>
                                </tr>
                                <tr>
                                    <td>Gaji Pokok</td> <td><?= $data['gaji_pokok'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tunjangan Transport</td> <td><?= $data['tj_transport'] ?></td>
                                </tr>
								<tr>
                                    <td>Uang Makan</td> <td><?= $data['uang_makan'] ?></td>
                                </tr>
								<tr>
                                    <td>Total Gaji</td> <td><?= $data['total_gaji'] ?></td>
                                </tr>
								<tr>
                                    <td>Foto</td> <td><img src="../foto/<?= $data['foto']?>" width="150" height="150"></td>
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
