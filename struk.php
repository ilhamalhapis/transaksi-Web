<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Transaksi Berhasil</title>
  </head>
  <body class="bg-dark text-light">
    <!-- Navbar -->
  <nav class="navbar navbar-dark bg-dark shadow">
      <div class="container">
        <a class="navbar-brand " href="#">
          <img src="img/Logo The Throne.png" alt="" width="200" height="50" />
        </a>
      </div>
    </nav>
  <!-- navbar -->

  <!-- Sturk Transaksi  -->
  <div class="container">
    <div class="row mt-4  justify-content-center">
      <div class="col col-md-6 border border-5 rounded-3 shadow-lg">
        <p class="text-center pt-4 pb-5 fs-2">Transaksi </p>
<?php 
  $variabel = $_POST['email'];
  echo "<h4>Nama   : $variabel<h4>" 
  ?>

<?php 
  $variabel1 = $_POST['game'];
  echo "<h4>Game   : $variabel1<h4>"
  ?>
  
<?php 
  $variabel2 = $_POST['level'];
  echo "<h4>Tingkat : $variabel2</h4>"
  ?>
  <br>
        <div class="row text-center fs-1 pt-5">
          <div class="col">
            <P>Pesanan Anda Berhasil</P>
          </div>
        </div>
        <div class="row text-center fs-4 pt-3 pb-4">
          <div class="col">
            <P>Hourseman sedang memproses Pesanan anda</P>
          </div>
        <div class="row text-center fs-6 pt-2">
          <div class="col">
            <p>silahkan periksa Email anda Untuk Pembayaran</p>
          </div>
        </div>        
        </div>
      </div>
    </div>
  </div>
<!-- Akhir Sturk Transaksi  -->
  
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>




