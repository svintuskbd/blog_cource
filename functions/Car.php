<?php
/**
 * Created by PhpStorm.
 * User: oleg
 * Date: 06.12.17
 * Time: 20:07
 */

class Car
{
    public $engine;
    public $door;
    public $color;
    public $name;

    public function __construct($engineWorld, $doorWorld, $colorWorld, $nameWorld = 'car')
    {
        $this->engine = $engineWorld;
        $this->door = $doorWorld;
        $this->color = $colorWorld;
        $this->name = $nameWorld;
    }
}