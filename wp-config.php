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
define('DB_NAME', 'tiptop');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

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
define('AUTH_KEY',         'tG9YDv@AeF9?,at+WPAdD~TY Awf(-1QK^?h(EoCb#>eekJuH9b6KO{_9/b;GVGv');
define('SECURE_AUTH_KEY',  'DHg:?t/k#gr_1@eK2AU@DCHO`LUPE9/Fz]s]8gS;B2[aosgDWM.}*JA9T+fgSS]:');
define('LOGGED_IN_KEY',    '1gXMM9!%fMx&-S~fSJq.$NnAGU!I)lh8y>#LI?5},pgQ%=k|,#})Q|=Sjr>+y)hg');
define('NONCE_KEY',        'p/o-GM(&}B7OGDl~{72LAcF8y$Qjb|pj;50r3ib!4vm-g4H^~HHK}EmKyyrJeAM(');
define('AUTH_SALT',        '87p%O*5sTAH%X)0#@}wS[[sr=F!gAJwVG6a)$X=c&?d~:XyM}E[X|fx::n`/zc`y');
define('SECURE_AUTH_SALT', ',1dYM2kT&[h*V>8L[}71Hl{}D,6$W#NAzYMNd{F$UT!2fl8^6~!,=CEmBel?9,tK');
define('LOGGED_IN_SALT',   'd9!Hqa]XP=V+`{i!|awxuF6Ao0t2RLTaIm:|wr1_*xop#)FN:^|PI6cH;~n>!HIu');
define('NONCE_SALT',       'MOY<Ix?@D^bUwmXa+lU.NGig7B[pKBpQv>n3EoZ1%id{&X>+Oyi`Nu8*2rJQP/78');

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
