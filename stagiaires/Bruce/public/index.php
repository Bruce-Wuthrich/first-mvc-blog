<?php

/**
 * 
 * Controller frontal
 */

// lancement d une session
session_start();
// chargement des dependances
require_once "../config.php";

// chargement du model
require_once URL_BASE ."/Model/categoryModel.php";
// chargement du router
require_once URL_BASE ."/Controller/routerController.php";
