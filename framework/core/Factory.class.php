<?php
class Factory
{
    static public function run()
    {
        Router::pareUrl();
        $c=ucfirst(Router::$controller)."Controller";
        $controller=new $c();
        if (method_exists($controller,Router::$action)){
            call_user_func(array($controller,Router::$action));
        }
    }
}