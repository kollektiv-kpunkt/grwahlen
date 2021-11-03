<?php
get_header();
$wahlkreis = get_queried_object();
?>

<div id="wahlkreis-heroine">
    <div id="wahlkreis-heroine-inner" class="mdcont">
        <div id="wahlkreis-heroine-title">
            <h1><?= $wahlkreis->name ?></h1>
            <h3>SP Liste 1 in den Gemeinderat wählen!</h3>
        </div>
        <div id="wahlkreis-heroine-karte">
            <?php
            set_query_var( 'current_kreis', $wahlkreis->slug );
            grw_partial("karte")
            ?>
        </div>
    </div>
</div>


<?php

$args = array(
	'post_type'              => 'gemeinderat',
    'numberposts'       =>  50,
    'nopaging'          => true,
    'meta_key'			=> 'platz_nummer',
    'orderby'           => 'meta_value_num',
    'order'				=> 'ASC',
    'tax_query' => array(
        array (
            'taxonomy'          => 'wahlkreis',
            'field'             => 'slug',
            'terms'             => $wahlkreis->slug,
        ),
    )
);
?>

<div id="kandi-grid" class="lgcont">
    <?php
    $query = new WP_Query( $args );
    if ( $query->have_posts() ):
        while ( $query->have_posts() ):
            $query->the_post(); ?>

    <a class="kandi" href="<?= get_the_permalink() ?>" id="kandi_<?=$wahlkreis->slug?>_<?= the_field("platz_nummer") ?>">
        <div class="kandi-img-container">
            <?php
            $filename = str_replace(" ", "-", strtolower(get_the_title())) . "-" . str_replace(" ", "", strtolower($wahlkreis->name)) . ".jpg";
            if (get_the_post_thumbnail_url($post->ID, "medium_large")) {
                $kandiImg = get_the_post_thumbnail_url($post->ID, "medium_large");
            } else {
                $rand = mt_rand(1,3);
                $kandiImg = get_template_directory_uri() . "/img/kandis/fallback{$rand}.jpg";
            }
            ?>
            <img src="<?= $kandiImg ?>" alt="<?= the_title()?>, SP Stadt Zürich, <?= $wahlkreis->name ?>" class="kandi-portrait" loading="lazy">
        </div>
        <div class="kandi-content">
            <p class="kandi-name"><?= the_title() ?></p>
            <p class="kandi-position"><?= the_field("berufsbezeichnung") ?></p>
        </div>
        <?php
        if (get_field("bisher")) : ?>
        <div class="bisher-neu">Bisher</div>
        <?php
        endif;
        ?>
    </a>

        <?php
        endwhile;
    endif;

    wp_reset_postdata();

    ?>
</div>


<?php
wp_enqueue_style( 'wahlkreis', get_template_directory_uri() . "/style/pages/wahlkreis.css" );
get_footer()
?>