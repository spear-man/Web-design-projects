<?php
			$cat_sql="SELECT * FROM category";              // setup query 
			$cat_query=mysqli_query($dbconnect, $cat_sql);  // run query 
			$cat_rs=mysqli_fetch_assoc($cat_query);         // organize assoc array by name collumns 
		// loop to show the categories using do while function
			do { ?>
		<!-- category id picked from database for items categories + redirection to index.php--> 
			<a href="index.php?page=category&categoryID=<?php echo $cat_rs['categoryID']; ?>"><?php echo $cat_rs['name']; ?></a>
				
				<?php
			} while ($cat_rs=mysqli_fetch_assoc($cat_query))
?>