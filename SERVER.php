<?php
echo "<pre>";
// print_r($_SERVER);

echo "<pre>";
print_r($_SERVER['HTTP_HOST']); // хост
echo " HTTP_HOST";

echo "<pre>";
print_r($_SERVER['HTTP_CONNECTION']); // з'эднання
echo " HTTP_CONNECTION";

echo "<pre>";
print_r($_SERVER['HTTP_PRAGMA']); // кеш, чи вкл
echo " isset HTTP_PRAGMA";

echo "<pre>";
print_r($_SERVER['HTTP_CACHE_CONTROL']); // кеш контроль
echo " HTTP_CACHE_CONTROL";

echo "<pre>";
print_r($_SERVER['HTTP_UPGRADE_INSECURE_REQUESTS']); // ?
echo " HTTP_UPGRADE_INSECURE_REQUESTS";

echo "<pre>";
print_r($_SERVER['HTTP_USER_AGENT']); // тип, версыя браузера, ОС, марка тел, пошуковы роботи
echo " HTTP_USER_AGENT";

echo "<pre>";
print_r($_SERVER['HTTP_ACCEPT']); // перевага відносно типу докум клуєнта
echo " HTTP_ACCEPT";

echo "<pre>";
print_r($_SERVER['HTTP_REFERER']); // адреса сторінки, з якої користувач перейшов
echo " HTTP_REFERER";

echo "<pre>";
print_r($_SERVER['HTTP_ACCEPT_ENCODING']); // заголовок Accept-Encoding
echo " HTTP_ACCEPT_ENCODING";

echo "<pre>";
print_r($_SERVER['HTTP_ACCEPT_LANGUAGE']); // переваги на мову, опридулення національної приналежності користувача, придлизна оцінка
echo " HTTP_ACCEPT_LANGUAGE";

echo "<pre>";
print_r($_SERVER['HTTP_COOKIE']); // куки
echo " HTTP_COOKIE";

echo "<pre>";
print_r($_SERVER['PATH']); // системна переміна PATH 
echo " PATH";

echo "<pre>";
print_r($_SERVER['SystemRoot']); // системна папка
echo " SystemRoot";

echo "<pre>";
print_r($_SERVER['COMSPEC']); // термінал
echo " COMSPEC";

echo "<pre>";
print_r($_SERVER['PATHEXT']); // розширення файлів
echo " PATHEXT";

echo "<pre>";
print_r($_SERVER['WINDIR']); // папка з ОС
echo " WINDIR";

echo "<pre>";
print_r($_SERVER['SERVER_SIGNATURE']); // версія сервера та ім'я віртуального хоста, якщо вкл
echo " SERVER_SIGNATURE";

echo "<pre>";
print_r($_SERVER['SERVER_SOFTWARE']); // інфа про веб сервер
echo " SERVER_SOFTWARE";

echo "<pre>";
print_r($_SERVER['SERVER_NAME']); // ім'я сервера, часто зівпадає з доменним ім'ям
echo " SERVER_NAME";

echo "<pre>";
print_r($_SERVER['SERVER_ADDR']); // IP-адрес сервера
echo " SERVER_ADDR";

echo "<pre>";
print_r($_SERVER['SERVER_PORT']); // порт сервера який прослуховується
echo " SERVER_PORT";

echo "<pre>";
print_r($_SERVER['REMOTE_ADDR']); // ІP-адрес клієнта
echo " REMOTE_ADDR";

echo "<pre>";
print_r($_SERVER['DOCUMENT_ROOT']); // шлях до кореня каталога сервера
echo " DOCUMENT_ROOT";

echo "<pre>";
print_r($_SERVER['REQUEST_SCHEME']); // протокол по якому відкрита сторінка
echo " REQUEST_SCHEME";

echo "<pre>";
print_r($_SERVER['CONTEXT_PREFIX']); // ?
echo " CONTEXT_PREFIX";

echo "<pre>";
print_r($_SERVER['CONTEXT_DOCUMENT_ROOT']); // ?
echo " CONTEXT_DOCUMENT_ROOT";

echo "<pre>";
print_r($_SERVER['SERVER_ADMIN']); // файл конфігурації веб-сервера
echo " SERVER_ADMIN";

echo "<pre>";
print_r($_SERVER['SCRIPT_FILENAME']); // повний шлях та ім'я даного скрипта
echo " SCRIPT_FILENAME";

echo "<pre>";
print_r($_SERVER['REMOTE_PORT']); // Порт який використовується на комп'ютері користувача, щоб спілкуватися з веб-сервера
echo " REMOTE_PORT";

echo "<pre>";
print_r($_SERVER['GATEWAY_INTERFACE']); // версія CGI, яка використ сервером
echo " GATEWAY_INTERFACE";

echo "<pre>";
print_r($_SERVER['SERVER_PROTOCOL']); // версія HTTP-протокола
echo " SERVER_PROTOCOL";

echo "<pre>";
print_r($_SERVER['REQUEST_METHOD']); // GET чи POST метод, який використ для виклику скрипта
echo " REQUEST_METHOD";

echo "<pre>";
print_r($_SERVER['QUERY_STRING']); // параметри передані скрипту методом GET
echo " QUERY_STRING";

echo "<pre>";
print_r($_SERVER['REQUEST_URI']); // шлях скрипта від корневого каталога хоста та ім'я його + передані параметри методом GET
echo " REQUEST_URI";

echo "<pre>";
print_r($_SERVER['SCRIPT_NAME']); // ім'я скрипта
echo " SCRIPT_NAME";

echo "<pre>";
print_r($_SERVER['PHP_SELF']); // ім'я скрипта
echo " PHP_SELF";

echo "<pre>";
print_r($_SERVER['REQUEST_TIME_FLOAT']); // Тимчасова мітка початку запиту з точністю до мікросекундб з плавающою точкою
echo " REQUEST_TIME_FLOAT";

echo "<pre>";
print_r($_SERVER['REQUEST_TIME']); // Час початку запиту веб-сторінки в UNIX-форматі (PHP 5.1.0)
echo " REQUEST_TIME";

echo "<pre>";
print_r($_SERVER['argv']); // масив аргументів, переданих 
echo " argv";

/*
echo "\n";
echo $_SERVER['ALLUSERSPROFILE'];
echo "\n";
echo $_SERVER['ANSICON'];
echo "\n";
echo $_SERVER['ANSICON_DEF'];
echo "\n";
echo $_SERVER['APPDATA'];
echo "\n";
echo $_SERVER['CommonProgramFiles'];
echo "\n";
echo $_SERVER['CommonProgramFiles(x86)'];
echo "\n";
echo $_SERVER['CommonProgramW6432'];
echo "\n";
echo $_SERVER['COMPUTERNAME'];
echo "\n";
echo $_SERVER['ConEmuANSI'];
echo "\n";
echo $_SERVER['ConEmuAnsiLog'];
echo "\n";
echo $_SERVER['ConEmuArgs'];
echo "\n";
echo $_SERVER['ConEmuArgs2'];
echo "\n";
echo $_SERVER['ConEmuBackHWND'];
echo "\n";
echo $_SERVER['ConEmuBaseDir'];
echo "\n";
echo $_SERVER['ConEmuBuild'];
echo "\n";
echo $_SERVER['ConEmuConfig'];
echo "\n";
echo $_SERVER['ConEmuDir'];
echo "\n";
echo $_SERVER['ConEmuDrawHWND'];
echo "\n";
echo $_SERVER['ConEmuDrive'];
echo "\n";
echo $_SERVER['ConEmuHooks'];
echo "\n";
echo $_SERVER['ConEmuHWND'];
echo "\n";
echo $_SERVER['ConEmuIsAdmin'];
echo "\n";
echo $_SERVER['ConEmuPalette'];
echo "\n";
echo $_SERVER['ConEmuPID'];
echo "\n";
echo $_SERVER['ConEmuPrompt0'];
echo "\n";
echo $_SERVER['ConEmuPrompt1'];
echo "\n";
echo $_SERVER['ConEmuPrompt2'];
echo "\n";
echo $_SERVER['ConEmuPrompt3'];
echo "\n";
echo $_SERVER['ConEmuServerPID'];
echo "\n";
echo $_SERVER['ConEmuTask'];
echo "\n";
echo $_SERVER['ConEmuWorkDir'];
echo "\n";
echo $_SERVER['ConEmuWorkDrive'];
echo "\n";
echo $_SERVER['ERLANG_HOME'];
echo "\n";
echo $_SERVER['FP_NO_HOST_CHECK'];
echo "\n";
echo $_SERVER['HOME'];
echo "\n";
echo $_SERVER['HOMEDRIVE'];
echo "\n";
echo $_SERVER['HOMEPATH'];
echo "\n";
echo $_SERVER['JAVA_HOME'];
echo "\n";
echo $_SERVER['LOCALAPPDATA'];
echo "\n";
echo $_SERVER['LOGONSERVER'];
echo "\n";
echo $_SERVER['MAGICK_CODER_FILTER_PATH'];
echo "\n";
echo $_SERVER['MAGICK_CODER_MODULE_PATH'];
echo "\n";
echo $_SERVER['MAGICK_CONFIGURE_PATH'];
echo "\n";
echo $_SERVER['MAGICK_HOME'];
echo "\n";
echo $_SERVER['MAGICK_TEMPORARY_PATH'];
echo "\n";
echo $_SERVER['NUMBER_OF_PROCESSORS'];
echo "\n";
echo $_SERVER['OPENSSL_CONF'];
echo "\n";
echo $_SERVER['OS'];
echo "\n";
echo $_SERVER['PHPBIN'];
echo "\n";
echo $_SERVER['PHPDIR'];
echo "\n";
echo $_SERVER['PHPRC'];
echo "\n";
echo $_SERVER['PHP_BIN'];
echo "\n";
echo $_SERVER['PHP_BINARY'];
echo "\n";
echo $_SERVER['PHP_BINDIR'];
echo "\n";
echo $_SERVER['PHP_DIR'];
echo "\n";
echo $_SERVER['PHP_INI'];
echo "\n";
echo $_SERVER['PHP_PEAR_BIN_DIR'];
echo "\n";
echo $_SERVER['PHP_PEAR_DATA_DIR'];
echo "\n";
echo $_SERVER['PHP_PEAR_DOC_DIR'];
echo "\n";
echo $_SERVER['PHP_PEAR_INSTALL_DIR'];
echo "\n";
echo $_SERVER['PHP_PEAR_PHP_BIN'];
echo "\n";
echo $_SERVER['PHP_PEAR_SYSCONF_DIR'];
echo "\n";
echo $_SERVER['PHP_PEAR_TEST_DIR'];
echo "\n";
echo $_SERVER['PLINK_PROTOCOL'];
echo "\n";
echo $_SERVER['PROCESSOR_ARCHITECTURE'];
echo "\n";
echo $_SERVER['PROCESSOR_IDENTIFIER'];
echo "\n";
echo $_SERVER['PROCESSOR_LEVEL'];
echo "\n";
echo $_SERVER['PROCESSOR_REVISION'];
echo "\n";
echo $_SERVER['ProgramData'];
echo "\n";
echo $_SERVER['ProgramFiles'];
echo "\n";
echo $_SERVER['ProgramFiles(x86)'];
echo "\n";
echo $_SERVER['ProgramW6432'];
echo "\n";
echo $_SERVER['PROMPT'];
echo "\n";
echo $_SERVER['PSModulePath'];
echo "\n";
echo $_SERVER['PUBLIC'];
echo "\n";
echo $_SERVER['SESSIONNAME'];
echo "\n";
echo $_SERVER['SystemDrive'];
echo "\n";
echo $_SERVER['TEMP'];
echo "\n";
echo $_SERVER['TERM'];
echo "\n";
echo $_SERVER['TMP'];
echo "\n";
echo $_SERVER['USERDOMAIN'];
echo "\n";
echo $_SERVER['USERNAME'];
echo "\n";
echo $_SERVER['USERPROFILE'];
echo "\n";
echo $_SERVER['VBOX_INSTALL_PATH'];
echo "\n";
echo $_SERVER['windows_tracing_flags'];
echo "\n";
echo $_SERVER['windows_tracing_logfile'];
echo "\n";
echo $_SERVER['PATH_TRANSLATED'];