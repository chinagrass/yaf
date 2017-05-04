<?php
class ShowController extends HomeController
{
    public function listAction()
    {
        $this->getView()->assign('content','hello');
    }
    public function showAction()
    {

    }
}