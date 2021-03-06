<?php require 'partials/head.php'; ?>

<?php
if (isset($_POST['remove'])) {
  if ($_GET['action'] == 'remove') {
    foreach ($_SESSION['cart'] as $key => $value) {
      if ($value['product_id'] == $_GET['id']) {
        unset($_SESSION['cart'][$key]);
        echo '
        <div class=" flex justify-center items-center m-1 font-medium py-1 px-2 rounded-md text-red-700 bg-red-100 border border-red-300 ">
        <div slot="avatar">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-octagon w-5 h-5 mx-2">
                <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                <line x1="12" y1="8" x2="12" y2="12"></line>
                <line x1="12" y1="16" x2="12.01" y2="16"></line>
            </svg>
        </div>
        <div class="text-xl font-normal  max-w-full flex-initial">
            The Product has been removed from the cart</div>
            </div>';
        echo "<script>window.location.reload()</script>";
      }
    }
  }
}
// die(var_dump($_SESSION['cart'] )); 
?>

<div class="m-2">
  <?php if (isset($_SESSION['cart'])) { ?>
    <div class="container mx-auto mt-10">
      <div class="flex shadow-md my-10">
        <div class="w-3/4 bg-white px-10 py-10">
          <div class="flex justify-between border-b pb-8">
            <h1 class="font-semibold text-2xl">Cart</h1>
            <h2 class="font-semibold text-2xl"><?= count($_SESSION['cart']) ?> Items</h2>
          </div>
          <div class="flex mt-10 mb-5">
            <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">Product Details</h3>
            <h3 class="font-semibold text-gray-600 text-xs uppercase w-1/5 text-center">Quantity</h3>
            <h3 class="font-semibold text-gray-600 text-xs uppercase w-1/5 text-center">Price</h3>
            <h3 class="font-semibold text-gray-600 text-xs uppercase w-1/5 text-center">Total</h3>
          </div>

          <!-- Loop throught the products in DB -->
          <?php foreach ($products as $product) : ?>
            <!-- Loop through the session variables ie product_id and quantity -->
            <?php foreach ($_SESSION['cart'] as $cartItem) : ?>
              <!-- Loop thru the session's product_id as an id and Cast the values so that you can loop -->
              <?php foreach ((array)$cartItem['product_id'] as $id) : ?>
                <!-- Loop thru the session's quantity as an quanity and Cast the values so that you can loop -->
                <?php foreach ((array)$cartItem['quantity'] as $quantity) : ?>
                  <!-- Check if the product that is in the $_SESSION['cart'] matches with the one in db -->
                  <?php if ($product->product_id == $id) : ?>
                    <!-- Start of the form add the remove URL ie http://....../cart?action=remove&id=... -->


                    <form action="/cart?action=remove&id=<?= $id ?>" method="post">
                      <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                        <div class="flex w-2/5">
                          <!-- Loop through the product details from the Db -->
                          <div class="w-40">
                            <img name="product_image" class="w-full h-full rounded-lg" src="<?= $product->product_image; ?>" alt="<?= $product->product_name; ?> Image">
                            <!-- <img class="h-24 w-40" src="< '/public/images/' . $product->product_image; ?>" alt=""> -->
                          </div>
                          <div class="flex flex-col justify-between ml-4 flex-grow">

                            <span class="font-bold text-sm capitalize"><?= $product->product_name; ?></span>
                            <span class="text-red-500 text-xs"><?= $product->updated_date; ?></span>
                            <button type="submit" name="remove" class="ml-0 w-14  bg-red-200 borde-1 rounded-lg px-2 py-2 font-semibold hover:text-red-500 text-gray-500 text-xs">Remove</button>
                          </div>
                        </div>
                        <div class="flex justify-center w-1/5">
                          <!-- Get the looped Quanity as specified n' cast into an Int-->
                          <?php
                          if ($quantity < 1 || $quantity == 0) {
                            $quantity = 1;
                          }
                          ?>
                          <span class="text-center w-1/5 font-semibold text-sm"><?= (int)$quantity //(empty($quantity)) ? 1 : (int)$quantity  
                                                                                ?></span>

                        </div>
                        <span class="text-center w-1/5 font-semibold text-sm"><?= 'Ksh ' . number_format($product->product_price, 2, '.', ','); ?></span>
                        <span class="text-center w-1/5 font-semibold text-sm">
                          <?php $productTotal = (int)$product->product_price * (int)$quantity; ?>
                          <?= 'Ksh ' . number_format((int)$productTotal, 2, '.', ','); ?></span>


                      </div>
                    </form>
                    <?php
                    $qty = $qty + (int)$quantity;
                    $available_qty = $product->available_quantity - $quantity;
                    $total = $total + (int)$productTotal;

                    ?>




                  <?php endif; ?>
                <?php endforeach; ?>
              <?php endforeach; ?>
            <?php endforeach; ?>
          <?php endforeach; ?>
          <a href="/home" class="flex font-semibold text-indigo-600 text-sm mt-10">

            <svg class="fill-current mr-2 text-indigo-600 w-4" viewBox="0 0 448 512">
              <path d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z" />
            </svg>
            Continue Shopping
          </a>
        </div>

        <div id="summary" class="w-1/4 px-8 py-10">
          <h1 class="font-semibold text-2xl border-b pb-6">Order Summary</h1>
          <div class="flex justify-between mt-10 mb-5">
            <span class="font-semibold text-sm uppercase">Items <?= count($_SESSION['cart']) ?></span>
            <span class="font-semibold text-sm">Ksh <?= number_format($total, 2, '.', ',') ?></span>
          </div>
          <div>
            <h1 class="font-semibold text-2xl border-b pb-6">Shipping</h1>
            <div class="flex justify-between mt-8 mb-5">
              <span class="font-semibold text-sm uppercase">Amount Payable</span>
              <span class="font-semibold text-sm">Free</span>
            </div>
          </div>

          <!-- <button class="mt-4 bg-red-500 hover:bg-red-600 px-5 py-2 text-sm text-white uppercase">Apply</button> -->
          <div class="border-t mt-6">
            <div class="flex font-semibold justify-between py-6 text-sm uppercase">
              <span>Total cost</span>
              <span>Ksh <?= number_format($total, 2, '.', ',') ?></span>


            </div>
            <a href="/checkout" class="bg-indigo-500 font-semibold hover:bg-indigo-600 px-4 py-3 text-sm text-white uppercase w-32">Checkout</a>

          </div>
        </div>

      </div>
    </div>

  <?php } else {
    echo '
    <section class="flex items-center mx-10 h-full sm:p-16 bg-gray-50 text-gray-800">
    <div class="container flex flex-col items-center justify-center px-5 mx-auto my-8 space-y-8 text-center sm:max-w-md">  
    <svg xmlns="http://www.w3.org/2000/svg" class="w-40 h-40 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
    </svg>
      <p class="text-3xl">Looks like your cart is empty!</p>
      <a href="#" class="px-8 py-3 font-semibold rounded bg-blue-600 text-gray-50">Back to products</a>
    </div>
  </section>';
  } ?>

</div>
<?php require 'partials/footer.php'; ?>