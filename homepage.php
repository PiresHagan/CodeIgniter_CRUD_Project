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
    <h2 style="text-align: center;margin-bottom: 30px"> HOMEPAGE</h2><hr>
    <h4>Welcome, <?php echo $this->session->userdata('username') ?></h4><br>
    <form action="<?php echo site_url('auth/formAddPost'); ?>" method="POST" class="form-inline my-2 my-lg-0">
        <button class="btn btn-yellow mr-sm-5 "" type="submit">Create New Post</button>
    </form><br>
    <?php
        foreach ($data_post as $post) {
    ?>
    <div class="card" style="border-radius: 3; width: 100%; padding: 10px 20px;">
        <div style="border-radius: 3; width: 100%; padding: 10px 20px;">
            <center><p><?php echo $post->JUDUL_POST; ?></p></center>
            <p><?php echo substr($post->ISI_POST, 0, 500) . '...';?></p>
            <hr>
            <a  href="<?php echo site_url('auth/read_More/'.$post->ID_POST) ?>"">[Read More]</a>
        </div>
    </div><br>
    <?php } ?>
</div>
</div>\
</body>
</html>
