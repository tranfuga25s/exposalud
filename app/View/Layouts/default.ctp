<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Exposalud Santa Fe 2014 : <?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

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
					$this->Html->image('powered_by_cake_logo_25.png', array( 'alt' => "Basado en CakePHP 2.4.7", 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
                echo $this->Html->link(
                    $this->Html->image('gplv3-127x51.png', array( 'alt' => "Licenciado bajo GPLv3", 'border' => '0', 'style' => 'height: 50px;' )),
                    'http://fsfe.org/index.es.html',
                    array('target' => '_blank', 'escape' => false)
                );
                echo $this->Html->link(
                    $this->Html->image('powered-by-mysql-167x86.png', array( 'alt' => "Utilizando tecnologías MySQL", 'border' => '0', 'style' => 'height: 50px;' )),
                    'http://www.mysql.com',
                    array('target' => '_blank', 'escape' => false)
                );
                echo $this->Html->link(
                    $this->Html->image('linux-inside.jpg', array( 'alt' => "LInux", 'border' => '0', 'style' => 'height: 50px;' )),
                    'http://www.linux.org',
                    array('target' => '_blank', 'escape' => false)
                );
			?>
		</div>
	</div>
</body>
</html>
