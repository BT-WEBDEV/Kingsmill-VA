<?php

require 'config.php';

///////////////////////////////////////////////////////////////////////////////
//
//  Uncomment both lines below to display error messages.
//
///////////////////////////////////////////////////////////////////////////////

ini_set('display_errors','On');
error_reporting(E_ALL);

var_dump($web_to_prospect_token);

// Sanitize POST array to prevent XSS attacks
$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

$query = array (
    'prospect' => array(
        'token' => $web_to_prospect_token,
        'contact' => array (
            'LeadSource' => "website",
            'FirstName' => $firstName,
            'LastName' => $lastName,
            'Email' => $email,
            'Phone' => $phone
  ),
  'request' => array (
        'pba__Comments__c' => $comment
    )
));

$query = json_encode($query);

$curl = curl_init($web_to_prospect_endpoint);
// Accept any server (peer) certificate on dev envs
if( $dev_env ) {
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
}
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $query);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(  "Content-type: application/json"));
$info = curl_getinfo($curl);
$response = curl_exec($curl);

$jsonResponse =  json_decode($response);

curl_close($curl);

if (isset($jsonResponse->{"errorMessage"})) {
    die("Error: " . $jsonResponse->{"errorMessage"});
} else {
    echo "Success";
}

?>