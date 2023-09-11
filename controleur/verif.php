<?php
namespace gesauthe;
session_start();
require('../model/log.php');


if(isset($_POST['btn']))
{
    echo "step 1";
    if(!empty($_POST['tel']) && !empty($_POST['matricule']))
    {
            echo "step 2";
            $tel= htmlspecialchars($_POST['tel']);
            $passe= htmlspecialchars($_POST['matricule']);
            $userpwd= password_hash($passe, PASSWORD_BCRYPT); 
                                  
         
                        
            $user= $pdo->prepare("SELECT * FROM employé WHERE tel = ? And matricule = ?");
            $user->execute(array($tel, $passe));
            echo "commande executé";   
            $userexit= $user->rowcount();
                
                echo"    .",$userexit;
                $ligne = $user->fetch();
             //  if(empty($user->fetch())){ 
                if($userexit )
                {   
                    echo "step 3";
                    
                    $_SESSION['idE'] = $ligne['idempl'];
                    $_SESSION['nom'] = $ligne['nom'];
                    $_SESSION['prenom'] = $ligne['prenom'];
                    $_SESSION['email'] = $ligne['email'];
                    $_SESSION['matricle'] = $ligne['matricule'];
                    $_SESSION['tel'] = $ligne['tel'];
        
                    header("Location:../vue/drh/acceulle.php?id=" .$_SESSION['idE']);  
                    ob_end_flush();                                             
                    } else{
                        header("Location:../vue/drh/");  
                    } 
                // }
}
    else
    {
        echo '<br><div class="btn btn-danger center" role="alert">Veillez remplir tous les champs</div>';
    }


}


// en resumé on verifi si les mots de passe sont identique avant de sauvegarder
$password1 = 0;
if(($password1 != 1)){ 
    inser();
}
?>