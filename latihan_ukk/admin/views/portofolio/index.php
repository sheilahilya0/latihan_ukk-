<?php
include("koneksi.php");
include("funtion/contact.php");

save_contact();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>portofolio</title>
    <!-- CSS Bootsrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?=baseurl;?>/asset/css/style.css" />
  </head>
  <body>
    <!--- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #ccccff">
      <div class="container">
        <a class="navbar-brand" href="#">sheila</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Project</a></li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a></li>
              </ul>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->
    $data['profile']
<?php foreach($data['profile'] as $pro) : ?>
<!-- Jumbotron -->
 <section class="jumbotron atas text-center">
   <img src="<?= baseurl;?>/asset/img/<?= $pro['foto']; ?>" alt="" class="img-thumbnail image rounded-circle" />
   <h1 class="display-4"><?= $pro['nama']; ?></h1>
   <p class="lead"><?= $pro['jabatan']; ?> | <?= $pro['perusahaan']; ?></p>
   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
     <path
     fill="#fff"
     fill-opacity="1"
     d="M0,224L40,224C80,224,160,224,240,192C320,160,400,96,480,96C560,96,640,160,720,176C800,192,880,160,960,170.7C1040,181,1120,235,1200,229.3C1280,224,1360,160,1400,128L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
 </section>
<?php endforeach ?>

    <!-- akhir jumbotron -->
    <!-- About -->
    <section id="About">
      <div class="row text-center">
        <h2>About</h2>
      </div>
     <div class="row justify-content-center fs-5 text-center">
          <?php foreach($data['about'] as $ab) : ?>
            <div class="col-md-4">
              <p><?= $ab['column1']; ?></p>
            </div>
            <div class="col-md-4">
              <p><?= $ab['column2']; ?></p>
            </div>
          <?php endforeach ?>
        </div>
    </section>
    <!-- Akhir About -->
<!-- Project -->
    <section id="projects">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>My projects</h2>
          </div>
        </div>
<div class="row justify-content-center fs-5 text-center">
          <?php foreach($data['about'] as $ab) : ?>
            <div class="col-md-4">
              <p><?= $ab['column1']; ?></p>
            </div>
            <div class="col-md-4">
              <p><?= $ab['column2']; ?></p>
            </div>
          <?php endforeach ?>
        </div>
     </section>
    <!-- Akhir Project -->
    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
           <form action="<?= baseurl;?>/Portofolio/pesan" method="POST">
     <div class="mb-3">
         <label for="name" class="form-label">Nama Lengkap</label>
         <input type="text" class="form-control" name="nama_k" id="name" aria-describedby="name" required>
     </div>
     <div class="mb-3">
         <label for="email" class="form-label">Email</label>
         <input type="email" class="form-control" name="email" id="email" aria-describedby="email" required>
     </div>
     <div class="mb-3">
         <label for="pesan" class="form-label">Pesan</label>
         <textarea class="form-control" name="pesan" id="pesan" rows="3" required></textarea>
     </div>
     <button type="submit" class="btn btn-primary">Kirim</button>
</form>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Contact -->
    
    <!-- Footer -->
    <footer class="bg-info text-white text-center pb-4">
      <p>Creater with <i class="bi bi-suit-heart-fill text-danger"></i> by <a href="https:/www.instagram.com/vinaaatae_"class="text-white fw-bold">shilya</a></p>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#a2d9ff" fill-opacity="1" d="M0,128L48,112C96,96,192,64,288,90.7C384,117,480,203,576,224C672,245,768,203,864,160C960,117,1056,75,1152,53.3C1248,32,1344,32,1392,32L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </footer>
    <!-- Akhir Footer -->
    <!-- javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
?>
