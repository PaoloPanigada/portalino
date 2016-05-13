#!/bin/ksh
DIR_HOME=/application/support2i/wp-content/themes/2irg/script/

email=$1
nome_attivita=$2
descrizione=$3
richiedente=$4
assegnatario=$5
commessa=$6
gruppo=$7
scadenza=$8

MAIL(){
echo '<html>'>$DIR_HOME/Testo_mail_attivita.html
	echo '<body>'>>$DIR_HOME/Testo_mail_attivita.html
		echo '<img src="http://10.79.225.252/support2i/wp-content/uploads/2015/05/logo_2irg_websupport_email.png">'>>$DIR_HOME/Testo_mail_attivita.html
		echo '<br>'>>$DIR_HOME/Testo_mail_attivita.html
		echo '<p><small>Non rispondere a questa email generata automaticamente dal sistema gestione Attivita Lutech-WebSupport</small></p>'>>$DIR_HOME/Testo_mail_attivita.html
		echo '<br>'>>$DIR_HOME/Testo_mail_attivita.html
		echo '<table style="border-collapse: collapse;border-spacing: 2px;border: 3px solid #000000;" width="100%">'>>$DIR_HOME/Testo_mail_attivita.html
				echo '<tr style="vertical-align: top;">'>>$DIR_HOME/Testo_mail_attivita.html
					echo '<td style="color:#ffffff;background:#e12b21;font-weight:bold;border-right:1px solid #000000;border-bottom:1px solid #000000;">Attivit&agrave;</td>'>>$DIR_HOME/Testo_mail_attivita.html
					echo '<td>'$nome_attivita'</td>'>>$DIR_HOME/Testo_mail_attivita.html
				echo '</tr>'>>$DIR_HOME/Testo_mail_attivita.html
				echo '<tr style="vertical-align: top;">'>>$DIR_HOME/Testo_mail_attivita.html
					echo '<td style="color:#ffffff;background:#e12b21;font-weight:bold;border-right:1px solid #000000;border-bottom:1px solid #000000;">Descrizione</td>'>>$DIR_HOME/Testo_mail_attivita.html
					echo '<td>'$descrizione'</td>'>>$DIR_HOME/Testo_mail_attivita.html
				echo '</tr>'>>$DIR_HOME/Testo_mail_attivita.html
				echo '<tr style="vertical-align: top;">'>>$DIR_HOME/Testo_mail_attivita.html
					echo '<td style="color:#ffffff;background:#e12b21;font-weight:bold;border-right:1px solid #000000;border-bottom:1px solid #000000;">Richiedente</td>'>>$DIR_HOME/Testo_mail_attivita.html
					echo '<td>'$richiedente'</td>'>>$DIR_HOME/Testo_mail_attivita.html
				echo '</tr>'>>$DIR_HOME/Testo_mail_attivita.html
				echo '<tr style="vertical-align: top;">'>>$DIR_HOME/Testo_mail_attivita.html
					echo '<td style="color:#ffffff;background:#e12b21;font-weight:bold;border-right:1px solid #000000;border-bottom:1px solid #000000;">Assegnatario</td>'>>$DIR_HOME/Testo_mail_attivita.html
					echo '<td>'$assegnatario'</td>'>>$DIR_HOME/Testo_mail_attivita.html
				echo '</tr>'>>$DIR_HOME/Testo_mail_attivita.html
				echo '<tr style="vertical-align: top;">'>>$DIR_HOME/Testo_mail_attivita.html
					echo '<td style="color:#ffffff;background:#e12b21;font-weight:bold;border-right:1px solid #000000;border-bottom:1px solid #000000;">Commessa</td>'>>$DIR_HOME/Testo_mail_attivita.html
					echo '<td>'$commessa'</td>'>>$DIR_HOME/Testo_mail_attivita.html
				echo '</tr>'>>$DIR_HOME/Testo_mail_attivita.html
				echo '<tr style="vertical-align: top;">'>>$DIR_HOME/Testo_mail_attivita.html
					echo '<td style="color:#ffffff;background:#e12b21;font-weight:bold;border-right:1px solid #000000;border-bottom:1px solid #000000;">Gruppo</td>'>>$DIR_HOME/Testo_mail_attivita.html
					echo '<td>'$gruppo'</td>'>>$DIR_HOME/Testo_mail_attivita.html
				echo '</tr>'>>$DIR_HOME/Testo_mail_attivita.html
				echo '<tr style="vertical-align: top;">'>>$DIR_HOME/Testo_mail_attivita.html
					echo '<td style="color:#ffffff;background:#e12b21;font-weight:bold;border-right:1px solid #000000;border-bottom:1px solid #000000;">Scadenza</td>'>>$DIR_HOME/Testo_mail_attivita.html
					echo '<td>'$scadenza'</td>'>>$DIR_HOME/Testo_mail_attivita.html
				echo '</tr>'>>$DIR_HOME/Testo_mail_attivita.html
		echo '</table>'>>$DIR_HOME/Testo_mail_attivita.html		
	echo '</body>'>>$DIR_HOME/Testo_mail_attivita.html
	echo '<br>'>>$DIR_HOME/Testo_mail_attivita.html
	echo '<br>'>>$DIR_HOME/Testo_mail_attivita.html
	echo "<p>Per maggiori informazioni consultare: <a href='http://10.79.225.252/support2i/consuntivazioni/'>2iReteGas - Web Support</a></p>">>$DIR_HOME/Testo_mail_attivita.html
	echo '<br>'>>$DIR_HOME/Testo_mail_attivita.html
	echo '<br>'>>$DIR_HOME/Testo_mail_attivita.html
echo '</html>'>>$DIR_HOME/Testo_mail_attivita.html

}

MAIL

set -x
{
 sleep 5;
 echo 'HELO Monit.2iretegas.it';
 sleep 3;
 echo 'MAIL FROM: LutechWebSupport@2iretegas.it';
 sleep 3;
 #echo 'RCPT TO:p.panigada@lutech.it';
 #echo 'RCPT TO:a.pisani@lutech.it';
 #echo 'RCPT TO:2irg.migrazione@lutech.it';
 echo 'RCPT TO:'$email'';
 sleep 3;
 echo 'DATA';
 sleep 3;
 echo 'Subject: 2iReteGas - Web Support - Nuova attivita';
 echo 'Mime-Version: 1.0';
 echo 'Content-Type: text/html; charset="ISO-8859-1"';
 cat $DIR_HOME/Testo_mail_attivita.html;
 echo '.';
 sleep 3;
 echo 'quit'; }|telnet 10.79.226.17 25

rm -rf $DIR_HOME/Testo_mail_attivita.html
#> /var/spool/mail/root

