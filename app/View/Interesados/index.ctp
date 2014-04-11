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
			<th><?php echo $this->Paginator->sort('esperanza'); ?></th>
			<th><?php echo $this->Paginator->sort('biblia'); ?></th>
			<th><?php echo $this->Paginator->sort('informacion'); ?></th>
			<th><?php echo $this->Paginator->sort('visitado'); ?></th>
			<th class="actions">Accion</th>
	</tr>
	<?php foreach ($interesados as $interesado): ?>
	<tr>
		<td><?php echo h($interesado['Interesado']['apellido']); ?>, <?php echo h($interesado['Interesado']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($interesado['Interesado']['telefono']); ?>&nbsp;<br/>
		    <?php echo h($interesado['Interesado']['celular']); ?>&nbsp;<br/>
		    <?php echo h($interesado['Interesado']['email']); ?>&nbsp;</td>
		<td><?php echo h($interesado['Interesado']['direccion']); ?>&nbsp;</td>
		<td><?php echo date( 'd/m/Y', strtotime( $interesado['Interesado']['fecha_nacimiento']) ); ?>&nbsp;</td>
		<td><?php if( $interesado['Interesado']['esperanza']) {
		    echo $this->Html->tag( 'span', 'Sí', array( 'class' => 'badge badge-success' ) );
		} else {
		    echo $this->Html->tag( 'span', 'No', array( 'class' => 'badge' ) );
		} ?>&nbsp;</td>
		<td><?php if($interesado['Interesado']['biblia']) {
            echo $this->Html->tag( 'span', 'Sí', array( 'class' => 'badge badge-success' ) );
        } else {
            echo $this->Html->tag( 'span', 'No', array( 'class' => 'badge' ) );
        } ?>&nbsp;</td>
		<td><?php if($interesado['Interesado']['informacion']) {
            echo $this->Html->tag( 'span', 'Sí', array( 'class' => 'badge badge-success' ) );
        } else {
            echo $this->Html->tag( 'span', 'No', array( 'class' => 'badge' ) );
        } ?>&nbsp;</td>
		<td><?php if($interesado['Interesado']['visitado']) {
            echo $this->Html->tag( 'span', 'Sí', array( 'class' => 'badge badge-success' ) );
        } else {
            echo $this->Html->tag( 'span', 'No', array( 'class' => 'badge' ) );
        } ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link( 'Ver', array('action' => 'view', $interesado['Interesado']['id_interesado'])); ?>
			<?php echo $this->Html->link( 'Editar', array('action' => 'edit', $interesado['Interesado']['id_interesado'])); ?>
			<?php echo $this->Form->postLink( 'Eliminar', array('action' => 'delete', $interesado['Interesado']['id_interesado']), null, __('Are you sure you want to delete # %s?', $interesado['Interesado']['id_interesado'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
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
