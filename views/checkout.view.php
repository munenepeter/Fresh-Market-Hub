<?php require 'partials/head.php'; ?>
<div class="grid md:grid-cols-2 md:gap-2">
    <div class="p-4">
        <div class="leading-loose">
            <div class=" mx-auto bg-white shadow-lg rounded-lg  mx-2">
                <div class="md:flex ">
                    <div class="w-full p-4 px-5 py-5">
                        <div class="flex flex-row">
                            <h2 class="text-3xl text-green-400 font-semibold">Fresh </h2>
                            <h2 class="text-3xl font-semibold"> Market Hub</h2>

                        </div>
                        <div class="flex flex-row pt-2 text-xs pt-6 pb-5">
                            <span class="font-bold">Products</span>
                            <small class="text-gray-400 ml-1">></small>

                            <span class="text-gray-400 ml-1">Cart</span>

                            <small class="text-gray-400 ml-1">></small>

                            <span class="text-gray-400 ml-1">Payment</span>
                        </div>
                        <form action="/checkout" method="POST">
                            <span>Customer Information</span>


                            <div class="relative pb-5">

                                <input type="email" class="disabled:opacity-50 border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm" value="<?= $_SESSION['email']; ?>" placeholder="E-mail" disabled>
                            </div>

                            <span>Shipping Address</span>

                            <div class="grid md:grid-cols-2 md:gap-2">

                                <input type="text" class="disabled:opacity-50 border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm" placeholder="First name*" value="<?= $_SESSION['name']; ?>" disabled>

                                <input type="text" name="lastname" class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm" placeholder="Last name*" required>
                            </div>

                            <input type="text" name="address" class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm" placeholder="Address*" required>

                            <input type="text" name="apartment" class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm" placeholder="Apartment, suite, etc. (optional)" required>

                            <div class="grid md:grid-cols-2 md:gap-2">

                                <input type="text" name="zipcode" class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm" placeholder="Zipcode*">

                                <input type="text" name="city" class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm" placeholder="City*"  required >

                            </div>

                            <input type="text" name="phonenumber" class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm" placeholder="Phone Number*" required>

                            <input type="hidden" name="userid" class="hidden" value="<?= $_SESSION['id'] ?>">

                            <div class="flex justify-between items-center pt-2">
                                <a href="/cart" type="button" class=" mt-4 h-12 w-24 text-blue-500 text-xs font-medium">Return to cart</a>
                                <button name="submit" type="submit" class="h-12 w-48 rounded font-medium text-xs bg-blue-500 text-white">Submit details</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="p-4">
        <div class="  bg-white mx-auto p-4">
            <?php if ($user){  ?>
                <div class=" text-center justify-center mb-8 px-3">
                    <div>
                        <span class="text-2xl capitalize text-center"> <?= $_SESSION['name'] ?> Order :</span><span class="text-2xl text-green-400 "> 00<?= $_SESSION['id'] ?>-<?= date('Y') ?></span><br />
                        <span class="text-red-500"> <?= date('l, d F Y ') ?></span><br />
                    </div>

                    <div>
                        <span class="capitalize"><?= $_SESSION['name'] . ' ' . $user['last_name'] ?></span>
                        <br />
                        <span><?= $user['address'] ?></span>
                        <br />
                        <small class="text-blue-800"><?= $user['email'] ?></small>
                        <br />
                        <span class="italic ">+254 <?= $user['phoneno'] ?></span>

                    </div>

                </div>
            <?php
        }else{
            
            ?>
            <div class=" text-center justify-center mb-8 px-3">
                    <div>
                        <span class="text-2xl capitalize text-center"> <?= $_SESSION['name'] ?> Order :</span><span class="text-2xl text-green-400 "> 00<?= $_SESSION['id'] ?>-<?= date('Y') ?></span><br />
                        <span class="text-red-500"> <?= date('l, d F Y ') ?></span><br />
                    </div>

                    <div>
                        <span class="capitalize">Please fill in your shipping details first</span>
                        <br />
                        <span> </span>
                        <br />
                        <small class="text-blue-800"> </small>
                        <br />
                        <span class="italic "> </span>

                    </div>

                </div>
                <?php
            };
            
            ?>
            <div class="border border-t-2 border-gray-200 mb-8 px-3"></div>
            <div class="flex justify-between mb-4 bg-gray-400 px-3 py-2">
                <div>Product</div>
                <div>Quantity</div>
                <div class="text-right font-medium">Price</div>
            </div>

<?php
 
 Request::getItemsInCart();

?>
            <!-- <div class="flex justify-between mb-4 bg-gray-200 px-3 py-2">
                <div>Nyanya</div>
                <div>1</div>
                <div class="text-right font-medium">Ksh 1200 </div>
            </div> -->


            <div class="flex justify-between items-center mb-2 px-3">
                <div class="text-2xl leading-none"><span class="">Total</span>:</div>
                <div class="text-2xl text-right font-medium">Ksh 2300 </div>
            </div>
            <div class="border border-t-2 border-gray-200 mt-2 mb-2 px-3"></div>
        

            <!-- <div class="mb-8 px-3">
                <span>To be paid before</span> Februari 1st 2019 through <b class="underline font-bold">M-pesa</b> specifying the invoice number
            </div> -->
            <div class="flex justify-between mb-4   px-3 py-2">
            <div class=" mt-4 mb-8 px-3">
                <p>Thank you for shopping with us</p>
            </div>
            <?php if ($user) : ?>  
                <div class="text-right font-medium"> <button type="button" class="h-12 w-24 rounded font-medium text-xs bg-blue-500 text-white">Accept </button></div>
                
            <?php endif ?>
            </div>
           
            


            <div class="text-center text-green-400 text-sm px-3">
                customercare@freshmarkethub.com | www.freshmarkethub.com
            </div>
        </div>
    </div>
    <div class="p-4">