<?php session_start();
	include("include/db.php");
	include("include/functions.php");
	if(isset($_REQUEST['submit']))
	{
		extract($_REQUEST);
		$sql = "INSERT INTO `menu_master` (`mid`, `mtitle`, `msname`, `mlink`, `pmid`) VALUES (NULL, '$mtitle', '$msname', '$mlink', $mpid);";
		$result=mysql_query($sql,$link);
		checkRes($result,"Menue Added !","Error:".mysql_error());
		header("location:menu.php");
	}
	else
	{
		setMsgGo("fill data properly","menu.php");
	}
?>