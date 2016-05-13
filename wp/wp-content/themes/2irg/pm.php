<br>
<?php 
	session_start();
	$time = $_SESSION['time'] = time();
	global $wpdb;
	$wpdb->show_errors();
?>
<div class="content-ver-sep"></div>
<br>
<h1 style="font-size: 25px;" id="post-<?php the_ID(); ?>" class="page-title">Area amministrazione</h1> 
<div style="clear:both"></div>
	<br />
	<div id="tabs-21">
			 <ul>
				<li><a href="#tabs-25">Attivit&agrave;</a></li>
				<li><a href="#tabs-22">Gestione consuntivazioni</a></li>
				<li><a href="#tabs-23">Gestione commesse</a></li>
				<li><a href="#tabs-24">Elenco PM</a></li>
			 </ul>
			 <div id="tabs-25">
				 <div id="inserisci_attivita" class="popup_block">
					<h3 style="text-align: left;" class="page-title">Inserisci attivit&agrave;</h1>
					<div class="content-ver-sep"></div>
					<br />
					<form id="attivita" name="commessa" action="/support2i/consuntivazioni#tabs-25" method="POST">
						<label for="attivita">Nome attivit&agrave;: </label><input type="text" id="attivita" name="attivita" required><br><br>
						<label for="descrizione_attivita">Descrizione: </label><textarea id="descrizione_attivita" name="descrizione_attivita" required></textarea><br><br>
						<label for="richiedente">Richiedente: </label>
						<select id="richiedente" name="richiedente" required>
							<option value="" selected="selected"></option>
							<?php
								$query_richiedente=$wpdb->get_results("SELECT CONCAT (richiedente.nome,' ', richiedente.cognome) AS richiedente FROM richiedente");
								foreach($query_richiedente as $key => $row){
									echo '<option value="'.$row->richiedente.'">'.$row->richiedente.'</option>';
								}
							echo "</select><br /><br />";
							?>
						<label for="assegnatario">Assegnatario: </label>
						<select id="assegnatario" name="assegnatario" required>
							<option value="" selected="selected"></option>
							<?php
								$query_assegnatario=$wpdb->get_results("SELECT CONCAT (assegnatario.nome,' ', assegnatario.cognome) AS assegnatario FROM assegnatario");
								foreach($query_assegnatario as $key => $row){
									echo '<option value="'.$row->assegnatario.'">'.$row->assegnatario.'</option>';
								}
							echo "</select><br /><br />";
							?>
						<label for="commessa">Commessa: </label>
						<select id="commessa" name="commessa" required>
							<option value="" selected="selected"></option>
							<?php
								$query_commessa=$wpdb->get_results("SELECT nome FROM commessa");
								foreach($query_commessa as $key => $row){
									echo '<option value="'.$row->nome.'">'.$row->nome.'</option>';
								}
							echo "</select><br /><br />";
							?>
						<label for="gruppo">Gruppo: </label>
						<select id="gruppo" name="gruppo" required>
							<option value="" selected="selected"></option>
							<?php
								$query_gruppo=$wpdb->get_results("SELECT nome_gruppo FROM gruppo");
								foreach($query_gruppo as $key => $row){
									echo '<option value="'.$row->nome_gruppo.'">'.$row->nome_gruppo.'</option>';
								}
							echo "</select><br /><br />";
							?>
						<label for="data_inizio">Data inizio: </label><input id="data_inizio" type="date" name="data_inizio" required><br><br>
						<label for="scadenza">Scadenza: </label><input id="scadenza" type="date" name="scadenza" required><br><br>
						<input type="hidden" name="time" value="<?php echo $time; ?>" />
						<input type="submit" name="inserisci_attivita" value="Inserisci">
					</form>
				</div>
				 <table class="consuntivi" style="float:left;">
					<thead>				
					<tr>
						<th>ID Attivit&agrave;</th>
						<th>Nome attività</th>
						<th>Descrizione</th>
						<th>Richiedente</th>
						<th>Assegnatario</th>
						<th>Commessa</th>
						<th>Gruppo</th>
						<th>Data inizio</th>
						<th>Scadenza</th>
						<th>Stato</th>
						<th>Modifica</th>
						<th>Cancella</th>
					</tr>
					</thead>
					<tbody>
					<?php
						$query_attivita=$wpdb->get_results("SELECT attivita.id_attivita,attivita.nome_attivita,attivita.descrizione,CONCAT (richiedente.nome,' ', richiedente.cognome) AS richiedente,
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
						INNER JOIN gruppo ON attivita.id_gruppo = gruppo.id_gruppo");
						
						foreach($query_attivita as $key => $row){
							if($row->stato == 'in progress'){ 
								echo "<tr class='progress'>";
							}
							if($row->stato == 'completato'){ 
								echo "<tr class='completato'>";
							}
							if($row->stato == 'in carico'){ 
								echo "<tr>";
							}
								echo '<td>';
								echo $row->id_attivita;
								echo '</td>';
								echo '<td>';
								echo $row->nome_attivita;
								echo '</td>';
								echo '<td>';
								echo $row->descrizione;
								echo '</td>';
								echo '<td>';
								echo $row->richiedente;
								echo '</td>';
								echo '<td>';
								echo $row->assegnatario;
								echo '</td>';
								echo '<td>';
								echo $row->nome_commessa;
								echo '</td>';
								echo '<td>';
								echo $row->nome_gruppo;
								echo '</td>';
								echo '<td>';
								echo $row->data_inizio;
								echo '</td>';
								echo '<td>';
								echo $row->scadenza;
								echo '</td>';
								echo '<td>';
								echo $row->stato;
								echo '</td>';
								echo "<td><a href='#?w=500&id_attivita=$row->id_attivita' rel='modifica_attivita' class='poplight'><img src='/support2i/wp-content/uploads/2015/06/edit.png' /></a></td>";
								echo "<td><a href='#?w=500&id_attivita=$row->id_attivita' rel='elimina_attivita' class='poplight'><img src='/support2i/wp-content/uploads/2015/06/delete.png' /></a></td>";
							echo '</tr>';
						}
					?>
					</tbody>
				</table>
				<div style="clear:both"></div>
				<br>
				<a style="margin-right: 15px;" href="#?w=500" rel="inserisci_attivita" class="poplight action_button">Inserisci attivit&agrave;</a>
			 </div>
			 <div id="tabs-22">
				<div style="text-align:left; float:left">
					<form action="/support2i/consuntivazioni#tabs-22" name="filtro_assegnatario" method="POST">
						<?php
							$query_filtro_assegnatario=$wpdb->get_results("SELECT CONCAT (nome, ' ', cognome) AS assegnatario, cognome FROM assegnatario");
							//echo var_dump($query_filtro_assegnatario);
						?>
						<label for="filtro_assegnatario">Seleziona assegnatario: </label>
						<select id="filtro_assegnatario" name="filtro_assegnatario" required>
						<option value="" selected="selected"></option>
							<?php
								foreach($query_filtro_assegnatario as $key => $row){
									echo '<option value="'.$row->cognome.'">'.$row->assegnatario.'</option>';
								}
							echo "</select>";
							?>
							<input type="submit" value="Filtra">
					</form>
					<div style="clear:both"></div>
					
					<br>
					<?php if (isset($_POST["filtro_assegnatario"])){
						$assegnatario_filtro = $_POST["filtro_assegnatario"];
						
						$query_get_consuntivi=$wpdb->get_results("SELECT id_consuntivo,attivita,attivita.descrizione,CONCAT (richiedente.nome,' ', richiedente.cognome) AS richiedente,commessa.nome AS nome_commessa,gruppo.nome_gruppo,consuntivo.scadenza,tempo_impiegato,giorno,consuntivo.stato FROM consuntivo INNER JOIN attivita ON consuntivo.id_attivita = attivita.id_attivita INNER JOIN assegnatario ON consuntivo.id_assegnatario = assegnatario.id_assegnatario INNER JOIN commessa ON consuntivo.id_commessa = commessa.id_commessa INNER JOIN richiedente ON consuntivo.id_richiedente = richiedente.id_richiedente INNER JOIN gruppo ON consuntivo.id_gruppo = gruppo.id_gruppo WHERE assegnatario.cognome = '$assegnatario_filtro'");
						
						//echo var_dump($query_get_consuntivi2);
						
						$nome_cognome_assegnatario = $wpdb->get_row("SELECT CONCAT (nome, ' ', cognome) AS assegnatario FROM assegnatario WHERE cognome = '$assegnatario_filtro'", ARRAY_A);
						//echo "test: ".count($query_get_consuntivi);
						
						?>
						<?php if(count($query_get_consuntivi) == 0){ ?>
							<div style="text-align:left;float:left">
								<b style="color:#FF0000;">Non ci sono consuntivi per l'utente selezionato: </b> <b><?php echo $nome_cognome_assegnatario[assegnatario]; ?></b>
							</div>
							<br>
						<?php }else{ ?>
							<table class="consuntivi" style="float:left;">
							<thead>
							<tr>
								<th style="font-size: 25px;text-align:left;border: 1px solid #FFFFFF;" colspan="10"><b>Il consuntivo di: <?php echo $nome_cognome_assegnatario[assegnatario]; ?> </b></th>
							</tr>
							<tr>
								<th>ID Consuntivo</th>
								<th>Attivit&agrave;</th>
								<th>Descrizione</th>
								<th>Richiedente</th>
								<th>Commessa</th>
								<th>Gruppo</th>
								<th>Scadenza</th>
								<th>Tempo impiegato</th>
								<th>Giorno</th>
								<th>Stato</th>
							</tr>
							</thead>
							<tbody>
								<?php 
								foreach($query_get_consuntivi as $key => $row){
									?>
								<tr <?php if($row->stato == 'in progress'){ ?>class="progress"<?php } if($row->stato == 'completato'){ ?>class="completato" <?php } if($row->stato == 'in carico'){ ?><?php }?>>
									<td><?php echo $row->id_consuntivo; ?></td>
									<td><?php echo $row->attivita; ?></td>
									<td><?php echo $row->descrizione; ?></td>
									<td><?php echo $row->richiedente; ?></td>
									<td><?php echo $row->nome_commessa; ?></td>
									<td><?php echo $row->nome_gruppo; ?></td>
									<td><?php echo $row->scadenza; ?></td>
									<td><?php echo $row->tempo_impiegato; ?></td>
									<td><?php echo $row->giorno; ?></td>
									<td><?php echo $row->stato; ?></td>
								</tr>
								<?php
								}
								?>
							</tbody>
						</table>
						<div style="clear:both"></div>
						<br>
						<?php } ?>
					<?php } ?>
				<div style="clear:both"></div>
				</div>
			 </div>
			 <div id="tabs-23">
			<div id="inserisci_commessa" class="popup_block">
				<h3 style="text-align: left;" class="page-title">Inserisci commessa</h1>
				<div class="content-ver-sep"></div>
				<br />
				<form id="commessa" name="commessa" action="/support2i/consuntivazioni#tabs-23" method="POST">
					<?php 
						$query_pm=$wpdb->get_results("SELECT id, CONCAT (pm.nome,' ', pm.cognome) AS pm FROM pm");
					?>
					<label for="richiedente">PM: </label>
					<select id="pm" name="pm" required>
					<option value="" selected="selected"></option>
					<?php
						foreach($query_pm as $key => $row){
							echo '<option value="'.$row->id.'">'.$row->pm.'</option>';
						}
					echo "</select><br /><br />";
					?>
					<label for="nome_commessa">Nome commessa: </label><input type="text" id="nome_commessa" name="nome_commessa" required><br><br>
					<label for="descrizione_commessa">Descrizione: </label><textarea id="descrizione_commessa" name="descrizione_commessa" required></textarea><br>
					<label for="fase_commessa">Fase: </label><input type="text" id="fase_commessa" name="fase_commessa" required><br><br>
					<label for="stato">Stato: </label>
					<select id="stato" name="stato" required>
						<option value="0">Attiva</option>
						<option value="1">Disattiva</option>
					</select><br /><br />
					<input type="hidden" name="time" value="<?php echo $time; ?>" />
					<input type="submit" name="inserisci_commessa" value="Inserisci">
				</form>
			</div>
		<?php
					$query_commessa=$wpdb->get_results("SELECT * FROM commessa");
			?>
			<?php if(count($query_commessa) != 0){ ?>
				<table class="commesse" style="float:left;">
					<thead>
					<tr>
						<th style="font-size: 25px;text-align:left;border: 1px solid #FFFFFF;" colspan="8"><b>Elenco Commesse</b></th>
					</tr>
					<tr>
						<th>ID Commessa</th>
						<th>Pm</th>
						<th>Nome</th>
						<th>Descrizione</th>
						<th>Fase</th>
						<th>Stato</th>
						<th>Modifica</th>
						<th>Cancella</th>
					</tr>
					</thead>
					<tbody>
						<?php 
						foreach($query_commessa as $key => $row){
							//echo var_dump($query_commessa);
							$id_commessa=$row->id_commessa;
							$query_pm=$wpdb->get_results("SELECT CONCAT (pm.nome,' ', pm.cognome) AS pm FROM commessa INNER JOIN pm ON commessa.id_pm=pm.id WHERE id_commessa='$id_commessa'");
							//echo var_dump($query_pm);
						?>
						<tr>
							<td><?php echo $id_commessa; ?></td>
							<td><?php echo $query_pm->pm; ?></td>
							<td><?php echo $row->nome; ?></td>
							<td><?php echo $row->descrizione; ?></td>
							<td><?php echo $row->fase; ?></td>
							<td><?php if($row->stato == 0){ echo "Attiva";}if($row->stato == 1){ echo "Disattiva";} ?></td>
							<td><a href="#?w=500&id=<?php echo $id_commessa; ?>" rel="modifica_commessa" class="poplight"><img src="/support2i/wp-content/uploads/2015/06/edit.png" /></a></td>
							<td><a href="#?w=500&id=<?php echo $id_commessa; ?>" rel="elimina_commessa" class="poplight"><img src="/support2i/wp-content/uploads/2015/06/delete.png" /></a></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
				<div style="clear:both"></div>
				<br>
				<a style="margin-right: 15px;" href="#?w=500" rel="inserisci_commessa" class="poplight action_button">Inserisci commessa</a>
			<?php }else { ?>
				<b>Per il momento non sono presenti commesse.</b>
			<?php } ?>
			<div style="clear:both"></div>   
			 </div>
			 <div id="tabs-24">
				<div style="clear:both"></div>
		
			<br>
			<?php
			
					$query_pm=$wpdb->get_results("SELECT * FROM pm");
					//echo $count_pm;
			?>
			<?php if(count($query_pm) != 0){ ?>
				<table class="pm" style="float:left;">
					<thead>
					<tr>
						<th style="font-size: 25px;text-align:left;border: 1px solid #FFFFFF;" colspan="6"><b>Elenco PM</b></th>
					</tr>
					<tr>
						<th>ID Pm</th>
						<th>Nome</th>
						<th>Cognome</th>
						<th>Email</th>
						<th>Modifica</th>
						<th>Cancella</th>
					</tr>
					</thead>
					<tbody>
						<?php 
						foreach($query_pm as $key => $row){
						?>
						<tr>
							<td><?php echo $row->id; ?></td>
							<td><?php echo $row->nome; ?></td>
							<td><?php echo $row->cognome; ?></td>
							<td><?php echo $row->email; ?></td>
							<td><a href="#?w=500&id=<?php echo $row->id; ?>" rel="modifica_pm" class="poplight"><img src="/support2i/wp-content/uploads/2015/06/edit.png" /></a></td>
							<td><a href="#?w=500&id=<?php echo $row->id; ?>" rel="elimina_pm" class="poplight"><img src="/support2i/wp-content/uploads/2015/06/delete.png" /></a></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
				
			<?php }else{ ?>
				<b>Per il momento non sono presenti pm.</b>
			<?php } ?>
			<div style="clear:both;"></div>
			<br>
			
		<div id="inserisci_pm" class="popup_block">
			<h3 style="text-align: left;" class="page-title">Inserisci pm</h1>
			<div class="content-ver-sep"></div>
			<br />
			<form id="pm" name="pm" action="/support2i/consuntivazioni#tabs-24" method="POST">
				<label for="nome_pm">Nome: </label><input type="text" id="nome_pm" name="nome_pm" required><br><br>
				<label for="cognome_pm">Cognome: </label><textarea id="cognome_pm" name="cognome_pm" required></textarea><br>
				<label for="email_pm">Email: </label><input type="text" id="email_pm" name="email_pm required"><br><br>
				<input type="hidden" name="time" value="<?php echo $time; ?>" />
				<input type="submit" name="inserisci_pm" value="Inserisci">
			</form>
		</div>
		<div style="clear:both"></div>
		<a style="margin-right: 15px;" href="#?w=500" rel="inserisci_pm" class="poplight action_button">Inserisci pm</a>
		  </div><br><br>