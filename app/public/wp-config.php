<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '62z8h9zVqWzMIEGZwfdld4Itb+/PmpfliH/NUkrnyJOoheerivgWWR9PxwVvGgXdLwa7pbUj2x47hcvIXrZ8rA==');
define('SECURE_AUTH_KEY',  'VmOWWJT67L6B/KaAvd2ZCvO7opueQfWlK8c+4hR3YR4+/w1qT0NPjM964b+u2dYjvJxQkDDNr6CBcwgCGKYb7w==');
define('LOGGED_IN_KEY',    'kKzoBi1TZHJZM0L/VyOtYRnJzxJ7tl4D9+iWA27BBIVLUApLxnBb7C2k/GaU8+0QPNRdFTIJHfb1sKUFXQYgqA==');
define('NONCE_KEY',        '2cWH2qfn4wDbbVevPzF0+2G/gZvwflcXt11S37ap6yKICQoDDynaZXgfyqa3NvRCkkHY0q3DX0HAC9GBiWM33Q==');
define('AUTH_SALT',        'jZDOTRLp2aPE67NeEHffL/78lmW7T+GyZDy9fx1btEJS3C/Ef2Rmfxk/EJD4Nje966ls3nwLBVo3rX8tfdmu1Q==');
define('SECURE_AUTH_SALT', 'x+ReKp/7AxdQ+yvdNPomRFsQbV6T+ajvybOqfy+1Uaodj/Z4fIxSpfMqF2QalvKaJ/0qhHOxkV3luAaTHFfg9w==');
define('LOGGED_IN_SALT',   'vVXTGCLHyUnWpYNSKzL0y6kO3COCSK9XsDCMy4g7cpmuegqaQecjuod0qruIsxbZgLkjcE37iAgocza8c2V00A==');
define('NONCE_SALT',       'D6n65pD+1PHL4vIXYnJIZ8oqBT4gutKXBcMs3FZTEu4dqPPUX55GrildI5rlDK4iG8xk3nAEU337DlLLso9pFQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
