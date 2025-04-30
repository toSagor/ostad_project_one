<?php
class Solub_Custom_Recent_Posts extends WP_Widget {

public function __construct() {
    parent::__construct(
        'solub_custom_recent_posts',
        __('Solub Recent Posts', 'solub'),
        ['description' => __('Displays recent blog posts with Solub theme markup.', 'solub')]
    );
}

public function widget($args, $instance) {
    $title = apply_filters('widget_title', $instance['title']);
    $post_count = !empty($instance['post_count']) ? absint($instance['post_count']) : 5;
    $order = ($instance['order'] === 'ASC') ? 'ASC' : 'DESC';

    echo $args['before_widget'];

    if (!empty($title)) {
        echo $args['before_title'] . esc_html($title) . $args['after_title'];
    }

    $query = new WP_Query([
        'post_type' => 'post',
        'posts_per_page' => $post_count,
        'orderby' => 'date',
        'order' => $order,
    ]);
    ?>
        <div class="tp-sidebar-widget-content">
        <div class="tp-sidebar-post">
    <?php

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            $post_link = get_permalink();
            $post_title = get_the_title();
            $post_date = get_the_date('F j, Y');
            $thumb_url = get_the_post_thumbnail_url(get_the_ID(), '90X90');
            $thumb_url = $thumb_url ? $thumb_url : get_template_directory_uri() . '/assets/img/blog/blog-sidebar/blog-rc-1.jpg';
            ?>
            <div class="tp-recent-post-item d-flex align-items-center mb-3">
                <div class="tp-recent-post-thumb mr-20">
                    <a href="<?php echo esc_url($post_link); ?>">
                        <?php the_post_thumbnail('thumbnail'); ?>
                    </a>
                </div>
                <div class="tp-recent-post-content">
                    <h3 class="tp-recent-post-title">
                        <a href="<?php echo esc_url($post_link); ?>"><?php echo esc_html($post_title); ?></a>
                    </h3>
                    <div class="tp-recent-post-meta">
                        <span><i class="fa-regular fa-clock"></i> <?php echo esc_html($post_date); ?></span>
                    </div>
                </div>
            </div>
            <?php
        endwhile;
        wp_reset_postdata();
    endif;
?>
    </div>
    </div>
<?php
    echo $args['after_widget'];
}

public function form($instance) {
    $title = !empty($instance['title']) ? $instance['title'] : __('Recent Posts', 'solub');
    $post_count = !empty($instance['post_count']) ? absint($instance['post_count']) : 5;
    $order = !empty($instance['order']) ? $instance['order'] : 'DESC';
    ?>
    <p>
        <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'solub'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
               name="<?php echo $this->get_field_name('title'); ?>" type="text"
               value="<?php echo esc_attr($title); ?>">
    </p>

    <p>
        <label for="<?php echo $this->get_field_id('post_count'); ?>"><?php _e('Number of posts:', 'solub'); ?></label>
        <input class="tiny-text" id="<?php echo $this->get_field_id('post_count'); ?>"
               name="<?php echo $this->get_field_name('post_count'); ?>" type="number" min="1"
               value="<?php echo esc_attr($post_count); ?>">
    </p>

    <p>
        <label for="<?php echo $this->get_field_id('order'); ?>"><?php _e('Order:', 'solub'); ?></label>
        <select id="<?php echo $this->get_field_id('order'); ?>"
                name="<?php echo $this->get_field_name('order'); ?>">
            <option value="DESC" <?php selected($order, 'DESC'); ?>><?php _e('Descending', 'solub'); ?></option>
            <option value="ASC" <?php selected($order, 'ASC'); ?>><?php _e('Ascending', 'solub'); ?></option>
        </select>
    </p>
    <?php
}

public function update($new_instance, $old_instance) {
    $instance = [];
    $instance['title'] = sanitize_text_field($new_instance['title']);
    $instance['post_count'] = absint($new_instance['post_count']);
    $instance['order'] = in_array($new_instance['order'], ['ASC', 'DESC']) ? $new_instance['order'] : 'DESC';
    return $instance;
}
}

// Register the widget
function solub_register_custom_recent_posts_widget() {
register_widget('Solub_Custom_Recent_Posts');
}
add_action('widgets_init', 'solub_register_custom_recent_posts_widget');
