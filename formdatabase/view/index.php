<?php
require_once("layouts/header.php");
?>
<a href="index.php?m=nuevo" class="btn">NUEVO</a>
<table class="container" border="1">
    <tr>
        <td>ID</td>
        <td>NOMBRE</td>
        <td>APELLIDO</td>
        <td>TELEFONO</td>
        <td>DIRECCION</td>
        <td>EMAIL</td>
        <td>USUARIO</td>
        <td>ACCIÓN</td>        
    </tr>
    <tbody>
        <?php
            if(!empty($dato)):
                foreach($dato as $key => $value)
                    foreach($value as $v):?>
                    <tr>
                        <td><?php echo $v['estudiante_id'] ?> </td>
                        <td><?php echo $v['nombre'] ?> </td>
                        <td><?php echo $v['apellido'] ?> </td>
                        <td><?php echo $v['telefono'] ?> </td>
                        <td><?php echo $v['direccion'] ?> </td>
                        <td><?php echo $v['email'] ?> </td>
                        <td><?php echo $v['usuario'] ?> </td>
                        <td>
                            <a class="btn" href="index.php?m=editar&id=<?php echo $v['estudiante_id']?>">EDITAR</a>
                            <a class="btn" href="index.php?m=eliminar&id=<?php echo $v['estudiante_id']?>" onclick="return confirm('ESTA SEGURO'); false">ELIMINAR</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">NO HAY REGISTROS</td>
                </tr>
            <?php endif ?>
    </tbody>
</table>
<?php
require_once("layouts/footer.php");