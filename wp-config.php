<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'project' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'QP+Y~^yiX@cfLqfX-gJaHz,,ucYJ-xdTIw+{FJW0s{$ZhmH^G4Dk@R)o`tG@w6 z' );
define( 'SECURE_AUTH_KEY',  'PokA#y2]4^oV)~gW#td%aX6#!YMrk{5uE[|Uj=.94Y)s|1.2tYOU>2APvinSm2,{' );
define( 'LOGGED_IN_KEY',    'NwWK!b*`RlP`h:#TC~>0<v|/Sr>TFqqR.iu~m&k2u.>?f@d&>|at831iH$QatdRs' );
define( 'NONCE_KEY',        '3xJU2xH,}yK{>GON!rJX|PNP1m^k4W|-A7obK+@N>kz}(jWv:zUhw#54-?RAu_S/' );
define( 'AUTH_SALT',        '],E 6i]eK%&4o%CyCqV*Y=^*cEcyjb/!Z=E{|g@cN#SIg,1Cihfq)OQq;n?:#5{M' );
define( 'SECURE_AUTH_SALT', '8QGM,0Wr/0)&hv4vqHD&FNaDHt$X4hOrH@i)8dJ3vKQt==4d&A7iN#tHn94k7 a-' );
define( 'LOGGED_IN_SALT',   'I2;SNcce_8DAN>I@{22(<BK]>|F0nFmkD?ACYGY;.@Uilo`M/;4sZc&N`A]DWk5Y' );
define( 'NONCE_SALT',       '{0`Qo^0A/t#{YR+hF)Rsa6R3|^) v^L/hMy6?EPxw^KR>m%|Js_<AJ=P{^`g7DBE' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
