<?php
     ob_start(); 


    require('../model/log.php');
    echo "step 0";

    if(isset($_POST['btn']))
    {
        echo "step 1";
        var_dump($_POST);
        if(!empty($_POST['nom']) && !empty($_POST['email']) )
        {
            echo "step 2";
            $nom= htmlspecialchars($_POST['nom']);
            $email= htmlspecialchars($_POST['email']);
            $prenom= htmlspecialchars($_POST['prenom']);
            $tel= htmlspecialchars($_POST['tel']);
            $role= htmlspecialchars($_POST['role']);
            $matricule= htmlspecialchars($_POST['matricule']);
            $userpwd= sha1($_POST['passe1']); 
            $pwd2= sha1($_POST['passe2']);                            
        
            if($pwd2 == $userpwd)
            {    
                echo "step3";                       
            $user = $pdo->prepare("SELECT * FROM employé WHERE nom = ? AND prenom = ? AND email = ?  AND tel = ? ");
            $user->execute(array($nom,$prenom, $email, $tel));
            
            
            
            $userexit= $user->rowcount();
                                            
            if($userexit == 1)
            {                       
                
                echo '<br><div class="btn btn-danger center" role="alert">Utilisateur déjà existant!</div>';
                                                        
            }                               
            else
            {
                echo "step 4";
                $hashing = password_hash($pwd2, PASSWORD_BCRYPT);
               // $userinsert= $pdo->prepare("INSERT INTO client (nomclient, email, tel, localisation, mot_de_passe, adresse, img) VALUES (?, ?, ?, ?, ?, ?, ?)");
                //$userinsert->execute(array($nom, $email, $tel, $locali, $pwd2, $locali, $img));

                $statement = $pdo->prepare('INSERT INTO employé(nom, prenom, email, passe, statut, matricule, tel, role1) VALUES(:nom,:prenom, :email, :passe, :statut, :matricule, :tel, :role1)');
                $statement->execute([
                        'nom' => $nom,
                        'prenom' => $prenom,
                        'email' => $email,
                        'passe' => $hashing,
                        'statut' => 0,
                        'matricule' => $matricule,
                        'tel' => $tel,
                        'role1' => $role
                        
                        

                      ]);

                echo "fin";
                header("Location:../vue/drh/listeEm.php");
                ob_end_flush();
            } 

            }
            else
            {
                echo '<br><div class="btn btn-danger center" role="alert">Les mots de passe ne sont pas conforme</div>';
            }

        }
        else
        {
            echo '<br><div class="btn btn-danger center" role="alert">Veillez remplir tous les champs</div>';
        }
        
    }


?>
