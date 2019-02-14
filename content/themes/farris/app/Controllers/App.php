<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

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
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for:<span class="alpha--secondary">%s</span>', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public static function footerContent()
    {
      return get_field('footer_content', 'options');
    }

    public function pagebuilder()
    {
      $return = '';
      $count = 0;

      if( have_rows('page_builder') ):
        while ( have_rows('page_builder') ) : the_row();

        $count ++;
        $layout = get_row_layout();

        switch ($layout) {
          case 'text_module' :
            $return .= \App\template('partials.pagebuilder-text', [
              'text_module' => get_sub_field('text_module'),
            ]);
            break;
          
          case 'accordion_module' :
            $return .= \App\template('partials.pagebuilder-accordion', [
              'module_id' => $count,
              'accordion_items' => get_sub_field('accordion_items'),
            ]);
            break;

          case 'news_posts' :
            $return .= \App\template('partials.pagebuilder-news-posts', [
              'news_posts_heading' => get_sub_field('news_posts_heading'),
              'latest_news_posts' => get_sub_field('latest_news_posts'),
              'news_posts' => get_sub_field('news_posts'),
              'previous_module_style' => $previous_module_style,
            ]);
            $previous_module_style = 'transparent';
            break;
            
        }

        endwhile;
      endif;

      return $return;
  }

  public function latest_news_post_query()
  {
    $post_args = array(
      'post_type' => array('post'),
      'posts_per_page' => 3,
      'post_status' => 'publish'
    );
    $news_items = get_posts($post_args);

    return array_map(function ($post) {
      return [
          'title' => $post->post_title,
          'excerpt' => $post->post_excerpt,
          'permalink' => get_the_permalink($post->ID),
      ];
    }, $news_items);
  
  }
}
