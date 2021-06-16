<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']?></title>
    <link rel="stylesheet" href="<?= BASEURL;?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL;?>/css/bootstrap.min.css"><!-- bootstrap pop up -->
    <link rel="stylesheet" href="style.css">
    <link href="features.css" rel="stylesheet">
    
</head>
<body>
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand text-white" href="<?= BASEURL;?>">REBOi</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="<?= BASEURL;?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" href="<?= BASEURL;?>/participant2">Participant</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" href="<?= BASEURL;?>/About">Donasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" href="<?= BASEURL;?>/About/page">Tips</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" href="<?= BASEURL;?>/login2">Login Admin</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
</body>
