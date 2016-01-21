<?php
namespace classes;
use WP_Query;

/**
 * Created by PhpStorm.
 * User: imola
 * Date: 1/15/16
 * Time: 2:40 PM
 */
class Home
{
    public $id;
    public $content;
    public $education;
    public $experience;
    public $skills;

    public function __construct() {
        $this->id = get_the_ID();
        $this->content = get_post_field('post_content', $this->id);

        $args = array(
            'post_type' => 'education',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'caller_get_posts' => 1,
            'orderby' => 'menu_order',
            'order' => 'ASC',
        );

        $query = new WP_Query($args);

        foreach ($query->posts as $post) {
            $this->education[] = array(
                'start' => get_post_meta($post->ID, 'wpcf-start-date', true),
                'end' => get_post_meta($post->ID, 'wpcf-end-date', true),
                'location' => get_post_meta($post->ID, 'wpcf-location', true),
                'degree' => get_post_meta($post->ID, 'wpcf-degree', true)
            );
        }

        $args = array(
            'post_type' => 'experience',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'caller_get_posts' => 1,
            'orderby' => 'menu_order',
            'order' => 'ASC',
        );

        $query = new WP_Query($args);

        foreach ($query->posts as $post) {
            $this->experience[] = array(
                'start' => get_post_meta($post->ID, 'wpcf-start-date', true),
                'end' => get_post_meta($post->ID, 'wpcf-end-date', true),
                'employer' => get_post_meta($post->ID, 'wpcf-employer', true),
                'city' => get_post_meta($post->ID, 'wpcf-city', true),
                'position' => get_post_meta($post->ID, 'wpcf-position', true),
                'description' => get_post_meta($post->ID, 'wpcf-description', true)
            );
        }

        $args = array(
            'post_type' => 'skill',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'caller_get_posts' => 1,
            'orderby' => 'menu_order',
            'order' => 'ASC',
        );

        $query = new WP_Query($args);

        foreach ($query->posts as $post) {
            $this->skills[] = array(
                'name' => get_post_meta($post->ID, 'wpcf-skill-name', true),
                'list' => get_post_meta($post->ID, 'wpcf-skills', false)
            );
        }
    }
}