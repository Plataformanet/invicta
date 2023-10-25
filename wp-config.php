<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'banco_invicta' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'J5jW!]cz <cDEGz<TESxb/[E*F`z|TpP+^N+Z j,j]si&W$M,X5x.q^+e{ZB2?lG');
define('SECURE_AUTH_KEY',  'gt.[)+Q+%an$}t.Gz(:A(i-Dz$4&bgIGwqZug,[n~6 ,+#~9!H uD}nLo9gefNi[');
define('LOGGED_IN_KEY',    'q&dwdE@4Ux$ nIvl.&P:l;EeI1PR)0BG%aUIAp|OA,rx~M YTZ|{^A+! iucx8 s');
define('NONCE_KEY',        ':CWm<ydKv8oQ`RuJQI:n6bDxO+xA0=$R]KD0jhWx-[>`P& f*b!c}i>-ZE+z^|db');
define('AUTH_SALT',        '=~]M8q`rA2/V|#&3OSVv#GN))h^PAv*>_3Za)@,k31NQ+T#t_GCq6)iBNuicG]Xy');
define('SECURE_AUTH_SALT', 'j8,8YJhv{t|q0 vK]58+M9$Auit0at-10?|hMCmnHLC |W=P:g/L#QP6!R#Pbky ');
define('LOGGED_IN_SALT',   'fQtGw7x3FQM%My*Rd5s1+;r/_m<|^CVLIJlvOhCXku?Xw+ExC#QDd)>aACm/6b2+');
define('NONCE_SALT',       'nO[POX*t{;BwiYamijq^jlE8A9 ePtnE8gaT21*[}UFn3OX75nyXb5o:q2-]^is}');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_inv';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
