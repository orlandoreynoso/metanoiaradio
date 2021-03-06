<?php 


/* devuelve el directorio de stilo de css, y se le asigna a temppath */

define('TEMPPATH',get_bloginfo('stylesheet_directory'));

/*En esto concatenamos la carpeta images*/
define('IMAGES',TEMPPATH. "/images");

// Esto es para aderir una imágen destacada.
add_theme_support('post-thumbnails');
 
add_image_size( $name, $width, $height, $crop );

/*======== Menu para todos ========================*/

function menu_mujer(){
?>

      <div class="iconos-01">
            <h2>Tv en línea</h2>
            <a class="linkopacity" href="<?php bloginfo('url'); ?>/tv-en-linea/"><img src="<?php echo IMAGES; ?>/ico_tvenvivo.png"></a>
      </div>
      <div class="iconos-01">
            <h2>Padre Hugo Estrada</h2>
            <a class="linkopacity" href="<?php bloginfo('url'); ?>/padre-hugo-estrada/"><img src="<?php echo IMAGES; ?>/ico_padrehugo.png"></a> 
      </div>
      <div class="iconos-01">
            <h2>Programas</h2>    
            <a class="linkopacity" href="<?php bloginfo('url'); ?>/category/programas/"><img src="<?php echo IMAGES; ?>/programas.png"></a>
      </div>    
      <div class="iconos-01">
            <h2>Santos del mes</h2>            
            <a class="linkopacity" href="<?php bloginfo('url'); ?>/category/santos-del-mes/"><img src="<?php echo IMAGES; ?>/01portada-santoral.jpg"><a/>
      </div>

      <div class="iconos-01">
            <h2>Oraciones</h2>
            <a class="linkopacity" href="<?php  bloginfo('url'); ?>/oracion/"><img src="<?php  echo IMAGES; ?>/ijesushuertosricci1.jpg"></a> 
      </div>    
      <div class="iconos-01">
            <h2>Youtube</h2>
            <a class="linkopacity" href="https://www.youtube.com/user/JesustvOnline"><img src="<?php echo IMAGES; ?>/youtube-logo.png"></a>     
      </div>   

<?php 
}

/* Back To Top */

    add_action( 'wp_footer', 'back_to_top' );

    function back_to_top() {
    echo '<a id="totop" href="#">Back to Top</a>';
    }

    add_action( 'wp_head', 'back_to_top_style' );
    function back_to_top_style() {
    echo '<style type="text/css">
    #totop {
	    position: fixed;
	    right: 30px;
	    bottom: 50%;
	    display: none;
	    outline: none;
    }
    </style>';
    }

    add_action( 'wp_footer', 'back_to_top_script' );
    function back_to_top_script() {
    echo '<script type="text/javascript">
    jQuery(document).ready(function($){
    $(window).scroll(function () {
    if ( $(this).scrollTop() > 500 )
    $("#totop").fadeIn();
    else
    $("#totop").fadeOut();
    });

    $("#totop").click(function () {
    $("body,html").animate({ scrollTop: 0 }, 500 );
    return false;
    });
    });
    </script>';
    }   

// Insertar Breadcrumb    
function the_breadcrumb() {  

	$url = get_bloginfo('url');
	$a = explode("/",$url);
	$b = explode("/",$_SERVER["REQUEST_URI"]);
	
	//intersección de arrays para poder quitar la URL
	$c = array_intersect($a, $b);
	$url_array = array_diff($b, $c);
	
	//quitamos el nombre del post del array
	array_pop($url_array);
	
	//para quitar las "/page/2"
	if(preg_match('@(/page/)([0-9])@',$_SERVER["REQUEST_URI"])) {
		array_pop($url_array); //quitamos sacar el "/2"
		array_pop($url_array); //quitamos sacar el "/page"
	}
	

	echo 'Estás en &raquo;  <a href="'.$url.'/" rel="home">Inicio</a> ';
	$dir = $url.'/';

	if(is_single() || is_category()) {
		//algoritmo para single.php
		$category = 'category';
		foreach($url_array as $folder) {
			if($folder != 'category'){
				$category .= '/'.$folder;
				//hay confusion con las categorias hijos
				$dir = $url.'/'.$category.'/';
				//con URL para que jale del URL al que pertenece
				echo ' &raquo; <a href="'.$dir.'" rel="category tag">'.ucwords(str_replace("-", " ", $folder)) . '</a>';
			}
		}
	} else {
		//para page.php y otros (archivos)
		foreach($url_array as $folder) {
			if($folder != 'tag' && $folder != 'author'){
				if(!is_numeric($folder)){
					$dir = $dir.$folder.'/';//los folders se van acoplando
					echo ' &raquo; <a href="'.$dir.'">'.ucwords(str_replace("-", " ", $folder)) . '</a>';
				}
			}
		}
	}
	echo wp_title();


}    

	$args = array(
		'menu'            => 'nav',
		'menu_id' => 'navlist',
		'menu_class'      => 'cssmenu zerogrid'
	);


if (function_exists('register_nav_menus')) 
{
	register_nav_menus($args);
} 

/*====================== ESTO ES PARA LAS CATEGORIAS ===============================*/
// original 

function show_category_posts( $atts ){

        extract(shortcode_atts(array(
                'cat'=> ''
        ), $atts));

        query_posts('cat='.$cat.'&orderby=date&order=ASC&posts_per_page=-1');

        if ( have_posts() ){
                $content = '<ul>';
                while ( have_posts() ){
                        the_post();
                        $content .= the_title('<li><a href="'.get_permalink().'">', '</a></li>', true);
                        previous_image_link();
                        the_excerpt();
                }
                $content .= '</ul>';
        }

        //Reset query
        wp_reset_query();

        return $content;
}

add_shortcode('mostrar_cat', 'show_category_posts');



/*===================================================*/


function showMenu(){
	$args = array(
		'menu'            => 'nav',
		'menu_id' => 'navlist',
		'menu_class'      => 'zerogrid cssmenu'
	);

	wp_nav_menu($args);

}


/*=========  Para actualizar mi foto de perfil en la home ======================*/

      if (function_exists('register_sidebar')) {
                  register_sidebar(array(
                        'name' => 'Picture profile',
                        'id' => 'picture-profile'
                        ));
            }
            

      if (function_exists('register_sidebar')) {
                  register_sidebar(array(
                        'name' => 'Logo',
                        'id' => 'logo'
                        ));
            }
      

      if (function_exists('register_sidebar')) {
                  register_sidebar(array(
                        'name' => 'Playing',
                        'id' => 'plaing'
                        ));
            }

      if (function_exists('register_sidebar')) {
                  register_sidebar(array(
                        'name' => 'Friends',
                        'id' => 'friends'
                        ));
            }


      if (function_exists('register_sidebar')) {
                  register_sidebar(array(
                        'name' => 'slide',
                        'id' => 'slide'
                        ));
            }

      if (function_exists('register_sidebar')) {
                  register_sidebar(array(
                        'name' => 'Two slide',
                        'id' => 'twoslide'
                        ));
            }


      if (function_exists('register_sidebar')) {
                  register_sidebar(array(
                        'name' => 'Facebook',
                        'id' => 'facebook'
                        ));
            }

        if(function_exists('register_sidebar')) {

                    register_sidebar(array(
                    'name' =>'Acordion',
                    'id' => 'acordion'
                    ));
        }

        if(function_exists('register_sidebar')) {

                    register_sidebar(array(
                    'name' =>'player',
                    'id' => 'player'
                    ));
        }

        if(function_exists('register_sidebar')) {

                    register_sidebar(array(
                    'name' =>'More videos',
                    'id' => 'more-videos'
                    ));
        } 


/*============= paginacion copiada de la web ==============*/



/***** Numbered Page Navigation (Pagination) Code.
      Tested up to WordPress version 3.1.2 *****/
 
/* Function that Rounds To The Nearest Value.
   Needed for the pagenavi() function */
function round_num($num, $to_nearest) {
   /*Round fractions down (http://php.net/manual/en/function.floor.php)*/
   return floor($num/$to_nearest)*$to_nearest;
}
 
/* Function that performs a Boxed Style Numbered Pagination (also called Page Navigation).
   Function is largely based on Version 2.4 of the WP-PageNavi plugin */
function pagenavi($before = '', $after = '') {
    global $wpdb, $wp_query;
    $pagenavi_options = array();
    $pagenavi_options['pages_text'] = ('Página %CURRENT_PAGE% de %TOTAL_PAGES%:');
    $pagenavi_options['current_text'] = '%PAGE_NUMBER%';
    $pagenavi_options['page_text'] = '%PAGE_NUMBER%';
    $pagenavi_options['first_text'] = ('Inicio');
    $pagenavi_options['last_text'] = ('Final');
    $pagenavi_options['next_text'] = 'Siguiente &raquo;';
    $pagenavi_options['prev_text'] = '&laquo; Anterior';
    $pagenavi_options['dotright_text'] = '...';
    $pagenavi_options['dotleft_text'] = '...';
    $pagenavi_options['num_pages'] = 2; //continuous block of page numbers
    $pagenavi_options['always_show'] = 0;
    $pagenavi_options['num_larger_page_numbers'] = 0;
    $pagenavi_options['larger_page_numbers_multiple'] = 5;
 
    //If NOT a single Post is being displayed
    /*http://codex.wordpress.org/Function_Reference/is_single)*/
    if (!is_single()) {
        $request = $wp_query->request;
        //intval — Get the integer value of a variable
        /*http://php.net/manual/en/function.intval.php*/
        $posts_per_page = intval(get_query_var('posts_per_page'));
        //Retrieve variable in the WP_Query class.
        /*http://codex.wordpress.org/Function_Reference/get_query_var*/
        $paged = intval(get_query_var('paged'));
        $numposts = $wp_query->found_posts;
        $max_page = $wp_query->max_num_pages;
 
        //empty — Determine whether a variable is empty
        /*http://php.net/manual/en/function.empty.php*/
        if(empty($paged) || $paged == 0) {
            $paged = 1;
        }
 
        $pages_to_show = intval($pagenavi_options['num_pages']);
        $larger_page_to_show = intval($pagenavi_options['num_larger_page_numbers']);
        $larger_page_multiple = intval($pagenavi_options['larger_page_numbers_multiple']);
        $pages_to_show_minus_1 = $pages_to_show - 1;
        $half_page_start = floor($pages_to_show_minus_1/2);
        //ceil — Round fractions up (http://us2.php.net/manual/en/function.ceil.php)
        $half_page_end = ceil($pages_to_show_minus_1/2);
        $start_page = $paged - $half_page_start;
 
        if($start_page <= 0) {
            $start_page = 1;
        }
 
        $end_page = $paged + $half_page_end;
        if(($end_page - $start_page) != $pages_to_show_minus_1) {
            $end_page = $start_page + $pages_to_show_minus_1;
        }
        if($end_page > $max_page) {
            $start_page = $max_page - $pages_to_show_minus_1;
            $end_page = $max_page;
        }
        if($start_page <= 0) {
            $start_page = 1;
        }
 
        $larger_per_page = $larger_page_to_show*$larger_page_multiple;
        //round_num() custom function - Rounds To The Nearest Value.
        $larger_start_page_start = (round_num($start_page, 10) + $larger_page_multiple) - $larger_per_page;
        $larger_start_page_end = round_num($start_page, 10) + $larger_page_multiple;
        $larger_end_page_start = round_num($end_page, 10) + $larger_page_multiple;
        $larger_end_page_end = round_num($end_page, 10) + ($larger_per_page);
 
        if($larger_start_page_end - $larger_page_multiple == $start_page) {
            $larger_start_page_start = $larger_start_page_start - $larger_page_multiple;
            $larger_start_page_end = $larger_start_page_end - $larger_page_multiple;
        }
        if($larger_start_page_start <= 0) {
            $larger_start_page_start = $larger_page_multiple;
        }
        if($larger_start_page_end > $max_page) {
            $larger_start_page_end = $max_page;
        }
        if($larger_end_page_end > $max_page) {
            $larger_end_page_end = $max_page;
        }
        if($max_page > 1 || intval($pagenavi_options['always_show']) == 1) {
            /*http://php.net/manual/en/function.str-replace.php */
            /*number_format_i18n(): Converts integer number to format based on locale (wp-includes/functions.php*/
            $pages_text = str_replace("%CURRENT_PAGE%", number_format_i18n($paged), $pagenavi_options['pages_text']);
            $pages_text = str_replace("%TOTAL_PAGES%", number_format_i18n($max_page), $pages_text);
            echo $before.'<div class="pagenavi">'."\n";
 
            if(!empty($pages_text)) {
                echo '<span class="pages">'.$pages_text.'</span>';
            }
            //Displays a link to the previous post which exists in chronological order from the current post.
            /*http://codex.wordpress.org/Function_Reference/previous_post_link*/
            previous_posts_link($pagenavi_options['prev_text']);
 
            if ($start_page >= 2 && $pages_to_show < $max_page) {
                $first_page_text = str_replace("%TOTAL_PAGES%", number_format_i18n($max_page), $pagenavi_options['first_text']);
                //esc_url(): Encodes < > & " ' (less than, greater than, ampersand, double quote, single quote).
                /*http://codex.wordpress.org/Data_Validation*/
                //get_pagenum_link():(wp-includes/link-template.php)-Retrieve get links for page numbers.
                echo '<a href="'.esc_url(get_pagenum_link()).'" class="first" title="'.$first_page_text.'">1</a>';
                if(!empty($pagenavi_options['dotleft_text'])) {
                    echo '<span class="expand">'.$pagenavi_options['dotleft_text'].'</span>';
                }
            }
 
            if($larger_page_to_show > 0 && $larger_start_page_start > 0 && $larger_start_page_end <= $max_page) {
                for($i = $larger_start_page_start; $i < $larger_start_page_end; $i+=$larger_page_multiple) {
                    $page_text = str_replace("%PAGE_NUMBER%", number_format_i18n($i), $pagenavi_options['page_text']);
                    echo '<a href="'.esc_url(get_pagenum_link($i)).'" class="single_page" title="'.$page_text.'">'.$page_text.'</a>';
                }
            }
 
            for($i = $start_page; $i  <= $end_page; $i++) {
                if($i == $paged) {
                    $current_page_text = str_replace("%PAGE_NUMBER%", number_format_i18n($i), $pagenavi_options['current_text']);
                    echo '<span class="current">'.$current_page_text.'</span>';
                } else {
                    $page_text = str_replace("%PAGE_NUMBER%", number_format_i18n($i), $pagenavi_options['page_text']);
                    echo '<a href="'.esc_url(get_pagenum_link($i)).'" class="single_page" title="'.$page_text.'">'.$page_text.'</a>';
                }
            }
 
            if ($end_page < $max_page) {
                if(!empty($pagenavi_options['dotright_text'])) {
                    echo '<span class="expand">'.$pagenavi_options['dotright_text'].'</span>';
                }
                $last_page_text = str_replace("%TOTAL_PAGES%", number_format_i18n($max_page), $pagenavi_options['last_text']);
                echo '<a href="'.esc_url(get_pagenum_link($max_page)).'" class="last" title="'.$last_page_text.'">'.$max_page.'</a>';
            }
            next_posts_link($pagenavi_options['next_text'], $max_page);
 
            if($larger_page_to_show > 0 && $larger_end_page_start < $max_page) {
                for($i = $larger_end_page_start; $i <= $larger_end_page_end; $i+=$larger_page_multiple) {
                    $page_text = str_replace("%PAGE_NUMBER%", number_format_i18n($i), $pagenavi_options['page_text']);
                    echo '<a href="'.esc_url(get_pagenum_link($i)).'" class="single_page" title="'.$page_text.'">'.$page_text.'</a>';
                }
            }
            echo '</div>'.$after."\n";
        }
    }
}

?>