<?php
//Databse Connection file
include('dbconnection.php');
if (isset($_POST['submit'])) {
	//getting the post values
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$contno = $_POST['contactno'];
	$email = $_POST['email'];
	$add = $_POST['address'];

	// Query for data insertion
	$query = mysqli_query($con, "insert into tblusers(FirstName,LastName, MobileNumber, Email, Address) value('$fname','$lname', '$contno', '$email', '$add' )");
	if ($query) {
		echo "<script>alert('You have successfully inserted the data');</script>";
		echo "<script type='text/javascript'> document.location ='index.php'; </script>";
	} else {
		echo "<script>alert('Something Went Wrong. Please try again');</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
	<title>PHP Crud Operation!!</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/estiloInsert.css">
</head>

<body>
	<div class="signup-form">
		<form method="POST">
			<h2>Fill Data</h2>
			<p class="hint-text">Fill below form.</p>
			<div class="form-group">
				<div class="row">
					<div class="col"><input type="text" class="form-control" name="fname" placeholder="First Name"
							required="true"></div>
					<div class="col"><input type="text" class="form-control" name="lname" placeholder="Last Name"
							required="true"></div>
				</div>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="contactno" placeholder="Enter your Mobile Number"
					required="true" maxlength="10" pattern="[0-9]+">
			</div>
			<div class="form-group">
				<input type="email" class="form-control" name="email" placeholder="Enter your Email id" required="true">
			</div>

			<div class="form-group">
				<textarea class="form-control" name="address" placeholder="Enter Your Address"
					required="true"></textarea>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Submit</button>
			</div>
		</form>
		<div class="text-center">View Aready Inserted Data!! <a href="index.php">View</a></div>
	</div>
</body>

</html>