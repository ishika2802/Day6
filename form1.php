<?php
    $host  = "localhost";
    $username = "root";
    $password = "";
    $dbname = "table1";

    $conn = mysqli_connect($host, $username, $password, $dbname);

    if(!$conn){
        die("connection failed" . mysqli_connect_error());
    }

    $a = mysqli_query($conn , "insert into tbl_student(st_id, st_enroll, st_name, st_pwd, st_email, st_sem, st_mobile, st_dob, st_ad, st_city) 
    values('1', '202101', 'ishika','1234','ishika@gmail.com','7','8888888888','01/06/21','flats','Ahmedabad')");

?>