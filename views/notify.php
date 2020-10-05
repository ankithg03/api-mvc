<?php
$data['post'] = $_POST;
$data['server'] = $_SERVER;
$inp = file_get_contents('results.json');
$tempArray = json_decode($inp);
date_default_timezone_set('Asia/Kolkata');
$currentTime = date( 'd-m-Y h:i:s A', time () );
$data['time'] = $currentTime;
echo $currentTime;
if($tempArray){
    $tempArray[] = $data;
} else {
    $tempArray[] = $data;
}
$jsonData = json_encode($tempArray);
echo '<br><pre>' . $jsonData;
file_put_contents('results.json', $jsonData);
