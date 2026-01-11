function create_stories_post_type() {
  register_post_type('stories',
    array(
      'labels' => array(
        'name' => __('Stories'),
        'singular_name' => __('Story')
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'stories'),
      'supports' => array('title', 'editor', 'comments'),
      'menu_icon' => 'dashicons-book'
    )
  );
}
add_action('init', 'create_stories_post_type');
