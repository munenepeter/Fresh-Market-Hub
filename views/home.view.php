<?php require 'partials/head.php'; ?>
<!-- hover:shadow-md hover:border-opacity-0 transform hover:-translate-y-1 transition-all duration-200 -->
<main>
  <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-6">
    <!-- Display All The products -->
    <div class="px-2 py-2 sm:px-0">
      <div class="<?= (!$alert) ? 'hidden' : ''; ?> w-96 py-3 px-5 mb-4 bg-red-600 text-red-100 text-sm rounded-md border border-green-200 flex items-center" role="alert">
        <?= ($alert) ? $alert : '' ?>
        <button class="w-4 ml-40" type="button" data-dismiss="alert" aria-label="Close" onclick="this.parentElement.remove();">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="border-2 border-dashed border-blue-200 bg-white rounded-lg h-full">

        <div class="container mt-2 mx-auto">

          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6">
            <!-- Loop through all the Products in the Database -->
            <?php foreach ($products as $product) : ?>
              <form action="/" method="POST">
                <div class="card m-2 cursor-pointer border border-gray-200 bg-gray-200  rounded-lg h-96 ">
                  <div class="m-2 grid grid-cols-1 divide-y divide-blue-200">
                    <div class="justify-items-center h-36">
                      <img name="product_image" class="w-full h-full rounded-lg" src="<?= $product->product_image; ?>" alt="<?= $product->product_name; ?> Image">

                      <!-- 
https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmv5AoOlBHko-pxoKMnok496blUtMhDmNS3g&usqp=CAU 
                      -->
                      <!-- <img name="product_image" class=" w-full h-full rounded-lg" src="<// '/public/images/' . $product->product_image; ?>" alt="<// $product->product_name; ?> Image"> -->
                    </div>
                    <div class="">
                      <h2 name="product_name" class="text-lg mb-2 capitalize"><?= $product->product_name; ?>
                        <span name="updated_date" class="text-sm text-teal-800  bg-teal-100 inline rounded-full  align-top float-right italic "><?= $product->updated_date?></span>
                      </h2>
                    </div>
                    <div class="p-2 h-16">
                      <p name="product_description" class=" font-light  text-sm text-gray-700 hover:text-gray-900 transition-all duration-200">

                        <?=

                        strlen($product->product_description) > 50 ? substr($product->product_description, 0, 50) . "..." : $product->product_description;
                        ?></p>
                    </div>
                    <div class="grid grid-cols-2 gap-1 h-16">
                      <div>
                        <h2 name="product_price" class="text-lg mt-4">Ksh: <?= $product->product_price; ?> </h2>
                        <input type="hidden" name="product_id" value="<?= $product->product_id ?>">
                      </div>
                      <div class="mt-4">
                        <!-- <p name="product_description" class="ml-2 font-light  text-sm text-gray-700 hover:text-gray-900 transition-all duration-200">Quantity</p> -->
                        <input name="quantity" class="mx-2 border text-center w-16 h-8 float-right" type="number" placeholder="QTY" min="1" max="<?= $product->available_quantity ?>">

                      </div>
                    </div>
                    <div class="relative h-20 w-full ">
                      <div class="absolute inset-x-0 bottom-0 h-16 ">
                        <div class="">
                          <?php
                          // Check wither the user is looged in && is a seller
                          // Display Edit the product button
                          if (isset($_SESSION['id'])) {
                            // should move this to a dedicated helper function
                            if ($_SESSION['type'] === 1 || $_SESSION['type'] === 0) {
                              echo '
                        <form action="/cart?action=Edit&id=' . $product->product_id . '" method="post">
                        <a href="/edit" class="w-full text-sm focus:outline-none text-red-600 text-sm py-2 px-6 rounded-full border border-red-600 hover:bg-red-50 ">Edit </a>
                        </form>
                        ';
                            } else {
                              //If the user is a buyer display Add to cart button
                              echo '<button type="submit" name="addtocart" class="w-full text-sm focus:outline-none text-blue-600 text-sm py-2 px-6 rounded-full border border-blue-600 hover:bg-blue-50 ">Add to Cart</button>';
                            }
                            // else if the user is not logged in dispaly the add to cart with a yellow bg
                          } else {
                            echo '<button type="button" class="w-full text-sm focus:outline-none text-yellow-600 text-sm py-2 px-6 rounded-full border border-yellow-600 hover:bg-yellow-50  ">Add to Cart</button>';
                          }

                          ?>

                        </div>
                      </div>
                    </div>
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