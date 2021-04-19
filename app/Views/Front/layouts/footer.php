<footer id="footer" class="footer">
    <div class="container__fluid footer__container container--sm">
        <div class="footer__conexion">
            <?php if (isset($__isFooterShow)) { ?>
                <div class="footer__left w-30">
                    <a role="button" href="<?= site_url('solicitar-informacion') ?>" class="btn btn--cielo btn__info">¡Solicita Información!</a>
                </div>
            <?php } ?>
            <div class="footer__center w-100">
                <p class="footer__center--p">
                    <span style="display: block !important;">Todos los derechos reservados <?= date('Y') ?> ©</span>
                    <span style="display: block !important;"><b>Universidad Colegio Mayor de Cundinamarca</b></span>
                    <span style="display: block !important;">Vigilada Mineducación</span>
                </p>
            </div>
        </div>
        <div class="footer__right">
            <div class="footer__right--one">
                <p class="footer__right--p">
                    <span><a ref="/"><b>www.unicolmayor.edu.co</b></a></span>
                    <br />
                    <span class="email">sietic@unicolmayor.edu.co</span>
                    <br />
                    <span>(+57 1) 241 8800 Ext. 244</span>
                </p>
            </div>
            <div class="footer__right--two">
                <p class="footer__right--p">
                    <span class="footer__redes"><b>Nuestro canal</b></span>
                </p>
                <p class="footer__right--p">
                    <a href="https://www.youtube.com/user/sietic1" target="_blank"><i class="fab fa-youtube footer__icon"></i></a>
                    <?php if (isset($__isEmailShow)) { ?>
                        <a href="#" target="_blank"><i class="fas fa-envelope footer__icon"></i></a>
                    <?php } ?>
                </p>
            </div>
        </div>
    </div>
</footer>

<script src="https://kit.fontawesome.com/41b4e68409.js" crossorigin="anonymous"></script>
<script src="assets/js/jquery.slim.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/service-worker.js"></script>
<script>
    const webInspector = document.querySelector('.__web-inspector-hide-shortcut__');
    webInspector.style.display = 'none !important';

    if ('serviceWorker' in navigator) {
        window.addEventListener('load', () => {
            navigator.serviceWorker.register('<?= base_url("assets/service-worker.js") ?>');
        });
    }
</script>