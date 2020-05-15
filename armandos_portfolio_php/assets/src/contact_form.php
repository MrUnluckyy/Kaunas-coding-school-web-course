<form  id="contact" action="<?php $_PHP_SELF; ?>" method="POST">

    <h4>collaboration? contact me:</h4>
    <input id="contact-me__user-name-input" type="text" name="name" placeholder="name" required>

    <input id="contact-me__user-email-input" type="email" name="email" placeholder="email" required>

    <textarea id="contact-me__user-text-input" name="message" placeholder="enter your message" required></textarea>

    <button type="submit" name="submit" id="contact-me__send-btn" class="contact-me__send-form-btn">send</button>

</form>
