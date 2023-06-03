<div class="row mt-3">
  <div class="col-md-8 offset-md-2">
	<!--start for header search-->
    <div class="list-group">
	  <div class="list-group-item">
		<div class="row">
		  <div class="col px-4">
		    <div>
			  <div class="float-right"><?php
				echo $date;
			  ?></div>
			  <h3><?php
				echo $location;
			  ?></h3>
			</div>
		  </div>
		</div>
	  </div>
	  <!--end for header search-->
	  <!--start for main details search-->
	  <div class="list-group-item">
		<div class = "row">
		  <div class = "col-4">
			<div class = "form-group">
			  <label class = "control-label">Sunrise</label>
			  <div class = "form-control bg-secondary"><?php
				echo $sunRise;
			  ?></div>
			</div>
		  </div>
		  <div class = "col-4">
			<div class = "form-group">
			  <label class = "control-label">Sunset</label>
			  <div class = "form-control bg-secondary"><?php
				echo $sunSet;
			  ?></div>
			</div>
		  </div>
		</div>
		<div class = "row">
		  <div class = "col-4">
			<div class = "form-group">
			  <label class = "control-label">Temperature</label>
			  <div class = "form-control bg-secondary"><?php
				echo $temperature;
			  ?></div>
			</div>
		  </div>
		  <div class = "col-4">
			<div class = "form-group">
			  <label class = "control-label">Minimum Temperature</label>
			  <div class = "form-control bg-secondary"><?php
				echo $temperatureMin;
			  ?></div>
			</div>
		  </div>
		  <div class = "col-4">
			<div class = "form-group">
			  <label class = "control-label">Maximum Temperature</label>
			  <div class = "form-control bg-secondary"><?php
				echo $temperatureMax;
			  ?></div>
			</div>
		  </div>
		</div>
	  </div>
	   <!--end for main details search-->
	   <!--start for weather data-->
	   <?php
		if(!empty($selectedWeather)){
			foreach($selectedWeather as $wRows){
				$weatherIcon = $wRows["icon"];
				$weatherImage = "https://openweathermap.org/img/wn/".$weatherIcon."@4x.png";
				$weatherTitle = $wRows["main"];
				$weatherDesc = $wRows["description"];
			?>
				<div class="list-group-item">
				  <div class="row">
				    <div class="col-auto">
					  <img class="img-fluid" src="<?php echo $weatherImage; ?>" alt="Weather Image" style="max-height: 160px;">
					</div>
					<div class="col px-4">
					  <div>
						<h3><?php
							echo $weatherTitle;
						?></h3>
						<p><?php
							echo $weatherDesc;
						?></p>
					  </div>
					</div>
				  </div>
				</div>
			<?php
			}
		}
	   ?>
	   <!--end for weather data-->
	</div>
  </div>
</div>