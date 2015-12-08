<?php
	
	namespace Heinbez\Mapbox;

	class MapboxConfiguration {

		/**
		 * Mapbox Configuration
		 * 
		 * @var array
		 */
		public static $config = array();

		/**
		 * Constructor Call
		 */
		public function __construct(array $options) {
			static::$config = $options;
		}

		/**
		 * Return Client Key
		 * 
		 * @return String
		 */
		public function key() {
			return static::$config['client']['key'];
		}

		/**
		 * Return Client Secret
		 * 
		 * @return String
		 */
		public function secret() {
			return static::$config['client']['secret'];
		}

		/**
		 * Return Host
		 * 
		 * @return string
		 */
		public function host() {
			return static::$config['host'];
		}

		/**
		 * Return Style
		 * 
		 * @return string
		 */
		public function style() {
			return static::$config['style'];
		}

		/**
		 * Return Configuration Array
		 * 
		 * @return array
		 */
		public function __toString() {
			return static::$config;
		}

	}
