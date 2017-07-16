<?php get_header(); ?>

<div class="hello">
	<div class="hello_box">
		<h2 class="hello_title">Hallo!</h2>
		<div class="hello_entry">
			<p><b><i>Herr Mies will's wissen</i></b> ist die zweiwöchige Interview-Reihe rund um IT Themen von und mit Daniel Mies.</p>
			<p>Der Podcast kann via <a class="hello_abo" href="https://mies.me/feed/mp3/">RSS</a> abonniert werden und ist ebenfalls im <a class="hello_abo" href="https://itunes.apple.com/de/podcast/herr-mies-wills-wissen/id1257454170?l=en">iTunes Store</a> gelistet.</p>
			<hr />
		</div>
	</div>
</div>

<div class="posts">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="post">
		<div class="post_inner">
			<div class="post_date"><?php the_time('d.m.Y'); ?></div>
			<h2 class="post_title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<div class="post_entry">
				<?php the_content(); ?>
			</div>
		</div>
	</div>

	<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>