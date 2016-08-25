<?php
session_start();
if(isset($_SESSION['name']) && isset($_SESSION['user_id'])) //check whether user already logged in with twitter
{

	echo "Name :".$_SESSION['name']."<br>";
	echo "Twitter ID :".$_SESSION['user_id']."<br>";
	echo "<br/><a href='exit.php'>Logout</a>";

}

$manager = new MongoDB\Driver\Manager("mongodb://localhost");
echo $_SESSION['user_id']."<br>";

$filter = ['User_id' => $_SESSION['user_id']];
$query = new MongoDB\Driver\Query($filter);


$rows = $manager->executeQuery("FairLife_Coupon_Twitter.influencers_", $query);
$rows_obj = $rows->toArray();
echo "<br />";
if (array_key_exists(0, $rows_obj)) {
  header('Location: sharelink.php');
}
else{
  header('Location: sharedlink.php');
}

?>
