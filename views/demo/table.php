<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Tables';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="demo-table">
	<h1><?= Html::encode($this->title) ?></h1>

	<h2>Basic example</h2>

	<div class="bs-example">
		<table class="table table-hover">
			<caption>Optional table caption.</caption>
			<thead>
			<tr>
				<th>#</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Username</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>1</td>
				<td>Mark</td>
				<td>Otto</td>
				<td>@mdo</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Jacob</td>
				<td>Thornton</td>
				<td>@fat</td>
			</tr>
			<tr>
				<td>3</td>
				<td>Larry</td>
				<td>the Bird</td>
				<td>@twitter</td>
			</tr>
			</tbody>
		</table>
	</div>
	<div class="highlight">
		<pre>
			&lt;table class=&quot;table&quot;&gt;
			...
			&lt;/table&gt;
		</pre>
	</div>
	<h2>Table Striped and Hover</h2>

	<div class="bs-example">
		<table class="table table-striped table-hover">
			<thead>
			<tr>
				<th>#</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Username</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>1</td>
				<td>Mark</td>
				<td>Otto</td>
				<td>@mdo</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Jacob</td>
				<td>Thornton</td>
				<td>@fat</td>
			</tr>
			<tr>
				<td>3</td>
				<td>Larry</td>
				<td>the Bird</td>
				<td>@twitter</td>
			</tr>
			</tbody>
		</table>
	</div>
	<div class="highlight">
		<pre>
			&lt;table class=&quot;table table-striped table-hover&quot;&gt;
			...
			&lt;/table&gt;
		</pre>
	</div>

	<h2>Table Border</h2>

	<div class="bs-example">
		<table class="table table-bordered">
			<thead>
			<tr>
				<th>#</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Username</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td rowspan="2">1</td>
				<td>Mark</td>
				<td>Otto</td>
				<td>@mdo</td>
			</tr>
			<tr>
				<td>Mark</td>
				<td>Otto</td>
				<td>@TwBootstrap</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Jacob</td>
				<td>Thornton</td>
				<td>@fat</td>
			</tr>
			<tr>
				<td>3</td>
				<td colspan="2">Larry the Bird</td>
				<td>@twitter</td>
			</tr>
			</tbody>
		</table>
	</div>
	<div class="highlight">
		<pre>
			&lt;table class=&quot;table table-bordered&quot;&gt;
			...
			&lt;/table&gt;
		</pre>
	</div>

	<h2>Contextual classes</h2>

	<div class="bs-example">
		<table class="table">
			<thead>
			<tr>
				<th>#</th>
				<th>Column heading</th>
				<th>Column heading</th>
				<th>Column heading</th>
			</tr>
			</thead>
			<tbody>
			<tr class="active">
				<td>1</td>
				<td>Column content</td>
				<td>Column content</td>
				<td>Column content</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Column content</td>
				<td>Column content</td>
				<td>Column content</td>
			</tr>
			<tr class="success">
				<td>3</td>
				<td>Column content</td>
				<td>Column content</td>
				<td>Column content</td>
			</tr>
			<tr>
				<td>4</td>
				<td>Column content</td>
				<td>Column content</td>
				<td>Column content</td>
			</tr>
			<tr class="info">
				<td>5</td>
				<td>Column content</td>
				<td>Column content</td>
				<td>Column content</td>
			</tr>
			<tr>
				<td>6</td>
				<td>Column content</td>
				<td>Column content</td>
				<td>Column content</td>
			</tr>
			<tr class="warning">
				<td>7</td>
				<td>Column content</td>
				<td>Column content</td>
				<td>Column content</td>
			</tr>
			<tr>
				<td>8</td>
				<td>Column content</td>
				<td>Column content</td>
				<td>Column content</td>
			</tr>
			<tr class="danger">
				<td>9</td>
				<td>Column content</td>
				<td>Column content</td>
				<td>Column content</td>
			</tr>
			</tbody>
		</table>
	</div>
	<div class="highlight">
		<pre>
			&lt;!-- On rows --&gt;
			&lt;tr class=&quot;active&quot;&gt;...&lt;/tr&gt;
			&lt;tr class=&quot;success&quot;&gt;...&lt;/tr&gt;
			&lt;tr class=&quot;warning&quot;&gt;...&lt;/tr&gt;
			&lt;tr class=&quot;danger&quot;&gt;...&lt;/tr&gt;
			&lt;tr class=&quot;info&quot;&gt;...&lt;/tr&gt;

			&lt;!-- On cells (`td` or `th`) --&gt;
			&lt;tr&gt;
			&lt;td class=&quot;active&quot;&gt;...&lt;/td&gt;
			&lt;td class=&quot;success&quot;&gt;...&lt;/td&gt;
			&lt;td class=&quot;warning&quot;&gt;...&lt;/td&gt;
			&lt;td class=&quot;danger&quot;&gt;...&lt;/td&gt;
			&lt;td class=&quot;info&quot;&gt;...&lt;/td&gt;
			&lt;/tr&gt;
		</pre>
	</div>


	<h2>Condensed table</h2>

	<div class="bs-example">
		<table class="table table-condensed">
			<thead>
			<tr>
				<th>#</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Username</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td rowspan="2">1</td>
				<td>Mark</td>
				<td>Otto</td>
				<td>@mdo</td>
			</tr>
			<tr>
				<td>Mark</td>
				<td>Otto</td>
				<td>@TwBootstrap</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Jacob</td>
				<td>Thornton</td>
				<td>@fat</td>
			</tr>
			<tr>
				<td>3</td>
				<td colspan="2">Larry the Bird</td>
				<td>@twitter</td>
			</tr>
			</tbody>
		</table>
	</div>
	<div class="highlight">
		<pre>
			&lt;table class=&quot;table table-condensed&quot;&gt;
			...
			&lt;/table&gt;
		</pre>
	</div>


	<h2>Condensed table</h2>

	<div class="bs-example">
		<div class="table-responsive">
			<table class="table">
				<thead>
				<tr>
					<th>#</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Username</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td rowspan="2">1</td>
					<td>Mark</td>
					<td>Otto</td>
					<td>@mdo</td>
				</tr>
				<tr>
					<td>Mark</td>
					<td>Otto</td>
					<td>@TwBootstrap</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Jacob</td>
					<td>Thornton</td>
					<td>@fat</td>
				</tr>
				<tr>
					<td>3</td>
					<td colspan="2">Larry the Bird</td>
					<td>@twitter</td>
				</tr>
				</tbody>
			</table>
		</div>

		<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
				<tr>
					<th>#</th>
					<th>Table heading</th>
					<th>Table heading</th>
					<th>Table heading</th>
					<th>Table heading</th>
					<th>Table heading</th>
					<th>Table heading</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<th scope="row">1</th>
					<td>Table cell</td>
					<td>Table cell</td>
					<td>Table cell</td>
					<td>Table cell</td>
					<td>Table cell</td>
					<td>Table cell</td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td>Table cell</td>
					<td>Table cell</td>
					<td>Table cell</td>
					<td>Table cell</td>
					<td>Table cell</td>
					<td>Table cell</td>
				</tr>
				<tr>
					<th scope="row">3</th>
					<td>Table cell</td>
					<td>Table cell</td>
					<td>Table cell</td>
					<td>Table cell</td>
					<td>Table cell</td>
					<td>Table cell</td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="highlight">
		<pre>
			&lt;div class=&quot;table-responsive&quot;&gt;
				&lt;table class=&quot;table&quot;&gt;
					...
				&lt;/table&gt;
			&lt;/div&gt;
		</pre>
	</div>

</div>
