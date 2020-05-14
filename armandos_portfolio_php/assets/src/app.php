<?php
    $display_contact_form = true;


    //email creation:
    if (isset($_POST['submit'])){
        $display_contact_form = false;
        //from user input
        $name = htmlspecialchars(trim($_POST['name']));
        $email = trim($_POST['email']);
        $message = htmlspecialchars(trim($_POST['message']));

        //admin info:
        $receiver_email = 'justas.sobutas@gmail.com';
        $email_subject = 'New message';
        $sender_details = "From {$name}, email: {$email}";
        $response_message_to_sender = "Thank you for your message, $name! <br> Artist will come back to you shortly.";

        //hides form:
        if($display_contact_form){
            ?>

            <form onsubmit="hideContactForm()" id="contact" action="<?php $_PHP_SELF; ?>" method="POST">
                <h4>collaboration? contact me:</h4>
                <input id="contact-me__user-name-input" type="text" name="name" placeholder="name" required>
                <input id="contact-me__user-email-input" type="email" name="email" placeholder="email" required>
                <textarea id="contact-me__user-text-input" name="message" placeholder="enter your message" required></textarea>
                <button type="submit" name="submit" id="contact-me__send-btn" class="contact-me__send-form-btn">send</button>
            </form>
        <?php
        }

        if (!empty($name) && !empty($email) && !empty($message)) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)){
                $from = "$email";
                $to = $receiver_email;
                $subject = $email_subject;
                $author = $sender_details;
                mail($to, $subject, $author, $message, $from);

                include 'db.php';

                echo $response_message_to_sender;


            }
        } else {
            echo "You entered something wrong, try again.";
        }

        //Shows initial form:
    }else {
         ?>
            <form onsubmit="hideContactForm()" id="contact" action="<?php $_PHP_SELF; ?>" method="POST">
                <h4>collaboration? contact me:</h4>
                <input id="contact-me__user-name-input" type="text" name="name" placeholder="name" required>
                <input id="contact-me__user-email-input" type="email" name="email" placeholder="email" required>
                <textarea id="contact-me__user-text-input" name="message" placeholder="enter your message" required></textarea>
                <button type="submit" name="submit" id="contact-me__send-btn" class="contact-me__send-form-btn">send</button>
            </form>
        <?php

    }
