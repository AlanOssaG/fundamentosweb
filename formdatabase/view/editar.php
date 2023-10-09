<?php
require_once("layouts/header.php");
?>
<h1 class="text-center">EDITAR</h1>
<form action="" method="get">
    <?php
    foreach($dato as $key => $value):
        foreach($value as $v):
        ?>

<div class="input-group">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" value="<?php echo $v['nombre']; ?>">
</div>

<div class="input-group">
    <label for="apellido">Apellido:</label>
    <input type="text" name="apellido" id="apellido" value="<?php echo $v['apellido']; ?>">
</div>

<div class="input-group">
    <label for="direccion">Dirección:</label>
    <input type="text" name="direccion" id="direccion" value="<?php echo $v['direccion']; ?>">
</div>

<div class="input-group">
    <label for="telefono">Teléfono:</label>
    <input type="number" name="telefono" id="telefono" value="<?php echo $v['telefono']; ?>">
</div>

<div class="input-group">
    <label for="email">Correo:</label>
    <input type="email" name="email" id="email" value="<?php echo $v['email']; ?>">
</div>

<div class="input-group">
    <label for="usuario">Usuario:</label>
    <input type="text" name="usuario" id="usuario" value="<?php echo $v['usuario']; ?>">
</div>

<div class="input-group">
    <label for="password">Contraseña:</label>
    <input type="password" name="password" id="password" value="<?php echo $v['password']; ?>">
</div>

<div class="button-container">
    <button type="submit" name="m" value="guardar">GUARDAR</button>
</div>
<input type="hidden" value="<?php echo $v['estudiante_id'] ?>" name="id"> <br>
<input type="hidden" name="m" value="actualizar">
<div class="contact-info">

    <div class="info">
        <span><i class="fas fa-map-marker-alt"></i> Avenida 6N <br>No. 28N - 102. <br>Cali - Valle</span>
    </div>

    <div class="info">
        <span><i class="fas fa-phone"></i> +57 602 6652828</span>
    </div>

</div>
        <?php
        endforeach;
    endforeach;
    ?>
</form>

<?php
require_once("layouts/footer.php");
