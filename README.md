chargebee
===============

Chargebee is a Recurring billing SaaS application. This bundle is a wrapper around the API.
http://www.chargebee.com/
https://apidocs.chargebee.com/docs/api?lang=php

Installation
============

To install chargebee just run:

    php artisan bundle:install chargebee

And to activate chargebee add the following to your bundles.php file:

    'chargebee' => array('auto' => true),

Configuration
=============

You will need to create an account on chargebee and configure the site_name and site_api_key parameters.

In the chargebee directory you will find a config folder. Copy the file inside it to your application/config folder. And enter the parameters.

Usage
=====

get all you plans

    $plans = array();

    $all = ChargeBee_Plan::all();
    $all->rewind();
    while ($all->valid())
    {
        $plan = $all->current()->plan();
        $plans[] = $plan;
        $all->next();
    }
}

