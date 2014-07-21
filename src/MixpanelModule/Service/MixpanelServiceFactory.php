<?php
/**
 * Base module for integration of Mixpanel projects with ZF2 applications
 *
 * @license MIT
 * @link    http://www.jack.fr/
 * @author  Martin Supiot <msupiot@jack.fr>
 */

namespace MixpanelModule\Service;

use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Initiate a connection to a database
 */
class MixpanelServiceFactory extends AbstractServiceFactory
{
    /**
     * @return Mixpanel\
     */
    public function createService(ServiceLocatorInterface $sl)
    {
        $key = $this->getMixpanelOptions($sl)->getkey();
        $consumer = $this->getMixpanelOptions($sl)->getConsumer();
        $mp = \Mixpanel::getInstance(
            $key, 
            array(
                'consumer' => $consumer,
                'debug' => true
            )
        );
        return $mp;
    }

    /**
     * @return string
     */
    public function getOptionsClass()
    {
        return 'MixpanelModule\Options\Configuration';
    }
}