<!-- jQuery -->
<script src="assets/js/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
<!-- Overlay scrollbars -->
<script src="assets/js/overlayscrollbars/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE -->
<script src="assets/js/main/adminlte.js"></script>
<script>
	var loading = "<div class = 'progress'>";
	loading += "<div class = 'progress-bar progress-bar-primary progress-bar-striped active' role = 'progressbar' aria-valuenow = '100' aria-valuemin = '0' aria-valuemin = '100' style = 'width: 100%'>";
	loading += "<span class = 'sr-only'>Loading</span>";
	loading += "</div>"
	loading += "</div>";
	
	function alert_message(message, type){
		response  = "<div class = 'alert alert-"+type+"'>";
		response += "	<button type = 'button' class = 'close' data-dismiss = 'alert' aria-hidden = 'true'> ";
		response += "		&times;";
		response += "	</button>";
		response += message;
		response += "</div>";
		
		return response;
	}
</script>

<script src="assets/js/pages/<?php echo $page; ?>.js"></script>
