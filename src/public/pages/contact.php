
<?php  
    define( 'MAIL_TO', /* >>>>> */'contact@dkcommunication.fr'/* <<<<< */ );  
    define( 'MAIL_FROM', '' ); 
    define( 'MAIL_OBJECT', '' ); 
    define( 'MAIL_MESSAGE', '' );  

    $mailSent = false;  
    $errors = array(); 
      
    if( filter_has_var( INPUT_POST, 'envoi' ) )
    {  
        $from = filter_input( INPUT_POST, 'from', FILTER_VALIDATE_EMAIL );  
        if( $from === NULL || $from === MAIL_FROM )
        {  
            $errors[] = 'Vous devez renseigner votre adresse de courrier électronique.';  
        }  
        elseif( $from === false ) 
        {  
            $errors[] = 'L\'adresse de courrier électronique n\'est pas valide.';  
            $from = filter_input( INPUT_POST, 'from', FILTER_SANITIZE_EMAIL );  
        }  

        $object = filter_input( INPUT_POST, 'object', FILTER_SANITIZE_STRING, FILTER_FLAG_ENCODE_HIGH | FILTER_FLAG_ENCODE_LOW );  
        if( $object === NULL OR $object === false OR empty( $object ) OR $object === MAIL_OBJECT ) 
        {  
            $errors[] = 'Vous devez renseigner l\'objet.';  
        }  

 
        $message = filter_input( INPUT_POST, 'message', FILTER_UNSAFE_RAW );  
        if( $message === NULL OR $message === false OR empty( $message ) OR $message === MAIL_MESSAGE ) 
        {  
            $errors[] = 'Vous devez écrire un message.';  
        }  

        if( count( $errors ) === 0 )
        {  
            if( mail( MAIL_TO, $object, $message, "From: $from\nReply-to: $from\n" ) ) 
            {  
                $mailSent = true;  
            }  
            else 
            {  
                $errors[] = 'Votre message n\'a pas été envoyé.';  
            }  
        }  
    }  
    else 
    {  
        $from = MAIL_FROM;  
        $object = MAIL_OBJECT;  
        $message = MAIL_MESSAGE;  
    }  
?>
<h1>Formulaire de contact</h1>
<form class="form-horizontal" role="form" method="POST" action="./index.php?page=contact">
  <div class="form-group">
    <label for="nom" class="col-sm-2 control-label">Nom</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nom" placeholder="Nom"name="nom">
    </div>
  </div>
  <div class="form-group">
    <label for="emal" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="from" placeholder="Email"name="from">
    </div>
  </div>
  <div class="form-group">
    <label for="tel" class="col-sm-2 control-label">Téléphone</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="tel" placeholder="Téléphone"name="tel">
    </div>
  </div>
  <div class="form-group">
    <label for="objet" class="col-sm-2 control-label">Objet</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="object" name="object">
    </div>
  </div>
  <div class="form-group">
    <label for="inputtel" class="col-sm-2 control-label">Message</label>
    <div class="col-sm-10">
    <textarea class="form-control" rows="3" id="message" name="message"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary" name="envoi" id="envoi">Envoyer</button>
    </div>
  </div>
</form>
 <?php  
    if( $mailSent === true )
    {  
?>  
        <p id="success">Votre message a bien été envoyé.</p>  
        <p><strong>Courriel pour la réponse :</strong><br /><?php echo( $from ); ?></p>  
        <p><strong>Objet :</strong><br /><?php echo( $object ); ?></p>  
        <p><strong>Message :</strong><br /><?php echo( nl2br( htmlspecialchars( $message ) ) ); ?></p>  
<?php  
    }  
    else 
    {  
        if( count( $errors ) !== 0 )  
        {  
            echo( "\t\t<ul>\n" );  
            foreach( $errors as $error )  
            {  
                echo( "\t\t\t<li>$error</li>\n" );  
            }  
            echo( "\t\t</ul>\n" );  
        }  
        else  
        {  
            echo( "\t\t<p id=\"welcome\"><em>Tous les champs sont obligatoires</em></p>\n" );  
        }  
?>  
<?php  
    }  
?>  