<?php
/*
Plugin Name: Countdown Timer
Plugin URI: /#
Description: Add countdown timers to your posts or pages with customizable duration and appearance.
Version: 1.0.0
Author: Kafayat Faniran
Author URI: https://www.linkedin.com/in/kafayatfaniran
License: GPL2
*/

if( ! defined( 'ABSPATH' )) {
  die('How can I help you?');
}

// Plugin activation and deactivation hooks
register_activation_hook(__FILE__, 'countdown_timer_activate');
register_deactivation_hook(__FILE__, 'countdown_timer_deactivate');

function countdown_timer_activate() {};

function countdown_timer_deactivate() {};

class CountdownTimer {

  public function __construct() {
      add_action('init', array($this, 'init'));
      add_shortcode('countdown', array($this, 'shortcode_countdown_timer'));
  }

  public function init() {
    //!
  }

  // Shortcode function to display a countdown timer
  public function shortcode_countdown_timer($atts) {
      $atts = shortcode_atts(
          array(
              'duration' => '30', // The default duration in seconds
              'format' => 'd:h:m:s', // The default format (days:hours:minutes:seconds)
              'appearance' => '', // The default appearance (can be customized using CSS)
          ),
          $atts,
          'countdown'
      );

      // Extracting attributes
      $duration = intval($atts['duration']);
      $format = $atts['format'];
      $appearance = esc_attr($atts['appearance']);

      // Generating and returning the countdown timer HTML output
      $output = '<div class="countdown-timer" style="' . $appearance . '">';
      $output .= $this->generate_countdown_script($duration, $format);
      $output .= '</div>';

      return $output;
  }

  /// Enqueueing the countdown timer JavaScript
  public function enqueue_scripts() {
    wp_enqueue_script('countdown-timer', plugins_url('js/countdown-timer.js', __FILE__), array('jquery'), '1.0', true);
}
}

new CountdownTimer();
