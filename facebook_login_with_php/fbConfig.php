<?php
session_start();

//Include Facebook SDK
require_once 'inc/facebook.php';

/*
 * Configuration and setup FB API
 */
$appId = '354055134979673'; //Facebook App ID
$appSecret = '9e7eac57412837925aba186a5611fadf'; // Facebook App Secret
$redirectURL = 'http://localhost/facebook_login_with_php/'; // Callback URL
$fbPermissions = 'email';  //Required facebook permissions

//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret
));
$fbUser = $facebook->getUser();
?>