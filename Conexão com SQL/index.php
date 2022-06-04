<?php
    include './config.php';

    $query = $con -> query("Select nome, sobrenome from usuario");
    $dbs = $con -> query("show databases"); 

    while($result = mysqli_fetch_array($dbs)){
        print_r($result[0]);
        echo "</br>";
    }

    echo "<ul>";
    while($row = $query -> fetch_object()){
        echo "<li>".$row->nome." " .$row-> sobrenome."</li>";
    }
    echo "</ul>";
