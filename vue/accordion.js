

function change(span) {
   var gly = document.getElementById(span);
   if (gly.getAttribute("class")=="glyphicon glyphicon-chevron-down") {
      gly.setAttribute("class", "glyphicon glyphicon-chevron-right");
   }
   else{
   	  	for (var i = 1; i<6; i++) {
   	  	     if (document.getElementById(''+i).getAttribute("class")=="glyphicon glyphicon-chevron-down") {
                document.getElementById(''+i).setAttribute("class", "glyphicon glyphicon-chevron-right");
             }
   	  	}	
        gly.setAttribute("class", "glyphicon glyphicon-chevron-down");	
   }
}

function ajoutJust(){
   var val=parseInt (document.getElementById("hiddenJustificatif").value)+1;
   document.getElementById("hiddenJustificatif").value=val;
   document.getElementById("tableJustificatif").innerHTML+="<tr><td><label for='identifiantJustificatif' class='col-xs-2 control-label'>Identifiant du Justificatif</label><input type='text' id='identifiantJustificatif' class='form-control' placeholder='Identifiant du Justificatif' name='idJustificatif"+(val-1)+"'><br><label for='fichier'><abbr title='choisissez le fichier'><span class='glyphicon glyphicon-paperclip btn-lg'></span></abbr></label><input type='file' id='fichier' class='btn btn-danger' name='fichier[]' multiple='multiple'> <br><label for='description'>Description</label><br><textarea cols='60' rows='6' name='descriptionJustificatif"+(val-1)+"'></textarea> <br></td></tr>";
   //var t=document.getElementById("tableJustificatif").innerHTML;
   //alert(t);
}

function ajoutInter(){
   var val=parseInt (document.getElementById("hiddenIntervention").value)+1;
   document.getElementById("hiddenIntervention").value=val;
   document.getElementById("tableIntervention").innerHTML+="<tr><td><label for='identifiantIntervention' class='col-xs-2 control-label'>Identifiant de l'Intervention</label><input type='text' id='identifiantIntervention' class='form-control' placeholder='Identifiant de l'Intervention' name='idDossier"+(val-1)+"'><br><label for='fichier'><abbr title='choisissez le fichier'><span class='glyphicon glyphicon-paperclip btn-lg'></span></abbr></label><input type='file' id='fichier' class='btn btn-danger' name='fichier[]' multiple='multiple'> <br><label for='description'>Description</label><br><textarea cols='60' rows='6' name='descriptionIntervention"+(val-1)+"'></textarea> <br></td></tr>";
}

function ajoutSuivi(){
   var val=parseInt (document.getElementById("hiddenSuivi").value)+1;
   document.getElementById("hiddenSuivi").value=val;
   var table=document.getElementById("tableSuivi");
   table.innerHTML+="<tr><td><input type='date' name='date"+(val-1)+"'></td><td><input type='text' name='natureDemande"+(val-1)+"'></td><td><input type='text' name='actionEffectuee"+(val-1)+"'></td><td><input type='text' name='observation"+(val-1)+"'></td></tr> ";
}