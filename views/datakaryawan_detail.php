<div class="container">
    <div class="row">
        <div class="col-xs-12">
                <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Data Karyawan</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                     $sql = "SELECT *FROM tb_data_karyawan WHERE no_karyawan  ='" . $_GET ['no_karyawan'] . "'";
                     //proses query ke database
                     $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                     //Merubaha data hasil query kedalam bentuk array
                     $data = mysqli_fetch_array($query);
                     ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
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
                            <td>Profil</td> <td><img src="profil/<?= $data['profil']?>" width="150" height="150"></td>
                        </tr>

                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=datakaryawan&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali ke Data</a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

