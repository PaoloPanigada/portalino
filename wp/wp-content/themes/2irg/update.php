<?php 
/*
Template Name: update

*/
$time = $_SESSION['time'] = time();
global $wpdb;
$wpdb->show_errors();  
global $current_user;
//echo "time: ".$time;

if (isset($_GET["id"])){
	$id_consuntivo = $_GET["id"];
	$query_mod_cons=$wpdb->get_row("SELECT attivita.id_attivita,tempo_impiegato,giorno,consuntivo.stato 
			FROM consuntivo 
			INNER JOIN attivita ON consuntivo.id_attivita = attivita.id_attivita 
			WHERE id_consuntivo='$id_consuntivo'", ARRAY_A);
	//var_dump($query_mod_cons);
?>
	<div id="update_consuntivo">
		<h3 style="text-align: left;" class="page-title">Modifica consuntivo</h1>
		<div class="content-ver-sep"></div>
		<br />
		<form id="consuntivo" name="consuntivo" action="/support2i/consuntivazioni" method="POST">
			<label for="giorno">Giorno: </label><input type="date" id="giorno" name="giorno" value="<?php echo $query_mod_cons[giorno]; ?>"><br>
			<label for="tempo_impiegato">Tempo impiegato: </label><input type="time" id="tempo_impiegato" name="tempo_impiegato" value="<?php echo $query_mod_cons[tempo_impiegato]; ?>"><br><br>
			<label for="stato">Stato: </label>
			<select id="stato" name="stato" required>
				<option value="<?php echo $query_mod_cons[stato]; ?>" selected="selected"><?php echo $query_mod_cons[stato]; ?></option>
				<?php if ($query_mod_cons[stato]!='in carico'){ ?><option value="in carico">In carico</option><?php } ?>
				<?php if ($query_mod_cons[stato]!='in progress'){ ?><option value="in progress">In progress</option><?php } ?>
				<?php if ($query_mod_cons[stato]!='completato'){ ?><option value="completato">Completato</option><?php } ?>
			</select>
			<input type="hidden" name="id_consuntivo" value="<?php echo $id_consuntivo; ?>" />
			<input type="hidden" name="id_attivita" value="<?php echo $query_mod_cons[id_attivita]; ?>" />
			<input type="submit" name="update_consuntivo" value="Aggiorna">
		</form>
	</div>
<?php
}
if (isset($_GET["id_attivita"])){
	$id_attivita = $_GET["id_attivita"];
	$query_attivita=$wpdb->get_row("SELECT attivita.id_attivita,attivita.nome_attivita,attivita.descrizione,CONCAT (richiedente.nome,' ', richiedente.cognome) AS richiedente,
			CONCAT (assegnatario.nome,' ', assegnatario.cognome) AS assegnatario,
			commessa.nome AS nome_commessa,
			gruppo.nome_gruppo,
			attivita.data_inizio,
			attivita.scadenza,
			attivita.stato 
			FROM attivita 
			INNER JOIN assegnatario ON attivita.id_ass = assegnatario.id_assegnatario 
			INNER JOIN commessa ON attivita.id_commessa = commessa.id_commessa 
			INNER JOIN richiedente ON attivita.id_richiedente = richiedente.id_richiedente 
			INNER JOIN gruppo ON attivita.id_gruppo = gruppo.id_gruppo
			WHERE id_attivita = '$id_attivita'", ARRAY_A);
			
	$query_commessa=$wpdb->get_results("SELECT nome FROM commessa WHERE nome != '$query_attivita[nome_commessa]'");
	$query_assegnatario=$wpdb->get_results("SELECT CONCAT (assegnatario.nome,' ', assegnatario.cognome) AS assegnatario 
											FROM assegnatario 
											WHERE UPPER(CONCAT (assegnatario.nome,' ', assegnatario.cognome) )!= '$query_attivita[assegnatario]'");
	
	$query_richiedente=$wpdb->get_results("SELECT CONCAT (richiedente.nome,' ', richiedente.cognome) AS richiedente 
											FROM richiedente 
											WHERE UPPER(CONCAT (richiedente.nome,' ', richiedente.cognome) )!= '$query_attivita[richiedente]'");
											
	$query_gruppo=$wpdb->get_results("SELECT nome_gruppo FROM gruppo WHERE nome_gruppo != '$query_attivita[nome_gruppo]'");
	
	//echo "\nquery:".$query_commessa;
	//var_dump($query_commessa);
?>
	<div id="update_attivita">
		<h3 style="text-align: left;" class="page-title">Modifica attivita</h1>
		<div class="content-ver-sep"></div>
		<br />
		<form id="consuntivo" name="consuntivo" action="/support2i/consuntivazioni" method="POST">
			<label for="nome_attivita">Nome attivit&agrave;: </label><textarea id="nome_attivita" name="nome_attivita" required><?php echo $query_attivita[nome_attivita]; ?></textarea><br>
			<label for="descrizione">Descrizione: </label><textarea id="descrizione" name="descrizione" required><?php echo $query_attivita[descrizione]; ?>"</textarea><br><br>
			<label for="richiedente">Richiedente: </label>
			<select id="richiedente" name="richiedente">
				<option value="<?php echo $query_attivita[richiedente]; ?>" selected="selected"><?php echo $query_attivita[richiedente]; ?></option>
				<?php
					foreach($query_richiedente as $key => $row){
						echo '<option value="'.$row->richiedente.'">'.$row->richiedente.'</option>';
					}
				echo "</select><br /><br />";
				?>
			<label for="assegnatario">Assegnatario: </label>
			<select id="assegnatario" name="assegnatario">
				<option value="<?php echo $query_attivita[assegnatario]; ?>" selected="selected"><?php echo $query_attivita[assegnatario]; ?></option>
				<?php
					foreach($query_assegnatario as $key => $row){
						echo '<option value="'.$row->assegnatario.'">'.$row->assegnatario.'</option>';
					}
				echo "</select><br /><br />";
				?>
			<label for="commessa">Commessa: </label>
			<select id="commessa" name="commessa">
				<option value="<?php echo $query_attivita[nome_commessa]; ?>" selected="selected"><?php echo $query_attivita[nome_commessa]; ?></option>
				<?php 
					foreach($query_commessa as $key => $row){
						echo '<option value="'.$row->nome.'">'.$row->nome.'</option>';
					}
				?>
			</select><br><br>
			<label for="gruppo">Gruppo: </label>
			<select id="gruppo" name="gruppo">
				<option value="<?php echo $query_attivita[nome_gruppo]; ?>" selected="selected"><?php echo $query_attivita[nome_gruppo]; ?></option>
				<?php
						foreach($query_gruppo as $key => $row){
							echo '<option value="'.$row->nome_gruppo.'">'.$row->nome_gruppo.'</option>';
						}
				?>
			</select><br><br>
			<label for="data_inizio">Data inizio: </label><input type="date" id="data_inizio" name="data_inizio" value="<?php echo $query_attivita[data_inizio]; ?>"><br><br>
			<label for="scadenza">Scadenza: </label><input type="date" id="scadenza" name="scadenza" value="<?php echo $query_attivita[scadenza]; ?>"><br><br>
			<!-- <label for="stato">Stato: </label>
			<select id="stato" name="stato">
				<option value="<?php echo $query_attivita[stato]; ?>" selected="selected"><?php echo $query_attivita[stato]; ?></option>
				<?php if ($query_attivita[stato]!='in carico'){ ?><option value="in carico">In carico</option><?php } ?>
				<?php if ($query_attivita[stato]!='in progress'){ ?><option value="in progress">In progress</option><?php } ?>
				<?php if ($query_attivita[stato]!='completato'){ ?><option value="completato">Completato</option><?php } ?>
			</select><br>-->
			<input type="hidden" name="id_consuntivo" value="<?php echo $id_attivita; ?>" />
			<input type="hidden" name="id_attivita_update" value="<?php echo $query_attivita[id_attivita]; ?>" />
			<input type="submit" name="update_attivita" value="Aggiorna">
		</form>
	</div>
<?php
}
?>