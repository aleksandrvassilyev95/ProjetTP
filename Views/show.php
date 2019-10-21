<?php
include_once "../Models/bugManager.php";

$id = $_GET['id'];
$bugManager = new BugManager();
$bug = $bugManager->find($id);

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="three"><h1>Information d'un bug:</h1></div>
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
                Date
            </th> 
            
        </tr>

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
            <?php echo $bug->getDate();?>
                </td> 

    </tr>
    
    <table>
        <tr>
            <td>
                <a class="button" href="list.php">Liste</a>
            </td>
        </tr>
    </table>
        
        </table>  
</body>
</html>