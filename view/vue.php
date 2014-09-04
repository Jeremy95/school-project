<?php foreach ($bnj as $bng => $bnjs) { ?>
<!-- Affiche toutes les ligne du tableau comme code HTML avec les numéros de ligne --> 
<table>
	<tr>
		<td> <?php echo "Line #<b>{$bng}</b> : " . htmlspecialchars($bnjs) . "<br />\n"; ?> </td>
	</tr>
</table>
   	

<?php } ?>


<p class="statistiques">
	<?php echo 'Nombre de pages vues : <strong>' . $site . '</strong><br/>'; ?>
</p>

	
		
	