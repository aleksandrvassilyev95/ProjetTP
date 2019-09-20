<?php 

include bug.php;

class BugManager {
    public $bugs;

    function getBugs() {
        return $this->bugs;
    }

    function setBugs($bugs) {
        $this->bugs = $bugs;
    }
    function __construct($bugs) {
        $this->bugs = $bugs;
    }
    
    //charger en memoire ce qui se trouve dans le sense de données
    function load () {  
        
    }
    
    //ajouter en bug a la liste
    function add (Bug $bug) {   
        $this->bugs[$bug->getId()]=$bug;
    }
    
   //supprimer un bug de la liste 
    function remove($bug) {  
        if(in_array($bug, $this->bugs)) {
            unset($this->bugs[$bug->getId()]); 
            //unset($this->bugs[array_search($bug, $this->bugs[])]);
        }
            
                
    }

}

