<?php
/*
 * @package mixpro
 * make it 14-12-1018
 * this template displaying header area
 * */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes()?>">

<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name')?></title>
    <?php wp_head()?>
</head>
<body <?php body_class()?>>

<!-- this section for top banner -->
<section id="banner" role="banner" class="scrollspy">
    <header>
        <nav class="container">
            <a href="<?php echo esc_url(home_url())?>" class="brand-logo">Parsonal</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="<?php echo esc_url(home_url())?>">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#experience">My Skil</a></li>
                <li><a href="#wedo">We Do</a></li>
            </ul>
        </nav>
    </header>
    <!-- this is top radius -->
    <div class="top-radius"></div>
    <div class="right-radius"></div>
    <!-- this is middle content -->
    <div class="content">
        <div class="left-content">
            <h1 class="title"><?php echo esc_html(cs_get_option('header_title'))?></h1>
            <p><?php echo esc_html(cs_get_option('header_info'))?></p>
            <a href="#" class="btns">Get Start</a>
        </div>
        <div class="right-content">
            <img src="<?php echo esc_url(wp_get_attachment_image_src(cs_get_option('header_img'), 'full')[0])?>" alt="banner">
        </div>
    </div>
    <div class="go-down"><i class="fa fa-arrow-down" aria-label="hidden"></i></div>
</section>