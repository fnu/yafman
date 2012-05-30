<?php

namespace Yaf;

interface View_Interface
{

    /**
     * @return string
     */
    public function render(string $view_path, array $tpl_vars = NULL);

    /**
     * @return  boolean
     */
    public function display(string $view_path, array $tpl_vars = NULL);

    /**
     * @return  boolean
     */
    public function assign(mixed $name, mixed $value = NULL);

    /**
     * @return  boolean
     */
    public function setScriptPath(string $view_directory);

    /**
     * @return  string
     */
    public function getScriptPath();
}
