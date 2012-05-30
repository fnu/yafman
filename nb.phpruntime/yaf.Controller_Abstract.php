<?php

namespace Yaf;

/**
 *  Yaf\Controller_Abstract是Yaf的MVC体系的核心部分. MVC是指Model-View-Controller, 是一个用于分离应用逻辑和表现逻辑的设计模式.
 *  Yaf\Controller_Abstract体系具有可扩展性, 可以通过继承已有的类, 来实现这个抽象类, 从而添加应用自己的应用逻辑.
 * 对于Controller来说, 真正的执行体是在Controller中定义的一个一个的动作, 当然这些动作也可以定义在Controller外:参看 Yaf\Controller_Abstract::$action
 * 与一般的框架不同, 在Yaf中, 可以定义动作的参数, 这些参数的值来自对Request的路由结果中的同名参数值. 比如对于如下的控制器:
 * @link http://yaf.laruence.com/manual/yaf.class.controller.html
 */
abstract class Controller_Abstract
{

    /**
     * @var array
     * 有些时候为了拆分比较大的Controller, 使得代码更加清晰和易于管理, Yaf支持将具体的动作分开定义.
     * 每个动作都需要实现 Yaf\Action_Abstract
     * 就可以通过定义Yaf\Controller_Abstract::$actions
     * 来指明那些动作对应于具体的那些分离的类
     */
    protected $actions = array();

    /**
     * @var  Yaf\Request_Abstract
     * 当前的请求实例, 属性的值由 Yaf\Dispatcher保证,
     * 一般通过Yaf\Controller_Abstract::getRequest来获取此属性.
     */
    protected $_request;

    /**
     * @var  Yaf\Response_Abstract
     * 当前的响应对象, 属性的值由 Yaf\Dispatcher保证,
     * 一般通过 Yaf\Controller_Abstract::getResponse来获取此属性.
     */
    protected $_response;

    /**
     * @var  Yaf\View_Interface
     * 视图引擎, Yaf才会延时实例化视图引擎来提高性能,
     * 所以这个属性直到显示的调用了 Yaf\Controller_Abstract::getView
     * 或者 Yaf\Controller_Abstract::initView以后才可用
     */
    protected $_view;

    /** @var string */
    protected $_script_path;

    private function __construct();

    public function init();

    /**
     * @return string
     */
    public function getModuleName();

    /**
     * @return  Yaf\Request_Abstract
     */
    public function getRequest();

    /**
     * @return  Yaf\Response_Abstract
     */
    public function getResponse();

    /**
     * @return  Yaf\View_Interface
     */
    public function getView();

    /**
     * @return  Yaf\View_Interface
     */
    public function initView();

    /**
     * @return boolean
     */
    public function setViewPath($view_directory);

    /**
     * @return string
     */
    public function getViewPath();

    /**
     * @return  Yaf\Response_Abstract
     */
    public final function render(string $action_name, array $tpl_vars = NULL);

    /**
     * @return boolean
     */
    public function display(string $action_name, array $tpl_vars = NULL);
    /*     * m array $invoke_args
     * @return boolean
     */

    public function forward(string $action, array $invoke_args = NULL);

    /**
     * @return boolean
     */
    public function forward2(string $controller, string $action, array $invoke_args = NULL);

    /**
     * @return boolean
     */
    public function forward3(string $module, string $controller, string $action, array $invoke_args = NULL);

    /**
     * @return boolean
     */
    public function redirect(string $url);
}
