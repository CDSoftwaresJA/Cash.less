<?php 

$host = getenv('IP');
$username = 'Cduncan';
$password = 'Damdog_101';
$dbname = 'db';
$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$money = $conn->query("SELECT * FROM cards");
$moneylist = $money->fetchAll(PDO::FETCH_ASSOC);



if (isset($_GET['display'])){
    foreach ($moneylist as $money):
    $trn=$money['number'];
    echo $trn;
    endforeach;
}



?>