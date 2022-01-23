<?php
//membuat query untuk hapus data
$sql="DELETE FROM tb_data_karyawan WHERE no_karyawan ='".$_GET['no_karyawan']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=datakaryawan&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=datakaryawan&actions=tampil');</scripr>";
}

