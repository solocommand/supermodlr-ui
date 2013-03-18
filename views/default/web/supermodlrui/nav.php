<ul class="nav nav-list">
  	<li class="nav-header">supermodlr</li>
  	<li><a href="/supermodlrui/">Models</a></li>

<?php if (isset($model_name)) { ?>

	<li class="divider"></li>
	<li class="active"><a href="/supermodlrui/<?= $model_name; ?>"><?= ucfirst(str_replace('_',' ',$model_name));?></a></li>
<?php } ?>

</ul>