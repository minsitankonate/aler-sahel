<?php

define('ECO_RENEWABLE_ENERGY_NOTICE_BUY_NOW',__('https://www.wpradiant.net/products/solar-energy-wordpress-theme','eco-renewable-energy'));

define('ECO_RENEWABLE_ENERGY_BUY_BUNDLE',__('https://www.wpradiant.net/products/wordpress-theme-bundle/','eco-renewable-energy'));

// Upsell
if ( class_exists( 'WP_Customize_Section' ) ) {
	class Eco_Renewable_Energy_Upsell_Section extends WP_Customize_Section {
		public $type = 'eco-renewable-energy-upsell';
		public $button_text = '';
		public $url = '';
		public $background_color = '';
		public $text_color = '';
		protected function render() {
			$background_color = ! empty( $this->background_color ) ? esc_attr( $this->background_color ) : '#3e84dc';
			$text_color       = ! empty( $this->text_color ) ? esc_attr( $this->text_color ) : '#fff';
			?>
			<li id="accordion-section-<?php echo esc_attr( $this->id ); ?>" class="eco_renewable_energy_upsell_section accordion-section control-section control-section-<?php echo esc_attr( $this->id ); ?> cannot-expand">
				<h3 class="accordion-section-title" style="color:#fff; background:<?php echo esc_attr( $background_color ); ?>;border-left-color:<?php echo esc_attr( $background_color ); ?>;">
					<?php echo esc_html( $this->title ); ?>
					<a href="<?php echo esc_url( $this->url ); ?>" class="button button-secondary alignright" target="_blank" style="margin-top: -4px;"><?php echo esc_html( $this->button_text ); ?></a>
				</h3>
			</li>
			<?php
		}
	}
}
function eco_renewable_energy_admin_notice_style() {
	wp_enqueue_style('eco-renewable-energy-custom-admin-notice-style', esc_url(get_template_directory_uri()) . '/get-started/getstart.css');
}
add_action('admin_enqueue_scripts', 'eco_renewable_energy_admin_notice_style');

/**
 * Display the admin notice if not dismissed.
 */
function eco_renewable_energy_admin_notice() {
    // Check if the notice is dismissed
    $dismissed = get_user_meta(get_current_user_id(), 'eco_renewable_energy_dismissed_notice', true);

    // Display the notice only if not dismissed
    if (!$dismissed) {
        ?>
        <div class="updated notice notice-success is-dismissible notice-get-started-class" data-notice="get-start" style="display: flex;padding: 10px;">
        		<div class="notice-content">
	        		<div class="notice-holder">
	                        <h5><span class="theme-name"><span><?php echo __('Welcome to Eco Renewable Energy', 'eco-renewable-energy'); ?></span></h5>
	                        <h1><?php echo __('Enhance Your Website Development with Radiant Blocks!!', 'eco-renewable-energy'); ?></h1>
	                        </h3>
	                        <div class="notice-text">
	                            <p class="blocks-text"><?php echo __('Effortlessly craft websites for any niche with Radiant Blocks! Experience seamless functionality and stunning responsiveness as you enhance your digital presence with Block WordPress Themes. Start building your ideal website today!', 'eco-renewable-energy') ?></p>
	                        </div>
	                        <a href="<?php echo esc_url(admin_url('themes.php?page=eco-renewable-energy')); ?>" id="install-activate-button" class="button admin-button info-button"><?php echo __('Getting started', 'eco-renewable-energy'); ?></a>

	                        <a href="<?php echo esc_url( ECO_RENEWABLE_ENERGY_NOTICE_BUY_NOW ); ?>" target="_blank" id="go-pro-button" class="button admin-button buy-now-button"><?php echo __('Buy Now ', 'eco-renewable-energy'); ?></a>

	                        <a href="<?php echo esc_url( ECO_RENEWABLE_ENERGY_BUY_BUNDLE ); ?>" target="_blank" id="bundle-button" class="button admin-button bundle-button"><?php echo __('Get Bundle', 'eco-renewable-energy'); ?></a>
	            	</div>
	            </div>
                <div class="theme-hero-screens">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/get-started/notice.png'); ?>" />
                </div>
        </div>
        <?php
    }
}

// Hook to display the notice
add_action('admin_notices', 'eco_renewable_energy_admin_notice');

/**
 * AJAX handler to dismiss the notice.
 */
function eco_renewable_energy_dismissed_notice() {
    // Set user meta to indicate the notice is dismissed
    update_user_meta(get_current_user_id(), 'eco_renewable_energy_dismissed_notice', true);
    die();
}

// Hook for the AJAX action
add_action('wp_ajax_eco_renewable_energy_dismissed_notice', 'eco_renewable_energy_dismissed_notice');

/**
 * Clear dismissed notice state when switching themes.
 */
function eco_renewable_energy_switch_theme() {
    // Clear the dismissed notice state when switching themes
    delete_user_meta(get_current_user_id(), 'eco_renewable_energy_dismissed_notice');
}

// Hook for switching themes
add_action('after_switch_theme', 'eco_renewable_energy_switch_theme');  