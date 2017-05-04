<?php

class HomeController extends Yaf\Controller_Abstract
{
    public function init(){
        var_dump(new foo());die;
        $layout=Yaf\Registry::get('layout');
        $dispatcher=Yaf\Dispatcher::getInstance();
        $dispatcher->registerPlugin($layout);
        $this->_layout = Yaf\Registry::get('layout');
        $this->_layout->meta_title = 'tofly';
    }
}