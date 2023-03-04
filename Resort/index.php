<!DOCTYPE html>
<html lang="es" data-theme="light" view-mode="ltr">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Resort">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="theme-color" content="#0134d4">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">

  <!-- Title -->
  <title>Iniciar Sesión</title>

  
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
</head>

<body>
  <!-- Preloader -->
  

  <!-- Internet Connection Status -->
  <div class="internet-connection-status" id="internetStatus" style="display: none; background-color: rgb(0, 184, 148);">Your internet connection is back.</div>

  <!-- Back Button -->
  <div class="login-back-button">
    <a href="index.php">
      <i class="bi bi-arrow-left-short"></i>
    </a>
  </div>

  <!-- Login Wrapper Area -->
  <div class="login-wrapper d-flex align-items-center justify-content-center">
    <div class="custom-container">
      <div class="text-center px-4">
        <img class="login-intro-img" style="max-width:7rem;" src="Recursos/logo1.png" alt="">
      </div>

      <!-- Register Form -->
      <div class="register-form mt-4">
        <h6 class="mb-3 text-center">Inicie sesión para continuar</h6>

        <form action="home.html">
          <div class="form-group">
            <p id="error"></p>
            <input class="form-control" onfocus="borrar()" type="text" id="username" placeholder="Ingrese correo electronico">
          </div>

          <div class="form-group position-relative">
            <input class="form-control" onfocus="borrar()"id="psw-input" type="password" placeholder="Ingrese contraseña">
            <div class="position-absolute" id="password-visibility">
              <i class="bi bi-eye"></i>
              <i class="bi bi-eye-slash"></i>
            </div>
          </div>

          <input class="btn btn-primary w-100" value="Iniciar sesión" type="button" onclick="login();">
        </form>
      </div>

      <!-- Login Meta -->
      <div class="login-meta-data text-center">
        <a class="stretched-link forgot-password d-block mt-3 mb-1" href="recuperarContra.php">Olvidaste tu contraseña?</a>
        <p class="mb-0">No tienes cuenta? <a class="stretched-link" href="registrar.php">Registrate ahora</a></p>
      </div>
    </div>
  </div>

  <!-- All JavaScript Files -->
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="js/JSAjax.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/slideToggle.min.js"></script>
  <script src="js/internet-status.js"></script>
  <script src="js/tiny-slider.js"></script>
  <script src="js/venobox.min.js"></script>
  <script src="js/countdown.js"></script>
  <script src="js/rangeslider.min.js"></script>
  <script src="js/vanilla-dataTables.min.js"></script>
  <script src="js/index.js"></script>
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/dark-rtl.js"></script>
  <script src="js/active.js"></script>
  <script src="js/pwa.js"></script>
</body>
</html>