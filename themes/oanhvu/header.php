<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <header id="masthead" class="site-header">
        <div class="container">
            <div class="header-content">
                <div class="site-branding">
                    <div class="logo-container">
                        <div class="buddhist-logo">
                            <div class="logo-circle">
                                <div class="logo-background">
                                    <div class="sky-gradient"></div>
                                    <div class="ground"></div>
                                    <div class="mountains"></div>
                                    <div class="sun"></div>
                                    
                                    <!-- Family -->
                                    <div class="family">
                                        <div class="father"></div>
                                        <div class="mother"></div>
                                        <div class="son"></div>
                                        <div class="daughter"></div>
                                    </div>
                                    
                                    <!-- Birds -->
                                    <div class="birds">
                                        <div class="bird bird-1"></div>
                                        <div class="bird bird-2"></div>
                                        <div class="bird bird-3"></div>
                                        <div class="bird bird-4"></div>
                                    </div>
                                    
                                    <!-- Bubbles -->
                                    <div class="bubbles">
                                        <div class="bubble bubble-1"></div>
                                        <div class="bubble bubble-2"></div>
                                        <div class="bubble bubble-3"></div>
                                        <div class="bubble bubble-4"></div>
                                    </div>
                                    
                                    <!-- Lotus Symbol -->
                                    <div class="lotus-symbol">
                                        <div class="lotus-circle">
                                            <div class="lotus-flower">🌸</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Text -->
                                <div class="logo-text">
                                    <div class="top-text">GIA ĐÌNH PHẬT TỬ</div>
                                    <div class="main-text">
                                        <span class="text-hieu">TRẠI HIẾU</span>
                                        <span class="text-muc">MỤC KIẾN LIÊN</span>
                                    </div>
                                    <div class="bottom-text">PL.2569-DL.2025</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="site-subtitle">
                            <h2>GĐPT VÂN QUẬT ĐÔNG</h2>
                        </div>
                    </div>
                </div>

                <nav id="site-navigation" class="main-navigation">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'fallback_cb'    => 'pressword_default_menu',
                    ));
                    ?>
                    
                    <!-- Language Switcher -->
                    <div class="language-switcher">
                        <div class="language-dropdown">
                            <button class="language-btn">
                                <i class="fas fa-globe"></i>
                                <span class="current-lang">VI</span>
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div class="language-menu">
                                <a href="#" class="language-option active" data-lang="vi">
                                    <span class="flag">🇻🇳</span>
                                    <span class="lang-name">Tiếng Việt</span>
                                </a>
                                <a href="#" class="language-option" data-lang="en">
                                    <span class="flag">🇺🇸</span>
                                    <span class="lang-name">English</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Mobile Menu Toggle -->
                    <button class="mobile-menu-toggle">
                        <div class="hamburger">
                            <div class="hamburger-line"></div>
                            <div class="hamburger-line"></div>
                            <div class="hamburger-line"></div>
                        </div>
                    </button>
                </nav>
            </div>
        </div>
    </header>

    <div id="content" class="site-content">
