<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'flashdance');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'PTWu5$fQm@e}LbM6Ct,s/Tnaq(Vr]&B9&znnX?%[^E&#!HE8w5<|{]rgbGX)^Oky');
define('SECURE_AUTH_KEY', ']=m4):Oe XM`q-ut7j].ueFFA#Wy%BSb&}{:T. qZ]!3Oi4E*a#@-;^CMPb-9Xr@');
define('LOGGED_IN_KEY', '%&|YTW91K3w$ZWD3NE@kK:UDn&F.$6@S!8!0kk%XH+SPyzO@PkY0]HM]aySc=_.u');
define('NONCE_KEY', 'k=BBjN4FYF9fRGO$vk;,bQYD1b]1+hY+>8 hT<hGi5cLH??@gkM9#^B[[E~U5=y|');
define('AUTH_SALT', 'X!6=$>k[he(r9V6Om7R;FfHHtGz `rmr6[#N+g+3;Nlwj#{+`eJ<(B),D?&g]PLf');
define('SECURE_AUTH_SALT', '9Ed/o*SG_D[1+ECS<mP8yR:L1zdunRZTAX..L=+:a1w>ug,TksG/@w;XngTBVJo0');
define('LOGGED_IN_SALT', '/xHT0lW^X&,,_>uz[?[,Z+j]CLw_K3>Kt3~GN+Al_S]JR06x-:f?p|>Zv-zaV=bU');
define('NONCE_SALT', 'RU@=<ApcS-S=cL)qOGQ5m_~vm@+WS8tj!r87aCrLRPv)!xY+7x{78=$;qfHGJg>-');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'pgbfl4s_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', true);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

