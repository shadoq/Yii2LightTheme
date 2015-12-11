<?php
use shadoq\widget\DualListBox;
use shadoq\widget\DynamicDropDownInput;
use shadoq\Yii2LightTheme\model\Test;
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Yii Widget';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="demo-table">
	<h1><?= Html::encode($this->title) ?></h1>

	<h2>DualListBox</h2>

	<div class="bs-example">
		<?php
		echo DualListBox::widget(
		   [
			  'model'     => new Test(),
			  'attribute' => 'test',
			  'items'     => ['val1', 'val3', 'val5'],
			  'values'    =>
				 [
					'val1' => 'Value 1',
					'val2' => 'Value 2',
					'val3' => 'Value 3',
					'val4' => 'Value 4',
					'val5' => 'Value 5',
					'val6' => 'Value 6',
					'val7' => 'Value 7',
				 ],
		   ]
		);
		?>
	</div>
	<div class="highlight">
		<pre>
		echo DualListBox::widget(
		   [
			  'model'     =&gt; new Test(),
			  'attribute' =&gt; 'test',
			  'items'     =&gt; ['val1', 'val3', 'val5'],
			  'values'    =&gt;
				 [
					'val1' =&gt; 'Value 1',
					'val2' =&gt; 'Value 2',
					'val3' =&gt; 'Value 3',
					'val4' =&gt; 'Value 4',
					'val5' =&gt; 'Value 5',
					'val6' =&gt; 'Value 6',
					'val7' =&gt; 'Value 7',
				 ],
		   ]
		);
		</pre>
	</div>

	<h2>Dynamic DropDown</h2>

	<div class="bs-example">
		<?php
		echo DynamicDropDownInput::widget(
		   [
			  'model'     => new Test(),
			  'attribute' => 'test',
			  'items'     => ['val1', 'val3', 'val5'],
			  'values'    =>
				 [
					''     => '-------',
					'val1' => 'Value 1',
					'val2' => 'Value 2',
					'val3' => 'Value 3',
					'val4' => 'Value 4',
					'val5' => 'Value 5',
					'val6' => 'Value 6',
					'val7' => 'Value 7',
				 ],
		   ]
		);
		?>
	</div>
	<div class="highlight">
		<pre>
		echo DynamicDropDownInput::widget(
		   [
			  'model'     =&gt; new Test(),
			  'attribute' =&gt; 'test',
			  'items'     =&gt; ['val1', 'val3', 'val5'],
			  'values'    =&gt;
				 [
					''     =&gt; '-------',
					'val1' =&gt; 'Value 1',
					'val2' =&gt; 'Value 2',
					'val3' =&gt; 'Value 3',
					'val4' =&gt; 'Value 4',
					'val5' =&gt; 'Value 5',
					'val6' =&gt; 'Value 6',
					'val7' =&gt; 'Value 7',
				 ],
		   ]
		);
		</pre>
	</div>

	<h2>Basic example</h2>

	<div class="bs-example">
	</div>
	<div class="highlight">
		<pre>
		</pre>
	</div>

	<h2>Basic example</h2>

	<div class="bs-example">
	</div>
	<div class="highlight">
		<pre>
		</pre>
	</div>

	<h2>Basic example</h2>

	<div class="bs-example">
	</div>
	<div class="highlight">
		<pre>
		</pre>
	</div>

	<h2>Basic example</h2>

	<div class="bs-example">
	</div>
	<div class="highlight">
		<pre>
		</pre>
	</div>

	<h2>Basic example</h2>

	<div class="bs-example">
	</div>
	<div class="highlight">
		<pre>
		</pre>
	</div>

	<h2>Basic example</h2>

	<div class="bs-example">
	</div>
	<div class="highlight">
		<pre>
		</pre>
	</div>

	<h2>Basic example</h2>

	<div class="bs-example">
	</div>
	<div class="highlight">
		<pre>
		</pre>
	</div>

</div>
