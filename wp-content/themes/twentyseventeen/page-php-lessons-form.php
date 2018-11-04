<?php

get_header(); ?>

商品名を入力してください。
<form action="<?php echo home_url(); ?>/php-lessons/" method="post">
  <input type="text" name="keyword"style="width:initial;margin:10px 0;">
  <input type="submit" value="検索">
</form>

<?php get_footer();
