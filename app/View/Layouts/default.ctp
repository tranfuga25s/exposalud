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
	<div id="container">
        <div class="navbar">
            <div class="navbar-inner">
                <a class="brand" href="#">ExpoSalud 2014 - Santa Fe - Argentina</a>
                <ul class="nav">
                    <li class="active"><?php echo $this->Html->link( 'Inicio', '/' ); ?></li>
                    <li><?php echo $this->Html->link( 'Interesados', array( 'controller' => 'interesados', 'action' => 'index' ) ); ?></li>
                    <li><?php echo $this->Html->link( 'Agregar interesados', array( 'controller' => 'interesados', 'action' => 'add' ) ); ?></li>
                </ul>
            </div>
        </div>
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array( 'alt' => "basado en CakePHP 2.4.7", 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
</body>
</html>
