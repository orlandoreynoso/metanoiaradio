
<?php 

/*
Template Name: Categorias
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


            <!-- div class="cuadro-one">
              <div class="picture-profile">
                <?php // dynamic_sidebar('picture-profile'); ?>
              </div>

              <div class="slide-metanoia">
                  <?php // dynamic_sidebar('slide'); ?>
              </div>
            </div -->




<!-- **************************************************   -->

              <!-- div class="playing"><?php // dynamic_sidebar('playing'); ?></div -->  

<section id="block02">
<article class="col-1-1">
          <h1>Noticias</h1>
          <div class="mapeo">

            <!-- Breadcrumb -->

            <?php the_breadcrumb(); ?>

            <!-- Fin Breadcrumb -->

          </div> 
          <!-- Go to www.addthis.com/dashboard to customize your tools -->
          <div class="addthis_sharing_toolbox"></div>     
          
          <?php // dynamic_sidebar('picture-profile'); ?>

          <?php // rewind_posts(); ?>
        

        <?php if (have_posts()): while(have_posts()): the_post();  ?>



                  <article class="post resume">

                    <div class="post-title">

                      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                      <small class="meta"><span class="label-fecha"><?php the_time(get_option('date_format')); ?></span> &bull; <span class="label-cat"> Categoría </span> <span class="icon-cat"> &raquo </span>  <?php the_category(', '); ?></small>

                    </div><!-- /header -->



      
                      <?php the_excerpt();  ?>

                      <a href="<?php the_permalink(); ?>" class="readmore">

                        <?php _e('Continuar leyendo &rarr;','apk'); ?>

                      </a>                      

                    

                  </article>

                <?php endwhile; ?>
  <div class="navigation"><?php if(function_exists('pagenavi')) { pagenavi(); } ?></div>                  



                  <?php else: ?>


         <?php // the_content(); ?> 
    <div style="clear: both"></div>


            <article class="post resume">

                    <header class="post-title">

                      <h2><?php _e('No hay contenidos disponibles','apk' ) ?></h2>

                    </header><!-- /header -->



                    <div class="post-content">

                      <p><?php _e('No hay contenidos que correspondan con esta pagina, por favor revizar la busqueda para encontrar lo que desea','apk' ) ?></p>

                      <?php get_search_form(); ?>

                    </div>

                    

                  </article>





                  <?php endif; ?>




<!-- Aqui finaliza el article Inicial -->
</article>

<aside class="col-1-2">
  <article class="facebook"><?php dynamic_sidebar('facebook'); ?></article>  
  <article class="friends"><?php dynamic_sidebar('friends'); ?>  </article>  
</aside>




    <div style="clear: both"></div>

</section>  <!-- ENDED THE PRINCIPAL SECTION OF THE CONTENT  -->  

<!-- **************************************************   -->
</div> <!-- finaliza el div wrap-content zerogrid -->
</section>


<?php  get_footer(); ?>
