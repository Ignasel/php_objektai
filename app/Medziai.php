<?php
/**
 * Created by PhpStorm.
 * User: moksleivis
 * Date: 2020-01-30
 * Time: 13:32
 */

namespace OOP;


class Medziai extends Augalai
{
    protected $pavadinimas;
    protected $aptikimasLietuvoje;
    protected $turisHektare;

    public function __construct($grupe, $paplitimas, $pavadinimas, $aptikimasLietuvoje, $turisHektare)
    {
        parent::__construct($grupe, $paplitimas);
        $this->grupe=$grupe;
        $this->paplitimas=$paplitimas;
        $this->pavadinimas=$pavadinimas;
        $this->aptikimasLietuvoje=$aptikimasLietuvoje;
        $this->turisHektare=$turisHektare;

    }

    public function mediena(){
        $katalogas[] = $this->grupe;
        $katalogas[] = $this->paplitimas;
        $katalogas[] = $this->pavadinimas;
        $katalogas[] = $this->aptikimasLietuvoje;
        $katalogas[] =$this->turisHektare;

        return $katalogas;
    }
}