<?php /* Smarty version Smarty-3.1.13, created on 2013-03-19 08:03:25
         compiled from "D:\xampp\htdocs\website\presentation\templates\home_ads_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24705147ff61237fc1-09505451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e777e5cb43720f42bbec102f04292a0ef0ab850' => 
    array (
      0 => 'D:\\xampp\\htdocs\\website\\presentation\\templates\\home_ads_list.tpl',
      1 => 1363676596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24705147ff61237fc1-09505451',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5147ff61305309_10541142',
  'variables' => 
  array (
    'obj' => 0,
    'selected' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5147ff61305309_10541142')) {function content_5147ff61305309_10541142($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'D:\\xampp\\htdocs\\website/presentation/smarty_plugins\\function.load_presentation_object.php';
?><?php echo smarty_function_load_presentation_object(array('filename'=>"home_ads_list",'assign'=>"obj"),$_smarty_tpl);?>
<div class="box">  <p class="box-title">View ADS</p>  <ul>    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['obj']->value->mADS) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>    <?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable('', null, 0);?>        <?php if (($_smarty_tpl->tpl_vars['obj']->value->mSelectedADS==$_smarty_tpl->tpl_vars['obj']->value->mADS[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ads_id'])){?>      <?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable("class=\"selected\"", null, 0);?>    <?php }?>     <li>            <a <?php echo $_smarty_tpl->tpl_vars['selected']->value;?>
 href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mADS[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['url'];?>
" class="box-title">        <?php echo $_smarty_tpl->tpl_vars['obj']->value->mADS[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
      </a>      <p>        <?php echo $_smarty_tpl->tpl_vars['obj']->value->mADS[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['description'];?>
      </p>    </li>  <?php endfor; endif; ?>  </ul></div><?php }} ?>