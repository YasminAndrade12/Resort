<?php
    
    $mysql = new mysqli(
        "localhost",
        "root",
        "",
        "Resort"
    );

    if ($mysql->connect_error){
        die("Hay un error al conectar". $mysql->connect_error);
    }else{
        echo "Conectado";
    }