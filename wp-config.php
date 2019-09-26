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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'wordpress' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'wordpress' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '?.[jJTJH`W*lHS?dhviH-zUcjbG&nw5PwZN(:d9t=f-v8~Umzs@*3)2*@},O}}wY' );
define( 'SECURE_AUTH_KEY',  'GQ]5<-cV;MC=4y>$a6gmK2?yW[1anUFa%`MalJ,)-_!ha3CH%#=MiUi58kj$m[%t' );
define( 'LOGGED_IN_KEY',    'H<Yg@F,=gx1-#~J]2nws`|aK5zBT^Yo]BXPwy*TB2b3C`KlUp2p0-5Rk4%uX#NpA' );
define( 'NONCE_KEY',        '|.t{8 W(VOx/^G9^3UC`w5aQ 9|X(Gn]Ab:BYW7)k0~-Q>!zEfM*qch,s-YExa7{' );
define( 'AUTH_SALT',        'hhIwviG#yVQt($}-C>MU8#X]!%|]8)QL&^3sEs|5ReW>BKrq&oiw%=!.6(t0t$(:' );
define( 'SECURE_AUTH_SALT', '`!tYB)+x;}@qJ5?<~M4]L((#cK2tiC^k%s-zPTnl_y 7b-j %w#8sy:2G.!<s6KJ' );
define( 'LOGGED_IN_SALT',   'SR{PBt4u9Ag)3A=^OCF!KS@PM9f4L^FR$>$0~,d,__+5GBT(6;ySrLU-9a Nl55D' );
define( 'NONCE_SALT',       '~|fP@o am@d{bjh}Yl{b0[(4?~_-a~qkg5#r,_GR4xU}:x(`Qz+U*Tj7YttkR={m' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
