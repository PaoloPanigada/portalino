#!/bin/ksh
DIR_HOME=/application/support2i/wp-content/themes/2irg/script/

url=$1
allegato=`echo "$url" | awk -F"/" '
{
 $1=$2=$3=""
 gsub(/\?.*/,"",$NF)
 print substr($0,3)
}' OFS="/"`

mailx -S smtp='10.79.226.17' -r 'LutechWebSupport@2iretegas.it' -s '2iReteGas - Web Support - Richiesta trasporto CR' -a '/application'$allegato'' -c '2IRG.MIGRAZIONE@lutech.it' -v 'Remote-Services@bgp.it' < ''$DIR_HOME'body.txt'

#mailx -S smtp='10.79.226.17' -r 'LutechWebSupport@2iretegas.it' -s '2iReteGas - Web Support - Richiesta trasporto CR' -a '/application'$allegato'' -c 'andrea.pisani1405@gmail.com' -v 'a.pisani@lutech.it' < 'body.txt'


#> /var/spool/mail/root

