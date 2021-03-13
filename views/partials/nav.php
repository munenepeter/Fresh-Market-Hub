
<header class=" bg-blue-400 border-b md:flex md:items-center md:justify-between p-4 pb-0 shadow-lg md:pb-4 ">
<div class="flex items-center justify-between mb-4 md:mb-0">
    <h1 class="leading-none text-2xl text-blue-darkest">
      <a class="no-underline text-blue-darkest hover:text-black" href="/">
        Fresh Market Hub
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
      
        if(isset($_SESSION['id'])){
          if($_SESSION['type'] === 1 || $_SESSION['type'] === 0 ){
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
    }else{
     echo '<li class="md:ml-4">
        <a class="block no-underline hover:underline py-2 text-blue-darkest hover:text-black md:border-none md:p-0" href="/products">
          Products
        </a>
      </li>';
      echo '<li class="md:ml-4">
      <a class="block no-underline hover:underline py-2 text-blue-darkest hover:text-black md:border-none md:p-0" href="/cart">
        Cart
      </a>
    </li>';
    }
  }
   ?>

      <?php 
        if(isset($_SESSION['id'])){
        
         echo '<div x-data="{ dropdownOpen: false }" class="relative ">
         <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 block rounded-md bg-blue-400 p-2 focus:outline-none">
         <span class="sr-only">Open user menu</span>
         <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
       
         </button>
         
         <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>
       
         <div x-show="dropdownOpen" class="absolute right-0 mt-2 py-2 w-48 bg-blue-300 rounded-md shadow-xl z-20">
          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100 capitalize" role="menuitem">'
          . $_SESSION['name'].'</a>
          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100" role="menuitem">Settings</a>
          <a href="sign-out" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100" role="menuitem">Sign out</a>
         </div>
       </div>';

        }else{
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
      <h1 class="text-3xl font-bold text-gray-900">
        <?=$header?>
      </h1>
    </div>
  </header>