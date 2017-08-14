<?php
function myErrorHandler($errno, $errstr, $errfile, $errline)
{
	echo "\n@Error found!\n";

    switch ($errno) {

    case E_WARNING:
        echo "<b>**E_WARNING</b> [$errno] $errstr<br />\n";
        break;

    case E_NOTICE:
        echo "<b>**E_NOTICE</b> [$errno] $errstr<br />\n";
        break;

    case E_USER_WARNING:
        echo "<b>**E_USER_WARNING</b> [$errno] $errstr<br />\n";
        break;

    case E_USER_ERROR:
        echo "<b>**E_USER_ERROR</b> [$errno] $errstr<br />\n";
        break;

    case E_USER_NOTICE:
        echo "<b>**E_USER_NOTICE</b> [$errno] $errstr<br />\n";
        break;

    case E_STRICT:
        echo "<b>**E_STRICT</b> [$errno] $errstr<br />\n";
        break;

    case E_DEPRECATED:
        echo "<b>**E_DEPRECATED</b> [$errno] $errstr<br />\n";
        break;

    case E_USER_DEPRECATED:
        echo "<b>**E_USER_DEPRECATED</b> [$errno] $errstr<br />\n";
        break;

    case E_RECOVERABLE_ERROR:
        echo "<b>**E_RECOVERABLE_ERROR</b> [$errno] $errstr<br />\n";
        break;

    default:
        echo "**Неизвестная ошибка: [$errno] $errstr<br />\n";
        break;
    }
    return true;
}
function myExceptionHandler( $e ){
    echo "\n<b>**Fatal:: Code(" . $e->getCode() . ") : " . $e->getMessage() . "</b>\n";
}
set_exception_handler("myExceptionHandler");
set_error_handler("myErrorHandler");
error_reporting(-1);

echo "--START_SCRIPT--\n";

include('zet.php'); // Warning
echo "_before error ::Warning\n";

asdasd;
echo "_before error ::'asdasd'\n";

$text = "asdasds";
echo $text/1 . "\n";
echo "_before error ::'text / 1'\n";

if (!is_numeric($text)) {
    trigger_error("This is not a numerical value", E_USER_WARNING);
}
echo "_before error ::E_USER_WARNING\n";

$divisor = 0;
echo 1/$divisor . "\n";
echo "_before error ::'1 / 0'\n";

if ($divisor == 0) {
    trigger_error("Не могу поделить на ноль", E_USER_ERROR);
}
echo "_before error ::E_USER_ERROR\n";

printAnything($nonExistedVariable);

function printAnything($anything) {
	if (isset($anything)) echo " $anything \n";
	else {
		echo "_before error ::Notise\n";
		trigger_error("Не существующая переменная", E_USER_NOTICE);
		echo "_before error ::E_USER_NOTICE\n";
	}
}

class Strict { 

    public function test() { 
        echo "Test"; 
    } 

} 

Strict::test();
echo "_before error ::E_DEPRECATED\n";

$recoverable = new Strict(); 
echo (string)$recoverable; 
echo "_before error ::E_RECOVERABLE_ERROR\n";

blablabla(); // Fatal
echo "_before error ::Fatal\n";

echo "\n--END_SCRIPT--\n";