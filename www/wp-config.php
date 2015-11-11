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
define('DB_NAME', 'idea');

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
define('AUTH_KEY',         'S{tD0VWd,4LOI}Mf-/Zk3qVqHL^j9I$Cx@c[-y f-rB~s1Y~E!ToNN o:egvW4if');
define('SECURE_AUTH_KEY',  'F0?mp]>$WI5<R1ym:NBT>nH);1l:HiZ&-I`)VX$s~bW@D*oyQkslYKtr}R`u|A|o');
define('LOGGED_IN_KEY',    'M{Z.uG^X2LtLtjh$XYkfy Nk{sSEZAV]AT5mITCtn(l<)gY|#AHX.O~RF!6D:QGS');
define('NONCE_KEY',        'E9nR;Rq0?7!hM$RldipO;7b<LK4{3T>|UUzR$_|ZpZf~-$i2oT&Jf)E9^=#19g7/');
define('AUTH_SALT',        'S-Vfdt,}+P&AHHci;tvxMS_,6-EvGb<+YOo=4M-ypl| =*_Es[$!:f`t$V8K3(l/');
define('SECURE_AUTH_SALT', '^U-nl<pjp Qy@LQ5U=ey!MN3:Dvolq-UtC)]YLcaM+b^gyO&E2{|!O|f-qXiFyc3');
define('LOGGED_IN_SALT',   'J~r67&.;[w@(^RwUR. |Hp^FTuF5m0bl0FpL`:H#SNOTCXrNG9LX f*XK_@k{6U-');
define('NONCE_SALT',       'L-_SF3T9m&UKz{gbg?Qgz@;Mfu3iZ$cOu91l[3_W<O;y2vf&_guRNkc,z+uM7|3w');

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
