<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

    <!-- My Css -->
    <link rel="stylesheet" href="style.css" />

    <title>Transaksi</title>
  </head>
  <body class="bg-dark text-light">
    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark bg-gradient shadow">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="img/Logo The Throne.png" alt="" width="200" height="50" />
        </a>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Form Transaksi -->
    <section>
      <div class="countainer">
        <div class="row justify-content-center">
          <div class="col-md-6 border border-5 rounded-3 shadow-lg">
            <form method="post" action="struk.php">
              <div class="mb-3">
                <label for="email" class="form-la bel fw-bold">email</label>
                <input name="email" type="email" class="form-control rounded-pill" id="email" aria-describedby="email" />
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input name="password" type="password" class="form-control rounded-pill" id="password" />
              </div>
              <!-- Pemilihan Game -->
              <div class="row">
                <div class="col">
                  <p>Select Your Game</p>
                  <select name="game" id="game" class="form-select rounded-pill" aria-label="Default select example">
                    <option selected>-</option>
                    <option value="PUBG">PUBG</option>
                    <option value="FreeFire">Free Fire</option>
                    <option value="Valorant">Valorant</option>
                  </select>
                </div>
              </div>
              <!-- Akhir Pemilihan Game -->

              <!-- Pemilihan Tingkat PUBG -->
              <div class="row">
                <div class="col">
                  <p>Select your Level</p>
                  <select name="level" id="level1" name="level" class="form-select rounded-pill" aria-label="Default select example">
                    <option selected>-</option>
                    <option value="gold">Gold</option>
                    <option value="platinum">Platinum</option>
                    <option value="diamond">Diamond</option>
                  </select>
                </div>
              </div>
              <!-- Akhir Pemilihan Tingkat -->

              <div class="row mt-4">
                <div class="col">
                  <button type="submit" class="btn btn-primary">Pesan</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </div>
              <?php
if (isset($_POST['submit'])) {
	echo ('<h1>Hasil Input</h1>');
	echo ('<ul>');
	echo ('<li>Nama: ' . $_POST['email'] . '</li>');
	echo ('</ul>');
}?>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Form Transaksi -->

     <!-- Footer -->
     <footer class="bg-dark bg-gradient text-center pb-1">
      <p><i class="bi bi-dpad-fill"></i>keep Play and having Fun <i class="bi bi-dpad-fill"></i></p>
    </footer>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
  </body>
</html>
