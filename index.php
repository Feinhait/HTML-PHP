<?php
include'Verification.php';

var_dump($_POST);
var_dump($_FILES);

    if (isset($aerror) == true){
    foreach ($aerror as $error){
        echo '<p class="error">', $error, '</p>';
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css" /> 
        <meta charset="UTF-8">
        <title>Sign In Nigga !</title>
    </head>
    <body>
        <h1>Sign in</h1>
        
        <form method="post" enctype="multipart/form-data">
    <div>
                Name :
                <input type="text" name="prenom" value="<?php if(isset($_POST['prenom'])) echo $_POST['prenom']; ?>"/>
    </div>
    <div>
                Password :
                <input type="password" name="pass"/>
    </div>
    <div>
                <label>Birth :</label>
                <input type='date' name="ddn" value="<?php if(isset($_POST['ddn'])) echo $_POST['ddn']; ?>"/>
    </div>
    <div>
                <?php
      
                
                ?>
                <label>Situation :</label>
                <select name="situation">
                    <option>Select</option>
                    <option value="married">Married</option>
                    <option value="single">Single</option>
                    <option value="widower">Widower</option>
                    <option value="Couple">In love</option>
                </select>
    </div>
    <div>
                Since :
                <input type="radio" value="X" name="radio" value="X"/><label>X</label>
                <input type="radio" value="1-6m" name="radio" value="1"/><label>1-6months</label>
                <input type="radio" value="6-12m" name="radio" value="6"/><label>6-12months</label>            
                <input type="radio" value="1y" name="radio" value="1y"/><label>More than 1year</label>         
    </div>
    <div>
                <label>Describe yourself in a view words :</label><br />
                <textarea cols ="47" rows="6" name="describ"><?php if(isset($_POST['describ'])) echo $_POST['describ']; ?></textarea>
    </div>
    <div>
                <label>Send us a picture of you :</label>
                <input type="file" value="Browse" name="picture"/>
    </div>
    <div>
                Send it now : <input type="submit" value="OK">
    </div>
    <div>
                Reset all : <input type ="reset" value="NOW">
    </div>
        </form>
    </body>
</html>
