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
			require 'vues/v_AccPresentation.php';
			break;
		}
		case 'ajouter':
		{
			echo 'ajouter';
			break;
		}
	}
?>