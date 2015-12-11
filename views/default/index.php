<?php

use shadoq\widget\BlockContent;
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Dashboard v1';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="theme-default-index">
	<h1><?= $this->title ?></h1>

	<div class="row-fluid">
		<?php
		echo BlockContent::widget([
		   'title'          => 'Title block',
		   'content'        => 'Content block',
		   'footer'         => 'Footer block',
		   'options'        =>
			  [
				 'class' => 'col-md-12'
			  ],
		   'headerOptions'  => [],
		   'contentOptions' => [],
		   'footerOptions'  => [],
		])
		?>
	</div>

	<div class="row-fluid">
		<?php
		echo BlockContent::widget([
		   'title'          => 'Title block 2',
		   'content'        => 'Content block',
		   'footer'         => 'Footer block',
		   'options'        =>
			  [
				 'class' => 'col-md-6 success padding'
			  ],
		   'headerOptions'  => [],
		   'contentOptions' => [],
		   'footerOptions'  => [],
		])
		?>
		<?php
		echo BlockContent::widget([
		   'title'          => 'Title block 3',
		   'content'        => 'Content block',
		   'footer'         => 'Footer block',
		   'options'        =>
			  [
				 'class' => 'col-md-6 danger'
			  ],
		   'headerOptions'  => [],
		   'contentOptions' => [],
		   'footerOptions'  => [],
		])
		?>
	</div>


	<div class="row-fluid">
		<?php
		echo BlockContent::widget([
		   'title'          => 'Title block 4',
		   'content'        => 'Content block',
		   'footer'         => 'Footer block',
		   'options'        =>
			  [
				 'class' => 'col-md-4 warning padding'
			  ],
		   'headerOptions'  => [],
		   'contentOptions' => [],
		   'footerOptions'  => [],
		])
		?>
		<?php
		echo BlockContent::widget([
		   'title'          => 'Title block 5',
		   'content'        => 'Content block',
		   'footer'         => 'Footer block',
		   'options'        =>
			  [
				 'class' => 'col-md-4 padding'
			  ],
		   'headerOptions'  => [],
		   'contentOptions' => [],
		   'footerOptions'  => [],
		])
		?>
		<?php
		echo BlockContent::widget([
		   'title'          => 'Title block 6',
		   'content'        => 'Content block',
		   'footer'         => 'Footer block',
		   'options'        =>
			  [
				 'class' => 'col-md-4'
			  ],
		   'headerOptions'  => [],
		   'contentOptions' => [],
		   'footerOptions'  => [],
		])
		?>
	</div>


	<div class="row-fluid">
		<?php
		echo BlockContent::widget([
		   'title'          => 'Title block 7',
		   'content'        => 'Content block',
		   'footer'         => 'Footer block',
		   'options'        =>
			  [
				 'class' => 'col-md-3 padding'
			  ],
		   'headerOptions'  => [],
		   'contentOptions' => [],
		   'footerOptions'  => [],
		])
		?>
		<?php
		echo BlockContent::widget([
		   'title'          => 'Title block 8',
		   'content'        => 'Content block',
		   'footer'         => 'Footer block',
		   'options'        =>
			  [
				 'class' => 'col-md-3 padding'
			  ],
		   'headerOptions'  => [],
		   'contentOptions' => [],
		   'footerOptions'  => [],
		])
		?>
		<?php
		echo BlockContent::widget([
		   'title'          => 'Title block 9',
		   'content'        => 'Content block',
		   'footer'         => 'Footer block',
		   'options'        =>
			  [
				 'class' => 'col-md-3 info padding'
			  ],
		   'headerOptions'  => [],
		   'contentOptions' => [],
		   'footerOptions'  => [],
		])
		?>
		<?php
		echo BlockContent::widget([
		   'title'          => 'Title block 10',
		   'content'        => 'Content block',
		   'footer'         => 'Footer block',
		   'options'        =>
			  [
				 'class' => 'col-md-3 inverse'
			  ],
		   'headerOptions'  => [],
		   'contentOptions' => [],
		   'footerOptions'  => [],
		])
		?>
	</div>

</div>
