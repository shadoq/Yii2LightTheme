<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Forms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="demo-forms">
	<h1><?= Html::encode($this->title) ?></h1>


	<div class="bs-example">
		<form>
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			</div>
			<div class="form-group">
				<label for="exampleInputFile">File input</label>
				<input type="file" id="exampleInputFile">
				<p class="help-block">Example block-level help text here.</p>
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox"> Check me out
				</label>
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
	<div class="highlight">
		<pre>
			&lt;form&gt;
				&lt;div class=&quot;form-group&quot;&gt;
					&lt;label for=&quot;exampleInputEmail1&quot;&gt;Email address&lt;/label&gt;
					&lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;exampleInputEmail1&quot; placeholder=&quot;Email&quot;&gt;
				&lt;/div&gt;
				&lt;div class=&quot;form-group&quot;&gt;
					&lt;label for=&quot;exampleInputPassword1&quot;&gt;Password&lt;/label&gt;
					&lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;exampleInputPassword1&quot; placeholder=&quot;Password&quot;&gt;
				&lt;/div&gt;
				&lt;div class=&quot;form-group&quot;&gt;
					&lt;label for=&quot;exampleInputFile&quot;&gt;File input&lt;/label&gt;
					&lt;input type=&quot;file&quot; id=&quot;exampleInputFile&quot;&gt;
					&lt;p class=&quot;help-block&quot;&gt;Example block-level help text here.&lt;/p&gt;
				&lt;/div&gt;
				&lt;div class=&quot;checkbox&quot;&gt;
					&lt;label&gt;
						&lt;input type=&quot;checkbox&quot;&gt; Check me out
					&lt;/label&gt;
				&lt;/div&gt;
				&lt;button type=&quot;submit&quot; class=&quot;btn btn-default&quot;&gt;Submit&lt;/button&gt;
			&lt;/form&gt;
		</pre>
	</div>

	<h2>Inline</h2>

	<div class="bs-example">
		<form class="form-inline">
			<div class="form-group">
				<label for="exampleInputName2">Name</label>
				<input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail2">Email</label>
				<input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
			</div>
			<button type="submit" class="btn btn-default">Send invitation</button>
		</form>
	</div>
	<div class="highlight">
		<pre>
			&lt;form class=&quot;form-inline&quot;&gt;
				&lt;div class=&quot;form-group&quot;&gt;
					&lt;label for=&quot;exampleInputName2&quot;&gt;Name&lt;/label&gt;
					&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;exampleInputName2&quot; placeholder=&quot;Jane Doe&quot;&gt;
				&lt;/div&gt;
				&lt;div class=&quot;form-group&quot;&gt;
					&lt;label for=&quot;exampleInputEmail2&quot;&gt;Email&lt;/label&gt;
					&lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;exampleInputEmail2&quot; placeholder=&quot;jane.doe@example.com&quot;&gt;
				&lt;/div&gt;
				&lt;button type=&quot;submit&quot; class=&quot;btn btn-default&quot;&gt;Send invitation&lt;/button&gt;
			&lt;/form&gt;
		</pre>
	</div>


	<div class="bs-example">
		<form class="form-inline">
			<div class="form-group">
				<label class="sr-only" for="exampleInputEmail3">Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
			</div>
			<div class="form-group">
				<label class="sr-only" for="exampleInputPassword3">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox"> Remember me
				</label>
			</div>
			<button type="submit" class="btn btn-default">Sign in</button>
		</form>
	</div>
	<div class="highlight">
		<pre>
			&lt;form class=&quot;form-inline&quot;&gt;
				&lt;div class=&quot;form-group&quot;&gt;
					&lt;label class=&quot;sr-only&quot; for=&quot;exampleInputEmail3&quot;&gt;Email address&lt;/label&gt;
					&lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;exampleInputEmail3&quot; placeholder=&quot;Email&quot;&gt;
				&lt;/div&gt;
				&lt;div class=&quot;form-group&quot;&gt;
					&lt;label class=&quot;sr-only&quot; for=&quot;exampleInputPassword3&quot;&gt;Password&lt;/label&gt;
					&lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;exampleInputPassword3&quot; placeholder=&quot;Password&quot;&gt;
				&lt;/div&gt;
				&lt;div class=&quot;checkbox&quot;&gt;
					&lt;label&gt;
						&lt;input type=&quot;checkbox&quot;&gt; Remember me
					&lt;/label&gt;
				&lt;/div&gt;
				&lt;button type=&quot;submit&quot; class=&quot;btn btn-default&quot;&gt;Sign in&lt;/button&gt;
			&lt;/form&gt;
		</pre>
	</div>


	<div class="bs-example">
		<form class="form-inline">
			<div class="form-group">
				<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
				<div class="input-group">
					<div class="input-group-addon">$</div>
					<input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
					<div class="input-group-addon">.00</div>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Transfer cash</button>
		</form>
	</div>
	<div class="highlight">
		<pre>
			&lt;form class=&quot;form-inline&quot;&gt;
				&lt;div class=&quot;form-group&quot;&gt;
					&lt;label class=&quot;sr-only&quot; for=&quot;exampleInputAmount&quot;&gt;Amount (in dollars)&lt;/label&gt;
					&lt;div class=&quot;input-group&quot;&gt;
						&lt;div class=&quot;input-group-addon&quot;&gt;$&lt;/div&gt;
						&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;exampleInputAmount&quot; placeholder=&quot;Amount&quot;&gt;
						&lt;div class=&quot;input-group-addon&quot;&gt;.00&lt;/div&gt;
					&lt;/div&gt;
				&lt;/div&gt;
				&lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Transfer cash&lt;/button&gt;
			&lt;/form&gt;
		</pre>
	</div>


	<h2>Horizontal form</h2>

	<div class="bs-example">
		<form class="form-horizontal">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<div class="checkbox">
						<label>
							<input type="checkbox"> Remember me
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Sign in</button>
				</div>
			</div>
		</form>
	</div>
	<div class="highlight">
		<pre>
			&lt;form class=&quot;form-horizontal&quot;&gt;
				&lt;div class=&quot;form-group&quot;&gt;
					&lt;label for=&quot;inputEmail3&quot; class=&quot;col-sm-2 control-label&quot;&gt;Email&lt;/label&gt;
					&lt;div class=&quot;col-sm-10&quot;&gt;
						&lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;inputEmail3&quot; placeholder=&quot;Email&quot;&gt;
					&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;form-group&quot;&gt;
					&lt;label for=&quot;inputPassword3&quot; class=&quot;col-sm-2 control-label&quot;&gt;Password&lt;/label&gt;
					&lt;div class=&quot;col-sm-10&quot;&gt;
						&lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;inputPassword3&quot; placeholder=&quot;Password&quot;&gt;
					&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;form-group&quot;&gt;
					&lt;div class=&quot;col-sm-offset-2 col-sm-10&quot;&gt;
						&lt;div class=&quot;checkbox&quot;&gt;
							&lt;label&gt;
								&lt;input type=&quot;checkbox&quot;&gt; Remember me
							&lt;/label&gt;
						&lt;/div&gt;
					&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;form-group&quot;&gt;
					&lt;div class=&quot;col-sm-offset-2 col-sm-10&quot;&gt;
						&lt;button type=&quot;submit&quot; class=&quot;btn btn-default&quot;&gt;Sign in&lt;/button&gt;
					&lt;/div&gt;
				&lt;/div&gt;
			&lt;/form&gt;
		</pre>
	</div>


	<h2>Selects</h2>

	<div class="bs-example">
		<form role="form">
			<select class="form-control">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
			</select>
			<br>
			<select class="form-control" multiple="">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
			</select>
		</form>
	</div>
	<div class="highlight">
		<pre>
			&lt;form role=&quot;form&quot;&gt;
				&lt;select class=&quot;form-control&quot;&gt;
					&lt;option&gt;1&lt;/option&gt;
					&lt;option&gt;2&lt;/option&gt;
				&lt;/select&gt;
				&lt;br&gt;
				&lt;select class=&quot;form-control&quot; multiple=&quot;&quot;&gt;
					&lt;option&gt;1&lt;/option&gt;
					&lt;option&gt;2&lt;/option&gt;
				&lt;/select&gt;
			&lt;/form&gt;
		</pre>
	</div>


	<h2>Checkboxes and radios</h2>

	<div class="bs-example">
		<form role="form">
			<div class="checkbox">
				<label>
					<input type="checkbox" value="">
					Option one is this and that&mdash;be sure to include why it's great
				</label>
			</div>
			<div class="checkbox disabled">
				<label>
					<input type="checkbox" disabled="" value="">
					Option two is disabled
				</label>
			</div>
			<br>

			<div class="radio">
				<label>
					<input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios">
					Option one is this and that&mdash;be sure to include why it's great
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" value="option2" id="optionsRadios2" name="optionsRadios">
					Option two can be something else and selecting it will deselect option one
				</label>
			</div>
			<div class="radio disabled">
				<label>
					<input type="radio" disabled="" value="option3" id="optionsRadios3" name="optionsRadios">
					Option three is disabled
				</label>
			</div>

			<div class="radio">
				<label class="checkbox-inline">
					<input type="checkbox" value="option1" id="inlineCheckbox1"> 1
				</label>
				<label class="checkbox-inline">
					<input type="checkbox" value="option2" id="inlineCheckbox2"> 2
				</label>
				<label class="checkbox-inline">
					<input type="checkbox" value="option3" id="inlineCheckbox3"> 3
				</label>
				<br>
				<label class="radio-inline">
					<input type="radio" value="option1" id="inlineRadio1" name="inlineRadioOptions"> 1
				</label>
				<label class="radio-inline">
					<input type="radio" value="option2" id="inlineRadio2" name="inlineRadioOptions"> 2
				</label>
				<label class="radio-inline">
					<input type="radio" value="option3" id="inlineRadio3" name="inlineRadioOptions"> 3
				</label>
			</div>

		</form>
	</div>
	<div class="highlight">
		<pre>
			&lt;form role=&quot;form&quot;&gt;
				&lt;div class=&quot;checkbox&quot;&gt;
					&lt;label&gt;
						&lt;input type=&quot;checkbox&quot; value=&quot;&quot;&gt;
						Option one is this and that&amp;mdash;be sure to include why it's great
					&lt;/label&gt;
				&lt;/div&gt;
				&lt;div class=&quot;checkbox disabled&quot;&gt;
					&lt;label&gt;
						&lt;input type=&quot;checkbox&quot; disabled=&quot;&quot; value=&quot;&quot;&gt;
						Option two is disabled
					&lt;/label&gt;
				&lt;/div&gt;
				&lt;br&gt;

				&lt;div class=&quot;radio&quot;&gt;
					&lt;label&gt;
						&lt;input type=&quot;radio&quot; checked=&quot;&quot; value=&quot;option1&quot; id=&quot;optionsRadios1&quot; name=&quot;optionsRadios&quot;&gt;
						Option one is this and that&amp;mdash;be sure to include why it's great
					&lt;/label&gt;
				&lt;/div&gt;
				&lt;div class=&quot;radio&quot;&gt;
					&lt;label&gt;
						&lt;input type=&quot;radio&quot; value=&quot;option2&quot; id=&quot;optionsRadios2&quot; name=&quot;optionsRadios&quot;&gt;
						Option two can be something else and selecting it will deselect option one
					&lt;/label&gt;
				&lt;/div&gt;
				&lt;div class=&quot;radio disabled&quot;&gt;
					&lt;label&gt;
						&lt;input type=&quot;radio&quot; disabled=&quot;&quot; value=&quot;option3&quot; id=&quot;optionsRadios3&quot; name=&quot;optionsRadios&quot;&gt;
						Option three is disabled
					&lt;/label&gt;
				&lt;/div&gt;

				&lt;div class=&quot;radio&quot;&gt;
					&lt;label class=&quot;checkbox-inline&quot;&gt;
						&lt;input type=&quot;checkbox&quot; value=&quot;option1&quot; id=&quot;inlineCheckbox1&quot;&gt; 1
					&lt;/label&gt;
					&lt;label class=&quot;checkbox-inline&quot;&gt;
						&lt;input type=&quot;checkbox&quot; value=&quot;option2&quot; id=&quot;inlineCheckbox2&quot;&gt; 2
					&lt;/label&gt;
					&lt;label class=&quot;checkbox-inline&quot;&gt;
						&lt;input type=&quot;checkbox&quot; value=&quot;option3&quot; id=&quot;inlineCheckbox3&quot;&gt; 3
					&lt;/label&gt;
					&lt;br&gt;
					&lt;label class=&quot;radio-inline&quot;&gt;
						&lt;input type=&quot;radio&quot; value=&quot;option1&quot; id=&quot;inlineRadio1&quot; name=&quot;inlineRadioOptions&quot;&gt; 1
					&lt;/label&gt;
					&lt;label class=&quot;radio-inline&quot;&gt;
						&lt;input type=&quot;radio&quot; value=&quot;option2&quot; id=&quot;inlineRadio2&quot; name=&quot;inlineRadioOptions&quot;&gt; 2
					&lt;/label&gt;
					&lt;label class=&quot;radio-inline&quot;&gt;
						&lt;input type=&quot;radio&quot; value=&quot;option3&quot; id=&quot;inlineRadio3&quot; name=&quot;inlineRadioOptions&quot;&gt; 3
					&lt;/label&gt;
				&lt;/div&gt;

			&lt;/form&gt;
		</pre>
	</div>


	<h2>Static control</h2>

	<div class="bs-example">
		<form class="form-horizontal">
			<div class="form-group">
				<label class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
					<p class="form-control-static">email@example.com</p>
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword" class="col-sm-2 control-label">Password</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" id="inputPassword" placeholder="Password">
				</div>
			</div>
		</form>
	</div>
	<div class="highlight">
		<pre>
			&lt;form class=&quot;form-horizontal&quot;&gt;
				&lt;div class=&quot;form-group&quot;&gt;
					&lt;label class=&quot;col-sm-2 control-label&quot;&gt;Email&lt;/label&gt;
					&lt;div class=&quot;col-sm-10&quot;&gt;
						&lt;p class=&quot;form-control-static&quot;&gt;email@example.com&lt;/p&gt;
					&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;form-group&quot;&gt;
					&lt;label for=&quot;inputPassword&quot; class=&quot;col-sm-2 control-label&quot;&gt;Password&lt;/label&gt;
					&lt;div class=&quot;col-sm-10&quot;&gt;
						&lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;inputPassword&quot; placeholder=&quot;Password&quot;&gt;
					&lt;/div&gt;
				&lt;/div&gt;
			&lt;/form&gt;
		</pre>
	</div>


	<div class="bs-example">
		<form class="form-inline">
			<div class="form-group">
				<label class="sr-only">Email</label>
				<p class="form-control-static">email@example.com</p>
			</div>
			<div class="form-group">
				<label for="inputPassword2" class="sr-only">Password</label>
				<input type="password" class="form-control" id="inputPassword2" placeholder="Password">
			</div>
			<button type="submit" class="btn btn-default">Confirm identity</button>
		</form>
	</div>
	<div class="highlight">
		<pre>
			&lt;form class=&quot;form-inline&quot;&gt;
				&lt;div class=&quot;form-group&quot;&gt;
					&lt;label class=&quot;sr-only&quot;&gt;Email&lt;/label&gt;
					&lt;p class=&quot;form-control-static&quot;&gt;email@example.com&lt;/p&gt;
				&lt;/div&gt;
				&lt;div class=&quot;form-group&quot;&gt;
					&lt;label for=&quot;inputPassword2&quot; class=&quot;sr-only&quot;&gt;Password&lt;/label&gt;
					&lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;inputPassword2&quot; placeholder=&quot;Password&quot;&gt;
				&lt;/div&gt;
				&lt;button type=&quot;submit&quot; class=&quot;btn btn-default&quot;&gt;Confirm identity&lt;/button&gt;
			&lt;/form&gt;
		</pre>
	</div>


	<h2>Disable state</h2>

	<div class="bs-example">
		<form>
			<fieldset disabled>
				<div class="form-group">
					<label for="disabledTextInput">Disabled input</label>
					<input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
				</div>
				<div class="form-group">
					<label for="disabledSelect">Disabled select menu</label>
					<select id="disabledSelect" class="form-control">
						<option>Disabled select</option>
					</select>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox"> Can't check this
					</label>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</fieldset>
		</form>
	</div>
	<div class="highlight">
		<pre>
			&lt;form&gt;
				&lt;fieldset disabled&gt;
					&lt;div class=&quot;form-group&quot;&gt;
						&lt;label for=&quot;disabledTextInput&quot;&gt;Disabled input&lt;/label&gt;
						&lt;input type=&quot;text&quot; id=&quot;disabledTextInput&quot; class=&quot;form-control&quot; placeholder=&quot;Disabled input&quot;&gt;
					&lt;/div&gt;
					&lt;div class=&quot;form-group&quot;&gt;
						&lt;label for=&quot;disabledSelect&quot;&gt;Disabled select menu&lt;/label&gt;
						&lt;select id=&quot;disabledSelect&quot; class=&quot;form-control&quot;&gt;
							&lt;option&gt;Disabled select&lt;/option&gt;
						&lt;/select&gt;
					&lt;/div&gt;
					&lt;div class=&quot;checkbox&quot;&gt;
						&lt;label&gt;
							&lt;input type=&quot;checkbox&quot;&gt; Can't check this
						&lt;/label&gt;
					&lt;/div&gt;
					&lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Submit&lt;/button&gt;
				&lt;/fieldset&gt;
			&lt;/form&gt;
		</pre>
	</div>


	<h2>Readonly state</h2>

	<div class="bs-example">
		<form>
			<fieldset disabled>
				<div class="form-group">
					<label for="disabledTextInput">Readolny input</label>
					<input type="text" id="readolnyTextInput" class="form-control" placeholder="Readonly input here…" readonly>
				</div>
			</fieldset>
		</form>
	</div>
	<div class="highlight">
		<pre>
			&lt;form&gt;
				&lt;fieldset disabled&gt;
					&lt;div class=&quot;form-group&quot;&gt;
						&lt;label for=&quot;disabledTextInput&quot;&gt;Readolny input&lt;/label&gt;
						&lt;input type=&quot;text&quot; id=&quot;readolnyTextInput&quot; class=&quot;form-control&quot; placeholder=&quot;Readonly input here&hellip;&quot; readonly&gt;
					&lt;/div&gt;
				&lt;/fieldset&gt;
			&lt;/form&gt;
		</pre>
	</div>


</div>
