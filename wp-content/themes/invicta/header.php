<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <? wp_head(); ?>
</head>

<body <? body_class(); ?>>

    <!-- <div id="preloader">
        <div id="loader">
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div> -->

    <header class="header">
        <div class="header-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-contact__content">
                            <a href="tel:1145911709" class="header-contact__item" target="_blank" rel="noopener">
                                <i class="header-contact__icon icon fas fa-phone"></i>
                                <span>(11) 0000-0000</span>
                            </a>
                            <a href="mailto:comercial@magnustrafo.com" class="header-contact__item" target="_blank"
                                rel="noopener">
                                <i class="header-contact__icon icon fas fa-envelope"></i>
                                <span>comercial@magnustrafo.com</span>
                            </a>
                            <div class="header-contact__social social">
                                <a href="" rel="noopener" target="_blank"
                                    class="social__item" title="Facebook">
                                    <i class="social__icon icon fab fa-facebook-f"></i>
                                </a>
                                <a href="" rel="noopener" target="_blank"
                                    class="social__item" title="Instagram">
                                    <i class="social__icon icon fab fa-instagram"></i>
                                </a>
                                <a href="" rel="noopener" target="_blank"
                                    class="social__item" title="LinkedIn">
                                    <i class="social__icon icon fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-main">
                    <div class="col-lg-3">
                        <div class="header-main__logo">
                            <!-- <img src="<? bloginfo('template_url') ?>/assets/images/logo.png" alt=""
                                class="header-main__logo-bg"> -->
                            <div class="header-nav__btn">
                                <div class="header-nav__icon">
                                    <div class="header-nav__icon-bar header-nav__icon-bar--1"></div>
                                    <div class="header-nav__icon-bar header-nav__icon-bar--2"></div>
                                    <div class="header-nav__icon-bar header-nav__icon-bar--3"></div>
                                </div>
                                <span>Menu</span>
                            </div>
                        </div>
                    </div>
                     <div class="row">
                         <div class="logo-topo">
                             <a href="<? bloginfo('url'); ?>" title="Invicta">
                               <img src="<? bloginfo('template_url') ?>/assets/images/logo.png" alt="Invicta">
                             </a>
                         </div>    
                     </div>

                     <div class="row nav_menu_principal">
                    <div class="container">
                    <div class="col-lg-12">
                        <!-- <ul class="header-nav__list">
                                <li class="header-nav__item">
                                    <a href="#" class="header-nav__link">Home</a>
                                </li>
                                <li class="header-nav__item">
                                    <a href="#" class="header-nav__link">Empresa</a>
                                </li>
                                <li class="header-nav__item">
                                    <a href="#" class="header-nav__link">Produtos</a>
                                </li>
                                <li class="header-nav__item">
                                    <a href="#" class="header-nav__link">Serviços</a>
                                </li>
                                <li class="header-nav__item">
                                    <a href="#" class="header-nav__link">Portfólio</a>
                                </li>
                                <li class="header-nav__item">
                                    <a href="#" class="header-nav__link">Representante</a>
                                </li>
                                <li class="header-nav__item">
                                    <a href="#" class="header-nav__link">Contato</a>
                                </li>
                                <li class="header-nav__item">
                                    <a href="#" class="header-nav__link">Orçamento</a>
                                </li>
                            </ul> -->
                        <? wp_nav_menu(
                            array(
                                'theme_location' => 'my_main_menu',
                                'container' => 'nav',
                                'container_class' => 'header-nav',
                                'menu_class' => 'header-nav__list'
                            )
                        );
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="header-placeholder"></div>
    <a href="" class="fixed-whatsapp" target="_blank" rel="noopener" title="WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>
    <main>