<?php
require 'koneksi.php';
$tgl=$_POST['tgl_pengaduan'];
$nik=$_POST['nik'];
$isi=$_POST['isi_laporan'];
$ft=$_POST['foto']['name'];
$file=$_FILES['foto']['tmp_name'];
$st=0;