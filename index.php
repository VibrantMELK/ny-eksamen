<?php // altid ha disse fire variablene for å opprette rilkoblingen til databasen:
$bruker = "emilie";
$passord = "happy";
$database = "butikk";
$tabell = "solgt";

try {
    // lager en variabel = db som holder på database tilkoblinegn vår
    $db = new PDO("mysql:host=localhost;dbname=$database", $bruker, $passord);
    echo <<< EOT
    <html>
    <head>
    <meta charset="UTF-8) />
        <title>TODO</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <h1>TODO List</h1>
        <p>Welcome to your TODO list application!</p>
        <ol>
EOT;


}