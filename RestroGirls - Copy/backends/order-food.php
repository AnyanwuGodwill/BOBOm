<?php

session_start();

try {

    if (!file_exists('connection-pdo.php'))
        throw new Exception();
    else
        require_once('connection-pdo.php');
        
} catch (Exception $e) {

    $arr = array ('code'=>"0",'msg'=>"There were some problem in the Server! Try after some time!");

    echo json_encode($arr);

    exit();
    
}

if (!isset($_SESSION['user']) || !isset($_SESSION['user_id'])) {
    $_SESSION['msg'] = "You must Log In First to Order Food!";
    header('location: ../foods.php');
    exit();
}

if (!isset($_REQUEST['id'])) {
    $_SESSION['msg'] = "Invalid food item! Please try again!";
    header('location: ../foods.php');
    exit();
}

date_default_timezone_set("Asia/Kolkata");

$food_id = $_REQUEST['id'];

$user_name = $_SESSION['user'];

$user_id = $_SESSION['user_id'];

$order_id = "RSTGF" . strval(mt_rand(100000, 999999));

$timest = date("d:m:Y h:i:sa");

// Fetch food details to add to the order message
$sql_food = "SELECT * FROM food WHERE id = ?";
$query_food = $pdoconn->prepare($sql_food);
$query_food->execute([$food_id]);
$food_details = $query_food->fetch(PDO::FETCH_ASSOC);

if ($food_details) {
    $food_name = $food_details['fname'];
    $food_price = $food_details['price'];  // Assuming you have a 'price' column in your 'food' table

    // Create the order message to send on WhatsApp
    $whatsapp_message = urlencode("New Order:\n\nOrder ID: $order_id\nFood: $food_name\nPrice: ₹$food_price\nOrdered by: $user_name\nTimestamp: $timest");

    // WhatsApp API URL with the message
    $whatsapp_url = 'https://wa.me/656872814?text=${encodeURIComponent(message)}';  // Replace 'yourwhatsappnumber' with your business number

    // Place the order in the database
    $sql = "INSERT INTO orders(order_id, user_id, food_id, user_name, timestamp) VALUES(?,?,?,?,?)";

    $query = $pdoconn->prepare($sql);

    if ($query->execute([$order_id, $user_id, $food_id, $user_name, $timest])) {
        $_SESSION['msg'] = 'Order Placed! Your Order ID is : ' . $order_id;
        
        // Redirect to WhatsApp with the order details
        header('Location: ' . $whatsapp_url);
        exit();

    } else {
        $_SESSION['msg'] = 'There were some problem in the server! Please try again after some time!';
        header('location: ../foods.php');
        exit();
    }
} else {
    $_SESSION['msg'] = 'Food item not found!';
    header('location: ../foods.php');
    exit();
}

?>
