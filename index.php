<?php
// Include the function file.
require 'function.php';
//include 'google-analystics.php';

$lastUpdateTerms = '/none/'; // Date of last update of Terms of service
?>

<?php require 'head.php'; // Head file - Contain primary code and head of page ?>
	<?php if($_GET['lang'] == 'fr') { ?>
		<div class="tips">
			Une suggestion, un avis, un problème ? <a href="https://twitter.com/intent/tweet?text=%40TeamCodeIt%20%23KeyGen%20">Envoyez-nous un Tweet</a> !
		</div>
		<?php if($_GET['error'] != '') { ?>
			<div class="error">
				<?php echo CheckError($_GET['error'], 'fr'); ?>
			</div>
		<?php } ?>
		<?php if($_GET['key'] != '') { ?>
		<div class="info">
			Cl&eacute; g&eacute;n&eacute;r&eacute;e : <?php echo $_GET['key']; ?>
		</div>
		<?php } ?>
		<form action="upload.php" method="post">
			<p><label for="genre">
				Choisissez un genre de cl&eacute; : <br />
				<input type="checkbox" name="genreNum" checked /> Num&eacute;rique (1) <br />
				<input type="checkbox" name="genreMin" checked /> Alphab&eacute;tique minuscule (a) <br />
				<input type="checkbox" name="genreMaj" checked /> Alphab&eacute;tique majuscule (A) <br />
				<input type="checkbox" name="genreSpe" /> Sp&eacute;cial (@ - Un peu bugg&eacute;) <br />
			</label></p> <br />
			<p><label for="length">
				Choisissez la longueur de la cl&eacute; : <br />
				<input type="number" name="length" value="12" />
			</label></p> <br />
			<p><label for="multiCharacter">
				<input type="checkbox" name="multiCharacter" /> Les caract&egrave;res peuvent &ecirc;tre pr&eacute;sents plusieurs fois ?
			</label></p>
           <input type="hidden" name="lang" value="fr" />
			<button type="submit">G&eacute;n&eacute;rer</button>
		</form>
	<?php } else { ?>
		<div class="tips">
			Have a feedback or a problem ? <a href="https://twitter.com/intent/tweet?text=%40TeamCodeIt%20%23KeyGenerator%20">Send-us a Tweet</a> !
		</div>
		<?php if($_GET['error'] != '') { ?>
			<div class="error">
				<?php echo CheckError($_GET['error'], 'en'); ?>
			</div>
		<?php } ?>
		<?php if($_GET['key'] != '') { ?>
		<div class="info">
			Generated key : <?php echo $_GET['key']; ?>
		</div>
		<?php } ?>
		<form action="upload.php" method="post">
			<p><label for="genre">
				Choose a kind of key : <br />
				<input type="checkbox" name="genreNum" checked /> Numerical (1) <br />
				<input type="checkbox" name="genreMin" checked /> Alphabetical lowercase (a) <br />
				<input type="checkbox" name="genreMaj" checked /> Alphabetical uppercase (A) <br />
				<input type="checkbox" name="genreSpe" /> Special (@ - Quite buggy) <br />
			</label></p> <br />
			<p><label for="length">
				Choose length : <br />
				<input type="number" name="length" value="12" />
			</label></p> <br />
			<p><label for="multiCharacter">
				<input type="checkbox" name="multiCharacter" /> Characters may be present multiple times?
			</label></p>
           <input type="hidden" name="lang" value="en" />
			<button type="submit">Generate</button>
		</form>
	<?php } ?>
<?php require 'footer.php'; // Head file - Contain end of page ?>