<?php

    if (isset($_POST['submit'])){

        $name = htmlspecialchars(trim($_POST['name']));
        $email = trim($_POST['email']);
        $message = htmlspecialchars(trim($_POST['message']));

        //NOTE: admin info:
        $receiverEmail = 'justas.sobutas@gmail.com';
        $emailSubject = 'New message';
        $senderDetails = "From {$name}, email: {$email}";
        $responseMessageToSender = "Thank you for your message, $name! <br> Artist will come back to you shortly.";




        if (!empty($name) && !empty($email) && !empty($message)) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)){
                $from = "$email";
                $to = $receiverEmail;
                $subject = $emailSubject;
                $author = $senderDetails;
                mail($to, $subject, $author, $message, $from);

                include 'db.php';

                echo $responseMessageToSender;


            }
        } else {
            echo "You entered something wrong, try again.";
        }

        //NOTE: This shows form initial form:
    }else {

        include 'contact_form.php';


    }
