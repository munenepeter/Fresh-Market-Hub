<?php require 'partials/head.php'; ?>
<main>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
      <!-- Replace with your content -->
      <div class="px-4 py-6 sm:px-0">
        <div class="border-2 border-dashed border-blue-200 bg-white rounded-lg h-full">
        <div class="container mt-2 mx-auto">
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
      <?php foreach ($products as $product) : ?>
        <div class="card m-2 cursor-pointer border border-gray-400 bg-gray-200  rounded-lg hover:shadow-md hover:border-opacity-0 transform hover:-translate-y-1 transition-all duration-200">
          <div class="m-4">
            <div class="p-2 m-2 justify-items-center">
              <img class=" w-full h-full rounded-lg" src="<?= '/public/images/'.$product->product_image; ?>" alt="Room Image">
            </div>

            <h2 class="text-lg mb-2 capitalize"><?= $product->product_name; ?>
              <span class="text-sm text-teal-800 font-mono bg-teal-100 inline rounded-full px-2 align-top float-right animate-pulse"><?= $product->updated_date; ?></span>
            </h2>
            <p class="font-light font-mono text-sm text-gray-700 hover:text-gray-900 transition-all duration-200"><?= $product->product_description; ?></p>
            <h2 class="text-lg m-2">Ksh: <?= $product->product_price; ?>
            <?php 
      
            if(isset($_SESSION['id'])){
              if($_SESSION['type'] === 1 || $_SESSION['type'] === 0 ){
              echo '<button type="button" class="text-sm focus:outline-none text-red-600 text-sm py-2 px-6 rounded-full border border-red-600 hover:bg-red-50 float-right ">Edit </button>';
              }else{
                echo '<button type="button" class="text-sm focus:outline-none text-blue-600 text-sm py-2 px-6 rounded-full border border-blue-600 hover:bg-blue-50 float-right ">Add to Cart</button>';
              }
            }else{
              echo '<button type="button" class="text-sm focus:outline-none text-yellow-600 text-sm py-2 px-6 rounded-full border border-yellow-600 hover:bg-yellow-50 float-right ">Add to Cart</button>';
            }
              ?>
            </h2>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
        
        </div>
      </div>
      <!-- /End replace -->
    </div>
  </main>



 
</body>

</html>