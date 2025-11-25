<?php

/*************************************************
 * ENQUEUE CSS + JS
 *************************************************/
add_action('wp_enqueue_scripts', function () {

    /* ---- CSS ---- */
    wp_enqueue_style(
        'portfolio-style',
        get_stylesheet_uri(),
        [],
        '1.0'
    );

    /* ---- JS HERO ---- */
    wp_enqueue_script(
        'portfolio-hero',
        get_template_directory_uri() . '/assets/js/hero.js',
        ['jquery'],
        '1.0',
        true
    );

    /* ---- JS PRINCIPAL (LOAD MORE) ---- */
    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        ['jquery'],
        '1.0',
        true
    );

    /* ---- AJAX URL POUR main.js ---- */
    wp_localize_script('main-js', 'loadmore', [
        'ajaxurl' => admin_url('admin-ajax.php')
    ]);
});



/*************************************************
 * THEME SUPPORT
 *************************************************/
add_action('after_setup_theme', function () {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    // Taille carrée pour les projets : FINI les bandes noires !
    add_image_size('project_square', 600, 600, true);

    register_nav_menus([
        'primary' => 'Menu principal',
    ]);
});



/*************************************************
 * CUSTOM POST TYPE : PROJETS
 *************************************************/
add_action('init', function () {

    $labels = [
        'name' => 'Projets',
        'singular_name' => 'Projet',
        'add_new' => 'Ajouter un projet',
        'add_new_item' => 'Ajouter un nouveau projet',
        'edit_item' => 'Modifier le projet',
        'new_item' => 'Nouveau projet',
        'view_item' => 'Voir le projet',
        'search_items' => 'Rechercher des projets',
        'not_found' => 'Aucun projet trouvé',
        'menu_name' => 'Projets',
    ];

    register_post_type('projets', [
        'labels' => $labels,
        'public' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'has_archive' => true,
        'rewrite' => ['slug' => 'projets'],
        'show_in_rest' => true,
    ]);
});



/*************************************************
 * AJAX : LOAD MORE PROJETS
 *************************************************/
add_action('wp_ajax_load_more_projets', 'load_more_projets_callback');
add_action('wp_ajax_nopriv_load_more_projets', 'load_more_projets_callback');

function load_more_projets_callback() {

    $page = intval($_POST['page']) + 1;

    $args = [
        'post_type'      => 'projets',
        'posts_per_page' => 6,
        'paged'          => $page,
        'orderby'        => 'date',
        'order'          => 'DESC'
    ];

    $projects = new WP_Query($args);

    if ($projects->have_posts()) :
        while ($projects->have_posts()) :
            $projects->the_post();
            get_template_part('template-parts/project-card');
        endwhile;
    endif;

    wp_reset_postdata();
    wp_die();
}
