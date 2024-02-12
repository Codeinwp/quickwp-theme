<?php
/**
 * QuickWP functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package QuickWP
 * @since QuickWP 1.0
 */

/**
 * Register Theme Support
 */

if ( ! function_exists( 'quickwp_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function quickwp_setup() {
		remove_theme_support( 'core-block-patterns' );
	}
endif;

add_action( 'after_setup_theme', 'quickwp_setup' );

/**
 * Register block styles.
 */

if ( ! function_exists( 'quickwp_block_styles' ) ) :
	/**
	 * Register custom block styles
	 *
	 * @since QuickWP 1.0
	 * @return void
	 */
	function quickwp_block_styles() {

		register_block_style(
			'core/details',
			array(
				'name'         => 'arrow-icon-details',
				'label'        => __( 'Arrow icon', 'quickwp' ),
				/*
				 * Styles for the custom Arrow icon style of the Details block
				 */
				'inline_style' => '
				.is-style-arrow-icon-details {
					padding-top: var(--wp--preset--spacing--10);
					padding-bottom: var(--wp--preset--spacing--10);
				}

				.is-style-arrow-icon-details summary {
					list-style-type: "\2193\00a0\00a0\00a0";
				}

				.is-style-arrow-icon-details[open]>summary {
					list-style-type: "\2192\00a0\00a0\00a0";
				}',
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'         => 'pill',
				'label'        => __( 'Pill', 'quickwp' ),
				/*
				 * Styles variation for post terms
				 * https://github.com/WordPress/gutenberg/issues/24956
				 */
				'inline_style' => '
				.is-style-pill a,
				.is-style-pill span:not([class], [data-rich-text-placeholder]) {
					display: inline-block;
					background-color: var(--wp--preset--color--accent);
					color: var(--wp--preset--color--contrast-4);
					padding: var(--wp--preset--spacing--10) var(--wp--preset--spacing--20);
					border-radius: 999px;
					line-height:1;

				}

				.is-style-pill a:hover {
					background-color: var(--wp--preset--color--accent-2);
					text-decoration:none;
				}',
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'quickwp' ),
				/*
				 * Styles for the custom checkmark list block style
				 * https://github.com/WordPress/gutenberg/issues/51480
				 */
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
		register_block_style(
			'core/navigation-link',
			array(
				'name'         => 'arrow-link',
				'label'        => __( 'With arrow', 'quickwp' ),
				/*
				 * Styles for the custom arrow nav link block style
				 */
				'inline_style' => '
				.is-style-arrow-link .wp-block-navigation-item__label:after {
					content: "\2197";
					padding-inline-start: 0.25rem;
					vertical-align: middle;
					text-decoration: none;
					display: inline-block;
				}',
			)
		);
	}
endif;

add_action( 'init', 'quickwp_block_styles' );

if ( ! defined( 'QUICKWP_URL' ) ) {
	define( 'QUICKWP_URL', trailingslashit( get_template_directory_uri() ) );
}

if ( ! defined( 'QUICKWP_PATH' ) ) {
	define( 'QUICKWP_PATH', trailingslashit( get_template_directory() ) );
}

/**
 * Enqueue block stylesheets.
 */

if ( ! function_exists( 'quickwp_block_stylesheets' ) ) :
	/**
	 * Enqueue custom block stylesheets
	 *
	 * @since QuickWP 1.0
	 * @return void
	 */
	function quickwp_block_stylesheets() {
		/**
		 * The wp_enqueue_block_style() function allows us to enqueue a stylesheet
		 * for a specific block. These will only get loaded when the block is rendered
		 * (both in the editor and on the front end), improving performance
		 * and reducing the amount of data requested by visitors.
		 *
		 * See https://make.wordpress.org/core/2021/12/15/using-multiple-stylesheets-per-block/ for more info.
		 */
		wp_enqueue_block_style(
			'core/button',
			array(
				'handle' => 'quickwp-button-style-outline',
				'src'    => get_parent_theme_file_uri( 'assets/css/button-outline.css' ),
				'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
				'path'   => get_parent_theme_file_path( 'assets/css/button-outline.css' ),
			)
		);
	}
endif;

add_action( 'init', 'quickwp_block_stylesheets' );

/**
 * Register pattern categories
 */

if ( ! function_exists( 'quickwp_pattern_categories' ) ) :
	/**
	 * Register categories
	 *
	 * @since QuickWP 1.0
	 * @return void
	 */
	function quickwp_pattern_categories() {
		$categories = array(
			'quickwp/featured'           => array( 'label' => __( 'Featured', 'quickwp' ) ),
			'quickwp/headers'            => array( 'label' => __( 'Headers', 'quickwp' ) ),
			'quickwp/footers'            => array( 'label' => __( 'Footers', 'quickwp' ) ),
			'quickwp/heroes_page_titles' => array( 'label' => __( 'Heroes / Page Titles', 'quickwp' ) ),
			'quickwp/features'           => array( 'label' => __( 'Features', 'quickwp' ) ),
			'quickwp/content'            => array( 'label' => __( 'Content', 'quickwp' ) ),
			'quickwp/testimonials'       => array( 'label' => __( 'Testimonials', 'quickwp' ) ),
			'quickwp/team'               => array( 'label' => __( 'Team', 'quickwp' ) ),
			'quickwp/pricing'            => array( 'label' => __( 'Pricing', 'quickwp' ) ),
			'quickwp/call_to_action'     => array( 'label' => __( 'Call to Action', 'quickwp' ) ),
			'quickwp/post_loops'         => array( 'label' => __( 'Post Loops', 'quickwp' ) ),
			'quickwp/pages'              => array( 'label' => __( 'Pages', 'quickwp' ) ),
		);

		foreach ( $categories as $slug => $args ) {
			if ( WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $slug ) ) {
				continue;
			}

			register_block_pattern_category( $slug, $args );
		}
	}
endif;

add_action( 'init', 'quickwp_pattern_categories' );

/**
 * Register Strings
 */

if ( ! function_exists( 'quickwp_strings' ) ) :
	/** Register strings
	 *
	 * @since QuickWP 1.0
	 * @return array
	 */
	function quickwp_strings( $strings ) {
		$strings = array(

			// Generic patterns.
			'hero_title'              => __( 'Just another hero title to strengthen your message', 'quickwp' ),
			'quickwp_feature_1'       => __( 'Easy to customise', 'quickwp' ),
			'quickwp_feature_2'       => __( 'Patterns Collection', 'quickwp' ),
			'quickwp_feature_3'       => __( 'Powered by Blocks', 'quickwp' ),
			'page_title'              => __( 'This is a page title', 'quickwp' ),
			'about_page_title'        => __( 'About our Team', 'quickwp' ),
			'about_me'                => __( 'About me', 'quickwp' ),
			'services_page_title'     => __( 'Explore our Services', 'quickwp' ),
			'section_title'           => __( 'This is section title', 'quickwp' ),
			'subtitle'                => __( 'Subtitle', 'quickwp' ),
			'section_description'     => __( 'A short section description', 'quickwp' ),
			'paragraph_text'          => __( 'This is placeholder text, feel free to replace it with your unique content. It  is included here just to provide you with a better understanding of how your text will fit in the layout.', 'quickwp' ),
			'short_text'              => __( 'Just some placeholder text', 'quickwp' ),

			// Feature patterns.
			'feature_section_title'   => __( 'Showcase your Features and Services', 'quickwp' ),
			'feature_title'           => __( 'This is feature title', 'quickwp' ),
			'feature_description'     => __( 'A placeholder description that you can replace with your own content.', 'quickwp' ),
			'button_text'             => __( 'Learn More', 'quickwp' ),
			'button_text_2'           => __( 'Get Started', 'quickwp' ),

			// Team patterns.
			'team_section_title'      => __( 'Our Team', 'quickwp' ),
			'team_member'             => __( 'Team member name', 'quickwp' ),
			'member_role'             => __( 'Co-founder / Other Role', 'quickwp' ),

			// Pricing patterns.
			'pricing_section_title'   => __( 'A pricing section. Join premium!', 'quickwp' ),
			'plan_title'              => __( 'Plan title', 'quickwp' ),
			'price'                   => __( '$19.99', 'quickwp' ),
			'price_feature'           => __( 'A pricing feature', 'quickwp' ),

			// Contact patterns.
			'contact_page_title'      => __( 'Get in touch', 'quickwp' ),
			'contact_section_title'   => __( 'Contact details', 'quickwp' ),
			'follow'                  => __( 'Follow us', 'quickwp' ),
			'contact_details'         => __( 'Contact detail example', 'quickwp' ),

			// FAQ patterns.
			'faq_section_title'       => __( 'Frequently Asked Questions', 'quickwp' ),
			'faq_title'               => __( 'Just a frequent question', 'quickwp' ),

			// Portfolio patterns.
			'portfolio_section_title' => __( 'Selected Portfolio', 'quickwp' ),
			'portfolio_title'         => __( 'A project title', 'quickwp' ),
			'portfolio_client'        => __( 'Client Name', 'quickwp' ),

			// Loops and templates.
			'read_more'               => __( 'Read more', 'quickwp' ),
			'continue_reading'        => __( 'Continue reading', 'quickwp' ),
			'no_posts_found'          => __( 'No posts were found', 'quickwp' ),
			'search_results'          => __( 'Search results', 'quickwp' ),
			'search_button'           => __( 'Search', 'quickwp' ),
			'search_placeholder'      => __( 'Search for a keyword...', 'quickwp' ),
			'404'                     => __( '404', 'quickwp' ),
			'page_not_found'          => __( 'Unfortunately the page was not found.', 'quickwp' ),
			'categories'              => __( 'Categories', 'quickwp' ),
			'read_also'               => __( 'Read also…', 'quickwp' ),
			'previous'                => __( 'Previous Page', 'quickwp' ),
			'next'                    => __( 'Next Page', 'quickwp' ),

			// Content Patterns.
			'content_title'           => __( 'A generic content title', 'quickwp' ),
			'content_subtitle'        => __( 'A content subtitle', 'quickwp' ),
			'lorem_ipsum_subtitle'    => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'quickwp' ),

			// Testimonial patterns.
			'testimonial'             => __( '"...Absolutely one of the best services out there, very professional and easy-going experience, highly recommended..."', 'quickwp' ),
			'testimonial_name'        => __( 'Jason Doe', 'quickwp' ),

			// CTA patterns.
			'cta_title'               => __( 'Get started today, get in touch!', 'quickwp' ),
			'quickwp_cta_title'       => __( 'Create your new website today, with QuickWP!', 'quickwp' ),
		);

		return $strings;
	}
endif;

add_filter( 'quickwp_strings', 'quickwp_strings' );

/**
 * Register Templates
 */

 if ( ! function_exists( 'quickwp_templates' ) ) :
	
 	/**
	 * Register Templates
	 *
	 * @since QuickWP 1.0
	 * @return array
	 */
	function quickwp_templates( $templates ) {
		$templates = array(
			'homepage' => array(
				'homepage-1' => QUICKWP_PATH . 'templates/homepage-1.html',
				'homepage-2' => QUICKWP_PATH . 'templates/homepage-2.html',
				'homepage-3' => QUICKWP_PATH . 'templates/homepage-3.html',
				'homepage-4' => QUICKWP_PATH . 'templates/homepage-4.html',
			),
		);

		return $templates;
	}
endif;

add_filter( 'quickwp_templates', 'quickwp_templates' );
