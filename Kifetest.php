<?php

define('INCLUDE_CHECK',1);
require "connect.php";

?>								
					
					
					
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/jquery.simpletip-1.3.1.pack.js"></script>
		<script type="text/javascript" src="js/tipscript.js"></script>
 <?php

				$result = mysql_query("SELECT * FROM products");
				while($row=mysql_fetch_assoc($result))
				{
					echo '<div class="product"><img src="image/products/'.$row['img'].'" alt="'.htmlspecialchars($row['name']).'" width="128" height="128" class="pngfix" /></div>';
				}

?>