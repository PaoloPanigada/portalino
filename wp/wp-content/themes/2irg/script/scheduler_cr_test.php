#!/usr/bin/php
<?php
	date_default_timezone_set('Europe/Rome');
	$ora_corrente = date('H:i');
	$str_ora_corrente = strtotime($ora_corrente);
	$ora_applicazione = "13:05";
	$durata = "00:10";
	$str_durata = strtotime($durata);
	$str_ora_applicazione = strtotime($ora_applicazione);
	$fine = "12:55";
	echo "ora di test: ".strtotime($fine)."\n\n";
	
	
	//$alert = round(abs($from_time - $to_time) / 60,2);
	$str_totale = $str_ora_applicazione + $str_durata; //durata
	$orario_fine = date("H:i",time() - $secondi);
	echo "starttt: ".$fine;	
?>