<?php
/*
Template Name: Главная
*/
?>
<?php get_header(); ?>
<main class="main">
    <?php if (get_field('presentation_img') || get_field('presentation_title') || have_rows('presentation_repeater')) { ?>
        <section class="presentation">
            <div class="container">
                <div class="presentation-flexbox">
                    <?php if (get_field('presentation_title') || have_rows('presentation_repeater')) { ?>
                        <div class="presentation-info">
                            <?php if ($value = get_field('presentation_title')) { ?>
                                <h1 class="presentation-info__title"><?= $value; ?></h1>
                            <?php } ?>
                            <?php if (have_rows('presentation_repeater')) { ?>
                                <ul class="presentation-info__list" id="ulWithDots">
                                    <?php while (have_rows('presentation_repeater')) {
                                        the_row();
                                    ?>
                                        <li class="presentation-info__list-item"><?php the_sub_field('advantage'); ?></li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                            <a href="#" class="general-btn presentation-info__btn">Подробнее</a>
                        </div>
                        <?php if ($value = get_field('presentation_img')) { ?>
                            <div class="presention-img-wrap">
                                <img class="presention-img-wrap__item" src="<?= $value; ?>" alt="laptop">
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </section>
    <?php } ?>
    <?php if (get_field('pricing_title') || have_rows('pricing_repeater')) { ?>
        <section class="pricing">
            <div class="container">
                <?php if ($value = get_field('pricing_title')) { ?>
                    <h2 class="pricing__title"><?php echo $value; ?></h2>
                <?php } ?>
            </div>
            <div class="container container_slider">
                <?php if (have_rows('pricing_repeater')) { ?>
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <?php while (have_rows('pricing_repeater')) {
                                the_row();
                            ?>
                                <div class="swiper-slide">
                                    <div class="pricing-card">
                                        <?php if ($value = get_sub_field('title')) { ?>
                                            <h3 class="pricing-card__title"><?php echo $value; ?></h3>
                                        <?php } ?>
                                        <?php if ($value = get_sub_field('subtitle')) { ?>
                                            <div class="pricing-card__subtitle"><?php echo $value; ?></div>
                                        <?php } ?>
                                        <?php if ($value = get_sub_field('speed')) { ?>
                                            <div class="pricing-card__speed"><?php echo $value; ?></div>
                                        <?php } ?>
                                        <?php if ($value = get_sub_field('text')) { ?>
                                            <p class="pricing-card__text"><?php echo $value; ?></p>
                                        <?php } ?>
                                        <?php if ($value = get_sub_field('include')) { ?>
                                            <div class="pricing-card-inc-fb">
                                                <label class="checkbox-wrap">
                                                    <input class="checkbox-wrap__item" type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <div class="pricing-card-include"><?php echo $value; ?></div>
                                            </div>
                                        <?php } ?>
                                        <?php if (get_sub_field('price') && get_sub_field('period')) { ?>
                                            <div class="pricing-card__price"><?php the_sub_field('price'); ?><span class="pricing-card__period"><?php the_sub_field('period'); ?></span></div>
                                        <?php } ?>
                                        <?php if ($value = get_sub_field('note')) { ?>
                                            <p class="pricing-card__note"><?php echo $value; ?></p>
                                        <?php } ?>
                                        <a class="general-btn pricing-card__btn"></a>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>
    <?php } ?>
</main>
<?php get_footer(); ?>