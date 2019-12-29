<?php
session_start();

	// remove all session variables
session_unset();

// destroy the session
session_destroy();

echo "<script type='text/javascript'>
		alert('LogOut Done')
	</script>";
	echo "<script type='text/javascript'>
		location.href='login1.php'
	</script>";

?>
