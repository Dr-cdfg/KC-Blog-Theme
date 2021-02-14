<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php $this->need('header.php'); ?>





    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">

<div class="mdui-card" style="padding: 15px;margin-bottom: 10px;margin-left: 10px;

margin-right: 10px;">

        <h1 class="post-title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>


        <div style="margin : 0px 7px 0px 7px;" class="post-content" itemprop="articleBody">

            <?php $this->content(); ?>

        </div>

</div>

    </article>

<div class="mdui-card" style="padding: 15px;margin-bottom: 10px;margin-left: 10px;

margin-right: 10px;">

    <?php $this->need('comments.php'); ?>

</div>

<!-- end #main-->



<?php $this->need('footer.php'); ?>

