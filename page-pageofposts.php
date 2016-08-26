<?php
/**
 * Template Name: Page of posts
 *
 */
get_header(); ?>


        <div id="content" class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <?php while (have_posts()) : the_post(); ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div class="page-header">
                                    <h1>
                                        <?php the_title(); ?>
                                    </h1>
                                </div>
                        <?php endwhile; ?>
                                <div class="entry-content">
                                    <?php query_posts('category_name=' . get_the_title() . '&post_status=publish,future'); ?>
                                    <?php if (have_posts()) : ?>
                                        <?php /* The loop */ ?>
                                        <?php while (have_posts()) : the_post(); ?>
                                            <div id="post-<?php the_ID(); ?>" class="news-item clearfix">
                                                <div class="col-md-3">
                                                    <?php if (has_post_thumbnail() && !post_password_required() && !is_attachment()) : ?>
                                                        <div class="entry-thumbnail">
                                                            <a href="<?php the_permalink(); ?>">
                                                                <?php the_post_thumbnail('thumbnail', array('class' => 'img-responsive')); ?>
                                                            </a>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="col-md-9">
                                                    <h2 class="entry-title">
                                                        <a href="<?php the_permalink(); ?>" rel="bookmark">
                                                            <?php the_title(); ?>
                                                        </a>
                                                    </h2>
                                                    <small><?php the_date('F j, Y'); ?></small>
                                                    <div class="entry-content">
                                                        <?php the_excerpt(); ?>
                                                    </div>
                                                    <a class="btn btn-default btn-xs pull-right" role="button" href="<?php the_permalink(); ?>">Read more &raquo;</a>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php else : ?>
                                        <h2>No content</h2>
                                    <?php endif; ?>
                                    <nav>

                                            <?php next_posts_link(__('&#8249; Older news', 'blankcanvas')); ?>
                                            <?php previous_posts_link(__('Newer news &#8250;', 'blankcanvas')); ?>

                                        <!-- end of .navigation -->
                                    </nav>
                                    <!-- #post-loop -->
                                </div>
                            </article>
                    </div>
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>



<?php get_footer(); ?>