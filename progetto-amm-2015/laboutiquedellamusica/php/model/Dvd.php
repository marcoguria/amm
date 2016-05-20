<?php

/**
 * @author Marco Guria
 * Classe DVD
 */
class Dvd {

    /**
     * Categoria del brano
     * @var categoria
     */
    private $categoria;

    /**
     * Anno di produzione del brano
     * @var int
     */
    private $anno;


    /**
     * Titolo del brano
     * @var String
     */
    private $titolo;
    
    /**
     * Costruttore
     */
    public function __costruct() {
        
    }

    /**
     * id unico per il brano
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Imposta un id unico per il brano
     * @param int $id
     * @return boolean true se il valore e' stato aggiornato correttamente,
     * false altrimenti
     */
    public function setId($id) {
        $intVal = filter_var($id, FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE);
        if (!isset($intVal)) {
            return false;
        }
        $this->id = $intVal;
    }

    public function setAnno($anno) {
        $intVal = filter_var($anno, FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE);
        if (isset($intVal)) {
            if ($intVal > 1000 && $intVal <= date("Y")) {
                $this->anno = $intVal;
                return true;
            }
        }
        return false;
    }

    public function getAnno() {
        return $this->anno;
    }


    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getTitolo() {
        return $this->titolo;
    }

    public function setTitolo($titolo) {
        $this->titolo = $titolo;
    }

}

?>
