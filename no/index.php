
<?php 

/*
Template Name: IndexGood
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

          <?php // dynamic_sidebar('picture-profile'); ?>

          <?php  rewind_posts(); ?>
         <?php
          // Start the loop.
          while ( have_posts() ) : the_post();

            // Include the page content template.
            get_template_part( 'content', 'page' );

            /* If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
              comments_template();
            endif;  */

          // End the loop.
          endwhile;
          ?>
          <h1>Noticias</h1>
          <!-- Go to www.addthis.com/dashboard to customize your tools -->
          <div class="addthis_sharing_toolbox"></div>           
         <?php  the_content(); ?> 
    <div style="clear: both"></div>

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
