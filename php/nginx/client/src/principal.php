<?php
//session_start();
include_once('php/conexao.php');
include("php/verifica_login.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Registro WIT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style2.css">
  <style>
    @media screen and (max-width: 600px) {

      #sidebar,
      #sidebarCollapse {
        visibility: hidden;
      }
    }

    #sidebar .dropdown-item:hover {
      background-color: rgba(0, 59, 250, .50) !important;
    }

    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgb(29, 28, 28);
      z-index: 999;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .loader {
      width: 80px;
      height: 80px;
    }

    .loader::after {
      content: "";
      display: block;
      width: 65px;
      height: 65px;
      border-radius: 50%;
      border: 6px solid #fff;
      border-color: #fff transparent #fff transparent;
      margin: 8px;
      animation: spin 2s ease infinite;
    }

    @keyframes spin {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }
  </style>
</head>

<body>
  <?php
  if ($_SESSION["bem_vindo"]) {
  ?>
    <div class="blr3">
      <div class="modal-dialog modal-md  modal-dialog-centered" role="document">
        <div class="modal-content rounded-0">
          <div class="modal-body py-0">
            <div class="d-block main-content">
              <img src="images/home.png" alt="Image" class="img-fluid">
              <div class="content-text p-4">

                <h3 class="mb-2">Bem vindo!</h3>
                <p class="h5 mb-4"><?php echo $_SESSION["nome"] ?></p>
                <div class="d-flex">
                  <div class="ml-auto">
                    <a href="principal.php" class="btn btn-primary px-4">Ok</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php
    unset($_SESSION["bem_vindo"]);
  } else {
  ?>
    <main>
      <div class="wrapper d-flex align-items-stretch">
        <!-- menu sidebar -->
        <?php include "php/menu.php" ?>

        <!-- Page Content  -->
        <div id="content" class="container w-75 col-md-8 p-2 p-md-5">

           <!-- Menu superior -->
        <?php include "php/menu_superior.php"?>

          <div class="row">
            <div class="col-md-6">
              <h2 class="blr2 mb-4">Wit Solutions</h2>
              <p class="blr2">Bem vindo ao Sistema de Registros</p>
              <p class="blr2">Este sistema foi desenvolvido pelo time Wit Solutions para facilitar a resolução de problemas apresentados pelos usuários.</p>
            </div>
            <div class="col-md-6">
              <img class="blr" src="images/home.png" width="150%" alt="pessoa com notebook">
            </div>
          </div>
        </div>
      </div>
    </main>
    <div class="overlay">
      <div class="loader"></div>
    </div>
  <?php
  }
  ?>
  <script>
    const overlay = document.querySelector(".overlay");
    window.addEventListener("load", function() {
      overlay.style.display = "none";
    })
  </script>
  <script src="https://kit.fontawesome.com/5a9643203d.js" crossorigin="anonymous"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>
