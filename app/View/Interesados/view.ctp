<style>
* {
    font-size: 13px;
    font-family: "Times new Roman";
}
</style>
<div class="row-fluid">
    <div class="span7">
         <table class="table-bordered" cellpadding="0" cellspacing="0" style="max-width: 100mm;">
             <th colspan="2"><h5>Datos del participante #<?php echo $interesado['Interesado']['id_interesado']; ?></h5></th>
             <tr>
                <td>Nombre</td>
                <td>
                    <b><?php echo h($interesado['Interesado']['nombre']); ?></b>
                    &nbsp;
                </td>
             <tr>
            </tr>
                <td>Apellido</td>
                <td>
                    <b><?php echo h($interesado['Interesado']['apellido']); ?></b>
                    &nbsp;
                </td>
             <tr>
            </tr>
                <td>Telefono</td>
                <td>
                    <b><?php echo h($interesado['Interesado']['telefono']); ?></b>
                    &nbsp;
                </td>
             <tr>
            </tr>
                <td>Celular</td>
                <td>
                    <b><?php echo h($interesado['Interesado']['celular']); ?></b>
                    &nbsp;
                </td>
             <tr>
            </tr>
                <td>Em@il</td>
                <td>
                    <b><?php echo h($interesado['Interesado']['email']); ?></b>
                    &nbsp;
                </td>
             <tr>
            </tr>
                <td>Dirección</td>
                <td>
                    <b><?php echo h($interesado['Interesado']['direccion']); ?></b>
                    &nbsp;
                </td>
             <tr>
            </tr>
                <td>Fecha de Nacimiento</td>
                <td>
                    <b><?php echo date( 'd/m/Y', strtotime($interesado['Interesado']['fecha_nacimiento']) ); ?></b>
                    &nbsp;
                </td>
             <tr>
             <tr><td colspan="2"><center><small><i>"Se le acercó mucha gente...que traía consigo muchos enfermos. Los pusieron a los pies de Jesús y los sanó." <br />Mateo 15:30</i></small></center></td></tr>
             <tr><td colspan="2"><center><small>ExpoSalud Santa Fe - 2014</small></center></td></tr>
            </table>
        </div>

    </div>
</div>
