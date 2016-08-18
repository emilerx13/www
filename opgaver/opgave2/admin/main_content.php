<h3>opret ny nyhed</h3>
<div class="new_news input_form">
  <form class="new_news_form" action="crud.php" method="post">
    <input type="hidden" name="type" value="create">
    <div class="form_title">
      <label for="new_news_title">overskrift:</label>
      <input id="new_news_title" type="text" name="title">
    </div>
    <div class="form_content">
      <label for="new_news_content">tekst:</label>
      <textarea id="new_news_content" name="content"></textarea>
    </div>
    <div class="form_submit">
      <input type="submit" name="submit" value="sæt ind">
    </div>
  </form>
</div>
