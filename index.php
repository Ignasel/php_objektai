<?php
require "vendor/autoload.php";
use OOP\User;


$users = new User('Jonas', 'jonas@jonas.lt', '+37064321751' );
$users->addComment("Nieko nežino apie gamtą");
$users2 = new User('Petras', 'petras@jonas.lt', '+37068798468');
$users3 = new User('Kazys', 'kazys@kazlauskas.lt', '++376548745');
foreach ($users->show() as $property):?>
<li><?=$property?></li>
<?php endforeach;?>

<?php
foreach ($users->showComment() as $komentarai):?>
<li><?=$komentarai?></li>
<?php endforeach;?>


<?php
foreach ($users2->show() as $property):?>

    <li><?=$property?></li>
<?php endforeach;?>

<?php
foreach ($users3->show() as $property):?>
    <li><?=$property?></li>
<?php endforeach;?>

<?php class Transportas
{
    private $modelis;
    private $marke;
    private $svoris;
    private $kaina;
    private $arVariklis;
    private $maxGreitis;
    private $aprasymas;
    private $kiekKeleiviu;


    public function addModelis($modelis)
    {
        $this->modelis = $modelis;
    }



    public function addMarke($marke)
    {
        $this->marke = $marke;
    }


    public function addSvoris($svoris)
    {
        $this->svoris = $svoris;
    }

    public function showSvoris(){
        $datass = $this->svoris;
        return $datass;
    }


    public function addKaina($kaina)
    {
        $this->kaina = $kaina;
    }
    public function showKainos(){
        $datass = $this->kaina;
        return $datass;
    }


    public function arVariklis($variklis)
    {
        $this->arVariklis = $variklis;
    }
    public function showVarikliai(){
        $datass = $this->arVariklis;
        return $datass;
    }


    public function AddMaxGreitis($maxGreitis)
    {
        $this->maxGreitis = $maxGreitis;
    }
    public function showGreciai(){
        $datass = $this->maxGreitis;
        return $datass;
    }


    public function addAprasymas($aprasymas)
    {
        $this->aprasymas = $aprasymas;
    }
    public function showAprasymas(){
        $datass = $this->aprasymas;
        return $datass;
    }

    public function addKeleivis($keleiviai)
    {
        $this->kiekKeleiviu = $keleiviai;
    }
    public function showKeleiviai(){
        $datass = $this->kiekKeleiviu;
        return $datass;
    }

    public function __construct($modelis, $marke)
    {
        $this->modelis = $modelis;
        $this->marke = $marke;
    }

    public function showTransport()
    {
        $datas[] = $this->modelis;
        $datas[] = $this->marke;

        return $datas;

    }

    public function addAllInfo($svoris, $kaina, $arVariklis, $maxGreitis, $aprasymas, $kiekKeleiviu){
            $this->svoris = $svoris;
            $this->kaina = $kaina;
            $this->arVariklis = $arVariklis;
            $this->maxGreitis = $maxGreitis;
            $this->aprasymas = $aprasymas;
            $this->kiekKeleiviu = $kiekKeleiviu;
    }

    public function showAllData(){
        $info[] = $this->svoris;
        $info[] = $this->kaina;
        $info[] = $this->arVariklis;
        $info[] = $this->maxGreitis;
        $info[] = $this->aprasymas;
        $info[] = $this->kiekKeleiviu;


        return $info;
    }


}

$automobilis1 = new Transportas("volvo", "v70");
$automobilis1->addSvoris('3500kg');
$automobilis1->addKaina('2000Eur');
$automobilis1->addKeleivis("aštuoni");
$automobilis1->AddMaxGreitis("195hm/h");

foreach ($automobilis1->showTransport() as $datass):?>
<li><?=$datass?></li>
<?php endforeach;?>
<li><?=$automobilis1->showSvoris() ?></li>
<li><?=$automobilis1->showKainos() ?></li>
<li><?=$automobilis1->showKeleiviai() ?></li>
<li><?=$automobilis1->showGreciai() ?></li>






