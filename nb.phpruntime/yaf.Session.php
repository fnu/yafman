<?php

namespace Yaf;

abstract class Session implements Iterator, ArrayAccess, Countable
{

    /**
     * @return Seseion
     */
    public static function getInstance();

    /**
     * @return Session
     */
    public function start();

    /**
     * @return mixed
     */
    public function get(string $name = NULL);

    /**
     * @return  boolean
     */
    public function set(string $name, mixed $value);

    /**
     * @return  mixed
     */
    public function __get(string $name);

    /**
     * @return  boolean
     */
    public function __set(string $name, mixed $value);

    /**
     * @return  boolean
     */
    public function has(string $name);

    /**
     * @return  boolean
     */
    public function del(string $name);

    /**
     * @return  boolean
     */
    public function __isset(string $name);

    /**
     * @return  boolean
     */
    public function __unset(string $name);
}