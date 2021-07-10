  <!DOCTYPE html>
  <html lang="en">

  <head>
  	<meta charset="UTF-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<!-- Offline css files -->
  	<!-- <link rel="stylesheet" href="../../public/tailwindcss.css">
    <link rel="stylesheet" href="../../public/custom-forms.css"> -->

  	<!-- Online css files -->
  	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/css/custom-forms.css">
  	<title> </title>
  	<!-- Offline js files -->

  	<!-- <script src="../../public/alpine.js" defer></script>
    <script src="../../public/customform.js" defer></script> -->
  	<!-- Online js files -->

  	<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/src/index.min.js" defer></script>
  	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

  	<!-- font -->
  	<link rel="preconnect" href="https://fonts.gstatic.com">
  </head> 
  <body class="antialiased bg-gray-200"> 
  	<div x-data="{ sidemenu: false }" class="h-screen flex overflow-hidden" x-cloak
  		@keydown.window.escape="sidemenu = false"> 
  		<div class="bg-white w-64 min-h-screen overflow-y-auto hidden md:block shadow relative z-30"> 
  			<div class="flex items-center px-6 py-3 h-16">
  				<div class="text-2xl font-bold tracking-tight text-gray-800">Admin Dashboard</div>
  			</div> 
  			<div class="px-4 py-2">
  				<ul> 
  					<li>
  						<a href="#"
  							class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-blue-600 hover:text-blue-600 hover:bg-gray-200 bg-gray-200">
  							<svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
  								viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
  								stroke-linecap="round" stroke-linejoin="round">
  								<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
  								<circle cx="12" cy="12" r="9" />
  								<polyline points="12 7 12 12 9 15" />
  							</svg>
  							Dashboard
  						</a>
  					</li> 
  					<li>
  						<a href="#"
  							class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
  							<svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
  								viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
  								stroke-linecap="round" stroke-linejoin="round">
  								<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
  								<path
  									d="M16 6h3a 1 1 0 011 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" />
  								<line x1="8" y1="8" x2="12" y2="8" />
  								<line x1="8" y1="12" x2="12" y2="12" />
  								<line x1="8" y1="16" x2="12" y2="16" />
  							</svg>
  							History
  						</a>
  					</li> 
  					<li>
  						<a href="#"
  							class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
  							<svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
  								viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
  								stroke-linecap="round" stroke-linejoin="round">
  								<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
  								<path
  									d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
  								<circle cx="12" cy="12" r="3" />
  							</svg>
  							Settings
  						</a>
  					</li>
  				</ul>

  			</div>
  		</div> 

  		<div class="flex-1 flex-col relative z-0 overflow-y-auto">
  			<div class="px-4 md:px-8 py-2 h-16 flex justify-between items-center shadow-sm bg-white">
  				<div class="flex items-center w-2/3">
  					<input
  						class="bg-gray-200 focus:outline-none focus:shadow-outline focus:bg-white border border-transparent focus:border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal hidden md:block placeholder-gray-700 mr-10"
  						type="text" placeholder="Search...">

  					<div class="p-2 rounded-full hover:bg-gray-200 cursor-pointer md:hidden"
  						@click="sidemenu = !sidemenu">
  						<svg xmlns="http://www.w3.org/2000/svg" class="text-gray-600" width="24" height="24"
  							viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
  							stroke-linecap="round" stroke-linejoin="round">
  							<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
  							<line x1="4" y1="6" x2="20" y2="6" />
  							<line x1="4" y1="12" x2="20" y2="12" />
  							<line x1="4" y1="18" x2="20" y2="18" />
  						</svg>
  					</div>
  					<div class="text-xl font-bold tracking-tight text-gray-800 md:hidden ml-2">Admin.</div>
  				</div>
  				<div class="flex items-center">

  					<a href="#"
  						class="text-gray-500 p-2 rounded-full hover:text-blue-600 hover:bg-gray-200 cursor-pointer mr-4">
  						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
  							stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
  							stroke-linejoin="round">
  							<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
  							<path
  								d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
  							<path d="M9 17v1a3 3 0 0 0 6 0v-1" />
  						</svg>
  					</a>

  					<div class="relative" x-data="{ open: false }" x-cloak>
  						<div @click="open = !open">
  						 <?='<img class="h-8 w-8 rounded-full" src="https://ui-avatars.com/api/?name=' .  $_SESSION['name'] . '&background=random&length=1" alt="' .  $_SESSION['name'] . 'Profile Image">'?> 
  						</div>
						         


  						<div x-show.transition="open" @click.away="open = false"
  							class="absolute top-0 mt-12 right-0 w-48 bg-white py-2 shadow-md border border-gray-100 rounded-lg z-40">

  							<a href="#"
  								class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-blue-600">Sign
  								Out</a>
  						</div>
  					</div>
  				</div>
  			</div>