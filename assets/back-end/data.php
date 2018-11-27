<?php
declare(strict_types=1);

$data =
[
	'sv' =>
			[
				'title' => 'Vi lyfter glädjen till körning',
				'signup' => 'Registrera dig idag!',
			 	'register-button' => 'Registrera',
			 	'download-button' => 'Ladda ned Broschyr',
			 	'nav-discover' => 'Upptäck FS.1.0',
			 	'contact' => 'Kontakta Oss',
			 	'policy' => 'Integritets Policy',
			 	'content' => file_get_contents(__DIR__.'/../content/swe-lorem.txt')
			],
	'en' =>
			[
				'title' => 'We bring fun into driving',
				'signup' => 'Signup to be a part of the adventure',
				'register-button' => 'Register',
				'download-button' => 'Download Brochure',
				'nav-discover' => 'Discover FS.1.0',
				'contact' => 'Contact Us',
				'policy' => 'Privacy Policy',
				'content' => file_get_contents(__DIR__.'/../content/eng-lorem.txt')
			],
];
