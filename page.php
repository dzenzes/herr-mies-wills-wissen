<?php get_header(); ?>

    <section class="page">

        <div class="page__inner">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h2 class="page__title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                <div class="page__entry">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; endif; ?>
        </div>

    </section>


<?php get_footer();