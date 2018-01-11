<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
jamanto_breadcrumbs();
?>

<div id="site-content">
    <div class="container">
        <div class="row">

            <section id="primary" class="content-area <?php echo jm_config_col ?>-8">
                <main id="main" class="site-main" role="main">

                    <?php
                    while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/content', get_post_format() );

                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                    endwhile;
                    ?>

                </main>
            </section>

            <?php get_sidebar(); ?>

        </div>
    </div>
</div>

<?php
get_template_part( 'template-parts/footer-widget' );
get_footer();
