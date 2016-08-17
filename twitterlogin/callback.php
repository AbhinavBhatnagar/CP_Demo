<?php 
session_set_cookie_params(0);
session_start(); 
?> 
<html>
<body>
<div align="center">
<h2>Twitter Account Details</h2>
<?php

if(isset($_SESSION['name']) && isset($_SESSION['twitter_id'])) //check whether user already logged in with twitter
{

	echo "Name :".$_SESSION['name']."<br>";
	echo "Twitter ID :".$_SESSION['twitter_id']."<br>";
	echo "Image :<img src='".$_SESSION['image']."'/><br>";
	echo "<br/><a href='logout.php'>Logout</a>";

}
?>
</div>
</body>

</html>