<?php
    $conn = mysqli_connect("localhost:3310  ","root","","wad_project3");

    $result = mysqli_query($conn,"SELECT * FROM students");

    var_dump(mysqli_fetch_object($result));

    // $row = $result -> fetch_array(MYSQLI_NUM);
    // echo $row[0]."<br>", $row[1]."<br>", $row[2]."<br>", $row[3];


    // // Check connection
    // if($mysqli -> connect_errno) {
    //     echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    //     exit();
    // } else {
    //     echo "Berhasil";
    // }
?>