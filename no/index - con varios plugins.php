
<?php 

/*
Template Name: ESte No vale
 */

 get_header();


?>


<section class="content" id="content">
    <div class="wrap-content zerogrid">


<!-- div class="nav-orsistemas">
  <div class="menu-orsistemas">
    <ul>
        <li><a href="Inicio">Inicio</a></li>
        <li><a href="Portafolio">Portafolio</a></li>
        <li><a href="Noticias">Noticias</a></li>
        <li><a href="Contacto">Contacto</a></li>
    </ul>
  </div>  
</div -->  


              <div class="picture-profile">
                <?php dynamic_sidebar('picture-profile'); ?>
              </div>  


              <div class="playing">
                <?php dynamic_sidebar('playing'); ?>
              </div>  

              <div class="playing">
                  <?php dynamic_sidebar('slide'); ?>
              </div>

              <div class="playing">
                  <?php dynamic_sidebar('friends'); ?>
              </div>

              <div class="playing">
                  <?php dynamic_sidebar('twoslide'); ?>
              </div>

              <div class="playing">
                  <?php dynamic_sidebar('facebook'); ?>
              </div>              

              <div class="playing">
                <?php dynamic_sidebar('acordion'); ?>
                
              </div> 

    <?php  rewind_posts(); ?>
    <?php // query_posts('order=Asc') ?>
     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article>
            <!---  header>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>                
            <div class="datos">
                <strong>  <?php the_author(); ?></strong>
            <small>   <?php the_date(); ?></small>
            </div>
            </header -->

            <figure>
                <?php the_post_thumbnail('thumbnail'); ?>
                
            </figure>
            <?php the_excerpt(); ?>
            <?php the_category(); ?>
        </article>
    <!-- post -->
    <?php endwhile; ?>
    <!-- post navigation -->
    <?php else: ?>
        <h3>No se encontraron entradas</h3>
    <!-- no posts found -->
    <?php endif; ?>


</div>
</section>


<?php  get_footer(); ?>
