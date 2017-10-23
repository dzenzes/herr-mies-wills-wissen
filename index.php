<?php get_header(); ?>


    <m-intro path="<?php echo get_bloginfo('template_url') ?>/img/profilbild.png"></m-intro>
    </section>

    <div class="posts">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="post">
                <div class="post__inner">
                    <?php if (has_post_thumbnail()): ?>
                        <div class="post__image">
                            <?php the_post_thumbnail('medium'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="post__date"><?php the_time('d.m.Y'); ?></div>
                    <h2 class="post__title"><a href="<?php the_permalink(); ?>" rel="bookmark"
                                               class="post__link"
                                               title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                    </h2>
                </div>
            </div>

        <?php endwhile; endif; ?>
    </div>

<?php get_footer(); ?>