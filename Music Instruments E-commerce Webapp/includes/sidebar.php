<!-------------------------------product categories section ----------------------------------->

<div class="panel panel-default sidebar-menu"><!--panel panel-default sidebar-menu starts--->
	
	<div class="panel-heading"><!--panel-heading starts--->
		<h3 class="panel-title">products categories </h3>
	</div><!--panel-heading end--->

	<div class="panel-body scroll-menu"><!--panel-body starts--->
		<ul class="nav nav-pills nav-stacked category-menu"><!--nav nav-pills nav-stacked category-menu starts--->

<!------------------ dynamic atatchment of prod categories in functions.php-------------------------->
		
			<?php 
				getpcats();
			 ?>
			

		</ul><!--nav nav-pills nav-stacked category-menu ends-->
	</div><!--panel-body ends--->

 </div>

<!------------------------------- categories section ----------------------------------------->

<div class="panel panel-default sidebar-menu"><!--panel panel-default sidebar-menu starts--->

	
	<div class="panel-heading"><!--panel-heading starts--->
		<h3 class="panel-title">Main Categories </h3>
	</div><!--panel-heading end--->

	<div class="panel-body scroll-menu"><!--panel-body starts--->
		<ul class="nav nav-pills nav-stacked category-menu"><!--nav nav-pills nav-stacked category-menu starts--->
			<?php 
				getcats();
			 ?>
		</ul><!--nav nav-pills nav-stacked category-menu ends-->
	</div><!--panel-body ends--->

</div><!--panel panel-default sidebar-menu end--->