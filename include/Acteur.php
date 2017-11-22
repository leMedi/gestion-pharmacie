<?php

require_once('outils.php');



/**
* Model Medicaments
*/
class Medicaments extends basedonner
{
    protected $table = 'medicaments';
    protected $columns = array('nom', 'ref', 'form', 'prix_achat',
                             'prix_vente', 'qte', 'aille', 'col',
                            'etage', 'expiration',  'description');

    function __construct($donner = null)
    {
        Parent::__construct($this->table, $this->columns);

        if($donner){
            $this->remplire($donner);
        }

    }
}




