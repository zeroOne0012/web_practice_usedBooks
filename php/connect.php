<?php
    $con = mysqli_connect("34.64.209.230", "user123", "user123", "developDB");
    if($con->connect_error) echo "<h2>접속 실패</h2>";
    else echo "<h2>접속 성공</h2>"
?>