<?php
require_once "functions.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Morpion</title>

    <link rel='stylesheet' href='style.css' type='text/css'/>
</head>
<body>

    <div class="wrapper">
<form method="post" action="register-players.php">
    <div class="welcome">
        <h1>Jouer au morpion </h1>
        <h2>Selectionner vos pseudos</h2>

        <div class="player-name">
            <label for="player-x">Premier joeuur (X)</label>
            <input type="text" id="player-x" name="player-x" required />
        </div>

        <div class="player-name">
            <label for="player-o">deuxiéme joeuur (O)</label>
            <input type="text" id="player-o" name="player-o" required />
        </div>

        <button type="submit">Lancer</button>
    </div>
</form>

<footer>  
    
</footer>