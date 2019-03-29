<?php
    require "header.php";
 ?>


 <main>
    <h1>Contact Us</h1>
    <form class="contact-form" action="includes/contactform.inc.php" method="post">
      <input type="text" name="name" placeholder="Full name">
      <input type="text" name="mail" placeholder="Your e-mail">
      <input type="text" name="subject" placeholder="Subject">
      <textarea name="message" placeholder="Enter your message here..."></textarea>
      <button type="submit" name="submit">Send E-mail</button>
    </form>
 </main>


 <?php
    require "footer.php";
 ?>
