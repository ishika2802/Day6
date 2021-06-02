<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "food_blog";

    $con = mysqli_connect($host, $username, $password, $dbname);

    if(!$con){
        die(mysqli_connect_error());
    }
    
    $fname = $_POST['fname'];
    $comment = $_POST['comment'];

    $get_data = "insert into feedback values('$fname', '$comment')";
    if(mysqli_query($con, $get_data)){
        echo"<script>alert('Thanks! your feedback has been recorded');</script>";
    }
