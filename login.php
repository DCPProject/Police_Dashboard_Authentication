<?php
// login.php

$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "crimereport";
$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
} 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $query = "select *from user where username = '$username' && password = '$password';";
   

    $result = mysqli_query($conn,$query);

    $total = mysqli_num_rows($result);
   
    if($total>0)
    {
        session_start();
        $_SESSION['login'] = $username;
        header("Location: policeDashBoard.html");
    }
    else
    {
        echo"Login Failed";
    }
}
?>
