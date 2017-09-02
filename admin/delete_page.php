<?php
		/*require_once ("db_connection.php");
		require_once ("functions.php");
	if(isset($_GET["pageid"])){
		$delete = deletepage($conn,$_GET["pageid"]);
		if($delete == true){
			header("location: veiw page.php");
		}
	}*/
	require_once("db_connection.php");
    require_once("functions.php");
	if (isset($_GET["pageid"])){
		$delete = deletePage($conn,$_GET["pageid"]);
		if ($delete == true) {
			header("location:veiw_page.php");
			# code...
		}
	}
?>