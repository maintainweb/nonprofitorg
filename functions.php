<?php

function theme_fonts() { ?>
<link href='http://fonts.googleapis.com/css?family=Gudea:400,700,400italic' rel='stylesheet' type='text/css'>
<?php }

add_action('wp_head', 'theme_fonts', 1 ); ?>