<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Login</title>
    <!-- Offline js files -->
    <link rel="stylesheet" href="../../public/css/tailwind.css">

</head>
<body class="bg-blue-50">
    <div class="flex items-center justify-center h-screen">
        <div class="max-w-md w-full space-y-8 p-10 bg-white rounded-xl z-10">
            <div class="text-center">
                <h2 class="mt-6 text-3xl font-bold text-gray-900">
                    Welcome Back!
                </h2>
                <p class="mt-2 text-sm text-gray-600">Please sign in to your account</p>
            </div>
            <form class="mt-8 space-y-6" action="/login" method="post">

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
                        Password
                    </label>
                    <input name="password" class="w-full content-center text-base py-2 border-b border-<?= ($msg) ? 'red' : 'gray'; ?>-300 focus:outline-none focus:border-<?= ($msg) ? 'red' : 'indigo'; ?>-500 placeholder-<?= ($msg) ? 'red' : 'gray'; ?>-500 " type="password" placeholder="Enter your password" required>
                </div>
                <div class="text-sm <?= (!$msg) ? 'hidden' : ''; ?>">
                    <a href="#" class="font-semibold text-red-500 hover:text-red-800">
                        <?= $msg; ?>
                    </a>
                </div>
                <div class="flex items-center justify-between">

                    <div class="text-sm <?= ($msg) ? 'hidden' : ''; ?> ">
                        <a href="#" class="font-medium text-indigo-500 hover:text-indigo-500">
                            Forgot your password?
                        </a>
                    </div>
                </div>
                <div>
                    <button type="submit" class="w-full flex justify-center   <?= ($msg) ? 'bg-red-500 hover:bg-red-200' : 'bg-indigo-500 hover:bg-indigo-600'; ?>   text-gray-100 p-4  rounded-full tracking-wide
                                font-semibold  focus:outline-none focus:shadow-outline  shadow-lg cursor-pointer transition ease-in duration-300">
                        Log In
                    </button>
                </div>
                <p class="flex flex-col items-center justify-center mt-10 text-center text-md text-gray-500">
                    <span>Don't have an account?</span>
                    <a href="/sign-in" class="text-indigo-500  hover:text-indigo-500no-underline hover:underline cursor-pointer transition ease-in duration-300">Sign up</a>
                </p>
            </form>
        </div>
    </div> 

</body>

</html>