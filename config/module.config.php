<?php
/**
 * Base module for integration of Mixpanel projects with ZF2 applications
 *
 * @license MIT
 * @link    http://www.jack.fr/
 * @author  Martin Supiot <msupiot@jack.fr>
 */

return array(
    'service_manager' => array(
        'factories' =>  array(
            'Jitb\MixpanelModule\Service\MixpanelService' => 'Jitb\MixpanelModule\Service\MixpanelServiceFactory',
        ),
    ),
);
