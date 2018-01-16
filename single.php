<?php get_header(); ?>
    <section class="singles">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="singles_item">
                <h2 class="singles__title"><?php the_title(); ?></h2>
                <article class="single">
                    <div class="single__inner">
                        <section class="single__content">
                            <?php the_content(); ?>
                        </section>
                    </div>
                </article>
            </div>


            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>
        <?php endwhile; endif; ?>
    </section>


<?php get_footer();
