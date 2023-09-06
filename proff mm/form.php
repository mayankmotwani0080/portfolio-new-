<?php
    if($_POST['send']);
    {
        $name = $_POST('name');
        $email = $_POST('email');
        $subject = $_POST('subject');
        $message = $_POST('message');
    }    

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'portfolio_db';
    
    $conn = mysqli_connect($host,$user,$pass,$dbname);

    $sql = "INSERT INTO db1(name , email , subject , message) values ('$name','$email','$subject','$message')";

    mysqli_query($conn,$sql);
?>