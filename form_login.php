<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<body>
    <div class="container">
        <div class="row">
			<div class="col-md-5 mx-auto">
			<div id="first">
				<div class="myform form ">
					 <div class="logo mb-3">
						 <div class="col-md-12 text-center">
						 	<br><br><br><br><br>
							<h1>LOGIN</h1><hr>
						 </div>
					</div>
					<?php
						echo form_open('auth/login');
					?>
                           <div class="form-group">
                              <label>Username</label>
                              <input type="text" name="username"  class="form-control"  aria-describedby="emailHelp" placeholder="Enter username">
                           </div>
                           <div class="form-group">
                              <label>Password</label>
                              <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                           </div>
                           <hr>
                           <div class="col-md-12 text-center ">
                              <button type="submit" name="submit" class=" btn btn-block mybtn btn-yellow tx-tfm">Login</button>
                           </div>
                        </form>
				</div>
			</div>
		</div>
      </div>   
         
</body>
