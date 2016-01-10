<?php
class Loader
{
    static public $loader=null;
    public function __construct()
    {
        spl_autoload_register(array($this,"core"));
        spl_autoload_register(array($this,"controller"));
    }
    static public function init()
    {
        if (self::$loader==NULL)
            self::$loader=new self();
        return self::$loader;
    }
    static public function core($class)
    {
        if (file_exists(ROOT_PATH."/framework/core/".$class.".class.php")){
            require_once(ROOT_PATH."/framework/core/".$class.".class.php");
        }
    }
    static public function controller($class)
    {
        if (file_exists(ROOT_PATH."/app/controllers/".$class.".class.php")){
            require_once(ROOT_PATH."/app/controllers/".$class.".class.php");
        }
    }
    static public function models($class)
    {
        if (file_exists(ROOT_PATH."/app/models/".$class.".class.php")){
            require_once(ROOT_PATH."/app/models/".$class.".class.php");
        }
    }
}