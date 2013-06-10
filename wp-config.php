<?php
/**
 *
 *
 *
 * @package WordPress
 */

define('DB_NAME', 'mattiasbackstrom');

define('DB_USER', 'webshop');

define('DB_PASSWORD', 'UtQ1CSq78nu');

/** MySQL-server */
define('DB_HOST', 'localhost');

define('DB_CHARSET', 'utf8');

define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-q/!O6M`R-<Y!Q1H)j[Ct?hE7_>]xf3)q1gBg% [SQvj SG]yx9g{6I>LAb[T8,j');
define('SECURE_AUTH_KEY',  '2[K-VZ>>nkE_b4V;@XHvr*X)]P1#SJBS3?NVr%bC?ZZNx:rU.rG)PiH5w)qXU_6.');
define('LOGGED_IN_KEY',    '0}=Zf|a-K1dOn,5&@*6T~[V&sq%LJT/oqdV:.$:3- [5DwtNeF=[:0xhE-,JGevI');
define('NONCE_KEY',        ']OJmk~@/p~K`,1(jA.<&,T|H]PqE4v^i*(mFF+^z;G#nHUpbMUE?v14_Q[T]&<Ay');
define('AUTH_SALT',        'k0})A3l)musjWKrA.@SR@4N)[,T>%s SgncUh5uT}!Ve9b5}qzq<zk1uPw-;++Tb');
define('SECURE_AUTH_SALT', '*400:&,{~Kxg_4ke^m6|EF$biQj!I;ONuX`jY~*KDA7^(V0yDd`a|`Pr[>[bhhg;');
define('LOGGED_IN_SALT',   'TdaOPp0>$ PdL=52{8XdR0ir^?C^*QH)0(pkrv_pkG#ce=csCow`4/_k4Y4V-- `');
define('NONCE_SALT',       'zT}bA#|8z67/4_r6:>6s2i|}aL4x YVh4d0nRg+]t7*mq$D%l?o*D.q6uHl,|nOm');

/**#@-*/

/**
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 */
$table_prefix  = 'wp_';

/**
 *
 */
define('WPLANG', 'sv_SE');

/** 
 * 
 */ 
define('WP_DEBUG', false);


if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');

