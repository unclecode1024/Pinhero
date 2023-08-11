<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <h1 class="post-title" itemprop="name headline"><?php $this->title() ?></h1>
    <h2 class="post-title">404 - <?php _e('页面没找到'); ?></h2>
    <p><?php _e('你想查看的页面已被转移或删除, 要不要搜索看看: '); ?></p>
    <form method="post">
        <input type="text" name="s" class="text" autofocus/><br><br>
        <button type="submit" class="submit"><?php _e('搜索'); ?></button>
    </form>
    
<?php $this->need('footer.php'); ?>
