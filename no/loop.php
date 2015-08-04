<?php /*

<div id="main" class="group">

	<div id="blog" class="left-col">

		<?php if( have_posts() ): while ( have_posts() ): the_post();   ?>


		<div id="post">
			

	<h2><a href="<?php the_permalink(); ?>"><?php the_title( ); ?></a></h2>
	<div class="byline">Escrit por.. <?php the_author_posts_link(); ?>
		on <a href="<?php the_permalink(); ?>"><?php the_time('l F d, Y'); ?></a>	
		
	</div>

	<?php the_excerpt(); ?>
<?php endwhile; else: ?>
	<p><?php _e('No posts where found. sorry!'); ?></p>
<?php endif; ?>

<div class="navi">
	<div class="right">
		<?php previous_posts_link('Anterior'); ?> / <?php next_posts_link('siguiente'); ?>
		
	</div>
	
</div>

		</div>

	</div>	
	
</div>

*/

 if ( have_posts() ) : ?>

	<section class="listado-articulos">

		<?php while ( have_posts() ) : the_post(); ?>

			<article class="<?php post_class();?>">
		        <header>
		            <h1><?php the_title(); ?></h1>
		        </header>
		        <?php the_content(); ?>
                      <!-- a href="<?php // the_permalink(); ?>" class="readmore"><?php // _e('Seguir leyendo &rarr;','apk'); ?></a>
                      <div class="navigation"><?php // if(function_exists('pagenavi')) { pagenavi(); } ?></div -->		        
		    </article>

		<?php endwhile; endif;?>

	</section>

<?php // else : ?>

	<section class="error">

		<article class="<?php // post_class(); ?>">
	        <header>
	            <h1>Lo lamentamos</h1>
	        </header>
	        <p>No hay contenidos que mostrar :( </p>
	    </article>

	</section>


 ?>