<?php
	if(!isset($_REQUEST['uc']))
	{
		$UC = 'accueil';
	}
	else
	{
		$UC = $_REQUEST['uc'];
	}

	switch ($UC) 
	{
		case 'accueil':
		{
			require 'controleurs/c_accueil.php';
			break;
		}

		case 'alacarte':
		{
			require 'controleurs/c_alacarte.php';
			break;
		}

		case 'menuetpromos':
		{
			require 'controleurs/c_menuetpromos.php';
			break;
		}

		case 'identification':
		{
			require 'controleurs/c_identification.php';
			break;
		}
	}
?>