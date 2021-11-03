<?php /* Template Name: Spenden */
get_header()
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="smcont" style="margin-top: 3rem">
        <h1 style="color: var(--red100)"><?= the_title() ?></h1>
        <?= the_content() ?>
        <div id="donation-widget" style="margin-top: 2rem"></div>
        <script src="https://tamaro.raisenow.com/sp-zuerich/latest/widget.js"></script>
        <script>
        window.rnw.tamaro.runWidget('#donation-widget', {
            language: 'de',
            testMode: false,
            debug: false,
            purposes: ['p1'],
            purposeDetails: {
                p1: {
                    stored_campaign_id: 29328421,
                },
            },
            translations: {
                de: {
                    purposes: {
                        p1: 'SP Zürich',
                    },
                },
            },
            paymentFormPrefill: {
                stored_customer_email_permission: true,
                stored_customer_donation_receipt: true,
                stored_customer_country: 'CH',
                stored_sxt_address_source: '1008',
                //stored_hidden_parameter: 'myValue',
            },
        })
        </script>

        <style>
            :root {
                --tamaro-primary-color: var(--red100);
                --tamaro-primary-color__hover: var(--red20);
                --tamaro-primary-bg-color: var(--red20);
                --tamaro-border-color: var(--black);
                --tamaro-bg-color: var(--white);
            }
        </style>
    </div>

<?php endwhile; endif; ?>




<?php
wp_enqueue_style( 'support', get_template_directory_uri() . "/style/pages/support.css" );
get_footer()
?>