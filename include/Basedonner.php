<?php

/**
* Class de manipulation de base de donner
*/
class BaseDonner
{
    
    public $db;

    protected $table;

    protected $columns;
    protected $col_placeholders =  array();

    function __construct($table, $columns)
    {
        $this->table = $table;
        $this->columns = $columns;

        $prop = array();
        foreach ($this->columns as $col) {
            $prop[$col] = ''; 
        }

        extract($prop);

        foreach ($this->columns as $col) {
            $this->col_placeholders[] = ':' . $col; 
        }

        try{
            $this->db = new PDO('mysql:host=' . db_host . ';dbname=' . db_name, db_user, db_pass);
        }
        catch(PDOException $ex){
            die('impossible de se connecter a la base de donner');
        }
    }

    public function remplire($donner)
    {
        foreach ($donner as $cle => $valeur) {
            $this->$cle = $valeur;
        }
    }

    public function remplire_PDO($line)
    {
        foreach ($this->columns as $col) {
            if(array_key_exists($col, $line))
            $this->$col = $line[$col];
        }
    }


    public function executer($sql)
    {
        return $this->db->exec($sql);
    }

    public static function exec($sql)
    {
        try{
            $db = new PDO('mysql:host=' . db_host . ';dbname=' . db_name, db_user, db_pass);
            return $this->db->exec($sql);
        }
        catch(PDOException $ex){
            die('impossible de se connecter a la base de donner');
        }
    }

    public function sql($sql, $data)
    {
        $stmt = $this->db->exec($sql);
        return $stmt->execute($data);
    }

    public function ajouter($donner)
    {
        // joinier les columns
        $cols = join(',', $this->columns);
        $holders = join(',', $this->col_placeholders);
        
        $_donner = array();
        foreach ($this->columns as $col) {
            $_donner[$col] = '';
            if(array_key_exists($col, $donner))
                $_donner[$col] = $donner[$col];
        }

        $sql = "INSERT INTO $this->table ($cols) VALUES ($holders);";
        $stmt = $this->db->prepare($sql);

        return $stmt->execute($_donner);
    }

    public function enregister()
    {
        $donner = array();
        foreach ($this->columns as $col) {
            $donner[$col] = $this->$col;
        }

        return $this->ajouter($donner);
    }


    public static function trouver($col, $val)
    {
        $personne = new static();
        $stmt = $personne->db->prepare("SELECT * FROM $personne->table WHERE $col = :val limit 1");
        $stmt->execute(array(
                        ':val' => $val,
                       ));

        if ($stmt->rowCount() == 0) 
            return false;
        else{

            $resultat = $stmt->fetchObject();

            foreach ($personne->columns as $col) {
                if(array_key_exists($col, $resultat))
                    $personne->$col = $resultat->$col;
            }

            $personne->id = $resultat->id;

            return $personne;
        }
    }

    public function tous($col = null, $val = null)
    {
        if($col == null || $val == null)
            $stmt = $this->db->prepare("SELECT * FROM $this->table");
        else
            $stmt = $this->db->prepare("SELECT * FROM $this->table WHERE $col = :val");
        
        $stmt->execute(array(
                        ':val' => $val,
                       ));

        if ($stmt->rowCount() == 0) 
            return false;
        else{

            $resultat = $stmt->fetchAll();
            $resultat_obj = array();
            foreach ($resultat as $line) {
                $p = new static();
                $p->remplire_PDO($line);
                $resultat_obj[] = $p;
            }
            return $resultat_obj;
        }
    }

    public function auth($email, $password)
    {
        $stmt = $this->db->prepare("SELECT COUNT(*) AS `total` FROM $this->table WHERE email = :email and password = :password");
        $stmt->execute(array(
                        ':email' => $email,
                        ':password' => $password
                       ));
        
        $result = $stmt->fetchObject();

        if ($result->total > 0) 
            return true;
        else
            return false;
    }

}