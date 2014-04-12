<div>
	<h2>Lista de interesados</h2>
	<table cellpadding="0" cellspacing="0" class="table table-condensed table-hover table-bordered">
	<tr>
			<th><?php echo $this->Paginator->sort('nombre'); ?><br/>
			    <?php echo $this->Paginator->sort('apellido'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?><br/>
			    <?php echo $this->Paginator->sort('celular'); ?><br/>
			    <?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_nacimiento'); ?></th>
			<th><?php echo $this->Paginator->sort('curso_biblico','Curso Biblico'); ?></th>
			<th><?php echo $this->Paginator->sort('biblia', "Biblia Gratis"); ?></th>
			<th>Cursos</th>
			<th class="actions">Acciones</th>
	</tr>
	<?php foreach ($interesados as $interesado): ?>
	<tr>
		<td><?php echo h($interesado['Interesado']['apellido']); ?>, <?php echo h($interesado['Interesado']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($interesado['Interesado']['telefono']); ?>&nbsp;<br/>
		    <?php echo h($interesado['Interesado']['celular']); ?>&nbsp;<br/>
		    <?php echo h($interesado['Interesado']['email']); ?>&nbsp;</td>
		<td><?php echo h($interesado['Interesado']['direccion']); ?>&nbsp;</td>
		<td><?php echo date( 'd/m/Y', strtotime( $interesado['Interesado']['fecha_nacimiento']) ); ?>&nbsp;</td>
		<td><?php if( $interesado['Interesado']['curso_biblico_individual'] || $interesado['Interesado']['curso_biblico_grupal'] ) {
		    echo $this->Html->tag( 'span', 'Sí', array( 'class' => 'badge badge-success' ) );
            if( $interesado['Interesado']['curso_biblico_grupal'] ){
                echo $this->Html->tag( 'span', 'G', array( 'class' => 'badge badge-info' ) );
            } else {
                echo $this->Html->tag( 'span', 'I', array( 'class' => 'badge badge-inverse' ) );
            }
		} else {
		    echo $this->Html->tag( 'span', 'No', array( 'class' => 'badge' ) );
		} ?>&nbsp;</td>
		<td><?php if($interesado['Interesado']['biblia']) {
            echo $this->Html->tag( 'span', 'Sí', array( 'class' => 'badge badge-success' ) );
        } else {
            echo $this->Html->tag( 'span', 'No', array( 'class' => 'badge' ) );
        } ?>&nbsp;</td>
       <td><?php if( $interesado['Interesado']['stress']     ||
                     $interesado['Interesado']['psicologia'] ||
                     $interesado['Interesado']['fumar']      ||
                     $interesado['Interesado']['cocina']     ||
                     $interesado['Interesado']['familiar']      ) {
            echo $this->Html->tag( 'span', 'Sí', array( 'class' => 'badge badge-success' ) );
            if( $interesado['Interesado']['stress'] ){
                echo $this->Html->tag( 'span', 'S', array( 'class' => 'badge badge-success' ) );
            }
            if( $interesado['Interesado']['psicologia'] ) {
                echo $this->Html->tag( 'span', 'P', array( 'class' => 'badge badge-warning' ) );
            }
            if( $interesado['Interesado']['fumar'] ) {
                echo $this->Html->tag( 'span', 'F', array( 'class' => 'badge badge-inverse' ) );
            }
            if( $interesado['Interesado']['cocina'] ) {
                echo $this->Html->tag( 'span', 'C', array( 'class' => 'badge badge-important' ) );
            }
            if( $interesado['Interesado']['familiar'] ) {
                echo $this->Html->tag( 'span', 'VF', array( 'class' => 'badge badge-info' ) );
            }
        } else {
            echo $this->Html->tag( 'span', 'No', array( 'class' => 'badge' ) );
        } ?>&nbsp;</td>
		<td>
		    <div class="btn-group">
			<?php echo $this->Html->link( 'Ver', array('action' => 'view', $interesado['Interesado']['id_interesado']), array( 'class' => 'btn btn-small btn-info')); ?>
			<?php echo $this->Html->link( 'Editar', array('action' => 'edit', $interesado['Interesado']['id_interesado']), array( 'class' => 'btn btn-small btn-primary' )); ?>
			<?php echo $this->Form->postLink( 'Eliminar', array('action' => 'delete', $interesado['Interesado']['id_interesado']), array( 'class' => 'btn btn-small btn-danger'), __('Are you sure you want to delete # %s?', $interesado['Interesado']['id_interesado'])); ?>
            </div>
		</td>
	</tr>
<?php endforeach; ?>
</table>
<small><b>Referencias:</b>
    <?php echo $this->Html->tag( 'span', 'VF', array( 'class' => 'badge badge-info' ) ); ?>: Vida Familiar
    <?php echo $this->Html->tag( 'span', 'C', array( 'class' => 'badge badge-important' ) ); ?>: Cocina
    <?php echo $this->Html->tag( 'span', 'F', array( 'class' => 'badge badge-inverse' ) ); ?>: Dejar de Fumar
    <?php echo $this->Html->tag( 'span', 'P', array( 'class' => 'badge badge-warning' ) ); ?>: Psicología
    <?php echo $this->Html->tag( 'span', 'S', array( 'class' => 'badge badge-success' ) ); ?>: Salud  --
    <?php echo $this->Html->tag( 'span', 'I', array( 'class' => 'badge badge-inverse' ) ); ?>: Individual
    <?php echo $this->Html->tag( 'span', 'G', array( 'class' => 'badge badge-info' ) ); ?>: Grupal
</small>
<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
