<?php
  function page_header($page_title){
echo <<< EOT
<head>
  <meta charset="utf-8">
  <title>$page_title</title>
  <link rel="stylesheet" href="/opgaver/opgave2/style/reset.css" media="screen">
  <link rel="stylesheet" href="/opgaver/opgave2/style/core.css" media="screen">
  <link rel="stylesheet" href="page.css" media="screen">
</head>
EOT;
  }

  function page_content($page_title){
    $date = new DateTime();
    $year = $date -> format('Y');
echo <<< EOT
<div class="page">
  <header class="page_header" id="main_header">
    <div class="page_headline">
    <h1>mangalicious</h1>
    <h2>manga - manga - manga!!!</h2>
    </div>
    <form class="form_login" action="/opgaver/opgave2/admin/verf.php" method="post">
      <div class="form_username">
        <label for="login_username">Brugernavn</label>
        <input type="text" id="login_username" name="username">
      </div>
      <div class="form_password">
        <label for="login_password">Password</label>
        <input type="password" id="login_password" name="password">
      </div>
      <div class="form_submit">
        <input type="submit" name="login_submit" value="login">
      </div>
    </form>
  </header>
  <div class="page_content">
    <div class="main_content">
EOT;
require('main_content.php');
echo <<< EOT
    </div>
    <aside class="main_aside">
      <nav class="page_nav">
        <ul>
EOT;
          echo '<li '; if($page_title == 'Forside') echo 'class="active"'; echo'><a href="/opgaver/opgave2/">forside</a>'; if($page_title == 'Forside') echo '<img src="/opgaver/opgave2/style/img/chouun.png" alt="">'; echo'</li>';
          echo '<li '; if($page_title == 'Manga') echo 'class="active"'; echo'><a href="/opgaver/opgave2/manga/">manga</a>'; if($page_title == 'Manga') echo '<img src="/opgaver/opgave2/style/img/chouun.png" alt="">'; echo'</li>';
          echo '<li '; if($page_title == 'Merchandise') echo 'class="active"'; echo'><a href="/opgaver/opgave2/merch/">merchandise</a>'; if($page_title == 'Merchandise') echo '<img src="/opgaver/opgave2/style/img/chouun.png" alt="">'; echo'</li>';
          echo '<li '; if($page_title == 'Kontakt') echo 'class="active"'; echo'><a href="/opgaver/opgave2/kontakt/">kontakt</a>'; if($page_title == 'Kontakt') echo '<img src="/opgaver/opgave2/style/img/chouun.png" alt="">'; echo'</li>';

echo <<< EOT
        </ul>
      </nav>
      <div class="aside_content">
EOT;
require('aside_content.php');
echo <<< EOT
      </div>
    </aside>
  </div>
  <footer class="page_footer">
    <p>
      Copyright &copy; 2008 - $year mangalicious lavet af umla dumla design
    </p>
  </footer>
</div>

<script src="/opgaver/opgave2/style/js/background.js"></script>
EOT;
  }
?>
