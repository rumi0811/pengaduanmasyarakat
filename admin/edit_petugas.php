<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tulis Pengaduan - Pemas</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <div class="card shadow">
        <div class="card-header">
            Edit Petugas/Admin
        </div>
        <div class="card-body">

        <?php
        require '../koneksi.php';
        $sql = mysql_query("select * from petugas where id_petugas='$_GET[id]'");
        if($data=mysql_fetch_array($sql)){        
        ?>
            <form action="update_petugas.php" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group cols-sm-6">
                    <label for="">Id Petugas</label>
                    <input type="text" name="id_petugas" value="<?php echo $data['id_petugas'] ?>"class="form-control" readonly>
                </div>

                <div class="form-group cols-sm-6">
                    <label for="">Nama Petugas</label>
                    <input type="text" name="nama_petugas" value="<?php echo $data['nama_petugas'] ?>"class="form-control">
                </div>

                <div class="form-group cols-sm-6">
                    <label for="">Username Petugas</label>
                    <input type="text" name="username" value="<?php echo $data['username'] ?>"class="form-control">
                </div>

                <div class="form-group cols-sm-6">
                    <label for="">Password Petugas</label>
                    <input type="text" name="password" value="<?php echo $data['password'] ?>"class="form-control">
                </div>

                <div class="form-group cols-sm-6">
                    <label for="">Telpon Petugas</label>
                    <input type="text" name="telp" value="<?php echo $data['telp'] ?>"class="form-control">
                </div>

                <div class="form-group cols-sm-6">
                    <label for="">Level Petugas</label>
                    <select name="level" id="" class="form-control">
                        <option value="<?php echo $data['level'] ?>"><?php echo $data['level'] ?></option>
                        <option value="admin">Admin</option>
                        <option value="petugas">Petugas</option>
                    </select>
                </div>

                <div class="form-group col-sm-6">
                    <input type="submit" value="Edit" class="btn btn-primary">
                    <input type="reset" value="Kosongkan" class="btn btn-danger"> 
                </div>
            </form>
            <?php } ?>
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