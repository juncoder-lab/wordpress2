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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'host1823242_childhood' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'host1823242_childhood' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'aRc0Kqxp' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'z-3>`In]Szy6M5$nTQox)qrbtzy6?+Yv~dI# E=Mz?W,C(yeTXVw<R%v/j}Nv 8>' );
define( 'SECURE_AUTH_KEY',  ';gQZIXN7}wtH+]2@,HodneQy_LZk;HGj.&nE)0.@7(Ic=H7loKq`5nM[lhy#5xMz' );
define( 'LOGGED_IN_KEY',    '|^x)cQ5I.Rm!BjNb)PZ*~bJn;UlK-Vl~ivW6:~Z/]SwI*c;%6@h,/.m5APebuCgj' );
define( 'NONCE_KEY',        '!k>8rs@q[>_W]t}2:1F*+Sm8l=VG2?oyC>?bYT.T-O{;Oj{^<gvQfGw-Fge,FUHb' );
define( 'AUTH_SALT',        '~r]rQSpi+H(i~)[S>9/ov.RB%6ml<e_>%6+Axp0vBmW,@g)S9H{>avi/5s$jFX1-' );
define( 'SECURE_AUTH_SALT', 'wdr$f?01%^.<(DG^I5dS)^^||50tm{u.L4gJ]KrV1UtU/BXOdycC_5Fa9j4`&0bT' );
define( 'LOGGED_IN_SALT',   'rO-:%n7qhB/<R:kJ;n7C(5PBS.p>iD[er5{=nPJVO,,5c@)o+N3e$5*=A<w}5?g`' );
define( 'NONCE_SALT',       '9/@.n%_nauCkZG_JLHNsgcNtX`BA[|/^dK)KU7Vw]2y`Ytndu=;p6Xll0wkQ 6>*' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
