<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <title>Bank Website</title>
</head>

<body>
  <!-------- nav bar-------->
  <?php
  include 'navbar.php';
  ?>
  <!--------------------------------------------------------------------------->
  <section id="banner">
    <div class="container">
      <div class="row">
        <div class="col md-6">
          <p class="bank-title">Spark Bank</p>
          <p>Welcome to Spark bank you are one step away to make your digital transaction.</p>
        </div>
        <div class="col-md-5 text-center">
          <img src="bankpic44.png" class="bank-image">
        </div>

      </div>
      <div class="container1">
        <svg viewBox="0 0 500 500" preserveAspectRatio="xMinYMin meet" style="z-index: -2;">

          <path d="M0, 100 C150, 200 350,
                0 500, 100 L500, 00 L0, 0 Z" style="stroke: none; 
                fill:rgba(30, 144, 225, 0.5);">
          </path>
        </svg>
      </div>
      <div class="container1">
        <svg viewBox="0 0 500 500" preserveAspectRatio="xMinYMin meet" style="z-index:-1;">

          <path d="M0, 80 C250, 0 350, 
              150 500, 50 L500, 00 L0, 0 Z" style="stroke: none; 
              fill:rgba(170, 27, 241, 0.192);">
          </path>
        </svg>
      </div>
    </div>
  </section>
  <!---------------------------------------------->

  <div class="container2">
    <div class="row">
      <div class="col-md-3">
        <img src="icon2.png" style="position: absolute; top: 400px; left: 15px;">
        <br><br>
        <a href="createuser.php"><button class="buttonic" style=" left:8px;">Create User</button></a>

      </div>
      <div class="col-md-3">
        <img src="transfer33.png" style="position: absolute; top: 400px;">
        <br><br>
        <a href="transfer.php"><button class="buttonic" style=" left: 300px;">Transfer Money</button></a>
      </div>

      <div class="col-md-4">
        <img src="history33.png" style="position: absolute; top: 390px;">
        <br>
        <a href="\banksystem\transhistory.php"><button class="buttonic" >Transaction history</button></a>
      </div>
    </div>
</div>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
    integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
    integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
    crossorigin="anonymous"></script>
    <footer>
    <a class="copywrite" href="#">&copy; 2021 | Created by Anjali Anil</a>
  </footer>
  

</body>

</html>