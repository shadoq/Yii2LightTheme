<?php

use shadoq\chats\ChartJSWidget;
use shadoq\widget\BlockContent;

/* @var $this yii\web\View */
$this->title = 'Dashboard v2 - charts';
$this->params['breadcrumbs'][] = $this->title;

$chartsLine = ChartJSWidget::widget([
   'type'    => 'Line',
   'options' => [
	   //Set width, height and use canvas-autosize, canvas-autowidth class
	   'class'  => 'canvas-autosize',
	   'width'  => 200,
	   'height' => 50,
   ],
   'data'    => [
	  'labels'  => ["Label 1", "Label 2", "Label 3", "Label 4", "Label 5", "Label 6"],
	  'dataSet' => [
		 [
			'fillColor'        => "rgba(220,220,220,0.125)",
			'strokeColor'      => "rgba(220,220,220,1)",
			'pointColor'       => "rgba(220,220,220,1)",
			'pointStrokeColor' => "#fff",
			'data'             => [10, 20, 33, 50, 30, 50]
		 ],
		 [
			'fillColor'        => "rgba(151,187,205,0.125)",
			'strokeColor'      => "rgba(151,187,205,1)",
			'pointColor'       => "rgba(151,187,205,1)",
			'pointStrokeColor' => "#fff",
			'data'             => [52, 32, 10, 48, 12, 5]
		 ]
	  ]
   ]
]);

$chartsBar = ChartJSWidget::widget([
   'type'    => 'Bar',
   'options' => [
	   //Set width, height and use canvas-autosize, canvas-autowidth class
	   'class'  => 'canvas-autowidth',
	   'width'  => 300,
	   'height' => 150,
   ],
   'data'    => [
	  'labels'  => ["Label 1", "Label 2", "Label 3", "Label 4", "Label 5", "Label 6"],
	  'dataSet' => [
		 [
			'fillColor'        => "rgba(220,220,220,0.2)",
			'strokeColor'      => "rgba(220,220,220,1)",
			'pointColor'       => "rgba(220,220,220,1)",
			'pointStrokeColor' => "#fff",
			'data'             => [10, 20, 33, 50, 30, 50]
		 ],
		 [
			'fillColor'        => "rgba(151,187,205,0.2)",
			'strokeColor'      => "rgba(151,187,205,1)",
			'pointColor'       => "rgba(151,187,205,1)",
			'pointStrokeColor' => "#fff",
			'data'             => [52, 32, 10, 48, 12, 5]
		 ]
	  ]
   ]
]);


$chartsRadar = ChartJSWidget::widget([
   'type'    => 'Radar',
   'options' => [
	   //Set width, height and use canvas-autosize, canvas-autowidth class
	   'class'  => 'canvas-autowidth',
	   'width'  => 300,
	   'height' => 150,
   ],
   'data'    => [
	  'labels'  => ["Label 1", "Label 2", "Label 3", "Label 4", "Label 5", "Label 6"],
	  'dataSet' => [
		 [
			'fillColor'        => "rgba(220,220,220,0.2)",
			'strokeColor'      => "rgba(220,220,220,1)",
			'pointColor'       => "rgba(220,220,220,1)",
			'pointStrokeColor' => "#fff",
			'data'             => [10, 20, 33, 50, 30, 50]
		 ],
		 [
			'fillColor'        => "rgba(151,187,205,0.2)",
			'strokeColor'      => "rgba(151,187,205,1)",
			'pointColor'       => "rgba(151,187,205,1)",
			'pointStrokeColor' => "#fff",
			'data'             => [52, 32, 10, 48, 12, 5]
		 ]
	  ]
   ]
]);


$chartsPolarArea = ChartJSWidget::widget([
   'type'    => 'PolarArea',
   'options' => [
	   //Set width, height and use canvas-autosize, canvas-autowidth class
	   'class'  => 'canvas-autowidth',
	   'width'  => 300,
	   'height' => 150,
   ],
   'data'    => [
	  [
		 'value' => 25,
		 'label' => 'Java',
		 'color' => '#F39C12'
	  ],
	  [
		 'value' => 10,
		 'label' => 'Scala',
		 'color' => '#9CBABA'
	  ],
	  [
		 'value' => 30,
		 'label' => 'PHP',
		 'color' => '#8BC34A'
	  ],
	  [
		 'value' => 35,
		 'label' => 'HTML',
		 'color' => '#DD4B39'
	  ]
   ]
]);


$chartsPie = ChartJSWidget::widget([
   'type'    => 'Pie',
   'options' => [
	   //Set width, height and use canvas-autosize, canvas-autowidth class
	   'class'  => 'canvas-autowidth',
	   'width'  => 300,
	   'height' => 150,
   ],
   'data'    => [
	  [
		 'value' => 25,
		 'label' => 'Java',
		 'color' => '#F39C12'
	  ],
	  [
		 'value' => 10,
		 'label' => 'Scala',
		 'color' => '#9CBABA'
	  ],
	  [
		 'value' => 30,
		 'label' => 'PHP',
		 'color' => '#8BC34A'
	  ],
	  [
		 'value' => 35,
		 'label' => 'HTML',
		 'color' => '#DD4B39'
	  ]
   ]
]);


$chartsDoughnut = ChartJSWidget::widget([
   'type'    => 'Doughnut',
   'options' => [
	   //Set width, height and use canvas-autosize, canvas-autowidth class
	   'class'  => 'canvas-autowidth',
	   'width'  => 300,
	   'height' => 150,
   ],
   'data'    => [
	  [
		 'value' => 25,
		 'label' => 'Java',
		 'color' => '#F39C12'
	  ],
	  [
		 'value' => 10,
		 'label' => 'Scala',
		 'color' => '#9CBABA'
	  ],
	  [
		 'value' => 30,
		 'label' => 'PHP',
		 'color' => '#8BC34A'
	  ],
	  [
		 'value' => 35,
		 'label' => 'HTML',
		 'color' => '#DD4B39'
	  ]
   ]
]);


?>
<div class="theme-default-index">
	<h1><?= $this->title ?></h1>

	<div class="row-fluid">
		<?php
		echo BlockContent::widget([
		   'title'          => 'ChartJS - Line',
		   'content'        => $chartsLine,
		   'footer'         => 'Use: <b>ChartJS</b> - <a href="http://www.chartjs.org/docs/" target="_blank">More example and doc</a>',
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
		   'title'          => 'ChartJS - Bar',
		   'content'        => $chartsBar,
		   'footer'         => 'Use: <b>ChartJS</b> - <a href="http://www.chartjs.org/docs/" target="_blank">More example and doc</a>',
		   'options'        =>
			  [
				 'class' => 'col-md-6 padding success'
			  ],
		   'headerOptions'  => [],
		   'contentOptions' => [],
		   'footerOptions'  => [],
		])
		?>
		<?php
		echo BlockContent::widget([
		   'title'          => 'ChartJS - Radar',
		   'content'        => $chartsRadar,
		   'footer'         => 'Use: <b>ChartJS</b> - <a href="http://www.chartjs.org/docs/" target="_blank">More example and doc</a>',
		   'options'        =>
			  [
				 'class' => 'col-md-6 padding danger'
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
		   'title'          => 'ChartJS - Polar Area',
		   'content'        => $chartsPolarArea,
		   'footer'         => 'Use: <b>ChartJS</b> - <a href="http://www.chartjs.org/docs/" target="_blank">More example and doc</a>',
		   'options'        =>
			  [
				 'class' => 'col-md-4 padding warning'
			  ],
		   'headerOptions'  => [],
		   'contentOptions' => [],
		   'footerOptions'  => [],
		])
		?>
		<?php
		echo BlockContent::widget([
		   'title'          => 'ChartJS - Pie',
		   'content'        => $chartsPie,
		   'footer'         => 'Use: <b>ChartJS</b> - <a href="http://www.chartjs.org/docs/" target="_blank">More example and doc</a>',
		   'options'        =>
			  [
				 'class' => 'col-md-4'
			  ],
		   'headerOptions'  => [],
		   'contentOptions' => [],
		   'footerOptions'  => [],
		])
		?>
		<?php
		echo BlockContent::widget([
		   'title'          => 'ChartJS - Doughnut',
		   'content'        => $chartsDoughnut,
		   'footer'         => 'Use: <b>ChartJS</b> - <a href="http://www.chartjs.org/docs/" target="_blank">More example and doc</a>',
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

</div>
