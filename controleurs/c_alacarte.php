<?php
	if(!isset($_REQUEST['action']))
	{
		$ACT = 'presentation';
	}
	else
	{
		$ACT = $_REQUEST['action'];
	}

	switch ($ACT) 
	{
		case 'presentation':
		{
			$lesPizzas = listPizza();
			$nomPizzas = listNomPizzas();
			$nbPizza   = nbPizzas();
			require 'vues/v_laCartePresentation.php';
			break;
		}
		case 'ajouter':
		{
			echo 'ajouter';
			break;
		}
	}
?>