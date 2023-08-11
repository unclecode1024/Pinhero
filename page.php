<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <div class="post-meta">
        <div class="post-title" itemprop="name headline"><?php $this->title() ?></div>
            <nav>
                <?php $this->date(); ?>&nbsp
                <?php $this->author(); ?>
            </nav>
        </div>
    <div class="post-content" itemprop="articleBody">
        <?php $this->content(); ?>
    </div>

<?php $this->need('footer.php'); ?>