<?php
    //---------QTY--------
    $query = "SELECT * FROM tomatoes";
    $query_run = mysqli_query($conn, $query);
    $qty= 0;
    while ($num = mysqli_fetch_assoc ($query_run)) {
        $qty += $num['qty'];
    }
?>