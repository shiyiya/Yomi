<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="<?php $this->options->charset(); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Cache-Control" content="no-transform " />
    <meta http-equiv="Cache-Control" content="no-siteapp" /> 
    <meta name="renderer" content="webkit" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2" />
    <title><?php $this->archiveTitle(array(
            'search'    =>  _t('包含关键字 %s 的文章'),
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <?php $this->header('keywords=&generator=&template=&pingback=&xmlrpc=&wlw=&commentReply=&rss1=&rss2=&atom='); ?>
    <meta name="keywords" content="<?php $this->keywords() ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php $this->title() ?>" />
    <meta property="og:url" content="<?php $this->permalink() ?>" />
    <meta property="og:site_name" content="<?php $this->options->title() ?>" />
    <meta property="og:description" content=" <?php $this->description() ?>" />
	<link rel="icon" href="<?php if($this->options->fav()): $this->options->fav(); else: $this->options->themeUrl('./favicon.ico');endif; ?>"/>
    <link rel="manifest" href="<?php $this->options->themeUrl('manifest.json'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('style/Yomi.reset.min.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('style/Yomi.min.css'); ?>" />
    <?php if(in_array('Prism', $this->options->effect)): ?>
    <link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('prism/prism.min.css'); ?>" />
	<?php endif; ?>
</head>
<body>
<div id="Yomi">
    <header id="header">
        <h1><a id="logo" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></h1>
        <p class="description"><?php $this->options->description() ?></p>
        
        <div class="link">
            <?php if ($this->options->twitterLink): ?>
                <a target="_blank" href="<?php $this->options->twitterLink(); ?>"><img alt="twitter-ico" src="<?php $this->options->themeUrl('./images/twitter.png'); ?>"></a>
            <?php endif; ?>
            <?php if ($this->options->GitHubLink): ?>
                <a target="_blank" href="<?php $this->options->GitHubLink(); ?>"><img alt="GitHub-ico" src="<?php $this->options->themeUrl('./images/github.png'); ?>"></a>
            <?php endif; ?>
            <?php if ($this->options->rssLink): ?>
                <a target="_blank" href="<?php $this->options->rssLink(); ?>"><img alt="rss-ico" src="<?php $this->options->themeUrl('./images/rss.png'); ?>"></a>
            <?php endif; ?>
        </div>
    </header>
