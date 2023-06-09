<?php
require '../koneksi.php';
$id_pengaduan = $_GET['id_pengaduan'];

$sql=mysql_query("delete from pengaduan where id_pengaduan = '$id_pengaduan'");

if($sql){
    ?>
    <script type="text/javascript">
        alert('Data berhasil dihapus');
        window.location='petugas.php?url=verifikasi_pengaduan';        
    </script>
<?php
}
?>