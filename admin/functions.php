<?php
	function addpage($conn,$title,$desc,$order){
		$sql ="INSERT INTO tblweb(pagetitle,pagedescription,pageorder)
		VALUES('".$title."','".$desc."','".$order."')";
		$result = mysqli_query($conn,$sql);
		if ($result) {
			return true;
		}else{
			return false;
		}
	}
	function getpage($conn){
		$sql="SELECT * FROM tblweb";
		$result=mysqli_query($conn,$sql);
		if($result){
			return $result;
		}
		else{
			return false;
		}
	}
	function getpages($conn, $pageid){
		$sql = "SELECT * FROM tblweb WHERE pageid=".$pageid;
		$result = mysqli_query($conn,$sql);
		$data=mysqli_fetch_array($result);
		if($result){
			return $data;
		}else{
			return false;
		}
	}
	function savepage($conn,$id,$title,$desc,$order){
		$sql= "UPDATE tblweb SET pageTitle='".$title."',
		       pageDescription='".$desc."',
		       pageOrder=".$order."
		       WHERE pageID=".$id;
		$result=mysqli_query($conn,$sql);
		if($result){
			return true;
		}else{
			return false;
		}
	}
	/*function deletepage($conn,$id){
		$sql ="DELETE * FROM tblweb WHERE pageID=".$id;
		$result = mysqli_query($conn,$sql);
		if($result){
			return true;
		}else{
			return false;
		}
	}*/
	function deletePage($conn,$id){
		$sql ="DELETE FROM tblweb WHERE pageID=".$id;
		$result = mysqli_query($conn,$sql);
		if($result){
			return true;
		}else{
			return false;
		}

	}
?>