<?php if (isset($data) && count($data) > 0): ?>
<table width="100%">
    <tr>
        <td>NOMBRE:</td>
        <td><?php echo isset($data['nombre']) ?  $data['nombre'] : '' ?></td>
    </tr>
    <tr>
        <td>EDAD:</td>
        <td><?php echo isset($data['edad']) ?  $data['edad'] : '' ?></td>
    </tr>
    <tr>
        <td>DIRECCION:</td>
        <td><?php echo isset($data['direccion']) ?  $data['direccion'] : '' ?></td>
    </tr>
    <tr>
        <td>CIUDAD:</td>
        <td><?php echo isset($data['ciudad']) ?  $data['ciudad'] : '' ?></td>
    </tr>
    <tr>
        <td>CELULAR:</td>
        <td><?php echo isset($data['telefono']) ?  $data['telefono'] : '' ?></td>
    </tr>
    <tr>
        <td>EDAD:</td>
        <td><?php echo isset($data['celular']) ?  $data['celular'] : '' ?></td>
    </tr>
    <tr>
        <td>INTERES:</td>
        <td><?php echo isset($data['interes']) ?  $data['interes'] : '' ?></td>
    </tr>
    <tr>
        <td>EMAIL:</td>
        <td><?php echo isset($data['email']) ?  $data['email'] : '' ?></td>
    </tr>
    <tr>
        <td>MENSAJE:</td>
        <td><?php echo isset($data['mensaje']) ?  $data['mensaje'] : '' ?></td>
    </tr>
</table>
<?php else: ?>
    :( ocurrio un error
<?php endif;?>
