<?php
/**
 * Template Name: Home
 *
 */
get_header(); ?>

<div id="content">
    <section class="page-content content bg-img">
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
        <div class="feature-pages">
            <div class="container">
                <div class="row">
                    <?php
                    $query = new WP_Query( array(
                        'post_type' => 'page',
                        'category_name' => 'home',
                        'orderby' => 'menu_order title',
                        'order'   => 'ASC'
                    ) );
                    while ( $query->have_posts() ) : $query->the_post(); ?>
                        <div class="col-md-4">
                            <div class="bc-box">
                                <article>
                                    <?php if (has_post_thumbnail() && !post_password_required() && !is_attachment()) : ?>
                                        <div class="entry-thumbnail">
                                            <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                                        </div>
                                    <?php endif; ?>
                                    <h3 class="entry-title">
                                        <a href="<?php the_permalink(); ?>" rel="bookmark">
                                            <?php the_title(); ?>
                                        </a>
                                    </h3>
                                    <div class="entry-summary">
                                        <p><?php echo excerpt(18) ; ?></p>
                                        <p>
                                            <a href="<?php the_permalink(); ?>" class="btn btn-default" rel="bookmark">
                                                <?php $action_button = get_post_meta($post->ID, 'action-button', true);
                                                if ($action_button) {
                                                    echo $action_button;
                                                } else {
                                                    echo 'learn more';
                                                }
                                                ?>
                                            </a>
                                        </p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </section>
    <section class="site-tagline">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>
                        Quality starts in the vineyard and ends in your glass…
                        <!-- <?php bloginfo('description'); ?> -->
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <section class="home-news" style="background:#fff;color:#444;padding:1.4em 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Latest news</h2>
                    <?php
                    $query = new WP_Query( array(
                        'post_type' => 'post',
                        'category_name' => 'news',
                        'orderby' => 'date',
                        'posts_per_page' => 2
                    ) );
                    while ( $query->have_posts() ) : $query->the_post(); ?>
                        <article class="row clearfix">
                            <div class="col-md-3">
                                <?php if (has_post_thumbnail() && !post_password_required() && !is_attachment()) : ?>
                                    <div class="entry-thumbnail">
                                        <?php the_post_thumbnail('thumbnail', array('class' => 'img-responsive')); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-9">
                                <h3 class="entry-title">
                                    <a href="<?php the_permalink(); ?>" rel="bookmark">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                                <div class="entry-summary">
                                    <p><?php echo excerpt(24) ; ?></p>
                                    <p>
                                        <a href="<?php the_permalink(); ?>" rel="bookmark">
                                            Read more
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </article>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- #content -->

<?php get_footer(); ?>
