<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Buttons';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="demo-buttons">
	<h1><?= Html::encode($this->title) ?></h1>

	<h2>Button tags</h2>

	<div class="bs-example">
		<a class="btn btn-default" href="#" role="button">Link</a>
		<button class="btn btn-default" type="submit">Button</button>
		<input class="btn btn-default" type="button" value="Input">
		<input class="btn btn-default" type="submit" value="Submit">
	</div>
	<div class="highlight">
		<pre>
			&lt;a class=&quot;btn btn-default&quot; href=&quot;#&quot; role=&quot;button&quot;&gt;Link&lt;/a&gt;
			&lt;button class=&quot;btn btn-default&quot; type=&quot;submit&quot;&gt;Button&lt;/button&gt;
			&lt;input class=&quot;btn btn-default&quot; type=&quot;button&quot; value=&quot;Input&quot;&gt;
			&lt;input class=&quot;btn btn-default&quot; type=&quot;submit&quot; value=&quot;Submit&quot;&gt;
		</pre>
	</div>

	<h2>Options</h2>

	<div class="bs-example">
		<button type="button" class="btn btn-default">Default</button>
		<button type="button" class="btn btn-primary">Primary</button>
		<button type="button" class="btn btn-success">Success</button>
		<button type="button" class="btn btn-info">Info</button>
		<button type="button" class="btn btn-warning">Warning</button>
		<button type="button" class="btn btn-danger">Danger</button>
		<button type="button" class="btn btn-link">Link</button>
	</div>
	<div class="highlight">
		<pre>
			&lt;button type=&quot;button&quot; class=&quot;btn btn-default&quot;&gt;Default&lt;/button&gt;
			&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Primary&lt;/button&gt;
			&lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;Success&lt;/button&gt;
			&lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;Info&lt;/button&gt;
			&lt;button type=&quot;button&quot; class=&quot;btn btn-warning&quot;&gt;Warning&lt;/button&gt;
			&lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot;&gt;Danger&lt;/button&gt;
			&lt;button type=&quot;button&quot; class=&quot;btn btn-link&quot;&gt;Link&lt;/button&gt;
		</pre>
	</div>

	<h2>Sizes</h2>

	<div class="bs-example">
		<p>
			<button type="button" class="btn btn-primary btn-lg">Large button</button>
			<button type="button" class="btn btn-default btn-lg">Large button</button>
		</p>
		<p>
			<button type="button" class="btn btn-primary">Default button</button>
			<button type="button" class="btn btn-default">Default button</button>
		</p>
		<p>
			<button type="button" class="btn btn-primary btn-sm">Small button</button>
			<button type="button" class="btn btn-default btn-sm">Small button</button>
		</p>
		<p>
			<button type="button" class="btn btn-primary btn-xs">Extra small button</button>
			<button type="button" class="btn btn-default btn-xs">Extra small button</button>
		</p>
	</div>
	<div class="highlight">
		<pre>
			&lt;p&gt;
				&lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-lg&quot;&gt;Large button&lt;/button&gt;
				&lt;button type=&quot;button&quot; class=&quot;btn btn-default btn-lg&quot;&gt;Large button&lt;/button&gt;
			&lt;/p&gt;
			&lt;p&gt;
				&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Default button&lt;/button&gt;
				&lt;button type=&quot;button&quot; class=&quot;btn btn-default&quot;&gt;Default button&lt;/button&gt;
			&lt;/p&gt;
			&lt;p&gt;
				&lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-sm&quot;&gt;Small button&lt;/button&gt;
				&lt;button type=&quot;button&quot; class=&quot;btn btn-default btn-sm&quot;&gt;Small button&lt;/button&gt;
			&lt;/p&gt;
			&lt;p&gt;
				&lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-xs&quot;&gt;Extra small button&lt;/button&gt;
				&lt;button type=&quot;button&quot; class=&quot;btn btn-default btn-xs&quot;&gt;Extra small button&lt;/button&gt;
			&lt;/p&gt;
		</pre>
	</div>

	<h2>Block level</h2>

	<div class="bs-example">
		<div style="max-width: 400px;" class="well left-block">
			<button class="btn btn-primary btn-lg btn-block" type="button">Block level button</button>
			<button class="btn btn-default btn-lg btn-block" type="button">Block level button</button>
		</div>
	</div>
	<div class="highlight">
		<pre>
			&lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-lg btn-block&quot;&gt;Block level button&lt;/button&gt;
			&lt;button type=&quot;button&quot; class=&quot;btn btn-default btn-lg btn-block&quot;&gt;Block level button&lt;/button&gt;
		</pre>
	</div>

	<h2>Active state</h2>

	<div class="bs-example">
		<button type="button" class="btn btn-primary btn-lg active">Primary button</button>
		<button type="button" class="btn btn-default btn-lg active">Button</button>
		<a href="#" class="btn btn-primary btn-lg active" role="button">Primary link</a>
		<a href="#" class="btn btn-default btn-lg active" role="button">Link</a>
		<button type="button" class="btn btn-lg btn-primary" disabled="disabled">Disabled Primary button</button>
		<button type="button" class="btn btn-default btn-lg" disabled="disabled">Disabled Button</button>
		<a href="#" class="btn btn-primary btn-lg disabled" role="button">Disabled Primary link</a>
		<a href="#" class="btn btn-default btn-lg disabled" role="button">Disabled Link</a>
	</div>
	<div class="highlight">
		<pre>
			&lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-lg active&quot;&gt;Primary button&lt;/button&gt;
			&lt;button type=&quot;button&quot; class=&quot;btn btn-default btn-lg active&quot;&gt;Button&lt;/button&gt;
			&lt;a href=&quot;#&quot; class=&quot;btn btn-primary btn-lg active&quot; role=&quot;button&quot;&gt;Primary link&lt;/a&gt;
			&lt;a href=&quot;#&quot; class=&quot;btn btn-default btn-lg active&quot; role=&quot;button&quot;&gt;Link&lt;/a&gt;
			&lt;button type=&quot;button&quot; class=&quot;btn btn-lg btn-primary&quot; disabled=&quot;disabled&quot;&gt;Disabled Primary button&lt;/button&gt;
			&lt;button type=&quot;button&quot; class=&quot;btn btn-default btn-lg&quot; disabled=&quot;disabled&quot;&gt;Disabled Button&lt;/button&gt;
			&lt;a href=&quot;#&quot; class=&quot;btn btn-primary btn-lg disabled&quot; role=&quot;button&quot;&gt;Disabled Primary link&lt;/a&gt;
			&lt;a href=&quot;#&quot; class=&quot;btn btn-default btn-lg disabled&quot; role=&quot;button&quot;&gt;Disabled Link&lt;/a&gt;
		</pre>
	</div>

	<h2>Column ordering</h2>

	<div class="bs-example">
		<div class="row show-grid">
			<div class="col-md-9 col-md-push-3">.col-md-9 .col-md-push-3</div>
			<div class="col-md-3 col-md-pull-9">.col-md-3 .col-md-pull-9</div>
		</div>
	</div>
	<div class="highlight">
		<pre>
		&lt;div class=&quot;row show-grid&quot;&gt;
			&lt;div class=&quot;col-md-9 col-md-push-3&quot;&gt;.col-md-9 .col-md-push-3&lt;/div&gt;
			&lt;div class=&quot;col-md-3 col-md-pull-9&quot;&gt;.col-md-3 .col-md-pull-9&lt;/div&gt;
		&lt;/div&gt;
		</pre>
	</div>

	<h2>Column ordering</h2>

	<div class="bs-example">
		<div class="row show-grid">
			<div class="col-md-9 col-md-push-3">.col-md-9 .col-md-push-3</div>
			<div class="col-md-3 col-md-pull-9">.col-md-3 .col-md-pull-9</div>
		</div>
	</div>
	<div class="highlight">
		<pre>
		&lt;div class=&quot;row show-grid&quot;&gt;
			&lt;div class=&quot;col-md-9 col-md-push-3&quot;&gt;.col-md-9 .col-md-push-3&lt;/div&gt;
			&lt;div class=&quot;col-md-3 col-md-pull-9&quot;&gt;.col-md-3 .col-md-pull-9&lt;/div&gt;
		&lt;/div&gt;
		</pre>
	</div>

	<h2>Column ordering</h2>

	<div class="bs-example">
		<div class="row show-grid">
			<div class="col-md-9 col-md-push-3">.col-md-9 .col-md-push-3</div>
			<div class="col-md-3 col-md-pull-9">.col-md-3 .col-md-pull-9</div>
		</div>
	</div>
	<div class="highlight">
		<pre>
		&lt;div class=&quot;row show-grid&quot;&gt;
			&lt;div class=&quot;col-md-9 col-md-push-3&quot;&gt;.col-md-9 .col-md-push-3&lt;/div&gt;
			&lt;div class=&quot;col-md-3 col-md-pull-9&quot;&gt;.col-md-3 .col-md-pull-9&lt;/div&gt;
		&lt;/div&gt;
		</pre>
	</div>

	<h2>Column ordering</h2>

	<div class="bs-example">
		<div class="row show-grid">
			<div class="col-md-9 col-md-push-3">.col-md-9 .col-md-push-3</div>
			<div class="col-md-3 col-md-pull-9">.col-md-3 .col-md-pull-9</div>
		</div>
	</div>
	<div class="highlight">
		<pre>
		&lt;div class=&quot;row show-grid&quot;&gt;
			&lt;div class=&quot;col-md-9 col-md-push-3&quot;&gt;.col-md-9 .col-md-push-3&lt;/div&gt;
			&lt;div class=&quot;col-md-3 col-md-pull-9&quot;&gt;.col-md-3 .col-md-pull-9&lt;/div&gt;
		&lt;/div&gt;
		</pre>
	</div>

	<h2>Column ordering</h2>

	<div class="bs-example">
		<div class="row show-grid">
			<div class="col-md-9 col-md-push-3">.col-md-9 .col-md-push-3</div>
			<div class="col-md-3 col-md-pull-9">.col-md-3 .col-md-pull-9</div>
		</div>
	</div>
	<div class="highlight">
		<pre>
		&lt;div class=&quot;row show-grid&quot;&gt;
			&lt;div class=&quot;col-md-9 col-md-push-3&quot;&gt;.col-md-9 .col-md-push-3&lt;/div&gt;
			&lt;div class=&quot;col-md-3 col-md-pull-9&quot;&gt;.col-md-3 .col-md-pull-9&lt;/div&gt;
		&lt;/div&gt;
		</pre>
	</div>

</div>
