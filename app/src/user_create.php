<?php

include_once __DIR__ . "/modeles/model.php";
include_once __DIR__ . "/controleur/controleur.php";
include_once __DIR__ . "/views/user_create.php";

$message = identificationUser();

include_once __DIR__ . "/views/messages.php";
