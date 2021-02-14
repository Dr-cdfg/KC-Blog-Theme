<?php

/**

 * KC日志网站使用的MDUI修改自Typecho默认主题的皮肤

 * 

 * @package KC日志主题

 * @author Katherine cdfg

 * @version 1.5

 * @link https://blog.kcblog.asia/

 */



if (!defined('__TYPECHO_ROOT_DIR__')) exit;

 $this->need('header.php');

 ?>

	<?php while($this->next()): ?>

<!-- 主页列出页面模块开始 -->

        <article class="post" itaemscope itemtype="http://schema.org/BlogPosting" style="margin : 0px 7px 0px 7px;">

<div class="mdui-card mdui-hoverable">
        <div class="mdui-card-primary">
          <div class="mdui-card-primary-title"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></div>
          <div class="mdui-card-primary-subtitle"><?php $this->date(); ?></div>
        </div>
        <div class="mdui-card-content"><?php $this->content(''); ?></div>
        <div class="mdui-card-actions">
          <a class="mdui-btn mdui-ripple" href="<?php $this->permalink() ?>">展开全文</a>
        </div>
      </div>




        </article>

<!-- 模块结束 -->



	<?php endwhile; ?>



<!-- 底部翻页栏开始 -->
<br/>
<br/>
    <?php $this->pageNav('<', '>'); ?>
<br/>
<br/>
<!-- 结束 -->

    </div>

  </div>

</div>  



<?php $this->need('footer.php'); ?>

