<?php 

class Bug {
    public $id;
    public $description;

    function getId() {
        return $this->id;
    }

    function getDescription() {
        return $this->description;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDescription($description) {
        $this->description = $description;
    }

function __construct($id, $description) {
    $this->id = $id;
    $this->description = $description;
}
    
}
