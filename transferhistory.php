<?php
$con=mysqli_connect("localhost","root","","test");

// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$query = "SELECT * FROM transferrecord";
$result = mysqli_query($con,$query);
?>

<html>
<head>
<title>
Transfer History
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="css/viewuser1.css" >
<style>
	#my_table2{
		margin-left: 55px;
		font-size: 18px;
		width: 600px;
		margin-top: 30px;
		border-collapse: collapse;
	}
	th,td{
		padding: 8px 4px;
		text-align: center;
	}
	th{
		font-size: 19px;
	}
.login-form img{
	width: 545px;
	height:300px;
	position:relative;
	margin-top:0px;
	margin-left: 35px;
}
</style>
</head>
<body>
	<div class="logo">
	 <a href="homepg.php"><img src="images/img4.jpg" alt="logo"></a>
	 <h3>&nbsp;Easy Transfer</h3>
	</div>
	<div class="container1">
		<p align='right'>
	<button class='btn1' onclick="redirect()">Home</button>
	</p>
	<script>
	function redirect() {
		window.location.href = "homepg.php";
	}
	</script>
	<div class="login-wrap2">
	<div class="login-form">
	    <form method="GET">
		<div class="container2">
			<img src="images/img5.jpg" alt="Transfer Credit">
			<button class="btn" formaction="users.php">Back</button>
		</div>
		<hr>
		<div class="head">
			<h1>Transfer History</h1>
			<?php
				
				echo "<table id=\"my_table2\" border='1'>
				<tr>
				<th>Id</th>
				<th>From User</th>
				<th>To User</th>
				<th>Credit Amount<br>Transfered</th>
				<th>Date & Time</th>
				</tr>";

				while($row = mysqli_fetch_array($result)) 
				{
				echo "<tbody>";
				echo "<tr>";
				echo "<td>" . $row['Id'] . "</td>";
				echo "<td>" . $row['From_User'] . "</td>";
				echo "<td>" . $row['To_User'] . "</td>";
				echo "<td>" . $row['CreditTransfered'] . "</td>";
				echo "<td>" . $row['DateTime'] . "</td>";
				echo "</tr>";
				echo "</tbody>";
				}
				echo "</table>";
			?>
		</div>
		<br><br><br>
	</div>
	</div>
	<br><br>
</body>
</html>