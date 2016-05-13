#!/usr/bin/php
<?php
 date_default_timezone_set('Europe/Rome');
 $current_date = date('Y-m-d');
 $current_time = date('H:i');
 //echo "data corrente: ".$current_date."\n";
 //echo "ora corrente: ".$current_time."\n";
 $ora=substr($current_time, 0,2); 
 $minuti=substr($current_time, 3,4);
 $anno=substr($current_date, 0,4); 
 $mese=substr($current_date, 5,2);
 $giorno=substr($current_date,8,2);

 $connessione = mysql_connect("localhost", "admin", "!2iReteGas=") or die("Connessione non riuscita: " . mysql_error());
 mysql_select_db("2iretegas", $connessione) or die("Impossibile collegarsi al database");
 //print ("Connessione OK!");

 $query="SELECT * FROM elenco_cr WHERE promemoria = 'SI'";
 //$query="SELECT * FROM elenco_cr WHERE id = '350'";

 //echo "\nquery:".$query;

 $queryexecution = mysql_query($query);
 $resultSet = array();
  while($result = mysql_fetch_array($queryexecution))
  {
   $resultSet[] = $result;
  }
  //print_r($resultSet);

 $count = count($resultSet);
 //echo $count;

 for ($i = 0;$i<$count;$i++){
  $id = htmlspecialchars($resultSet[$i]["id"]);
  $applicazione = htmlspecialchars($resultSet[$i]["applicazione"]);
  $data_applicazione = date("d-m-Y", strtotime(htmlspecialchars($resultSet[$i]["data_applicazione"])));
  $ora_applicazione = htmlspecialchars($resultSet[$i]["ora_applicazione"]);
  $data_ricezione = date("d-m-Y", strtotime(htmlspecialchars($resultSet[$i]["data_ricezione"])));
  $emergenza = htmlspecialchars($resultSet[$i]["emergenza"]);
  $id_cr = htmlspecialchars($resultSet[$i]["id_cr"]);
  $stato = htmlspecialchars($resultSet[$i]["stato"]);
  $durata = htmlspecialchars($resultSet[$i]["durata"]);
  $tipologia = htmlspecialchars($resultSet[$i]["tipologia"]);
  $assegnatario = htmlspecialchars($resultSet[$i]["assegnatario"]);
  $trasporto = htmlspecialchars($resultSet[$i]["under_maintenance"]);
  $allegato = htmlspecialchars($resultSet[$i]["allegato"]);
  $promemoria = htmlspecialchars($resultSet[$i]["promemoria"]);
  $note = htmlspecialchars($resultSet[$i]["note"]);
  
  $oggi = strtotime($current_date);
  $data_evento = strtotime($data_applicazione);
  //echo $oggi."\n";
  //echo $data_evento."\n";
  if ($data_evento >= $oggi){
   $to_time = strtotime("$current_date $current_time");
   $from_time = strtotime("$data_applicazione $ora_applicazione");
   $alert = round(abs($from_time - $to_time) / 60,2);
   //echo "\nALERT: ".$alert;
   //$alert = "15";
   if($alert=="15"){
    $output = shell_exec('/application/support2i/wp-content/themes/2irg/script/send_mail.ksh "'.$applicazione.'" "'.$data_applicazione.'" "'.$ora_applicazione.'" "'.$data_ricezione.'" "'.$emergenza.'" "'.$id_cr.'" "'.$stato.'" "'.$assegnatario.'" "'.$durata.'" "'.$tipologia.'" "'.$promemoria.'" "'.$trasporto.'" "'.$note.'" "'.$allegato.'"');
	echo $output;
	$update="UPDATE elenco_cr SET promemoria='inviato' WHERE id=$id";
	//echo "\nupdate:".$update;
	$update_execution = mysql_query($update);
	if ($allegato && $trasporto=='SI'){
	 $output2 = shell_exec('/application/support2i/wp-content/themes/2irg/script/send_mail_remote_services.ksh "'.$allegato.'"');
	 echo $output2;
	}
   }
  }  
 }
 
 $query2="SELECT * FROM elenco_cr WHERE promemoria = 'inviato'";
 //$query2="SELECT * FROM elenco_cr WHERE id = '350'";

 //echo "\nquery2:".$query2;

 $queryexecution2 = mysql_query($query2);
 $resultSet2 = array();
  while($result2 = mysql_fetch_array($queryexecution2))
  {
   $resultSet2[] = $result2;
  }
  //print_r($resultSet2);

 $count2 = count($resultSet2);
 
 for ($i = 0;$i<$count2;$i++){
  $id = htmlspecialchars($resultSet2[$i]["id"]);
  $applicazione = htmlspecialchars($resultSet2[$i]["applicazione"]);
  $data_applicazione = date("d-m-Y", strtotime(htmlspecialchars($resultSet2[$i]["data_applicazione"])));
  $ora_applicazione = htmlspecialchars($resultSet2[$i]["ora_applicazione"]);
  $durata = htmlspecialchars($resultSet2[$i]["durata"]);
  $trasporto = htmlspecialchars($resultSet2[$i]["under_maintenance"]);
  
  $oggi = strtotime($current_date);
  $data_evento = strtotime($data_applicazione);
  
  if ($data_evento == $oggi && $trasporto=='NO'){
   $current_now = date('H:i:00');
   $str_ora_applicazione = str_replace(':','',$ora_applicazione);
   $str_durata = str_replace(':','',$durata);
   $fine_att = $str_ora_applicazione + $str_durata;
   $now = str_replace(':','',$current_now);

   if($fine_att == $now){
    $output = shell_exec('/application/support2i/wp-content/themes/2irg/script/remind_check_email.ksh "'.$applicazione.'"');
	echo $output;
   }
  }
 }
 mysql_close($connessione);
?>
