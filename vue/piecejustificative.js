/*function piece() {
  var piece=document.getElementById("piece");
  piece.innerHTML="<label for='fichier'><abbr title='choisissez le fichier'><span class='glyphicon glyphicon-paperclip btn-lg'></span></abbr></label><input type='file' id='fichier' class='btn btn-danger'> <br> <label for='description'>Description</label><br><textarea cols='60' rows='6'></textarea> <br> <input type='reset' name='annuler' class='btn btn-danger'> <input type='submit' name='valider' class='btn btn-success'> ";
}*/

/*// consulter doit recevoire en paramettre le nom et la description du justificatif a consulter
function consulter() {
  //description et nom vont recevoire la valeur de la description et du nom reçu en paramettre
  var description="description du fichier";
  var nom="nom du fichier";
  fille=open(",",'height=50,width=300, status=yes');
  //fille=window.open('pageb.html','consulter','menubar=yes, scrollbars=yes, top=100, left=100, width=600, height=1000');
  fille.document.write('<title>consulter</title>');
  fille.document.write('<label for="nom">Nom du fichier</label><input type="text" id="nom" value="'+nom+'" disabled> <br> <label for="description">Description</label><br><textarea cols="60" rows="6" disabled>'+description+'</textarea> <br>');
  fille.document.write('<object type="application/pdf" name="PDF" id="PDF" width="100%" height="90%" ><param name="src" value="x.pdf" /> </object>');
}

// modifier doit recevoire en paramettre le nom du justificatif a modifier
function modifier() {
  //nom va recevoire la valeur du nom reçu en paramettre
  var nom="nom du fichier";
  //fille=open(",",'height=50,width=300, status=yes');
  fille=window.open('pageb.html','consulter','menubar=yes, scrollbars=yes, top=100, left=100, width=500, height=300');
  fille.document.write('<title>consulter</title>');
  fille.document.write('<link rel="stylesheet" type="text/css" href="../dist/css/bootstrap.css"><link rel="stylesheet" type="text/css" href="../dist/css/myStyle.css"><script type="text/javascript" src="../dist/js/bootstrap.js"></script><link rel="stylesheet" type="text/css" href="pieceJustificative.css">');
  fille.document.write('<h1>Choix du fichier</h1>');
  fille.document.write('<form action="#" method="POST"><label for="fichier"><abbr title="choisissez le fichier"><span class="glyphicon glyphicon-paperclip btn-lg"></span></abbr></label><input type="file" id="fichier" class="btn btn-danger"> <br> <label for="description">Description</label><br><textarea cols="60" rows="6"></textarea> <br> <input type="reset" name="annuler" class="btn btn-danger"> <input type="submit" name="valider" class="btn btn-success">  </form>');
}*/

//supprimer doit recevoire en paramettre le nom du justificatif a supprimer
function supprimerJustificatif(idetu,justificatif) {
  //alert("etu="+idetu+" "+justificatif);
  if (confirm("Voulez-vous vraiment supprimer cet élément:")) {
       document.location.href="modifierFichier.php?var="+idetu+"&var1="+justificatif; 
  }
  else{
     alert("annulation confirmer");
  }
}