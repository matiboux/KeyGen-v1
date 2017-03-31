<?php
// Include the function file.
require 'function.php';

// Variables
$key = ""; // Prepare 'key' variable.
$i = 0; // Prepare 'i' for the while.
$charactersAllowed = ''; // Prepare the characters allowed variable.
$lengthMax = 0; // Prepare the length max variable.
$length = $_POST['length']; // Get length choose by user.

/** All Errors :
 *
 * ERR_NO_MINIMUM -> No length set
 * ERR_MINIMUM_NULL -> Length is null
 */
?>

<?php
/** Verification */

echo 'GenreNum : ' . $_POST['genreNum'] . '<br />';
echo 'GenreMin : ' . $_POST['genreMin'] . '<br />';
echo 'GenreMaj : ' . $_POST['genreMaj'] . '<br />';
echo 'GenreSpe : ' . $_POST['genreSpe'] . '<br />';
echo 'Length : ' . $_POST['length'] . '<br />';
echo 'MultiCharacter : ' . $_POST['multiCharacter'] . '<br /><br /><br />';

if($_POST['genreNum']) {
	$charactersAllowed .= '1234567890';
}
if($_POST['genreMin']) {
	$charactersAllowed .= 'abcdefghijklmnopqrstuvwxyz';
}
if($_POST['genreMaj']) {
	$charactersAllowed .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
}
if($_POST['genreSpe']) {
	$charactersAllowed .= '@€*-+()!"\':;/?~`|•√π÷×{}£¥$°^_=[]™®©¶<>'; // #, &, % can't be used with URL.
}
if($charactersAllowed == '') {
	header('Location: index.php?lang=' . $_POST['lang'] . '&error=ERR_NO_GENRE');
}
else if($length == '') {
	header('Location: index.php?lang=' . $_POST['lang'] . '&error=ERR_NO_LENGTH');
}
else if($length == 0) {
	header('Location: index.php?lang=' . $_POST['lang'] . '&error=ERR_LENGTH_NULL');
}
else {
	$lengthMax = strlen($charactersAllowed); // Find how many character is allowed.
	if($length > $lengthMax AND !$_POST['multiCharacter']) { // If the desired length is too long and multi character is disabled...
		$length = $lengthMax; // Set the length to the length max.
	}

	while($i < $length) {
		$randomCharacter = substr($charactersAllowed, mt_rand(0, $lengthMax-1), 1);


		if($_POST['multiCharacter'] OR !strstr($key, $randomCharacter)) { // If the character is not already in the key or if multi character is enabled...
			$key .= $randomCharacter; // Add the character in the key 
			$i++; // Add 1 to the counter
		}
	}
	header('Location: index.php?lang=' . $_POST['lang'] . '&key=' . $key);
}
?>