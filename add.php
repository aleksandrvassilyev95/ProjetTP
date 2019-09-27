<?php
include_once "bugManager.php";

if (!empty($_POST["title"])) {
$manager = new BugManager();
$manager->ajouter($_POST);  
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
            <th>
                Titre
            </th>
            <th>
                Commentaire
            </th>
        </tr>
        <form method="POST" action="">
        <tr>
            <td>
                <input type="text" id="tit" name="title" required size="45" size="10">
            </td>
            <td>
               <input type="text" id="com" name="commentaire" required size="45" size="10">
            </td>
        </tr>
        <tr>
            <td>
            <input class="buttoninput" type="submit" value="Envoyer">
            </form>
            </td>
        </tr>

        </table>  
</body>
</html>