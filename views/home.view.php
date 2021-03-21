<?php require 'partials/head.php'; ?>
 
<main>
  <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <!-- Display All The products -->
    <div class="px-4 py-6 sm:px-0">
      <div class="border-2 border-dashed border-blue-200 bg-white rounded-lg h-full">
        <div class="container mt-2 mx-auto">
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            <!-- Loop through all the Products in the Database -->
            <?php foreach ($products as $product) : ?>
              <form action="/" method="POST">
              <div class="card m-2 cursor-pointer border border-gray-400 bg-gray-200  rounded-lg hover:shadow-md hover:border-opacity-0 transform hover:-translate-y-1 transition-all duration-200">
                <div class="m-4">
                  <div class="p-2 m-2 justify-items-center">
                    <img name="product_image" class=" w-full h-full rounded-lg" src="<?= '/public/images/' . $product->product_image; ?>" alt="Room Image">
                  </div>

                  <h2 name="product_name" class="text-lg mb-2 capitalize" ><?= $product->product_name; ?>
                    <span name="updated_date" class="text-sm text-teal-800 font-mono bg-teal-100 inline rounded-full px-2 align-top float-right animate-pulse" ><?= $product->updated_date; ?></span>
                  </h2>
                  <p name="product_description" class="font-light font-mono text-sm text-gray-700 hover:text-gray-900 transition-all duration-200"  ><?= $product->product_description; ?></p>
                  <h2 name="product_price" class="text-lg m-2"  >Ksh: <?= $product->product_price; ?>
                  <input type="hidden" name="product_id" value="<?= $product->product_id?>">
                
                    <?php
                    // Check wither the user is looged in && is a seller
                   /*  $product = [
                      'product_id' => 'product_id@'. $product->product_id,
                       'product_name' => 'product_name@'.$product->product_name,
                       'product_image' => 'product_image@'.$product->product_image,
                       'product_description' => 'product_description@'.$product->product_description,
                       'updated_date' => 'updated_date@'.$product->updated_date,
                       'seller_id' => 'seller_id@'.$product->seller_id,
                       'available_quantity' => 'available_quantity@'.$product->available_quantity,
                       'product_price' => 'product_price@'.$product->product_price
                      
                    ]; */

                
                     
                    // Display Edit the product button
                    if (isset($_SESSION['id'])) {
                      // should move this to a dedicated helper function
                      if ($_SESSION['type'] === 1 || $_SESSION['type'] === 0) {
                        echo '<button type="submit" class="text-sm focus:outline-none text-red-600 text-sm py-2 px-6 rounded-full border border-red-600 hover:bg-red-50 float-right ">Edit </button>';
                      } else {
                        //If the user is a buyer display Add to cart button
                        echo '<button type="submit" name="addtocart" class="text-sm focus:outline-none text-blue-600 text-sm py-2 px-6 rounded-full border border-blue-600 hover:bg-blue-50 float-right ">Add to Cart</button>';
                      }
                      // else if the user is not logged in dispaly the add to cart with a yellow bg
                    } else {
                      echo '<button type="button" class="text-sm focus:outline-none text-yellow-600 text-sm py-2 px-6 rounded-full border border-yellow-600 hover:bg-yellow-50 float-right ">Add to Cart</button>';
                    }
                  
                    ?>
                    
                  </h2>
                </div>
              </div>
              </form>
            <?php endforeach; ?>
          </div>
        </div>

      </div>
    </div>

  </div>
</main>




</body>

</html>