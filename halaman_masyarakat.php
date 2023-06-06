<!-- ini adalah halaman pertama yang muncul ketika login sebagai admin -->
<?php
if (isset($_GET['url'])){
    $url=$_GET['url'];

    switch($url){   

        case 'tulis_pengaduan'; // url nya dari masyarakat.php         
        include 'tulis_pengaduan.php'; // url untuk memuat halaman
        break;
        
        case 'lihat_pengaduan'; // url nya dari masyarakat.php        
        include 'lihat_pengaduan.php'; // url untuk memuat halaman
        break; 

        case 'detail_pengaduan'; // url nya dari masyarakat.php        
        include 'detail_pengaduan.php'; // url untuk memuat halaman
        break; 

        case 'lihat_tanggapan';
        include 'lihat_tanggapan.php';
        break;
    }
}else{
    ?> 
    Selamat Datang di Pengaduan Masyarakat, yang dibuat untuk melaporkan
    ketidak nyamanan bermasyarakat. <br> <br>
    Anda masuk sebagai : <h2><b> <?php echo $_SESSION['nama'];
}
?>


