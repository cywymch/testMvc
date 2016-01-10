<?php
class View extends Smarty
{
    static private $instance;

    public static function getInstance(){
        if (!(self::$instance instanceof self)){
            self::$instance=new self();
        }
        return self::$instance;
    }

    public function setConfig(){
        $this->compile_dir='runtime/complie/';
        $this->template_dir='app/views/';
        $this->config_dir='config/';
        $this->cache_dir='runtime/cache/';
        $this->caching=false;
        $this->plugins_dir='framework/library/plugins';
    }
}