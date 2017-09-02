<div id="header">
	<h1>New Student BBU</h1>
</div>
<div class="clear"></div>
<div class="menu-left">
<nav>
	<?php
	$result = getpage($conn);
	if($result != false){
		while ($data =mysqli_fetch_array($result)) {
			echo "<a href='?pageID=$data[0]'>$data[1]</a>";
			
		}
	}
	
	?>


</nav>
</div>
