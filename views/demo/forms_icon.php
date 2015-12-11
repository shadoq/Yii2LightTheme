<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Forms Icon, Color and Sizing';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="demo-forms">
	<h1><?= Html::encode($this->title) ?></h1>


	<h2>Sizing</h2>

	<div class="bs-example">
		<form class="form">
			<div class="form-group">
				<input type="text" placeholder=".input-lg" class="form-control input-lg">
				<input type="text" placeholder="Default input" class="form-control">
				<input type="text" placeholder=".input-sm" class="form-control input-sm">

				<select class="form-control input-lg">
					<option value="">.input-lg</option>
				</select>
				<select class="form-control">
					<option value="">Default select</option>
				</select>
				<select class="form-control input-sm">
					<option value="">.input-sm</option>
				</select>
			</div>
		</form>
	</div>
	<div class="highlight">
		<pre>
			&lt;input class=&quot;form-control input-lg&quot; type=&quot;text&quot; placeholder=&quot;.input-lg&quot;&gt;
			&lt;input class=&quot;form-control&quot; type=&quot;text&quot; placeholder=&quot;Default input&quot;&gt;
			&lt;input class=&quot;form-control input-sm&quot; type=&quot;text&quot; placeholder=&quot;.input-sm&quot;&gt;
			&lt;select class=&quot;form-control input-lg&quot;&gt;...&lt;/select&gt;
			&lt;select class=&quot;form-control&quot;&gt;...&lt;/select&gt;
			&lt;select class=&quot;form-control input-sm&quot;&gt;...&lt;/select&gt;
		</pre>
	</div>


	<h2>Horizontal form group sizes</h2>

	<div class="bs-example">
		<form class="form-horizontal">
			<div class="form-group form-group-lg">
				<label class="col-sm-2 control-label" for="formGroupInputLarge">Large label</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" id="formGroupInputLarge" placeholder="Large input">
				</div>
			</div>
			<div class="form-group form-group-sm">
				<label class="col-sm-2 control-label" for="formGroupInputSmall">Small label</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" id="formGroupInputSmall" placeholder="Small input">
				</div>
			</div>
		</form>
	</div>
	<div class="highlight">
		<pre>
			&lt;form class=&quot;form-horizontal&quot;&gt;
				&lt;div class=&quot;form-group form-group-lg&quot;&gt;
					&lt;label class=&quot;col-sm-2 control-label&quot; for=&quot;formGroupInputLarge&quot;&gt;Large label&lt;/label&gt;
					&lt;div class=&quot;col-sm-10&quot;&gt;
						&lt;input class=&quot;form-control&quot; type=&quot;text&quot; id=&quot;formGroupInputLarge&quot; placeholder=&quot;Large input&quot;&gt;
					&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;form-group form-group-sm&quot;&gt;
					&lt;label class=&quot;col-sm-2 control-label&quot; for=&quot;formGroupInputSmall&quot;&gt;Small label&lt;/label&gt;
					&lt;div class=&quot;col-sm-10&quot;&gt;
						&lt;input class=&quot;form-control&quot; type=&quot;text&quot; id=&quot;formGroupInputSmall&quot; placeholder=&quot;Small input&quot;&gt;
					&lt;/div&gt;
				&lt;/div&gt;
			&lt;/form&gt;
		</pre>
	</div>


	<h2>Column sizing</h2>

	<div class="bs-example">
			<div class="row">
				<div class="col-xs-2">
					<input type="text" class="form-control" placeholder=".col-xs-2">
				</div>
				<div class="col-xs-3">
					<input type="text" class="form-control" placeholder=".col-xs-3">
				</div>
				<div class="col-xs-4">
					<input type="text" class="form-control" placeholder=".col-xs-4">
				</div>
			</div>
	</div>
	<div class="highlight">
		<pre>
			&lt;div class=&quot;row&quot;&gt;
				&lt;div class=&quot;col-xs-2&quot;&gt;
					&lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;.col-xs-2&quot;&gt;
				&lt;/div&gt;
				&lt;div class=&quot;col-xs-3&quot;&gt;
					&lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;.col-xs-3&quot;&gt;
				&lt;/div&gt;
				&lt;div class=&quot;col-xs-4&quot;&gt;
					&lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;.col-xs-4&quot;&gt;
				&lt;/div&gt;
			&lt;/div&gt;
		</pre>
	</div>

	<h2>Validation states</h2>

	<div class="bs-example">
		<form>
			<div class="form-group has-success">
				<label class="control-label" for="inputSuccess1">Input with success</label>
				<input type="text" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2">
				<span id="helpBlock2" class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
			</div>
			<div class="form-group has-warning">
				<label class="control-label" for="inputWarning1">Input with warning</label>
				<input type="text" class="form-control" id="inputWarning1">
			</div>
			<div class="form-group has-error">
				<label class="control-label" for="inputError1">Input with error</label>
				<input type="text" class="form-control" id="inputError1">
			</div>
			<div class="has-success">
				<div class="checkbox">
					<label>
						<input type="checkbox" id="checkboxSuccess" value="option1">
						Checkbox with success
					</label>
				</div>
			</div>
			<div class="has-warning">
				<div class="checkbox">
					<label>
						<input type="checkbox" id="checkboxWarning" value="option1">
						Checkbox with warning
					</label>
				</div>
			</div>
			<div class="has-error">
				<div class="checkbox">
					<label>
						<input type="checkbox" id="checkboxError" value="option1">
						Checkbox with error
					</label>
				</div>
			</div>
		</form>
	</div>
	<div class="highlight">
		<pre>
			&lt;form&gt;
				&lt;div class=&quot;form-group has-success&quot;&gt;
					&lt;label class=&quot;control-label&quot; for=&quot;inputSuccess1&quot;&gt;Input with success&lt;/label&gt;
					&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputSuccess1&quot; aria-describedby=&quot;helpBlock2&quot;&gt;
					&lt;span id=&quot;helpBlock2&quot; class=&quot;help-block&quot;&gt;A block of help text that breaks onto a new line and may extend beyond one line.&lt;/span&gt;
				&lt;/div&gt;
				&lt;div class=&quot;form-group has-warning&quot;&gt;
					&lt;label class=&quot;control-label&quot; for=&quot;inputWarning1&quot;&gt;Input with warning&lt;/label&gt;
					&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputWarning1&quot;&gt;
				&lt;/div&gt;
				&lt;div class=&quot;form-group has-error&quot;&gt;
					&lt;label class=&quot;control-label&quot; for=&quot;inputError1&quot;&gt;Input with error&lt;/label&gt;
					&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputError1&quot;&gt;
				&lt;/div&gt;
				&lt;div class=&quot;has-success&quot;&gt;
					&lt;div class=&quot;checkbox&quot;&gt;
						&lt;label&gt;
							&lt;input type=&quot;checkbox&quot; id=&quot;checkboxSuccess&quot; value=&quot;option1&quot;&gt;
							Checkbox with success
						&lt;/label&gt;
					&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;has-warning&quot;&gt;
					&lt;div class=&quot;checkbox&quot;&gt;
						&lt;label&gt;
							&lt;input type=&quot;checkbox&quot; id=&quot;checkboxWarning&quot; value=&quot;option1&quot;&gt;
							Checkbox with warning
						&lt;/label&gt;
					&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;has-error&quot;&gt;
					&lt;div class=&quot;checkbox&quot;&gt;
						&lt;label&gt;
							&lt;input type=&quot;checkbox&quot; id=&quot;checkboxError&quot; value=&quot;option1&quot;&gt;
							Checkbox with error
						&lt;/label&gt;
					&lt;/div&gt;
				&lt;/div&gt;
			&lt;/form&gt;
		</pre>
	</div>



	<h2>Validation with optional icons</h2>

	<div class="bs-example">
		<form>
			<div class="form-group has-success has-feedback">
				<label class="control-label" for="inputSuccess2">Input with success</label>
				<input type="text" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status">
				<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
				<span id="inputSuccess2Status" class="sr-only">(success)</span>
			</div>
			<div class="form-group has-warning has-feedback">
				<label class="control-label" for="inputWarning2">Input with warning</label>
				<input type="text" class="form-control" id="inputWarning2" aria-describedby="inputWarning2Status">
				<span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>
				<span id="inputWarning2Status" class="sr-only">(warning)</span>
			</div>
			<div class="form-group has-error has-feedback">
				<label class="control-label" for="inputError2">Input with error</label>
				<input type="text" class="form-control" id="inputError2" aria-describedby="inputError2Status">
				<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
				<span id="inputError2Status" class="sr-only">(error)</span>
			</div>
			<div class="form-group has-success has-feedback">
				<label class="control-label" for="inputGroupSuccess1">Input group with success</label>
				<div class="input-group">
					<span class="input-group-addon">@</span>
					<input type="text" class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status">
				</div>
				<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
				<span id="inputGroupSuccess1Status" class="sr-only">(success)</span>
			</div>
		</form>
	</div>
	<div class="highlight">
		<pre>
			&lt;form&gt;
				&lt;div class=&quot;form-group has-success has-feedback&quot;&gt;
					&lt;label class=&quot;control-label&quot; for=&quot;inputSuccess2&quot;&gt;Input with success&lt;/label&gt;
					&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputSuccess2&quot; aria-describedby=&quot;inputSuccess2Status&quot;&gt;
					&lt;span class=&quot;glyphicon glyphicon-ok form-control-feedback&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
					&lt;span id=&quot;inputSuccess2Status&quot; class=&quot;sr-only&quot;&gt;(success)&lt;/span&gt;
				&lt;/div&gt;
				&lt;div class=&quot;form-group has-warning has-feedback&quot;&gt;
					&lt;label class=&quot;control-label&quot; for=&quot;inputWarning2&quot;&gt;Input with warning&lt;/label&gt;
					&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputWarning2&quot; aria-describedby=&quot;inputWarning2Status&quot;&gt;
					&lt;span class=&quot;glyphicon glyphicon-warning-sign form-control-feedback&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
					&lt;span id=&quot;inputWarning2Status&quot; class=&quot;sr-only&quot;&gt;(warning)&lt;/span&gt;
				&lt;/div&gt;
				&lt;div class=&quot;form-group has-error has-feedback&quot;&gt;
					&lt;label class=&quot;control-label&quot; for=&quot;inputError2&quot;&gt;Input with error&lt;/label&gt;
					&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputError2&quot; aria-describedby=&quot;inputError2Status&quot;&gt;
					&lt;span class=&quot;glyphicon glyphicon-remove form-control-feedback&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
					&lt;span id=&quot;inputError2Status&quot; class=&quot;sr-only&quot;&gt;(error)&lt;/span&gt;
				&lt;/div&gt;
				&lt;div class=&quot;form-group has-success has-feedback&quot;&gt;
					&lt;label class=&quot;control-label&quot; for=&quot;inputGroupSuccess1&quot;&gt;Input group with success&lt;/label&gt;
					&lt;div class=&quot;input-group&quot;&gt;
						&lt;span class=&quot;input-group-addon&quot;&gt;@&lt;/span&gt;
						&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputGroupSuccess1&quot; aria-describedby=&quot;inputGroupSuccess1Status&quot;&gt;
					&lt;/div&gt;
					&lt;span class=&quot;glyphicon glyphicon-ok form-control-feedback&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
					&lt;span id=&quot;inputGroupSuccess1Status&quot; class=&quot;sr-only&quot;&gt;(success)&lt;/span&gt;
				&lt;/div&gt;
			&lt;/form&gt;
		</pre>
	</div>



	<h2>Optional icons in horizontal and inline forms</h2>

	<div class="bs-example">
		<form class="form-horizontal">
			<div class="form-group has-success has-feedback">
				<label class="control-label col-sm-3" for="inputSuccess3">Input with success</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="inputSuccess3" aria-describedby="inputSuccess3Status">
					<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
					<span id="inputSuccess3Status" class="sr-only">(success)</span>
				</div>
			</div>
			<div class="form-group has-success has-feedback">
				<label class="control-label col-sm-3" for="inputGroupSuccess2">Input group with success</label>
				<div class="col-sm-9">
					<div class="input-group">
						<span class="input-group-addon">@</span>
						<input type="text" class="form-control" id="inputGroupSuccess2" aria-describedby="inputGroupSuccess2Status">
					</div>
					<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
					<span id="inputGroupSuccess2Status" class="sr-only">(success)</span>
				</div>
			</div>
		</form>
	</div>
	<div class="highlight">
		<pre>
			&lt;form class=&quot;form-horizontal&quot;&gt;
				&lt;div class=&quot;form-group has-success has-feedback&quot;&gt;
					&lt;label class=&quot;control-label col-sm-3&quot; for=&quot;inputSuccess3&quot;&gt;Input with success&lt;/label&gt;
					&lt;div class=&quot;col-sm-9&quot;&gt;
						&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputSuccess3&quot; aria-describedby=&quot;inputSuccess3Status&quot;&gt;
						&lt;span class=&quot;glyphicon glyphicon-ok form-control-feedback&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
						&lt;span id=&quot;inputSuccess3Status&quot; class=&quot;sr-only&quot;&gt;(success)&lt;/span&gt;
					&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;form-group has-success has-feedback&quot;&gt;
					&lt;label class=&quot;control-label col-sm-3&quot; for=&quot;inputGroupSuccess2&quot;&gt;Input group with success&lt;/label&gt;
					&lt;div class=&quot;col-sm-9&quot;&gt;
						&lt;div class=&quot;input-group&quot;&gt;
							&lt;span class=&quot;input-group-addon&quot;&gt;@&lt;/span&gt;
							&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputGroupSuccess2&quot; aria-describedby=&quot;inputGroupSuccess2Status&quot;&gt;
						&lt;/div&gt;
						&lt;span class=&quot;glyphicon glyphicon-ok form-control-feedback&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
						&lt;span id=&quot;inputGroupSuccess2Status&quot; class=&quot;sr-only&quot;&gt;(success)&lt;/span&gt;
					&lt;/div&gt;
				&lt;/div&gt;
			&lt;/form&gt;
		</pre>
	</div>



	<h2>Form inline</h2>

	<div class="bs-example">
		<form class="form-inline">
			<div class="form-group has-success has-feedback">
				<label class="control-label" for="inputSuccess4">Input with success</label>
				<input type="text" class="form-control" id="inputSuccess4" aria-describedby="inputSuccess4Status">
				<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
				<span id="inputSuccess4Status" class="sr-only">(success)</span>
			</div>
		</form>
		<form class="form-inline">
			<div class="form-group has-success has-feedback">
				<label class="control-label" for="inputGroupSuccess3">Input group with success</label>
				<div class="input-group">
					<span class="input-group-addon">@</span>
					<input type="text" class="form-control" id="inputGroupSuccess3" aria-describedby="inputGroupSuccess3Status">
				</div>
				<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
				<span id="inputGroupSuccess3Status" class="sr-only">(success)</span>
			</div>
		</form>
	</div>
	<div class="highlight">
		<pre>
			&lt;form class=&quot;form-inline&quot;&gt;
				&lt;div class=&quot;form-group has-success has-feedback&quot;&gt;
					&lt;label class=&quot;control-label&quot; for=&quot;inputSuccess4&quot;&gt;Input with success&lt;/label&gt;
					&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputSuccess4&quot; aria-describedby=&quot;inputSuccess4Status&quot;&gt;
					&lt;span class=&quot;glyphicon glyphicon-ok form-control-feedback&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
					&lt;span id=&quot;inputSuccess4Status&quot; class=&quot;sr-only&quot;&gt;(success)&lt;/span&gt;
				&lt;/div&gt;
			&lt;/form&gt;
			&lt;form class=&quot;form-inline&quot;&gt;
				&lt;div class=&quot;form-group has-success has-feedback&quot;&gt;
					&lt;label class=&quot;control-label&quot; for=&quot;inputGroupSuccess3&quot;&gt;Input group with success&lt;/label&gt;
					&lt;div class=&quot;input-group&quot;&gt;
						&lt;span class=&quot;input-group-addon&quot;&gt;@&lt;/span&gt;
						&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputGroupSuccess3&quot; aria-describedby=&quot;inputGroupSuccess3Status&quot;&gt;
					&lt;/div&gt;
					&lt;span class=&quot;glyphicon glyphicon-ok form-control-feedback&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
					&lt;span id=&quot;inputGroupSuccess3Status&quot; class=&quot;sr-only&quot;&gt;(success)&lt;/span&gt;
				&lt;/div&gt;
			&lt;/form&gt;
		</pre>
	</div>


	<h2>Form inline</h2>

	<div class="bs-example">
		<form class="form-inline">
			<div class="form-group has-success has-feedback">
				<label class="control-label" for="inputSuccess4">Input with success</label>
				<input type="text" class="form-control" id="inputSuccess4" aria-describedby="inputSuccess4Status">
				<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
				<span id="inputSuccess4Status" class="sr-only">(success)</span>
			</div>
		</form>
		<form class="form-inline">
			<div class="form-group has-success has-feedback">
				<label class="control-label" for="inputGroupSuccess3">Input group with success</label>
				<div class="input-group">
					<span class="input-group-addon">@</span>
					<input type="text" class="form-control" id="inputGroupSuccess3" aria-describedby="inputGroupSuccess3Status">
				</div>
				<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
				<span id="inputGroupSuccess3Status" class="sr-only">(success)</span>
			</div>
		</form>
	</div>
	<div class="highlight">
		<pre>
			&lt;form class=&quot;form-inline&quot;&gt;
				&lt;div class=&quot;form-group has-success has-feedback&quot;&gt;
					&lt;label class=&quot;control-label&quot; for=&quot;inputSuccess4&quot;&gt;Input with success&lt;/label&gt;
					&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputSuccess4&quot; aria-describedby=&quot;inputSuccess4Status&quot;&gt;
					&lt;span class=&quot;glyphicon glyphicon-ok form-control-feedback&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
					&lt;span id=&quot;inputSuccess4Status&quot; class=&quot;sr-only&quot;&gt;(success)&lt;/span&gt;
				&lt;/div&gt;
			&lt;/form&gt;
			&lt;form class=&quot;form-inline&quot;&gt;
				&lt;div class=&quot;form-group has-success has-feedback&quot;&gt;
					&lt;label class=&quot;control-label&quot; for=&quot;inputGroupSuccess3&quot;&gt;Input group with success&lt;/label&gt;
					&lt;div class=&quot;input-group&quot;&gt;
						&lt;span class=&quot;input-group-addon&quot;&gt;@&lt;/span&gt;
						&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputGroupSuccess3&quot; aria-describedby=&quot;inputGroupSuccess3Status&quot;&gt;
					&lt;/div&gt;
					&lt;span class=&quot;glyphicon glyphicon-ok form-control-feedback&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
					&lt;span id=&quot;inputGroupSuccess3Status&quot; class=&quot;sr-only&quot;&gt;(success)&lt;/span&gt;
				&lt;/div&gt;
			&lt;/form&gt;
		</pre>
	</div>


	<div class="bs-example">
		<div class="form-group has-success has-feedback">
			<label class="control-label sr-only" for="inputSuccess5">Hidden label</label>
			<input type="text" class="form-control" id="inputSuccess5" aria-describedby="inputSuccess5Status">
			<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
			<span id="inputSuccess5Status" class="sr-only">(success)</span>
		</div>
		<div class="form-group has-success has-feedback">
			<label class="control-label sr-only" for="inputGroupSuccess4">Input group with success</label>
			<div class="input-group">
				<span class="input-group-addon">@</span>
				<input type="text" class="form-control" id="inputGroupSuccess4" aria-describedby="inputGroupSuccess4Status">
			</div>
			<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
			<span id="inputGroupSuccess4Status" class="sr-only">(success)</span>
		</div>
	</div>
	<div class="highlight">
		<pre>
			&lt;div class=&quot;form-group has-success has-feedback&quot;&gt;
				&lt;label class=&quot;control-label sr-only&quot; for=&quot;inputSuccess5&quot;&gt;Hidden label&lt;/label&gt;
				&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputSuccess5&quot; aria-describedby=&quot;inputSuccess5Status&quot;&gt;
				&lt;span class=&quot;glyphicon glyphicon-ok form-control-feedback&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
				&lt;span id=&quot;inputSuccess5Status&quot; class=&quot;sr-only&quot;&gt;(success)&lt;/span&gt;
			&lt;/div&gt;
			&lt;div class=&quot;form-group has-success has-feedback&quot;&gt;
				&lt;label class=&quot;control-label sr-only&quot; for=&quot;inputGroupSuccess4&quot;&gt;Input group with success&lt;/label&gt;
				&lt;div class=&quot;input-group&quot;&gt;
					&lt;span class=&quot;input-group-addon&quot;&gt;@&lt;/span&gt;
					&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputGroupSuccess4&quot; aria-describedby=&quot;inputGroupSuccess4Status&quot;&gt;
				&lt;/div&gt;
				&lt;span class=&quot;glyphicon glyphicon-ok form-control-feedback&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
				&lt;span id=&quot;inputGroupSuccess4Status&quot; class=&quot;sr-only&quot;&gt;(success)&lt;/span&gt;
			&lt;/div&gt;
		</pre>
	</div>

</div>
