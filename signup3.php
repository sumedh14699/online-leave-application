<?php
session_start();
?>

<html>
<head>
	<title>register</title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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

.white-panel{
 background-color: #ffff ;
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
           <input type="text"  name="libno" required placeholder="enter library number">
           <input type="email"  name="email" required placeholder="email">
           <input type="text"   name="name" required placeholder="Your Full Name">
					 <input type="number"  name="roll" required placeholder="roll NUmber">
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
          <input type="submit"  value="submit" name="signup">

          </form>


  				<a href="login1.php">already registed!</a>
  			</div>

</div>
  </body>
  </html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
$libno=text_input($_POST['libno']);
$email=text_input($_POST['email']);
$name=text_input($_POST['name']);
$roll=text_input($_POST['roll']);
$year=text_input($_POST['year']);
$branch=text_input($_POST['branch']);
$password1=text_input($_POST['password1']);

if(check_libno($libno)){
include 'config.php';
$sql="insert into `library`(`libno`,`email`,`name`,`roll`,`year` ,`branch`,`password1`)
 values ('$libno','$email','$name','$roll','$year','$branch','$password1')";

if ($conn->query($sql) === TRUE)
{
			echo "<script type='text/javascript'>
				alert('Signup Done')
			</script>";
			echo "<script type='text/javascript'>
				location.href='login1.php'
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
function check_libno($libno)
{
	include 'config.php';
	$sql="select * from library where  `libno` ='$libno'";

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
