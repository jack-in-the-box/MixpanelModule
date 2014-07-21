MixpanelModule
==========

Mixpanel module for zf2

Installation
------------

This package can be installed via composer

   https://packagist.org/packages/jitb/mixpanel-module

Configuration
-------------

Just add it to your application configuration file

return array(
    'mixpanel' => array(
        'key' => 'yourtoken',
        'consumer' => 'socket',// curl or socket
        ),
    ),
);
