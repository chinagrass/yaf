<?php
class ErrorController extends HomeController
{
    public function _404Action()
    {
        $this->_layout->css='/public/css/404.css';
    }

}