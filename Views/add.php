<?php
include_once "../Models/bugManager.php";
include_once '../Models/bug.php';

if (!empty($_POST["title"])) {
$manager = new BugManager();

$bug = new Bug();
$bug->setTitre($_POST['title']);
$bug->setDescription($_POST['commentaire']);

$manager->add($bug);  
} 

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="three"><h1>Ajouter un bug</h1></div>
    <table>
        
        <tr>
            <th align="center">
                Titre
            </th>
            <th align="center">
                Commentaire
            </th>
        </tr>
        <form method="POST" action="">
        <tr>
            <td align="center">
                <input type="text" id="tit" name="title" required size="45" size="10">
            </td>
            <td align="center">
               <input type="text" id="com" name="commentaire" required size="45" size="10">
            </td>
        </tr>
        <tr>
            <td>
            <input class="buttoninput" type="submit" value="Envoyer">
            </form>
            </td>
            <td>
            <a class="button" href="list.php">Liste</a>
            </td>
        </tr>

        </table>  
</body>
</html>