<?php
get_header()
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="smcont" style="margin-top: 3rem">
        <h1 style="color: var(--red100)"><?= the_title() ?></h1>
        <?= the_content() ?>
    </div>

<?php endwhile; endif; ?>




<?php
wp_enqueue_style( 'support', get_template_directory_uri() . "/style/pages/support.css" );
get_footer()
?>