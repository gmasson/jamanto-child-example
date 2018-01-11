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
                    if ( have_posts() ) : ?>

                        <header class="page-header">
                            <h4 class="page-title"><?php the_archive_title() ?></h4>
                            <?php the_archive_description( '<div class="archive-description">', '</div>' ) ?>
                            <hr>
                        </header>

                        <br>

                        <?php
                        while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/content-list', get_post_format() );

                        endwhile;

                        the_posts_navigation( array(
                           'prev_text' => __( 'Previous', 'jamanto' ),
                           'next_text' => __( 'Next', 'jamanto' )
                        ) );

                    else :

                        get_template_part( 'template-parts/content', 'none' );

                    endif;
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
