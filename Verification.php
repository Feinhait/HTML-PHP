<?php
   
if(empty($_POST) == false) { //Teste si le champs est vide.
        
        if($_POST['prenom'] == '') {
            $aerror[] = '<p>Veuillez renseigner un name.<p>';
        }else {
        ecriture($_POST['prenom']);
        }
        
        if($_POST['pass'] == '') {
            $aerror[] = '<p>Veuillez renseigner un password.<p>';
        } else {
        ecriture($_POST['pass']);
        }
        
        if($_POST['describ'] == '') {
            $aerror[] = '<p>Veuillez renseigner une describ.<p>';
        } else {
        ecriture($_POST['describ']);
        }
        
        if (isset($_POST['since']) == false) {

        $aerror[] = '<p> Veuillez renseigner une duray.</p>';
        } else {
        ecriture($_POST['since']);
        }
    }


if(isset($_POST['ddn']) == true) { //Teste si le champs est vide.
        
        if($_POST['ddn'] == '') {
            $aerror[] = '<p>Veuillez renseigner une birth date.<p>';
        }else {
        ecriture($_POST['ddn']);
        }
}

if(isset($_POST['situation']) == true) { //Teste si le champs est vide.
        
        if($_POST['situation'] == 'Select') {
            $aerror[] = '<p>Veuillez renseigner une situation.<p>';
        }else {
        ecriture($_POST['situation']);
        }
        
    }
function ecriture($contenu) {
    file_put_contents("Users\contenu.txt", $contenu . "\r\n", FILE_APPEND);
}
?>