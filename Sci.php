<?php



//l extend puo essere usato solo per un unica classe, per questo si usano i trait
class Sci {

    use commonTrait;

    public $modello;
    public $marca;

    function __construct($mar, $mod, $pos, $cost)
    {
        //come richiamare il construct della classe padre
        parent::__construct();
       $this->marca =$mar;
       $this->modello = $mod;
       $this->posizione = $pos;
       $this->costo = $cost;
    }

    public function getFullName()
    {
        if (!empty($this->marca)) {
            $fullName = $this->marca . ', ' . $this->modello . ' --- Posti: ' . $this->numPersone ;
            //this si riferisce ad Auto
            return $fullName;
        } else {//per gestire le eccezioni, n accoppiata con try e catch
            throw new \Exception("Manca nome marca", 1);
        }
    }
};



?>



