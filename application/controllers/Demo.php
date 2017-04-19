<?php
class DemoController extends Yaf_Controller_Abstract {
    public function indexAction() {//Ä¬ÈÏAction
        $this->getView()->assign("content", "Hello World!");
    }
    public function demoAction() {
        var_dump($this->getRequest()->get('a'));
        $this->getView()->assign("content", "Hello World!");
    }
}