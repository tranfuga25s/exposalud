<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Exposalud Santa Fe 2014 : <?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
        echo $this->Html->script( 'bootstrap.min' );
        echo $this->Html->script( 'jquery.min' );
        echo $this->Html->script( 'jquery-ui.min');
        echo $this->Html->css( 'bootstrap.min' );
        echo $this->Html->css( 'bootstrap-responsive.min' );
	?>
</head>
<body>
	<div id="container"><?php echo $this->fetch('content'); ?></div>
</body>
</html>
