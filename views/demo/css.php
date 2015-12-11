<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Css';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="demo-css">
	<h1><?= Html::encode($this->title) ?></h1>

	<h3 id="helper-classes-colors">Contextual colors</h3>

	<div class="bs-example">
		<p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>

		<p class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

		<p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>

		<p class="text-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>

		<p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>

		<p class="text-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
	</div>
	<div class="highlight">
		<pre>
		</pre>
	</div>

	<div class="bs-example bs-example-bg-classes">
		<p class="bg-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

		<p class="bg-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>

		<p class="bg-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>

		<p class="bg-warning">Etiam porta sem malesuada magna mollis euismod.</p>

		<p class="bg-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
	</div>
	<div class="highlight">
		<pre>
		</pre>
	</div>

	<div class="bs-callout bs-callout-danger">
		<h4>Conveying meaning to assistive technologies</h4>

		<p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies &ndash; such as screen
			readers. Ensure that information denoted by the color is either obvious from the content itself (the contextual colors are only used to reinforce
			meaning that is already present in the text/markup), or is included through alternative means, such as additional text hidden with the <code>.sr-only</code>
			class.</p>
	</div>
	<div class="highlight">
		<pre>
		</pre>
	</div>

	<div class="bs-callout bs-callout-info">
		<h4>Input groups</h4>

		<p>To add integrated text or buttons before and/or after any text-based <code>&lt;input&gt;</code>, <a href="../components/#input-groups">check out the
				input group component</a>.</p>
	</div>
	<div class="highlight">
		<pre>
		</pre>
	</div>


	<div class="bs-example">
		<table class="table">
			<tbody>
			<tr>
				<td><h1>h1. Bootstrap heading</h1></td>
				<td class="type-info">Semibold 36px</td>
			</tr>
			<tr>
				<td><h2>h2. Bootstrap heading</h2></td>
				<td class="type-info">Semibold 30px</td>
			</tr>
			<tr>
				<td><h3>h3. Bootstrap heading</h3></td>
				<td class="type-info">Semibold 24px</td>
			</tr>
			<tr>
				<td><h4>h4. Bootstrap heading</h4></td>
				<td class="type-info">Semibold 18px</td>
			</tr>
			<tr>
				<td><h5>h5. Bootstrap heading</h5></td>
				<td class="type-info">Semibold 14px</td>
			</tr>
			<tr>
				<td><h6>h6. Bootstrap heading</h6></td>
				<td class="type-info">Semibold 12px</td>
			</tr>
			</tbody>
		</table>
	</div>
	<div class="highlight">
		<pre>
		</pre>
	</div>


	<div class="bs-example">
		<table class="table">
			<tbody>
			<tr>
				<td>
					<h1>h1. Bootstrap heading
						<small>Secondary text</small>
					</h1>
				</td>
			</tr>
			<tr>
				<td>
					<h2>h2. Bootstrap heading
						<small>Secondary text</small>
					</h2>
				</td>
			</tr>
			<tr>
				<td>
					<h3>h3. Bootstrap heading
						<small>Secondary text</small>
					</h3>
				</td>
			</tr>
			<tr>
				<td>
					<h4>h4. Bootstrap heading
						<small>Secondary text</small>
					</h4>
				</td>
			</tr>
			<tr>
				<td>
					<h5>h5. Bootstrap heading
						<small>Secondary text</small>
					</h5>
				</td>
			</tr>
			<tr>
				<td>
					<h6>h6. Bootstrap heading
						<small>Secondary text</small>
					</h6>
				</td>
			</tr>
			</tbody>
		</table>
	</div>
	<div class="highlight">
		<pre>
		</pre>
	</div>


	<div class="bs-example">
		<p>You can use the mark tag to
			<mark>highlight</mark>
			text.
		</p>
	</div>
	<div class="highlight">
		<pre>
		</pre>
	</div>


	<div class="bs-example">
		<p>
			<del>This line of text is meant to be treated as deleted text.</del>
		</p>
	</div>
	<div class="highlight">
		<pre>
		</pre>
	</div>

	<div class="bs-example">
		<p><s>This line of text is meant to be treated as no longer accurate.</s></p>
	</div>
	<div class="highlight">
		<pre>
		</pre>
	</div>

	<div class="bs-example">
		<p>
			<ins>This line of text is meant to be treated as an addition to the document.</ins>
		</p>
	</div>
	<div class="highlight">
		<pre>
		</pre>
	</div>


	<div class="bs-example">
		<p>
			<small>This line of text is meant to be treated as fine print.</small>
		</p>
	</div>
	<div class="highlight">
		<pre>
		</pre>
	</div>

	<div class="bs-example">
		<p>The following snippet of text is <strong>rendered as bold text</strong>.</p>
	</div>
	<div class="highlight">
		<pre>
		</pre>
	</div>

	<div class="bs-example">
		<p>The following snippet of text is <em>rendered as italicized text</em>.</p>
	</div>
	<div class="highlight">
		<pre>
		</pre>
	</div>

	<div class="bs-example">
		<blockquote>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
		</blockquote>
	</div>
	<div class="highlight">
		<pre>
		</pre>
	</div>

	<div style="overflow: hidden;" class="bs-example">
		<blockquote class="blockquote-reverse">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
			<footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
		</blockquote>
	</div>
	<div class="highlight">
		<pre>
		</pre>
	</div>

	<div class="bs-example">
		<ul>
			<li>Lorem ipsum dolor sit amet</li>
			<li>Consectetur adipiscing elit</li>
			<li>Integer molestie lorem at massa</li>
			<li>Facilisis in pretium nisl aliquet</li>
			<li>Nulla volutpat aliquam velit
				<ul>
					<li>Phasellus iaculis neque</li>
					<li>Purus sodales ultricies</li>
					<li>Vestibulum laoreet porttitor sem</li>
					<li>Ac tristique libero volutpat at</li>
				</ul>
			</li>
			<li>Faucibus porta lacus fringilla vel</li>
			<li>Aenean sit amet erat nunc</li>
			<li>Eget porttitor lorem</li>
		</ul>
	</div>
	<div class="highlight">
		<pre>
		</pre>
	</div>

	<div class="bs-example">
		<ol>
			<li>Lorem ipsum dolor sit amet</li>
			<li>Consectetur adipiscing elit</li>
			<li>Integer molestie lorem at massa</li>
			<li>Facilisis in pretium nisl aliquet</li>
			<li>Nulla volutpat aliquam velit</li>
			<li>Faucibus porta lacus fringilla vel</li>
			<li>Aenean sit amet erat nunc</li>
			<li>Eget porttitor lorem</li>
		</ol>
	</div>
	<div class="highlight">
		<pre>
		</pre>
	</div>

	<div class="bs-example">
		<dl>
			<dt>Description lists</dt>
			<dd>A description list is perfect for defining terms.</dd>
			<dt>Euismod</dt>
			<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
			<dd>Donec id elit non mi porta gravida at eget metus.</dd>
			<dt>Malesuada porta</dt>
			<dd>Etiam porta sem malesuada magna mollis euismod.</dd>
		</dl>
	</div>
	<div class="highlight">
		<pre>
		</pre>
	</div>


	<div class="bs-example">
		<dl class="dl-horizontal">
			<dt>Description lists</dt>
			<dd>A description list is perfect for defining terms.</dd>
			<dt>Euismod</dt>
			<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
			<dd>Donec id elit non mi porta gravida at eget metus.</dd>
			<dt>Malesuada porta</dt>
			<dd>Etiam porta sem malesuada magna mollis euismod.</dd>
			<dt>Felis euismod semper eget lacinia</dt>
			<dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
		</dl>
	</div>
	<div class="highlight">
		<pre>
		</pre>
	</div>


	<div class="bs-example">
		For example, <code>&lt;section&gt;</code> should be wrapped as inline.
	</div>
	<div class="highlight">
		<pre>
		</pre>
	</div>


	<div class="bs-example">
		<pre>&lt;p&gt;Sample text here...&lt;/p&gt;</pre>
	</div>
	<div class="highlight">
		<pre>
		</pre>
	</div>

	<div class="bs-example">
		To switch directories, type <kbd>cd</kbd> followed by the name of the directory.<br>
		To edit settings, press <kbd><kbd>ctrl</kbd> + <kbd>,</kbd></kbd>
	</div>
	<div class="highlight">
		<pre>
		</pre>
	</div>

	<div class="bs-example">
		<p><samp>This text is meant to be treated as sample output from a computer program.</samp></p>
	</div>
	<div class="highlight">
		<pre>
		</pre>
	</div>

	<div class="bs-example">
		<p><var>y</var> = <var>m</var><var>x</var> + <var>b</var></p>
	</div>
	<div class="highlight">
		<pre>
		</pre>
	</div>

</div>
