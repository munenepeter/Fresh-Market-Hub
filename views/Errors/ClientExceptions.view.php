<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>  <?= $code; ?> </title>
	<!-- Offline js files -->
	<link rel="stylesheet" href="../../public/css/tailwind.css">
	<style>
		.gradient {
			background-image: linear-gradient(135deg, #684ca0 35%, #1c4ca0 100%);
		}
	</style>
</head>

<body class="bg-gray-100">
<section class=" flex items-center h-full p-16 bg-gray-50 text-gray-800">
	<div class="container flex flex-col items-center justify-center px-5 mx-auto my-8">
		<div class="max-w-md text-center">
			<h2 class="mb-8 font-semibold text-red-500 text-9xl">
				<span class="sr-only">Error </span>  <?= $code; ?>
			</h2>
			<p class="text-xl font-medium text-gray-600">Sorry, we couldn't find this page.</p>
			<p class="mt-4 mb-8">But dont worry, you can find plenty of other things on our <a href="/home" class="text-blue-600 hover:underline dark:text-blue-500">home page</a></p>
			<a href="#" class="hidden px-8 py-3 font-semibold rounded bg-red-600 text-red-200">Advanced</a>
		</div>
	</div>
</section>


 

</body>

</html>