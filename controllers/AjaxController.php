<?php
	class AjaxController{
		public $functions;
		public function __construct() {
			$this->functions = new Functions();
		}
		public function load_search_result(){
			$selectedCoordinate = $this->functions->post("coord");
			$selectedWeather = $this->functions->post("weather");
			$selectedBase = $this->functions->post("weather");
			$selectedMain = $this->functions->post("main");
			$selectedVisibility = $this->functions->post("visibility");
			$selectedWind = $this->functions->post("wind");
			$selectedRain = $this->functions->post("rain");
			$selectedClouds = $this->functions->post("clouds");
			$selectedDt = $this->functions->post("dt");
			$selectedSys = $this->functions->post("sys");
			$selectedTimezone = $this->functions->post("timezone");
			$selectedId = $this->functions->post("id");
			$selectedName = $this->functions->post("name");
			$selectedCod = $this->functions->post("cod");
			
			$longhitude = $selectedCoordinate["lon"];
			$latitude = $selectedCoordinate["lat"];
			$temperature = $selectedMain["temp"]." °C";
			$temperatureMin = $selectedMain["temp_min"]." °C";;
			$temperatureMax = $selectedMain["temp_max"]." °C";;
			$country = $selectedSys["country"];
			$sunRise = date("Y-m-d H:i:s", $selectedSys["sunrise"]);
			$sunSet =date("Y-m-d H:i:s",$selectedSys["sunset"]);
			$date = date("Y-m-d H:i:s", $selectedDt);
			$location = $selectedName.", ".$country;
			require_once('views/loads/search_result.php');
		}
	}
?>