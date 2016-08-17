<?php
session_start();
require_once('twitterlogin/twitteroauth/twitteroauth.php');
// require_once('twitteroauth/OAuth.php');
include('twitterlogin/config.php');


if(isset($_SESSION['request_token']) && ($_SESSION['request_token_secret']))
{
  $connection = new TwitterOAuth($CONSUMER_KEY, $CONSUMER_SECRET, $_SESSION['request_token'], $_SESSION['request_token_secret']);
  echo "Connection established<br>";
  $options = array("screen_name" => "ABtoABhinav", "text" => "Hey that's my message");
  $response = $connection->post('https://api.twitter.com/1.1/direct_messages/new.json', $options);
  echo $connection->http_code;
}
else
{
	echo "Error Sending Direct Message";
	// header('Location: ../index.html');
}

?>