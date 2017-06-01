<?php get_header(); ?>
    


<main class="home-main">
    <div class="container">
        <h1>Bem vindo</h1>
        <ul class="imoveis-listagem">
            <?php

            $args = array('post_type' => 'imovel');
            $loop = new WP_Query($args); /* Faz buscas dos posts especiais, que seriam os imóveis cadastrados */
                
                if( $loop->have_posts() ){ /* Faz a busca dos posts que estão no banco */ 
                while($loop->have_posts() ){
            $loop->the_post();
?>
            <!-- Faz a renderização de um item da lista de post -->
            <li class="imoveis-listagem-item">
                <a href="<?php the_permalink(); ?>"> <!-- Pega o link permanente do imóvel -->
                     <?php the_post_thumbnail() ; ?> <!-- Busca a imagem salva no banco de dados --> 
                    <h2><?php the_title(); ?></h2> <!-- imprime o titulo do post -->
                    <p><?php the_content(); ?></p> <!-- imprime a descrição do post -->
                </a>
            </li>
            
            <?php
           }
        }?>
            
        
        </ul>
        
    </div>
</main>



 <?php get_footer(); ?>