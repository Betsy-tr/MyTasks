<?php

include("config.php") ;
include($dir_common."/db.php") ;

// var_dump($_GET) ;
// var_dump($_POST) ;

switch ($_GET['mod']) { // Gestion du mode d'arrivé en GET
    case 'add': // Ajouter une tache en base de données 
    // Création de ma requête
    $sql = "INSERT INTO tasks(tasks , statut) VALUES ('".$_POST['tasks']."' ,'n')" ; 

    // Exécution de ma requête   
    $mysqli->query($sql) ; 
        break;
    case 'upd':// Modifier une tache en base de données ;
    $sql ="UPDATE tasks SET statut='o' WHERE id=". $_GET['id'] ; // Met à jour la colonne etat
    $mysqli->query($sql) ;
        break;
    case 'del': // Supprimer une tache en base de données

    $sql ='DELETE FROM tasks WHERE id='. $_GET['id'] ;
    $mysqli->query($sql) ;
        break;
    
    default:
        # code...
        break;
}
header("location:index.php")

?>