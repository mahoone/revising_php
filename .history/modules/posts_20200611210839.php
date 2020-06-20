<?php
 
 	$tekst = 'php jest językiem programowania skryptowego zaprojektowanego dla stron internetowych';
 	
 	echo '<p>Kapitaliki: '.strtoupper($tekst).'</p>';
 	echo '<p>Dużą literą: '.ucfirst($tekst).'</p>';
 	echo '<p>Każdy wyraz dużymi literami: '.ucwords($tekst).'</p>';
?>