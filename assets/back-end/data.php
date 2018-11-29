<?php
declare(strict_types=1);

$data =
[
	'sv' =>
			[
				'title' => 'Vi lyfter glädjen till körning.',
				'signup' => 'Registrera dig idag!',
			 	'register-button' => 'Registrera',
			 	'download-button' => 'Ladda ned broschyr',
			 	'nav-discover' => 'Upptäck FS.1.0',
			 	'contact' => 'Kontakta oss',
			 	'policy' => 'Integritets Policy',
			 	'content' => file_get_contents(__DIR__.'/../content/swe-lorem.txt')
			],
	'en' =>
			[
				'title' => 'We bring fun into driving.',
				'signup' => 'Register to be a part of the adventure.',
				'register-button' => 'Register',
				'download-button' => 'Download brochure',
				'nav-discover' => 'Discover FS.1.0',
				'contact' => 'Contact us',
				'policy' => 'Privacy policy',
				'content' => file_get_contents(__DIR__.'/../content/eng-lorem.txt')
			],
];
