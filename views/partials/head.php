
<?php

use App\Core\Request;
  

?> 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/png"  href="../../public/assests/apple-icon-114x114.png">
  <link rel="manifest" href="../../public/assests/manifest.json">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Offline css files -->
 <link rel="stylesheet" href="../../public/css/tailwind.css">

  <!-- Online css files -->
  <title>
 <?= 'Fresh Market Hub | ' . ucfirst(Request::uri()) ?>  </title>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

  <style>
    body {
      font-family: 'Sansita', sans-serif;

    }

    .clear-left {
      clear: left;
    }

    .hero-image::after {
      display: block;
      position: absolute;
      background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0, #94b2ff 100%);
      bottom: 0;
      left: 0;
      right: 0;
      height: 15vh;
      width: 100%;
      content: '';
    }
  </style>
</head>

<body class="antialiased bg-gray-200 text-gray-900 font-sans">

  <?php require 'nav.php'; ?>


</body>

</html> 