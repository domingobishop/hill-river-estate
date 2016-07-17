<?php get_header(); ?>


        <div id="content" class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <?php while (have_posts()) : the_post(); ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div class="page-header">
                                    <h1>
                                        <?php the_title(); ?>
                                    </h1>
                                </div>
                                <?php if (has_post_thumbnail() && !post_password_required() && !is_attachment()) : ?>
                                    <div class="entry-thumbnail">
                                            <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="entry-content">
                                    <?php the_content(); ?>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    </div>
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>



<?php get_footer(); ?>