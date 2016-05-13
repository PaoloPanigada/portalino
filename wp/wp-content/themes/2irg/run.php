<?php
/*
	Template Name: run
*/
?>
<?php
    echo shell_exec('ls -lart',$output);
	print_r($output);
?>