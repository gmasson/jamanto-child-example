<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/*
* Template Name: Page - Custom
*/

get_header(); 
?>

    <section id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <!--
            Add your code here
            -->

            <?php
            while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/content-page-blank' );
            endwhile;
            ?>
        
        </main>
    </section>

<?php
get_footer();
