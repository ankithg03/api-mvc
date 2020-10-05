<?php 
$data = file_get_contents('results.json');
echo 'content:' . $data . '<br>';
file_put_contents('results.json', $data);
