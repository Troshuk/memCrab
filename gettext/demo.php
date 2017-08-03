<?php
	require_once("lib/streams.php");
	require_once("lib/gettext.php");

	$locale_lang = $_GET['lang'];
	$locale_file = new FileReader("locale/$locale_lang/LC_MESSAGES/messages.mo");
	$locale_fetch = new gettext_reader($locale_file);

	function translate_text($text) {
		global $locale_fetch;
		return $locale_fetch->translate($text);
	}
?>

<h1><?php echo translate_text("Translate using gettext") ?></h1>

<p><?php echo translate_text("This video shows a simple tutorial of how to translate websites using gettext.") ?></p>