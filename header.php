<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="This is an example of a meta description. This will often show up in search results.">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <header>
      <nav class="nav-header-main"
        <a class="header-logo" href="index.php"
          <img src="img/logo.png" alt="mmtuts logo"
        </a>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="#">Leaderboard</a></li>
          <li><a href="#">Achievements</a></li>
          <li><a href="#"></a></li>
      </nav>
      <div class="header-login">
        <?php
        if (isset($_SESSION['userId'])) {
          echo '<form action="includes/logout.inc.php" method="post">
            <button type="submit" name="logout-submit">Logout</button>
          </form>';
        }
        else {
          echo '<form action="includes/login.inc.php" method="post">
              <input type="text" name="mailuid" placeholder="Usernamse/E-Mail...">
              <input type="password" name="pwd" placeholder="Password...">
              <button type="submit" name="login-submit">Login</button>
            </form>
            <a href="signup.php">Signup</a>';
        }
        ?>


      </div>
    </header>
