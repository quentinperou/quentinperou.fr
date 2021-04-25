<?php
    session_start();

    if(isset($_POST['prenom'])){
        if(isset($_POST['nom'])){
            if(isset($_POST['email'])){
                if(isset($_POST['objet'])){
                    if(isset($_POST['message'])){
                        $entete  = 'MIME-Version: 1.0' . "\r\n";
                        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                        $entete .= 'From: ' . strip_tags($_POST['email']) . "\r\n";

                        $objet = strip_tags($_POST['objet'] ) ;
                        $texteMessage = strip_tags($_POST['message'],"<b><i>") ;


                        $message = '<a href="https://quentinperou.fr" width="100%" height="120"> <img src="https://quentinperou.fr/images/header-accueil.jpg" alt="(image décorative)" width="100%" height="120" style="width:100%; height:120px; object-fit: cover;" > </a>';

                        $message .= '<h1 style="color: #5D5D5D; ">Message envoyé depuis la page Contact de Quentin Pérou (portfolio v2.3)</h1>';

                        $message .='<div style="background-color:#eee;" ><p><strong>Prénom : </strong>' . strip_tags($_POST['prenom']) . '<br>
                        <strong>Nom : </strong>' . strip_tags($_POST['nom'])  . '<br>
                        <strong>Email : </strong>' . strip_tags($_POST['email']) . '<br>
                        <strong>Objet : </strong>' . $objet . '<br>
                        <strong>Message : </strong><br></div>' . nl2br( $texteMessage ) . '</p> <br>';

                        $message .= "<br><div align='center' style='background: #eee;'> <a href='https://quentinperou.fr/' style='color:#000000;'>quentinperou.fr</a> </div>";


                        $retour = mail('quentinperou.mmi@gmail.com', $objet, $message, $entete);
                        
                        if(isset($_POST['recevoirCopie'])){
                            $retour_copie = mail(strip_tags($_POST['email']), "Copie du mail : ".$objet, $message, $entete);
                        }
                        
                        if($retour) {
                            $_SESSION['message']='Votre message a été envoyé';       
                        }else{
                            $_SESSION['message']='Une erreur c\'est produite...';
                        }
                    }
                }
            }
        }
    }

    header("Location: index.php#contact"); 
?>
