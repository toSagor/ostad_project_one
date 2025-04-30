<?php
class Solub_Category_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'solub_category_widget',
            __('Solub Category List', 'solub'),
            ['description' => __('Displays a list of post categories with custom markup for Solub theme.', 'solub')]
        );
    }

    public function widget($args, $instance) {
        $title = apply_filters('widget_title', $instance['title']);
        $cat_count = !empty($instance['cat_count']) ? absint($instance['cat_count']) : 5;

        echo $args['before_widget'];
        if (!empty($title)) {
            echo $args['before_title'] . esc_html($title) . $args['after_title'];
        }

        $categories = get_categories([
            'orderby' => 'name',
            'order' => 'ASC',
            'number' => $cat_count,
            'hide_empty' => true,
        ]);

        if (!empty($categories)) {
            echo '<div class="tp-service-sidebar-content"><div class="tp-service-sidebar-list"><ul>';
            foreach ($categories as $category) {
                $category_link = get_category_link($category->term_id);
                ?>
                <li>
                    <a href="<?php echo esc_url($category_link); ?>">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><?php echo esc_html($category->name); ?></div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
                                    <path d="M1 11L6 6L1 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                        </div>
                    </a>
                </li>
                <?php
            }
            echo '</ul></div></div>';
        }

        echo $args['after_widget'];
    }

    public function form($instance) {
        $title = !empty($instance['title']) ? $instance['title'] : __('Categories', 'solub');
        $cat_count = !empty($instance['cat_count']) ? absint($instance['cat_count']) : 5;
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php _e('Title:', 'solub'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text"
                   value="<?php echo esc_attr($title); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('cat_count')); ?>"><?php _e('Number of categories to show:', 'solub'); ?></label>
            <input class="tiny-text" id="<?php echo esc_attr($this->get_field_id('cat_count')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('cat_count')); ?>" type="number" min="1"
                   value="<?php echo esc_attr($cat_count); ?>">
        </p>
        <?php
    }

    public function update($new_instance, $old_instance) {
        $instance = [];
        $instance['title'] = sanitize_text_field($new_instance['title']);
        $instance['cat_count'] = absint($new_instance['cat_count']);
        return $instance;
    }
}

// Register the widget
function solub_register_category_widget() {
    register_widget('Solub_Category_Widget');
}
add_action('widgets_init', 'solub_register_category_widget');
