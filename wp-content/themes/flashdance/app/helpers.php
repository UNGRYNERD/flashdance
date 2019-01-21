<?php

namespace App;

use Roots\Sage\Container;

/**
 * Get the sage container.
 *
 * @param string $abstract
 * @param array  $parameters
 * @param Container $container
 * @return Container|mixed
 */
function sage($abstract = null, $parameters = [], Container $container = null)
{
    $container = $container ?: Container::getInstance();
    if (!$abstract) {
        return $container;
    }
    return $container->bound($abstract)
        ? $container->makeWith($abstract, $parameters)
        : $container->makeWith("sage.{$abstract}", $parameters);
}

/**
 * Get / set the specified configuration value.
 *
 * If an array is passed as the key, we will assume you want to set an array of values.
 *
 * @param array|string $key
 * @param mixed $default
 * @return mixed|\Roots\Sage\Config
 * @copyright Taylor Otwell
 * @link https://github.com/laravel/framework/blob/c0970285/src/Illuminate/Foundation/helpers.php#L254-L265
 */
function config($key = null, $default = null)
{
    if (is_null($key)) {
        return sage('config');
    }
    if (is_array($key)) {
        return sage('config')->set($key);
    }
    return sage('config')->get($key, $default);
}

/**
 * @param string $file
 * @param array $data
 * @return string
 */
function template($file, $data = [])
{
    return sage('blade')->render($file, $data);
}

/**
 * Retrieve path to a compiled blade view
 * @param $file
 * @param array $data
 * @return string
 */
function template_path($file, $data = [])
{
    return sage('blade')->compiledPath($file, $data);
}

/**
 * @param $asset
 * @return string
 */
function asset_path($asset)
{
    return sage('assets')->getUri($asset);
}

/**
 * @param string|string[] $templates Possible template files
 * @return array
 */
function filter_templates($templates)
{
    $paths = apply_filters('sage/filter_templates/paths', [
        'views',
        'resources/views'
    ]);
    $paths_pattern = "#^(" . implode('|', $paths) . ")/#";

    return collect($templates)
        ->map(function ($template) use ($paths_pattern) {
            /** Remove .blade.php/.blade/.php from template names */
            $template = preg_replace('#\.(blade\.?)?(php)?$#', '', ltrim($template));

            /** Remove partial $paths from the beginning of template names */
            if (strpos($template, '/')) {
                $template = preg_replace($paths_pattern, '', $template);
            }

            return $template;
        })
        ->flatMap(function ($template) use ($paths) {
            return collect($paths)
                ->flatMap(function ($path) use ($template) {
                    return [
                        "{$path}/{$template}.blade.php",
                        "{$path}/{$template}.php",
                    ];
                })
                ->concat([
                    "{$template}.blade.php",
                    "{$template}.php",
                ]);
        })
        ->filter()
        ->unique()
        ->all();
}

/**
 * @param string|string[] $templates Relative path to possible template files
 * @return string Location of the template
 */
function locate_template($templates)
{
    return \locate_template(filter_templates($templates));
}

/**
 * Determine whether to show the sidebar
 * @return bool
 */
function display_sidebar()
{
    static $display;
    isset($display) || $display = apply_filters('sage/display_sidebar', false);
    return $display;
}

/*
* Funtcion load more post with ajax
*/
function my_load_more_scripts() {
 
	global $wp_query; 
	// register our main script but do not enqueue it yet
  wp_enqueue_script('my_loadmore', asset_path('scripts/loadmore.js'), ['jquery'], null, true);
  
	wp_localize_script( 'my_loadmore', 'loadmore_params', array(
		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
		'posts' => json_encode( $wp_query->query_vars ), // everything about your loop is here
		'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
		'max_page' => $wp_query->max_num_pages
	) );
 
 	wp_enqueue_script( 'my_loadmore' );
}

add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\my_load_more_scripts', 100);


//WP AJAX
function loadmore_ajax_handler(){
 
	$args = json_decode( stripslashes( $_POST['query'] ), true );
	$args['paged'] = $_POST['page'] + 1;
	$args['post_status'] = 'publish';
 
	query_posts( $args );
 
	if( have_posts() ) {
		while( have_posts() ){ the_post();?>
     

      <div class="col-12 col-md-6 col-lg-4 grid-item">
        <article @php post_class() @endphp>
          <a class="see-more" href="<?php echo get_permalink() ?>">
            <?php if ( has_post_thumbnail() )
              the_post_thumbnail('large');
            ?>
            <div class="content">
              <header>
                <h2 class="entry-title"><?php echo get_the_title() ?></h2>
                <time class="updated" datetime="<?php echo get_post_time('c', true) ?>"><?php echo get_the_date('d M Y') ?></time>
              </header>
              <div class="entry-summary">
                  <p><?php echo wp_trim_words( get_the_content(), 42, '...' ); ?></p>
                  <p class="see-more">Leer más</p>
              </div>
            </div>   
          </a> 
        </article>
      </div>

      <?php
    }
  }
	die;
}
add_action('wp_ajax_loadmore', __NAMESPACE__ . '\\loadmore_ajax_handler', 100);
add_action('wp_ajax_nopriv_loadmore', __NAMESPACE__ . '\\loadmore_ajax_handler', 100);

/**
 * Enable Option Page
 */

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Página de opciones',
		'menu_title'	=> 'Página de opciones',
		'menu_slug' 	=> 'general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

}