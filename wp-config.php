<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'assan');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'TMu-E)PvFF UC9=oiH78=&]AJt8nB?ye6WU(Z|=ALLm+Q;N@NOO4xiafpmpZE<rR');
define('SECURE_AUTH_KEY',  ';fapu@X{($5E@Cfw<dRsR|^?~s{rzpetqpa&l*Fq*roR^cZ6tkxf])w:cM&4G@|3');
define('LOGGED_IN_KEY',    'kr]TSV3ghv+?x&3jm4hU2FRla<ZiERs!Q7O$ iT%+~%QxIA._8;*|lrr0xR8?waV');
define('NONCE_KEY',        '3=.[KKklY|~/OX ?/<Ss#3oFPTDHSa4yF]}ZUspsJi.D$q7Bn:~_-}wm[z-4JT0B');
define('AUTH_SALT',        ':VA@fzh15?tRm:StST4]b)Xf16kX_|fL[:-C~WxZM|N+D--ACd ;1}E<|+.RAq_1');
define('SECURE_AUTH_SALT', '].l}e%#zb8TpI+,JCnFMrmSz.8qI}@<@Y0[C>4wIR;ix-K ~6S{b5u0>)`D;xIQ9');
define('LOGGED_IN_SALT',   'Z[3^UYF|eosw1&nuuC2<W|oQK}hZ}Q1F`ae+pkd-I+:I[LNMy&1E&&kXryz-g1^{');
define('NONCE_SALT',       '^AqE}S{Wrc,DXww`l,E(/|37(~$w3f%iJ-jZzi&%19@oh&.}b|^ujw%Sk$TM6GU@');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
