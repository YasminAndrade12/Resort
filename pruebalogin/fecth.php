<?php

    if ($_SERVER['REQUEST_METHOD']=='GET'){
        require_once("db.php");

        $correo =$_GET['id'];

        $query ="SELECT * FROM usuario WHERE correo ='2119100548@soy.utj.edu.mx'";
        $result = $mysql->query($query);

        if ($mysql->affected_rows >0){
           while($row= $result->fetch_assoc()){
            $array=$row;
           }

           echo json_encode($array);
        }else{
            echo "no se encontraron resultados con ese correo";
        }

        $result->close();
        $mysql ->close();
    }