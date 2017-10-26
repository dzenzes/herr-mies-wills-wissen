<?php get_header(); ?>


    <m-intro path="<?php echo get_bloginfo('template_url') ?>/img/profilbild.png"></m-intro>
    <div class="posts">
        <h2 class="posts__title">Die neusten Folgen</h2>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <m-post
                <?php if (has_post_thumbnail()): ?>
                    image="<?php the_post_thumbnail_url('medium'); ?>"
                <?php endif; ?>
                    date="<?php the_time('d.m.Y'); ?>"
                    link="<?php the_permalink(); ?>"
                    title="<?php the_title(); ?>"></m-post>
        <?php endwhile; endif; ?>
    </div>

<?php get_footer(); ?>