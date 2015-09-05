<?php
/**
 * Created by PhpStorm.
 * User: Practice
 * Date: 9/3/2015
 * Time: 11:17 AM
 */
get_header();?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) : ?>


            <?php //not sure what this does ?>
            <?php if ( is_home() && ! is_front_page() ) : ?>
                <header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>
            <?php endif; ?>

            <?php //this will become the homepage slider ?>
            <?php if ( is_home() &&  is_front_page() ) : ?>
                <header>
                    <h1>This is the home page.</h1>
                </header>
            <?php endif; ?>

            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <?php the_post_thumbnail(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>

            <?php the_posts_navigation(); ?>

        <?php else : ?>



        <?php endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
