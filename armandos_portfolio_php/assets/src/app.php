<?php

    if (isset($_POST['submit'])){

        $name = htmlspecialchars(trim($_POST['name']));
        $email = trim($_POST['email']);
        $message = htmlspecialchars(trim($_POST['message']));

        //NOTE: admin info:
        $receiver_email = 'justas.sobutas@gmail.com';
        $email_subject = 'New message';
        $sender_details = "From {$name}, email: {$email}";
        $responseessage_to_sender = "Thank you for your message, $name! <br> Artist will come back to you shortly.";


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

        //NOTE: This shows form initial form:
    }else {
         ?>
            <form  id="contact" action="<?php $_PHP_SELF; ?>" method="POST">
                <h4>collaboration? contact me:</h4>
                <input id="contact-me__user-name-input" type="text" name="name" placeholder="name" required>
                <input id="contact-me__user-email-input" type="email" name="email" placeholder="email" required>
                <textarea id="contact-me__user-text-input" name="message" placeholder="enter your message" required></textarea>
                <button type="submit" name="submit" id="contact-me__send-btn" class="contact-me__send-form-btn">send</button>
            </form>
        <?php

    }
