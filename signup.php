<?php
    require "header.php";
 ?>

 <main>
   <h1>Signup</h1>
   <?php
    if (isset($_GET['error'])) {
      if ($_GET['error'] == "emptyfields") {
        echo '<p>Fill in all fields</p>';
      }
      elseif ($_GET['error'] == "invalidmailuid") {
        echo '<p>Invaild Username and/or E-mail.</p>';
      }
      elseif ($_GET['error'] == "invalidmail") {
        echo '<p>Invaild E-mail.</p>';
      }
      elseif ($_GET['error'] == "invaliduid") {
        echo '<p>Invaild Username.</p>';
      }
      elseif ($_GET['error'] == "passwordcheck") {
        echo "<p>Your passwords don't match.</p>";
      }
      elseif ($_GET['error'] == "usertaken") {
        echo "<p>That Username is already taken.</p>";
      }
    }
    elseif (isset($_GET['signup'])) {
      echo "<p>Signup successful</p>";
    }

    ?>
   <form action="includes/signup.inc.php" method="post">
     <input type="text" name="uid" placeholder="Username">
     <input type="text" name="mail" placeholder="E-mail">
     <input type="password" name="pwd" placeholder="Password">
     <input type="password" name="pwd-verify" placeholder="Verify Password">
     <button type="submit" name="signup-submit">Signup</button>
   </form>
 </main>

<?php
    require "footer.php";
 ?>
