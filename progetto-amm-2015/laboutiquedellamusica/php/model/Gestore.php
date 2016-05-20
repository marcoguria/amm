<?php

include_once 'User.php';

/**
* @author Marco Guria
* Classe che rappresenta il gestore
*/
class Gestore extends User {

    /**
* Costruttore
*/
    public function __construct() {
        // richiamo il costruttore della superclasse
        parent::__construct();
        $this->setRuolo(User::Gestore);
    }

}

?>
