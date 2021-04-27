<?php

    $conn = mysqli_connect('localhost', 'root');
    mysqli_select_db($conn, 'webinardb');

    if (!$conn) {
        # code...
        echo "Error while connecting to Database...";
    }

?>