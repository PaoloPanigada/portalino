<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file definisce le seguenti configurazioni: impostazioni MySQL,
 * Prefisso Tabella, Chiavi Segrete, Lingua di WordPress e ABSPATH.
 * E' possibile trovare ultetriori informazioni visitando la pagina: del
 * Codex {@link http://codex.wordpress.org/Editing_wp-config.php
 * Editing wp-config.php}. E' possibile ottenere le impostazioni per
 * MySQL dal proprio fornitore di hosting.
 *
 * Questo file viene utilizzato, durante l'installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web,è anche possibile copiare questo file in "wp-config.php" e
 * rimepire i valori corretti.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - E? possibile ottenere questoe informazioni
// ** dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', '2iretegas');

/** Nome utente del database MySQL */
define('DB_USER', 'admin');

/** Password del database MySQL */
define('DB_PASSWORD', '!2iReteGas=');

/** Hostname MySQL  */
define('DB_HOST', 'localhost');

/** Charset del Database da utilizare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8');

/** Il tipo di Collazione del Database. Da non modificare se non si ha
idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * E' possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * E' possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'gWgC`[{7$%=f$F4#Y:`]_VtlJ-g~YSe?///9%@]+:w-6O*SS&mA@(-L 6=uI+t=^');
define('SECURE_AUTH_KEY',  ' ,0rLT6&dYYg}9y$Q0@:,+b%I=e*a|sBX4T&XH]>!*E`N-+reoQH,GIp-jY@#43]');
define('LOGGED_IN_KEY',    'R{1U]W$/~pSA7/v4LwnA]u,XvscTjGT>MMaDG(M&:>8nj`)W@ .EC9:sf535|N`d');
define('NONCE_KEY',        '.C,0rkt-t@C/f[kUEGm1|ZteFribR7-8xq*l-G-%%[?U.MxXNYuOmz,c[GE?Si0D');
define('AUTH_SALT',        '8#C{gQ(&,or,Py;>c]_EZ,v<^A@uuv6V~w4_HY2@Y0nV^TS{6X+jkKx](#GEb7p!');
define('SECURE_AUTH_SALT', '-[9R,.D_Kd>e,$A7:=-fvT5/`/jN6IDe~5eaW|xFqjzOsDQjrCqEY0xhic{j3.G-');
define('LOGGED_IN_SALT',   '*xenI{r;y.PU~]IU6j),1VLES|1$W@4iTKDc<ms>XtSI+w-WsPc?|p(yOu}%$nW6');
define('NONCE_SALT',       'jO;H}v|&R,n.?>#o&SUwN+2HEdbUR8SRIhwZ}lQhdZpd,f&,|H/b/c G%AW+:RVa');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress .
 *
 * E' possibile avere installazioni multiple su di un unico database if you give each a unique
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix  = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * E' fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all'interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta lle variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
