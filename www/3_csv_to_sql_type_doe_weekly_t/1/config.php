<?php

$path = __DIR__.'/../';
$n = basename(__DIR__);

$nbre_dossier = 1;
$nbre_dossier = count(glob($path."/*",GLOB_ONLYDIR));
//===================================================
//===================================================

$use_proxy = "false";

// database configuration
$servername = "localhost";
$username = "root";
$password = "Mngt98HY!df^7h";
$dataBaseName = "doe_db";
$DB_tableName1 = "doe_weekly_t";