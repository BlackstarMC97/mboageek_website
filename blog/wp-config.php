<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'mboageekblog');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '!3w/[)~[tg-,s{FH~:y*w2ES>-oD+h@s,rilg=nV}Z0EKrUDAITkddguO)DLpONi');
define('SECURE_AUTH_KEY',  '3uyJ}aecXzb7Mz}7#c-X*<^JJ364k5MsskP{`5<S&C{7rp{mH8: wkDbjkTY.=`M');
define('LOGGED_IN_KEY',    'f(Jm3b=X&g*Ej,q+%_Rujj`)LwDf0KA*(0 ^[X)qwu*!S_1WdD2fK:SK)uv3N2m6');
define('NONCE_KEY',        '6#i`f3tWNH.2!XbRl;nY]gl!|FeTwP@} &8@2~;e1<`?cG@2>VXK:s2BLp+;Ti7c');
define('AUTH_SALT',        'zdMa4)<dF* siA_(TpEHb/dH0tRVb*x;*U&vw~2mkj;@nE}Rm>+LnhbvX8~P0mT:');
define('SECURE_AUTH_SALT', '^OX=d<5@=(zH<(i,L+^+&cQC[ jX_M/auSd*$N5<ggGWcD,jM`HUDg}Q#sWM4lED');
define('LOGGED_IN_SALT',   'q3W0=^c4D]y$,~[6S.#*~G8NCozGqXi;8CFy9a^0=1z?s|I}*vkgD`)!G~[0.I^M');
define('NONCE_SALT',       '8 lKOioQ-)%Xv,g`7DQP3+Q0SN&{awRvM=#*j|q~yywlW[|CfO1fwsp;gn07&Opx');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');