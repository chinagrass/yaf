<?php
class Bootstrap extends Yaf\Bootstrap_Abstract {

    private $_config;

    /*get a copy of the config*/
    public function _initBootstrap(){
        $this->_config = Yaf\Application::app()->getConfig();
    }

    public function _initLayout(Yaf\Dispatcher $dispatcher){
        /*layout allows boilerplate HTML to live in /views/layout rather than every script*/
        $layout = new LayoutPlugin('layout.phtml');
        $admin_layout=new LayoutPlugin('admin_layout.phtml');

        /* Store a reference in the registry so values can be set later.
         * This is a hack to make up for the lack of a getPlugin
         * method in the dispatcher.
         */
        Yaf\Registry::set('layout', $layout);
        Yaf\Registry::set('admin_layout', $admin_layout);

        /*add the plugin to the dispatcher*/
        //$dispatcher->registerPlugin($layout);
    }
}
