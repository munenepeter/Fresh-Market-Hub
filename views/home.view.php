<?php require 'partials/head.php'; ?>
<!-- hover:shadow-md hover:border-opacity-0 transform hover:-translate-y-1 transition-all duration-200 -->
<main>
  <?php
  // if (!isset($_SESSION['id'])) {
  //   $ffg= 79;
  //   dd($ffg);
    
  //  }
  // $router = new App\Core\Router;
  // dd($router);
  ?>

  <div class="w-full">
    <div class="h-auto rounded bg-transparent  flex flex-col items-center pt-12 sm:pt-24 pb-16 sm:pb-28 md:pb-48 lg:pb-32xl:pb-48 bg-no-repeat bg-cover bg-blend-color-burn" style="background-image: url('https://images.unsplash.com/photo-1542838132-92c53300491e?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Z3JvY2VyeXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80');">
      <div class="mt-48 mb-5 sm:mb-10">
        <!-- bg-gradient-to-r from-transparent  to-green-300  -->
        <h1 class="inline decoration-clone bg-gradient-to-r from-transparent  to-blue-600 p-2 text-green-100 text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl text-center text-white font-bold leading-tight">Your online grocery store</h1>
      </div>
      <div class="flex justify-center items-center mt-10 sm:mb-20">
        <a class="hover:text-blue-900 hover:bg-blue-200 hover:border-blue-300 border border-blue-500 bg-blue-700 transition duration-150 ease-in-out focus:outline-none rounded text-blue-100 px-8 py-3 sm:px-8  rounded-full  sm:py-3 text-sm">Sign up</a>

      </div>
    </div>
  </div>

  <!-- 


  """""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""
 -->
  <section class="py-6 sm:py-12 bg-gray-100 text-gray-800">
    <div class="container p-6 mx-auto space-y-8">
      <div class="space-y-2 text-center">
        <h2 class="text-3xl font-bold">Get our most favourite grocieries</h2>
        <p class="font-serif text-sm text-gray-600">We also offer free deliveries</p>
      </div>
      <div class="grid grid-cols-1 gap-x-4 gap-y-8 md:grid-cols-2 lg:grid-cols-4">

      <!-- Loop through all the Products in the Database -->
      <?php
       $products = array_slice($products, 2, 8, true);
      ?>
      <?php foreach ($products as $product) : ?>  
        <article class="flex flex-col bg-gray-50">
          <a href="#" aria-label="Te nulla oportere reprimique his dolorum">
            <img alt="" class="object-cover w-full h-52" src="<?= $product->product_image; ?>">
          </a>
          <div class="flex flex-col flex-1 p-6">
            <a href="#" aria-label="Te nulla oportere reprimique his dolorum"></a>
            <a href="#" class=" text-center text-xs tracking-wider uppercase hover:underline text-blue-600"><?= $product->product_name; ?></a>
            <h3 class="flex-1 py-2 text-lg font-semibold leading-snug"> <?=

strlen($product->product_description) > 50 ? substr($product->product_description, 0, 50) . "..." : $product->product_description;
?></h3>
            <div class="flex flex-wrap justify-between pt-3 space-x-2 text-xs text-gray-600">
              <span>June 1, 2020</span>
              <span>Ksh: <?= $product->product_price; ?> </span>
            </div>
          </div>
        </article>
        <?php endforeach; ?>
   
        <!---->
      </div>
    </div>
  </section>
 
</main>




</body>

</html>