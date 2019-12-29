<?php
session_start();
?>
<html>
<head>
	<title>register</title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>

@import url('https://fonts.googleapis.com/css?family=Mukta');
body{
font-family: 'Mukta', sans-serif;
height:100%;
scroll-behavior: smooth;
min-height:950px;
/* background-image: url(http://www.planwallpaper.com/static/images/Free-Wallpaper-Nature-Scenes.jpg); */
background-repeat: no-repeat;
background-size:cover;
background-position:center;
position:relative;
 overflow-y: hidden;
}
a{
text-decoration:none;
color:#444444;
}
/* .login-reg-panel{
 position: relative;
 top: 50%;
 transform: translateY(-50%);
 text-align:center;
 width:70%;
 right:0;left:0;
 margin:auto;
 height:400px;
 background-color: #FF4B5A;
} */
.white-panel{
 background-color: #ffff;
 height:900px;

 position:absolute;
 top:-50px;
 width:50%;
 margin-top: 50px;
 margin-bottom: 50px;
 right:calc(45% - 50px);
 /* transition:.3s ease-in-out; */
 z-index:0;
 box-shadow: 0 0 15px 9px #00000096;
}
/* .login-reg-panel input[type="radio"]{
 position:relative;
 display:none;
} */
/* .login-reg-panel{
 color:#FFFFFF;
} */
/* .login-reg-panel #label-login
 {
 border:1px solid #FFFFFF;
 padding:5px 5px;
 width:150px;
 height:100%;
 display:block;
 text-align:center;
 border-radius:10px;
 cursor:pointer;
 font-weight: 600;
 font-size: 18px;
} */
/* .login-info-box{
 width:30%;
 padding:0 50px;
 top:20%;
 left:0;
 position:absolute;
 text-align:left;
} */
/* .register-info-box{
 width:30%;
 padding:0 50px;
 top:20%;
 right:0;
 position:absolute;
 text-align:left;

} */
.right-log{right:50px !important;}

.login-show,
.register-show{
 z-index: 1;
 display:none;
 opacity:0;
 transition:0.3s ease-in-out;
 color:#242424;
 text-align:left;
 padding:50px;
}
.show-log-panel{
 display:block;
 opacity:0.9;
}
.login-show input[type="text"], .login-show input[type="password"]{
 width: 100%;
 display: block;
 margin:12px 0;
 padding: 5px;
 border: 1px solid #b5b5b5;
 outline: none;
}
.login-show select{
 width: 100%;
 display: block;
 margin:6px 0;
 padding: 5px;
 border: 1px solid #b5b5b5;
 outline: none;
}
.login-show input[type="email"]{
 width: 100%;
 display: block;
 margin:12px 0;
 padding: 5px;
 border: 1px solid #b5b5b5;
 outline: none;
}
.login-show input[type="number"]{
 width: 100%;
 display: block;
 margin:12px 0;
 padding: 5px;
 border: 1px solid #b5b5b5;
 outline: none;
}

.login-show input[type="submit"] {
 max-width: 150px;
 width: 100%;
 background: #444444;
 color: #f9f9f9;
 border: none;
 padding: 10px;
 text-transform: uppercase;
 border-radius: 2px;
 float:right;
 cursor:pointer;
}
.login-show a{
 display:inline-block;
 padding:10px 0;
}
a{
text-decoration:none;
color:#2c7715;
}
</style>

<script type="text/javascript">

    $(document).ready(function(){
    $('.login-info-box').fadeOut();
    $('.login-show').addClass('show-log-panel');
});


$('.login-reg-panel input[type="radio"]').on('change', function() {
    if($('#log-login-show').is(':checked')) {
        $('.register-info-box').fadeOut();
        $('.login-info-box').fadeIn();

        $('.white-panel').addClass('right-log');
        $('.register-show').addClass('show-log-panel');
        $('.login-show').removeClass('show-log-panel');

    }
    else if($('#log-reg-show').is(':checked')) {
        $('.register-info-box').fadeIn();
        $('.login-info-box').fadeOut();

        $('.white-panel').removeClass('right-log');

        $('.login-show').addClass('show-log-panel');
        $('.register-show').removeClass('show-log-panel');
    }
});


</script>

</head>
<body style="background-image:url(images/img6.jpg);">
 

      <div class="white-panel">
  			<div class="login-show">
  				<h2>SIGNUP</h2>

          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
           <input type="text"  name="userid" required placeholder="creat userid">
           <input type="email"  name="emailt" required placeholder="email">
           <input type="text"   name="name" required placeholder="Your Full Name">

            <!-- <span>year:</span> -->
            <select name="year" required placeholder="Your Class">
            		<option>fe</option>
            		<option>se</option>
            		<option>te</option>
            		<option>be</option>
            	</select><br><br>

              <!-- <span>Branch</span> -->
              <select  name="branch" required placeholder="Your Class">
              		<option>cse</option>
              		<option>mech</option>
              		<option>elect</option>
              		<option>entc</option>
              		<option>civil</option>
              	</select><br><br>

                <input type="password"  name="password1" required placeholder="Creat Password">
          <input type="submit"  value="submit">

          </form>


          <!-- <input type="text" placeholder="Email">
  				<input type="password" placeholder="Password">
  				<input type="button" value="Login"> -->
  				<a href="loginT.php">already registed!</a>
  			</div>
  			<!-- <div class="register-show">
  				<h2>REGISTER</h2>
  <a href="signup3.php"><input type="button" ></a>
  <a href="index.php"><input type="button" ></a>
        </div> -->
  		<!-- </div> -->
</div>
  </body>
  </html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
$userid=text_input($_POST['userid']);
$emailt=text_input($_POST['emailt']);
$name=text_input($_POST['name']);
$year=text_input($_POST['year']);
$branch=text_input($_POST['branch']);
$password1=text_input($_POST['password1']);

if(check_userid($userid)){
include 'config.php';
$sql="insert into `libraryt`(`userid`,`emailt`,`name` ,`year` ,`branch`,`password1`)
 values ('$userid','$emailt','$name', '$year','$branch','$password1')";

if ($conn->query($sql) === TRUE)
{
			echo "<script type='text/javascript'>
				alert('Signup Done')
			</script>";
			echo "<script type='text/javascript'>
				location.href='loginT.php'
			</script>";
		 
session_unset();
session_destroy();
}
else
{
	 		echo "Error: " . $sql . "<br>" . $conn->error."<br>";
}
$conn->close();
}
else
{
	echo "<script type='text/javascript'>
		alert('data already exists')
	</script>";
}
}

function check_userid($userid)
{
	include 'config.php';
	$sql="select * from libraryt where  `userid` ='$userid'";

	$result = $conn->query($sql);

if ($result->num_rows > 0) {


    return false;
}
else{
	return true;
}
$conn->close();
}

function text_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
