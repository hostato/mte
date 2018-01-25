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
define('DB_NAME', 'hostato_mte');

/** Имя пользователя MySQL */
define('DB_USER', '');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'yhA]m0Ob @=[p3]V@%Jg<8QT@^L5Ytq@C*{TT4>@FZDfq`]^zjv9%no-H_K3gI7F');
define('SECURE_AUTH_KEY',  'KiCp-3lnw}?xZ~8j*0)kUGXu{2Kpmft3)&3Kr7ewPTM.9Gi/1R|TfJ+@UMbGG4H{');
define('LOGGED_IN_KEY',    'RR5[No!SLNQ0lt#X!1:Q+W=Y)X}:dx#O`f0[=ZVX!fPTyA7LQZ8/XNGgOs}k4s<0');
define('NONCE_KEY',        'WkGW}{b!7Y.JJ@o5?Y*(m/E=Ho}<1I0T7L{5]=6wmgg]&PIE.7uW[CHMR1v1:(N)');
define('AUTH_SALT',        'ol!zo5&lf.V!9N;=/e6[C~)tD=~[R8r,z8*W(`pzY~6$Kwr|6.W4u(`wzSy0>!);');
define('SECURE_AUTH_SALT', '?Mae^=0{Z_iM8.gPunH-/?2aBa{k,ZWvr7B%OCDo~I0JW;m]n8O,Tq!~z8az=`BY');
define('LOGGED_IN_SALT',   'ubDtJk5%[6gJ57]$kk`S FVOmbPsR97Ne~0?u2@@roee`6xRMuw#=qpFp<M#>mg^');
define('NONCE_SALT',       '[CC%j!}>)F/~3=y1a+oP;M6kueOm?ZE.&%k7j0X1*< V6 /V0o$=xZxG5/l|QChp');

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
