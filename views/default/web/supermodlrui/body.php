<?php 
	
	$controller->view('header');

	$controller->metatags('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
	$controller->css('/modules/supermodlr-ui/lib/bootstrap/css/bootstrap.min.css');
	
	// Hack...prevent js from being included twice by moving out of controller.php view to body template.
	// @todo: Do this better. This technically works since body is only called for the initial load.

		$controller->js('supermodlr/lib/angularjs/angular.js','headertags'); 
		$controller->js('supermodlr/lib/angularjs/angular-resource.js','headertags');  
		$controller->js('supermodlr/lib/angularui/build/angular-ui.js','headertags');  

		$controller->js('supermodlr/lib/crypto-js/md5.js','headertags');   

		$controller->js('supermodlr/lib/jqueryui/js/jquery-1.8.2.js');
		$controller->js('supermodlr/lib/jqueryui/js/jquery-ui-1.9.2.custom.min.js');


		$controller->css('/modules/supermodlr/lib/jqueryui/css/base/minified/jquery-ui.min.css');   

		$controller->css('/modules/supermodlr/lib/jqueryui/css/ui-lightness/jquery.ui.theme.css');

		$js = file_get_contents(MODPATH.'/supermodlr/views/supermodlr/default/web/js/controller.js');
		$controller->js($js, 'headerinline');

?>

<style type="text/css">
	.error {
		color: darkred;
	}
</style>

<div class='main'>
	<div class="container-fluid">
		<div class="row-fluid">

			<?php /* $controller->block(array('uri'=> '/nav', 'referer'=> $controller->request->uri())); */ ?>

			<div class="span2">
				<?php $controller->view('nav'); ?>
			</div>

			<div class="span10">

				<div ng-app="supermodlr">

					<?= $controller->content(); ?>

				</div>

			</div>

		</div>

		<div id="footer">
			<div class="container">
				<p class="muted credit"><?php $controller->view('footer'); ?></p>
			</div>
    	</div>

	</div>
</div>