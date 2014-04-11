<div class="row-fluid">
    <div class="span9">
        <?php echo $this->Html->image( 'Exposalud-Crespo.jpg' ); ?>
    </div>
    <div class="span3">
        <ul class="nav nav-pills">
            <li><?php echo $this->Html->link( 'Agregar interesado', array( 'controller' => 'interesados', 'action' => 'add' ), array( 'class' => 'btn btn-info' ) ); ?></li>
            <li><?php echo $this->Html->link( '   Ver listado    ', array( 'controller' => 'interesados', 'action' => 'index' ), array( 'class' => 'btn' ) ); ?></li>
        </ul>
    </div>
</div>