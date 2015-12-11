<?php

use shadoq\widget\CustomNavBar;
use shadoq\widget\MessageDropdown;
use shadoq\widget\NoticeDropdown;
use shadoq\widget\SideNav;
use shadoq\widget\UserMenuDropdown;
use shadoq\Yii2LightTheme\assets\ThemeAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

ThemeAsset::register($this);

//
// Dane systemu
//
$memory = number_format(memory_get_usage() / 1048576, 2);
$memoryPeak = number_format(memory_get_peak_usage() / 1048576, 2);

$siteTitle = 'Yii2 Light Theme';

$menuItems =
   [
	  ['label' => 'Bootstrap', 'items' =>
		 [
			['label' => 'Css', 'url' => ['/Yii2LightTheme/demo/css']],
			['label' => 'Buttons', 'url' => ['/Yii2LightTheme/demo/buttons']],
			['label' => 'Glyphicons', 'url' => ['/Yii2LightTheme/demo/glyphicons']],
			['label' => 'Forms', 'url' => ['/Yii2LightTheme/demo/forms']],
			['label' => 'Forms Icon, Color and Sizing', 'url' => ['/Yii2LightTheme/demo/forms-icon']],
			['label' => 'Grid', 'url' => ['/Yii2LightTheme/demo/grid']],
			['label' => 'Table', 'url' => ['/Yii2LightTheme/demo/table']],
			['label' => 'HTML Lorem Ipsum', 'url' => ['/Yii2LightTheme/demo/loremlipsum']],
		 ]],
	  ['label' => 'Yii', 'items' =>
		 [
			['label' => 'Backend Grid', 'url' => ['/Yii2LightTheme/default/backend-grid']],
			['label' => 'Backend Info', 'url' => ['/Yii2LightTheme/default/backend-info']],
			['label' => 'Backend Form', 'url' => ['/Yii2LightTheme/default/backend-form']],
			['label' => 'Widget', 'url' => ['/Yii2LightTheme/default/widget']],
		 ]
	  ],
   ];

$leftMenuItems =
   [
	  [
		 'label'  => 'MAIN NAVIGATION',
		 'header' => true
	  ],
	  [
		 'label' => 'Dashboard',
		 'items' =>
			[
			   [
				  'label'     => 'Dashboard v1',
				  'url'       => ['/Yii2LightTheme/default/index'],
				  'glyphicon' => 'glyphicon-time text-red'
			   ],
			   [
				  'label'     => 'Dashboard v2',
				  'url'       => ['/Yii2LightTheme/default/index2'],
				  'glyphicon' => 'glyphicon-stats text-yellow'
			   ],
			],
		 'mark'  =>
			[
			   'label' => '1',
			   'class' => 'badge bg-yellow'
			],

	  ],
	  $menuItems[0],
	  $menuItems[1],
	  [
		 'label'  => 'LABELS',
		 'header' => true
	  ],
	  [
		 'label'       => 'Important',
		 'glyphicon'   => 'text-red glyphicon-time',
		 'linkOptions' =>
			[
			   'class' => 'text-red'
			]
	  ],
	  [
		 'label'       => 'Warning',
		 'glyphicon'   => 'text-yellow glyphicon-time',
		 'mark'        =>
			[
			   'label' => '4',
			   'class' => 'badge bg-red'
			],
		 'linkOptions' =>
			[
			   'class' => 'text-yellow'
			]
	  ],
	  [
		 'label'       => 'Information',
		 'glyphicon'   => 'text-aqua glyphicon-time',
		 'mark'        =>
			[
			   'label' => 'Approved',
			   'class' => 'label label-success'
			],
		 'linkOptions' =>
			[
			   'class' => 'text-aqua'
			]
	  ]
   ];


?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<?= Html::csrfMetaTags() ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?= Html::encode($siteTitle) ?></title>
	<?php $this->head() ?>

</head>


<!--
	Body control class:
	sidebar-simple -
	sidebar-collapse -
	sidebar-mini -
	navbar-autoopen -
-->
<body class="sidebar-simple navbar-autoopen">
<?php $this->beginBody() ?>

<div class="wrap control-sidebar">

	<header class="header">
		<?php
		CustomNavBar::begin([
		   'brandLabel'            => $siteTitle,
		   'brandUrl'              => Yii::$app->homeUrl,
		   'options'               => [
			  'class' => 'navbar navbar-fixed-top navbar-inverse clearfix',
		   ],
		   'innerContainerOptions' => [
			  'class' => 'container-fluid',
		   ]
		]);

		?>

		<?php

		echo Nav::widget([
		   'options' => ['class' => 'navbar-nav navbar-left'],
		   'items'   => $menuItems
		]);

		?>

		<ul class="nav navbar-nav toolbar pull-right navbar-tool">

			<?php

			echo NoticeDropdown::widget([
			   'options'       => [
			   ],
			   'allItemsCount' => '20',
			   'allItemsLabel' => 'label-success',
			   'allItemsUrl'   => '#',
			   'items'         =>
				  [
					 [
						'icon'    => 'glyphicon-apple',
						'title'   => 'Support Team don\'t like ...',
						'time'    => '5 mins',
						'href'    => '#',
						'options' =>
						   [
							  'class' => 'success'
						   ]
					 ],
					 [
						'icon'    => '',
						'title'   => 'Join to Admin Team',
						'time'    => '5 mins',
						'href'    => '#',
						'options' =>
						   [
							  'class' => ''
						   ]
					 ],
					 [
						'icon'    => 'glyphicon-blackboard text-red',
						'title'   => 'Your pro version ends in 4 days',
						'time'    => '20 mins',
						'href'    => '#',
						'options' =>
						   [
							  'class' => ''
						   ]
					 ],
					 [
						'icon'    => 'glyphicon-blackboard',
						'title'   => 'Support Team',
						'time'    => 'ToDay',
						'href'    => '#',
						'options' =>
						   [
							  'class' => 'danger'
						   ]

					 ],
					 [
						'icon'    => 'glyphicon-cloud',
						'title'   => 'Do you like this theme?',
						'time'    => 'ToDay',
						'href'    => '#',
						'options' =>
						   [
							  'class' => 'warning'
						   ]
					 ],
				  ]
			]);

			echo MessageDropdown::widget([
			   'options'       => [
			   ],
			   'allItemsCount' => '8',
			   'allItemsLabel' => 'label-danger',
			   'allItemsUrl'   => '#',
			   'items'         =>
				  [
					 [
						'label'   => 'S',
						'title'   => 'Support Team',
						'content' => 'Some text long text',
						'time'    => '5 mins',
						'href'    => '#',
						'options' =>
						   [
							  'class' => 'success'
						   ]
					 ],
					 [
						'label'   => 'A',
						'title'   => 'Admin Team',
						'content' => 'Some text long text',
						'time'    => '30 mins',
						'href'    => '#',
						'options' =>
						   [
							  'class' => ''
						   ]
					 ],
					 [
						'label'   => 'S',
						'title'   => 'Support Team',
						'content' => 'Some text long text',
						'time'    => '1 hour',
						'href'    => '#',
						'options' =>
						   [
							  'class' => ''
						   ]
					 ],
					 [
						'label'   => 'D',
						'title'   => 'Developers',
						'content' => 'Do you like this theme?',
						'time'    => 'To Day',
						'href'    => '#',
						'options' =>
						   [
							  'class' => 'danger'
						   ]
					 ],
					 [
						'label'   => 'S',
						'title'   => 'Support Team',
						'content' => 'Do you have any problems?',
						'time'    => 'To Day',
						'href'    => '#',
						'options' =>
						   [
							  'class' => 'warning'
						   ]
					 ],

				  ]
			]);

			echo UserMenuDropdown::widget([
			   'options' => [
			   ],
			   'items'   =>
				  [
					 [
						'title'    => 'Profile',
						'label'    => '80%',
						'labelCss' => 'label label-info',
						'href'     => '#',
						'options'  =>
						   [
							  'class' => ''
						   ]
					 ],
					 [
						'title'    => 'Account',
						'label'    => '',
						'labelCss' => 'glyphicon glyphicon-user',
						'href'     => '#',
						'options'  =>
						   [
							  'class' => ''
						   ]
					 ],
					 [
						'divider' => true
					 ],
					 [
						'title'    => 'Settings',
						'label'    => '',
						'labelCss' => 'glyphicon glyphicon-th',
						'href'     => '#',
						'options'  =>
						   [
							  'class' => 'danger'
						   ]
					 ],
					 [
						'title'    => 'Upgrade',
						'label'    => '',
						'labelCss' => 'glyphicon glyphicon-bitcoin',
						'href'     => '#',
						'options'  =>
						   [
							  'class' => ''
						   ]
					 ],
					 [
						'divider' => true
					 ],
					 [
						'title'    => 'Sign Out',
						'label'    => '',
						'labelCss' => 'glyphicon glyphicon-off',
						'href'     => '#',
						'options'  =>
						   [
							  'class' => 'primary'
						   ]
					 ],
				  ]
			]);

			?>

		</ul>

		<?php

		CustomNavBar::end();
		?>
	</header>

	<aside>
		<div class="sidebar">

			<?php

			echo SideNav::widget([
			   'items' => $leftMenuItems
			]);

			?>
			<?php
			if (isset($this->params['menuLeft'])){
				?>
				<ul class="nav nav-pills nav-stacked">
					<?php
					echo $this->params['menuLeft'];
					?>
				</ul>
				<?php
			};
			?>

		</div>
	</aside>


	<div class="main container-fluid">
		<?= Breadcrumbs::widget([
		   'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
		]) ?>
		<?= $content ?>
	</div>

	<footer class="footer">
		<div class="pull-left hidden-xs">
			&copy; 2015 <a href="http://czub.info">Jarosław Czub</a> ver. 0.1
		</div>
		<div class="pull-right hidden-xs">
			<?= Yii::powered() ?>
		</div>
	</footer>
</div>

<?php $this->endBody() ?>
<script>
	(function (i, s, o, g, r, a, m) {
		i['GoogleAnalyticsObject'] = r;
		i[r] = i[r] || function () {
			   (i[r].q = i[r].q || []).push(arguments)
		   }, i[r].l = 1 * new Date();
		a = s.createElement(o),
		   m = s.getElementsByTagName(o)[0];
		a.async = 1;
		a.src = g;
		m.parentNode.insertBefore(a, m)
	})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

	ga('create', 'UA-58141415-3', 'auto');
	ga('send', 'pageview');

</script>

</body>
</html>
<?php $this->endPage() ?>
