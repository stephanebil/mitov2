<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

  <!-- tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<header>
  <?php 
      include ("partials/_nav.php")
  ?>
  <!-- partie parallax -->
  <section
    class=" flex items-center justify-center h-screen m-auto mb-12 bg-fixed bg-center bg-cover "
    style="background-image: url(assets/img/mito-header.jpeg)">

    <div class="bg-black bg-opacity-50 bg-cover absolute w-full h-full "></div>
    <div class="p-5 text-white rounded-xl relative z-1">
      <h2 class=" text-lg text-green-300">Le leader français du Bio</h2>
      <h1 class="font-black text-5xl md:text-6xl">Bienvenue chez Mito</h1>
    </div>
</section>
</header>
<main>