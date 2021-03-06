<?php

return [


    /*
    |--------------------------------------------------------------------------
    | Breakpoints
    |--------------------------------------------------------------------------
    |
    */
    'breakpoints' => [
        'sm' => 640,
        'md' => 768,
        'lg' => 1024,
        'xl' => 1280,
        '2xl' => 1536,
    ],
	/*
    |--------------------------------------------------------------------------
    | Breakpoints
    |--------------------------------------------------------------------------
    | can currently be
    | imgix, glide
    |
    */

	'provider' => 'glide',

	'imgix_url' => env('AWS_URL')
];
