<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kompasinteraktif
 */

?>


<?php wp_footer(); ?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <p class="company">&copy; PT Kompas Media Nusantara</p>
                <nav>
                    <ul class="list-unstyled list-inline">
                        <li>Organisasi</li>
                        <li>Tanya Jawab</li>
                        <li>Hubungi Kami</li>
                        <li>Sidik Gangguan</li>
                        <li>Pedoman Media Siber</li>
                        <li>Syarat & Ketentuan</li>
                    </ul>
                </nav>
            </div>
            <div class="col-sm-3">
                <nav class="pull-right">
                    <ul class="list-unstyled list-inline">
                        <li>Karier</li>
                        <li>Iklan</li>
                        <li>Berlangganan</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php  bloginfo('template_directory')?>/assets/js/jquery-3.3.1.slim.min.js"></script>
<script src="<?php  bloginfo('template_directory')?>/assets/js/bootstrap.min.js"></script>
<script src="<?php  bloginfo('template_directory')?>/assets/js/main.js"></script>

</body>
</html>
