<?php	

	// ================================================================================
	// ================================================================================
	/**
	* Script a coller en haut du fichier local de chaque epreuve :
	*/
	$ligne = "";
	for ($i=1; $i < 10; $i++) { 
		$txt = @fopen("input$i.txt","r");
		if ($txt){ // file_exists()
			$ligne .= (empty($ligne))? "" : "\n";
			while ($content = fgets($txt)) {
			    $ligne .= $content;
			}
			fclose($txt);	
		}
	}
	$handle = fopen("inputN.txt", "w");
	fwrite($handle, $ligne);
	fclose($handle);
	define('STDIN', fopen("inputN.txt","r"));
	// Fin du script /
	// ================================================================================
	// ================================================================================




	// Debut d une epreuve en ligne :
	do{
	    $f = stream_get_line(STDIN, 10000, PHP_EOL);
	    if($f!==false){
	        $input[] = $f;
	    }
	}while($f!==false);

	foreach ($input as $value) {
		$input = explode("\n", $value);
	}

	/* Vous pouvez aussi effectuer votre traitement ici après avoir lu toutes les données */

	// Et du coup $input contient toutes les donnees de tout les input.txt en un seul tableau :
	var_dump( $input );

?>