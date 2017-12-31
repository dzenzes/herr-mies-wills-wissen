<?php get_header(); ?>
    <section class="singles">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="singles_item">
                <h2 class="singles__title"><?php the_title(); ?></h2>
                <article class="single">
                    <div class="single__inner">
                        <section class="single__content">
                            <?php if (has_post_thumbnail()): ?>
                                <div class="single__image">
                                    <img src="<?php the_post_thumbnail_url('medium'); ?>"/>
                                </div>
                            <?php endif; ?>
                            <?php the_content(); ?>
                        </section>
                    </div>
                </article>
            </div>
        <?php endwhile; endif; ?>
    </section>


<?php get_footer();
