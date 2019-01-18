<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Ultimos post', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Resultado de busqueda para: %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Nada encontrado', 'sage');
        }
        return get_the_title();
    }
}
