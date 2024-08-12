# Setup WPH for local development

# Install wordpress

Downalod WP from https://wordpress.org/download/

- Install wordpress into a directory like `/usr/local/wph/html`.

# Clone the WPH github

Clone the WPH github repo into the Wordpress `wp-content/themes` directory.

```
cd /usr/local/wph/html/wp-content/themes
git clone git@github.com:daniel-watts/wph.git
```

# Setup a DDEV localhost

Go to the wordpress root directory and run `ddev config`.

```
cd /usr/local/wph/html
ddev config

Project name (html): wph
Docroot Location (current directory):
Project Type: wordpress

ddev start
```

# setup Wordpress

Install and setup Wordpress in the browser:

- Go to http://wph.ddev.site

Run through the Wordpress installation and then login:

```
- Site Title: WPH Dev
- Username: Daniel
- Password: a69LK2SAkG8SB47&DU
- Your Email: mrwattz@gmail.com
```

- Login to wordpress.
- Goto `Appearance` > `Themes`
- Activate the WordPress Helper Theme
- Delete any other available Wordpress themes.



# NOTES for Later

```
/**
 * --------------------------------
 * CSS and JS
 * --------------------------------
 */
add_action( 'wp_enqueue_scripts', 'register_css_files' );
function register_css_files() {
    wp_enqueue_style('reset-styles', get_template_directory_uri() . '/css/reset.css');
    wp_enqueue_style('layout-styles', get_template_directory_uri() . '/css/layout.css');
    wp_enqueue_style('content-styles', get_template_directory_uri() . '/css/content.css');
    wp_enqueue_style('theme-styles', get_template_directory_uri() . '/css/theme.css');
}
```

```
add_action( 'after_setup_theme', 'register_menues' );
function register_menues() {

    // Register the main navigation menu.
    register_nav_menu(

        // The unique ID (slug) for the menu.
        'main_nav',

        // A short menu description and where it goes.
        // Wrapped with the text domain ID for the theme.
        __('Main Navigation', 'onetheme-text-domain')
    );
}
```

```
/**
 * -------------------------------------------------------------------
 * `Visual Art` custom post type registration function.
 * -------------------------------------------------------------------
 */
function create_visual_art_posttype() {
  
    register_post_type( 'visual_art',
        // CPT Options
        [
            'labels' => [
                'name'                => __('Visual Art', 'onetheme-text-domain'),
                'singular_name'       => __('Visual Art', 'onetheme-text-domain'),
                'menu_name'           => __('Visual Art', 'onetheme-text-domain'),
                'parent_item_colon'   => __('Parent Visual Art', 'onetheme-text-domain'),
                'all_items'           => __('All Visual Art', 'onetheme-text-domain'),
                'view_item'           => __('View Visual Art', 'onetheme-text-domain'),
                'add_new_item'        => __('Add New Visual Art', 'onetheme-text-domain'),
                'add_new'             => __('Add New Visual Art', 'onetheme-text-domain'),
                'edit_item'           => __('Edit Visual Art', 'onetheme-text-domain'),
                'update_item'         => __('Update Visual Art', 'onetheme-text-domain'),
                'search_items'        => __('Search Visual Art', 'onetheme-text-domain'),
                'not_found'           => __('Visual Art Not Found', 'onetheme-text-domain'),
                'not_found_in_trash'  => __('Visual Art Not found in Trash', 'onetheme-text-domain'),
            ],
            'public'                  => true,
            'has_archive'             => true,
            'rewrite'                 => ['slug' => 'visual-art'],
            'show_in_rest'            => true,
            'capability_type'         => 'post',

            // Taxonomies.
            'taxonomies'              => ['post_tag'],

            // Features this CPT supports in Post Editor
            'supports'                => ['title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',],
  
            // A hierarchical CPT is like Pages and can have
            // Parent and child items. A non-hierarchical CPT
            // is like Posts.
            'hierarchical'            => false,
            'show_ui'                 => true,
            'show_in_menu'            => true,
            'show_in_nav_menus'       => true,
            'show_in_admin_bar'       => true,
            'menu_position'           => 5,
            'can_export'              => true,
            'exclude_from_search'     => false,
            'publicly_queryable'      => true,
            
        ]
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_visual_art_posttype');

/**
 * -------------------------------------------------------------------
 * Add the `visual_art` custom post type thumbnails to the theme.
 * -------------------------------------------------------------------
 */
function add_visual_art_theme_supports() {

    // Add thumbnail support to the `visual_art` type template files.
    add_theme_support('post-thumbnails', ['visual_art']);
}
add_action('after_setup_theme', 'add_visual_art_theme_supports');

```



















