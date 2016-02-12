<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/myboard/skins/default','_head.html') ?>
<h2><?php echo $__Context->oDocument -> getTitle() ?></h2>
<ul>
    <li><?php echo $__Context->oDocument->getRegdate('Y.m.d H:i') ?></li>
    <li><?php echo $__Context->oDocument->getNickName() ?></li>
    <li><?php echo $__Context->oDocument-> get('readed_count') ?></li>
</ul>
<?php echo $__Context->oDocument->getContent() ?>
<a href="<?php echo getUrl('document_srl','') ?>"><?php echo $__Context->lang->cmd_list ?></a>
