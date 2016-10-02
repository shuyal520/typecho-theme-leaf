<?php
/**
 * 就如一片叶子般轻松自如吧
 * 
 * @package Leaf
 * @author ihewro
 * @version 2.0
 * @link http://www.ihewro.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
 
 <div id="pjax-container">
 <style>
 i.fa.fa-bars {
    color: #fff;
}
 </style>
 
<div class="index">
<div id="screen">
	<div id="mark">
 		<div class="layer" data-depth="0.20">
               <img id="cover" src="http://isujin.com/wp-content/uploads/2016/09/wallhaven-373225.jpg" />
		</div>
	</div>
</div>
  <div class="vertical-center-child index-container">


    <h1 class="index-title"><?php $this->options->IndexName(); ?></h1>

    <div class="index-contacts">
		<?php if ($this->options->socialgithub): ?>
			<a class="social github" target="blank" href="<?php $this->options->socialgithub(); ?>">
				<i class="fa fa-github-alt"></i>
			</a>
		<?php endif; ?>
		<?php if ($this->options->socialgoogle): ?>
			<a class="social google-plus" target="blank" href="<?php $this->options->socialgoogle(); ?>">
				<i class="fa fa-google-plus"></i>
			</a>
		<?php endif; ?>
			<a class="social rss" target="blank" href="<?php $this->options->siteUrl(); ?>feed/">
				<i class="fa fa-rss"></i>
			</a>
		<?php if ($this->options->socialtwitter): ?>
			<a class="social twitter" target="blank" href="<?php $this->options->socialtwitter(); ?>">
				<i class="fa fa-twitter"></i>
			</a>
		<?php endif; ?>
		<?php if ($this->options->socialweibo): ?>
			<a class="social weibo" target="blank" href="<?php $this->options->socialweibo(); ?>">
				<i class="fa fa-weibo"></i>
			</a>
		<?php endif; ?>
    </div>


  </div>
</div>
</div>

<!-- menu -->
<?php $this->need('menu.php'); ?>
