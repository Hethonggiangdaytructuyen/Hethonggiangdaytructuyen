<!DOCTYPE html>
<html lang="vi">
	<head>
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="template/font-awesome-4.6.3/css/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="template/css/admin/login.css">

        <script type="text/javascript" src="template/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="template/js/login.js"></script>
	</head>

    <body>
		<div class="module form-module">
		  	<div class="toggle"><i class="fa fa-times fa-pencil"></i>
		    	<div class="tooltip">Click Me</div>
		  	</div>
		  	<div class="form">
		    	<h2><?php echo isset($error)?$error:'Login to your account' ?></h2>
		    	<form method="post" action="" name="login-form">
		      		<label for="username">User name</label><input required type="text" id="username" name="txt_username" placeholder="Username" value="<?php echo set_value('txt_username') ?>" />
		      		<label for="pass">Password</label><input required type="password" id="pass" name="txt_password" placeholder="Password" value="<?php echo set_value('') ?>" />
		      		<input type="submit" name="submit" value="Login">
		    	</form>
		  	</div>
		  	<div class="form">
		    	<h2>Create an account</h2>
		    	<form method="post" action="" name="register-form">
		      		<input required type="text" placeholder="Username"/>
		      		<input required type="password" placeholder="Password"/>
		      		<input required type="email" placeholder="Email Address"/>
		      		<input required type="tel" placeholder="Phone Number"/>
		      		<input type="submit" name="submit" value="Register">
		    	</form>
		  	</div>
		</div>
    </body>
</html>