<?php

require_once __DIR__ . '/vendor/autoload.php';

$fb = new Facebook\Facebook([
	'app_id' => '834616683391182',
	'app_secret' => '293a1ecef786f29df2b7872403cd5741',
	'default_graph_version' => 'v2.10',
]);


print_r($fb);




try {

$pageHelper = $fb->getPageTabHelper();
$accessToken = $pageHelper->getAccessToken();

} catch(Facebook\FacebookExceptions\FacebookResponseException $e) {
	echo 'Facebook Response Exception: ' . $e->getMessage();

} catch(Facebook\Exceptions\FacebookSDKException $e) {
	echo 'Facebook Response Exception' . $e->getMessage();

}

var_dump($accesToken);

if (isset($accessToken)) {
	echo 'Logged In.\n';
} else {
   	echo 'Not Logged In \n';

}

try {
	$response = $fb->get('/me');
} catch(Facebook\Exceptions\FacebookSDKException $e) {
	echo 'error in getting response: ' . $e->getMessage();
}

print_r($response);

?>



