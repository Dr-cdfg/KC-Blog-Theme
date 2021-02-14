<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php $this->need('header.php'); ?>





    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">

<div class="mdui-card" style="padding: 15px;margin-bottom: 10px;margin-left: 10px;

margin-right: 10px;">

        <h1 class="post-title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>

        <ul class="post-meta">

            <li itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('作者: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>

            <li><?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></li>

            <li><?php _e('分类: '); ?><?php $this->category(','); ?></li>

        </ul>

        <div class="post-content" itemprop="articleBody">

            <?php $this->content(); ?>

        </div>

</div>

    </article>

<div class="mdui-card" style="padding: 15px;margin-bottom: 10px;margin-left: 10px;

margin-right: 10px;">

        <p itemprop="keywords" class="tags" style="text-align:center;"><?php _e('标签 - '); ?><?php $this->tags(', ', true, '此地无银三百两'); ?></p>

 </div>

<div class="mdui-card" style="padding: 15px;margin-left: 10px;

margin-right: 10px;">

    <?php $this->need('comments.php'); ?>

 </div>

    <ul class="post-near">

  <div class="mdui-row" style="text-align: center;">

    <div class="mdui-col-xs-6">

<li>



上一篇：<?php $this->thePrev('%s','没有了'); ?>

</li>

</div>

    <div class="mdui-col-xs-6">

<li>

下一篇：<?php $this->theNext('%s','没有了 '); ?>

</li>

</div>

  </div>

    </ul>

<!-- end #main-->









<?php $this->need('footer.php'); ?>

