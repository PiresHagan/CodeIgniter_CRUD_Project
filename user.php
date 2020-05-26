<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('auth/toPosting'); ?>" style="width: 1100px;">Postingan Universitas Brawijaya </a>
                </ul>
          <form action="<?php echo site_url('auth/toList'); ?>" method="POST" 			class="form-inline my-2 my-lg-0">
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
		<h2 style="text-align: center;margin-bottom: 30px"> Data User</h2><hr>
		 	<form action="<?php echo site_url('auth/formAdd'); ?>" method="POST" class="form-inline my-2 my-lg-0">
					<button class="btn btn-yellow mr-sm-5 "" type="submit">Add User</button>
			</form><br>	
		<table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead >
				<tr>
					<th style="text-align: center;"> Foto </th>
					<th style="width: 140px; text-align: center;"> NIM</th>
					<th style="width: 140px; text-align: center;"> Nama </th>
					<th style="width: 140px; text-align: center;"> Username</th>
					<th style="width: 140px; text-align: center;"> Alamat</th>
					<th style="width: 140px; text-align: center;"> Aksi </th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($data_user as $user) {
				?>
				<tr>
					<td style="text-align: center;"><img src="<?php echo base_url(). 'images/'. $user->FOTO; ?>" width='140' height='140'></td>
					<td style="text-align: center;"><?php echo $user->NIM; ?></td>
					<td style="text-align: center;"><?php echo $user->NAMA; ?></td>
					<td style="text-align: center;"><?php echo $user->USERNAME; ?></td>
					<td style="text-align: center;"><?php echo $user->ALAMAT; ?></td>
					<td style="text-align: center;">
						<br>
						<form action="<?php echo site_url('auth/formEdit/'.$user->NIM) ?>" method="POST" class="form-inline my-2 my-lg-0">
							<button class="btn btn-block mybtn btn-yellow tx-tfm "" type="submit">Edit User</button>
						</form>
						<hr>
						<form action="<?php echo site_url('auth/formDelete/'.$user->NIM) ?>" method="POST" class="form-inline my-2 my-lg-0" onclick="return confirm('Are you sure to delete data?')">
							<button class="btn btn-block mybtn btn-yellow tx-tfm "" type="submit">Delete User</button>
						</form><br>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<br><br>
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
