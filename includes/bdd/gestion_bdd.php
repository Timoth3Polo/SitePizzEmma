<?php

/**************************************************************************************************************************************************************/
/*                                                                                                                                                            */
/*                                                                LISTE DES TABLES                                                                            */
/*                                                                                                                                                            */
/**************************************************************************************************************************************************************/

function listAliment()
{
	require "connexion.php";
	$sql = "select * from aliment;";
	$exec = $bdd->query($sql);
	$exec->execute() ;
	$curseur=$exec->fetchAll();
	return $curseur;
}

function listCommander()
{
	require "connexion.php";
	$sql = "select * from commander;";
	$exec = $bdd->query($sql);
	$exec->execute() ;
	$curseur=$exec->fetchAll();
	return $curseur;
}

function listComposer()
{
	require "connexion.php";
	$sql = "select * from composer;";
	$exec = $bdd->query($sql);
	$exec->execute() ;
	$curseur=$exec->fetchAll();
	return $curseur;
}

function listPizza()
{
	require "connexion.php";
	$sql = "select * from pizza;";
	$exec = $bdd->query($sql);
	$exec->execute() ;
	$curseur=$exec->fetchAll();
	return $curseur;
}

function listUtilisateur()
{
	require "connexion.php";
	$sql = "select * from utilisateur;";
	$exec = $bdd->query($sql);
	$exec->execute() ;
	$curseur=$exec->fetchAll();
	return $curseur;
}

/**************************************************************************************************************************************************************/
/*                                                                                                                                                            */
/*                                                                FONCTIONS POUR PIZZAS                                                                       */
/*                                                                                                                                                            */
/**************************************************************************************************************************************************************/

function listNomPizzas()
{
	require "connexion.php";
	$sql = "select distinct(nomPizza) from pizza;";
	$exec = $bdd->query($sql);
	$exec->execute() ;
	$curseur=$exec->fetchAll();
	return $curseur;
}

function nbPizzas()
{
	require "connexion.php";
	$sql = "select count(*) from pizza where idPizza LIKE '%0';";
	$exec = $bdd->query($sql);
	$exec->execute() ;
	$curseur=$exec->fetchAll();
	$nb = (int)$curseur;
	return $nb;
}