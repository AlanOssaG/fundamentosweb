<?php require_once("layouts/header.php"); ?>

<a href="index.php?m=nuevo" class="btn btn-new">Nuevos datos</a>


<br>

<table class="container" border="1">
    <tr>
        <td>ID</td>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Telefono</td>
        <td>Dirección</td>
        <td>Email</td>
        <td>Usuario</td>
        <td>Acción</td>        
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
                            <a class="btn" href="index.php?m=editar&id=<?php echo $v['estudiante_id']?>">Editar datos</a>
                            <a href="index.php?m=eliminar&id=<?php echo $v['estudiante_id']?>" class="btn btn-delete" onclick="return confirm('¿Está seguro que desea eliminar estos datos?');">Eliminar datos</a>
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

<?php require_once("layouts/footer.php"); ?>
