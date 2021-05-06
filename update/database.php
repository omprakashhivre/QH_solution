 <?php

    $conn = mysqli_connect('localhost', 'root', '', 'hoteldc');
    if(!$conn) {
        echo 'Connection error: ' .mysqli_connect_error();
    }
    
?>