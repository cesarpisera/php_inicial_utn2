<?php include('./layout/header.php') ?>

<section class="integrantes">
    <h2>Integrantes de Giribone</h2>

    <div class="botonera_integrantes">
        <ul class="ul_integrantes">
            <li><a href="integrantes.php?nombre=bp">Negra</a></li>
            <li><a href="integrantes.php?nombre=cp">Catramado</a></li>
            <li><a href="integrantes.php?nombre=np">Nina</a></li>
            <li><a href="integrantes.php?nombre=pp">Principe</a></li>
            <li><a href="integrantes.php?nombre=tp">Torito</a></li>
            <li><a href="integrantes.php?nombre=vp">Vicky</a></li>
        </ul>
    </div>
</section>

<section>
<?php
        if (isset($_GET['nombre'])) {
            $integrante = $_GET['nombre'];

            switch ($integrante) {
                case "bp":
                    $nombre = "Negra";
                    $personalidad = "Malhumorada";
                    $img = "./img/black.jpg";
                    break;
                case "cp":
                    $nombre = "Catramado";
                    $personalidad = "Bruto";
                    $img = "./img/catramado.jpg";
                    break;
                case "np":
                    $nombre = "Nina";
                    $personalidad = "Antipática";
                    $img = "./img/nina.jpg";
                    break;
                case "pp":
                    $nombre = "Principe";
                    $personalidad = "Mimoso";
                    $img = "./img/principe.jpg";
                    break;
                case "tp":
                    $nombre = "Torito";
                    $personalidad = "Rencoroso";
                    $img = "./img/torito.jpg";
                    break;
                case "vp":
                    $nombre = "Vicky";
                    $personalidad = "Líder";
                    $img = "./img/vicky.jpg";
                    break;
            }
?>

    <div class="contenedor_integrantes">
            <h3><?php echo "Nombre: " . $nombre; ?></h3>
            <p><?php echo "Personalidad: " . $personalidad; ?></p>
            <div class="box_img">
                <img src=<?php echo $img; ?> alt=<?php echo $nombre; ?>>
            </div>
            <?php         } ?>
    </div>

</section>

<?php include('./layout/footer.php') ?>