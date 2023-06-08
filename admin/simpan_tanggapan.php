<?php
require '../koneksi.php';
$id_pengaduan = $_POST['id_pengaduan'];
$tgl_tanggapan = $_POST['tgl_tanggapan'];
$tanggapan = $_POST['tanggapan'];

$id_petugas = $_POST['id_petugas'];
$st = 'selesai';

$sql = mysql_query("insert into tanggapan(id_pengaduan, tgl_tanggapan, tanggapan, id_petugas) 
values ('$id_pengaduan', '$tgl', '$tanggapan', '$id_petugas')");
$update_status = mysql_query("update pengaduan set status = '$st' where id_pengaduan='$id_pengaduan' ");

if($sql){
    ?>
    <script type="text/javascript">
        alert ('Data telah ditanggapi!');
        window.location="admin.php?url=verifikasi_pengaduan";
    </script>
    <?php
}?>

?>