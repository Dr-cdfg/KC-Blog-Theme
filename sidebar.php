<?php if (!empty($this->options->sidebarBlock) && in_array('OldStyleCard', $this->options->sidebarBlock)): ?>
<!-----
<?php endif; ?>

<div class="mdui-card">
  <div class="mdui-card-header">
    <img class="mdui-card-header-avatar" src="<?php $this->options->SidebarIconUrl() ?>"/>
    <div class="mdui-card-header-title"><?php $this->options->title() ?></div>
    <div class="mdui-card-header-subtitle"><?php $this->options->description() ?></div>
  </div>

  <div class="mdui-card-media">

    <img src="<?php $this->options->SidebarPictureApi(); ?>"/>
    <div class="mdui-card-media-covered">

   </div>
  </div>
</div>
<?php if (!empty($this->options->sidebarBlock) && in_array('OldStyleCard', $this->options->sidebarBlock)): ?>
------>
<?php endif; ?>
<?php if (!empty($this->options->sidebarBlock) && in_array('OldStyleCard', $this->options->sidebarBlock)): ?>
<div class="mdui-card">

  <div class="mdui-card-media">

    <img src="<?php $this->options->SidebarPictureApi(); ?>"/>
    <div class="mdui-card-media-covered">
      <div class="mdui-card-primary">

        <div class="mdui-card-primary-title"><?php $this->options->title() ?></div>

        <div class="mdui-card-primary-subtitle"><?php $this->options->description() ?></div>

      </div>
   </div>
  </div>
</div>
<?php endif; ?>
 <form class="mdui-p-t-0 mdui-m-x-2 mdui-textfield mdui-textfield-floating-label" method="post">

            <label class="mdui-textfield-label">搜索</label>

            <input class="mdui-textfield-input" type="text" autocomplete="new-password" name="s" />

          </form>

          <div class="mdui-divider"></div>     

<ul class="mdui-list" mdui-collapse="{accordion: true}">

<!---主页---->

  <li class="mdui-list-item mdui-ripple<?php if($this->is('index')): ?> mdui-list-item-active<?php endif; ?>">

    <i class="mdui-list-item-icon mdui-icon material-icons">home</i>

    <a href="<?php $this->options->siteUrl(); ?>" class="mdui-list-item-content">主页</a>

  </li>

  <!---分割线----->

<div class="mdui-divider"></div>

<!---主题---->

<?php if (!empty($this->options->sidebarBlock) && in_array('ShowTheme', $this->options->sidebarBlock)): ?>

  <li class="mdui-list-item mdui-ripple">

    <i class="mdui-list-item-icon mdui-icon material-icons">brush</i>

    <a href="https://theme.kcblog.asia" class="mdui-list-item-content">主题</a>

  </li>

<?php endif; ?>

<!--页面--->

<?php if (!empty($this->options->sidebarBlock) && in_array('ShowPages', $this->options->sidebarBlock)): ?>
  <li class="mdui-collapse-item">

    <div class="mdui-collapse-item-header mdui-list-item mdui-ripple<?php if($this->is('page', $pages->slug)): ?> mdui-list-item-active<?php endif; ?>">

      <i class="mdui-list-item-icon mdui-icon material-icons">pages</i>

      <div class="mdui-list-item-content">页面</div>

      <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>

    </div>

    <ul class="mdui-collapse-item-body mdui-list mdui-list-dense">

<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>

<?php while($pages->next()): ?>

      <a class="mdui-list-item mdui-ripple<?php if($this->is('page', $pages->slug)): ?>  mdui-list-item-active<?php endif; ?>" href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a>


<?php endwhile; ?>
    </ul>

  </li>
<?php endif; ?>

  <!---分割线----->

<div class="mdui-divider"></div>

<!---archive--->

<?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>

  <li class="mdui-collapse-item">

    <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">

      <i class="mdui-list-item-icon mdui-icon material-icons">book</i>

      <div class="mdui-list-item-content">文章</div>

      <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>

    </div>

    <ul class="mdui-collapse-item-body mdui-list mdui-list-dense">

              <?php $this->widget('Widget_Contents_Post_Recent') ->parse('

                  <a class="mdui-list-item mdui-ripple" href="{permalink}">{title}</a>'); ?>

    </ul>

  </li>

<?php endif; ?>

<!----评论--->

<?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentComments', $this->options->sidebarBlock)): ?>

  <li class="mdui-collapse-item">

    <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">

      <i class="mdui-list-item-icon mdui-icon material-icons">people</i>

      <div class="mdui-list-item-content">评论</div>

      <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>

    </div>

    <ul class="mdui-collapse-item-body mdui-list mdui-list-dense">

                <?php $this->widget('Widget_Comments_Recent')->to($comments); ?>

                    <?php while($comments->next()): ?>



                        <a class="mdui-list-item mdui-ripple" href="<?php $comments->permalink(); ?>">



                          <?php $comments->author(false); ?>：

                        <?php $comments->excerpt(35, '...'); ?>

                      <?php endwhile; ?>

</a>

    </ul>

  </li>

  <?php endif; ?>
<!----分类--->

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)): ?>
  <li class="mdui-collapse-item">

    <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">

      <i class="mdui-list-item-icon mdui-icon material-icons">library_books</i>

      <div class="mdui-list-item-content">分类</div>

      <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>

    </div>

    <ul class="mdui-collapse-item-body mdui-list mdui-list-dense">


                          <?php $this->widget('Widget_Metas_Category_List', 'type=month&format=F Y') ->parse('

                              <a class="mdui-list-item mdui-ripple" href="{permalink}">{name}</a>'); ?>
    </ul>

  </li>
    <?php endif; ?>

<!----归档--->

<?php if (!empty($this->options->sidebarBlock) && in_array('ShowArchive', $this->options->sidebarBlock)): ?>

  <li class="mdui-collapse-item">

    <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">

      <i class="mdui-list-item-icon mdui-icon material-icons">archive</i>

      <div class="mdui-list-item-content">归档</div>

      <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>

    </div>

    <ul class="mdui-collapse-item-body mdui-list mdui-list-dense">

                  

                          <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y') ->parse('

                              <a class="mdui-list-item mdui-ripple" href="{permalink}">{date}</a>'); ?>

    </ul>

  </li>

  <?php endif; ?>

  <!----其他--->

  <?php if (!empty($this->options->sidebarBlock) && in_array('ShowOther', $this->options->sidebarBlock)): ?>

  <li class="mdui-collapse-item">

    <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">

      <i class="mdui-list-item-icon mdui-icon material-icons">info</i>

      <div class="mdui-list-item-content">其他</div>

      <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>

    </div>

    <ul class="mdui-collapse-item-body mdui-list mdui-list-dense">



                              <?php if($this->user->hasLogin()): ?>



                                  <a class="mdui-list-item mdui-ripple" href="<?php $this->options->adminUrl(); ?>">

                                    <?php _e( '以'); ?>“

                                      <?php $this->user->screenName(); ?> ”身份进入后台</a>



                                  <a class="mdui-list-item mdui-ripple" href="<?php $this->options->logoutUrl(); ?>">

                                   <?php _e( '解除'); ?>“

                                      <?php $this->user->screenName(); ?> ”的登入</a>

                               

                                <?php else: ?>



                                    <a class="mdui-list-item mdui-ripple" href="<?php $this->options->adminUrl('login.php'); ?>">

                                      <?php _e( '登录'); ?></a>



                                  <?php endif; ?>



                                      <a class="mdui-list-item mdui-ripple" href="<?php $this->options->feedUrl(); ?>">

                                        <?php _e( '文章 RSS'); ?></a>





                                      <a class="mdui-list-item mdui-ripple" href="<?php $this->options->commentsFeedUrl(); ?>">

                                        <?php _e( '评论 RSS'); ?></a>

    </ul>

  </li>

</ul>

<?php endif; ?>