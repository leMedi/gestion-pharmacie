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

/**
* Model Clients
*/
class Clients extends basedonner
{
    protected $table = 'clients';
    protected $columns = array('nom', 'prenom', 'tel', 'montant_restant',
                             'adresse');

    function __construct($donner = null)
    {
        Parent::__construct($this->table, $this->columns);

        if($donner){
            $this->remplire($donner);
        }

    }
}




