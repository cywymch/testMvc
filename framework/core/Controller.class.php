<?php
abstract class Controller
{
    public function __construct()
    {
        $this->tpl=View::getInstance();
        $this->tpl->setConfig();
    }
    public function display($template)
    {
        $this->tpl->display($template);
    }
}