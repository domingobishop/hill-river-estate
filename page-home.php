<?php
/**
 * Template Name: Home
 *
 */
get_header(); ?>


    <div id="content" class="overlay">
        <section class="page-content content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php while (have_posts()) : the_post(); ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div class="entry-content text-center intro">
                                    <?php the_content(); ?>
                                </div>
                            </article>
                        <?php endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="bc-box">
                            <article>
                                <?php
                                $your_query = new WP_Query( 'pagename=about' );
                                while ( $your_query->have_posts() ) : $your_query->the_post(); ?>
                                <?php if (has_post_thumbnail() && !post_password_required() && !is_attachment()) : ?>
                                    <div class="entry-thumbnail">
                                        <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                                    </div>
                                <?php endif; ?>
                                <h3 class="entry-title">
                                    <a href="<?php the_permalink(); ?>" rel="bookmark">
                                        our range
                                    </a>
                                </h3>
                                <div class="entry-summary">
                                        <p><?php echo excerpt(16) ; ?></p>
                                    <p>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-default" rel="bookmark">
                                        learn more
                                    </a>
                                    </p>
                                    <?php endwhile;
                                    wp_reset_postdata();
                                    ?>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bc-box">
                            <article>
                                <?php
                                $your_query = new WP_Query( 'pagename=about' );
                                while ( $your_query->have_posts() ) : $your_query->the_post(); ?>
                                <?php if (has_post_thumbnail() && !post_password_required() && !is_attachment()) : ?>
                                    <div class="entry-thumbnail">
                                        <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                                    </div>
                                <?php endif; ?>
                                <h3 class="entry-title">
                                    <a href="<?php the_permalink(); ?>" rel="bookmark">
                                        what we do
                                    </a>
                                </h3>
                                <div class="entry-summary">
                                    <p><?php echo excerpt(16) ; ?></p>
                                    <p>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-default" rel="bookmark">
                                        learn more
                                    </a>
                                    </p>
                                    <?php endwhile;
                                    wp_reset_postdata();
                                    ?>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bc-box">
                            <article>
                                <?php
                                $your_query = new WP_Query( 'pagename=visit-us' );
                                while ( $your_query->have_posts() ) : $your_query->the_post(); ?>
                                <?php if (has_post_thumbnail() && !post_password_required() && !is_attachment()) : ?>
                                    <div class="entry-thumbnail">
                                        <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                                    </div>
                                <?php endif; ?>
                                <h3 class="entry-title">
                                    <a href="<?php the_permalink(); ?>" rel="bookmark">
                                        visit us
                                    </a>
                                </h3>
                                <div class="entry-summary">
                                        <p><?php echo excerpt(16) ; ?></p>
                                    <p>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-default" rel="bookmark">
                                        learn more
                                    </a>
                                    </p>
                                    <?php endwhile;
                                    wp_reset_postdata();
                                    ?>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- #content -->


<?php get_footer(); ?>
