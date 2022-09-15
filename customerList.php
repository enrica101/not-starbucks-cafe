<?php 
require_once 'customer.php';
session_start();

// TODO: Refactor this into a function to increase maintainability
$conn = mysqli_connect('localhost', 'root', '', 'menu');
$customer = new Customer();

if(!$conn){
    die("Conneciton failed: " . mysqli_connect_error());
}

$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];

$sqlQuery = "SELECT MAX(customerNo) FROM customers";
$result = mysqli_query($conn, $sqlQuery);
$customerNo = $result->fetch_assoc();
foreach($customerNo as $key => $value){
    $customerNo = (int)$value;
    $sqlQuery = "SELECT * FROM customers WHERE customerNo='$customerNo'";
    $result = mysqli_query($conn, $sqlQuery);
    $customers = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // var_dump($customers);

    foreach ($customers as $key => $value) {
        // echo (int)$value['customerNo'];
        echo json_encode($customers);
    }
    
}




