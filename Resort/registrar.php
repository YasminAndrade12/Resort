<!DOCTYPE html>
<html lang="es" data-theme="light" view-mode="ltr" >
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Affan - PWA Mobile HTML Template">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <meta name="theme-color" content="#0134d4">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">

  <!-- Title -->
  <title>Resort</title>

  <!-- Favicon -->
  <link rel="icon" href="img/core-img/favicon.ico">
  <link rel="apple-touch-icon" href="img/icons/icon-96x96.png">
  <link rel="apple-touch-icon" sizes="152x152" href="img/icons/icon-152x152.png">
  <link rel="apple-touch-icon" sizes="167x167" href="img/icons/icon-167x167.png">
  <link rel="apple-touch-icon" sizes="180x180" href="img/icons/icon-180x180.png">

  <!-- Style CSS -->
  <link rel="stylesheet" href="style.css">

  <!-- Web App Manifest -->
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<body><style>
		#pswmeter {
			height: 4px;
			background-color: #e2e9fe;
			position: relative;
			overflow: hidden;
			border-radius: 4px;
		}
    #pswmeter .password-strength-meter-score {
      height: inherit;
      width: 0%;
      transition: .5s ease;
      background: #ea4c62;
    }
    #pswmeter .password-strength-meter-score.psms-25 {width: 25%; background: #ea4c62;}
    #pswmeter .password-strength-meter-score.psms-50 {width: 50%; background: #f1b10f;}
    #pswmeter .password-strength-meter-score.psms-75 {width: 75%; background: #1787b8;}
    #pswmeter .password-strength-meter-score.psms-100 {width: 100%; background: #2ecc4a;}</style>
  <!-- Preloader -->
  

  <!-- Internet Connection Status -->
  <div class="internet-connection-status" id="internetStatus" style="display: none; background-color: rgb(0, 184, 148);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tu conexi??n a Internet ha vuelto.</font></font></div>

  <!-- Back Button -->
  <div class="login-back-button">
    <a href="login.html">
      <i class="bi bi-arrow-left-short"></i>
    </a>
  </div>

  <!-- Login Wrapper Area -->
  <div class="login-wrapper d-flex align-items-center justify-content-center">
    <div class="custom-container">
      <div class="text-center px-4">
        <img class="login-intro-img" style="max-height:7rem;" src="Recursos/11.png" alt="">
      </div>

      <!-- Register Form -->
      <div class="register-form mt-4">
        <h6 class="mb-3 text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Reg??strese para continuar</font></font></h6>
        
        <form action="otp.html">
          <div class="form-group text-start mb-3">
            <input class="form-control" type="text" placeholder="Direcci??n de correo electr??nico">
          </div>

          <div class="form-group text-start mb-3">
            <input class="form-control" type="text" placeholder="Nombre de usuario">
          </div>

          <div class="form-group text-start mb-3 position-relative">
            <input class="form-control" id="psw-input" type="password" placeholder="Nueva contrase??a">
            <div class="position-absolute" id="password-visibility">
              <i class="bi bi-eye"></i>
              <i class="bi bi-eye-slash"></i>
            </div>
          </div>

          <div class="form-check mb-3">
            <input class="form-check-input" id="checkedCheckbox" type="checkbox" value="" checked="">
            <label class="form-check-label text-muted fw-normal" for="checkedCheckbox"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Estoy de acuerdo con los <a class="stretched-link" data-bs-toggle="modal" data-bs-target="#exampleModal" href="index.php" style="font-size: 14px;color: #1f0757;font-weight: 500;">t??rminos y la pol??tica</a>.</font></font></label>
          </div>

          <button class="btn btn-primary w-100" type="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Inscribirse</font></font></button>
        </form>
      </div>

      <!-- Login Meta -->
      <div class="login-meta-data text-center">
        <p class="mt-3 mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">??Ya tienes una cuenta? </font></font><a class="stretched-link" href="index.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Acceso</font></font></a></p>
      </div>
    </div>
  </div>




<div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="card">
                <div class="card-body">
                <h6><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">POL??TICA DE PRIVACIDAD</font></font></h6>
                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Al usar o acceder al servicio de cualquier manera, usted reconoce que acepta las pr??cticas y pol??ticas descritas en esta Pol??tica de privacidad, y por la presente acepta que recopilaremos, usaremos y compartiremos su informaci??n de las siguientes maneras.</font></font></p>
                <h6><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">QU?? DATOS RECOPILAMOS Y POR QU?? RECOPILAMOS</font></font></h6>
                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Como ocurre con la mayor??a de los sitios web, recopilamos cierta informaci??n (como el proveedor de telefon??a m??vil, el sistema operativo, etc.) autom??ticamente y la almacenamos en archivos de registro. </font><font style="vertical-align: inherit;">Usamos esta informaci??n, que no identifica a los usuarios individuales, para analizar tendencias, administrar el sitio web, rastrear los movimientos de los usuarios en el sitio web y recopilar informaci??n demogr??fica sobre nuestra base de usuarios en general. </font><font style="vertical-align: inherit;">Podemos vincular algunos de estos datos recopilados autom??ticamente a cierta informaci??n de identificaci??n personal.</font></font></p>
                <h6><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">INFORMACI??N DE IDENTIFICACI??N PERSONAL</font></font></h6>
                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Si usted es un Cliente, cuando se registre con nosotros a trav??s de nuestro sitio web, le pediremos cierta informaci??n de identificaci??n personal, como su nombre y apellido, nombre de la empresa, direcci??n de correo electr??nico, direcci??n de facturaci??n e informaci??n de la tarjeta de cr??dito. </font><font style="vertical-align: inherit;">Puede revisar y actualizar esta informaci??n de identificaci??n personal en su perfil iniciando sesi??n y editando dicha informaci??n en su tablero. </font><font style="vertical-align: inherit;">Si decide eliminar toda su informaci??n, podemos cancelar su cuenta. </font><font style="vertical-align: inherit;">Podemos conservar una copia archivada de sus registros seg??n lo exija la ley o para fines comerciales razonables.</font></font></p>
                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Debido a la naturaleza del Servicio, excepto para ayudar a los Clientes con ciertos problemas t??cnicos limitados o por obligaci??n legal, no accederemos a ninguno de los Contenidos que cargue en el Servicio.</font></font></p>
                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cierta informaci??n de identificaci??n personal tambi??n se puede proporcionar a intermediarios y terceros que nos ayudan con el Servicio, pero que no pueden hacer uso de dicha informaci??n m??s que para ayudarnos a proporcionar el Servicio. </font><font style="vertical-align: inherit;">Sin embargo, salvo que se indique lo contrario en esta Pol??tica de privacidad, no alquilaremos ni venderemos su informaci??n de identificaci??n personal a terceros.</font></font></p>
                <h6><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">USO DE LA INFORMACI??N</font></font></h6>
                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Para nuestros Clientes, usamos la informaci??n personal principalmente para proporcionar los Servicios y contactar a nuestros Clientes con respecto a las actividades de la cuenta, nuevas versiones y ofertas de productos, u otras comunicaciones relevantes para los Servicios. </font><font style="vertical-align: inherit;">No vendemos ni compartimos ninguna informaci??n de identificaci??n personal o de otro tipo de los Usuarios finales a terceros, excepto, por supuesto, al Cliente correspondiente cuyo sitio web est?? utilizando.</font></font></p>
                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Si se comunica con nosotros por correo electr??nico o completando un formulario de registro, podemos mantener un registro de su informaci??n de contacto y correspondencia y podemos usar su direcci??n de correo electr??nico y cualquier informaci??n que nos proporcione en su mensaje para responderle. </font><font style="vertical-align: inherit;">Adem??s, podemos utilizar la informaci??n personal descrita anteriormente para enviarle informaci??n sobre el Servicio. </font><font style="vertical-align: inherit;">Si decide en cualquier momento que ya no desea recibir dicha informaci??n o comunicaciones de nuestra parte, env??enos un correo electr??nico a y solicite que lo eliminemos de nuestra lista. </font><font style="vertical-align: inherit;">Las circunstancias en las que podemos compartir dicha informaci??n con terceros se describen a continuaci??n en "Cumplimiento del proceso legal".</font></font></p>
                <h6><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ALMACENAMIENTO Y SEGURIDAD DE LA INFORMACI??N</font></font></h6>
                <p class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Opera redes de datos seguras protegidas por firewalls est??ndar de la industria y sistemas de protecci??n con contrase??a. </font><font style="vertical-align: inherit;">Nuestras pol??ticas de seguridad y privacidad se revisan y mejoran peri??dicamente seg??n sea necesario, y solo las personas autorizadas tienen acceso a la informaci??n proporcionada por nuestros Clientes.</font></font></p>
                </div>
            </div>
        </div>
</div>


  <!-- All JavaScript Files -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/internet-status.js"></script>
  <script src="js/dark-rtl.js"></script>
  <script src="js/pswmeter.js"></script>
  <script src="js/active.js"></script>
  <script src="js/pwa.js"></script>


