<a href="<?php the_permalink(); ?>" class="article-link">
	<article id="post-<?php the_ID(); ?>" class="article-excerpt">
		<div>
			<h1><?php the_title(); ?></h1>
				<time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F j, Y'); ?></time>
				<?php the_excerpt(); ?>
		</div>
		<div class="article-image">
		<?php if ( get_post_thumbnail_id() ) { ?> <img src="<?php the_post_thumbnail_url( 'thumbnail' ); ?>" alt="<?php the_title(); ?>"><?php } ?>
		</div>
	</article>
</a>