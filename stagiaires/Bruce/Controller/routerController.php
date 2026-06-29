<?php

/** 
 * notre route
 */

// on va se connecter a notre db via pdo
try {
    $dbConnect = new PDO(
        dsn:      Maria_DSN,
        username: DB_LOGIN,
        password: DB_PWD,
    );
    $dbConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die($e->getMessage());
}
 /**
  * route 
 * var_dump($dbConnect);
  */

 // on charge les categories pour le menu public
 $menu = getAllCategoryMenu($dbConnect);

 
 include_once URL_BASE . "/View/homepage.view.html.php";

 $dbConnect = null;

