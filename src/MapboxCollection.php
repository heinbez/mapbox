<?php 

	namespace Heinbez\Mapbox;

	class MapboxCollection {

		/**
		 * Collection
		 * 
		 * @var array
		 */
		private $collection = array();

		/**
		 * Constructor Call
		 * 
		 * @param array $locations 
		 */
		public function __construct($locations) {
			$this->collection = $locations;
		}

		/**
		 * Push new location entry
		 * 
		 * @param  decimal $lat  
		 * @param  decimal $long 
		 * 
		 * @return void
		 */
		public function push($lat, $long) {
			array_push([$lat, $long], $this->collection);
		}

		/**
		 * Return Location Collection
		 * 
		 * @return array
		 */
		public function collection() {
			return $this->collection;
		}

	}
