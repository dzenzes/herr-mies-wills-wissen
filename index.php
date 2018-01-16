<?php
get_header(); ?>
 <?php if (have_posts()) : ?>
    <?php if (!is_paged()) : ?>
    <?php
        $args = array(
            'posts_per_page' => '1',
            "post_type" => array("post", "podcast")
        );
        $query = new WP_query ($args);
        if ($query->have_posts()):
            while ($query->have_posts()) : $query->the_post();
                ?>
        <section class="latest_post">
            <article class="post">
                <div class="post__inner">
                    <section class="post__player">
                        <?php

                                $episode = \Podlove\get_episode();
                                echo $episode->player(['context' => 'landing-page']);
                                ?>
                    </section>
                    <div class="post__date">
                        <?php the_time('d.m.Y'); ?>
                    </div>
                    <h2 class="post__title">
                        <a href="<?php the_permalink(); ?>" title="Link zur Episode '<?php the_permalink(); ?>'" class="post__link">
                            <?php the_title(); ?>
                        </a>
                    </h2>


                </div>
            </article>
        </section>
        <?php endwhile; ?>
        <?php endif; ?>
        <?php endif; ?>


        <div class="posts">
            <?php if (!is_paged()) : ?>
            <h2 class="posts__title">Die neusten Folgen</h2>
            <?php else: ?>
            <h2 class="posts__title">Weitere Folgen</h2>
            <?php endif; ?>
            <?php while (have_posts()) : the_post(); ?>

            <article class="post">
                <div class="post__inner">
                    <?php if (has_post_thumbnail()): ?>
                    <div class="post__image">
                        <a href="<?php the_permalink(); ?>" title="Link zur Episode '<?php the_permalink(); ?>'">
                            <img src="<?php the_post_thumbnail_url('large'); ?>" />
                        </a>
                    </div>
                    <?php endif; ?>

                    <div class="post__date">
                        <?php the_time('d.m.Y'); ?>
                    </div>
                    <h2 class="post__title">
                        <a href="<?php the_permalink(); ?>" title="Link zur Episode '<?php the_permalink(); ?>'" class="post__link">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                </div>
            </article>

            <?php endwhile; ?>
            <?php
        the_posts_pagination(
            array(
                'screen_reader_text' => ' ',
                'prev_text' => '<span>Vorherige Seite</span>',
                'next_text' => '<span>N&auml;chste Seite</span>',
            )
        );
        ?>
        </div>
        <?php endif; ?>

        <?php get_footer(); ?>
