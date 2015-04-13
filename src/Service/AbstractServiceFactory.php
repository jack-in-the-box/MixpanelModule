<?php
/**
 * Base module for integration of Mixpanel projects with ZF2 applications
 *
 * @license MIT
 * @link    http://www.jack.fr/
 * @author  Martin Supiot <msupiot@jack.fr>
 */

namespace Jitb\MixpanelModule\Service;

use RuntimeException;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Return the Mixpanel options
 */
abstract class AbstractServiceFactory implements FactoryInterface
{
    /**
     * @var \Zend\Stdlib\AbstractOptions
     */
    protected $options;

    /**
     * @param ServiceLocatorInterface $sl
     * @param string $key
     * @param null|string $name
     * @return \Zend\Stdlib\AbstractOptions
     * @throws \RuntimeException
     */
    public function getMixpanelOptions(ServiceLocatorInterface $sl)
    {
        $options = $sl->get('Config');
        $options = $options['mixpanel'];

        if (null === $options) {
            throw new RuntimeException('Options could not be found in "mixpanel".');
        }

        $mixpanelOptionsClass = $this->getOptionsClass();

        return new $mixpanelOptionsClass($options);
    }

    /**
     * @abstract
     * @return string
     */
    abstract public function getOptionsClass();
}