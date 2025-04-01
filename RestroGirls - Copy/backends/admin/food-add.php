<?php
session_start();

try {
    if (!file_exists('../connection-pdo.php')) {
        throw new Exception();
    } else {
        require_once('../connection-pdo.php');
    }
} catch (Exception $e) {
    $_SESSION['msg'] = 'There were some problems on the server! Try again later!';
    header('location: ../../admin/food-list.php');
    exit();
}

// Validate required POST fields
if (!isset($_POST['name']) || !isset($_POST['desc']) || !isset($_FILES['image']) || !isset($_POST['price'])) {
    $_SESSION['msg'] = 'Invalid form submission! Refresh the page!';
    header('location: ../../admin/food-list.php');
    exit();
}

// Input Validation
$regex = '/^[(A-Z)?(a-z)?(0-9)?\-?\_?\.?\s*]+$/';
if (!preg_match($regex, $_POST['name']) || !preg_match($regex, $_POST['desc'])) {
    $_SESSION['msg'] = 'Whoa! Invalid Inputs!';
    header('location: ../../admin/food-list.php');
    exit();
}

// Assign variables
$name = $_POST['name'];
$desc = $_POST['desc'];
$category = $_POST['category'];
$price = $_POST['price'];  // Add the price variable

// Validate the price input
if (!is_numeric($price) || $price <= 0) {
    $_SESSION['msg'] = 'Invalid price value! Please enter a positive number.';
    header('location: ../../admin/food-list.php');
    exit();
}

// Handle Image Upload
$imageName = '';
$targetDir = "../../uploads/";

if (!is_dir($targetDir)) {
    mkdir($targetDir, 0777, true); // Create the uploads folder if it doesn't exist
}

if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $imageTmpPath = $_FILES['image']['tmp_name'];
    $imageName = basename($_FILES['image']['name']);
    $imageExtension = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

    if (!in_array($imageExtension, $allowedExtensions)) {
        $_SESSION['msg'] = 'Invalid image format! Only JPG, JPEG, PNG, and GIF allowed!';
        header('location: ../../admin/food-list.php');
        exit();
    }

    $newImageName = uniqid('food_') . "." . $imageExtension;
    $targetFilePath = $targetDir . $newImageName;

    if (move_uploaded_file($imageTmpPath, $targetFilePath)) {
        $imageName = $newImageName;
    } else {
        $_SESSION['msg'] = 'Error uploading image!';
        header('location: ../../admin/food-list.php');
        exit();
    }
} else {
    $_SESSION['msg'] = 'Image file not uploaded!';
    header('location: ../../admin/food-list.php');
    exit();
}

// Insert into database
$sql = "INSERT INTO food (cat_id, fname, description, image, price) VALUES (?, ?, ?, ?, ?)";
$query = $pdoconn->prepare($sql);

if ($query->execute([$category, $name, $desc, $imageName, $price])) {
    $_SESSION['msg'] = 'Food Added Successfully!';
} else {
    $_SESSION['msg'] = 'Database error! Try again later!';
}

header('location: ../../admin/food-list.php');
exit();
?>
