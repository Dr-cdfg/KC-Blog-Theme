<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <div class="col-mb-12 col-tb-8 col-tb-offset-2">

        <div class="error-page">
            <h2 class="post-title">404 - <?php _e('无此页面'); ?></h2>
            <p><?php _e('您所请求的url不对应任何一个页面，请在下边尝试搜索关键词： '); ?></p>
 <form class="mdui-p-t-0 mdui-m-x-2 mdui-textfield mdui-textfield-floating-label" method="post">
            <label class="mdui-textfield-label">搜索</label>
            <input class="mdui-textfield-input" type="text" autocomplete="new-password" name="s" />
          </form>
          <div class="mdui-divider"></div>
        </div>

    </div><!-- end #content-->
	<?php $this->need('footer.php'); ?>
