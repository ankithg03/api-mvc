<?php 
$data = file_get_contents('results.json');
echo 'content:' . $data . '<br>';
$tempArray = json_decode($data);
echo "<pre>";
foreach($tempArray as $arr) {
    echo json_encode($arr) . '<br>';
}

$jsonData = json_encode($tempArray);
file_put_contents('results.json', $data);
