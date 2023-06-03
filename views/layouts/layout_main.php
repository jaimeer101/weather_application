<!DOCTYPE html>
<html>
  <?php include("views/includes/defaults/head.php"); ?>
  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper ">
    <?php
      include("views/includes/defaults/top_menu.php");
	  include("views/includes/defaults/side_menu.php");
	  include("views/pages/".$page.".php");
	  include("views/includes/defaults/footer.php");
	?>
	</div>
	<?php
	  include("views/includes/defaults/js.php");
	?>
  </body>
</html>