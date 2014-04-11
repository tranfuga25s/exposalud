<div class="interesados form">
<?php echo $this->Form->create('Interesado'); ?>
	<fieldset>
		<legend>Editar Interesado</legend>
	<?php
		echo $this->Form->input('id_interesado');
        echo $this->Form->input('nombre', array( 'type' => 'text', 'class' => 'input-xxlarge' ) );
        echo $this->Form->input('apellido', array( 'type' => 'text', 'class' => 'input-xxlarge' ) );
        echo $this->Form->input('telefono', array( 'type' => 'text', 'class' => 'input-xxlarge' ) );
        echo $this->Form->input('celular', array( 'type' => 'text', 'class' => 'input-xxlarge' ) );
        echo $this->Form->input('email', array( 'type' => 'text', 'class' => 'input-xxlarge' ) );
        echo $this->Form->input('direccion');
        echo $this->Form->input('fecha_nacimiento', array( 'dateFormat' => 'DMY', 'minYear' => 1700, 'maxYear' => 2014 ));
        echo $this->Form->input('esperanza', array( 'label' => '¿Tiene esperanza en Dios?'));
        echo $this->Form->input('biblia', array( 'label' => '¿Desea estudiar la biblia?'));
        echo $this->Form->input('informacion', array( 'label' => '¿Desea recibir información sobre distintos cursos de salud?'));
        echo $this->Form->input('visitado', array( 'label' => '¿Desea ser visitado?'));
	?>
	</fieldset>
<?php echo $this->Form->end("Actualizar Datos"); ?>
</div>
<div class="actions">
	<h3>Acciones</h3>
	<ul>
		<li><?php echo $this->Form->postLink( 'Eliminar', array('action' => 'delete', $this->Form->value('Interesado.id_interesado')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Interesado.id_interesado'))); ?></li>
		<li><?php echo $this->Html->link( 'Lista de Interesados', array('action' => 'index')); ?></li>
	</ul>
</div>
