<?php
declare(strict_types=1);

$data =
[
	'sv' =>
			[
				'title' => 'Vi lyfter glädjen till körning',
				'signup' => 'Registrera dig idag!',
			 	'register-button' => 'Registrera',
			 	'download-button' => 'Broschyr',
			 	'nav-discover' => 'Upptäck FS.1.0',
			 	'footer-contact' => 'Kontakta Oss',
			 	'footer-policy' => 'Integritets Policy',
			 	'content' => file_get_contents(__DIR__.'/swe-lorem.txt')
			],
	'en' =>
			[
				'title' => 'We bring fun into driving',
				'signup' => 'Signup to be a part of the adventure',
				'register-button' => 'Register',
				'download-button' => 'Brochure',
				'nav-discover' => 'Discover FS.1.0',
				'footer-contact' => 'Contact Us',
				'footer-policy' => 'Privacy Policy',
				'content' => file_get_contents(__DIR__.'/eng-lorem.txt')
			],
];
