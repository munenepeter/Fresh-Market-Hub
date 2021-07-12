<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Offline js files -->
    <link rel="stylesheet" href="../../public/css/tailwind.css">
    <title>Register</title>
</head>

<body class="bg-blue-50">
    <div class="flex items-center justify-center h-screen">
        <div class="max-w-md w-full space-y-8 p-10 bg-white rounded-xl z-10">
            <div class="text-center">
                <h2 class="mt-4 text-3xl font-bold text-gray-900">
                    <span class="text-3xl text-green-400 font-semibold">Fresh </span>
                    <span class="text-3xl font-semibold"> Market Hub</span>
                </h2>
                <p class="mt-2 text-sm text-<?= ($msg) ? 'red' : 'gray'; ?>-600"> <?= ($msg) ? $msg : 'Please fill in the form'; ?></p>
            </div>
            <form class="mt-6 space-y-6" action="/register" method="POST">
                <div class="relative">
                    <div class="<?= ($msg) ? 'hidden' : ''; ?> absolute right-0 mt-4 "><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="<?= (!$msg) ? 'hidden' : ''; ?> absolute right-0 mt-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                        </svg>
                    </div>
                    <label class="text-sm font-bold text-<?= ($msg) ? 'red' : 'gray'; ?>-700 tracking-wide">Username</label>
                    <input name="username" class="w-full text-base py-2 border-b border-<?= ($msg) ? 'red' : 'gray'; ?>-300 focus:outline-none focus:border-<?= ($msg) ? 'red' : 'indigo'; ?>-500 placeholder-<?= ($msg) ? 'red' : 'gray'; ?>-500" type="text" placeholder="Username" required>
                </div>
                <div class="mt-8 content-center">
                    <label class="text-sm font-bold text-<?= ($msg) ? 'red' : 'gray'; ?>-700 tracking-wide">
                        Email
                    </label>
                    <input name="email" class="w-full content-center text-base py-2 border-b border-<?= ($msg) ? 'red' : 'gray'; ?>-300 focus:outline-none focus:border-<?= ($msg) ? 'red' : 'indigo'; ?>-500 placeholder-<?= ($msg) ? 'red' : 'gray'; ?>-500 "  type="email" placeholder="name@example" required>
                </div>
                <div class="mt-8 content-center">
                    <label class="text-sm font-bold text-<?= ($msg) ? 'red' : 'gray'; ?>-700 tracking-wide">
                        Password
                    </label>
                    <input name="password" class="w-full content-center text-base py-2 border-b border-<?= ($msg) ? 'red' : 'gray'; ?>-300 focus:outline-none focus:border-<?= ($msg) ? 'red' : 'indigo'; ?>-500 placeholder-<?= ($msg) ? 'red' : 'gray'; ?>-500 " type="password" placeholder="Enter your password" required>
                </div>
                
                <p class="mt-3 text-sm font-bold text-gray-700 tracking-wide">Please select your account type:</p>
                <div class="flex">
                    <div class="inline-flex items-center">
                        <input type="radio" class="form-radio h-5 w-5 text-gray-600" id="seller" name="type" value="1" required>
                        <label for="seller" class="ml-2 text-gray-700">Seller</label>
                    </div>
                    <div class="inline-flex items-center ml-2">
                        <input type="radio" class="form-radio h-5 w-5 text-gray-600" id="buyer" name="type" value="2" required>
                        <label for="buyer" class="ml-2 text-gray-700">Buyer</label>
                    </div>

                </div>
                
                <div>
                    <button type="submit" class="w-full flex justify-center   <?= ($msg) ? 'bg-red-500 hover:bg-red-200' : 'bg-indigo-500 hover:bg-indigo-600'; ?>   text-gray-100 p-4  rounded-full tracking-wide
                                font-semibold  focus:outline-none focus:shadow-outline  shadow-lg cursor-pointer transition ease-in duration-300">
                        Sign up
                    </button>
                </div>
                <p class="flex  items-center justify-center mt-10 text-center text-md text-gray-500">
                    <span> Already have an Account? </span>
                    <a href="/log-in" class="ml-2 text-indigo-500  hover:text-indigo-500no-underline hover:underline cursor-pointer transition ease-in duration-300">Sign up</a>
                </p>
            </form>
        </div>
    </div>

</body>



<!-- <body class="bg-blue-50">
    <div class="flex items-center justify-center h-screen">
        <div class="m-auto lg:w-1/2 h-auto  bg-white">
            <div class="py-6 bg-grey-200 lg:bg-grey-200 flex justify-center lg:justify-start lg:px-12">
                <div class="cursor-pointer flex items-center">
                    <div class="text-2xl text-blue-800 tracking-wide ml-2 font-semibold">

                    </div>
                </div>
            </div>

            <div class="mt-2 px-2 sm:px-24 md:px-48 lg:px-12 lg:mt-6 xl:px-24 xl:max-w-2xl">
                <h2 class="text-center text-4xl text-blue-900 font-display font-semibold lg:text-left xl:text-5xl
                    xl:text-bold">Register</h2>
                <div class="mt-4">

                    <div class="<?= (!$msg) ? 'hidden' : ''; ?> py-3 px-5 mb-4  bg-red-600 text-red-100 text-sm rounded-md border border-red-200 flex items-center" role="alert">
                        <div class="w-4 mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016zM12 9v2m0 4h.01" />
                            </svg>
                        </div>
                        <button class="w-4 ml-40" type="button" data-dismiss="alert" aria-label="Close" onclick="this.parentElement.remove();">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <form action="/register" method="POST">
                        <div class="flex flex-row">
                            <div>
                                <div class="text-sm font-bold text-gray-700 tracking-wide">Username</div>
                                <input name="username" class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="text" placeholder="Username" required>
                            </div>
                            <div class="ml-2">
                                <div class="text-sm font-bold text-gray-700 tracking-wide">Email</div>
                                <input name="email" class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="email" placeholder="name@example" required>
                            </div>
                        </div>
                        <div class="mt-6">
                            <div class="text-sm font-bold text-gray-700 tracking-wide">Password</div>
                            <input name="password" class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="password" placeholder="Enter your password" required>
                        </div>

                        <p class="mt-3 text-sm font-bold text-gray-700 tracking-wide">Please select your account type:</p>
                        <div class="inline-flex items-center mt-3">
                            <input type="radio" class="form-radio h-5 w-5 text-gray-600" id="seller" name="type" value="1" required>
                            <label for="male" class="ml-2 text-gray-700">Seller</label>
                        </div>
                        <div class="inline-flex items-center mt-3 ml-2">
                            <input type="radio" class="form-radio h-5 w-5 text-gray-600" id="buyer" name="type" value="2" required>
                            <label for="male" class="ml-2 text-gray-700">Buyer</label>
                        </div>
                        <div class="mt-10">
                            <button type="submit" name="submit" class="bg-blue-500 text-gray-100 p-4 w-full rounded-full tracking-wide
                                font-semibold font-display focus:outline-none focus:shadow-outline hover:bg-blue-600
                                shadow-lg">
                                Register
                            </button>
                        </div>
                    </form>
                    <div class="mt-12 text-sm font-display font-semibold text-gray-700 text-center">
                        Already have an Account? <a href="/login" class="cursor-pointer text-blue-600 hover:text-blue-800">Sign in</a>
                    </div>
                </div>
            </div>
        </div>

    </div>



</body> -->

</html>