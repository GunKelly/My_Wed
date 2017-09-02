<!DOCTYPE html>
<html>
<head>
	<title>STBBU</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/ain.css" />
</head>
<body>
<section id="main" class="clearfix home-default">
<div class="container">
<?php
		$active='home';
		require_once ("admin/db_connection.php");
		require_once ("admin/functions.php");
        include("include.php");
    ?>
    <div class="contents">
    <?php
    	if(isset($_GET["pageID"])){
    		$pageId = $_GET["pageID"];
    	}else{
    		$pageId=1;
    	}
    	$res=getpages($conn,$pageId);
    	if($res !=false){
    		echo $res[2];
    	}

    ?>

    </div>
	<div class="clear"></div>
	<?php include("foot.php"); ?>
</div>
</body>
</html>