#!/bin/ksh
DIR_HOME=/application/support2i/wp-content/themes/2irg/script/

applicazione=$1

MAIL(){
echo '<html>'>$DIR_HOME/Testo_mail.html
	echo '<body>'>>$DIR_HOME/Testo_mail.html
		echo '<img src="http://10.79.225.252/support2i/wp-content/uploads/2015/05/logo_2irg_websupport_email.png">'>>$DIR_HOME/Testo_mail.html
		echo '<br>'>>$DIR_HOME/Testo_mail.html
		echo '<p><small>Non rispondere a questa email generata automaticamente dal sistema gestione Change Request Lutech-WebSupport</small></p>'>>$DIR_HOME/Testo_mail.html
		echo '<br>'>>$DIR_HOME/Testo_mail.html
		echo '<br>'>>$DIR_HOME/Testo_mail.html
		echo '<p>Ricordarsi di riattivare i check sul Pioneer per la seguente applicazione!!!</p>'>>$DIR_HOME/Testo_mail.html
		echo '<table style="border-collapse: collapse;border-spacing: 2px;border: 3px solid #000000;" width="100%">'>>$DIR_HOME/Testo_mail.html
				echo '<tr style="vertical-align: top;">'>>$DIR_HOME/Testo_mail.html
					echo '<td style="color:#ffffff;background:#e12b21;font-weight:bold;border-right:1px solid #000000;border-bottom:1px solid #000000;">Applicazione</td>'>>$DIR_HOME/Testo_mail.html
					echo '<td>'$applicazione'</td>'>>$DIR_HOME/Testo_mail.html
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
 #echo 'RCPT TO:a.pisani@lutech.it';
 echo 'RCPT TO:2irg.migrazione@lutech.it';
 sleep 3;
 echo 'DATA';
 sleep 3;
 echo 'Subject: 2iReteGas - Web Support - Remind Check su Pioneer' $id_cr'';
 echo 'Mime-Version: 1.0';
 echo 'Content-Type: text/html; charset="ISO-8859-1"';
 cat $DIR_HOME/Testo_mail.html;
 echo '.';
 sleep 3;
 echo 'quit'; }|telnet 10.79.226.17 25

rm -rf $DIR_HOME/Testo_mail.html
#> /var/spool/mail/root

