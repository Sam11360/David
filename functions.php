<?php

/*
* On utilise une fonction pour créer notre custom post type 'Arts Martiaux'
*/

function wpm_custom_post_type() {

	// On rentre les différentes dénominations du custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Artes marciales', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Artemarciale', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Artes marciales'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Todos los artes marciales'),
		'view_item'           => __( 'Ver los Artes marciales'),
		'add_new_item'        => __( 'Añadir Artes marciales'),
		'add_new'             => __( 'Añadir'),
		'edit_item'           => __( 'Editar artes marciales'),
		'update_item'         => __( 'Cambiar un artes marciales '),
		'search_items'        => __( 'Buscar un artes marciales'),
		'not_found'           => __( 'No se ha encontrado'),
		'not_found_in_trash'  => __( 'No se ha encontrado en la Papelera'),
	);

	// Je peux définir ici d'autres options pour mon custom post type

	$args = array(
		'label'               => __( 'Artes martiales'),
		'description'         => __( 'Todos sobre los artes marciales'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur du custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		/*
		* Différentes options supplémentaires
		*/
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'Artesmartiales'),
		'thumbnail',
		'custom-fields'
	);

	// On enregistre le custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type( 'Artes marciales', $args );

}

add_action( 'init', 'wpm_custom_post_type', 0 );
//add_action('wp_insert_post', 'wpc_champs_personnalises_defaut');

?>
