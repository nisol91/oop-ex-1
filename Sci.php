<?php



class Sci {



    function __construct($mar, $mod, $pos, $cost)
    {   
        
       $this->marca =$mar;
       $this->modello = $mod;
       $this->posizione = $pos;
       $this->costo = $cost;
    }

    public function getProductSki()
    {
        if (!empty($this->marca)) {
            $fullName = $this->marca . ', ' . $this->modello . ' --- Pos: ' . $this->posizione . ' --- Price: ' . $this->costo . ' $'  ;
            return $fullName;
        } else {//per gestire le eccezioni, n accoppiata con try e catch
            throw new \Exception("Manca nome marca", 1);
        }
    }
};



?>



