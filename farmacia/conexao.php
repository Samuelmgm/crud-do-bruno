<?php
    $link = mysqli_connect( 'localhost', 'root' , '')
    or die("could not connect:".mysqli_error());
    mysqli_select_db($link, 'farmacia') or die("Could not select database");
?>