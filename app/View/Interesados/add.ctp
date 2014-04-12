<div class="interesados form">
<?php echo $this->Form->create('Interesado'); ?>
	<fieldset>
		<legend>Agregar nuevo interesado</legend>
	<?php
		echo $this->Form->input('nombre', array( 'type' => 'text', 'class' => 'input-xxlarge' ) );
		echo $this->Form->input('apellido', array( 'type' => 'text', 'class' => 'input-xxlarge' ) );
		echo $this->Form->input('telefono', array( 'type' => 'text', 'class' => 'input-xxlarge' ) );
		echo $this->Form->input('celular', array( 'type' => 'text', 'class' => 'input-xxlarge' ) );
		echo $this->Form->input('email', array( 'type' => 'text', 'class' => 'input-xxlarge' ) );
		echo $this->Form->input('direccion');
		echo $this->Form->input('fecha_nacimiento', array( 'dateFormat' => 'DMY', 'minYear' => 1700, 'maxYear' => 2014 ));
		echo $this->Form->input('curso_biblico', array( 'label' => '¿Desea recibir cursos bíblicos por un instructor en forma grupal?'));
		echo $this->Form->input('biblia', array( 'label' => '¿Quisiera recibir una biblia de regalo?'));
        ?>
        <label><b>¿Desea recibir invitaciones para cursos para llevar una vida sana y saludable?</b></label>
            <?php
            echo $this->Form->input('stress', array( 'label' => ' Stress' ) );
            echo $this->Form->input('psicologia', array( 'label' => ' Psicología' ) );
            echo $this->Form->input('fumar', array( 'label' => ' Dejar de Fumar' ) );
            echo $this->Form->input('cocina', array( 'label' => ' Cocina saludable' ) );
            echo $this->Form->input('familiar', array( 'label' => ' Armonia y vida familiar' ) );
            ?>
	</fieldset>
<?php echo $this->Form->end( "Guardar" ); ?>
</div>
<div class="actions">
	<h3>Acciones</h3>
	<ul>
		<li><?php echo $this->Html->link( 'Lista de Interesados', array('action' => 'index')); ?></li>
	</ul>
</div>
