<!-- http://adage.com/ -->

<?php
  $root_dir = '/opgaver/opgave3';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?=$page_title?></title>
    <link rel="stylesheet" href="<?=$root_dir?>/style/reset.css" media="screen">
    <link rel="stylesheet" href="<?=$root_dir?>/style/core.css" media="screen">
  </head>
  <body>
    <div class="page">
      <header class="page_header">
        <div class="logo">
          <a href="<?=$root_dir?>/">
            <h1>people pictures</h1>
          </a>
        </div>
        <nav class="page_nav">
          <ul>
            <li><a href="<?=$root_dir?>/">Forside</a></li>
            <li><a href="<?=$root_dir?>/news/">Nyheder</a></li>
            <li><a href="<?=$root_dir?>/gallery/">Galleri</a></li>
            <li><a href="<?=$root_dir?>/movies/">Film</a></li>
            <li><button class="search_button" onclick="toggleSearch()"><img id="search_button_img" src="<?=$root_dir?>/img/magnifier-tool.svg" alt="" /></button></li>
          </ul>
        </nav>
      </header>
      <div id="header_search_bar">
        <form class="search" action="index.html" method="post">
          <input class="input_search_bar" type="text" name="name" value="">
          <input type="image" src="<?=$root_dir?>/img/magnifier-tool.svg" alt="submit" value="">
        </form>
      </div>
      <div class="page_content">
        <?php require('main_content.php'); ?>
      </div>
    </div>
    <footer class="page_footer">
      <p>Made by me for now, at this time and place</p>
    </footer>
    <script type="text/javascript">
      function toggleSearch(){
        var searchBar = document.getElementById("header_search_bar");
        searchBar.style.display = searchBar.style.display === 'block' ? '' : 'block';

        var img = document.getElementById('search_button_img').src;
        if (img.indexOf('magnifier-tool.svg')!=-1) {
            document.getElementById('search_button_img').src  = '<?=$root_dir?>/img/close.svg';
        }
         else {
           document.getElementById('search_button_img').src = '<?=$root_dir?>/img/magnifier-tool.svg';
       }
      }
    </script>
  </body>
</html>
