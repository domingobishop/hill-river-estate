<?php
/**
 * Template Name: Full width
 *
 */
get_header(); ?>

    <div id="content" class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php while (have_posts()) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="page-header">
                                <h1>
                                    <?php the_title(); ?>
                                </h1>
                            </div>
                            <div class="entry-content">
                                <?php the_content(); ?>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>