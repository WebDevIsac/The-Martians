	<div class="container mx-auto justify-center max-w-sm md:max-w-md lg:max-w-lg xl:max-w-xl bg-white opacity-75 rounded my-6 mb-6">
		<div class="">
			<img src="<?= $user['img']; ?>" class="h-12 float-right">
		</div>
		<h1 class="p-8"><?= $user['name']; ?></h1>
		<p class="p-8">
			<?= $user['content']; ?>
		</p>
	</div>