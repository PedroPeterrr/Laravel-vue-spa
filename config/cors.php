<?php

return [

    'paths' => ['site-stats', 'api/*'], // include your route
    'allowed_methods' => ['*'],
    'allowed_origins' => ['http://localhost:3000'], // your Nuxt dev server
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false,

];

