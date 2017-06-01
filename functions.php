
<?php 

add_theme_support('post-thumbnails'); #Criar uma imagem destacada no post

function cadastrar_post_type_imoveis(){

$nomeSingular = 'Imóvel';
$nomePlural = 'Imóveis';
$labels = array(
	'name' => $nomePlural,
	'name_singular' => $nomeSingular,
	'add_new_item' => 'Adicionar novo ' . $nomeSingular,
	'edit_item' => 'Editar ' . $nomePlural
);

$supports = array(
	'title',
	'editor',
	'thumbnail'

	);
$args = array(
	'labels'=> $labels,
	'public' => true,
	'description' => $description,
	'menu_icon' => 'dashicons-admin-home',
	'supports' => $supports
 				 );

register_post_type('imovel', $args); # Insere um novo item no dashboard do WordPress

}

add_action('init', 'cadastrar_post_type_imoveis'); #Chama tarefa, funções para serem executadas no WordPress

?>
