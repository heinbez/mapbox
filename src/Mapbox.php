<?php

	namespace Mapbox;
	
	class Mapbox {
	
		/**
		 * Configuration 
		 * 
		 * @var array
		 */
		private static $config = array();
	
		/**
		 * Styles
		 * 
		 * @var MapboxStyle 
		 */
		private $style;
	
		/**
		 * Coordinates
		 * 
		 * @var MapboxPathCollection
		 */
		private $coordinates = array();
	
		/**
		 * Markers Collection
		 * 
		 * @var array
		 */
		private $markers = array();
	
		/**
		 * Width, Height of Map
		 * 
		 * @var integer $w
		 * @var integer $h
		 */
		private $width;
		private $height;
	
		/**
		 * Constructor Call
		 */
		public function __construct($w = 500, $h = 200) {
			$this->setWidth($w);
			$this->setHeight($h);
		}
	
		/**
		 * Set Configuration options
		 * 
		 * @param MapboxConfiguration $config 
		 */
		public static function setConfig(MapboxConfiguration $config) {
			static::$config = $config;
		}
	
		/**
		 * Push Coordinates
		 * 
		 * @param  array $cords 
		 */
		public function pushCoordinates($cords) {
			$this->coordinates = $cords;
		}
	
		/**
		 * Push Style
		 * 
		 * @param  MapboxStyle $style 
		 */
		public function setStyle(MapboxStyle $style) {
			$this->style = $style->get();
		}
	
		/**
		 * Set Width of Map
		 * 
		 * @param Integer $w
		 */
		private function setWidth($w) {
			$this->width = $w;
		}
	
		/**
		 * Set Height of Map
		 * 
		 * @param Integer $h
		 */
		private function setHeight($h) {
			$this->height = $h;
		}
	
		/**
		 * Add Marker 
		 * 
		 * @param array $options 
		 */
		public function addMarker($options) {}
	
		/**
		 * Prepare Geo Data
		 * 
		 * @return array
		 */
		private function geoData() {
			$_data = [
				'type' => "Feature"
			];
	
			// Push Coordinates Path
			if($this->coordinates) {
				$_data['geometry']['type'] = "LineString";
				$_data['geometry']['coordinates'] = $this->coordinates->collection();
			}
			
			// Push Style Options
			if($this->style) {
				$_data['properties'] = $this->style;
			}
	
			return urlencode(json_encode($_data));
		}
	
		/**
		 * Generate a Static Mapbox Image 
		 * 
		 * @param  MapboxLatLng $options 
		 * 
		 * @return string $path
		 */
		public function generate() {
			return sprintf(
				'%s/%s/geojson(%s)/%s/%sx%s.png?access_token=%s',
				static::$config->host(),
				static::$config->style(),
				$this->geoData(),
				'auto',
				$this->width,
				$this->height,
				static::$config->key()
			);
		}
	
	}
