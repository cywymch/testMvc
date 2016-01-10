<?php
class App
{
    static public function run()
    {
        require_once('library/Smarty/Smarty.class.php');
        require_once('core/Loader.class.php');
        date_default_timezone_set("Asia/Shanghai");
        Loader::init();
        Factory::run();
    }
}