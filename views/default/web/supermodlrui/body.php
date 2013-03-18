<?php $controller->view('header'); ?>

<?php $controller->metatags('<meta name="viewport" content="width=device-width, initial-scale=1.0">'); ?>
<?php $controller->css('/modules/supermodlr-ui/lib/bootstrap/css/bootstrap.min.css'); ?>

<div class='main'>
	<div class="container-fluid">
		<div class="row-fluid">

			<?php /* $controller->block(array('uri'=> '/nav', 'referer'=> $controller->request->uri())); */ ?>

			<div class="span2">
				<?php $controller->view('nav'); ?>
			</div>

			<div class="span10">
				<?php echo $controller->content(); ?>
			</div>

		</div>

		<div id="footer">
			<div class="container">
				<p class="muted credit"><?php $controller->view('footer'); ?></p>
			</div>
    	</div>

	</div>
</div>