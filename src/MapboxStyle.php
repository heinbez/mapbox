<?php

	namespace Heinbez\Mapbox;

	class MapboxStyle {

		/**
		 * Options
		 * 
		 * @var array
		 */
		public $options = array();

		/**
		 * Constructor Call
		 * 
		 * @param array $options 
		 */
		public function __construct($options) {
			$this->options = $options;
		}

		/**
		 * Set Stroke Width
		 * 
		 * @param  integer $width 
		 * 
		 * @return void
		 */
		public function strokeWidth($width) {
			$this->options['stroke-width'] = $width;
		}

		/**
		 * Set Stroke Color
		 * 
		 * @param  integer $width 
		 * 
		 * @return void
		 */
		public function strokeColor($color) {
			$this->options['stroke'] = $color;
		}

		/**
		 * Set Stroke Opacity
		 * 
		 * @param  integer $width 
		 * 
		 * @return void
		 */
		public function strokeOpacity($opacity) {
			$this->options['stroke-opacity'] = $opacity;
		}

		/**
		 * _Call
		 * 
		 * @return array
		 */
		public function get() {
			return $this->options;
		}

	}
