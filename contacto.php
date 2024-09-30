<?php include('./layout/header.php') ?>

<section class="contacto">
    <h2>Contacto</h2>
    <div>
        <form action="enviar_consulta.php" method="post">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">

            <label for="email">Correo Electrónico</label>
            <input type="email" name="email">

            <label for="mensaje">Mensaje</label>
            <textarea name="mensaje" id="mensaje"></textarea>

            <input type="submit" class="btn_enviar" value="Enviar mensaje">
        </form>
    </div>

    <?php
    if(isset($_GET['ok'])){
        echo "<h3>Mensaje enviado con éxito</h3>";
    }
    ?>
</section>

<?php include('./layout/footer.php') ?>