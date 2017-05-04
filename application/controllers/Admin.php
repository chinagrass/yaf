<?php
class AdminController extends Yaf\Controller_Abstract
{
    public function init(){
        $layout=Yaf\Registry::get('admin_layout');
        $dispatcher=Yaf\Dispatcher::getInstance();
        $dispatcher->registerPlugin($layout);
        $this->_layout = Yaf\Registry::get('admin_layout');
        $this->_layout->meta_title = 'tofly';
    }
}