<?php

Autoloader::namespaces(array(
    'Chargebee' => Bundle::path('chargebee').'chargebee-php/lib/',
));

// include
require_once(__DIR__.'/chargebee-php/lib/ChargeBee.php');

// load config
$config = Config::get('chargebee');

ChargeBee_Environment::configure(
    $config['site_name'],
    $config['site_api_key']
);
