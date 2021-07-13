<?php

use App\Core\App; ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link rel="icon" type="image/png" href="../../public/assests/apple-icon-114x114.png">
	<link rel="manifest" href="../../public/assests/manifest.json">
	<title> <?= $code; ?> </title>
	<!-- Offline js files -->
	<link rel="stylesheet" href="../../public/css/tailwind.css">
</head>

<body class="bg-gray-100">
	<section class=" flex items-center h-full p-16 bg-gray-50 text-gray-800">
		<div class="container flex flex-col items-center justify-center px-5 mx-auto my-8">
			<div class="max-w-md text-center">
				<h2 class="mb-8 font-semibold text-red-500 text-9xl">
					<span class="sr-only">Error </span> <?= $code; ?>
				</h2>
				<p class="text-xl font-medium text-gray-600">Sorry, <?= App::get('config')['codes'][$code][1]; ?>.</p>
				<p class="mt-4 mb-8">But dont worry, you can find plenty of other things on our <a href="/home" class="text-blue-600 hover:underline dark:text-blue-500">home page</a> or try <a href="javascript:location.reload();" class="text-blue-600 hover:underline dark:text-blue-500">refreshing</a> the page</p>
				<p class="font-semibold rounded text-gray-200">If this persists for more than 10 mins please contact a <a href="https://wa.me/+254798055244?text=<?= urlencode('Hi, Fresh Market Hub is not responding, The error being shown is ' . ' ' . '*' . App::get('config')['codes'][$code][1] . '*' . ' | ' . '*' . App::get('config')['codes'][$code][0] . '*'); ?>" class="text-blue-600 hover:underline dark:text-blue-500">developer</a></p>
			</div>
		</div>
	</section>




</body>

</html>