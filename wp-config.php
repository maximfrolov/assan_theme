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
define('AUTH_KEY',         'p06uz@19-?h8c_V01[-lI+IY|6l=3PT$C.VQFR+-Qr$caf|bm:*# -Ew|E=W#8jD');
define('SECURE_AUTH_KEY',  'nO8)8NMEIdhw!CZUp/r..a_y60._4deE2C|D|^p<un8~*;3Ym1D0<wZI-D-vk-PX');
define('LOGGED_IN_KEY',    ')0[>:S82U9HzUKh+OCZ@O|?+cC|1lw4F2c?E6XKGhRLEz7+>;i6RY5A6S!F/n6`$');
define('NONCE_KEY',        'ED]W20V#$(f^yx73uo!}or+CDlL2BF]pJ%p@H[L]}{/X c{a]xRXsdsfP&Ra74]1');
define('AUTH_SALT',        '9NYc?uhZSY:?odcG1:J(9#D]x+?u:Fb|`LOc:5^qtn];X+TaNvh{Fh.aN!jo@3-v');
define('SECURE_AUTH_SALT', 'HSY$:M?[n`,xW]<~Bx((B#*}=SM2I^7n&_Wyt4cJsCWfKWDow*O8t3P$/x4ye.s:');
define('LOGGED_IN_SALT',   'BR)Kxp9>U-Mh_ab..fQjI+U`lf8m&-dGEMrWg7xVB_i-ulE{-FqQO}y{7a.b-z({');
define('NONCE_SALT',       'uLm]_,:n*&~cj,k5l4]Y.N~-JEKo5,p5UN[!~=we0H@&)l4 qlo1EcL)#8;_%h82');
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
