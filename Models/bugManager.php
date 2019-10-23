<?php


include 'bug.php';
include '../manager.php';
$dbh = new Manager();


class BugManager extends Manager{

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
    function load() {
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

    function findAll() {
        $dbh = $this->connectDb();
        foreach ($dbh->query('SELECT * FROM `bug` ORDER BY `id`', PDO::FETCH_ASSOC) as $row) {
            $id = $row['id'];
            $description = $row['description'];
            $titre = $row['titre'];
            $statut = $row['statut'];
            $date = $row['date'];
            $bug = new Bug($id, htmlspecialchars($description), htmlspecialchars($titre), $statut, $date);            
            $bugs[] = $bug;
        }
        
        return $bugs;
    }

    function find($id) {
        $dbh = $this->connectDb();
        $sth = $dbh->query('SELECT * FROM `bug` WHERE id = ' . $id, PDO::FETCH_ASSOC);
        $datas = $sth->fetch();
        extract($datas);
        $bug = new Bug($id, htmlspecialchars($description), htmlspecialchars($titre), $statut, $date);
        return $bug;
    }
    
    function add(Bug $bug) {
        $dbh = $this->connectDb();
        $sth = $dbh->prepare('INSERT INTO `bug`(`titre`, `description`) VALUES (:titre, :description)');
        $sth -> execute(array(
            "titre" =>$bug->getTitre(), 
            "description" => $bug->getDescription() 
        )); 

    }

    //supprimer un bug de la liste 
    function remove($bug) {
        if (in_array($bug, $this->bugs)) {
            unset($this->bugs[$bug->getId()]);
            
        }
    }

}

