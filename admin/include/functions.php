<?php
	function setMsg($message)
	{
		$_SESSION['msg'][] = $message;	
	}
	
	function setMsgGo($message,$url)
	{
		$_SESSION['msg'][] = $message;
		header("location:".$url);	
	}
	
	function dispMsg()
	{
		$outMsg="";
		if(isset($_SESSION['msg']))
		{
			foreach($_SESSION['msg'] as $msg)
			{
				$outMsg.="<div class='alert alert-warning'> $msg </div>";
			}
		}
		else
		{
			return "";
		}
		unset($_SESSION['msg']);
		return $outMsg;
	}
	
	function checkRes($res,$sucessMessage,$failureMessage)
	{
		if($res>0)
		{
			setMsg($sucessMessage);
		}
		else
		{
			setMsg($failureMessage);
		}
	}
	function dispMenu($qry)
	{
		$str="";
		$result = mysql_query($qry);
		if($result)
		{
			while($row = mysql_fetch_array($result))
			{
				$str.="<li><a href='".$row['mlink']."'>".$row["mtitle"]."</a></li>";
			}
		}
		else
		{
			return "<li><a href='#'>".mysql_error()."</a></li>";
		}
		return $str;
	}
	function bindComboBox($qry,$value,$display)	//prints query result in table
	{
		$str="";
		$result = mysql_query($qry);
		if($result)
		{
			while($row = mysql_fetch_array($result))
			{
				$str.="<option value='".$row[$value]."'>".$row[$display]."</option>";
			}
		}
		else
		{
			return "<option value=''>".mysql_error()."</option>";
		}
		return $str;
	}
?>