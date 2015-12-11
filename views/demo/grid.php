<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Grid';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="demo-grid">
	<h1><?= Html::encode($this->title) ?></h1>

	<h2>Stacked-to-horizontal</h2>

	<div class="bs-example">
		<div class="row show-grid">
			<div class="col-md-1">.col-md-1</div>
			<div class="col-md-1">.col-md-1</div>
			<div class="col-md-1">.col-md-1</div>
			<div class="col-md-1">.col-md-1</div>
			<div class="col-md-1">.col-md-1</div>
			<div class="col-md-1">.col-md-1</div>
			<div class="col-md-1">.col-md-1</div>
			<div class="col-md-1">.col-md-1</div>
			<div class="col-md-1">.col-md-1</div>
			<div class="col-md-1">.col-md-1</div>
			<div class="col-md-1">.col-md-1</div>
			<div class="col-md-1">.col-md-1</div>
		</div>
		<div class="row show-grid">
			<div class="col-md-8">.col-md-8</div>
			<div class="col-md-4">.col-md-4</div>
		</div>
		<div class="row show-grid">
			<div class="col-md-4">.col-md-4</div>
			<div class="col-md-4">.col-md-4</div>
			<div class="col-md-4">.col-md-4</div>
		</div>
		<div class="row show-grid">
			<div class="col-md-6">.col-md-6</div>
			<div class="col-md-6">.col-md-6</div>
		</div>
	</div>

	<div class="highlight">
		<pre>
		&lt;div class=&quot;row&quot;&gt;
			&lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
			&lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
			&lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
			&lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
			&lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
			&lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
			&lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
			&lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
			&lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
			&lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
			&lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
			&lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
		&lt;/div&gt;
		&lt;div class=&quot;row&quot;&gt;
			&lt;div class=&quot;col-md-8&quot;&gt;.col-md-8&lt;/div&gt;
			&lt;div class=&quot;col-md-4&quot;&gt;.col-md-4&lt;/div&gt;
		&lt;/div&gt;
		&lt;div class=&quot;row&quot;&gt;
			&lt;div class=&quot;col-md-4&quot;&gt;.col-md-4&lt;/div&gt;
			&lt;div class=&quot;col-md-4&quot;&gt;.col-md-4&lt;/div&gt;
			&lt;div class=&quot;col-md-4&quot;&gt;.col-md-4&lt;/div&gt;
		&lt;/div&gt;
		&lt;div class=&quot;row&quot;&gt;
			&lt;div class=&quot;col-md-6&quot;&gt;.col-md-6&lt;/div&gt;
			&lt;div class=&quot;col-md-6&quot;&gt;.col-md-6&lt;/div&gt;
		&lt;/div&gt;
		</pre>
	</div>


	<h2>Mobile and desktop</h2>

	<div class="bs-example">
		<div class="row show-grid">
			<div class="col-xs-12 col-md-8">.col-xs-12 .col-md-8</div>
			<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
		</div>
		<div class="row show-grid">
			<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
			<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
			<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
		</div>
		<div class="row show-grid">
			<div class="col-xs-6">.col-xs-6</div>
			<div class="col-xs-6">.col-xs-6</div>
		</div>
	</div>


	<div class="highlight">
		<pre>
		&lt;div class=&quot;row&quot;&gt;
			&lt;div class=&quot;col-xs-12 col-md-8&quot;&gt;.col-xs-12 .col-md-8&lt;/div&gt;
			&lt;div class=&quot;col-xs-6 col-md-4&quot;&gt;.col-xs-6 .col-md-4&lt;/div&gt;
		&lt;/div&gt;
		&lt;div class=&quot;row&quot;&gt;
			&lt;div class=&quot;col-xs-6 col-md-4&quot;&gt;.col-xs-6 .col-md-4&lt;/div&gt;
			&lt;div class=&quot;col-xs-6 col-md-4&quot;&gt;.col-xs-6 .col-md-4&lt;/div&gt;
			&lt;div class=&quot;col-xs-6 col-md-4&quot;&gt;.col-xs-6 .col-md-4&lt;/div&gt;
		&lt;/div&gt;
		&lt;div class=&quot;row&quot;&gt;
			&lt;div class=&quot;col-xs-6&quot;&gt;.col-xs-6&lt;/div&gt;
			&lt;div class=&quot;col-xs-6&quot;&gt;.col-xs-6&lt;/div&gt;
		&lt;/div&gt;
		</pre>
	</div>


	<h2>Mobile, tablet, desktop</h2>

	<div class="bs-example">
		<div class="row show-grid">
			<div class="col-xs-12 col-sm-6 col-md-8">.col-xs-12 .col-sm-6 .col-md-8</div>
			<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
		</div>
		<div class="row show-grid">
			<div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
			<div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
			<!-- Optional: clear the XS cols if their content doesn't match in height -->
			<div class="clearfix visible-xs-block"></div>
			<div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
		</div>
	</div>


	<div class="highlight">
		<pre>
		&lt;div class=&quot;row&quot;&gt;
			&lt;div class=&quot;col-xs-12 col-sm-6 col-md-8&quot;&gt;.col-xs-12 .col-sm-6 .col-md-8&lt;/div&gt;
			&lt;div class=&quot;col-xs-6 col-md-4&quot;&gt;.col-xs-6 .col-md-4&lt;/div&gt;
		&lt;/div&gt;
		&lt;div class=&quot;row&quot;&gt;
			&lt;div class=&quot;col-xs-6 col-sm-4&quot;&gt;.col-xs-6 .col-sm-4&lt;/div&gt;
			&lt;div class=&quot;col-xs-6 col-sm-4&quot;&gt;.col-xs-6 .col-sm-4&lt;/div&gt;
			&lt;!-- Optional: clear the XS cols if their content doesn't match in height --&gt;
			&lt;div class=&quot;clearfix visible-xs-block&quot;&gt;&lt;/div&gt;
			&lt;div class=&quot;col-xs-6 col-sm-4&quot;&gt;.col-xs-6 .col-sm-4&lt;/div&gt;
		&lt;/div&gt;
		</pre>
	</div>
	<h2>Responsive column resets</h2>

	<div class="bs-example">
		<div class="row show-grid">
			<div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
			<div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>

			<!-- Add the extra clearfix for only the required viewport -->
			<div class="clearfix visible-xs-block"></div>

			<div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
			<div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
		</div>
	</div>
	<div class="highlight">
		<pre>
			&lt;div class=&quot;col-xs-6 col-sm-3&quot;&gt;.col-xs-6 .col-sm-3&lt;/div&gt;
			&lt;div class=&quot;col-xs-6 col-sm-3&quot;&gt;.col-xs-6 .col-sm-3&lt;/div&gt;

			&lt;!-- Add the extra clearfix for only the required viewport --&gt;
			&lt;div class=&quot;clearfix visible-xs-block&quot;&gt;&lt;/div&gt;

			&lt;div class=&quot;col-xs-6 col-sm-3&quot;&gt;.col-xs-6 .col-sm-3&lt;/div&gt;
			&lt;div class=&quot;col-xs-6 col-sm-3&quot;&gt;.col-xs-6 .col-sm-3&lt;/div&gt;
		</pre>
	</div>

	<h2>Offsetting columns</h2>

	<div class="bs-example">
		<div class="row show-grid">
			<div class="col-md-4">.col-md-4</div>
			<div class="col-md-4 col-md-offset-4">.col-md-4 .col-md-offset-4</div>
		</div>
		<div class="row show-grid">
			<div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
			<div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
		</div>
		<div class="row show-grid">
			<div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div>
		</div>
	</div>
	<div class="highlight">
		<pre>
		&lt;div class=&quot;row show-grid&quot;&gt;
			&lt;div class=&quot;col-md-4&quot;&gt;.col-md-4&lt;/div&gt;
			&lt;div class=&quot;col-md-4 col-md-offset-4&quot;&gt;.col-md-4 .col-md-offset-4&lt;/div&gt;
		&lt;/div&gt;
		&lt;div class=&quot;row show-grid&quot;&gt;
			&lt;div class=&quot;col-md-3 col-md-offset-3&quot;&gt;.col-md-3 .col-md-offset-3&lt;/div&gt;
			&lt;div class=&quot;col-md-3 col-md-offset-3&quot;&gt;.col-md-3 .col-md-offset-3&lt;/div&gt;
		&lt;/div&gt;
		&lt;div class=&quot;row show-grid&quot;&gt;
			&lt;div class=&quot;col-md-6 col-md-offset-3&quot;&gt;.col-md-6 .col-md-offset-3&lt;/div&gt;
		&lt;/div&gt;
		</pre>
	</div>

	<h2>Nesting columns</h2>

	<div class="bs-example">
		<div class="row show-grid">
			<div class="col-sm-9">
				Level 1: .col-sm-9
				<div class="row show-grid">
					<div class="col-xs-8 col-sm-6">
						Level 2: .col-xs-8 .col-sm-6
					</div>
					<div class="col-xs-4 col-sm-6">
						Level 2: .col-xs-4 .col-sm-6
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="highlight">
		<pre>
			&lt;div class=&quot;col-sm-9&quot;&gt;
				Level 1: .col-sm-9
				&lt;div class=&quot;row show-grid&quot;&gt;
					&lt;div class=&quot;col-xs-8 col-sm-6&quot;&gt;
						Level 2: .col-xs-8 .col-sm-6
					&lt;/div&gt;
					&lt;div class=&quot;col-xs-4 col-sm-6&quot;&gt;
						Level 2: .col-xs-4 .col-sm-6
					&lt;/div&gt;
				&lt;/div&gt;
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

	<div class="bs-example">

		<table class="table table-bordered table-striped table-hover">
			<thead>
			<tr>
				<th></th>
				<th>
					Extra small devices
					<small>Phones (&lt;768px)</small>
				</th>
				<th>
					Small devices
					<small>Tablets (&ge;768px)</small>
				</th>
				<th>
					Medium devices
					<small>Desktops (&ge;992px)</small>
				</th>
				<th>
					Large devices
					<small>Desktops (&ge;1200px)</small>
				</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<th class="text-nowrap" scope="row">Grid behavior</th>
				<td>Horizontal at all times</td>
				<td colspan="3">Collapsed to start, horizontal above breakpoints</td>
			</tr>
			<tr>
				<th class="text-nowrap" scope="row">Container width</th>
				<td>None (auto)</td>
				<td>750px</td>
				<td>970px</td>
				<td>1170px</td>
			</tr>
			<tr>
				<th class="text-nowrap" scope="row">Class prefix</th>
				<td><code>.col-xs-</code></td>
				<td><code>.col-sm-</code></td>
				<td><code>.col-md-</code></td>
				<td><code>.col-lg-</code></td>
			</tr>
			<tr>
				<th class="text-nowrap" scope="row"># of columns</th>
				<td colspan="4">12</td>
			</tr>
			<tr>
				<th class="text-nowrap" scope="row">Column width</th>
				<td class="text-muted">Auto</td>
				<td>~62px</td>
				<td>~81px</td>
				<td>~97px</td>
			</tr>
			<tr>
				<th class="text-nowrap" scope="row">Gutter width</th>
				<td colspan="4">30px (15px on each side of a column)</td>
			</tr>
			<tr>
				<th class="text-nowrap" scope="row">Nestable</th>
				<td colspan="4">Yes</td>
			</tr>
			<tr>
				<th class="text-nowrap" scope="row">Offsets</th>
				<td colspan="4">Yes</td>
			</tr>
			<tr>
				<th class="text-nowrap" scope="row">Column ordering</th>
				<td colspan="4">Yes</td>
			</tr>
			</tbody>
		</table>
	</div>

</div>
