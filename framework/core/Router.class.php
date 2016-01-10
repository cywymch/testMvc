<?php
class Router
{
    static public $module=MODULE_NAME;
    static public $controller='Index';
    static public $action='index';

    static public function pareUrl()
    {
        if (isset($_GET['r'])) {
            $query_string = $_GET['r'];
            $query_string = explode('/', $query_string);
            self::$controller = $query_string[0];
            self::$action = $query_string[1];
        }
    }
}