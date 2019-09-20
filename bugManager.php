<?php 

include 'bug.php';

class BugManager {
    public $bugs;

    function getBugs() {
        return $this->bugs;
    }

    function setBugs($bugs) {
        $this->bugs = $bugs;
    }
    function __constructor($bugs) {
        $this->bugs = $bugs;
    }
    
    //charger en memoire ce qui se trouve dans le sense de données
    function load () {  
        //recuperer le CSV
        $newBug = fopen("data.txt", "r");
        //passer le CSV ligne par pigne
        while (!feof($newBug)) {
            $ligne = fgets($newBug);
            $this->bugs = $ligne;
            print '<pre>';
            print_r($this->bugs);
            print '<pre>';
            
        }
        fclose($newBug);
      
        //pour chaque ligne créer un nouveau bug 
        //inserer le bug dans $this->bugs
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

