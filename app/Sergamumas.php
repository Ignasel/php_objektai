<?php
/**
 * Created by PhpStorm.
 * User: moksleivis
 * Date: 2020-01-30
 * Time: 15:15
 */

namespace OOP;


abstract class Sergamumas{

    protected $rizikosLygis;

    abstract public function __construct($sergamumas);
    abstract public function addLiga ($liga);
    abstract public function profile();

}