
<!DOCTYPE html>
<html>
<head>
	<title>STBBU Admin</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/ain.css" />
</head>
<body>
<section id="main" class="clearfix home-default">
<div class="container">
<?php
		$active='home';
		require_once ("db_connection.php");
		require_once ("functions.php");
        include("include.php");
    ?>
    <div class="contents">
    	<table border="1px" class="table_for">
    		<tr>
    			<th width="200px" align="center">ឈ្មោះរបស់ Page</th>
    			<th width="500px" align="center">Description</th>
    			<th width="200px" align="center">កែសំរួល​ Page</th>
    		</tr>
    		<?php

    			$result = getpage($conn);
    			while ($data = mysqli_fetch_array($result)) {
    				$desc=(strlen(strip_tags($data[2]))>140 ? substr(strip_tags($data[2]),0,140)."...":strip_tags($data[2]));
    				echo"<tr>";
    				echo "<td>$data[1]</td>";
    				echo "<td>$desc</td>";
    				echo "<td align='center'><a href='edit_page.php?pageID=$data[0]'>Edit</a> || <a href='delete_page.php?pageid=$data[0]'onClick=\"return confirm('Are you sure to delete this page?')\">Delete</a></td>";
    				echo"</tr>";
    			}
    		?>
    	</table>

    </div>
	<div class="clear"></div>
	<?php include("foot.php"); ?>
</div>
</body>
</html>