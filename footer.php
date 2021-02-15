<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>



        </div><!-- end .row -->

    </div>

</div><!-- end #body -->


<br/>
<div class="mdui-divider"></div>

<footer id="footer" role="contentinfo" class="mdui-color-theme">

<!--

<div class="mdui-chip">

  <span class="mdui-chip-title"><?php echo date('Y'); ?></span>

  <span class="mdui-chip-icon"><i class="mdui-icon material-icons">copyright</i></span>

  <span class="mdui-chip-title"><?php $this->options->title(); ?></span>

</div>

-->

<strong>Copyright © 2020 <?php $this->options->title(); ?></strong>

<br/>

<?php if ($this->options->FooderText): ?>
<br/>
<?php endif; ?>
<?php $this->options->FooderText(); ?>

</footer><!-- end #footer -->



<?php $this->footer(); ?>

</body>

</html>

