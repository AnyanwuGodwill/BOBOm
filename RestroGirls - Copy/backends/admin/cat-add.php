<?php
session_start();

try {
    if (!file_exists('../connection-pdo.php'))
        throw new Exception();
    else
        require_once('../connection-pdo.php'); 
} catch (Exception $e) {
    $_SESSION['msg'] = 'There were some problems in the server! Try again later!';
    header('location: ../../admin/category-list.php');
    exit();
}

// Check if required POST variables are set
if (!isset($_POST['name']) || !isset($_POST['short_desc']) || !isset($_POST['long_desc'])) {
    $_SESSION['msg'] = 'Invalid POST data! Refresh the page!';
    header('location: ../../admin/category-list.php');
    exit();
}

// Regex for validation
$regex = '/^[(A-Z)?(a-z)?(0-9)?\-?\_?\.?\,?\s*]+$/';

if (!preg_match($regex, $_POST['name']) || !preg_match($regex, $_POST['short_desc']) || !preg_match($regex, $_POST['long_desc'])) {
    $_SESSION['msg'] = 'Invalid input detected!';
    header('location: ../../admin/category-list.php');
    exit();
}

$name = $_POST['name'];
$short_desc = $_POST['short_desc'];
$long_desc = $_POST['long_desc'];
$image_name = "";

// Handle image upload if provided
if (isset($_FILES['category_image']) && $_FILES['category_image']['error'] == 0) {
    $target_dir = "../../uploads/categories/";
    
    // Ensure the upload directory exists
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $image_name = time() . '_' . basename($_FILES['category_image']['name']);
    $target_file = $target_dir . $image_name;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];

    // Validate file type
    if (!in_array($imageFileType, $allowed_types)) {
        $_SESSION['msg'] = "Invalid file type! Only JPG, JPEG, PNG, and GIF are allowed.";
        header("Location: ../../admin/category-add.php");
        exit();
    }

    // Move uploaded file
    if (!move_uploaded_file($_FILES['category_image']['tmp_name'], $target_file)) {
        $_SESSION['msg'] = "Image upload failed!";
        header("Location: ../../admin/category-add.php");
        exit();
    }
}

// Insert category data into database
$sql = "INSERT INTO categories(name, short_desc, long_desc, image) VALUES(?, ?, ?, ?)";
$query = $pdoconn->prepare($sql);

if ($query->execute([$name, $short_desc, $long_desc, $image_name])) {
    $_SESSION['msg'] = 'Category Added Successfully!';
} else {
    $_SESSION['msg'] = 'Database error! Try again later!';
}

header('location: ../../admin/category-list.php');
exit();
?>
