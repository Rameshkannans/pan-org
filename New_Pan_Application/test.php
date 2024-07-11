<?php
session_start();
if (!isset($_SESSION['admin_reg_id'])) {
    header('Location: adminlogin.php');
    exit();
}
include '../server.php';
if (isset($_GET['download_App'])) {
    $down_app = $_GET['download_App'];
    $db = new Database();
    $fetched_new_pan_id = $db->select_new_pan_data_id($down_app);

    // $name = $fetched_new_pan_id['new_call_name'];
    $name = "Ramesh Kannan S";
    
    $parts = preg_split('/\s+/', $name, 2);
    
    if (count($parts) > 1) {
        $before_space = $parts[0];
        $after_space = $parts[1];
        echo "Before space: $before_space<br>";
        echo "After space: $after_space<br>";
    } else {
        echo "No space found in the name: $name<br>";
    }
    


}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>


</body>

</html>