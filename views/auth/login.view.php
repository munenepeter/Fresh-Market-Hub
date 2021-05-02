<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Login</title>
    <!-- Offline js files -->
    <link rel="stylesheet" href="../../public/tailwindcss.css">
    <script src="../../public/alpine.js" defer></script>
    <script src="../../public/customform.js" defer></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="bg-blue-50">
    <div class="flex items-center justify-center h-screen">
        <div class="m-auto lg:w-1/2 h-auto  border-1 border-blue-800  bg-white">
            <div class="py-6 bg-blue-100 lg:bg-white flex justify-center lg:justify-start lg:px-12">
                <div class="cursor-pointer flex items-center">
                    <div class="text-2xl text-blue-800 tracking-wide ml-2 font-semibold">
                        <div class="flex flex-row">
                            <h2 class="text-3xl text-green-400 font-semibold">Fresh </h2>
                            <h2 class="text-3xl font-semibold"> Market Hub</h2>

                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4 px-8 sm:px-24 md:px-48 lg:px-8 lg:mt-8 xl:px-24 xl:max-w-2xl">
                <h2 class="text-center text-4xl text-blue-900 font-display font-semibold lg:text-left xl:text-5xl
                    xl:text-bold">Log in</h2>
                <div class="mt-4">
                    <div class="<?= (!$msg) ? 'hidden' : ''; ?> py-3 px-5 mb-4 bg-red-600 text-red-100 text-sm rounded-md border border-green-200 flex items-center" role="alert">
                        <div class="w-4 mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <span><strong><?= $msg; ?></strong></span>
                        <button class="w-4 ml-40" type="button" data-dismiss="alert" aria-label="Close" onclick="this.parentElement.remove();">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <form action="/login" method="post">
                        <div>
                            <div class="text-sm font-bold text-gray-700 tracking-wide">Username</div>
                            <input name="username" class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="text" placeholder="Username">
                        </div>
                        <div class="mt-8">
                            <div class="flex justify-between items-center">
                                <div class="text-sm font-bold text-gray-700 tracking-wide">
                                    Password
                                </div>
                                <div>
                                    <a class="text-xs font-display font-semibold text-blue-600 hover:text-blue-800
                                        cursor-pointer">
                                        Forgot Password?
                                    </a>
                                </div>
                            </div>
                            <input name="password" class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="password" placeholder="Enter your password">
                        </div>
                        <div class="mt-10">
                            <button type="submit" name="submit" class="bg-blue-500 text-gray-100 p-4 w-full rounded-full tracking-wide
                                font-semibold font-display focus:outline-none focus:shadow-outline hover:bg-blue-600
                                shadow-lg">
                                Log In
                            </button>
                        </div>
                    </form>
                    <div class="mt-12 text-sm font-display font-semibold text-gray-700 text-center">
                        Don't have an account ? <a href="/sign-in" class="cursor-pointer text-blue-600 hover:text-blue-800">Sign up</a>
                    </div>
                </div>
            </div>
        </div>

    </div>



</body>

</html>