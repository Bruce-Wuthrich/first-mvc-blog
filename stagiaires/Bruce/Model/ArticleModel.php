<?php


/**
 * Ce modèle contient toutes les requêtes
 * dont la table `Article` est le parent 
 */

/**
 * Récupérationderniers articles par ordre de date DESC avec l'auteur
 * 
 */

#exercice je veux recuperer l id renomé en idcateg( groupé avec la , comme separateur) et title renomé en titlecateg ( groupé avec ||| comme separateur) de la table category jointure externe non obligatoire m2m seuls les articles doivent etre present il faut regrouper les articles pour n en avoir qu un article par page
function selectAllArticleHomepage(PDO $db): array 
{
    $sql = "SELECT 
	a.`id`, a.`title`,a.`date`, LEFT(a.`content`,250) AS `content` ,
    u.`id` AS `iduser`, u.`username`
	FROM `article` a
    INNER JOIN `user` u
		ON u.`id` = a.`user_id`
    ORDER BY a.`date` DESC    
;";

    $stmt = $db->query($sql);
    $datas = $stmt->fetchAll();
    $stmt->closeCursor();
    return $datas;
}