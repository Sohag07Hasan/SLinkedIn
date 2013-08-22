<?php

include '../simplelinkedin.class.php';

//Set up the API
$ln = new SimpleLinkedIn('YOUR_API_KEY', 'YOUR_API_SECRET');
$ln->addScope('rw_nus');

//Authorize.
if($ln->authorize()){
    //Fetch user info
    $network_updates = $ln->fetch('GET', '/v1/people/~/network/updates?type=SHAR');
	print_r($network_updates);
}
?>
