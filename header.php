<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo("charset"); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="<?php bloginfo("description"); ?>">
        <title>
            <?php if (is_front_page() && is_home()) {
                // Portada tradicional (entradas recientes)
                bloginfo("name");
                echo " - ";
                bloginfo("description");
            } elseif (is_front_page()) {
                // Página asignada como "Inicio"
                bloginfo("name");
                echo " - ";
                bloginfo("description");
            } else {
                wp_title("");
                if (wp_title("", false)) {
                    echo " - ";
                }
                bloginfo("name");
            } ?>
        </title>

        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo(
            "name"
        ); ?>" href="<?php bloginfo("rss2_url"); ?>" />
        <link
            rel="alternate"
            type="application/rss+xml"
            title="<?php bloginfo("name"); ?>"
            href="<?php bloginfo("rss2_url"); ?>"
        />
        <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="<?php echo esc_url(
                get_template_directory_uri()
            ); ?>/apple-touch-icon.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="32x32"
            href="<?php echo esc_url(
                get_template_directory_uri()
            ); ?>/favicon-32x32.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="<?php echo esc_url(
                get_template_directory_uri()
            ); ?>/favicon-16x16.png"
        />
        <link rel="manifest" href="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/site.webmanifest" />
        <link rel="mask-icon" href="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/safari-pinned-tab.svg" color="#5bbad5" />
        <meta name="msapplication-TileColor" content="#ffffff" />
        <meta name="theme-color" content="#ffffff" />

        <link rel="stylesheet" href="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/assets/css/styles.css" />

        <?php wp_head(); ?>
    </head>
    <body>
        <div id="backdrop"></div>
        <div class="menu">
            <a id="cerrar-menu" href="javascript:void(0)">
                <i class="fas fa-times"></i>
            </a>
            <div class="menu-contenido">
                <a class="anchor" id="btn-logo" href="<?php echo esc_url(
                    home_url()
                ); ?>">
                    <img
                        class="logo img-fluid"
                        src="<?php echo esc_url(
                            get_template_directory_uri()
                        ); ?>/assets/images/logo@2x.png"
                        alt="Mixen: Boosting Brands"
                    />
                </a>
                <nav role="navigation">
                    <ul id="navmenu" class="list-unstyled mb-0">
                        <li>
                            <a class="anchor" id="btn-nav-1" href="#">Home</a>
                        </li>
                        <li>
                            <a class="anchor" id="btn-nav-2" href="#"
                                >About Us</a
                            >
                        </li>
                        <li>
                            <a class="anchor" id="btn-nav-3" href="#"
                                >Services</a
                            >
                        </li>
                        <li>
                            <a class="anchor" id="btn-nav-4" href="#"
                                >Portfolio</a
                            >
                        </li>
                        <li>
                            <a class="anchor" id="btn-nav-5" href="#"
                                >Testimonials</a
                            >
                        </li>
                    </ul>
                </nav>
                <a
                    id="btn-contacto"
                    class="anchor btn btn-primary"
                    href="#contact-us"
                >
                    Talk to an expert
                </a>
                <div id="social">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a
                                href="https://www.instagram.com/mixenmx/"
                                target="_blank"
                            >
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a
                                href="https://www.facebook.com/MixenMx/"
                                target="_blank"
                            >
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a
                                href="https://www.tiktok.com/mixenmx/"
                                target="_blank"
                            >
                                <i class="fa-brands fa-tiktok"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a
                                href="https://www.youtube.com/mixenmx/"
                                target="_blank"
                            >
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- div id="contacto-menu">
                    <ul class="list-unstyled">
                        <li>
                            <i class="far fa-envelope"></i>
                            <a href="mailto:cmail@domain.com"
                                >mail@domain.com</a
                            >
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <a href="tel:+526141234567">(614) 123 4567</a>
                        </li>
                    </ul>
                </div -->
            </div>
        </div>

        <header id="navbar">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-lg-3 my-auto">
                        <a href="<?php echo esc_url(home_url()); ?>">
                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/logo@2x.png"
                                alt="Mixen: Boosting Brands"
                                class="logo img-fluid"
                                id="logo-navbar"
                            />
                        </a>
                    </div>
                    <div class="col-md-6 d-none d-lg-block my-auto text-center">
                        <nav>
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a href="#"> Home </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"> About Us </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"> Services </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"> Portfolio </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"> Testimonials </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-6 col-lg-3 my-auto text-end">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item d-none d-lg-block">
                                <a class="btn btn-primary" href="#contact-us">
                                    Talk to an expert
                                </a>
                            </li>
                        </ul>
                        <a
                            id="mburger"
                            class="d-lg-none"
                            href="javascript:void(0)"
                        >
                            <i class="fas fa-bars"></i>
                        </a>
                    </div>
                </div>
            </div>
        </header>
