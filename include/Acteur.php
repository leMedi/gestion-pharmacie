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

    public static function miseJourQte($id, $qte) {
        $db = new PDO('mysql:host=' . db_host . ';dbname=' . db_name, db_user, db_pass);
        $stmt = $db->prepare('UPDATE medicaments SET qte = qte - :qte WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':qte', $qte);

        return $stmt->execute();
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

    public static function miseJourCredit($id, $credit) {
        $db = new PDO('mysql:host=' . db_host . ';dbname=' . db_name, db_user, db_pass);
        $stmt = $db->prepare('UPDATE clients SET montant_restant = montant_restant + :credit WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':credit', $credit);

        return $stmt->execute();
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




