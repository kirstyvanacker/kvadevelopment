<?php
/* Welcome to daydream :)
Thanks to the fantastic work by daydream users, we've now
the ability to translate daydream into different languages.

*/



// Adding Translation Option
load_theme_textdomain( 'daydreamtheme', get_template_directory() .'/library/translation' );
	$locale = get_locale();
	$locale_file = get_template_directory() ."/library/translation/$locale.php";
if ( is_readable($locale_file) ) require_once($locale_file);








?>