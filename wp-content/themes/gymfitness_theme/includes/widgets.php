<?php

if (!defined('ABSPATH')) die();

class GymFitness_Clases_Widget extends WP_Widget
{

    function __construct()
    {
        parent::__construct(
            'gymfitness_widget',
            esc_html__('GymFitness Clases', 'gymfitness'),
            array('description' => esc_html__('Add classes as a widget', 'gymfitness'),)
        );
    }

    public function widget($args, $instance)
    {
?>
        <ul class="classes-sidebar">
            <?php
            $args = array(
                "post_type" => "gymfitness_clases",
                "posts_per_page" => $instance["quantity"],

            );

            $classes = new WP_Query($args);
            while ($classes->have_posts()) {
                $classes->the_post();
            ?>
                <li>
                    <a class=" " href="<?php the_permalink(); ?>">
                        <div class="image">
                            <?php the_post_thumbnail("thumbnail"); ?>
                        </div>
                        <div class="class-info">
                            <h3>
                                <?php the_title(); ?>
                            </h3>
                            <?php $class_days = get_field("horario_clase");
                            $init_hour = get_field("hora_inicio");
                            $end_hour = get_field("hora_fin");
                            ?>
                            <p><?php echo "{$class_days}" ?> - <?php echo "{$init_hour} a {$end_hour}." ?></p>
                        </div>
                    </a>
                </li>
            <?php
            }
            wp_reset_postdata();
            ?>
        </ul>
    <?php
    }

    public function form($instance)
    {
        $quantity = !empty($instance["quantity"]) ? $instance["quantity"] : esc_html("Insert number of classes");
    ?>
        <label for="<?php echo esc_attr($this->get_field_id('quantity')); ?>">
            <?php esc_attr_e("Insert number of classes") ?>
        </label>
        <input class="widefat" type="number"
            id="<?php echo esc_attr($this->get_field_id('quantity')); ?>"
            name="<?php echo esc_attr($this->get_field_name('quantity')); ?>"
            value="<?php echo esc_attr("quantity"); ?>">
        </input>
        </p>
<?php
        return $quantity;
    }

    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance["quantity"] = (!empty($new_instance["quantity"])) ? sanitize_text_field($new_instance["quantity"]) : "";
        return $instance;
    }
}

function gymfitness_widget_register()
{
    register_widget('GymFitness_Clases_Widget');
}
add_action('widgets_init', 'gymfitness_widget_register');
