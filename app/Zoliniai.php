<?php
/**
 * Created by PhpStorm.
 * User: moksleivis
 * Date: 2020-01-30
 * Time: 14:07
 */

namespace OOP;


class Zoliniai extends Sergamumas
{
    protected $derlingumas;
    protected $arValgomas;

    public function __construct($rizikosLygis, $derlingumas, $arValgomas)
    {
        parent::__construct($rizikosLygis);
        $this->grupe=$derlingumas;
        $this->paplitimas=$arValgomas;
        $this->rizikosLygis=$rizikosLygis;
    }

    public function addLiga($liga)
    {
        // TODO: Implement addLiga() method.
    }

    public function showGrass(){
        $katalogas[]=$this->derlingumas;
        $katalogas[]=$this->arValgomas;
        $katalogas[]=$this->rizikosLygis;

        return $katalogas;
    }
}