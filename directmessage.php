<?php
session_start();
require_once('twitterlogin/twitteroauth/twitteroauth.php');
// require_once('twitteroauth/OAuth.php');
include('twitterlogin/config.php');



if(isset($_SESSION['request_token']) && ($_SESSION['request_token_secret']))
{
  $connection_1 = new TwitterOAuth($CONSUMER_KEY, $CONSUMER_SECRET, $ACCESS_TOKEN_KEY, $ACCESS_TOKEN_SECRET);
  $options = array("screen_name" => "abtoabhinav", "text" => "Hey that's my message");
  $response = $connection_1->post('https://api.twitter.com/1.1/direct_messages/new.json', $options);
  header('Location: Coupon.php');
}
else
{
	header('Location: sharelink.php');
}

?>
