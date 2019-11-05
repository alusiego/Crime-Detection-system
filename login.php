<!DOCTYPE html>
<html>
<head>
	<title> THE NIGERIA POLICE FORCE </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container" >
	<div class="login-box">
	<div class="row">
	<div class="col-md-6 login-left">
		<h2> LOGIN HERE </h2>
		<form action="validation.php" method="post">
			<div class="form-group">
				<label>UserId</label>
				<input type="text" name="user" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Secret Key</label>
				<input type="password" name="password" class="form-control" required>
			</div>
			<button type="submit" class="btn btn-primary">ACCESS</button>
			<button><a href="register.php"> CREATE ACCESS </a>    </button>   
		</form>
	</div>  
    </div>
    </div>
</div>
</body>
</html>3