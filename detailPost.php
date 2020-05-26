<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('auth/toPosting'); ?>" style="width: 1100px;">Postingan Universitas Brawijaya </a>
                </ul>
              <form action="<?php echo site_url('auth/toList'); ?>" method="POST" class="form-inline my-2 my-lg-0">
          <button class="btn btn-yellow mr-sm-5 "" type="submit">List User
          </button>
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
        if($getDataPostEdit){
          $id = $getDataPostEdit->ID_POST;
          $judul = $getDataPostEdit->JUDUL_POST;
          $isi = $getDataPostEdit->ISI_POST;
          $pembuat = $getDataPostEdit->NAMA_PEMBUAT;
          $tgledit = $getDataPostEdit->TANGGAL_EDIT;
          $tglpost = $getDataPostEdit->TANGGAL_POST;
          $pengedit = $getDataPostEdit->NAMA_PENGEDIT;
        } else {
          $id = "";
          $judul = "";
          $isi = "";
          $pembuat = "";
          $pengedit = "";
          $tgledit = "";
          $tglpost = "";
        }
    ?>
<div class="card" style="border-radius: 3; width: 100%; padding: 10px 20px;">
        <div style="border-radius: 3; width: 100%; padding: 10px 20px;">
        	<center><p><?php echo $judul?></p></center>
        	<p><?php echo $isi ?></p>
            <hr>
            <p>Created by <?php echo $pembuat ?></p>
            <p>Posted on <?php echo $tglpost ?></p><hr>
            <p>Last Edited by <?php echo $pengedit ?></p>
            <p>Edited on <?php echo $tgledit ?></p><hr>
            <form action="<?php echo site_url('auth/formEditPost/'.$id) ?>" method="POST" class="form-inline my-2 my-lg-0">
                    <button class="btn btn-block mybtn btn-yellow tx-tfm "" type="submit">Edit Post</button>
            </form><br>
            <form action="<?php echo site_url('auth/formDeletePost/'.$id) ?>" method="POST" class="form-inline my-2 my-lg-0" onclick="return confirm('Are you sure to delete post?')">
                            <button class="btn btn-block mybtn btn-yellow tx-tfm "" type="submit">Delete Post</button>
            </form><br>
        </div>
    </div><br>
</div>
</div>
</body>
</html>
