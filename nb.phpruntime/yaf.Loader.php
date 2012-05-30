<?php

namespace Yaf;

final class Loader
{

    /**
     * @var \Yaf\Loader
     */
    protected static $_instance;

    /**
     * @var string
     */
    protected $_library_directory;

    /**
     * @var string
     */
    protected $_global_library_directory;

    /**
     * @var string
     */
    protected $_local_ns;

    /**
     * @return \Yaf\Loader
     */
    public static function getInstance(string $local_library_directory = NULL, string $global_library_directory = NULL);

    /**
     * @return \Yaf\Loader
     */
    public function registerLocalNamespace(mixed $namespace);

    /**
     * @return boolean
     */
    public function getLocalNamespace();

    /**
     * @return boolean
     */
    public function clearLocalNamespace();

    /**
     * @return boolean
     */
    public function isLocalName(string $class_name);

    /**
     * @return boolean
     */
    public static function import(string $file_name);

    /**
     * @return boolean
     */
    public function autoload(string $class_name);
}