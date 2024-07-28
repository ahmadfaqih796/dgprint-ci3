<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">

   <title>CV. AgungSejahtera</title>

   <!-- Custom fonts for this template-->
   <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


   <!-- My CSS -->
   <link href="<?= base_url('assets/'); ?>frontend/css/style.css" rel="stylesheet">

   <!-- Bootstrap CSS -->
   <link href="<?= base_url('assets/'); ?>frontend/css/bootstrap.min.css" rel="stylesheet">

   <!-- Custom styles for this template-->
   <!-- <link href="<//?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet"> -->
   <link href="<?= base_url('assets/'); ?>img/favicon.png" type="image/x-icon" rel="shortcut icon">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

<body>

   <nav class="navbar fixed-top navbar-expand-lg navbar-dark shadow-lg">
      <a class="navbar-brand ml-2" href="#">CV. Agung Sejahtera</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="container">
         <div class="collapse navbar-collapse" id="navbarSupportedContent ">
            <ul class="navbar-nav m-auto">
               <li class="nav-item"><a class="nav-link" href="#banner">Beranda</a></li>
               <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
               <li class="nav-item"><a class="nav-link" href="#testimoni">Testimoni</a></li>
               <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
               <li class="nav-item dropdown pesanskr">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                     Pesan Sekarang
                  </a>
                  <div class="dropdown-menu">
                     <a class="dropdown-item pl-3" href="#"><img class="img-menu mr-2 ml-0" src="<?= base_url('assets/') ?>img/note-sticky-solid.svg" alt="" width="20" height="20"></i>Sticker</a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item pl-3" href="#"><img class="img-menu mr-2 ml-0" src="<?= base_url('assets/') ?>img/file-image-light.svg" alt="" width="20" height="20"></i>Brosur</a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item pl-3" href="#"><img class="img-menu mr-2 ml-0" src="<?= base_url('assets/') ?>img/id-card-solid.svg" alt="" width="20" height="20"></i>Kartu Nama</a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item pl-3" href="#"><img class="img-menu mr-2 ml-0" src="<?= base_url('assets/') ?>img/image-regular.svg" alt="" width="20" height="20"></i>Spanduk</a>

                  </div>
               </li>
            </ul>
         </div>
      </div>
      <div>
         <img src="<?= base_url('assets/') ?>frontend/img/line.png" alt="line" width="20" height="30">
      </div>

      <div class="d-flex">
         <button class="btn btn-outline-light mr-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
         <button class="btn btn-success " data-bs-toggle="modal" data-bs-target="#registerModal">Daftar</button>
      </div>
   </nav>

   <!-- Modal -->
   <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <?= form_open('login') ?>
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="form-group">
                  <label>Username</label>
                  <input class="form-control" type="text" name="username" required autocomplete="off" />
               </div>
               <div class="form-group">
                  <label>Password</label>
                  <input class="form-control" type="password" name="password" required autocomplete="off" />
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               <input class="btn btn-primary" type="submit" value="Login" name="login" />
               <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
            <?= form_close() ?>
         </div>
      </div>
   </div>

   <!-- Modal -->
   <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <?= form_open('register') ?>
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="exampleModalLabel">Daftar</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="form-group">
                  <label>Username</label>
                  <input class="form-control" type="text" required name="username" autocomplete="off" />
               </div>
               <div class="form-group">
                  <label>E-mail</label>
                  <input class="form-control" type="text" required name="email" autocomplete="off" />
               </div>
               <div class="form-group">
                  <label>Password</label>
                  <input class="form-control" type="password" required name="password" autocomplete="off" />
               </div>
               <div class="form-group">
                  <label>Nama</label>
                  <input class="form-control" type="text" required name="nama" autocomplete="off" />
               </div>
               <div class="form-group">
                  <label>Nomor HP</label>
                  <input class="form-control" type="number" required name="no_hp" autocomplete="off" />
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               <input class="btn btn-primary" type="submit" value="Buat Akun" name="register" />
               <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
            <?= form_close() ?>
         </div>
      </div>
   </div>