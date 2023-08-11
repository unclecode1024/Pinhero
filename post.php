<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

        <div class="post-meta">
          <div class="post-title" itemprop="name headline"><?php $this->title() ?></div>
          <nav>
            <?php $this->date(); ?>&nbsp
            <?php $this->author(); ?>&nbsp
            <span class="categories">
                <?php _e('· '); ?><?php $this->category(' '); ?>
            </span>
          </nav>
        </div>
        <div class="post-content" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>
<!--         <div class="post-tags">
                <nav class="tags">
                    <?php _e('标签：'); ?><?php $this->tags(' ', true, 'none'); ?>
                </nav>
        </div>  -->

<div style="text-align:center;margin-top:50px;">
  <button type="button" class="buyCoffe">打赏</button>
  <div style="margin-top: 20px"></div>
  <div id="QR" style="display: none;justify-content: center;">
    <div id="wechat">
      <img src="<?php $this->options->wechat(); ?>">
      <p>微信赞赏</p>
    </div>
    <div id="alipay">
      <img src="<?php $this->options->alipy(); ?>">
      <p>支付宝赞赏</p>
    </div> 
  </div>

</div>

<div style="display: flex;justify-content: space-between;margin-top: 50px">
<div>阅读 300</div>

<div>
<?php echo "最后修改时间 " . date('Y-m-d', $this->modified); ?>
</div>
</div>

<hr>

<div id="tcomment"></div>

<!-- 评论功能 -->
<script src="https://cdn.staticfile.org/twikoo/1.6.17/twikoo.all.min.js"></script>
<script>
var envId = '<?php $this->options->envId(); ?>'
if (envId !== '') {
    twikoo.init({
    envId: envId, // 腾讯云环境填 envId；Vercel 环境填地址（https://xxx.vercel.app）
    el: '#tcomment', // 容器元素
    // region: 'ap-guangzhou', // 环境地域，默认为 ap-shanghai，腾讯云环境填 ap-shanghai 或 ap-guangzhou；Vercel 环境不填
    // path: location.pathname, // 用于区分不同文章的自定义 js 路径，如果您的文章路径不是 location.pathname，需传此参数
    // lang: 'zh-CN', // 用于手动设定评论区语言，支持的语言列表 https://github.com/imaegoo/twikoo/blob/main/src/client/utils/i18n/index.js
    })
}
</script>
<!-- 打赏 -->
<script src="<?php $this->options->themeUrl('js/buycoffee.js'); ?>"></script>
<?php $this->need('footer.php'); ?>