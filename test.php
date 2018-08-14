<?php
    // $Date = "2018-08-14";
    $Date = date('Y-m-d');
    echo date('Y-m-d', strtotime($Date. ' + 1 days'));
    // echo date('Y-m-d', strtotime($Date. ' + 2 days'));
?>