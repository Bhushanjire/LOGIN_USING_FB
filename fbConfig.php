<?php

if (!session_id()) {
    session_start();
}
// Include the autoloader provided in the SDK
require_once '/lib/src/Facebook/autoload.php';
$app_id = "297687000767277";
$app_secret = "1e730acfd82bb4a9144fddbe1cb069c4";
$callbackurl = "https://localhost/LOGIN_USING_FB/callback.php";
$permissions = ['email']; // Optional permissions

$fb = new Facebook\Facebook([
    'app_id' => $app_id, // Replace {app-id} with your app id
    'app_secret' => $app_secret,
    'default_graph_version' => 'v2.2',
        ]);

$helper = $fb->getRedirectLoginHelper();


$loginUrl = $helper->getLoginUrl($callbackurl, $permissions);


