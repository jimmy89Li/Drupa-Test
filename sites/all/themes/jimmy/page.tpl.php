<div id="wrapper">

  <div id="header">
	<?php if ($page['header']):?>
			<?php if ($logo): ?>
				<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
					<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
				</a>
			<?php endif; ?>
			
		<?php print render($page['header']); ?>
			<?php if ($main_menu): ?>
				<?php print theme('links', $main_menu); ?>
			<?php endif; ?>
	<?php endif; ?>
  </div>
	
 <?php if ($page['sidebar_first']): ?>    
    <div id="sidebar1">
      <?php print render($page['sidebar_first']); ?>
    </div>
  <?php endif; ?>
  
  <div id="content">
    <?php print render($title_prefix); ?>
      <?php if ($title): ?><h1><?php print $title; ?></h1><?php endif; ?>
    <?php print render($title_suffix); ?>

    <?php print render($messages); ?>
    <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

    <?php print render($page['content']); ?>
  </div>

</div>

<div id="footer">
	<?php if ($page['footer']): ?>    
	  <?php print render($page['footer']); ?>
	<?php endif; ?>  
</div>