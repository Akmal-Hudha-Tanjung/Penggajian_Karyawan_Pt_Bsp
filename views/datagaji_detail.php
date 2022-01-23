<div class="container">
    <div class="row">
        <div class="col-xs-12">
                <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Data Gaji Karyawan</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tb_data_gaji WHERE no_gaji ='" . $_GET ['no_gaji'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 

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
                            <td>Foto</td> <td><img src="foto/<?= $data['foto']?>" width="150" height="150"></td>
                        </tr>

						<tr>
                            <td>Tanggal Gaji</td> <td><?= $data['tanggal_gaji'] ?></td>
                        </tr>
                        
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=datagaji&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

