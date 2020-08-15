<?php include 'dbcon.php'?>

<html>
<head>
<title>
Transfer Credit</title>
<style>

</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="css/viewuser1.css" >
</head>

<body>
	<?php 

	if(isset($_GET['Id'])) 
	{   
    //Session Start
	session_start();	
	$_SESSION['Id'] = $_GET['Id'];
	}
	?>
	<div class="logo">
	 <a href="homepg.php"><img src="images/img4.jpg" alt="logo"></a>
	 <h3>&nbsp;Easy Transfer</h3>
	</div>
	<div class="container1">
	<p align='right'>
	<button class='button1' onclick="redirect()">Back</button>
	</p>
	<script>
	function redirect() {
		window.location.href = "users.php";
	}
</script>
	<?php
	if(isset($_GET['errors'])){
		$error=$_GET['errors'];
		echo "<div class='alert alert-danger'>
            $error</div>";
			
	}
	if(isset($_GET['success'])){
		$success= $_GET['success'];
		echo "<div class='alert alert-success'>
           $success</div>";
	}?>
	<div class="login-wrap">
	<div class="login-form">
	    <form method="POST" action="transfercredit.php">
		<img src="images/img3.jpg" alt="Transfer Credit">
		<hr>
		<div class="head">
			<h1>Transfer Credit</h1>
			<h2>From:</h2>
			<?php
				$txt = $_GET['Id'];
				$result = mysqli_query($con,"SELECT * FROM users where Id=" . $txt);
				echo "<table id=\"my_table1\" border='1'>
				<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Current Credits</th>
				</tr>";

				while($row = mysqli_fetch_array($result)) 
				{
				echo "<tr>";
				echo "<td>" . $row['Id'] . "</td>";
				echo "<td>" . $row['Name'] . "</td>";
				echo "<td>" . $row['Email'] . "</td>";
				echo "<td>" . $row['Credit'] . "</td>";
				echo "</tr>";
				}
				echo "</table>";
			?>
			<h2>Select Name to transfer the Credits:</h2>
			<select class="form-control" required name="touser" id="listu1">
			<option value="">Select Users</option>
                <?php
				   // var $space = " ";
					$txt = $_GET['Id'];
                    $query = "SELECT * FROM users where Id!='".$txt."'";
                    $result = mysqli_query($con,$query);

                    while($row = mysqli_fetch_array($result))
                    {?>
                    <option value="<?php echo $row['Id'];?>"><?php echo $row['Name']; echo " "; echo " - "; echo $row['Credit'];?></option>
					<?php
                    }
				?>
            </select>
			<br><br>
			<label for="name"><b>Amount</b></label>
			<br>
			<input type="text" id="amt" name="credits" required="required">
			<input name="fromtc" type="hidden" value="<?php echo $txt;?>">
			<br>
			<button class='button2' name='transfer' onclick="myfunction()" >Transfer Credits</button>
			</form>	
			<br><br><br>
			<!--<script>
			function myfunction(){
				alert();
			}
			</script>-->
		</div>
	</div>
	</div>
	<br>
	    
</div>

</body>
</html>
