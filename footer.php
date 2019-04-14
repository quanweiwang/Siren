<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Akina
 */

?>
	</div><!-- #content -->
	<?php 
		if(akina_option('general_disqus_plugin_support')){
			get_template_part('layouts/duoshuo');
		}else{
			comments_template('', true); 
		}
	?>
	</div><!-- #page Pjax container-->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="footertext">
				<p>Crafted with by <a href="https://www.wangquanwei.com" rel="designer" target="_blank" rel="nofollow">Wang</a></p>
			</div>
			<div class="footertext">
				<p>&copy <?php echo akina_option('footer_info', ''); ?> - <?php echo date("Y")?>&nbsp<?php bloginfo('name');?>&nbsp<a href="https://www.miitbeian.gov.cn" rel="designer" target="_blank" rel="nofollow"><?php echo akina_option('footer_icp', ''); ?></a></p>
			</div>
			<!-- 站点运行天数开始 -->
			<?php if (akina_option('web_runtime') != '0') { ?>
				<div class="footer-device">
					<p>本站已稳定运行 <?php echo get_web_buildtime(); ?> 天</p>
				</div>
			<?php } ?>
			<!--站点运行天数结束  -->
			<div class="footer-sponsors">
				<a href="https://promotion.aliyun.com/ntms/yunparter/invite.html?userCode=j42eulwe" rel="designer" target="_blank" rel="nofollow"><img src="<?php bloginfo('url');?>/wp-content/uploads/2019/04/aliyun-w80.png"></a> 
				&nbsp
				<a href="https://portal.qiniu.com/qvm/active?code=1381000227ol0Do" rel="designer" target="_blank" rel="nofollow"><img src="<?php bloginfo('url');?>/wp-content/uploads/2019/04/qiniuyun-w80.png"></a>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	<div class="openNav">
		<div class="iconflat">	 
			<div class="icon"></div>
		</div>
		<div class="site-branding">
			<?php if (akina_option('akina_logo')){ ?>
			<div class="site-title"><a href="<?php bloginfo('url');?>" ><img src="<?php echo akina_option('akina_logo'); ?>"></a></div>
			<?php }else{ ?>
			<h1 class="site-title"><a href="<?php bloginfo('url');?>" ><?php bloginfo('name');?></a></h1>
			<?php } ?>
		</div>
	</div><!-- m-nav-bar -->
	</section><!-- #section -->
	<!-- m-nav-center -->
	<div id="mo-nav">
		<div class="m-avatar">
			<?php $ava = akina_option('focus_logo') ? akina_option('focus_logo') : get_template_directory_uri().'/images/avatar.jpg'; ?>
			<img src="<?php echo $ava ?>">
		</div>
		<div class="m-search">
			<form class="m-search-form" method="get" action="<?php echo home_url(); ?>" role="search">
				<input class="m-search-input" type="search" name="s" placeholder="<?php _e('搜索...', 'akina') ?>" required>
			</form>
		</div>
		<?php wp_nav_menu( array( 'depth' => 2, 'theme_location' => 'primary', 'container' => false ) ); ?>
	</div><!-- m-nav-center end -->
	<a href="#" class="cd-top"></a>
	<!-- search start -->
	<form class="js-search search-form search-form--modal" method="get" action="<?php echo home_url(); ?>" role="search">
		<div class="search-form__inner">
			<div>
				<p class="micro mb-"><?php _e('输入后按回车搜索 ...', 'akina') ?></p>
				<i class="iconfont">&#xe65c;</i>
				<input class="text-input" type="search" name="s" placeholder="<?php _e('Search', 'akina') ?>" required>
			</div>
		</div>
		<div class="search_close"></div>
	</form>
	<!-- search end -->
<?php wp_footer(); ?>
<?php if(akina_option('site_statistics')){ ?>
<div class="site-statistics">
<script type="text/javascript"><?php echo akina_option('site_statistics'); ?></script>
</div>
<?php } ?>
</body>
</html>