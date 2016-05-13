<?php
/*
	Template Name: CR_automation
*/
?>

<?php get_header(); ?>

<!-- <link href="styles/demo_style.css" rel="stylesheet" type="text/css">
<link href="styles/smart_wizard.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-2.0.0.min.js"></script>-->


<script type="text/javascript">
   
    $(document).ready(function(){
  		$('#wizard').smartWizard({transitionEffect:'slide'});
	});

	$('#run_system').on('click', function() {
    $.ajax({
        url : '/support2i/run'
    }).done(function(data) {
        console.log(data);
    });
});
	
</script>

<div id="content-full">
	<h1 id="post-<?php the_ID(); ?>" class="page-title"><?php the_title();?></h1>
	<div class="content-ver-sep"></div>
	<div class="entrytext">
		<table align="center" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td>
					<div id="wizard" class="swMain">
						<ul>
							<li>
								<a href="#step-1">
									<label class="stepNumber">1</label>
									<span class="stepDesc">Applicazione<br />
										<small>scelta dell'applicazione</small>
									</span>
								</a>
							</li>
							<li>
								<a href="#step-2">
									<label class="stepNumber">2</label>
									<span class="stepDesc">Download<br />
										<small>download da repository cr</small>
									</span>
								</a>
							</li>
							<li>
								<a href="#step-3">
										<label class="stepNumber">3</label>
										<span class="stepDesc">Backup<br />
											<small>salvataggio configurazioni</small>
										</span>                   
								</a>
							</li>
							<li>
								<a href="#step-4">
									<label class="stepNumber">4</label>
									<span class="stepDesc">Azioni<br />
										<small>scelta opzioni da svolgere</small>
									</span>                   
								</a>
							</li>
						</ul>
						<div id="step-1">	
							<h2 class="StepTitle">Scelta applicazione</h2>
							<p style="padding: 5px;"><br><br>
								Selezionare un'applicazione per poter installare la change request:<br><br>
								<form>
									<select id="scelta_applicazione" name="scelta_applicazione" required>
										<option value="AMR" selected="selected">AMR</option>
										<option value="AUG">AUG</option>
										<option value="FOUR">FOUR</option>
										<option value="PDS">PDS</option>
										<option value="SGMG">SGMG</option>
										<option value="TLA">TLA</option>
										<option value="TLM">TLM</option>
										<option value="WFMGAS">WFMGAS</option>
									</select>
									<input name="submit" type="submit" value="Submit">
								</form>
								<button id="run_system">Start</button>
							</p>
						</div>
						<div id="step-2">
							<h2 class="StepTitle">Download del pacchetto</h2>	
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
								Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
								Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
								Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
								Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
								Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
								Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p> 
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
								Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
								Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
								Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
								Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>            
						</div>                      
						<div id="step-3">
							<h2 class="StepTitle">Step 3 Content</h2>	
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
								Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
								Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
								Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
								Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>               				          
						</div>
						<div id="step-4">
							<h2 class="StepTitle">Step 4 Content</h2>	
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
								Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
								Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
								Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
								Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
								Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
								Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>                			
						</div>
					</div>
				</td>
			</tr>
		</table>
	</div>
	<div class="clear"> </div>
	<?php comments_template( '', true ); ?>
</div>
<?php get_footer(); ?>