function login(){

    var username=$("#username").val();
    var password=$("#psw-input").val();
    
    var valores = {
        "usuario": username,
        "password": password
    } 
    
    if($.trim(username).length > 0 && $.trim(password).length>0){
        $.ajax({
                type: "POST",
                url: "phps/valida.php",
                data: valores,
                cache: false,
                success: function(data){
                    if(data == "correcto"){
                        console.log(data)
                        window.location.href = "app/home";
                    }else{
                //Shake animation effect.
                        console.log(data)
                    $("#error").html("<span style='color:#cc0000'>Error:</span> Contraseña o Correo invalido. ");
                    }
                }
    
        });
    }else{
        $("#error").html("<span style='color:#cc0000'>Favor de llenar todos los campos.</span>  ");
    }
    return false;
    };
    
    
    function borrar(){
        $("#error").html("");
    }