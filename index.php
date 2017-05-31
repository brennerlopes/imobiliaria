<?php get_header(); ?>
    <h1>Bem vindo</h1>
<?php
    if( have_posts() ){
        while(have_posts() ){
            the_post();
?>
  <h2><?php the_title(); ?></h2> <--- imprime o titulo do post -->
</--->
 <div><?php the_content(); ?></div> <--- imprime a descrição do post /--->
<?php
            
   }
    }

?>
 <?php get_footer(); ?>