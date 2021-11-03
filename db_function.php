<?php

$db = mysqli_connect("localhost", "root", "", "resto");

// $db = mysqli_connect("sql100.epizy.com", "epiz_30274451", "suCiWqDsqm68CX", "epiz_30274451_resto");

function query($query){
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];

    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}


?>