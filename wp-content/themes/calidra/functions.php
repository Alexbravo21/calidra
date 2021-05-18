<?php
    add_theme_support( 'post-thumbnails' );

    // Register Custom Post Type
    function custom_post_type_productos() {

        $labels = array(
            'name'                  => _x( 'Productos', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'Producto', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Productos', 'text_domain' ),
            'name_admin_bar'        => __( 'Productos', 'text_domain' ),
            'archives'              => __( 'Listado de productos', 'text_domain' ),
            'attributes'            => __( 'Atributos de producto', 'text_domain' ),
            'parent_item_colon'     => __( 'Producto padre', 'text_domain' ),
            'all_items'             => __( 'Todos los productos', 'text_domain' ),
            'add_new_item'          => __( 'Añadir nuevo producto', 'text_domain' ),
            'add_new'               => __( 'Añadir producto', 'text_domain' ),
            'new_item'              => __( 'Nuevo producto', 'text_domain' ),
            'edit_item'             => __( 'Editar producto', 'text_domain' ),
            'update_item'           => __( 'Actualizar producto', 'text_domain' ),
            'view_item'             => __( 'Ver producto', 'text_domain' ),
            'view_items'            => __( 'Ver productos', 'text_domain' ),
            'search_items'          => __( 'Buscar producto', 'text_domain' ),
            'not_found'             => __( 'No hay productos', 'text_domain' ),
            'not_found_in_trash'    => __( 'No encontrado en basura', 'text_domain' ),
            'featured_image'        => __( 'Imagen de producto', 'text_domain' ),
            'set_featured_image'    => __( 'Establecer imagen de producto', 'text_domain' ),
            'remove_featured_image' => __( 'Eliminar imagen de producto', 'text_domain' ),
            'use_featured_image'    => __( 'Usar como imagen de producto', 'text_domain' ),
            'insert_into_item'      => __( 'Insertar en producto', 'text_domain' ),
            'uploaded_to_this_item' => __( 'Producto subido', 'text_domain' ),
            'items_list'            => __( 'Lista de productos', 'text_domain' ),
            'items_list_navigation' => __( 'Navegación de la lista de productos', 'text_domain' ),
            'filter_items_list'     => __( 'Filtrar lista de productos', 'text_domain' ),
        );
        $rewrite = array(
            'slug'                  => 'productos',
            'with_front'            => true,
            'pages'                 => false,
            'feeds'                 => true,
        );
        $args = array(
            'label'                 => __( 'Producto', 'text_domain' ),
            'description'           => __( 'Productos de Calidra', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-megaphone',
            'show_in_admin_bar'     => true,
            'show_in_rest'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'rewrite'    => $rewrite,
            'capability_type'       => 'page',
        );
        register_post_type( 'producto', $args );

    }
    add_action( 'init', 'custom_post_type_productos', 0 );
?>