<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<div class="content single-works">

		<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>

		<h2><?php if (get_field('seo_h1', get_queried_object_id())) 
					echo get_field('seo_h1', get_queried_object_id());
				else
					the_title();
			?>
		</h2>
		<div class="content-subtitle"><?php echo get_field('post_announcement', get_the_ID()); ?></div>

		<div class="single-works_wrapper container">
			<?php 
			$images = get_field('post_photos', get_the_ID());
			
			if( $images ): ?>
				<?php foreach( $images as $image ): ?>
					<a href="<?php echo $image['url']; ?>" data-lightbox="roadtrip" data-title="<?php echo $image['caption']; ?>"><img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="image"></a>
				<?php endforeach; ?>
			<?php endif; ?>
		</div> 
		<div class="block-seo container">
			<?php the_content(); ?>
		</div>
		<?php if(get_field('insert_all_services', get_the_ID())) get_template_part( 'all', 'services' ); ?>
	</div>
</div>
<?php endwhile; // End of the loop. ?>
<?php get_footer(); ?>