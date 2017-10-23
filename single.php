<?php get_header(); ?>

    <section class="page">
        <div class="page__inner">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h2 class="page_title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                <div class="page__content">
                    <div class="page_entry">
                        <?php the_content(); ?>
                    </div>
                    <?php if (has_post_thumbnail()): ?>
                        <div class="page__image">
                            <?php the_post_thumbnail('medium'); ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endwhile; endif; ?>

            <div class="meta">
                <p class="meta_about">
                    <b class="meta_title"><i>Herr Mies will's wissen</i></b> ist die zweiwöchige Interview-Reihe rund um
                    IT Themen von und mit Daniel Mies.
                </p>
                <p class="meta_links">
                    Der Podcast kann via <a class="hello_abo" href="https://mies.me/feed/mp3/">RSS</a> abonniert werden
                    und ist ebenfalls im <a class="hello_abo"
                                            href="https://itunes.apple.com/de/podcast/herr-mies-wills-wissen/id1257454170?l=en">iTunes
                        Store</a> gelistet.
                </p>
            </div>
        </div>

    </section>


<?php get_footer();