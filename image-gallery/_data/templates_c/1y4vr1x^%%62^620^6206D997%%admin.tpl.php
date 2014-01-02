<?php /* Smarty version 2.6.26, created on 2014-01-02 09:36:38
         compiled from admin.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'combine_script', 'admin.tpl', 1, false),array('block', 'footer_script', 'admin.tpl', 2, false),array('modifier', 'translate', 'admin.tpl', 17, false),)), $this); ?>
<?php echo $this->_plugins['function']['combine_script'][0][0]->func_combine_script(array('id' => 'jquery.ui.accordion','load' => 'header'), $this);?>
<?php $this->_tag_stack[] = array('footer_script', array('require' => 'jquery.ui.accordion')); $_block_repeat=true;$this->_plugins['block']['footer_script'][0][0]->block_footer_script($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
jQuery(document).ready(function(){
	jQuery('#menubar').accordion({
		header: "dt.rdion",
		event: "click",
		heightStyle: "content",
		active: <?php echo $this->_tpl_vars['ACTIVE_MENU']; ?>

	});
});
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['footer_script'][0][0]->block_footer_script($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<?php echo $this->_plugins['function']['combine_script'][0][0]->func_combine_script(array('id' => 'raphael','load' => 'async','path' => 'themes/default/js/raphael.js'), $this);?>

<?php echo $this->_plugins['function']['combine_script'][0][0]->func_combine_script(array('id' => 'raphael.menu_icons','require' => 'raphael','load' => 'async','path' => 'admin/themes/default/js/menu_icons.js'), $this);?>


<div id="menubar">
  <div id="adminHome"><a href="<?php echo $this->_tpl_vars['U_ADMIN']; ?>
"><?php echo Template::mod_translate('Administration Home'); ?>
</a></div>
  <dl class="first">
    <dt class="rdion"><span id="menubarPhotos">&nbsp;<?php echo Template::mod_translate('Photos'); ?>
&nbsp;</span></dt>
    <dd>
      <ul>
        <li><a href="<?php echo $this->_tpl_vars['U_ADD_PHOTOS']; ?>
"><?php echo Template::mod_translate('Add'); ?>
</a></li>
        <li><a href="<?php echo $this->_tpl_vars['U_RATING']; ?>
"><?php echo Template::mod_translate('Rating'); ?>
</a></li>
        <li><a href="<?php echo $this->_tpl_vars['U_TAGS']; ?>
"><?php echo Template::mod_translate('Tags'); ?>
</a></li>
        <li><a href="<?php echo $this->_tpl_vars['U_RECENT_SET']; ?>
"><?php echo Template::mod_translate('Recent photos'); ?>
</a></li>
        <li><a href="<?php echo $this->_tpl_vars['U_BATCH']; ?>
"><?php echo Template::mod_translate('Batch Manager'); ?>
</a></li>
<?php if ($this->_tpl_vars['NB_PHOTOS_IN_CADDIE'] > 0): ?>
        <li><a href="<?php echo $this->_tpl_vars['U_CADDIE']; ?>
"><?php echo Template::mod_translate('Caddie'); ?>
<span class="adminMenubarCounter"><?php echo $this->_tpl_vars['NB_PHOTOS_IN_CADDIE']; ?>
</span></a></li>
<?php endif; ?>
      </ul>
    </dd>
  </dl>
  <dl>
    <dt class="rdion"><span id="menubarAlbums">&nbsp;<?php echo Template::mod_translate('Albums'); ?>
&nbsp;</span></dt>
    <dd>
      <ul>
        <li><a href="<?php echo $this->_tpl_vars['U_CATEGORIES']; ?>
"><?php echo Template::mod_translate('Manage'); ?>
</a></li>
        <li><a href="<?php echo $this->_tpl_vars['U_CAT_OPTIONS']; ?>
"><?php echo Template::mod_translate('Properties'); ?>
</a></li>
      </ul>
    </dd>
  </dl>
  <dl>
    <dt class="rdion"><span id="menubarUsers">&nbsp;<?php echo Template::mod_translate('Users'); ?>
&nbsp;</span></dt>
    <dd>
      <ul>
        <li><a href="<?php echo $this->_tpl_vars['U_USERS']; ?>
"><?php echo Template::mod_translate('Manage'); ?>
</a></li>
        <li><a href="<?php echo $this->_tpl_vars['U_GROUPS']; ?>
"><?php echo Template::mod_translate('Groups'); ?>
</a></li>
        <li><a href="<?php echo $this->_tpl_vars['U_NOTIFICATION_BY_MAIL']; ?>
"><?php echo Template::mod_translate('Notification'); ?>
</a></li>
      </ul>
    </dd>
  </dl>
  <dl>
    <dt class="rdion"><span id="menubarPlugins">&nbsp;<?php echo Template::mod_translate('Plugins'); ?>
&nbsp;</span></dt>
    <dd>
      <ul>
        <li><a href="<?php echo $this->_tpl_vars['U_PLUGINS']; ?>
"><?php echo Template::mod_translate('Manage'); ?>
</a></li>
      </ul>
      <div id="pluginsMenuSeparator"></div>
<?php if (! empty ( $this->_tpl_vars['plugin_menu_items'] )): ?>
      <ul class="scroll">
<?php $_from = $this->_tpl_vars['plugin_menu_items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['menu_item']):
?>
        <li><a href="<?php echo $this->_tpl_vars['menu_item']['URL']; ?>
"><?php echo $this->_tpl_vars['menu_item']['NAME']; ?>
</a></li>
<?php endforeach; endif; unset($_from); ?>
      </ul>
<?php endif; ?>
    </dd>
  </dl>
  <dl>
    <dt class="rdion"><span id="menubarTools">&nbsp;<?php echo Template::mod_translate('Tools'); ?>
&nbsp;</span></dt>
    <dd>
      <ul>
<?php if ($this->_tpl_vars['ENABLE_SYNCHRONIZATION']): ?>
        <li><a href="<?php echo $this->_tpl_vars['U_CAT_UPDATE']; ?>
"><?php echo Template::mod_translate('Synchronize'); ?>
</a></li>
        <li><a href="<?php echo $this->_tpl_vars['U_SITE_MANAGER']; ?>
"><?php echo Template::mod_translate('Site manager'); ?>
</a></li>
<?php endif; ?>
        <li><a href="<?php echo $this->_tpl_vars['U_HISTORY_STAT']; ?>
"><?php echo Template::mod_translate('History'); ?>
</a></li>
        <li><a href="<?php echo $this->_tpl_vars['U_MAINTENANCE']; ?>
"><?php echo Template::mod_translate('Maintenance'); ?>
</a></li>
<?php if (isset ( $this->_tpl_vars['U_PENDING_COMMENTS'] )): ?>
        <li><a href="<?php echo $this->_tpl_vars['U_PENDING_COMMENTS']; ?>
"><?php echo Template::mod_translate('Pending Comments'); ?>
</a></li>
<?php endif; ?>
        <li><a href="<?php echo $this->_tpl_vars['U_UPDATES']; ?>
"><?php echo Template::mod_translate('Updates'); ?>
</a></li>
      </ul>
    </dd>
  </dl>
  <dl class="last">
    <dt class="rdion"><span id="menubarConfiguration">&nbsp;<?php echo Template::mod_translate('Configuration'); ?>
&nbsp;</span></dt>
    <dd>
      <ul>
        <li><a href="<?php echo $this->_tpl_vars['U_CONFIG_GENERAL']; ?>
"><?php echo Template::mod_translate('Options'); ?>
</a></li>
        <li><a href="<?php echo $this->_tpl_vars['U_CONFIG_MENUBAR']; ?>
"><?php echo Template::mod_translate('Menu Management'); ?>
</a></li>
        <li><a href="<?php echo $this->_tpl_vars['U_CONFIG_EXTENTS']; ?>
"><?php echo Template::mod_translate('Templates'); ?>
</a></li>
        <li><a href="<?php echo $this->_tpl_vars['U_CONFIG_LANGUAGES']; ?>
"><?php echo Template::mod_translate('Languages'); ?>
</a></li>
        <li><a href="<?php echo $this->_tpl_vars['U_CONFIG_THEMES']; ?>
"><?php echo Template::mod_translate('Themes'); ?>
</a></li>
      </ul>
    </dd>
  </dl>
</div> <!-- menubar -->

<div id="content" class="content">

<?php if (isset ( $this->_tpl_vars['TABSHEET'] )): ?>
  <?php echo $this->_tpl_vars['TABSHEET']; ?>

<?php endif; ?>
<?php if (isset ( $this->_tpl_vars['U_HELP'] )): ?>
<?php echo $this->_plugins['function']['combine_script'][0][0]->func_combine_script(array('id' => 'core.scripts','load' => 'async','path' => 'themes/default/js/scripts.js'), $this);?>

  <ul class="HelpActions">
    <li><a href="<?php echo $this->_tpl_vars['U_HELP']; ?>
" onclick="popuphelp(this.href); return false;" title="<?php echo Template::mod_translate('Help'); ?>
"><img src="<?php echo $this->_tpl_vars['ROOT_URL']; ?>
<?php echo $this->_tpl_vars['themeconf']['admin_icon_dir']; ?>
/help.png" alt="(?)"></a></li>
  </ul>
<?php endif; ?>
<?php if (isset ( $this->_tpl_vars['errors'] )): ?>
  <div class="errors">
    <ul>
<?php $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['error']):
?>
      <li><?php echo $this->_tpl_vars['error']; ?>
</li>
<?php endforeach; endif; unset($_from); ?>
    </ul>
  </div>
<?php endif; ?>
<?php if (isset ( $this->_tpl_vars['infos'] )): ?>
  <div class="infos">
    <ul>
<?php $_from = $this->_tpl_vars['infos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['info']):
?>
      <li><?php echo $this->_tpl_vars['info']; ?>
</li>
<?php endforeach; endif; unset($_from); ?>
    </ul>
  </div>
<?php endif; ?>
<?php if (isset ( $this->_tpl_vars['warnings'] )): ?>
  <div class="warnings">
    <ul>
<?php $_from = $this->_tpl_vars['warnings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['warning']):
?>
      <li><?php echo $this->_tpl_vars['warning']; ?>
</li>
<?php endforeach; endif; unset($_from); ?>
    </ul>
  </div>
<?php endif; ?>
  <?php echo $this->_tpl_vars['ADMIN_CONTENT']; ?>

</div>