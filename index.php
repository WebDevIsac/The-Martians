<?php  
declare(strict_types=1);
require __DIR__.'/data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
	<title>The Martians</title>
</head>
<body>
	<nav class="flex fixed w-full sm:h-32 items-center justify-between flex-wrap bg-white p-6 opacity-75">
		<div class="flex mx-auto">
			<img src="img/logo_transparent.png" class="h-32">
		</div>
		<div class="flex items-center flex-no-shrink text-white mr-6">
			<svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
		</div>
		<div class="block lg:hidden">
			<button class="hamburger flex items-center px-3 py-2 border rounded text-white-lighter border-white-light hover:text-white hover:border-white">
				<svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
			</button>
		</div>
		<div class="menu w-full block flex-grow lg:flex lg:items-center lg:w-auto">
			<div class="text-lg lg:flex-grow">
				<a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white-lighter hover:text-white mr-4">
					Docs
				</a>
				<a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white-lighter hover:text-white mr-4">
					Examples
				</a>
				<a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white-lighter hover:text-white">
					Blog
				</a>
			</div>
			<div>
				<a href="#" class="no-underline inline-block text-lg px-4 py-2 leading-none border rounded text-black border-white hover:border-transparent hover:text-teal hover:bg-white mt-4 sm:mt-0">Hamburger</a>
			</div>
		</div>
	</nav>
	<div id="jumbotron">
			<img src="img/Terrangbil_Jimmy_Haavisto.jpg">
		</div>
	<main>
		<content>
		<?php foreach ($users as $user) : ;?>
			<article>
				<?php require __DIR__.'/card.php';?>
			</article>
		<?php endforeach; ?>	
		</content>
	</main>

	<footer>	
	<div class="flex justify-center ">
		<div class="text-grey-darker text-center bg-grey-light px-4 py-2 m-2 rounded-full"></div>
		<div class="text-grey-darker text-center bg-grey-light px-4 py-2 m-2 rounded-full"></div>
		<div class="text-grey-darker text-center bg-grey-light px-4 py-2 m-2 rounded-full"></div>
	</div>
	</footer>
	<script>
	
	</script>
</body>
</html>