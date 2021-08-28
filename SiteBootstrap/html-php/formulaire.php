<?php 

if (isset($_POST['valid'])){
    
    if (isset($_POST['nom']) && !empty($_POST['nom'])){
        $nom=$_POST['nom'];$validnom=1;
    } 
    else{
        echo"<br>vous n'avez pas saisie de nom.</br>";$validnom=0;
    }
    
        
    if (isset($_POST['prénom']) && !empty($_POST['prénom'])){
        $prénom=$_POST['prénom'];$validprénom=1;
    } 
    else{
        echo"<br>vous n'avez pas saisie de prénom.</br>";$validnom=0;
    }
        
    if (isset($_POST['mail']) && !empty($_POST['mail'])){
        $email=$_POST['mail'];$validmail=1;
    }
    else{
        echo"<br>vous n'avez pas saisie de mail.</br>";
    }
    
    if (isset($_POST['message']) && !empty($_POST['message'])){
        $message=$_POST['message'];$validmessage=1;
    }
    else{
        echo"<br>vous n'avez pas saisie de message.</br>";$validmessage=0;
    }
    
    if (isset($_POST['num']) && !empty($_POST['num'])){
        if(preg_match('`[0-9]{10}`',$_POST['num'])){
            $num=$_POST['num'];$validnum=1;
        }
        else{
            echo"<br/><p style='display:inline-block;font-size:30px;background-color: rgba(255,0,0,0.8)'>Numéro de téléphone incorrect (opération non-bloquante)</p>";$validnum=0;
        }
    }
   
    if (filter_var($email, FILTER_VALIDATE_EMAIL)){
        $validmail=1;
    }
    else{
        echo"<br/><p style='display:inline-block;font-size:30px;background-color: rgba(255,0,0,0.8)'>Adresse Email incorrecte, recommencez svp</p>";$validmail=0;
    }
    
    if(isset($_POST['radiobouton']) && !empty($_POST['radiobouton'])){
        $visite=$_POST['radiobouton'];$validvisite=1;
    }
    else{
        echo"<br/><p style='display:inline-block;font-size:30px;background-color: rgba(255,0,0,0.8)'>Veuillez cocher si c'est votre première visite, recommencez svp</p>";$validvisite=0;
    }
    
    
    if ($validnom && $validprénom && $validmail && $validmessage && $validvisite){
        if ($validnum){
            echo "<br/><b><h1 style='text-align: center;'>Vous avez saisie</h1></b><br/><p  style='font-size: 20px;'><u>nom</u>: ".$nom."<br/><u>prénom</u>: ".$prénom."<br/><u>email</u>: ".$email."<br/><u>numéro</u> :".$num."<br/><u>message</u>: ".$message."<br/><u>première visite</u> :".$visite."<br/></p>";
        }
        else{
            echo "<br/><b><h1 style='text-align: center;'>Vous avez saisie</h1></b><br/><p style='font-size: 20px;'><u>nom</u>: ".$nom."<br/><u>prénom</u>: ".$prénom."<br/><u>email</u>: ".$email."<br/><u>message</u>: ".$message."<br/><u>première visite</u> :".$visite."<br/></p>";
        }
    }
}
?>