<?php
session_start();
if(!isset($_SESSION['key']))
{
	echo "<script type='text/javascript'>
		alert('Need Login First')
	</script>";
	echo "<script type='text/javascript'>
		location.href='loginT.php'
	</script>";
}
 ?>
 <html>
 <head>
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

 	<title>cc</title>



 </head>
<body style="background-color:#fce8f0;background-image:url(images/img23.jpg);background-size:cover;" class="input100" >

<?php
    $branch = $_SESSION["branch"];
    $year = $_SESSION["year"];
  include 'config.php';
$query = "SELECT  `name`, `roll`, `year`, `branch`, `reason`, `date1`, `date2` , `id3` FROM `lib1` WHERE `approve`='2'&&`year`='$year' && `branch`='$branch'  ORDER BY `id3` desc";

 $result = mysqli_query($conn,$query);


 if($result->num_rows > 0){
 	while($record = $result->fetch_assoc())
 	{
 ?>

<div  class="contact100-form-btn">
	the leave of <?php echo $record['name'] ?>
 roll number	<?php echo $record['roll'] ?>
 from	<?php echo $record['year'] ?>
 of	 <?php echo $record['branch'] ?>
 department for	<?php echo $record['reason'] ?>
 from	<?php echo $record['date1'] ?>
 to	<?php echo $record['date2'] ?>
<!-- <div  class="div4"><button onclick="location.href='formclg2.php'">approve</button></div> -->
 is approved
  </div>
<br>

<?php

}
}

?>


<?php
    $branch = $_SESSION["branch"];
    $year = $_SESSION["year"];
  include 'config.php';
$query = "SELECT  `name`, `roll`, `year`, `branch`, `reason`, `date1`, `date2` , `id3` FROM `lib1` WHERE `approve`='4'&&`year`='$year' && `branch`='$branch'  ORDER BY `id3` desc";

 $result = mysqli_query($conn,$query);


 if($result->num_rows > 0){
 	while($record = $result->fetch_assoc())
 	{
 ?>



 <div  class="contact100-form-btn">
 	the leave of <?php echo $record['name'] ?>
  roll number	<?php echo $record['roll'] ?>
  from	<?php echo $record['year'] ?>
  of	 <?php echo $record['branch'] ?>
  department for	<?php echo $record['reason'] ?>
  from	<?php echo $record['date1'] ?>
  to	<?php echo $record['date2'] ?>
 <!-- <div  class="div4"><button onclick="location.href='formclg2.php'">approve</button></div> -->
  is denied
   </div>
 <br>


<?php

}
}

?>

<div class="w3-container" style="text-align:center;">
<br><br><br>
<a href="logout2.php"  button class="contact100-form-btn" >logout</a><br>
<a href="cc1.php"  button class="contact100-form-btn">back</a>
</div>





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
