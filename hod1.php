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
 <?php
 $page = $_SERVER['PHP_SELF'];
 $sec = "15";
 ?>
 <head>
<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	 <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
	<title>hod</title>


<style>

a{
text-decoration:none;
color:#2c7715;
}
.card{max-width: 250px;
min-width: 200px;
}
</style>

 </head>
 <body style="background-color:#fce8f0;background-image:url(images/img22.jpg);background-size:cover;" class="input100" >
<div class="card-deck" style="width:100%">

<?php
    $branch = $_SESSION["branch"];
include 'config.php';
$query = "SELECT  `email`,`name`, `roll`, `year`, `branch`, `reason`, `date1`, `date2` ,`image`, `id3` FROM `lib1` WHERE `approve`='1' && `branch`='$branch'  ORDER BY `id3` desc";

 $result = mysqli_query($conn,$query);



 if($result->num_rows > 0){
 	while($record = $result->fetch_assoc())
 	{
 ?>


  <div class="card" style="width:40px;">
 	 <?php $src = './images/'.$record['image']; ?>
    <img class="card-img-top" src="<?php echo $src; ?>" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><?php echo $record['name'] ?></h5>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">roll number <?php echo $record['roll'] ?> from <?php echo $record['year'] ?> of <?php echo $record['branch'] ?></li>
      <li class="list-group-item">applying leave for <?php echo $record['reason'] ?></li>
      <li class="list-group-item">from <?php echo $record['date1'] ?> to <?php echo $record['date2'] ?> </li>
    </ul>
 	 <p class="card-text"></p>
 </div>
 	 <div class="card-body">
      <!-- <a href="#" class="card-link">Card link</a> -->
 <form action="" method="post"style="text-align:center;"><input type='hidden' name='id3' style="background-color:#D65076;" value=<?php echo $record['id3']; ?>><button class="contact100-form-btn" onclick="" name='approve' >approve</button></form><br>
 <form action="" method="post" style="text-align:center;"><input type='hidden' name='id3'  style="background-color:#D65076;" value=<?php echo $record['id3']; ?>><button class="contact100-form-btn" onclick="" name='deny'>deny</button></form>
 		 <!-- <a href="#" class="card-link">Another link</a> -->
    </div>
  </div>



 <!--
 <div  class="div4"><?php //echo $record['name'] ?></div>
 <div  class="div4"><?php //echo $record['roll'] ?></div>
 <div  class="div4"><?php //echo $record['year'] ?></div>
 <div  class="div4"><?php //echo $record['branch'] ?></div>
 <div  class="div4"><?php //echo $record['reason'] ?></div>
 <div  class="div4"><?php //echo $record['date1'] ?></div>
 <div  class="div4"><?php //echo $record['date2'] ?></div>
 <?php// $src = './images/'.$record['image']; ?>
 <div  ><img src="<?php //echo $src; ?>" alt=""></div>-->
 <!-- <div  class="div4"><button onclick="location.href='formclg2.php'">approve</button></div> -->
 <!--<form action="" method="post"><div  class="div4"><input type='hidden' name='id3' style="background-color:#D65076;" value=<?php //echo $record['id3']; ?>><button onclick="" name='approve'>approve</button></div></form>
 <form action="" method="post"><div  class="div4"><input type='hidden' name='id3'  style="background-color:#D65076;" value=<?php //echo $record['id3']; ?>><button onclick="" name='deny'>deny</button></div></form>
  -->


 <?php

 }

 }
 ?>
</div>
<br><br>
<div class="w3-container" style="text-align:center;">
<a href="logout2.php"  button class="contact100-form-btn" >logout</a><br><br>
<a href="hod2.php"  button class="contact100-form-btn">approved/denayed aplications</a>
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

<?php
if (isset($_POST['approve'])) {
//	echo "<script>alert(".$_POST['id3'].");</script>";

		 $id3 = $_POST['id3'];
  	$sql="update lib1 set `approve`= 2  where id3='$id3' ";
						include 'config.php';

						if ($conn->query($sql) === TRUE) {
							//echo '<script type="text/javascript">alert("Data update")</script>';
							include 'config.php';


					$result = mysqli_query($conn,$query);
					$record = $result->fetch_assoc();
					$to = $record['email'];
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
				    location.href='hod1.php'
				  </script>";
							 	exit;
							}
						else
						{
							 echo "Error: " . $sql . "<br>" . $conn->error."<br>";
						}
						$conn->close();


					}


					if (isset($_POST['deny'])) {
						//echo "<script>alert(".$_POST['id3'].");</script>";

							 $id3 = $_POST['id3'];

										    $sql="update lib1 set `approve`= 4  where id3='$id3' ";
											include 'config.php';

											if ($conn->query($sql) === TRUE) {
												//echo '<script type="text/javascript">alert("Data update")</script>';
												echo "<script type='text/javascript'>
											    location.href='hod1.php'
											  </script>";
												 	exit;
												}
											else
											{
												 echo "Error: " . $sql . "<br>" . $conn->error."<br>";
											}
										}
											$conn->close();
 ?>
