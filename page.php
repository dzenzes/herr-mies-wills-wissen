<?php get_header(); ?>
    <section class="pages">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="pages_item">
                <h2 class="pages__title"><?php the_title(); ?></h2>
                <article class="page">
                    <div class="page__inner">
                        <section class="page__content">
                            <?php if (has_post_thumbnail()): ?>
                                <div class="page__image">
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
