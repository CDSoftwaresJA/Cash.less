<?php
session_start();
echo 'Requests';
$cURLConnection = curl_init();
curl_setopt($cURLConnection, CURLOPT_URL, $_GET['request']);
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, array('apikey: LMhyOhFY5bEZTzPmZRCHPeMLxUyuJbbR'));
$list = curl_exec($cURLConnection);
curl_close($cURLConnection);
$jsonArrayResponse - json_decode($list);
echo $list;

?>