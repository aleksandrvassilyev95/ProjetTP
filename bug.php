<?php

class Bug {

    public $id;
    public $description;
    public $titre;
    public $statut;

    function getId() {
        return $this->id;
    }

    function getDescription() {
        return $this->description;
    }

    function getTitre() {
        return $this->titre;
    }

    function getStatut() {
        return $this->statut;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setTitre($titre) {
        $this->titre = $titre;
    }

    function setStatut($statut) {
        $this->statut = $statut;
    }

    function __construct($id = null, $description = null, $titre = null, $statut = null) {
        $this->id = $id;
        $this->description = $description;
        $this->titre = $titre;
        $this->statut = $statut;
    }

}
