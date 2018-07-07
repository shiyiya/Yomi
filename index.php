<?php
/**
 * no description
 * 
 * @package Yomi
 * @author  ShiYi
 * 
 * @version 1.0
 * @link https://www.runtua.cn
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
 <div id="main" role="main">
	 <article>
		<?php while($this->next()): ?>
			<section class="post-item">
				<time datetime="<?php $this->date('Y-m-d H:i'); ?>"><?php $this->date(); ?></time>
				<h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
				<span class="post-meta">
				</span>
			</section>
		<?php endwhile; ?>
	</article>
	<?php $this->pageNav('&laquo; ', ' &raquo;'); ?>
</div>
<?php $this->need('footer.php'); ?>

