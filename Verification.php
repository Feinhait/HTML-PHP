<?php
   $a = 0;
   $Users = 'Users/' . $_SERVER['REMOTE_ADDR'] . '/';
if(empty($_POST) == false) { //Teste si le champs est vide.
        
        if($_POST['prenom'] == '') {
            $aerror[] = '<p>Veuillez renseigner un name.<p>';
        }else {
            ecriture($_POST['prenom']);
            $a = $a+1;
        }
        
        if($_POST['pass'] == '') {
            $aerror[] = '<p>Veuillez renseigner un password.<p>';
        } else {
            ecriture($_POST['pass']);
            $a = $a+1;
        }
        
        if($_POST['describ'] == '') {
            $aerror[] = '<p>Veuillez renseigner une describ.<p>';
        } else {
            ecriture($_POST['describ']);
            $a = $a+1;
        }
        
        if (isset($_POST['since']) == false) {
            $aerror[] = '<p> Veuillez renseigner une duray.</p>';
        } else {
            ecriture($_POST['since']);
            $a = $a+1;
        }
        
        if ($_FILES['picture']['error'] == 4) {
            echo '<p> Veuillez envoyer une photo.</p>';
        } else {
            $a = $a+1;
        }
        
}


if(isset($_POST['ddn']) == true) { //Teste si le champs est vide.
        
        if($_POST['ddn'] == '') {
            $aerror[] = '<p>Veuillez renseigner une birth date.<p>';
        }else {
            ecriture($_POST['ddn']);
            $a = $a+1;
        }
}

if(isset($_POST['situation']) == true) { //Teste si le champs est vide.
        
        if($_POST['situation'] == 'Select') {
            $aerror[] = '<p>Veuillez renseigner une situation.<p>';
        }else {
            ecriture($_POST['situation']);
            $a = $a+1;
        }
        
    }
    
    if(empty($_POST) == false) {
                
        if($a == 7){
            mkdir($Users);
        
            $fichier = fopen($Users . 'reponse.txt', 'w');
            fwrite($fichier, 'Date Heure: ' .  date('d/m/Y H:i:s')  .   PHP_EOL);
            fwrite($fichier, 'Prenom: ' .      $_POST['prenom']     .   PHP_EOL);
            fwrite($fichier, 'MDP: ' .         $_POST['pass']       .   PHP_EOL);
            fwrite($fichier, 'Describ: ' .     $_POST['describ']    .   PHP_EOL);
            fclose($fichier);
            
            $cheminTMP = $_FILES['picture']['tmp_name'];
            $cheminNouveau = $Users . $_FILES['picture']['name'];
            move_uploaded_file($cheminTMP, $cheminNouveau);
        }
        
}

    if(is_dir($Users) == true){
         header ('location:thanks.php');
         exit;
}


    function ecriture($contenu) {
         file_put_contents("Users\contenu.txt", $contenu . "\r\n", FILE_APPEND);
}

?>