<?php
/**
 * Created by PhpStorm.
 * User: moksleivis
 * Date: 2020-01-30
 * Time: 14:07
 */

namespace OOP;


class Zoliniai extends Augalai
{
protected $derlingumas;
protected $arValgomas;

    public function __construct($grupe, $paplitimas, $derlingumas, $arValgomas)
    {
        parent::__construct($grupe, $paplitimas);
        $this->grupe=$grupe;
        $this->paplitimas=$paplitimas;
        $this->derlingumas=$derlingumas;
        $this->arValgomas;
    }

    public function showGrass(){
        $katalogas [] = $this->grupe;
        $katalogas[]=$this->paplitimas;
        $katalogas[]=$this->derlingumas;
        $katalogas[]=$this->arValgomas;

        return $katalogas;
    }
}