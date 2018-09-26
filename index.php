<?php
?>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
  <script type="text/javascript" src="js/scripts.js"></script>
  <link rel="stylesheet" href="css/master.css">
</head>
<body>

  <div class="header">
    <img src="img/logo_cobe_soft.png" class="logo" alt="Logotipo Empresa Desarrolladora">
    <div class="header-right">
      <a id="loginBtn" data-toggle="modal" href="#loginModal">Ingresar</a>
    </div>
  </div>

  <div class="container bg-faded">
    <?php include "pages/home.php"; ?>
  </div>

  <div class="footer">
    <div class="footer-right">
      Colombia, 2018.
    </div>
  </div>

<div class="modalContainer">
</div>

</body>
