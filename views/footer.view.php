<footer class='footer'>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <img src="<?=RUTA?>sprites/logo-footer.svg" alt="" class='img-fluid'>
            </div>
        </div>

        <div class="row row-blocks align-items-center justify-content-center">
            <div class="paragraph v3 cour col-md-3 col-11 text-center txt-dark-gray" >
                <?php echo $contacto['primer_parrafo']  ?>
            </div>

            <div class="paragraph v3 cour col-md-3 col-11 text-center txt-dark-gray" >
                <?php echo $contacto['segundo_parrafo']  ?>
            </div>

            <div class="paragraph v3 cour col-md-3 col-11 text-center txt-dark-gray" >
                <?php echo $contacto['tercer_parrafo']  ?>
            </div>
        </div>


        <div class="row aviso-de-privacidad justify-content-center">
            <a target='_blank' href="<?php echo $contacto['aviso_de_privacidad']['data']['full_url'] ?>"> Aviso de privacidad </a>
        </div>
    </div>
</footer>