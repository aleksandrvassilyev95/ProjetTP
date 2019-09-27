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
    function loadcsv() {
        //recuperer le CSV
        $newBug = fopen("data.txt", "r");
        //passer le CSV ligne par pigne
        while (!feof($newBug)) {
            $ligne = fgets($newBug);
            $bug_array = explode(";", $ligne);
            $id = $bug_array[0];
            $description = $bug_array[1];
            $bug = new Bug($id, $description);
            $this->add($bug);
        }
        fclose($newBug);

        //pour chaque ligne créer un nouveau bug 
        //inserer le bug dans $this->bugs
    }

    function load() {
        include "BDD.php";
        $dbh = new PDO('mysql:host=' . $DB_HOST . ';dbname=' . $DB_NAME . ';charset=utf8', $DB_LOGIN, $DB_PASSWROD);
        foreach ($dbh->query('SELECT * FROM `bug` ORDER BY `id`', PDO::FETCH_ASSOC) as $row) {

            $id = $row['id'];
            $description = $row['description'];
            $titre = $row['titre'];
            $statut = $row['statut'];
            $bug = new Bug($id, $description, $titre, $statut);
            $this->add($bug);
        }
    }

    function find($id) {
        include "BDD.php";
        
        $dbh = new PDO('mysql:host=' . $DB_HOST . ';dbname=' . $DB_NAME . ';charset=utf8', $DB_LOGIN, $DB_PASSWROD);
        $sth = $dbh->query('SELECT * FROM `bug` WHERE id = ' . $id, PDO::FETCH_ASSOC);
        $datas = $sth->fetch();
        extract($datas);
        $bug = new Bug($id, $description, $titre, $statut);
        return $bug;
    }
    
    function ajouter($post) {
        include "BDD.php";
    $dbh = new PDO('mysql:host=' . $DB_HOST . ';dbname=' . $DB_NAME . ';charset=utf8', $DB_LOGIN, $DB_PASSWROD);
    $sth = $dbh->prepare('INSERT INTO `bug`(`description`, `titre`, `statut`) VALUES (:description, :titre, :status)');
    $sth -> execute(array("titre" => $post["title"], "description" => $post["commentaire"], "status" => 0));
       
    }
    
    //ajouter en bug a la liste
    function add(Bug $bug) {
        $this->bugs[$bug->getId()] = $bug;
    }

    //supprimer un bug de la liste 
    function remove($bug) {
        if (in_array($bug, $this->bugs)) {
            unset($this->bugs[$bug->getId()]);
            //unset($this->bugs[array_search($bug, $this->bugs[])]);
        }
    }

}
