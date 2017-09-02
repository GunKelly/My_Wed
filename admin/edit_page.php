<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Edit Page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<script type="text/javascript" src="tiny_mce/jquery-1.6.1.min.js"></script>
	<script type="text/javascript" src="tiny_mce/jquery.tinymce.js"></script>
	<script type="text/javascript" src="tiny_mce/text_editor.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" />
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


	<form name="editpage" action="?" method="post">
	    <?php
    	if(isset($_GET["pageID"])){
    		$_SESSION["curID"]=$_GET["pageID"];
    		$data = getpages($conn, $_GET["pageID"]);
    	}
    	switch (@$_POST["btnsavechange"]) {
    		case 'Canel':
    			header("location:veiw_page.php");
    			break;
    		case 'Save':
    			if(empty($_POST["ptitle"])){
    				echo "please input page title";
    			}else if (empty(["pdesc"])){
    				echo "Please input Description";
    			}else{
    				$update=savepage($conn,
    					             $_SESSION["curID"],
    					             $_POST["ptitle"],
    					             $_POST["pdesc"],
    					             $_POST["pageorder"]    );
    				if($update == true){
    					echo "UPdated page successfully!";
    				}else{
    					echo "Failed To Update Try Again!";
    				}
    			}
    			break;

    	}
    ?>
		<table>
			<tr>
				<td>ឈ្មោះរបស់​ Page</td>
				<td><input type="text" name="ptitle" value="<?php if(isset($_POST["ptitle"])){echo $_POST["ptitle"]; }else{ if(isset($_GET["pageID"])){ echo $data[1] ; }} ?>"> </td>
			</tr>
			<tr>
				<td valign="top">Description</td>
				<td><textarea class="tinymce" rows="6" name="pdesc" ><?php if(isset($_POST["pdesc"])){echo $_POST["pdesc"]; }else{ if(isset($_GET["pageID"])){ echo $data[2] ; }} ?></textarea></td>
			</tr>
			<tr>
				<td>លេខរៀង Page</td>
				<td><input type="text" name="pageorder" value="<?php if(isset($_POST["pageorder"])){echo $_POST["pageorder"]; }else{ if(isset($_GET["pageID"])){ echo $data[3] ; }} ?>"></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="btnsavechange" value="Save" />
					<input type="submit" name="btnsavechange" value="Canel" />
				</td>
			</tr>
		</table>
		</form>
		</div>


	<div class="clear"></div>
	<?php include("foot.php"); ?>
</div>
</body>
</html>