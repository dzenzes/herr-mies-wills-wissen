<?php get_header(); ?>
 
<div class="page">
   
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<h2 class="page_title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
	<div class="page_entry">
		<?php the_content(); ?>
	</div>
<?php endwhile; endif; ?>
         
</div>
 
 
<?php get_footer();