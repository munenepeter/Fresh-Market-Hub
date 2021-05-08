<?php

use App\Core\Request; ?>

<header class=" bg-blue-400 border-b md:flex md:items-center md:justify-between p-4 pb-0 shadow-lg md:pb-4 ">
  <div class="flex items-center justify-between mb-4 md:mb-0">
    <h1 class="leading-none text-2xl text-blue-darkest">
      <a class="no-underline text-blue-darkest hover:text-black" href="/">
        <span class="text-green-800">Fresh </span> Market Hub
      </a>
    </h1>
    <a class="text-black hover:text-orange md:hidden" href="#">
      <i class="fa fa-2x fa-bars"></i>
    </a>
  </div>
  <nav>
    <ul class="list-reset md:flex md:items-center">
      <li class="md:ml-4">
        <a class="block no-underline hover:underline py-2 text-blue-darkest hover:text-black md:border-none md:p-0" href="/">
          Home
        </a>
      </li>

      <?php

      if (isset($_SESSION['id'])) {
        if ($_SESSION['type'] === 0) {
          echo '
           <li class="md:ml-4">
        <a class="block no-underline hover:underline py-2 text-blue-darkest hover:text-black md:border-none md:p-0" href="/admin">
         Admin
        </a>
      </li> 
           
           ';
        } elseif ($_SESSION['type'] === 1 || $_SESSION['type'] === 0) {


          echo '<li x-data="{ dropdownOpen: false }" class="md:ml-4">
            <a @click="dropdownOpen = !dropdownOpen" class="block no-underline hover:underline py-2 text-blue-darkest hover:text-black md:border-none md:p-0" href="#">
              My Products
            </a>

            <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>
       
             <div x-show="dropdownOpen" class="absolute left-170 mt-2 py-2 w-18 bg-blue-300 rounded-md shadow-xl z-20">
             <a href="products" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100"    role="menuitem">All</a>
             <a href="add-product" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100"    role="menuitem">Add New</a>
             <a href="sign-out" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100" role="menuitem">Remove</a>
            </div>
          </li>';
          echo '<li class="md:ml-4">
        <a class="block no-underline hover:underline py-2 text-blue-darkest hover:text-black md:border-none md:p-0" href="/products">
          Products
        </a>
      </li>';
        } else {
          if (isset($_SESSION['cart'])) {


            echo '<li class="md:ml-4 mr-4">
      <a class=" justify-center items-center relative no-underline hover:underline py-2 text-blue-darkest hover:text-black md:border-none md:p-0" href="/cart"> 
    
    <span class="' . (count($_SESSION['cart']) > 0 ? 'hidden' : '')   . 'hidden font-semibold text-center opacity-75 h-6 w-6 rounded-full bg-red-400 absolute -top-4 -right-4 "> 
    ' . count($_SESSION['cart']) . '
    <span class=" overflow-hidden animate-ping absolute -right-1 -top-0 inline-flex h-6 w-6 rounded-full bg-red-800 opacity-75"></span> 
  
    </span>
 
  Cart
  
  </a>
   
    </li>';
          } else {
            echo '<li class="md:ml-4">
        <a class="block no-underline hover:underline py-2 text-blue-darkest hover:text-black md:border-none md:p-0" href="/products">
          Products
        </a>
      </li>';
            echo '<li class="md:ml-4 mr-2">
      <a class="block no-underline hover:underline py-2 text-blue-darkest hover:text-black md:border-none md:p-0" href="/cart">
        Cart
      </a>
    </li>';
          }
        }
      }
      ?>

      <?php
      if (isset($_SESSION['id'])) {


        echo '<div x-data="{ dropdownOpen: false }" class="relative ">
         <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 block rounded-md bg-blue-400 p-2 focus:outline-none">
         <span class="sr-only">Open user menu</span>
         <img class="h-8 w-8 rounded-full" src="https://ui-avatars.com/api/?name=' .  $_SESSION['name'] . '&background=random&length=1" alt="' .  $_SESSION['name'] . 'Profile Image">
       
         </button>
         
         <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>
       
         <div x-show="dropdownOpen" class="absolute right-0 mt-2 py-2 w-48 bg-blue-300 rounded-md shadow-xl z-20">
          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100 capitalize" role="menuitem">'
          . $_SESSION['name'] . '</a>
          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100" role="menuitem">Settings</a>
          <a href="sign-out" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100" role="menuitem">Sign out</a>
         </div>
       </div>';
      } else {
        echo '<li class="md:ml-4">
          <a class="border-t block no-underline hover:underline py-2 text-blue-darkest hover:text-black md:border-none md:p-0" href="/log-in">
            Login
          </a>
        </li>';
        echo '<li class="md:ml-4">
          <a class="border-t block no-underline hover:underline py-2 text-blue-darkest hover:text-black md:border-none md:p-0" href="/sign-in">
           Register
          </a>
        </li> ';
      }
      ?>
    </ul>
  </nav>
</header>
<header class="bg-gray-100 shadow">
  <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
    <h1 class="text-3xl capitalize font-bold text-gray-900">
      <?= Request::uri() ?>
    </h1>

  </div>
</header>