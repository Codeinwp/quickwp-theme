<?php
/**
 * Content class.
 *
 * @package Codeinwp/QuickWPTheme
 */

namespace ThemeIsle\QuickWPTheme;

/**
 * Content class.
 */
class Content {
	/**
	 * Namespace.
	 *
	 * @var string
	 */
	public $namespace;

	/**
	 * Default Namespace.
	 *
	 * @var string
	 */
	public $default_namespace;

	/**
	 * Strings.
	 *
	 * @var array
	 */
	public $strings = array();

	/**
	 * Constructor.
	 *
	 * @param string $slug Slug.
	 * @param string|null $default_namespace Default namespace.
	 */
	public function __construct( $slug, $default_namespace = null ) {
		$this->strings   = apply_filters( 'quickwp_strings', array() );
		$this->namespace = 'quickwp/' . $slug;

		if ( $default_namespace ) {
			$this->default_namespace = 'quickwp/' . $default_namespace;
		}
	}

	/**
	 * Get String.
	 *
	 * @param string $slug Slug.
	 * @param string $string Strings.
	 * @param string|null $default Default.
	 *
	 * @return string
	 */
	public function get_string( $slug, $string, $default = null ) {
		$string = $this->strings[ $string ] ?? '';

		if ( $default ) {
			$string = apply_filters( $this->default_namespace . '/' . $default, $string );
		}

		return esc_html( apply_filters( $this->namespace . '/' . $slug, $string ) );
	}

	/**
	 * Echo String.
	 *
	 * @param string $slug Slug.
	 * @param string $string String.
	 * @param string|null $default Default.
	 */
	public function string( $slug, $string, $default = null ) {
		echo $this->get_string( $slug, $string, $default );
	}

	/**
	 * Get Image.
	 *
	 * @param string $slug Slug.
	 * @param string $image Image.
	 *
	 * @return string
	 */
	public function get_image( $slug, $image ) {
		$image = QUICKWP_URL . 'assets/images/' . $image;
		$image = apply_filters( 'quickwp/image', $image );
		return esc_url( apply_filters( $this->namespace . '/' . $slug, $image ) );
	}

	/**
	 * Echo Image.
	 *
	 * @param string $slug Slug.
	 * @param string $image Image.
	 */
	public function image( $slug, $image ) {
		echo $this->get_image( $slug, $image );
	}
}
