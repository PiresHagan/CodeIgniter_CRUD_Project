<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
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
                    <a class="nav-link" href="<?php echo site_url('auth/toPosting'); ?>" style="width:1100px; ">Postingan Universitas Brawijaya </a>
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
        if($getDataPostEdit){
          $id = $getDataPostEdit->ID_POST;
          $judul = $getDataPostEdit->JUDUL_POST;
          $isi = $getDataPostEdit->ISI_POST;
        } else {
          $id = "";
          $judul = "";
          $isi = "";
        }
    ?>
    <h2 style="text-align: center;margin-bottom: 30px"> Edit Post</h2><hr>
    <form method="post" action="<?php echo site_url('auth/updatePost/'.$id); ?>" enctype="multipart/form-data" style="padding: 10px 20px">
      <right><p>
        <a  style="padding: 10px 20px;">Judul Post</a>
      </p></right>
      <center>
        <input type="text" name="judul_artikel" class="form-control" size="30" value="<?php echo $judul ?>" style="width: 98%; ">
      </center><br>
      <right>
        <p>
        <a  style="padding: 10px 20px;">Isi Post</a>
        </p>
      </right>
      <center>
      <textarea name="isi" type="textarea" class="form-control" cols="60" rows="15" style="width: 98%; " ><?php echo $isi ?>
      </textarea>
      </center><br>
      <center>
        <button class="btn btn-yellow mr-sm-5 "" type="submit">Submit Post</button>
      </center> 
  </form>
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
