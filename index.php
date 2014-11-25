<?php

require 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->config( [ 
	
	'debug' 			=> true,
	'templates.path' 	=> 'templates',
	'mode'				=> 'development',

	]);

$app->get('/' , function() use ($app) {

	$app->render( 'home.php' );

	
});

$app->get('/hello/:name' , function( $name ) {
	echo "Hello, {$name}";
});

$app->run();
