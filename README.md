MixpanelModule
==========

Mixpanel module for zf2

Installation
------------

This package can be installed via composer

   https://packagist.org/packages/jitb/mixpanel-module
   
   see others at : https://packagist.org/users/Jack%20in%20the%20Box/

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
