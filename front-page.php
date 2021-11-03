<?php
get_header()
?>

<?php
grw_partial("frontpage/themen");
grw_partial("frontpage/stadtrat");
grw_partial("frontpage/gemeinderat");
?>

<?php
wp_enqueue_style( 'frontpage', get_template_directory_uri() . "/style/pages/frontpage.css" );
get_footer()
?>