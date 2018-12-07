<?php
	/*
    error_reporting(-1);
    ini_set('display_errors', 'On');
    set_error_handler("var_dump");

    header('Content-type: application/json');
	
    /*
    $name = @trim(stripslashes($_POST['name'])); 
    $email = @trim(stripslashes($_POST['email'])); 
    $subject = @trim(stripslashes($_POST['subject'])); 
    $message = @trim(stripslashes($_POST['message'])); 

    $email_from = $email;
    $email_to = 'penayecyrille@gmail.com';//replace with your email

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');
    */
    if(isset($_POST['name']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $msg = $_POST['message'];
        $subject = "Nouveau message du site web - FConsulting";

        $to = 'penayecyrille@gmail.com';
        $headers = "De : ".$email;
        $message = $headers."\n"."Nom : ".$name." \n"."Vous a envoyé le message suivant : "."\n\n".$msg;

        if(isset($_POST['phone'])) {
            $message = $message."\n".$_POST['phone'];
            echo "Booty meat";
        }
        if(isset($_POST['society'])) {
            $message = $message."\n".$_POST['society'];
            echo "Gang";
        }

        try {
            if(mail($to, $subject, $message, $headers))
            {
                $status = array(
                    'type'=>'success',
                    'message'=>'Success'
                );
            }
            else
            {
                $status = array(
                    'type'=>'error',
                    'message'=>'Error'
                );
            }
        }
        catch(Exception $e) {
            $status = array(
                'type'=>'error',
                'message'=>'Critic'
            );
        }
        
        echo json_encode($status); die;
    }
    
    /*
    if(isset($_POST["name"])) {
        echo json_encode(array('message' => $_POST["name"]));    
    }
    */
    /*
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo json_encode(array('message' => var_dump($_POST)));
    }
    else {
        echo json_encode(array('message' => 'Une erreur s\'est produite, veuillez vérifier les champs que vous avez entrés !');
    }
    */   

    /*
    if(mail($to, $subject, $message, $headers)) {
        echo json_encode(array('message' => "Success"));
    }
    else {
        echo json_encode(array('message' => "Error"));
    }

    $name = $_POST["name"];
    $email = $_POST['email'];
    $msg = $_POST['message'];
    $subject = "Nouveau message du site web - ".$_POST["subject"];
    
    $to = 'penayecyrille@gmail.com';
    $headers = "De : ".$email;
    $message = $headers."\n"."Nom : ".$name." \n"."Vous a envoyé le message suivant : "."\n\n".$msg;
    */
    
    //echo json_encode(array('message' => $_POST["subject"]));
    echo json_encode(array('message' => 'Nothing worked !'));
?>
