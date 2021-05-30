<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Error!</title>
    <!-- Offline js files -->
    <!-- <link rel="stylesheet" href="../../public/tailwindcss.css">
    <script src="../../public/alpine.js" defer></script>
    <script src="../../public/customform.js" defer></script> -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>

<body>
    <div class="bg-red-600">
        <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between flex-wrap">
                <div class="w-0 flex-1 flex items-center">
                    <span class="flex p-2 rounded-lg bg-red-800">
                        <!-- Heroicon name: Warning -->

                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 554.2 554.199" stroke="currentColor" aria-hidden="true" xml:space="preserve">
                            <g>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M538.5,386.199L356.5,70.8c-16.4-28.4-46.7-45.9-79.501-45.9c-32.8,0-63.1,17.5-79.5,45.9L12.3,391.6
		c-16.4,28.4-16.4,63.4,0,91.8C28.7,511.8,59,529.3,91.8,529.3H462.2c0.101,0,0.2,0,0.2,0c50.7,0,91.8-41.101,91.8-91.8
		C554.2,418.5,548.4,400.8,538.5,386.199z M316.3,416.899c0,21.7-16.7,38.3-39.2,38.3s-39.2-16.6-39.2-38.3V416
		c0-21.601,16.7-38.301,39.2-38.301S316.3,394.3,316.3,416V416.899z M317.2,158.7L297.8,328.1c-1.3,12.2-9.4,19.8-20.7,19.8
		s-19.4-7.7-20.7-19.8L237,158.6c-1.3-13.1,5.801-23,18-23H299.1C311.3,135.7,318.5,145.6,317.2,158.7z" />

                            </g>
                        </svg>

                    </span>
                    <p class="ml-3 font-medium text-white truncate">
                        <span class="md:hidden">
                            Oops!
                        </span>
                        <span class="hidden md:inline">
                            Oops!.. There seems to be an error in your Code....
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

        </div>
    </header>
    <main>
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <!-- Replace with your content -->
            <div class="px-4 py-6 sm:px-0">
                <div class="border-2 border-dotted border-red-200 rounded-lg h-1/2">
                    <div class=" w-full rounded-lg shadow-lg p-4 flex md:flex-row flex-col">
                        <div class="flex-1">
                            <h3 class="text-red-700 font-semibold text-lg tracking-wide">
                                Exception:
                            </h3>
                            <div class="bg-red-200  w-full h-12 justify-items-center rounded-lg shadow-lg">
                                <h3 class="p-2 text-pink-800 font-semibold text-lg tracking-wide">
                                    <?= $message; ?>
                                </h3>
                            </div>


                            <p class="text-red-400 my-1">
                                Code:
                            </p>
                            <div class="bg-red-200  w-64 h-8 justify-items-center rounded-lg shadow-lg">
                                <p class="ml-2 text-pink-700 my-1">
                                    <?= $code; ?>

                                </p>
                            </div>
                            <p class="text-red-400 my-1">
                                File:
                            </p>
                            <div class="bg-red-200  w-64 h-8 justify-items-center rounded-lg shadow-lg">
                                <p class="ml-2 text-pink-700 my-1">
                                    <?= trim($file, 'C:\\laragon\\www\\my-framework\\core\\'); ?>
                                </p>
                            </div>
                            </p>
                            <p class="text-red-400 my-1">
                                Line:
                            </p>
                            <div class="bg-red-200  w-64 h-8 justify-items-center rounded-lg shadow-lg">
                                <p class="ml-2 text-pink-700 my-1">
                                    <?= $line; ?>
                                </p>
                            </div>

                            <?php
                            $traced = preg_split("/\#/", $trace);

                            ?>
                            <p class="text-red-400 my-1">
                                Stack Trace:
                            </p>

                            <div class="w-1/2 h-20 justify-items-center bg-red-200 rounded-lg shadow-lg">
                                <p class="ml-2 text-pink-700 my-1">
                                    <?= trim($traced[1], '#0 C:\\laragon\\www\\my-framework\\core\\') ?>
                                    <br>
                                    <?= trim($traced[2], '#1 C:\\laragon\\www\\my-framework\\') ?>
                                    <br>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
          
        </div>
    </main>  
</body>

</html>