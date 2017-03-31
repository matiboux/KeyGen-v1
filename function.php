<?php
error_reporting(E_ALL & ~E_NOTICE);

// Check Error
function CheckError($error, $lang) {
	if($error == '') // If $error is empty, no error.
		$errorMessage = '';
	else if($error == 'ERR_NO_GENRE') { // ERR_NO_GENRE -> No genre selected.
		if($lang == 'fr')
			$errorMessage = 'Vous n\'avez pas s&eacute;lectionn&eacute; de genre de cl&eacute;e.';
		else
			$errorMessage = 'You haven\'t selected any kind of key.';
	}
	else if($error == 'ERR_NO_LENGTH') { // ERR_NO_LENGTH -> No length set.
		if($lang == 'fr')
			$errorMessage = 'Vous n\'avez pas défini la longeur.';
		else
			$errorMessage = 'You haven\'t set length.';
	}
	else if($error == 'ERR_LENGTH_NULL') { // ERR_LENGTH_NULL -> Length is null.
		if($lang == 'fr')
			$errorMessage = 'La longeur est &eacute;gale &agrave; zéro.';
		else
			$errorMessage = 'Length was set to zero.';
	}
	else {
		if($lang == 'fr')
			$errorMessage = 'Erreur inconnue.';
		else
			$errorMessage = 'Unkown error.';
	}
	
	return $errorMessage;
}
?>