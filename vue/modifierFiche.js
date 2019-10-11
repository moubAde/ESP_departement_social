var formES=document.getElementById("formES");
for(var i=0;i<formES.length;i++){
    formES[i].setAttribute("disabled", "disabled");
}

var formEI=document.getElementById("formEI");
for(var i=0;i<formEI.length;i++){
    formEI[i].setAttribute("disabled", "disabled");
}

function modifierficheES() {
    for(var i=0;i<formES.length;i++){
       formES[i].removeAttribute("disabled");
    }	
    var spanES=document.getElementById("spanES");
   spanES.innerHTML="<input type='reset' name='annuler' class='btn btn-info'> <input type='submit' name='validerES' class='btn btn-info'> ";
}


function modifierficheEI(){
    for(var i=0;i<formEI.length;i++){
       formEI[i].removeAttribute("disabled");
    }	
    var spanEI=document.getElementById("spanEI");
    spanEI.innerHTML="<input type='reset' name='annuler' class='btn btn-info'> <input type='submit' name='validerEI' class='btn btn-info'> ";
}

function ajoutsuivi(){
   var val=parseInt (document.getElementById("hiddenSuivi").value);
   var table=document.getElementById("tableSuivi");
   table.innerHTML+="<tr><td><input type='date' name='date"+val+"'></td><td><input type='text' name='natureDemande"+val+"'></td><td><input type='text' name='actionEffectuee"+val+"'></td><td><input type='text' name='observation"+val+"'></td></tr> ";
   val++;
   document.getElementById("hiddenSuivi").value=val;
   
}
