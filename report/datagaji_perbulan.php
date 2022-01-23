<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Gaji Karyawan Perbulan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $ambilbln=$_POST['bulan'];
        $ambilthn=$_POST['tahun'];
        $bulanNama;
        if ($ambilbln==1) {
          $bulanNama="JANUARI";
        } elseif ($ambilbln==2) {
          $bulanNama="FEBRUARI";
        } elseif ($ambilbln==3) {
          $bulanNama="MARET";
        } elseif ($ambilbln==4) {
          $bulanNama="APRIL";
        } elseif ($ambilbln==5) {
          $bulanNama="MEI";
        } elseif ($ambilbln==6) {
          $bulanNama="JUNI";
        } elseif ($ambilbln==7) {
          $bulanNama="JULI";
        } elseif ($ambilbln==8) {
          $bulanNama="AGUSTUS";
        } elseif ($ambilbln==9) {
          $bulanNama="SEPTEMBER";
        } elseif ($ambilbln==10) {
          $bulanNama="OKTOBER";
        } elseif ($ambilbln==11) {
          $bulanNama="NOVEMBER";
        } elseif ($ambilbln==12) {
          $bulanNama="DESEMBER";
        }


        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>PT Bakrie Sumatera Plantations Tbk Kisaran</h2>
                        <h4>Jalan Ir. Juanda, Kisaran, <br> Kisaran Timur, Kabupaten Asahan, Sumatera Utara, 21202</h4>
                        <hr>
                        <h3>DATA GAJI KARYAWAN BULAN   <?php echo "$bulanNama $ambilthn"; ?></h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                <thead>
                  <tr>
                    <th><center>No.</center></th>
                    <th><center>Nama Karyawan</center></th>
                    <th><center>Jabatan</center></th>
                    <th><center>Gaji Pokok</center></th>
                    <th><center>Tunjangan Transport</center></th>
                    <th><center>Uang Makan</center></th>
                    <th><center>Total Gaji</center></th>
                    <th><center>Foto</center></th>
                    <th><Center>Tanggal Gaji</center></th>
                  </tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tb_data_gaji WHERE substr(tanggal_gaji,1,7)='$ambilthn-$ambilbln'";
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
									                  <td><?= $data['nama_karyawan'] ?></td>
                                    <td><?= $data['jabatan'] ?></td>
                                    <td><?= $data['gaji_pokok'] ?></td>
                                    <td><?= $data['tj_transport'] ?></td>
                                    <td><?= $data['uang_makan'] ?></td>
									                  <td><?= $data['total_gaji'] ?></td>
									                  <td><img src="../foto/<?= $data['foto']?>" width="120" height="100"></td>
								                  	<td><?= $data['tanggal_gaji'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>

                            <tfoot>
                              <tr>
                                <td colspan="10" class="text-right">
                                        Kisaran,  &nbsp <?= date("d-m-Y") ?>
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
