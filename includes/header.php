<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>PPE-GSB</title>
    </head>
    <body>
    	<?php
    		if(!isset($_SESSION['identifiantUtilisateur']))
    		{
    			echo
    			'
    			<div class = "menu">
    				<div class = "menu_basique" style = "width:25%;"><a href="index.php?uc=accueil">Accueil</a></div>
    				<div class = "menu_basique" style = "width:25%;"><a href="index.php?uc=alacarte">À la carte</a></div>
    				<div class = "menu_basique" style = "width:25%;"><a href="index.php?uc=menuetpromos">Nos menus & nos promos</a></div>
    				<div class = "menu_fin" style = "width:25%;"><a href="index.php?uc=identification">S\'identifier</a></div>
    			</div>
    			';
    		}
    		else
    		{
    			echo
    			'
    			<div class = "menu">
    				<div class = "menu_basique" style = "width:20%;"> Accueil </div>
    				<div class = "menu_basique" style = "width:20%;">À la carte</div>
    				<div class = "menu_basique" style = "width:20%;">Nos menus & nos promos</div>
    				<div class = "menu_basique" style = "width:20%;">Commander</div>
    				<div class = "menu_fin" style = "width:20%;">Déconnexion</div>
    			</div>
    			';
    		}
    	?>