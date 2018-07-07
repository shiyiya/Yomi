<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<footer id="footer" class="text-center" role="contentinfo">
    <nav id="nav-menu" role="navigation">
        <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
        <?php while($pages->next()): ?>
            <a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
        <?php endwhile; ?>
    </nav>
    <p>&copy;<?php echo date('Y'); ?>
    <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a> -
    <?php _e('Using <a href="http://www.typecho.org" rel="external nofollow">Typecho</a> &'); ?>
    <?php _e('<a href="https://github.com/ShiYiYa/Yomi" rel="external nofollow">Theme</a> by <a href="https://runtua.cn">Godme</a>'); ?>
    </p>
</footer>
<?php $this->footer(); ?>
</div>
</body>
</script>
<?php if(in_array('Prism', $this->options->effect)): ?>
<script src="<?php $this->options->themeUrl('prism/prism.min.js');?>"></script>
<?php endif; ?>

</html>