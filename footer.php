		<?php if($_GET['lang'] == 'fr') { ?>
			<p class="tools"><a href="#<?php/*terms.php?lang=fr*/?>">Conditions d'utilisation (derni&eacute;re modification: <?php echo $lastUpdateTerms; ?>)</a></p>
			<p class="back"><a href="http://codeit.fr/">Projet d&eacute;velop&eacute; par Matiboux (CodeIt.fr)</a></p>
		<?php } else { ?>
			<p class="tools"><a href="#<?php/*terms.php?lang=en*/?>">Terms of Service (last update: <?php echo $lastUpdateTerms; ?>)</a></p>
			<p class="back"><a href="http://codeit.fr/">Project developed by Matiboux (CodeIt.fr)</a></p>
		<?php } ?>
		</div>
	</body>
</html>