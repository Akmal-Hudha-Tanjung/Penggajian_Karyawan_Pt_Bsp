<?php
$no_karyawan=$_GET['no_karyawan'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tb_data_karyawan WHERE no_karyawan  ='$no_karyawan'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
                <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Karyawan</h3>
                </div>
                <div class="panel-body">

                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="nik" class="col-sm-3 control-label">Nik</label>
                            <div class="col-sm-9">
                                <input type="text" name="nik" value="<?=$data['nik']?>" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="nama_karyawan" class="col-sm-3 control-label">Nama Karyawan</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_karyawan" value="<?=$data['nama_karyawan']?>"class="form-control">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>"class="form-control">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="jenis_kelamin" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="Laki - Laki">Laki - Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>

						<div class="form-group">
                            <label for="tanggal_lahir" class="col-sm-3 control-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="date" name="tanggal_lahir" value="<?=$data['tanggal_lahir']?>"class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tempat_lahir" class="col-sm-3 control-label">Tempat Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" name="tempat_lahir" value="<?=$data['tempat_lahir']?>"class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">No Hp</label>
                            <div class="col-sm-3">
                                <input type="text" name="no_hp" value="<?=$data['no_hp']?>"class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pendidikan" class="col-sm-3 control-label">Pendidikan</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="pendidikan" class="form-control">
                                    <option value="SMA">SMA</option>
                                    <option value="SMK">SMK</option>
                                    <option value="S1">S1</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="profil" class="col-sm-3 control-label">Profil</label>
                            <div class="col-sm-3">
                                <input type="file" class="custom-file-input" name="profil" value="<?=$data['profil']?>"class="form-control">
                                <img src="profil/<?= $data['profil']?>" width="120" height="100">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-8">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=datakaryawan&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<script type="text/javascript">
	function initFile()
	{
		var profil = document.querySelector('input[name=profil]').files
		var choosefile = document.querySelector('#choosefile')
		if(profil.length)
			choosefile.innerHTML = profil[0].name
			else
			choosefile.innerHTML = 'Choose file'
	}
</script>


<?php 
if($_POST){
    copy($_FILES['profil']['tmp_name'],'profil/'.$_FILES['profil']['name']);
    //Ambil data dari form
    $nik=$_POST['nik'];
	$namakaryawan=$_POST['nama_karyawan'];
	$alamat=$_POST['alamat'];
	$jeniskelamin=$_POST['jenis_kelamin'];
    $tanggallahir=$_POST['tanggal_lahir'];
    $tempatlahir=$_POST['tempat_lahir'];
	$nohp=$_POST['no_hp'];
    $pendidikan=$_POST['pendidikan'];
    $profil=$_FILES['profil']['name'];

    //buat sql
    $sql="UPDATE tb_data_karyawan SET nik='$nik',nama_karyawan='$namakaryawan',alamat='$alamat',jenis_kelamin='$jeniskelamin',tanggal_lahir='$tanggallahir',tempat_lahir='$tempatlahir'
    ,no_hp ='$nohp',pendidikan='$pendidikan' WHERE no_karyawan ='$no_karyawan'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=datakaryawan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



