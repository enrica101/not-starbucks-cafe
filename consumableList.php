<?php 

$conn = mysqli_connect('localhost', 'root', '', 'menu');

if(!$conn){
    die("Conneciton failed: " . mysqli_connect_error());
}

$sqlQuery = 'SELECT * FROM consumables';
$result = mysqli_query($conn, $sqlQuery);
$consumables = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($consumables);
