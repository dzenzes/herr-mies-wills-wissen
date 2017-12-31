<?php get_header(); ?>

<section class="intro">
    <div class="intro__inner">
        <h1 class="intro__title">Herr Mies will's wissen</h1>
        <img class="intro__logo logo" src="<?= get_bloginfo('template_url') ?>/img/profilbild.png"/>
        <section class="intro__text">
            <p>
                <b>
                    <i>Herr Mies will's wissen</i>
                </b>
                ist die zweiwöchige Interview-Reihe rund um IT Themen von und mit Daniel Mies.
            </p>
            <p>
                Der Podcast kann via
                <a class="hello_abo" href="https://mies.me/feed/mp3/">RSS</a>
                abonniert werden und ist ebenfalls im
                <a class="hello_abo"
                   href="https://itunes.apple.com/de/podcast/herr-mies-wills-wissen/id1257454170?l=en">iTunes Store</a>
                gelistet.
            </p>
        </section>
    </div>
</section>

<div class="posts">
    <h2 class="posts__title">Die neusten Folgen</h2>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article class="post">
            <div class="post__inner">
                <?php if (has_post_thumbnail()): ?>
                    <div class="post__image">
                        <a href="<?php the_permalink(); ?>" title="Link zur Episode '<?php the_permalink(); ?>'">
                            <img src="<?php the_post_thumbnail_url('large'); ?>"/>
                        </a>
                    </div>
                <?php endif; ?>

                <div class="post__date"><?php the_time('d.m.Y'); ?></div>
                <h2 class="post__title">
                    <a href="<?php the_permalink(); ?>" title="Link zur Episode '<?php the_permalink(); ?>'"
                       class="post__link"><?php the_title(); ?></a>
                </h2>
            </div>
        </article>

    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
