<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Add page</title>
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
	<?php
		switch (@$_POST["btnsubmit"]) {
			case "Add Page":
				if (empty($_POST["title"])) {
				echo "Please enter page title";
				}
				elseif (empty($_POST["desc"])) {
					echo "Please enter page Description";
				}
				else{
					$title = $_POST["title"];
					$desc =	$_POST["desc"];
					$order = $_POST["pageorder"];
					$add = addpage($conn,$title,$desc,$order);
					if ($add == true) {
						echo "Add page successfully!";
					}else{
						echo "Failed to add the page";
					}
				}
				break;
			
		}
	?>
	<form name="frmpage" action="?" method="post">
		<table>
			<tr>
				<td>ឈ្មោះរបស់​ Page</td>
				<td><input type="text" name="title"></td>
			</tr>
			<tr>
				<td valign="top">Description</td>
				<td><textarea class="tinymce" rows="6" name="desc"></textarea></td>
			</tr>
			<tr>
				<td>លេខរៀង Page</td>
				<td><input type="text" name="pageorder"></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="btnsubmit" value="Add Page" />
					<input type="submit" name="btnsubmit" value="Canel" />
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