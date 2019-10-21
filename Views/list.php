<?php
include_once "../Models/bugManager.php";


$manager = new BugManager();
$bugs = $manager->findAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="three"><h1>Liste des bugs</h1></div>
    <table>
        <tr>
            <td>
                <a class="button" href="add.php">Ajouter</a>
            </td>
        </tr>
    </table>
    <table>
        
        <tr>
            <th>
                Id
            </th>
            <th>
                Description
            </th>
            <th>
                Titre
            </th>
            <th>
                Statut
            </th>  
            <th>
                Date
            </th> 
            <th>
                Détail
            </th> 

        </tr>
        
        <?php
        foreach ($bugs as $bug) {
        ?>
        <tr>   
                <td>
            <?php echo $bug->getId();?>
                </td>    
                <td>
            <?php echo $bug->getDescription();?>
                </td>
                <td>
            <?php echo $bug->getTitre();?>
                </td>    
                <td>
            <?php echo $bug->getStatut();?>
                </td>  
                 
                <td>
            <?php echo $bug->getDate();?>  
                </td>
                
                <td>
             <a class="button"  href="show.php?id=<?=$bug->getId()?>">Détail</a> 
                </td> 
                
    </tr>
        <?php } ?>  
        </table>  
    
</body>
</html>