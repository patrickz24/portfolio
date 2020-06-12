<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'patrick' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'b' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'JAPPs<-C]Gfqh)9n5=,>{{}3P~}$IV3R ^}iNom1K3n<U}6ccf1!Z@lVJf;G!8Fj' );
define( 'SECURE_AUTH_KEY',  'Z@RvLcR{Wk3Z:[uLAhk*5K`(Bst{cKkg^ZXu1I8]`Y4&<pN%U[R),RnQLh%o<J9q' );
define( 'LOGGED_IN_KEY',    'b3$?S]>zEZl7#pYYEQR!0qkP{C<GAbkC~,hBMM@eH&ghEc oWwWg!]!On?4%.[(X' );
define( 'NONCE_KEY',        'L.Q2[HJXdu!U2R!t_-Cv1kaHx=Ilew~psg(51V@B+pj.3@;FsyvV<-S#HKYw)qB!' );
define( 'AUTH_SALT',        'Z%n4O[@.Q !I#QIn?y?b!iQ&HUUY$n}b?=s=Tu9-ZprIJHi0*b-=f ;RK_d(6$=u' );
define( 'SECURE_AUTH_SALT', 'Av`R ;Imv4dvqO95RhN`-Rj&D5GERpp*070D@-|iz5GUx@|>}PqN+*69^xy[=XwN' );
define( 'LOGGED_IN_SALT',   '$X]f?nS]~nJ_`D80y{!3|[PGz07A*>yO_?nTt#dE)a2Q:bhJ/3</HS .CQz,KqBv' );
define( 'NONCE_SALT',       '7_cL@b- -3!aX`*FRoCao}Zdv4baR1B01S#(X.Szrn8Y|*YG-4mQ6X.WJ;b#N1wa' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

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
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
