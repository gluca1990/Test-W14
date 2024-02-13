<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'db_wp' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9WE7?Ir_HQ-@o]J6L_@~238/Se^T;q]Y*!.)}1vWX>ItmsvSSZ/zMMDKx*T7=`Z|' );
define( 'SECURE_AUTH_KEY',  'Ylk7[b1v+*aGXT%<6Z?.sb-va^fu;r5PYpWwP$JnjcE^P~{DT=~NuTm766l:pI3_' );
define( 'LOGGED_IN_KEY',    '!3J,9.(HZr;z;F;Yz0mNX|{jI=6gck+/iqh@$0ny*xmRAr~)7,q_Q=c;d!.}T:ey' );
define( 'NONCE_KEY',        '1>Hk_4_v=6z%DeWF}:t?s.v`-Jf<l/p!e#thx?L2j3I8G+aDXVP?iJ^=K`n!Oo2s' );
define( 'AUTH_SALT',        'aec~}ZD.]nZjlini[!rqvBo+F!X2H2JmHe+0Rh{W=?*!;b2z:VIw*pS_i2:}@k^S' );
define( 'SECURE_AUTH_SALT', 'P6d:DJ~vmE./@L<7%3O9p|Cb~}H; HBy7>^+^1/;f2tUJ{wsR-:idhz/C)1>xu=f' );
define( 'LOGGED_IN_SALT',   'yUGSM4c+QtyY2[g4N{fr!4&^x6_:{,h)^)=1b rKgszoNR^}L73&n?ZOP`,~XvY(' );
define( 'NONCE_SALT',       'kf1+yPM&#Hj;1_mPqno1^nPo_j*iNUbF|Bk87Z@;(+7|~I(  s.%hxKL=nQ1PUPT' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
