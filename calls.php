<?php 
include("functions.php");
include("dbfunctions.php");
include("dbconnect.php");
		if(!empty($_REQUEST['action'])){
			switch($_REQUEST['action']){
				
			case"index";
			//if(isset($_SESSION['userId']))
				index();
			/*else
				Login();*/
				break;
		
			}
		}else{
		//if(isset($_SESSION['userId']))
			index();
		//else
		//Login();
		}
?>