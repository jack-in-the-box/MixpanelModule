<?php
/**
 * Base module for integration of Mixpanel projects with ZF2 applications
 *
 * @license MIT
 * @link    http://www.jack.fr/
 * @author  Martin Supiot <msupiot@jack.fr>
 */

namespace Jitb\MixpanelModule\Options;

use Zend\Stdlib\AbstractOptions;

/**
 * Options for Mixpanel connection
 */
class Configuration extends AbstractOptions
{
    /**
     * @var string
     */
    protected $key = null;

    /**
     * @var string
     */
    protected $consumer = null;

    /**
     * @var bool
     */
    protected $debug = false;

    /**
     * @var string
     */
    protected $file = null;

    /**
     * @var callable
     */
    protected $errorCallback = null;

    /**
     * @param string $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param string $consumer
     */
    public function setConsumer($consumer)
    {
        $this->consumer = $consumer;
    }

    /**
     * @return string
     */
    public function getConsumer()
    {
        return $this->consumer;
    }

    /**
     * @param bool $debug
     */
    public function setDebug($debug)
    {
        $this->debug = $debug;
    }

    /**
     * @return bool
     */
    public function getDebug()
    {
        return $this->debug;
    }

    /**
     * @param string $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }

    /**
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param callable $errorCallback
     */
    public function setErrorCallback($errorCallback)
    {
        $this->errorCallback = $errorCallback;
    }

    /**
     * @return callable
     */
    public function getErrorCallback()
    {
        return $this->errorCallback;
    }
}