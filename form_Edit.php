<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"crossorigin="anonymous">
  </head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('auth/toPosting'); ?>" style="width: 1100px;">Postingan Universitas Brawijaya </a>
                </ul>
              <form action="<?php echo site_url('auth/toList'); ?>" method="POST" class="form-inline my-2 my-lg-0">
          <button class="btn btn-yellow mr-sm-5 "" type="submit">List User</button>
        </form>
        <form action="<?php echo site_url('auth/logout'); ?>" method="POST" class="form-inline my-2 my-lg-0">
          <button class="btn btn-yellow mr-sm-5 "" type="submit">Logout</button>
              </form>
            </div>
        </div>
    </nav>
<div class="container" style="margin-top: 20px">
	<div class="col-md-12">
    <?php
        if($getDataEdit){
          $nim = $getDataEdit->NIM;
          $nama = $getDataEdit->NAMA;
          $username = $getDataEdit->USERNAME;
          $alamat = $getDataEdit->ALAMAT;
          $password = $getDataEdit->PASSWORD;
          $foto = $getDataEdit->FOTO;
        } else {
          $nim = "";
          $nama = "";
          $username = "";
          $alamat = "";
          $password = "";
          $foto = "";
      }
    ?>
    <h2 style="text-align: center;margin-bottom: 30px"> Edit User</h2><hr>
    <form method="post" action="<?php echo site_url('auth/updateUser/'.$nim); ?>" enctype="multipart/form-data">
        <right><p>
        <a  style="padding: 10px 20px;">NIM</a>
        </p></right>
        <center><input type="text"  value="<?php echo $nim ?>" class="form-control"name="NIM" size="30" style="width: 98%; "></center><br>
        <right><p>
        <a  style="padding: 10px 20px;">NAMA</a>
        </p></right>
        <center><input type="text"  value="<?php echo $nama ?>" class="form-control"name="NAMA" size="30" style="width: 98%; "></center><br>
        <right><p>
        <a  style="padding: 10px 20px;">USERNAME</a>
        </p></right>
        <center><input type="text"   value="<?php echo $username ?>" class="form-control"name="USERNAME" size="30" style="width: 98%; "></center><br>
        <right><p>
        <a  style="padding: 10px 20px;">ALAMAT</a>
        </p></right>
        <center><input type="text"  value="<?php echo $alamat ?>" class="form-control"name="ALAMAT" size="30" style="width: 98%; "></center><br>
        <right><p>
        <a  style="padding: 10px 20px;">PASSWORD</a>
        </p></right>
        <center><input type="text"  value="<?php echo $password ?>" class="form-control"name="PASSWORD" size="30" style="width: 98%; "></center><br>
        <right><p>
        <a  style="padding: 10px 20px;">FOTO ( <?php echo $foto ?> )</a>
        </p></right>
        <center><input type="file"  class="form-control"name="foto" size="30" style="width: 98%; "></center><hr>
         <button class="btn btn-block mybtn btn-yellow tx-tfm"" type="submit">Submit</button>
         <br>
    </form>
    <form action="<?php echo site_url('auth/toList'); ?>" method="POST" class="form-inline my-2 my-lg-0">
          <button class="btn btn-block mybtn btn-yellow tx-tfm"" type="submit">Cancel</button>
        </form>
        <br><br>
	</div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
  } );
</script>
</body>
</html>
