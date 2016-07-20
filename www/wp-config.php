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
define('DB_NAME', 'thesyncspot2');

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
define('AUTH_KEY',         '$9Q-krP<&XwXpHw#bMLfPR2zh;&KqPYd?DKH#1nt ?MAmO!5s2+:@_uS/ieyp2EJ');
define('SECURE_AUTH_KEY',  'JosHH{0+rHms!kki<i*WmNENDsRyc;Qz%2n1%i W2b6j54$L^Fv<T[]mD|V:lj*6');
define('LOGGED_IN_KEY',    '}d+PGDA%Txt!PiG0 t~S.y=C#gahN#u?J[$TAlNd`0ssvEBo5CwRu[0ww,X7()l1');
define('NONCE_KEY',        'av67M7%-7>-g%_Hlv&.tTjs{&p?yF*(E6|<P)c`%?_ Vq!0un_HX_Xh-a@N$u-]i');
define('AUTH_SALT',        'z#)L0j(O(c6/7PN/1L_*IpyFvzf]:*g>W?s4y 3NYz2Hg$Si(<6Hi]M<q%Mya4?W');
define('SECURE_AUTH_SALT', 'WiB$XHVxNafQ>ZGW)-l!lN3]d|vbrGsJ}|w*ohZ.D;{<g1wE~hQU-q+}OOO^^T9k');
define('LOGGED_IN_SALT',   'V9xSJ##sG^1NO^~yPva$@^T}#<kXhwHl7 qztKh-WM*t(.Et=G-WZSh+D>mX<.cO');
define('NONCE_SALT',       '}V,|e4>o zX}HeH8)X.XVhYe.2!Fup<D8|v5K{bO%^p^{O{g.`4Er3rWk!hBO`:H');

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
