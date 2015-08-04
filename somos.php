
<?php 

/*
Template Name: Somos
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

<section id="block02">
<article class="col-2-3">

                <p class="titulo_compartir">Compartir</p>
                <div class="addthis_toolbox addthis_default_style ">
                <a class="addthis_button_preferred_1"></a>
                <a class="addthis_button_preferred_2"></a>
                <a class="addthis_button_preferred_3"></a>
                <a class="addthis_button_preferred_4"></a>
                <a class="addthis_button_compact"></a>
                <a class="addthis_counter addthis_bubble_style"></a>
                </div>
                <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f303da0095a16d3"></script>
                <!-- AddThis Button END -->
                <div style="clear:both;"></div>

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

         <?php  the_content(); ?> 
    <div style="clear: both"></div>

</article>

<aside class="col-1-5">
  <?php dynamic_sidebar('facebook'); ?>

  <?php dynamic_sidebar('friends'); ?>  

</aside>




    <div style="clear: both"></div>

</section>  <!-- ENDED THE PRINCIPAL SECTION OF THE CONTENT  -->  

</div>
</section>


<?php  get_footer(); ?>
