<?php
get_header()
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php
$wahlkreis = get_the_terms( $post->ID, 'wahlkreis' )[0];
if (get_the_post_thumbnail_url($post->ID, "full")) {
    $kandiImg = get_the_post_thumbnail_url($post->ID, "full");
} else {
    $rand = mt_rand(1,3);
    $kandiImg = get_template_directory_uri() . "/img/kandis/fallback{$rand}.jpg";
}
?>


<div id="kandi-heroine">
    <div id="kandi-heroine-img">
        <img src="<?= $kandiImg ?>" alt="<?= the_title() ?>" id="kandi-portrait">
        <?php
        if (get_field("bisher")) :?>
            <div class="bisher-neu">Bisher</div>
        <?php
        endif;
        ?>
    </div>
    <div id="kandi-heroine-container">
        <div id="kandi-heroine-content">
            <h1><?= the_title() ?></h1>
            <div id="kandi-quote"><?= the_content() ?></div>
            <?php
            if (get_field("jahrgang")): ?>
            <p id="kandi-info"><?= the_field("jahrgang")?>, <?= the_field("berufsbezeichnung") ?></p>
            <?php
            endif;
            ?>
        </div>
    </div>
</div>


<div id="kandi-section">
    <div id="row-1" class="mdcont">
        <div id="support-form">
            <h3 style="color: var(--red100); margin-top: 0">Unterstütze <?= the_title() ?> in seinem Wahlkampf!</h3>
            <div data-paperform-id="vevtrlic"></div>
            <script src="https://paperform.co/__embed.min.js"></script>
        </div>
        <?php
        $video = get_field("video");
        if ($video):
        ?>
        <div id="kandi-video">
            <video
                id="video-<?= $post->post_name ?>"
                class="video-js"
                width="100%"
                controls
                preload="auto"
                poster="<?= get_the_post_thumbnail_url() ?>"
                data-setup="{}"
            >
                <source src="<?= the_field("video")?>" type="video/mp4" />
                <p class="vjs-no-js">
                To view this video please enable JavaScript, and consider upgrading to a
                web browser that
                <a href="https://videojs.com/html5-video-support/" target="_blank"
                    >supports HTML5 video</a
                >
                </p>
            </video>
            <div id="video-aspect-ration" style="padding-bottom: 100%"></div>
        </div>
        <?php
        endif;
        ?>
    </div>

    <div id="themen" class="mdcont">
        <h2 style="color: var(--red100); margin-top: 0">Dafür kämpft die SP in Zürich</h2>
        <div id="kandi-themen">
            <div class="kandi-thema" data-homepage="http://mietexplosion-stoppen.ch/">
                <div class="thema-img-container">
                    <img src="<?= get_template_directory_uri() ?>/img/themen/wohnen/bg_quer.svg" alt="Endlich mehr bezahlbare Wohnungen" class="kandi-thema-bg thema-img" loading="lazy">
                    <img src="<?= get_template_directory_uri() ?>/img/themen/wohnen/claim_quer.svg" alt="Endlich mehr bezahlbare Wohnungen" class="kandi-thema-claim thema-img" loading="lazy">
                    <div style="padding-bottom: calc(306 / 433 * 100%)"></div>
                </div>
                <div href="http://mietexplosion-stoppen.ch/" class="button">Mehr erfahren</div>
            </div>
            <div class="kandi-thema" data-homepage="https://velo-stadt.ch/">
                <div class="thema-img-container">
                    <img src="<?= get_template_directory_uri() ?>/img/themen/velo/bg_quer.svg" alt="Endlich mehr bezahlbare Wohnungen" class="kandi-thema-bg thema-img" loading="lazy">
                    <img src="<?= get_template_directory_uri() ?>/img/themen/velo/claim_quer.svg" alt="Endlich mehr bezahlbare Wohnungen" class="kandi-thema-claim thema-img" loading="lazy">
                    <div style="padding-bottom: calc(306 / 433 * 100%)"></div>
                </div>
                <div href="https://velo-stadt.ch/" class="button">Mehr erfahren</div>
            </div>
            <div class="kandi-thema" data-homepage="https://solidarisches-zuerich.ch/">
                <div class="thema-img-container">
                    <img src="<?= get_template_directory_uri() ?>/img/themen/soli/bg_quer.svg" alt="Endlich mehr bezahlbare Wohnungen" class="kandi-thema-bg thema-img" loading="lazy">
                    <img src="<?= get_template_directory_uri() ?>/img/themen/soli/claim_quer.svg" alt="Endlich mehr bezahlbare Wohnungen" class="kandi-thema-claim thema-img" loading="lazy">
                    <div style="padding-bottom: calc(306 / 433 * 100%)"></div>
                </div>
                <div href="https://solidarisches-zuerich.ch/" class="button">Mehr erfahren</div>
            </div>
        </div>
    </div>
</div>
<script>
    jQuery(document).on("click", ".kandi-thema", function(){
        window.open(jQuery(this).attr("data-homepage"))
    })
</script>


<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php
wp_enqueue_style( 'kandi', get_template_directory_uri() . "/style/pages/kandi.css" );
wp_enqueue_style( 'videojs', "https://vjs.zencdn.net/7.15.4/video-js.css" );
wp_enqueue_script( 'videojs', "https://vjs.zencdn.net/7.15.4/video.min.js", array ( 'jquery' ), 1.1, true);
get_footer()
?>