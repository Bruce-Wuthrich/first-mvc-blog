<?php
const DB_DRIVER = "mysql";
const DB_HOST = "localhost";
const DB_LOGIN = "root";
const DB_PWD = "";
const DB_NAME = "firstbruce";
const DB_PORT = 3306; // pour MariaDB, ou le port par défaut de MySQL : 3306
const DB_CHARSET = "utf8mb4";

const Maria_DSN = DB_DRIVER . ":host=" . DB_HOST
        . ";dbname=" . DB_NAME
        . ";port=" . DB_PORT
        . ";charset" . DB_CHARSET . ";";

# URL absolue du projet
const URL_BASE = __DIR__;
