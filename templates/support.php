<?php /* Template Name: Unterstützen */
get_header()
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="smcont" style="margin-top: 3rem">
        <h1 style="color: var(--red100)"><?= the_title() ?></h1>
        <?= the_content() ?>
        <div id="support-form" style="margin-top: 2rem">
            <div data-paperform-id="vevtrlic"></div>
            <script src="https://paperform.co/__embed.min.js"></script>
        </div>
    </div>

<?php endwhile; endif; ?>




<?php
wp_enqueue_style( 'support', get_template_directory_uri() . "/style/pages/support.css" );
get_footer()
?>