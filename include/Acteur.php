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
    
    public function position() {
        return $this->aille . '-' . $this->col . '-' . $this->etage;
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

/**
* Model employers
*/
class Employers extends basedonner
{
    protected $table = 'employers';
    protected $columns = array('nom', 'prenom', 'tel','email','address','salaire','password','admin');

    function __construct($donner = null)
    {
        Parent::__construct($this->table, $this->columns);

        if($donner){
            $this->remplire($donner);
        }

    }

    public function estAdmin()
    {
        return $this->admin == 0 ? false : true;
    }
    
}




