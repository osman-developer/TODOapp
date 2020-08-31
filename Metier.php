<?php

class TODO {

    public $titre, $description, $categorie;

    public function __construct($titre, $description, $categorie) {
        $this->titre = $titre;
        $this->description = $description;
        $this->categorie = $categorie;
    }

}

class TODOList {

    public $list;

    public function __construct() {
        $this->addSomeTODO();
    }

    public function add($todo) {
        $this->list[] = $todo;
    }

    public function addSomeTODO() {
        $this->add(new TODO('réparer voiture', 'passer demain au mécanicien pour changer les bougies', 'urgente'));
        $this->add(new TODO('visiter banque', 'passer cette semaine a la banque pour faire un virement', 'normale'));
        $this->add(new TODO('shopping', 'chercher un chossure a ABC, couleur noire, taille 42', 'secondaire'));
        $this->add(new TODO('test', 'testing', 'normale'));
    }

    public function getTODOByCategory($categoryName) {
        if ($categoryName == 'all')
            return $this->list;

        for ($i = 0; $i < count($this->list); $i++) {
            if ($this->list[$i]->categorie == $categoryName)
                $result[] = $this->list[$i];
        }
        return $result;
    }

    /*public function nbTODO() {
        return count($this->list);
    }*/

    public function getTODO($index) {
        if ($index < count($this->list)) {
            return $this->list[$index];
        } else {
            return null;
        }
    }

    public function delTODO($index) {
        unset($this->list[$index]);
        $this->list=array_values($this->list);//reindex 
    }

}

?>