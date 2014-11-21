<?php

namespace Mitul\Utils;

/**
 * Factory class that is used to avoid creating multiple instances of controllers
 * in other controllers to retrieve the data from another controller.
 *
 * Class BizBrainFactory
 * @package Mitul\Utils
 */
class BizBrainFactory
{
	/**
	 * Holds all created instances of controllers
	 *
	 * @var array
	 */
	public static $controllers;

    /**
     * Checks if Controller instance is there then returns controller instance
     * else makes a new Controller instance and returns it
     *
     * @param string $controller Class name of Controller
     * @return mixed
     */
    public static function getController($controller)
    {
        if(!isset(self::$controllers[$controller]))
        {
            self::$controllers[$controller] = new $controller();
        }

        return self::$controllers[$controller];
    }
} 