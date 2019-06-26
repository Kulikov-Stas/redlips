<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'redlips');

/** Имя пользователя MySQL */
define('DB_USER', 'zazoo');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'qA3q4c9W');

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
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'CrH{;,/A5&3`<WDDW.&@!VJ7u*yxb`:a%L=+hj&}?wq.g}/&KFO%&+}SY53`bWK`');
define('SECURE_AUTH_KEY',  'FKZ9:Kg|sq18&3TF}$MKLWUJY`[0Z<5G:8mz{W.(dafIgm(w*3o>n)H=^8!k~:xP');
define('LOGGED_IN_KEY',    'Ab-tq-:/x/++B-I5$x?8%<wJR[w4^v;`rRk${0~wQd%Sd|v[n+Mr^0#%+bJtXvI>');
define('NONCE_KEY',        'Y+nbbuQMePe *pDC|x|mco/u3pcv*n|4Lt^|j,v+=<Q>]k$+6UO,DGwN_*+m[Y}&');
define('AUTH_SALT',        'nmTkBjegpO~;0lqs_H+&9@qEZ:WRrvARN++nJS5v#C*o(*L`S/={2+d$BV41zV+[');
define('SECURE_AUTH_SALT', 'w#f-[#Pog]uq-vVW?_Bt]41xPqYfYRzj#$qeDt$vt,QsPJ@xzXo?!Sf0#B*nf0^g');
define('LOGGED_IN_SALT',   'E]^R8@#]:>:(^OelAn]4h1[T_l.?tWxEN_if*[Ahwbc1y79nsB?yJ6&%R~um@-$e');
define('NONCE_SALT',       'u)u:tp5lGkd/$-JrCc~uCVi!G|+xq>-4pjRB<_vepd%BMd$NCsL#<kCauw{mu&]g');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
