<style>
* {
    font-size: 11px;
}
</style>
<div class="row-fluid">
    <div class="span7">
         <table class="table-bordered" cellpadding="0" cellspacing="0" style="max-width: 100mm;">
             <th colspan="2"><h5>Datos del interesado #<?php echo $interesado['Interesado']['id_interesado']; ?></h5></th>
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
                    <?php echo date( 'd/m/Y', strtotime($interesado['Interesado']['fecha_nacimiento']) ); ?>
                    &nbsp;
                </td>
             <tr>
            </table>
        </div>

    </div>
</div>
