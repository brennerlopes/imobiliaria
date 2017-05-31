<?php get_header(); ?>
    


<main class="home-main">
    <div class="container">
        <h1>Bem vindo</h1>
        <ul class="imoveis-listagem">
            <?php
                if( have_posts() ){ /* Faz a busca dos posts que estão no banco */ 
                while(have_posts() ){
            the_post();
?>
            <!-- Faz a renderização de um item da lista de post -->
            <li class="imoveis-listagem-item">
                
                 <?php the_post_thumbnail() ; ?> <!-- Busca a imagem salva no banco de dados --> 
                <h2><?php the_title(); ?></h2> <!-- imprime o titulo do post -->
                <p><?php the_content(); ?></p> <!-- imprime a descrição do post -->
            </li>
            
            <?php
           }
        }?>
            
        
        </ul>
        
    </div>
</main>



 <?php get_footer(); ?>