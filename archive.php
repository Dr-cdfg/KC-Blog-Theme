<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php $this->need('header.php'); ?>



    <div class="col-mb-12 col-8" id="main" role="main">

        <h3 class="archive-title"><?php $this->archiveTitle(array(

            'category'  =>  _t('分类 %s 下的文章'),

            'search'    =>  _t('包含关键字 %s 的文章'),

            'tag'       =>  _t('标签 %s 下的文章'),

            'author'    =>  _t('%s 发布的文章')

        ), '', ''); ?></h3>

        <?php if ($this->have()): ?>

    	<?php while($this->next()): ?>

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
	<?php endwhile; ?>

        <?php else: ?>

            <article class="post">

                <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>

            </article>

        <?php endif; ?>



        <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>

    </div><!-- end #main -->

<?php $this->need('footer.php'); ?>

