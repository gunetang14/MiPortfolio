<h3 class="titulo__principal">Formulario de Contacto</h3>

<div class="contacto">
    <div class="btn contenedor">
        <a class="btn__regresar" href="/">
            <picture class="btn__centrado"> 
                <source srcset="build/img/logos/back.webp" type="image/webp">
                <source srcset="build/img/logos/back.png" type="image/png">
                <img class="btn__logo" 
                    loading="lazy" 
                    src="build/img/logos/back.jpg" 
                    alt="Foto Perfil">
            </picture>
        </a>
    </div>
    <?php  
        require_once __DIR__ . '/alertas.php';
    ?>
    
    <form class="formulario" action="" method="POST" />
        <div class="formulario__campo">
            <label class="formulario__label">Nombre</label>
            <input class="formulario__input" type="text" name="nombre" placeholder=" Tu Nombre" value="<?php echo $datos['nombre']; ?>">
        </div>
        <div class="formulario__campo">
            <label class="formulario__label">Apellido</label>
            <input class="formulario__input" type="text" name="apellido" placeholder=" Tu Apellido" value="<?php echo $datos['apellido']; ?>">
        </div>
        <div class="formulario__campo">
            <label class="formulario__label">Correo</label>
            <input class="formulario__input" type="email" name="email" placeholder=" Tu Correo Electrónico" value="<?php echo $datos['email']; ?>">
        </div>
        <div class="formulario__campo">
            <label class="formulario__label">Mensaje</label>
            <textarea class="formulario__mensaje" name="mensaje"><?php echo $datos['mensaje']; ?></textarea>
        </div>
        <div class="formulario__campo--boton">
            <button class="formulario__submit" type="submit">Enviar</button>    
        </div>
    </form>
</div>