<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div id="main" role="main">
    <article class="post">
        <ul class="post-meta">
            <li><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></li>
            <li><?php _e('浏览量：'); ?><?php if(isset($this->fields->viewsNum)){ $this->fields->viewsNum(); } ?></li>
        </ul>
        <h2 class="post-title"><?php $this->title() ?></h2>
        <div class="post-content">
            <?php  $this->content(); ?>
        </div>
    </article>
    <ul class="post-near clearfix">
        <li class="previous">« <?php $this->thePrev('%s','没有了'); ?></li>
        <li class="next"><?php $this->theNext('%s','没有了'); ?> »</li>
    </ul>
    <?php $this->need('comments.php'); ?>
</div>
<?php $this->need('footer.php'); ?>
