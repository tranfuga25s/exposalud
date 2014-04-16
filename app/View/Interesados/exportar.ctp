<div>
    <h2>Lista de interesados</h2>
    <table cellpadding="0" cellspacing="0" class="table table-condensed table-hover table-bordered">
    <tr>
            <th>Apellido y nombre</th>
            <th>Telefono<br/>
                Celular<br/>
                Em@il</th>
            <th>Dirección</th>
            <th>Fecha Nac</th>
            <th>Curso Biblico</th>
            <th>Biblia Gratis</th>
            <th>Cursos</th>
    </tr>
    <?php foreach ($interesados as $interesado): ?>
    <tr>
        <td><?php echo h($interesado['Interesado']['apellido']); ?>, <?php echo h($interesado['Interesado']['nombre']); ?>&nbsp;</td>
        <td>
            <?php
            if( !empty( $interesado['Interesado']['telefono'] ) ) { echo $interesado['Interesado']['telefono']."<br />"; }
            if( !empty( $interesado['Interesado']['celular'] ) ) { echo h($interesado['Interesado']['celular'])."<br />"; }
            switch( $interesado['Interesado']['email'] ) {
                case "notiene@notiene.com":
                case "usuario@mail.com":
                case "sdfs@gmail.com":
                case "no@tiene.com":
                case "notiene@gmail.com":
                case "noposee@gmail.com":
                case "---------@gmail.com":
                case "notiene@mail.com":
                case "-@gmaiñl.com":
                case "-@gmail.com":
                {
                        break;
                }
                default:
                {
                    echo h( $interesado['Interesado']['email'] );
                    break;
                }
            }
            ?> &nbsp;
        </td>
        <td>
            <?php if( !empty( $interesado['Interesado']['direccion'] )
                   && $interesado['Interesado']['direccion'] != "-" ) {
                    echo h( $interesado['Interesado']['direccion'] );
            } ?>&nbsp;
        </td>
        <td>
            <?php if( date( 'd/m/Y', strtotime( $interesado['Interesado']['fecha_nacimiento'] ) ) == '12/04/2014' ) {
                echo "&nbsp;";
            } else {
                echo date( 'd/m/Y', strtotime( $interesado['Interesado']['fecha_nacimiento']) );
            }?>&nbsp;
        </td>
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
</div>
