<!DOCTYPE html>
<html lang="es" data-theme="light" view-mode="ltr">
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
  <style>
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
    #pswmeter .password-strength-meter-score.psms-100 {width: 100%; background: #2ecc4a;}
</style>

</head>

<body>

  <!-- Preloader -->
  <!-- Internet Connection Status -->
  <div class="internet-connection-status" id="internetStatus" style="display: none; background-color: rgb(0, 184, 148);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tu conexión a Internet ha vuelto.</font></font></div>

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
        <img class="login-intro-img" style="max-height:13rem;" src="Recursos/36.png" alt="">
      </div>

      <!-- Register Form -->
      <div class="register-form mt-4">
        <form action="index.php">
          <h6 class="mb-3 text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Actualiza tu contraseña</font></font></h6>

          <div class="form-group text-start mb-3">
            <input class="form-control" type="text" placeholder="Ingrese el código de seguridad de 8 dígitos">
          </div>

          <div class="form-group text-start mb-3 position-relative">
            <input class="form-control" id="psw-input" type="password" placeholder="Nueva contraseña">
            <div class="position-absolute" id="password-visibility">
              <i class="bi bi-eye"></i>
              <i class="bi bi-eye-slash"></i>
            </div>
          </div>


          <div class="form-group text-start mb-3">
            <input class="form-control" type="password" placeholder="Reescribir contraseña">
          </div>

          <button class="btn btn-primary w-100" type="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Actualiza contraseña</font></font></button>
        </form>
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


