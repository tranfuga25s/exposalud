<div class="row-fluid">
    <div class="span9">
        <?php echo $this->Html->image( 'Exposalud-Crespo.jpg', array( 'style' => 'height: 500px;' ) ); ?>
    </div>
    <div class="span3">
        <ul class="nav nav-tabs nav-stacked">
            <li><?php echo $this->Html->link( 'Agregar participante', array( 'controller' => 'interesados', 'action' => 'add' ), array( 'class' => 'btn btn-info' ) ); ?></li>
            <li><?php echo $this->Html->link( '   Ver listado    ', array( 'controller' => 'interesados', 'action' => 'index' ), array( 'class' => 'btn' ) ); ?></li>
        </ul>
    </div>
</div>