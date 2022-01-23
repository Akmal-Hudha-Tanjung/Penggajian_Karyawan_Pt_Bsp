<?php
$no_gaji=$_GET['no_gaji'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tb_data_gaji WHERE no_gaji  ='$no_gaji '") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
                <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Gaji Karyawan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="nama_karyawan" class="col-sm-3 control-label">Nama Karyawan</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_karyawan" value="<?=$data['nama_karyawan']?>" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="jabatan" class="col-sm-3 control-label">Jabatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="jabatan" value="<?=$data['jabatan']?>"class="form-control">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="gaji_pokok" class="col-sm-3 control-label">Gaji Pokok</label>
                            <div class="col-sm-9">
                                <input type="text" name="gaji_pokok" value="<?=$data['gaji_pokok']?>"class="form-control">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="tj_transport" class="col-sm-3 control-label">Tunjangan Transport</label>
                            <div class="col-sm-9">
                                <input type="text" name="tj_transport" value="<?=$data['tj_transport']?>"class="form-control">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="uang_makan" class="col-sm-3 control-label">Uang Makan</label>
                            <div class="col-sm-9">
                                <input type="text" name="uang_makan" value="<?=$data['uang_makan']?>"class="form-control">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="foto" class="col-sm-3 control-label">Foto</label>
                            <div class="col-sm-3">
                                <input type="file" class="custom-file-input" name="foto" value="<?=$data['foto']?>"class="form-control">
                                <img src="foto/<?= $data['foto']?>" width="120" height="100">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tanggal_gaji" class="col-sm-3 control-label">Tanggal Gaji</label>
                            <div class="col-sm-3">
                                <input type="date" name="tanggal_gaji" value="<?=$data['tanggal_gaji']?>"class="form-control">
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
                    <a href="?page=datagaji&actions=tampil" class="btn btn-danger btn-sm">
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
		var foto = document.querySelector('input[name=foto]').files
		var choosefile = document.querySelector('#choosefile')
		if(foto.length)
			choosefile.innerHTML = foto[0].name
			else
			choosefile.innerHTML = 'Choose file'
	}
</script>

<?php 
if($_POST){
    copy($_FILES['foto']['tmp_name'],'foto/'.$_FILES['foto']['name']);
    //Ambil data dari form
    $namakaryawan=$_POST['nama_karyawan'];
	$jabatan=$_POST['jabatan'];
	$gajipokok=$_POST['gaji_pokok'];
	$tunjangantransport=$_POST['tj_transport'];
    $uangmakan=$_POST['uang_makan'];
	$totalgaji=(($gajipokok)+($tunjangantransport)+($uangmakan));
    $foto=$_FILES['foto']['name'];
    $tanggalgaji=$_POST['tanggal_gaji'];

    //buat sql
    $sql="UPDATE tb_data_gaji SET nama_karyawan='$namakaryawan',jabatan='$jabatan',gaji_pokok='$gajipokok',tj_transport='$tunjangantransport',uang_makan='$uangmakan',
	total_gaji ='$totalgaji',tanggal_gaji='$tanggalgaji' WHERE no_gaji ='$no_gaji'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=datagaji&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



