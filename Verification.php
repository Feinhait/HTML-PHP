<?php
   
if(empty($_POST) == false) { //Teste si le champs est vide.
        
        if($_POST['prenom'] == '') {
            $aerror[] = '<p>Veuillez renseigner un name.<p>';
        }
        
        if($_POST['pass'] == '') {
            $aerror[] = '<p>Veuillez renseigner un password.<p>';
            
        }  
        
        if($_POST['describ'] == '') {
            $aerror[] = '<p>Veuillez renseigner une describ.<p>';
        }
        
        if (isset($_POST['since']) == false) {

        $aerror[] = '<p> Veuillez renseigner une duray.</p>';
    }
}

if(isset($_POST['ddn']) == true) { //Teste si le champs est vide.
        
        if($_POST['ddn'] == '') {
            $aerror[] = '<p>Veuillez renseigner une birth date.<p>';
        }
}

if(isset($_POST['situation']) == true) { //Teste si le champs est vide.
        
        if($_POST['situation'] == 'Select') {
            $aerror[] = '<p>Veuillez renseigner une situation.<p>';
        }
        
    }
?>