<?php
	include("dbconnect.php");
?>
<html>
<head>
<title>Welcome to Njoro Electronics</title>

<link href="styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="container">
<!-- header section -->
	<?php
		include("header.php");
	// check if user is visiting page other than home page
		if(!isset($_GET['page']))
		{ ?>
			<div class="banner"><img src="images/banner.png
				" alt="electronics image"/></div>
	<?php
		}
	?>

<!--main content section -->
    <div class="maincontent">
 		<?php
 			if(!isset($_GET['page']))
 			{
 				include("home.php");
 			}
 			else
 			{
 				$page=$_GET['page'];
 				include("$page.php");
 			}
 		?>
  	</div>
	
	<?php
		include("seccontent.php");
	?>

<!--footer section -->
	<div class="footer"></div>
</div><!-- Container ends here-->
</body>
</html>
