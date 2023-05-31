<?php 

require 'koneksi.php';
// POST nik, nama, username, password, tlp ini diambil dari register.php yang form namenya jadi harus sama tulisannya
$nik=$_POST['nik']; 
$nama=$_POST['nama'];
$user=$_POST['username'];
$pass=$_POST['password'];
$telp=$_POST['telp'];

$sql = mysql_query("insert into masyarakat values ('$nik', '$nama', '$user', '$pass', '$telp')");

if($sql){
    ?>
    <script type="text/javascript">
        alert ('Data berhasil disimpan, silahkan masuk!');
        window.location="index.php";
    </script>
<?php
}
?>