<?php

namespace App\Service;


class RouterService{
    private $match;
    const NS_CONTROLLER = 'App\\Controller\\';
    public function __construct($match)
    {
        $this->match = $match;
    }

    public function render()
    {
        if(false !== $this->match && is_array($this->match)){
            list($controllerName, $action) = explode('#', $this->match['target']);
            $controller = new (self::NS_CONTROLLER . $controllerName);
            if (is_callable([$controller, $action])) {
                call_user_func_array([$controller, $action], [$this->match['params']]);
            }
        }
    }
}