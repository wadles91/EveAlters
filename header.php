<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="description" content="This is an example of a meta description. This will often show up in search results.">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <nav>
      <div class="container-fluid">
        <div class="row" style="background-image: url('img/banner.jpg')" >

          <div class="col-1">
            <a href="#">
              <img style="width:100px;" src="img/evealters.png" alt="logo">
            </a>
          </div>
          <div class="col">
            <ul class="header-links">
              <li><a href="index.php">Home</a></li>
              <li><a href="#">Portfolio</a></li>
              <li><a href="#">About me</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </div>
          <div class="col">
            <?php
            if (isset($_SESSION['userId'])) {
              echo '<form action="includes/logout.inc.php" method="post">
              <button type="submit" name="logout-submit">Logout</button>
              </form>';
            }
            else {
              echo '<form action="includes/login.inc.php" method="post">
              <input type="text" name="mailuid" placeholder="Username/E-mail...">
              <input type="password" name="pwd" placeholder="Password...">
              <button type="submit" name="login-submit">Login</button>
              </form>
              <a href="signup.php">Signup</a>';
            }
            ?>

          </div>
        </div>
      </nav>
    </div>
  </header>
