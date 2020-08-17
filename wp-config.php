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
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ':J-M]6&`?/CSq6O$1~9`$5 x@d6S{dG!fd|ExquyEbz2ehSTc_U2:zrP=&}SfskD' );
define( 'SECURE_AUTH_KEY',  'sCw(Z:/e3G.QzX/}~2@nM4(#=a:_U)#Tx?Yi;fx8Lu$h$xQRM_BR#HE~s_/*5k=a' );
define( 'LOGGED_IN_KEY',    'W6MwB^+B[VDO?.`}#Bpqix+EFMO@D^k%8mVhp$u+MId_0V=NI*sy^IJGl%_|dfwV' );
define( 'NONCE_KEY',        'QfJoqe4btJCr3:c;Et5JlMrTl}cx%t 5kEEF#f8,Kl%cLKs)=F4e*e>n:t/^L;nQ' );
define( 'AUTH_SALT',        'BQ}AUCxB3Ct]vz8QHDb4;i6{-i1^O5Gq:V@~/*,!k!ZD}sNLqF;_.B>a0kHZORUs' );
define( 'SECURE_AUTH_SALT', 'Bf{a|8):YZnrjubW@`$[v,& =G(o9bM_O>S=E=%<3g3y[AlS~(O!HVNMgMBHbOs{' );
define( 'LOGGED_IN_SALT',   '#!_NZUCxMzk$;Yo#!*jKT)w^SABjOgE%Q_y:8X#I1(bU:N`CK)_2;V5s`JZRV.#D' );
define( 'NONCE_SALT',       'lMfp (so{kDJF-wd9c,R|()YnIe3s3-}&^sj[@|.@*QY5IFXNi3Ef}]2QqIi.R/&' );
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
