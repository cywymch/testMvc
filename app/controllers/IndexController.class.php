<?php
class IndexController extends Controller
{
    public function index()
    {
       $this->display("Index/index.tpl");
    }
    public function demo()
    {
        $this->display("Index/demo.tpl");
    }
}