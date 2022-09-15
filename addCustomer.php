<!-- <?php
// spl_autoload_register(function ($class_name) {
//     include $class_name . '.php';
// });
// session_start();

// $conn = mysqli_connect('localhost', 'root', '', 'menu');

// if(!$conn){
//     die("Conneciton failed: " . mysqli_connect_error());
// }
// $fname = $_GET['firstName'];
// $lname = $_GET['lastName'];
// $triggerValue = $_GET['trigger'];

// switch ($triggerValue) {
//     case 'addCustomer':
//         $query = "INSERT INTO customers (firstName, lastName) VALUES ('$fname', '$lname')";
//         mysqli_query($conn, $query);
//         echo $fname;

//         $query = "SELECT MAX(customerNo) FROM customers";
//         $result = mysqli_query($conn, $query);
//         $customerInfo = mysqli_fetch_all($result, MYSQLI_ASSOC);

//         //$customerInfo returns an object array from the result of the query hence the need for the foreach loop
//         foreach ($customerInfo as $key => $value) {
//             $customerNo = (int)$value['MAX(customerNo)'];
//             $_SESSION['orderNo'] = $customerNo;
//         }
//         break;
// }

?> -->