<?php get_header(); ?>


    <m-intro path="<?php echo get_bloginfo('template_url') ?>/img/profilbild.png"></m-intro>
    </section>

    <div class="posts">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="post">
                <div class="post_inner">
                    <div class="post_date"><?php the_time('d.m.Y'); ?></div>
                    <h2 class="post_title"><a href="<?php the_permalink(); ?>" rel="bookmark"
                                              title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <div class="post_entry">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>

        <?php endwhile; endif; ?>
    </div>

<?php get_footer(); ?>