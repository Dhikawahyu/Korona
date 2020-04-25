<html iang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, instial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="http://localhost/korona/aset/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://localhost/korona/aset/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Login</title>
</head>
<body background="B.png">
  	 <?php
session_start();
if(isset($_SESSION['username'])){
	header("location: home.php");
}
?>
<div id="card">
	<form method="post" action="cek_login.php">
	<div class="kotak_login">
	<div id="card-content">
	<div id="card-title">
	<h2 class="card-title"><i class=""></i>Login</h2>
	<div class="underline-title"></div>
	</div>
	</div>
	<form>
		<label style="padding-top:13px">&nbsp&nbspUsername</label>
		<center>
		<input type="text" name="username" class="form_login" placeholder="Username" required><div class="form-border"></div>
		</center>
		<label style="padding-top:22px">&nbsp&nbspPassword</label>
		<center>
		<input type="password" name="password" class="form_login" placeholder="Password" required><div class="form-border"></div>
		<div class="container">
		<?php
		if(isset($_COOKIE["message"])){
			echo $_COOKIE["message"];
		}
		?>
		</div>
			<button type="submit" class="a" name="login">Login</button>
		</center>
		<div class="bottom">
            <a href="register.php">&nbspRegister?</a>
        </div>
	</form>
	</div>
	</form>
</div>
 <div class="credit text-center p-2">Copyright©2020<span class="text-white">Dhika<a class="text-white" href="about.php"> - About Me</a></span></div>


       </div>
</body>

<?php
include 'aset/footer.php';
?>