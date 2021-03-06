<!DOCTYPE html>
<html lang="bg">

<head>
	<?php use_stylesheet('main') ?>
	<?php use_javascript(sfConfig::get('app_js_library')) ?>
	<?php use_javascript('main') ?>
	<?php if ($sf_user->isEditor()): ?>
		<?php use_javascript('admin') ?>
	<?php endif ?>

	<?php include_http_metas() ?>
	<?php include_metas() ?>
	<meta name="viewport" content="initial-scale=1.0, width=device-width">
	<title>
		<?php echo prepare_document_title(get_slot('title')) ?>
		<?php if ( ! include_slot('sitename') ): ?>
			—
			<?php echo sfConfig::get('app_sitename') ?>
		<?php endif ?>
	</title>
	<link rel="icon" href="/favicon.png" type="image/png">
	<?php include_stylesheets() ?>
</head>

<body>

	<div id="project-links">
		<ul>
			<li id="project-main"><a href="//chitanka.info">Библиотека</a></li>
			<li id="project-biblioman"><a href="//biblioman.chitanka.info">Библиоман</a></li>
			<li id="project-forum"><a href="//forum.chitanka.info">Форум</a></li>
			<li id="project-prevodi"><a href="//prevodi.chitanka.info">Дачко</a></li>
			<li id="project-wiki-workroom"><a href="//wiki.workroom.chitanka.info">Читалие</a></li>
			<li id="project-rechnik" class="current"><a href="//rechnik.chitanka.info">Речник</a></li>
			<li id="project-gramofonche"><a href="//gramofonche.chitanka.info">Грамофонче</a></li>
			<li id="project-tools"><a href="//tools.chitanka.info">Сръчко</a></li>
		</ul>
	</div>

	<div id="content-wrapper" class="module-<?php echo $this->getModuleName() ?> action-<?php echo $this->getActionName() ?>">
		<?php include_slot('header') ?>

		<?php if (has_slot('title')): ?>
			<h1 id="first-heading"><?php include_slot('title') ?></h1>
		<?php endif ?>
		<div id="sitename">
			<?php if ( ! include_slot('sitename') ): ?>
				<p><?php echo link_to(sfConfig::get('app_sitename'), '@homepage') ?></p>
			<?php endif ?>
		</div>

		<div id="content"><?php echo $sf_content ?></div>

		<?php include_partial('global/personal') ?>

		<?php if ( ! include_slot('footer') ): ?>
			<?php include_partial('global/footer') ?>
		<?php endif ?>
	</div>

	<?php include_javascripts() ?>
</body>

</html>
