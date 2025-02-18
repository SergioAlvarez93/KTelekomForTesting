<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
    <title>ktelecomtesting</title>
</head>

<body>
    <div class="general-wrapper">
        <header class="header">
            <div class="container">
                <?php if ($value = get_field('logo')) { ?>
                    <div class="logo">
                        <a href="<?php echo home_url(); ?>">
                            <img class="logo__img" src="<?= $value; ?>" alt="logo">
                        </a>
                    </div>
                <?php } ?>
            </div>
        </header>