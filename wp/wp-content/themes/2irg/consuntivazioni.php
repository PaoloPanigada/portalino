<?php
/*
Template Name: Consuntivazioni

###### Project Manager ######
id 2. Fabio Quarta - application maintenance/sap bw
id 3. Stefano Morelli - disaster recovery/supercluster
id 4. Giuseppe Vitale - nuovi progetti
id 5. Paolo Panigada - nuovi progetti
#############################

*/
?>

<?php get_header(); ?>

<script type="text/javascript">

	$(document).ready(function(){
		//When you click on a link with class of poplight and the href starts with a # 
		$('a.poplight[href^=#]').click(function(){
			var popID = $(this).attr('rel'); //Get Popup Name
			var popURL = $(this).attr('href'); //Get Popup href to define size
			if(popID == "inserisci_commessa" || popID == "inserisci_attivita" || popID == "inserisci_consuntivo" || popID == "inserisci_pm"){
				//Pull Query & Variables from href URL
				//alert(popURL);
				var query= popURL.split('?');
				var dim= query[1].split('&');
				var popWidth = dim[0].split('=')[1]; //Gets the first query string value			
				//Fade in the Popup and add close button
				$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="/support2i/wp-content/uploads/2015/06/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
			}
			if(popID == "modifica_consuntivo"){
				//Pull Query & Variables from href URL
				//alert(popURL);
				
				var query= popURL.split('?');
				var dim= query[1].split('&');
				var popWidth = dim[0].split('=')[1]; //Gets the first query string value	
				//alert(popWidth);
				
				var query_id= popURL.split('&');
				var id= query_id[1].split('&');
				var id_consuntivo = id[0].split('=')[1]; //Gets the first query string value
				//alert(id_consuntivo);
				
					 var xmlhttp = new XMLHttpRequest();
					 xmlhttp.onreadystatechange = function() {
						 if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
						 
						 $('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend(xmlhttp.responseText);
						 }
					 }
					 xmlhttp.open("GET", "/support2i/update?id="+id_consuntivo, true);
					 xmlhttp.send();

				//Fade in the Popup and add close button
				$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).html('<a href="#" class="close"><img style="margin: -220px -195px 0 0;" src="/support2i/wp-content/uploads/2015/06/close_pop.png" class="btn_close2" title="Close Window" alt="Close" /></a>');
			}
			if(popID == "modifica_attivita"){
				//Pull Query & Variables from href URL
				//alert(popURL);
				
				var query= popURL.split('?');
				var dim= query[1].split('&');
				var popWidth = dim[0].split('=')[1]; //Gets the first query string value	
				//alert(popWidth);
				
				var query_id= popURL.split('&');
				var id= query_id[1].split('&');
				var id_attivita = id[0].split('=')[1]; //Gets the first query string value
				//alert(id_consuntivo);
				
					 var xmlhttp = new XMLHttpRequest();
					 xmlhttp.onreadystatechange = function() {
						 if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
						 
						 $('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).html(xmlhttp.responseText);
						 }
					 }
					 xmlhttp.open("GET", "/support2i/update?id_attivita="+id_attivita, true);
					 xmlhttp.send();

				//Fade in the Popup and add close button
				$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="/support2i/wp-content/uploads/2015/06/close_pop.png" class="btn_close2" title="Close Window" alt="Close" /></a>');
			}
			if(popID == "elimina_consuntivo"){
				//Pull Query & Variables from href URL
				//alert(popURL);
				
				var query= popURL.split('?');
				var dim= query[1].split('&');
				var popWidth = dim[0].split('=')[1]; //Gets the first query string value	
				//alert(popWidth);
				
				var query_id= popURL.split('&');
				var id= query_id[1].split('&');
				var id_consuntivo = id[0].split('=')[1]; //Gets the first query string value
				//alert(id_consuntivo);
				
				//Fade in the Popup and add close button
				$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="/support2i/wp-content/uploads/2015/06/close_pop.png" class="btn_close2" title="Close Window" alt="Close" /></a>');
				//Fade in the Popup and add close button
				$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<div class="elimina_cons"><h3 style="text-align: left;" class="page-title">Elimina consuntivo</h1><div class="content-ver-sep"></div><br /><h3>Sei sicuro?</h3><div style="width:130px;margin:0 auto;"><a style="margin-right: 30px;" href="/support2i/consuntivazioni?id='+id_consuntivo+'" class="action_button">Si</a></div><a href="#" class="action_button close_no" title="Close Window No" alt="Close No">No</a></div>');
			}
			
			if(popID == "elimina_attivita"){
				//Pull Query & Variables from href URL
				//alert(popURL);
				
				var query= popURL.split('?');
				var dim= query[1].split('&');
				var popWidth = dim[0].split('=')[1]; //Gets the first query string value	
				//alert(popWidth);
				
				var query_id= popURL.split('&');
				var id= query_id[1].split('&');
				var id_attivita = id[0].split('=')[1]; //Gets the first query string value
				//alert(id_consuntivo);
				
				//Fade in the Popup and add close button
				$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).html('<a href="#" class="close"><img src="/support2i/wp-content/uploads/2015/06/close_pop.png" class="btn_close2" title="Close Window" alt="Close" /></a>');
				//Fade in the Popup and add close button
				$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<div class="elimina_att"><h3 style="text-align: left;" class="page-title">Elimina attivit&agrave;</h1><div class="content-ver-sep"></div><br /><h3>Sei sicuro?</h3><div style="width:130px;margin:0 auto;"><a style="margin-right: 30px;" href="/support2i/consuntivazioni?id_attivita='+id_attivita+'" class="action_button">Si</a></div><a href="#" class="action_button close_no" title="Close Window No" alt="Close No">No</a></div>');
			}
			
			if(popID == "elimina_commessa"){
				//Pull Query & Variables from href URL
				//alert(popURL);
				
				var query= popURL.split('?');
				var dim= query[1].split('&');
				var popWidth = dim[0].split('=')[1]; //Gets the first query string value	
				//alert(popWidth);
				
				var query_id= popURL.split('&');
				var id= query_id[1].split('&');
				var id_commessa = id[0].split('=')[1]; //Gets the first query string value
				//alert(id_commessa);
				
				//Fade in the Popup and add close button
				$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="/support2i/wp-content/uploads/2015/06/close_pop.png" class="btn_close2" title="Close Window" alt="Close" /></a>');
				//Fade in the Popup and add close button
				$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<div class="elimina_comm"><h3 style="text-align: left;" class="page-title">Elimina commessa</h1><div class="content-ver-sep"></div><br /><h3>Sei sicuro?</h3><div style="width:130px;margin:0 auto;"><a style="margin-right: 30px;" href="/support2i/consuntivazioni?id_commessa='+id_commessa+'" class="action_button">Si</a></div><a href="#" class="action_button close_no" title="Close Window No" alt="Close No">No</a></div>');
			}
			if(popID == "elimina_pm"){
				//Pull Query & Variables from href URL
				//alert(popURL);
				
				var query= popURL.split('?');
				var dim= query[1].split('&');
				var popWidth = dim[0].split('=')[1]; //Gets the first query string value	
				//alert(popWidth);
				
				var query_id= popURL.split('&');
				var id= query_id[1].split('&');
				var id_pm = id[0].split('=')[1]; //Gets the first query string value
				//alert(id_commessa);
				
				//Fade in the Popup and add close button
				$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="/support2i/wp-content/uploads/2015/06/close_pop.png" class="btn_close2" title="Close Window" alt="Close" /></a>');
				//Fade in the Popup and add close button
				$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<div class="elimina_pm"><h3 style="text-align: left;" class="page-title">Elimina pm</h1><div class="content-ver-sep"></div><br /><h3>Sei sicuro?</h3><div style="width:130px;margin:0 auto;"><a style="margin-right: 30px;" href="/support2i/consuntivazioni?id_pm='+id_pm+'" class="action_button">Si</a></div><a href="#" class="action_button close_no" title="Close Window No" alt="Close No">No</a></div>');
			}
			if(popID == "modifica_pm"){
				//Pull Query & Variables from href URL
				//alert(popURL);
				
				var query= popURL.split('?');
				var dim= query[1].split('&');
				var popWidth = dim[0].split('=')[1]; //Gets the first query string value	
				//alert(popWidth);
				
				var query_id= popURL.split('&');
				var id= query_id[1].split('&');
				var id_pm = id[0].split('=')[1]; //Gets the first query string value
				//alert(id_commessa);
				
				//Fade in the Popup and add close button
				$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="/support2i/wp-content/uploads/2015/06/close_pop.png" class="btn_close2" title="Close Window" alt="Close" /></a>');
				//Fade in the Popup and add close button
				$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<div class="modifica_pm"><h3 style="text-align: left;" class="page-title">Modifica pm</h1><div class="content-ver-sep"></div><br /><h3>Sei sicuro?</h3><div style="width:130px;margin:0 auto;"><a style="margin-right: 30px;" href="/support2i/consuntivazioni?id_pm='+id_pm+'" class="action_button">Si</a></div><a href="#" class="action_button close_no" title="Close Window No" alt="Close No">No</a></div>');
			}
			if(popID == "reset"){
				//Pull Query & Variables from href URL
				//alert(popURL);
				
				var query= popURL.split('?');
				var dim= query[1].split('&');
				var popWidth = dim[0].split('=')[1]; //Gets the first query string value	
				//alert(popWidth);
				
				var query_nome= popURL.split('&');
				var nome= query_nome[1].split('&');
				var user = nome[0].split('=')[1]; //Gets the first query string value
				//alert(user);
				
				//Fade in the Popup and add close button
				$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="/support2i/wp-content/uploads/2015/06/close_pop.png" class="btn_close2" title="Close Window" alt="Close" /></a>');
				//Fade in the Popup and add close button
				$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<div class="reset_cons"><h3 style="text-align: left;" class="page-title">Reset dei consuntivi</h1><div class="content-ver-sep"></div><br /><h3>Sei sicuro?</h3><div style="width:130px;margin:0 auto;"><a style="margin-right: 30px;" href="/support2i/consuntivazioni?user='+user+'" class="action_button">Si</a></div><a href="#" class="action_button close_no" title="Close Window No" alt="Close No">No</a></div>');
			}
			
			//Define margin for center alignment (vertical + horizontal) - we add 80 to the height/width to accomodate for the padding + border width defined in the css
			var popMargTop = ($('#' + popID).height() + 80) / 2;
			var popMargLeft = ($('#' + popID).width() + 80) / 2;

			//Apply Margin to Popup
			$('#' + popID).css({ 
				'margin-top' : -popMargTop,
				'margin-left' : -popMargLeft
			});
			
			//Fade in Background
			$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
			$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
			return false;
		});
		//Close Popups and Fade Layer
		$('a.close, a.close_no, #fade').live('click', function(){ //When clicking on the close or fade layer...
		//$('a.close, a.close_no, #fade').on('click', function(){
			//When clicking on the close or fade layer...
			$('#fade, .close_no, .popup_block').fadeOut(function() {  
			$('#fade, .elimina_cons, .elimina_comm, .reset_cons, a.close').remove();  
		}); //fade them both out
			return false;
		});
	});
</script>
<div id="content-full">
	<h1 id="post-<?php the_ID(); ?>" class="page-title"><?php the_title();?></h1>
	<div class="content-ver-sep"></div>
	<div class="entrytext">
		<?php
			global $wpdb;
			$wpdb->show_errors();
			global $current_user;
			get_currentuserinfo();
			$user=$current_user->user_login;
		
			if($user){
				//echo 'Username: ' . $current_user->user_login . "<br>";

				session_start();
				
					if (isset($_GET["id_attivita"])){
						$id = $_GET["id_attivita"];
						$nome_attivita = $wpdb->get_row("SELECT nome_attivita FROM attivita WHERE id_attivita='$id'", ARRAY_A);
						$id_evento = $wpdb->get_row("SELECT id FROM wp_spidercalendar_event WHERE title = '$nome_attivita[nome_attivita]'", ARRAY_A);
						//var_dump($id_evento);
						$wpdb->query($wpdb->prepare("DELETE FROM wp_spidercalendar_event WHERE id='$id_evento[id]'" ));
						$wpdb->query($wpdb->prepare("DELETE FROM attivita WHERE id_attivita='$id'" ));
					?>
							<script type="text/javascript">
							$(document).ready(function(){
								var popURL = $(this).attr('href');
								//Pull Query & Variables from href URL
								//alert(popURL);
								
								//Fade in the Popup and add close button
								$('#success').fadeIn().css({ 'width': Number( 500 ) }).prepend('<a href="#" class="close"><img style="margin: -70px -45px 0 0;" src="/support2i/wp-content/uploads/2015/06/close_pop.png" class="btn_close2" title="Close Window" alt="Close" /></a>');
								//Fade in the Popup and add close button
								$('#success').fadeIn().css({ 'width': Number( 500 ) }).prepend('<div class="elimina_pm">Operazione avvenuta con successo</div>');
								
								//Define margin for center alignment (vertical + horizontal) - we add 80 to the height/width to accomodate for the padding + border width defined in the css
								var popMargTop = ($('#success').height() + 80) / 2;
								var popMargLeft = ($('#success').width() + 80) / 2;

								//Apply Margin to Popup
								$('#success').css({ 
									'margin-top' : -popMargTop,
									'margin-left' : -popMargLeft
								});
								
								//Fade in Background
								$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
								$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
								return false;
							});
							//Close Popups and Fade Layer
							$('a.close, a.close_no, #fade').live('click', function(){ //When clicking on the close or fade layer...
								//$('a.close, a.close_no, #fade').on('click', function(){
									//When clicking on the close or fade layer...
									$('#fade, .close_no, .popup_block').fadeOut(function() {  
										$('#fade, .elimina_cons, .elimina_comm, .reset_cons, a.close').remove();  
									}); //fade them both out
									return false;
							});
							</script>
					<?php
						
					}
					
					if (isset($_GET["id"])){
						$id = $_GET["id"];
						$query_attivita=$wpdb->get_row("SELECT id_attivita FROM consuntivo WHERE id_consuntivo = '$id'", ARRAY_A);
						$wpdb->update( 
							'attivita', 
							array( 
								'stato' => 'in elaborazione'
							), 
							array( 'id_attivita' => $query_attivita[id_attivita] ), 
							array( 
								'%s'
							), 
							array( '%d' ) 
						);
						$wpdb->query($wpdb->prepare("DELETE FROM consuntivo WHERE id_consuntivo='$id'" ));
					?>
							<script type="text/javascript">
							$(document).ready(function(){
								var popURL = $(this).attr('href');
								//Pull Query & Variables from href URL
								//alert(popURL);
								
								//Fade in the Popup and add close button
								$('#success').fadeIn().css({ 'width': Number( 500 ) }).prepend('<a href="#" class="close"><img style="margin: -70px -45px 0 0;" src="/support2i/wp-content/uploads/2015/06/close_pop.png" class="btn_close2" title="Close Window" alt="Close" /></a>');
								//Fade in the Popup and add close button
								$('#success').fadeIn().css({ 'width': Number( 500 ) }).prepend('<div class="elimina_pm">Operazione avvenuta con successo</div>');
								
								//Define margin for center alignment (vertical + horizontal) - we add 80 to the height/width to accomodate for the padding + border width defined in the css
								var popMargTop = ($('#success').height() + 80) / 2;
								var popMargLeft = ($('#success').width() + 80) / 2;

								//Apply Margin to Popup
								$('#success').css({ 
									'margin-top' : -popMargTop,
									'margin-left' : -popMargLeft
								});
								
								//Fade in Background
								$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
								$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
								return false;
							});
							//Close Popups and Fade Layer
							$('a.close, a.close_no, #fade').live('click', function(){ //When clicking on the close or fade layer...
								//$('a.close, a.close_no, #fade').on('click', function(){
									//When clicking on the close or fade layer...
									$('#fade, .close_no, .popup_block').fadeOut(function() {  
										$('#fade, .elimina_cons, .elimina_comm, .reset_cons, a.close').remove();  
									}); //fade them both out
									return false;
							});
							</script>
					<?php
						
					}
					
					if (isset($_GET["id_commessa"])){
						$id_commessa = $_GET["id_commessa"];
						//echo "session time: ".$_POST['time']."\n";
						$wpdb->query($wpdb->prepare("DELETE FROM commessa WHERE id_commessa='$id_commessa'" ));
					?>
							<script type="text/javascript">
								alert('Commessa eliminata');							
							</script>
					<?php
						
					}
					
					if (isset($_GET["id_pm"])){
						$id_pm = $_GET["id_pm"];
						$wpdb->query($wpdb->prepare("DELETE FROM pm WHERE id = '$id_pm'" ));
					?>
							<script type="text/javascript">
								alert('PM eliminato');							
							</script>
					<?php
						
					}
					
					if (isset($_GET["user"])){
						$user = $_GET["user"];
						//echo "session time: ".$_POST['time']."\n";
							$get_id_assegnatario = "SELECT id_assegnatario FROM assegnatario WHERE cognome = '$current_user->user_lastname'";
							$query_assegnatario = mysql_query($get_id_assegnatario) or die (mysql_error());
							$id_assegnatario = mysql_fetch_row($query_assegnatario);
							$wpdb->query($wpdb->prepare("DELETE FROM consuntivo WHERE id_assegnatario='$id_assegnatario[0]'" ));
					?>
							<script type="text/javascript">
								alert('Consuntivazioni eliminate');							
							</script>
					<?php
						
					}
				
				if (isset($_POST["inserisci_consuntivo"])){
					if(isset($_SESSION['time']) && $_SESSION['time'] == $_POST['time']){
						$id_attivita = $_POST['id_attivita'];
						//echo "\nCIAOOOOO!!!: ".$id_attivita;
						$query_carico=$wpdb->get_row("SELECT * FROM attivita WHERE id_attivita = '$id_attivita'", ARRAY_A);
						//echo var_dump($query_carico);
						$wpdb->insert('consuntivo', array(
								'id_consuntivo' => '',
								'id_attivita' => $id_attivita,
								'id_assegnatario' => $query_carico[id_ass],
								'id_richiedente' => $query_carico[id_richiedente],
                                'id_commessa' => $query_carico[id_commessa],
								'id_gruppo' => $query_carico[id_gruppo],
                                'attivita' => $query_carico[nome_attivita],
								'data_inizio' => $query_carico[data_inizio],
								'scadenza' => $query_carico[scadenza],
								'tempo_impiegato' => '00:00:00',
								'stato' => 'in carico'
                                ),array(
								'%d',
                                '%d',
								'%d',
								'%d',
								'%d',
								'%d',
								'%s',
								'%s',
								'%s',
								'%s',
                                '%s')
						);
						
						$wpdb->update( 
							'attivita', 
							array( 
								'stato' => 'in carico'
							), 
							array( 'id_attivita' => $id_attivita ), 
							array( 
								'%s'
							), 
							array( '%d' ) 
						);
		?>
						<script type="text/javascript">
							$(document).ready(function(){
								var popURL = $(this).attr('href');
								//Pull Query & Variables from href URL
								//alert(popURL);
								
								//Fade in the Popup and add close button
								$('#success').fadeIn().css({ 'width': Number( 500 ) }).prepend('<a href="#" class="close"><img style="margin: -70px -45px 0 0;" src="/support2i/wp-content/uploads/2015/06/close_pop.png" class="btn_close2" title="Close Window" alt="Close" /></a>');
								//Fade in the Popup and add close button
								$('#success').fadeIn().css({ 'width': Number( 500 ) }).prepend('<div class="elimina_pm">Attivita\' presa in carico</div>');
								
								//Define margin for center alignment (vertical + horizontal) - we add 80 to the height/width to accomodate for the padding + border width defined in the css
								var popMargTop = ($('#success').height() + 80) / 2;
								var popMargLeft = ($('#success').width() + 80) / 2;

								//Apply Margin to Popup
								$('#success').css({ 
									'margin-top' : -popMargTop,
									'margin-left' : -popMargLeft
								});
								
								//Fade in Background
								$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
								$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
								return false;
							});
							//Close Popups and Fade Layer
							$('a.close, a.close_no, #fade').live('click', function(){ //When clicking on the close or fade layer...
								//$('a.close, a.close_no, #fade').on('click', function(){
									//When clicking on the close or fade layer...
									$('#fade, .close_no, .popup_block').fadeOut(function() {  
										$('#fade, .elimina_cons, .elimina_comm, .reset_cons, a.close').remove();  
									}); //fade them both out
									return false;
							});
							</script>
		<?php
					}
				}
				
				if (isset($_POST["inserisci_attivita"])){
						$nome_attivita = $_POST['attivita'];
						$descrizione = $_POST['descrizione_attivita'];
						$richiedente = $_POST['richiedente'];
						$assegnatario = $_POST['assegnatario'];
						$commessa = $_POST['commessa'];
						$gruppo = $_POST['gruppo'];
						$data_inizio = $_POST['data_inizio'];	
						$scadenza = $_POST['scadenza'];						
						
						$id_assegnatario=$wpdb->get_row("SELECT id_assegnatario FROM assegnatario WHERE (CONCAT (assegnatario.nome,' ', assegnatario.cognome))='$assegnatario'", ARRAY_N);
						$id_richiedente=$wpdb->get_row("SELECT id_richiedente FROM richiedente WHERE (CONCAT (richiedente.nome,' ', richiedente.cognome))='$richiedente'", ARRAY_N);
						$id_commessa=$wpdb->get_row("SELECT id_commessa FROM commessa WHERE nome ='$commessa'", ARRAY_N);
						$id_gruppo=$wpdb->get_row("SELECT id_gruppo FROM gruppo WHERE nome_gruppo ='$gruppo'", ARRAY_N);
						$wpdb->insert('attivita', array(
								'id_attivita' => '',
                                'nome_attivita' => $nome_attivita,
                                'descrizione' => $descrizione,
								'id_richiedente' => $id_richiedente[0],
								'id_ass' => $id_assegnatario[0],
								'id_commessa' => $id_commessa[0],
								'id_gruppo' => $id_gruppo[0],
								'data_inizio' => $data_inizio,
								'scadenza' => $scadenza,
								'stato' => 'in elaborazione'
                                ),array(
								'%d',
                                '%s',
								'%s',
								'%d',
								'%d',
								'%d',
								'%d',
								'%s',
								'%s',
                                '%s')
						);
						
						$wpdb->insert($wpdb->prefix . 'spidercalendar_event', array(
								'id' => NULL,
								'category' => 0,
								'title' => $nome_attivita,
								'calendar' => 1,
								'date' => $data_inizio,
								'text_for_date' => $descrizione,
								'published' => 1,
								'repeat' => 1,
								'date_end' => $scadenza,
								'month_type' => 1,
								'year_month' => 1,
								'repeat_method' => 'no_repeat',
								'userID' => ''
								), array(
								'%d',
								'%s',
								'%s',
								'%d',
								'%s',
								'%s',
								'%d',
								'%s',
								'%s',
								'%s',
								'%s',
								'%s',
								'%s'
						));
						
						$email_assegnatario=$wpdb->get_row("SELECT email FROM assegnatario WHERE (CONCAT (assegnatario.nome,' ', assegnatario.cognome))='$assegnatario'", ARRAY_N);
						$output = shell_exec('/application/support2i/wp-content/themes/2irg/script/attivita_email.ksh "'.$email_assegnatario[0].'" "'.$nome_attivita.'" "'.$descrizione.'" "'.$richiedente.'" "'.$assegnatario.'" "'.$commessa.'" "'.$gruppo.'" "'.$scadenza.'"');
						
						//echo $output;
					?>
					<script type="text/javascript">
							$(document).ready(function(){
								var popURL = $(this).attr('href');
								//Pull Query & Variables from href URL
								//alert(popURL);
								
								//Fade in the Popup and add close button
								$('#success').fadeIn().css({ 'width': Number( 500 ) }).prepend('<a href="#" class="close"><img style="margin: -70px -45px 0 0;" src="/support2i/wp-content/uploads/2015/06/close_pop.png" class="btn_close2" title="Close Window" alt="Close" /></a>');
								//Fade in the Popup and add close button
								$('#success').fadeIn().css({ 'width': Number( 500 ) }).prepend('<div class="elimina_pm">Operazione avvenuta con successo</div>');
								
								//Define margin for center alignment (vertical + horizontal) - we add 80 to the height/width to accomodate for the padding + border width defined in the css
								var popMargTop = ($('#success').height() + 80) / 2;
								var popMargLeft = ($('#success').width() + 80) / 2;

								//Apply Margin to Popup
								$('#success').css({ 
									'margin-top' : -popMargTop,
									'margin-left' : -popMargLeft
								});
								
								//Fade in Background
								$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
								$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
								return false;
							});
							//Close Popups and Fade Layer
							$('a.close, a.close_no, #fade').live('click', function(){ //When clicking on the close or fade layer...
								//$('a.close, a.close_no, #fade').on('click', function(){
									//When clicking on the close or fade layer...
									$('#fade, .close_no, .popup_block').fadeOut(function() {  
										$('#fade, .elimina_cons, .elimina_comm, .reset_cons, a.close').remove();  
									}); //fade them both out
									return false;
							});
							</script>
					<?php
				}
				
				if (isset($_POST["id_attivita_update"])){
					$id_consuntivo = $_POST['id_consuntivo'];
					$id_attivita = $_POST['id_attivita_update'];
					$nome_attivita = $_POST['nome_attivita'];
					$descrizione = $_POST['descrizione'];
					$richiedente = $_POST['richiedente'];
					$assegnatario = $_POST['assegnatario'];
					$commessa = $_POST['commessa'];
					$gruppo = $_POST['gruppo'];
					$data_inizio = $_POST['data_inizio'];
					$scadenza = $_POST['scadenza'];
					$stato = $_POST['stato'];
					
					$id_evento=$wpdb->get_row("SELECT id FROM wp_spidercalendar_event WHERE title = '$nome_attivita'", ARRAY_N);
					$id_commessa=$wpdb->get_row("SELECT id_commessa FROM commessa WHERE nome = '$commessa'", ARRAY_N);
					$id_gruppo=$wpdb->get_row("SELECT id_gruppo FROM gruppo WHERE nome_gruppo = '$gruppo'", ARRAY_N);
					$id_assegnatario=$wpdb->get_row("SELECT id_assegnatario FROM assegnatario WHERE (CONCAT (assegnatario.nome,' ', assegnatario.cognome))='$assegnatario'", ARRAY_N);
					$id_richiedente=$wpdb->get_row("SELECT id_richiedente FROM richiedente WHERE (CONCAT (richiedente.nome,' ', richiedente.cognome))='$richiedente'", ARRAY_N);
					
					$wpdb->update(
							'attivita', 
							array( 
								'nome_attivita' => $nome_attivita,
								'descrizione' => $descrizione,
								'id_ass' => $id_assegnatario[0],
								'id_richiedente' => $id_richiedente[0],
								'id_commessa' => $id_commessa[0],
								'id_gruppo' => $id_gruppo[0],
								'data_inizio' => $data_inizio,
								'scadenza' => $scadenza,
								'stato' => $stato
							), 
							array( 'id_attivita' => $id_attivita ), 
							array( 
								'%s',
								'%s',
								'%s',
								'%s',
								'%d',
								'%s',
								'%s',
								'%s',
								'%s'
							), 
							array( '%d' ) 
						);
						
					$wpdb->update($wpdb->prefix . 'spidercalendar_event', array(
							'title' => $nome_attivita,
							'date' => $data_inizio,
							'text_for_date' => $descrizione,
							'date_end' => $scadenza,

							), array('id' => $id_evento[0]), array(
								'%s',
								'%s',
								'%s',
								'%s'
							));
				?>
				
				<script type="text/javascript">
				$(document).ready(function(){
					var popURL = $(this).attr('href');
					//Pull Query & Variables from href URL
					//alert(popURL);
					
					//Fade in the Popup and add close button
					$('#success').fadeIn().css({ 'width': Number( 500 ) }).prepend('<a href="#" class="close"><img style="margin: -70px -45px 0 0;" style="margin: -70px -45px 0 0;" src="/support2i/wp-content/uploads/2015/06/close_pop.png" class="btn_close2" title="Close Window" alt="Close" /></a>');
					//Fade in the Popup and add close button
					$('#success').fadeIn().css({ 'width': Number( 500 ) }).prepend('<div class="elimina_pm">Operazione avvenuta con successo</div>');
					
					//Define margin for center alignment (vertical + horizontal) - we add 80 to the height/width to accomodate for the padding + border width defined in the css
					var popMargTop = ($('#success').height() + 80) / 2;
					var popMargLeft = ($('#success').width() + 80) / 2;

					//Apply Margin to Popup
					$('#success').css({ 
						'margin-top' : -popMargTop,
						'margin-left' : -popMargLeft
					});
					
					//Fade in Background
					$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
					$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
					return false;
				});
				//Close Popups and Fade Layer
				$('a.close, a.close_no, #fade').live('click', function(){ //When clicking on the close or fade layer...
					//$('a.close, a.close_no, #fade').on('click', function(){
						//When clicking on the close or fade layer...
						$('#fade, .close_no, .popup_block').fadeOut(function() {  
							$('#fade, .elimina_cons, .elimina_comm, .reset_cons, a.close').remove();  
						}); //fade them both out
						return false;
				});
				</script>
				
				<?php
				}
				
				if (isset($_POST["update_consuntivo"])){
					$tempo_impiegato = $_POST['tempo_impiegato'];
					$giorno = $_POST['giorno'];
					$stato = $_POST['stato'];
					$id_consuntivo = $_POST['id_consuntivo'];
					$id_attivita = $_POST['id_attivita'];
						
					$wpdb->update(
							'consuntivo', 
							array( 
								'tempo_impiegato' => $tempo_impiegato,
								'giorno' => $giorno,
								'stato' => $stato
							), 
							array( 'id_consuntivo' => $id_consuntivo ), 
							array( 
								'%s',
								'%s',
								'%s'
							), 
							array( '%d' ) 
						);
						$wpdb->update( 
							'attivita', 
							array( 
								'stato' => $stato
							), 
							array( 'id_attivita' => $id_attivita ), 
							array( 
								'%s'
							), 
							array( '%d' ) 
						);
						
					?>
					<script type="text/javascript">
						$(document).ready(function(){
							var popURL = $(this).attr('href');
							//Pull Query & Variables from href URL
							//alert(popURL);
							
							//Fade in the Popup and add close button
							$('#success').fadeIn().css({ 'width': Number( 500 ) }).prepend('<a href="#" class="close"><img style="margin: -70px -45px 0 0;" src="/support2i/wp-content/uploads/2015/06/close_pop.png" class="btn_close2" title="Close Window" alt="Close" /></a>');
							//Fade in the Popup and add close button
							$('#success').fadeIn().css({ 'width': Number( 500 ) }).prepend('<div class="elimina_pm">Operazione avvenuta con successo</div>');
							
							//Define margin for center alignment (vertical + horizontal) - we add 80 to the height/width to accomodate for the padding + border width defined in the css
							var popMargTop = ($('#success').height() + 80) / 2;
							var popMargLeft = ($('#success').width() + 80) / 2;

							//Apply Margin to Popup
							$('#success').css({ 
								'margin-top' : -popMargTop,
								'margin-left' : -popMargLeft
							});
							
							//Fade in Background
							$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
							$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
							return false;
						});
						//Close Popups and Fade Layer
						$('a.close, a.close_no, #fade').live('click', function(){ //When clicking on the close or fade layer...
							//$('a.close, a.close_no, #fade').on('click', function(){
								//When clicking on the close or fade layer...
								$('#fade, .close_no, .popup_block').fadeOut(function() {  
									$('#fade, .elimina_cons, .elimina_comm, .reset_cons, a.close').remove();  
								}); //fade them both out
								return false;
						});
					</script>
					<?php
				}
				
				if (isset($_POST["inserisci_commessa"])){
					if(isset($_SESSION['time']) && $_SESSION['time'] == $_POST['time']){
						$pm = $_POST['pm'];
						$nome_commessa = $_POST['nome_commessa'];
						$descrizione_commessa = $_POST['descrizione_commessa'];
						$fase_commessa = $_POST['fase_commessa'];
						$stato = $_POST['stato'];
						
						$wpdb->insert('commessa', array(
								'id_commessa' => '',
								'id_pm' => $pm,
								'nome' => $nome_commessa,
								'descrizione' => $descrizione_commessa,
                                'fase' => $fase_commessa,
								'stato' => $stato
                                ),array(
								'%d',
                                '%d',
								'%s',
								'%s',
								'%s',
                                '%d')
						);
		?>
						<script language="javascript" type="text/javascript">alert('Commessa inserita');</script>
		<?php
					}
				}
				
				if (isset($_POST["inserisci_pm"])){
					if(isset($_SESSION['time']) && $_SESSION['time'] == $_POST['time']){
						$nome_pm = $_POST['nome_pm'];
						$cognome_pm = $_POST['cognome_pm'];
						$email_pm = $_POST['email_pm'];
						
						$wpdb->insert('pm', array(
								'id' => '',
								'nome' => $nome_pm,
								'cognome' => $cognome_pm,
                                'email' => $email_pm
                                ),array(
								'%d',
								'%s',
								'%s',
                                '%s')
						);
		?>
						<script language="javascript" type="text/javascript">alert('PM inserito');</script>
		<?php
					}
				}
				
				$time = $_SESSION['time'] = time();
				
				$query_consuntivo=$wpdb->get_results("SELECT id_consuntivo,attivita.nome_attivita,attivita.descrizione,CONCAT (richiedente.nome,' ', richiedente.cognome) AS richiedente,commessa.nome AS nome_commessa,gruppo.nome_gruppo,consuntivo.data_inizio,consuntivo.scadenza,tempo_impiegato,giorno,consuntivo.stato 
							FROM consuntivo
							INNER JOIN attivita ON consuntivo.id_attivita = attivita.id_attivita 
							INNER JOIN assegnatario ON consuntivo.id_assegnatario = assegnatario.id_assegnatario 
							INNER JOIN commessa ON consuntivo.id_commessa = commessa.id_commessa 
							INNER JOIN richiedente ON consuntivo.id_richiedente = richiedente.id_richiedente 
							INNER JOIN gruppo ON consuntivo.id_gruppo = gruppo.id_gruppo 
							WHERE assegnatario.cognome = '$current_user->user_lastname'");
				
				//echo $count;
		?>
		<?php if (count($query_consuntivo)> 0){ ?>
			<table class="consuntivi" style="float:left;">
				<thead>
				<tr>
					<th style="font-size: 25px;text-align:left;border: 1px solid #FFFFFF;" colspan="13"><b>Le attivit&agrave; a tuo carico</b></th>
				</tr>
				<tr>
					<th>ID Consuntivo</th>
					<th>Attivit&agrave;</th>
					<th>Descrizione</th>
					<th>Richiedente</th>
					<th>Commessa</th>
					<th>Gruppo</th>
					<th>Data inizio</th>
					<th>Scadenza</th>
					<th>Tempo impiegato</th>
					<th>Giorno</th>
					<th>Stato</th>
					<th>Modifica</th>
					<th>Cancella</th>
				</tr>
				</thead>
				<tbody>
					<?php 
					foreach($query_consuntivo as $key => $row){
					?>
					<tr <?php if($row->stato == 'in progress'){ ?>class="progress"<?php } if($row->stato == 'completato'){ ?>class="completato" <?php } if($row->stato == 'in carico'){ ?><?php }?>>
						<td><?php echo $row->id_consuntivo; ?></td>
						<td><?php echo $row->nome_attivita; ?></td>
						<td><?php echo $row->descrizione; ?></td>
						<td><?php echo $row->richiedente; ?></td>
						<td><?php echo $row->nome_commessa; ?></td>
						<td><?php echo $row->nome_gruppo; ?></td>
						<td><?php echo $row->data_inizio; ?></td>
						<td><?php echo $row->scadenza; ?></td>
						<td><?php echo $row->tempo_impiegato; ?></td>
						<td><?php echo $row->giorno; ?></td>
						<td><?php echo $row->stato; ?></td>
						<td><a href="#?w=500&id=<?php echo $row->id_consuntivo; ?>" rel="modifica_consuntivo" class="poplight"><img src="/support2i/wp-content/uploads/2015/06/edit.png" /></a></td>
						<td><a href="#?w=500&id=<?php echo $row->id_consuntivo; ?>" rel="elimina_consuntivo" class="poplight"><img src="/support2i/wp-content/uploads/2015/06/delete.png" /></a></td>
					</tr>
					<?php
					}
					$query_totale = $wpdb->get_row("SELECT SEC_TO_TIME (SUM(TIME_TO_SEC(`tempo_impiegato`))) AS totale_ore 
					FROM consuntivo 
					INNER JOIN assegnatario ON consuntivo.id_assegnatario = assegnatario.id_assegnatario
					WHERE assegnatario.cognome = '$current_user->user_lastname'", ARRAY_A);
					//echo var_dump($query_totale);
					//echo $query_totale[totale_ore];

					?>
				</tbody>
			</table>
			<div style="clear:both;"></div>
			<br>
				<div style="text-align:left; padding-left: 20px; float:left">
					<form action="/support2i/consuntivazioni" name="filtro_commessa" method="POST">
						<label for="filtro_commessa">Seleziona commessa: </label>
						<select id="filtro_commessa" name="filtro_commessa" required>
						<option value="" selected="selected"></option>
							<?php
							
								$query_filtro_commessa=$wpdb->get_results("SELECT nome FROM commessa");
								foreach($query_filtro_commessa as $key => $row){
									echo '<option value="'.$row->nome.'">'.$row->nome.'</option>';
								}
							echo "</select>";
							?>
							<input type="submit" value="Filtra">
					</form>
					<div style="clear:both"></div>
					<div style="text-align:left;float: left;">
						<b>Totale: </b><?php echo $query_totale[totale_ore]; ?>
					</div>
					<div style="clear:both"></div>
					<br>
					<?php if (isset($_POST["filtro_commessa"])){		
						$commessa = $_POST["filtro_commessa"];
						$get_ore_tot = $wpdb->get_row("SELECT SEC_TO_TIME (SUM(TIME_TO_SEC(`tempo_impiegato`))) AS totale_ore 
						FROM consuntivo 
						INNER JOIN assegnatario ON consuntivo.id_assegnatario = assegnatario.id_assegnatario
						INNER JOIN commessa ON consuntivo.id_commessa = commessa.id_commessa
						INNER JOIN richiedente ON consuntivo.id_richiedente = richiedente.id_richiedente
						WHERE assegnatario.cognome = '$current_user->user_lastname' AND commessa.nome = '$commessa'", ARRAY_A);
						?>
						<?php if (count($get_ore_tot[totale_ore] == 0)){ ?>
								<b style="color:#FF0000;">Non sono stati inseriti consuntivi per la commessa:</b> <b><?php echo $commessa; ?></b>
						<?php }else { ?>
							<div style="text-align:left;float:left">
								<b>Totale ore per la commessa "<?php echo $_POST["filtro_commessa"]; ?>": </b><?php echo $get_ore_tot[totale_ore]; ?>
							</div>
						<?php } ?>
					<?php } ?>
				<div style="clear:both"></div>
				</div>
		<?php }else { ?>
			<b>Per il momento non stai gestendo nessuna attivit&agrave;.</b>
		<?php } ?>
		
		<div style="clear:both"></div>
		<br />
		<a style="margin-right: 15px;" href="#?w=500" rel="inserisci_consuntivo" class="poplight action_button">Inserisci consuntivo</a>
		<a href="#?w=500&user=<?php echo $user; ?>" rel="reset" class="poplight action_button">Reset</a>
		<div id="inserisci_consuntivo" class="popup_block">
			<h3 style="text-align: left;" class="page-title">Seleziona attivit&agrave;</h1>
			<div class="content-ver-sep"></div>
			<br />
			<form id="consuntivo" name="consuntivo" action="/support2i/consuntivazioni" method="POST">
				<label for="attivita">Attivit&agrave;: </label>
				<?php 
					$query_attivita=$wpdb->get_results("SELECT id_attivita, nome_attivita, attivita.descrizione, CONCAT (richiedente.nome,' ', richiedente.cognome) AS richiedente, commessa.nome, gruppo.nome_gruppo, attivita.scadenza 
														FROM attivita 
														INNER JOIN assegnatario ON attivita.id_ass = assegnatario.id_assegnatario 
														INNER JOIN commessa ON attivita.id_commessa = commessa.id_commessa 
														INNER JOIN richiedente ON attivita.id_richiedente = richiedente.id_richiedente 
														INNER JOIN gruppo ON attivita.id_gruppo = gruppo.id_gruppo 
														WHERE assegnatario.cognome = '$current_user->user_lastname' AND attivita.stato != 'in carico'");
					//echo var_dump($query_attivita);
				?>
				<select id="attivita" name="attivita" required>
					<option value="" selected="selected"></option>
					<?php
						foreach($query_attivita as $key => $row){
							echo '<option value="'.$row->nome_attivita.'">'.$row->nome_attivita.'</option>';
							$id_attivita = $row->id_attivita;
						}
						echo "</select><br /><br />";
					?>
				<!--<label for="attivita">Attivita&agrave;: </label><textarea id="attivita" name="attivita" required><?php echo $row->nome_attivita; ?></textarea><br>
				<label for="descrizione">Descrizione: </label><textarea id="descrizione" name="descrizione" required><?php echo $row->descrizione; ?></textarea><br>
				<label for="richiedente">Richiedente: </label><textarea id="richiedente" name="richiedente" required><?php echo $row->richiedente; ?></textarea><br>
				<label for="commessa">Commessa: </label><textarea id="commessa" name="commessa" required><?php echo $row->nome; ?></textarea><br>
				<label for="gruppo">Gruppo: </label><textarea id="gruppo" name="gruppo" required><?php echo $row->nome_gruppo; ?></textarea><br>
				<label for="scadenza">Scadenza: </label><textarea id="scadenza" name="scadenza" required><?php echo $row->scadenza; ?></textarea><br>-->
				<input type="hidden" name="time" value="<?php echo $time; ?>" />
				<input type="hidden" name="id_attivita" value="<?php echo $id_attivita; ?>" />
				<input type="submit" name="inserisci_consuntivo" value="Inserisci">
			</form>
		</div>
		<div id="modifica_consuntivo" class="popup_block"></div>
		<div id="modifica_attivita" style="top: 30% !important;" class="popup_block"></div>
		<div style="clear:both"></div>
		<?php
		$query_pm=$wpdb->get_results("SELECT cognome AS pm FROM pm");
		//echo "\nquery:".$query_pm;
		//var_dump($query_pm);

		foreach($query_pm as $key => $row){
			if($current_user->user_lastname == $row->pm){
				get_template_part('pm');
			}
		}

		?>
		<div id="elimina_consuntivo" class="popup_block"></div>
		<div id="elimina_attivita" class="popup_block"></div>
		<div id="elimina_pm" class="popup_block"></div>
		<div id="elimina_commessa" class="popup_block"></div>
		<div id="modifica_pm" class="popup_block"></div>
		<div id="reset" class="popup_block"></div>
		<div id="success" class="popup_block"></div>
		<?php
		}else{
		?>
			<b>E' necessario effettuare il login: </b><a href="/support2i/amministrazione" title="Login">Login</a>
		<?php
		}
		?>

	</div>
	<div class="clear"> </div>
	<?php comments_template( '', true ); ?>
</div>
<?php get_footer(); ?>

