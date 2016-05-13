#!/bin/ksh
DIR_HOME=/application/support2i/wp-content/themes/2irg/script/

applicazione=$1
data_applicazione=$2
ora_applicazione=$3
data_ricezione=$4
emergenza=$5
id_cr=$6
stato=$7
assegnatario=$8
durata=${9}
tipologia=${10}
promemoria=${11}
trasporto=${12}
note=${13}
allegato=${14}
MAIL(){
echo '<html>'>$DIR_HOME/Testo_mail.html
	echo '<body>'>>$DIR_HOME/Testo_mail.html
		echo '<img src="http://10.79.225.252/support2i/wp-content/uploads/2015/05/logo_2irg_websupport_email.png">'>>$DIR_HOME/Testo_mail.html
		echo '<br>'>>$DIR_HOME/Testo_mail.html
		echo '<p><small>Non rispondere a questa email generata automaticamente dal sistema gestione Change Request Lutech-WebSupport</small></p>'>>$DIR_HOME/Testo_mail.html
		echo '<br>'>>$DIR_HOME/Testo_mail.html
		echo '<table style="border-collapse: collapse;border-spacing: 2px;border: 3px solid #000000;" width="100%">'>>$DIR_HOME/Testo_mail.html
				echo '<tr style="vertical-align: top;">'>>$DIR_HOME/Testo_mail.html
					echo '<td style="color:#ffffff;background:#e12b21;font-weight:bold;border-right:1px solid #000000;border-bottom:1px solid #000000;">Applicazione</td>'>>$DIR_HOME/Testo_mail.html
					echo '<td>'$applicazione'</td>'>>$DIR_HOME/Testo_mail.html
				echo '</tr>'>>$DIR_HOME/Testo_mail.html
				echo '<tr style="vertical-align: top;">'>>$DIR_HOME/Testo_mail.html
					echo '<td style="color:#ffffff;background:#e12b21;font-weight:bold;border-right:1px solid #000000;border-bottom:1px solid #000000;">Data applicazione</td>'>>$DIR_HOME/Testo_mail.html
					echo '<td>'$data_applicazione'</td>'>>$DIR_HOME/Testo_mail.html
				echo '</tr>'>>$DIR_HOME/Testo_mail.html
				echo '<tr style="vertical-align: top;">'>>$DIR_HOME/Testo_mail.html
					echo '<td style="color:#ffffff;background:#e12b21;font-weight:bold;border-right:1px solid #000000;border-bottom:1px solid #000000;">Ora applicazione</td>'>>$DIR_HOME/Testo_mail.html
					echo '<td>'$ora_applicazione'</td>'>>$DIR_HOME/Testo_mail.html
				echo '</tr>'>>$DIR_HOME/Testo_mail.html
				echo '<tr style="vertical-align: top;">'>>$DIR_HOME/Testo_mail.html
					echo '<td style="color:#ffffff;background:#e12b21;font-weight:bold;border-right:1px solid #000000;border-bottom:1px solid #000000;">Data ricezione</td>'>>$DIR_HOME/Testo_mail.html
					echo '<td>'$data_ricezione'</td>'>>$DIR_HOME/Testo_mail.html
				echo '</tr>'>>$DIR_HOME/Testo_mail.html
				echo '<tr style="vertical-align: top;">'>>$DIR_HOME/Testo_mail.html
					echo '<td style="color:#ffffff;background:#e12b21;font-weight:bold;border-right:1px solid #000000;border-bottom:1px solid #000000;">Emergenza</td>'>>$DIR_HOME/Testo_mail.html
					echo '<td>'$emergenza'</td>'>>$DIR_HOME/Testo_mail.html
				echo '</tr>'>>$DIR_HOME/Testo_mail.html
				echo '<tr style="vertical-align: top;">'>>$DIR_HOME/Testo_mail.html
					echo '<td style="color:#ffffff;background:#e12b21;font-weight:bold;border-right:1px solid #000000;border-bottom:1px solid #000000;">Identificativo</td>'>>$DIR_HOME/Testo_mail.html
					echo '<td>'$id_cr'</td>'>>$DIR_HOME/Testo_mail.html
				echo '</tr>'>>$DIR_HOME/Testo_mail.html
				echo '<tr style="vertical-align: top;">'>>$DIR_HOME/Testo_mail.html
					echo '<td style="color:#ffffff;background:#e12b21;font-weight:bold;border-right:1px solid #000000;border-bottom:1px solid #000000;">Stato</td>'>>$DIR_HOME/Testo_mail.html
					echo '<td>'$stato'</td>'>>$DIR_HOME/Testo_mail.html
				echo '</tr>'>>$DIR_HOME/Testo_mail.html
				echo '<tr style="vertical-align: top;">'>>$DIR_HOME/Testo_mail.html
					echo '<td style="color:#ffffff;background:#e12b21;font-weight:bold;border-right:1px solid #000000;border-bottom:1px solid #000000;">Durata</td>'>>$DIR_HOME/Testo_mail.html
					echo '<td>'$durata'</td>'>>$DIR_HOME/Testo_mail.html
				echo '</tr>'>>$DIR_HOME/Testo_mail.html
				echo '<tr style="vertical-align: top;">'>>$DIR_HOME/Testo_mail.html
					echo '<td style="color:#ffffff;background:#e12b21;font-weight:bold;border-right:1px solid #000000;border-bottom:1px solid #000000;">Tipologia</td>'>>$DIR_HOME/Testo_mail.html
					echo '<td>'$tipologia'</td>'>>$DIR_HOME/Testo_mail.html
				echo '</tr>'>>$DIR_HOME/Testo_mail.html
				echo '<tr style="vertical-align: top;">'>>$DIR_HOME/Testo_mail.html
					echo '<td style="color:#ffffff;background:#e12b21;font-weight:bold;border-right:1px solid #000000;border-bottom:1px solid #000000;">Assegnatario</td>'>>$DIR_HOME/Testo_mail.html
					echo '<td>'$assegnatario'</td>'>>$DIR_HOME/Testo_mail.html
				echo '</tr>'>>$DIR_HOME/Testo_mail.html
				echo '<tr style="vertical-align: top;">'>>$DIR_HOME/Testo_mail.html
					echo '<td style="color:#ffffff;background:#e12b21;font-weight:bold;border-right:1px solid #000000;border-bottom:1px solid #000000;">Trasporto</td>'>>$DIR_HOME/Testo_mail.html
					echo '<td>'$trasporto'</td>'>>$DIR_HOME/Testo_mail.html
				echo '</tr>'>>$DIR_HOME/Testo_mail.html
				echo '<tr style="vertical-align: top;">'>>$DIR_HOME/Testo_mail.html
					echo '<td style="color:#ffffff;background:#e12b21;font-weight:bold;border-right:1px solid #000000;border-bottom:1px solid #000000;">Promemoria</td>'>>$DIR_HOME/Testo_mail.html
					echo '<td>'$promemoria'</td>'>>$DIR_HOME/Testo_mail.html
				echo '</tr>'>>$DIR_HOME/Testo_mail.html
				echo '<tr style="vertical-align: top;">'>>$DIR_HOME/Testo_mail.html
					echo '<td style="color:#ffffff;background:#e12b21;font-weight:bold;border-right:1px solid #000000;border-bottom:1px solid #000000;">Note</td>'>>$DIR_HOME/Testo_mail.html
					echo '<td>'$note'</td>'>>$DIR_HOME/Testo_mail.html
				echo '</tr>'>>$DIR_HOME/Testo_mail.html
				echo '<tr style="vertical-align: top;">'>>$DIR_HOME/Testo_mail.html
					echo '<td style="color:#ffffff;background:#e12b21;font-weight:bold;border-right:1px solid #000000;border-bottom:1px solid #000000;">Allegato</td>'>>$DIR_HOME/Testo_mail.html
					echo '<td>'$allegato'</td>'>>$DIR_HOME/Testo_mail.html
				echo '</tr>'>>$DIR_HOME/Testo_mail.html
		echo '</table>'>>$DIR_HOME/Testo_mail.html		
	echo '</body>'>>$DIR_HOME/Testo_mail.html
	echo '<br>'>>$DIR_HOME/Testo_mail.html
	echo '<br>'>>$DIR_HOME/Testo_mail.html
	echo "<p>Per maggiori informazioni consultare: <a href='http://10.79.225.252/support2i/change-request/'>2iReteGas - Web Support</a></p>">>$DIR_HOME/Testo_mail.html
	echo '<br>'>>$DIR_HOME/Testo_mail.html
	echo '<br>'>>$DIR_HOME/Testo_mail.html
echo '</html>'>>$DIR_HOME/Testo_mail.html

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
 echo 'RCPT TO:a.pisani@lutech.it';
 #echo 'RCPT TO:2irg.migrazione@lutech.it';
 sleep 3;
 echo 'DATA';
 sleep 3;
 echo 'Subject: 2iReteGas - Web Support - Promemoria installazione CR' $id_cr'';
 echo 'Mime-Version: 1.0';
 echo 'Content-Type: text/html; charset="ISO-8859-1"';
 cat $DIR_HOME/Testo_mail.html;
 echo '.';
 sleep 3;
 echo 'quit'; }|telnet 10.79.226.17 25

rm -rf $DIR_HOME/Testo_mail.html
#> /var/spool/mail/root

