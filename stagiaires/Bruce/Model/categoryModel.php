<?php

/**
 * ce model contient le toutes les requetes
 * dont la table category est le parent
 */

/**
 * pour le menu on va recuperer id et title de toutes les categories par title asc 
 */
function selectAllCategoryMenu(pdo $db): array
{
    $sql = "SELECT id, title FROM category ORDER BY title ASC";
    $stmt = $db->query($sql); 
   $datas = $stmt->fetchAll();
   $stmt->closeCursor();
   return $datas;
}