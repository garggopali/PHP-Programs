<?php
$fb = new Facebook\Facebook([
  'app_id' => '354055134979673', // Replace {app-id} with your app id
  'app_secret' => '9e7eac57412837925aba186a5611fadf',
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('https://example.com/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';

?>