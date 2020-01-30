<?php
/**
 * Created by PhpStorm.
 * User: moksleivis
 * Date: 2020-01-30
 * Time: 13:32
 */

namespace OOP;


class Augalai
{
    protected $grupe;
    protected $paplitimas;

    public function __construct($grupe, $paplitimas)
    {
        $this->grupe = $grupe;
        $this->paplitimas=$paplitimas;

    }

    public function showAugalai(){
        $katalogas[] = $this->grupe;
        $katalogas[] = $this->paplitimas;

        return $katalogas;
    }


}