<?php include 'dbcon.php'?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="css/home.css" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body { 
  background: url('images/img1.jpg') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  width: 100%
  height: auto;
}
h1 {
	font-size: 52px;
	margin-top: -16px;
	margin-left: 200px;
}
h2{
	margin-left: 345px;
	margin-top: 90px;
	font-size: 30px;
}
h4{
	font-size: 22px;
	margin-left: 230px;
	letter-spacing: 1px;
	color: #236B8E;
	text-shadow: 0px 1px;
}
</style>
</head>
<body>
<div class="logo">
	 <a href="homepg.php"><img src="images/img4.jpg" alt="logo"></a>
</div>
<p><b>Easy Transfer<b></p>
<div class="header">
<br>
<h2>Welcome To</h2>
<h1><strong>Credit Management</strong></h1>
<h4><b>Choose a user and transfer the credits <br>&nbsp;&nbsp;&nbsp;&nbsp; from one user to another user.<b></h4>
<form action="users.php">
<button class='button1' >Get Started</button>
</form>

</div>
</body>
<div class="fixed-footer">
        <div class="container">Copyright &copy; 2020 Credit Management by Parul Keshri   
		<a href="#" class="fa fa-facebook"></a>
		<a href="#" class="fa fa-twitter"></a>
		<a href="#" class="fa fa-google"></a>
		<a href="#" class="fa fa-linkedin"></a>
		</div>
    </div>

</html>
