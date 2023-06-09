<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Detail Pengaduan - Pemas</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <div class="card shadow">
        <div class="card-header">
            Detail Pengaduan
        </div>
        <?php 
                require '../koneksi.php';
                $sql = mysql_query("select * from pengaduan where id_pengaduan = '$_GET[id]'");
                $data = mysql_fetch_array($sql);
                if($sql){
                    ?>
        <div class="form-group cols-sm-6">
        <div class="card-body">
        <a href="?url=verifikasi_pengaduan" class="btn btn-primary btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-arrow-left"></i>
        </span>
        <span class="text">Kembali</span>
        </a>

        <a href="proses.php?id=<?php echo $data['id_pengaduan']; ?>" class="btn btn-warning btn-icon-split" onclick="return confirm('Yakin ingin diproses?')">
        <span class="icon text-white-50">
            <i class="fas fa-check"></i>
        </span>
        <span class="text">Proses</span>
        </a>

        
        <a href="hapus_pengaduan.php?id_pengaduan=<?php echo $data['id_pengaduan']; ?>" class="btn btn-danger btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-trash"></i>
                            </span>
                            <span class="text">Hapus</span>
                        </a>  

        
            <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                    
                <div class="form-group cols-sm-6">
                    <label for="">Tanggal Pengaduan</label>
                    <input type="text" name="tgl_pengaduan" value="<?php echo $data['tgl_pengaduan'];?>" class="form-control" readonly>
                </div>

                <div class="form-group cols-sm-6">
                    <label for="">Tulis Laporan</label>
                    <textarea name="isi_laporan" cols="30" rows="7" class="form-control" readonly>
                    <?php echo $data['isi_laporan']; ?>

                    </textarea>
                </div>

                <div class="form-group cols-sm-6">
                    <label for="">Bukti Pengaduan</label>
                    <br>
                    <img src="../foto/<?php echo $data['foto']; ?>" width="500px">
                </div>
<!-- coba bikin edit sama hapus -->
                <!-- <div class="form-group col-sm-6">
                    <input type="submit" value="Simpan" class="btn btn-primary">
                    <input type="reset" value="Kosongkan" class="btn btn-danger"> 
                </div> -->
                <?php
                } 
                ?>
            </form>
        </div>
        </div>
        </div>
    </div>


  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>
</html>