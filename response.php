<?php

//secho "test hello shane";

$url = 'values.json';
$data = file_get_contents($url);
$arrayData = json_decode($data);
//var_dump($arrayData);
$return_data['status'] = '2';

$return_data['msg'] = 'Your message.';
$return_data['value'] = 5;
echo json_encode($arrayData);
exit;
