<?php
//membuat query untuk hapus data
$sql="DELETE FROM tb_data_gaji WHERE no_gaji ='".$_GET['no_gaji']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=datagaji&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=datagaji&actions=tampil');</scripr>";
}

