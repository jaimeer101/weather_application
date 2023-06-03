<?php
	class Functions{
		public function format_date($date, $format){
			$strToTimeDate = strtotime($date);
			$newDate = date($format, $strToTimeDate);
			
			return $newDate;
		}
		public function format_date_2($date, $old_format, $new_format){
			$date2 = DateTime::createFromFormat($old_format, $date);
			return $date2->format($new_format);
		}
		
		public function format_date_3($date, $modify, $format_result){
			$dateCreated = new DateTime($date);
			$dateCreated->modify($modify);
			return $dateCreated->format($format_result);
		}
		
		public function format_date_4($date, $format){
			
			$replacedDate = ((strpos($date, '/') !== false) ? $date : str_replace('/', '-', $date));
			$strToTimeDate = strtotime($replacedDate);
			$newDate = date($format, $strToTimeDate);
			return $newDate;
		}
		
		public function compute_time_difference($start, $end){
			$response = "";
			$startTime = strtotime($start);
			$endTime = strtotime($end);
			
			$response = round(abs($endTime - $startTime) / 60 / 60,2);
			
			return $response;
		}
		
		public function clean($string) {
			return preg_replace('/[^A-Za-z0-9\-]/', ' ', $string); // Removes special chars.
		}
		
		public function clear_string($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		
		public function read_csv($file){
			$file_handle = fopen($file, 'r');
			while (!feof($file_handle) ) {
				$line_of_text[] = fgetcsv($file_handle, 1024);
			}
			fclose($file_handle);
			return $line_of_text;
		}
		
		public function echo_array($array){
			echo "<pre>";
			print_r($array);
			echo "</pre>";
		}
		
		public function post($index = null){
			$response = "";
			$sendData = $_POST;
			if($index == ""){
				if(empty($sendData)){
					$response = "No Post data received";
				}
				else{
					$response = $sendData;
				}
			}
			else{
				$response = isset($sendData[$index]) ? $sendData[$index] : "";
			}
			
			return $response;
		}
		
		public function get($index = null){
			$response = "";
			$sendData = $_GET;
			if($index == ""){
				if(empty($sendData)){
					$response = "No Post data received";
				}
				else{
					$response = $sendData;
				}
			}
			else{
				$response = isset($sendData[$index]) ? $sendData[$index] : "";
			}
			
			return $response;
		}
	}
?>