<?php
/*
	Template Name: One Up (Large)
*/
?>
<div class='span-12 last clear content oneup large'>
	<div class='nav content-header'>
		<span class='label'><?php print($title); ?></span>
		<span class='caption'><?php print($caption); ?></span> <span class='more'><?php next_posts_link('View more&hellip;'); ?></span>
	</div>
	<div class='contents span-12 last'>
<?php while ( $queryObject->have_posts() ) : $queryObject->the_post(); ?>

<article <?php post_class('post-'.($queryObject->current_post+1)); ?>>
	<header>
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	</header>
	<section>
		<p><?php echo get_the_excerpt(); ?> <span class='more-link'><a href="<?php the_permalink(); ?>">Read On&hellip;</a></span></p>
	</section>
	<footer>
		<ul class='metadata horizontal clear'>
			<li class='author'>By <?php the_author_link(); ?></li>	
			<li class='date'><time datetime="<?php the_time('Y-m-d'); ?>" pubdate><?php the_time('F j, Y'); ?></time></li>
			<li>Filed Under <?php the_category(', '); ?></li>											
			<li class='comments'><?php comments_popup_link('No comments', '1 comment', '% comments'); ?></li>
		</ul>
	</footer>
</article>	

<?php endwhile; ?>
	</div>
</div>