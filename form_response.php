<?php

// $host = "sql109.infinityfree.com";
// $uname =  "if0_35966064";
// $pass = "poorpeople1";
// $db = "if0_35966064_kamal";





// $conn = mysqli_connect("$host","$uname","$pass","$db");
$conn = mysqli_connect("sql305.infinityfree.com", "if0_35966064", "poorpeople1", "if0_35966064_kamal");

$name = $_POST["name"];
$phone = $_POST["phone"];

$Email=$_POST["email"];
$message = $_POST["message"];




$sql = "INSERT INTO `contact`(`name`, `phone`, `email`, `message`) VALUES ('$name','$phone', '$Email','$message')";

    if (mysqli_query($conn, $sql)) {
        header("location:thankyou.html");

        } 
        else {

        echo "try again".mysqli_error($conn);
    }

    mysqli_close($conn);


?>