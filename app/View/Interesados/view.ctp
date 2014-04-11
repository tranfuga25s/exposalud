<div class="row-fluid">
    <div class="span7">
         <table class="table table-bordered">
             <th colspan="2"><h2>Datos del interesado #<?php echo $interesado['Interesado']['id_interesado']; ?></h2></th>
             <tr>
                <td>Nombre</td>
                <td>
                    <?php echo h($interesado['Interesado']['nombre']); ?>
                    &nbsp;
                </td>
             <tr>
            </tr>
                <td>Apellido</td>
                <td>
                    <?php echo h($interesado['Interesado']['apellido']); ?>
                    &nbsp;
                </td>
             <tr>
            </tr>
                <td>Telefono</td>
                <td>
                    <?php echo h($interesado['Interesado']['telefono']); ?>
                    &nbsp;
                </td>
             <tr>
            </tr>
                <td>Celular</td>
                <td>
                    <?php echo h($interesado['Interesado']['celular']); ?>
                    &nbsp;
                </td>
             <tr>
            </tr>
                <td>Em@il</td>
                <td>
                    <?php echo h($interesado['Interesado']['email']); ?>
                    &nbsp;
                </td>
             <tr>
            </tr>
                <td>Dirección</td>
                <td><atdress>
                    <?php echo h($interesado['Interesado']['direccion']); ?>
                    &nbsp;
                    </atdress>
                </td>
             <tr>
            </tr>
                <td>Fecha de Nacimiento</td>
                <td>
                    <?php echo h($interesado['Interesado']['fecha_nacimiento']); ?>
                    &nbsp;
                </td>
             <tr>
            <!-- </tr>
                <td>¿Tiene esperanza en Dios?</td>
                <td>
                    <?php if($interesado['Interesado']['esperanza']) {
                        echo $this->Html->tag( 'span', 'Sí', array( 'class' => 'badge badge-success' ) );
                    } else {
                        echo $this->Html->tag( 'span', 'No', array( 'class' => 'badge' ) );
                    } ?>
                    &nbsp;
                </td>
             <tr>
            </tr>
                <td>¿Desea estudiar la biblia?</td>
                <td>
                    <?php if($interesado['Interesado']['biblia']) {
                        echo $this->Html->tag( 'span', 'Sí', array( 'class' => 'badge badge-success' ) );
                    } else {
                        echo $this->Html->tag( 'span', 'No', array( 'class' => 'badge' ) );
                    } ?>
                    &nbsp;
                </td>
             <tr>
            </tr>
                <td>¿Desea recibir información sobre distintos cursos de salud?</td>
                <td>
                    <?php if($interesado['Interesado']['informacion']) {
                        echo $this->Html->tag( 'span', 'Sí', array( 'class' => 'badge badge-success' ) );
                    } else {
                        echo $this->Html->tag( 'span', 'No', array( 'class' => 'badge' ) );
                    } ?>
                    &nbsp;
                </td>
             <tr>
            </tr>
                <td>¿Desea ser visitado?</td>
                <td>
                    <?php if($interesado['Interesado']['visitado']) {
                        echo $this->Html->tag( 'span', 'Sí', array( 'class' => 'badge badge-success' ) );
                    } else {
                        echo $this->Html->tag( 'span', 'No', array( 'class' => 'badge' ) );
                    } ?>
                    &nbsp;
                </td>
             <tr> -->
             <tr><td colspan="2"><small><center>ExpoSalud Santa Fe 2014</center></small></td></tr>
            </table>
        </div>

    </div>
</div>
