<footer id="footer" class="footer">
    <div class="container">
        <div class="footer-flexbox">
            <div class="footer-copyright">
                <?php if ($value = get_field('logo')) { ?>
                    <div class="logo">
                        <a href="<?php echo home_url(); ?>">
                            <img class="logo__img" src="<?= $value; ?>" alt="logo">
                        </a>
                    </div>
                    <div class="footer-copyright__text">© 2018–<?php echo date("Y"); ?> ООО «К-Телеком»</div>
                <?php } ?>
            </div>
            <?php if (have_rows('social_repeater', 'option')) { ?>
                <div class="social-flexbox">
                    <?php while (have_rows('social_repeater', 'option')) {
                        the_row();
                    ?>
                        <a href="<?php the_sub_field('link'); ?>" class="social-flexbox__item" target="_blank">
                            <img class="social-flexbox__item-img" src="<?php the_sub_field('img'); ?>" alt="social-net">
                        </a>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>