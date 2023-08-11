<?php
/**
 * 一款极简Typecho博客主题
 * 
 * @package Pinhero
 * @author Zhero
 * @version 1.0.0
 * @link https://github.com/zherome/pinhero
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>




  <?php while ($this->next()): ?>
        <div class="post">
            <span class="time"><?php $this->date() ?></span>
            <span class="title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></span>
        </div>
  <?php endwhile; ?>

<ul class="pagination">
    <li class="page-item page-next"><?php $this->pageLink('上一页'); ?></li>
    <li class="page-item page-previous"><?php $this->pageLink('下一页','next'); ?></li>     
</ul>

<?php $this->need('footer.php'); ?>