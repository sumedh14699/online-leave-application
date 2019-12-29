<?php
session_start();
if(!isset($_SESSION['key']))
{
	echo "<script type='text/javascript'>
		alert('Need Login First')
	</script>";
	echo "<script type='text/javascript'>
		location.href='login1.php'
	</script>";
}
 ?>

<html lang="en">
<head>
	<title>student page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color:#fce8f0;background-image:url(images/img25.jpg);background-size: cover;">
<div>	<?php
		include 'config.php';
		$libno = $_SESSION['libno'];
		$email = $_SESSION['email'];
		$name = $_SESSION["name"];
		$roll = $_SESSION["roll"];
		$year = $_SESSION["year"];
		$branch = $_SESSION["branch"];
		$password1 = $_SESSION["password1"];
	$query = "SELECT  `email`,`name`, `roll`, `year`, `branch`, `reason`, `date1`, `date2` , `id3` FROM `lib1` WHERE `approve`='2'&&`roll`='$roll' && `year`='$year' && `branch`='$branch' ";

		$result = mysqli_query($conn,$query);

		if($result->num_rows > 0){
		while (   $record = $result->fetch_assoc())
		{
		?>
	<div class="contact100-form-btn">

	<?php echo $record['name'] ?>
	<?php echo $record['roll'] ?>
	<?php echo $record['year'] ?>
	<?php echo $record['branch'] ?>
	your leave for
	<?php echo $record['reason'] ?>
	from  <?php echo $record['date1'] ?>
		to <?php echo $record['date2'] ?>
		is approved
	</div>
	<br>
	<?php }} ?>
	<?php
	//cc
	include 'config.php';
	$libno = $_SESSION['libno'];
	$email = $_SESSION['email'];
	$name = $_SESSION["name"];
	$roll = $_SESSION["roll"];
	$year = $_SESSION["year"];
	$branch = $_SESSION["branch"];
	$password1 = $_SESSION["password1"];
	$query = "SELECT  `email`,`name`, `roll`, `year`, `branch`, `reason`, `date1`, `date2` , `id3` FROM `lib1` WHERE `approve`='3'&&`roll`='$roll' && `year`='$year' && `branch`='$branch' ";

	$result = mysqli_query($conn,$query);

	if($result->num_rows > 0){
		while ($record = $result->fetch_assoc() ) {
	?>
	<div class="contact100-form-btn">

	<?php echo $record['name'] ?>
	<?php echo $record['roll'] ?>
	<?php echo $record['year'] ?>
	<?php echo $record['branch'] ?>
	your leave for
	<?php echo $record['reason'] ?>
	from  <?php echo $record['date1'] ?>
		to <?php echo $record['date2'] ?>
		is denayed by cc
	</div>
	<br>
	<?php }} ?>
	<?php
	//hod
	include 'config.php';
	$libno = $_SESSION['libno'];
	$email = $_SESSION['email'];
	$name = $_SESSION["name"];
	$roll = $_SESSION["roll"];
	$year = $_SESSION["year"];
	$branch = $_SESSION["branch"];
	$password1 = $_SESSION["password1"];
	$query = "SELECT  `email`,`name`, `roll`, `year`, `branch`, `reason`, `date1`, `date2` , `id3` FROM `lib1` WHERE `approve`='4'&&`roll`='$roll' && `year`='$year' && `branch`='$branch' ";

	$result = mysqli_query($conn,$query);

	if($result->num_rows > 0){
		while ( $record = $result->fetch_assoc())
		{

	?>
	<div class="contact100-form-btn" >

	<?php echo $record['name'] ?>
	<?php echo $record['roll'] ?>
	<?php echo $record['year'] ?>
	<?php echo $record['branch'] ?>
	your leave for
	<?php echo $record['reason'] ?>
	from  <?php echo $record['date1'] ?>
		to <?php echo $record['date2'] ?>
		is denayed by hod
	</div>
	<br>
	<?php }} ?>

</div>
<br><br>
			<div class="container-contact100-form-btn">
		 		<span>
		 		 <a href="login1.php" button class="contact100-form-btn" style="margin-left:1150px;text-decoration:none;">logout</a>

		  		</span>
				
		</div>
 
	<div class="container-contact100" >
		<!-- <div class="contact100-map"   data-pin="images/icons/map-marker.png"  ></div> -->
<!-- <div class="contact100-btn-show"> -->


		<button class="contact100-btn-show">
			<i class="fa fa-envelope-o" aria-hidden="true" ></i>
		</button>
<!-- </div> -->
		<div class="wrap-contact100">
			<button class="contact100-btn-hide">
				<i class="fa fa-close" aria-hidden="true"></i>
			</button>

				<?php
					include 'config.php';
					$libno = $_SESSION['libno'];
				  $email = $_SESSION['email'];
				  $name = $_SESSION["name"];
			    $roll = $_SESSION["roll"];
			    $year = $_SESSION["year"];
			    $branch = $_SESSION["branch"];
					$query = "select * from library where libno='$libno'";

					$result = mysqli_query($conn,$query);
					if($result->num_rows > 0){
						$record = $result->fetch_assoc();

					}
				 ?>


<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="contact100-form validate-form" method="post" style="text-align: left; " enctype="multipart/form-data">

				<span class="contact100-form-title">
					leave application
				</span>

				<span class="label-input100">Respected Sir/Madam,</span>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">i am</span>
					<input class="input100" type="text" value="<?php echo $record['name'] ?>" name="name" placeholder="Enter your name"  readonly >
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
				<span class="label-input100">my roll number is </span>
				<input class="input100" type="number" value="<?php echo $record['roll'] ?>" name="roll"  readonly >
				<span class="focus-input100"></span>
			</div>

			<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
			<span class="label-input100">from </span>
			<input class="input100" type="text" value="<?php echo $record['year'] ?>" name="year" readonly  >
			<span class="focus-input100"></span>
		</div>

		<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
		<span class="label-input100">of </span>
		<input class="input100" type="text" value="<?php echo $record['branch'] ?>" name="branch" readonly> dept
		<span class="focus-input100"></span>
	</div>

				<span class="label-input100">I would like to request you grant me leave</span>
						<span class="focus-input100"></span>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">from</span>
					<input class="input100" type="date" value="" name="date1" placeholder="Enter your email addess">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">to</span>
					<input class="input100" type="date" value="" name="date2" placeholder="Enter your email addess">
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">as a reason</span>
					<textarea class="input100" type="text" value="" name="reason"></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">input image just for verification purpose ...</span><br><br>
					<!-- <button class="contact100-form-btn" type="file" name="image"><button> -->
						<input button class="input100" type="file" name="image" >
					<span class="focus-input100"></span>
				</div>



<span class="label-input100">Kindly consider my application and grant me the said leave.<br><br> Thanking you</span>
<br><br><br><br><br><br><br><br>


				<div class="container-contact100-form-btn">
					<!-- <button type="submit" name="submit" class="contact100-form-btn"> -->
						<span>
							<input button class="contact100-form-btn" type="submit" name="submit">
							<!-- <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i> -->
						</span>
					<!-- </button> -->
				</div>
			</form>

			<span class="contact100-more">
				For any question contact ur cc!
			</span>
		</div>
	</div>
	
	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit']))
{
//$libno=test_input($_POST['libno'])
$name=test_input($_POST['name']);
$roll=test_input($_POST['roll']);
$year=test_input($_POST['year']);
$branch=test_input($_POST['branch']);
$reason=test_input($_POST['reason']);
$date1=test_input($_POST['date1']);
$date2=test_input($_POST['date2']);
$image = $_FILES['image']['name'];
$approve= "0" ;
include 'config.php';

$sql="insert into `lib1`( `libno`,`email`,`name`,`roll`,`year`,`branch`,`reason`,`date1`,`date2`,`image`,`approve`)
values( '$libno','$email','$name','$roll','$year','$branch','$reason','$date1','$date2','$image','$approve')";

$image = $_FILES['image']['name'];

$target = "images/".basename($image);


if ($conn->query($sql) === TRUE)
	{
		move_uploaded_file($_FILES['image']['tmp_name'], $target);
		include 'config.php';
		echo $pqr = "SELECT  `emailt` FROM `libraryt` WHERE  `year`='$year' && `branch`='$branch'";

$result = mysqli_query($conn,$pqr);
$row = $result->fetch_assoc();
$to = $row['emailt'];
$subject = 'leave application from' ;
$message = 'ok' ;
$from = 'From: <abc@gmail.com>'. "\r\n";

if(mail($to,$subject,$message,$from))
{
echo "<script type='text/JavaScript'>
alert('mail sent')
</script>";

}

echo "<script type='text/javascript'>
	alert('request sent!')
</script>";


	echo "<script type='text/javascript'>
    location.href='student2.php'
  </script>";

	}
else
	{
	 echo "Error: " . $sql . "<br>" . $conn->error."<br>";
	}


$conn->close();
}


	function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



function get_details($libno)
{
	include 'config.php';
	$sql=" select   `email`,`name`,`roll`,`year`, `branch` from `library` where libno='$libno' ";

	$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    return $result;
}
$conn->close();
}

?>
