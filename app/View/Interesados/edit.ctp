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
        ?>
        <label><b>¿Desea recibir invitaciones para cursos para llevar una vida sana y saludable?</b></label>
        <?php
        echo $this->Form->input('stress'    , array( 'label' => ' Stress'                  ) );
        echo $this->Form->input('psicologia', array( 'label' => ' Psicología'              ) );
        echo $this->Form->input('fumar'     , array( 'label' => ' Dejar de Fumar'          ) );
        echo $this->Form->input('cocina'    , array( 'label' => ' Cocina saludable'        ) );
        echo $this->Form->input('familiar'  , array( 'label' => ' Armonia y vida familiar' ) );
        ?>
        <label><b>¿Desea recibir cursos bíblicos por un instructor?</b></label>
        <div class="col-sm-8">
        <?php
        echo $this->Form->input('curso_biblico_individual', array( 'label' => ' Individual', 'div' => false ));
        echo $this->Form->input('curso_biblico_grupal', array( 'label' => ' Grupal', 'div' => false ));
        ?>
        </div>
        <?php
        echo $this->Form->input('biblia', array( 'label' => '¿Quisiera recibir una biblia de regalo?'));
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
