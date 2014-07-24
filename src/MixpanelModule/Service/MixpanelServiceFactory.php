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
        $consumer      = $this->getMixpanelOptions($sl)->getConsumer();
        $debug         = $this->getMixpanelOptions($sl)->getDebug();
        $file          = $this->getMixpanelOptions($sl)->getFile();
        $errorCallback = $this->getMixpanelOptions($sl)->getErrorCallback();
        $mp = \Mixpanel::getInstance(
            $key, 
            array(
                'consumer'       => $consumer,
                'debug'          => $debug,
                'file'           => $file,
                'error_callback' => $errorCallback
            )
        );
        return $mp;
    }

    /**
     * Example of callback error handler usable under dev mode only
     * 
     * @param  int    $code Error code
     * @param  string $data Error data
     * @return void         Echo the given error
     */
    function handleMixpanelError($code, $data) {
        echo "This is my  customer error handler. I've received an error! code = " . $code . " : data = " . $data . "<br />";
    }

    /**
     * @return string
     */
    public function getOptionsClass()
    {
        return 'MixpanelModule\Options\Configuration';
    }
}