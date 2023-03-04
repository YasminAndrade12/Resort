<?php
include_once("../conex/conexiones.php");
session_start();

if(isset($_POST['usuario']) && isset($_POST['password'])){
    // username and password sent from Form
    $username=mysqli_real_escape_string($conn,$_POST['usuario']); 
    //Here converting passsword into MD5 encryption. 
    $password=md5(mysqli_real_escape_string($conn,$_POST['password'])); 
    $result=mysqli_query($conn,"SELECT Id_usuario FROM Usuario WHERE Correo='$username' and Contrasena='$password'");
    $count=mysqli_num_rows($result);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    // If result matched $username and $password, table row  must be 1 row
    if($count == 1){
    $_SESSION["timeout"] = time();
    $_SESSION['usuario']=$row['Id_usuario']; //Storing user session value.
    echo "correcto";
    }else{
    echo "incorrecto";   
    }

}

?>