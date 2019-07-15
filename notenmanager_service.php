<?php
	class Notenmanager{
		function getAllGrades(){
		return true;
		}
		
		function getGradeByMatNo($matno){
		return true;
		}
		
		function entry($name, $vname, $matno, $note){
		return true;
		}
}

function main() {
	header('content-Type: application/json')
	$nm = new Notenmanager();
	
	$methode=$_GET['action'];
	
	switch($methode)
		case "getAllGrades":
			echo $nm->getAllGrades();break;
		case "getGradeByMatNo":
			echo $nm->getGradeByMatNo($_GET["matno"]);break;
		case "entry":
			echo $nm->entry($_GET["name"], $_GET["vorname"], $_GET["matno"], $_GET["note"]);break;
		default:
			echo "Fehler"; break;
}

main();
?>