<!doctype html>
<html>
  <head>
    <title>Noten</title>
  </head>
  <body>
	<form onsubmit ="sendReq(); return false;">
		<h1>Noteneingabe</h1>
		<input type="text" placeholder="Vorname" id="name" > 
		<input type="text" placeholder="Nachname" id="vname" > 
		<input type="text" placeholder="Matrikelnummer" id="matno" > 
		<input type="text" placeholder="Note" id="note" > 		
		<input type ="submit" value="Absenden">
	</form>	
	<p id ="Result">fff</p>
    <style>
		 body {
			text-align: center;
		  }
		 input{
			 height:25px;
			 width:150px;
			 border: 3px solid blue;
		 }
    </style>
  
  
    <script>
	function sendReq(){
		let name = document.getElementById("name").value;
		let vname = document.getElementById("vname").value;
		let matno = document.getElementById("matno").value;
		let note = document.getElementById("note").value;
		let url = "";
		let result = document.getElementById("Result");
		
		if((name=="")&&(vname=="")&&(matno=="")&&(note==""))
		{
			url = "notenmanager_service.php?action=getAllGrades";
		}
		else if((name=="")&&(vname=="")&&(matno=="")&&(note==""))
		{
			url = "notenmanager_service.php?action=getGradeByMatNo&matno="+matno;
		}
		else if(!(name=="")&&!(vname=="")&&!(matno=="")&&!(note==""))
		{
			url = "notenmanager_service.php?action=entry&name="+name+"&vorname="+vname+"&matno="+matno+"&note="+note;
		}
		else{
			result.innerHTML="Fehlschlag";
		}
		
				result.innerHTML=url;
		
		fetch(url).then(function (response)
		{
		console.log(response);
			if(response.ok)
			{
				result.innerHTML ="Erfolg: " +response.status + " " + response.statusText;
			}
			else
				result.innerHTML="Fehlschlag";
		})
		.catch(function(err){
			result.innerHTML="Fehlschlag2";
		});
	}
    </script>
	
  </body>
</html>
