<?php
	session_start();
	function check($query){
		if($query["id"]==$_SESSION["w1"] Or $query["id"]==$_SESSION["w2"] Or $query["id"]==$_SESSION["w3"] )
		{
			return 0;
		}
		if($_SESSION["w1"]==-1)
		{
			$_SESSION["r1"]=$query;
		}
		else if($_SESSION["w2"]==-1)
		{
			$_SESSION["r2"]=$query;
		}
		else
		{
			$_SESSION["r3"]=$query;
		}
		return 1;
	}
?>
