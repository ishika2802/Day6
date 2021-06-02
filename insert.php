<?php
    $host  = "localhost";
    $username = "root";
    $password = "";
    $dbname = "table1";

    $conn = mysqli_connect($host, $username, $password, $dbname);

    if(!$conn){
        die("connection failed".mysqli_connect_error());
    }

    $st_id = $_POST['st_id'];
    $st_enroll = $_POST['st_enroll'];
    $st_name = $_POST['st_name'];
    $st_pwd = $_POST['st_pwd'];
    $st_email = $_POST['st_email'];
    $st_sem = $_POST['st_sem'];
    $st_mobile = $_POST['st_mobile'];
    $st_dob = $_POST['st_dob'];
    $st_ad = $_POST['st_ad'];
    $st_city = $_POST['st_city'];

    $a = "insert into tbl_student values('$st_id', '$st_enroll', '$st_name', '$st_pwd', '$st_email', '$st_sem', '$st_mobile', '$st_dob', '$st_ad', '$st_city')";

    if(mysqli_query($conn, $a)){
        echo"<script>alert('data added');</script>";
    }
?>