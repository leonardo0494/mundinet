<?php $origemUrl = preg_replace('/\/|\d|.php$/', '', $_SERVER['PHP_SELF']); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundinet - Provedor de Internet</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
</head>

<body>

    <a href="https://api.whatsapp.com/send?phone=5588997526022&text=Ol%C3%A1!%20Gostaria%20de%20conhecer%20as%20ofertas%20da%20Mundinet"
        target="_blank" class="whatsapp-btn">
        <i class="fa-brands fa-whatsapp"></i>
    </a>
    
    <div class="topbar">
        <div class="container">
            <div class="location">
                <i class="fa-solid fa-location-dot red"></i>
                <div class="cities-select">
                    <div id="selected-city">
                        <input type="checkbox" id="city-options-toggle">
                        <div id="select-city-btn">
                            <span id="selected-value">São Benedito</span>
                            <i class="fa-solid fa-chevron-down"></i>
                            <i class="fa-solid fa-chevron-up"></i>
                        </div>
                    </div>
                    <ul class="cities">
                        <li class="city">
                            <input type="radio" data-label="close" />
                            <i class="fa-solid fa-xmark"></i>
                        </li>
                        <li class="city">
                            <input type="radio" data-label="São Benedito">
                            <span>São Benedito</span>
                        </li>
                        <li class="city">
                            <input type="radio" data-label="Ibiapina">
                            <span>Ibiapina</span>
                        </li>
                        <li class="city">
                            <input type="radio" data-label="Carnaubal">
                            <span>Carnaubal</span>
                        </li>
                        <li class="city">
                            <input type="radio" data-label="Ubajara">
                            <span>Ubajara</span>
                        </li>
                        <li class="city">
                            <input type="radio" data-label="Guaraciaba do Norte">
                            <span>Guaraciaba do Norte</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="whatsapp-contact">
                <i class="fa-brands fa-whatsapp"></i>
                <a href="https://api.whatsapp.com/send?phone=5588997526022&text=Ol%C3%A1!%20Gostaria%20de%20conhecer%20as%20ofertas%20da%20Mundinet"
                    target="_blank">Assine já</a>
            </div>
        </div>
    </div>
    
    <nav id="header-menu-mobile" class="closed">
        <div class="close">
            <span>MENU</span>
            <i class="fa-solid fa-xmark fa-lg" id="close-mobile-menu"></i>
        </div>
        <ul>
            <li>
                <a href="index.php">Página Inicial</a>
            </li>
            <li>
                <a href="https://api.whatsapp.com/send?phone=5588997526022&text=Ol%C3%A1!%20Gostaria%20de%20conhecer%20as%20ofertas%20da%20Mundinet"
                    target="_blank">Assine já</a>
            </li>
            <li>
                <div class="item-dropdown">
                    <input type="checkbox" id="subitem" />
                    <div class="sub-info">
                        <span>Central do cliente</span>
                        <i class="fa-solid fa-chevron-right fa-sm"></i>
                        <i class="fa-solid fa-chevron-down fa-sm"></i>
                    </div>
                </div>
                <div class="download-aplicativo">
                    <div class="content">Faça o download agora do aplicativo da Mundinet, nele você poderá: pagar faturas,
                        verificar seu consumo e muito mais.</div>
                    <div class="link-download">
                        <a href="https://play.google.com/store/apps/details?id=com.r3r.mundinet" target="_blank">
                            <i class="fa-brands fa-google-play"></i>
                            <div class="descricao">
                                <span>Download via</span>
                                <b>Google Play</b>
                            </div>
                        </a>
                        <a href="https://apps.apple.com/br/app/mundi-net-telecom/id6744907321" target="_blank">
                            <i class="fa-brands fa-apple"></i>
                            <div class="descricao">
                                <span>Download via</span>
                                <b>App Store</b>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            <li>
                <a href="planos-internet.php">Internet</a>
            </li>
            <li>
                <a href="combos-internet.php">Combos</a>
            </li>
            <li>
                <a href="planos-streaming.php">Streaming</a>
            </li>
            <li>
                <a href="seguranca.php">Segurança</a>
            </li>
            <li>
                <a href="indiqueumamigo.php">Indique um amigo</a>
            </li>
            <li>
                <a href="faq.php">Central de Ajuda</a>
            </li>
        </ul>
    </nav>
    
    <header>
        <div class="top-header">
            <div class="container">
                <div class="brand">
                    <img src="./assets/logo.png" alt="Logomarca mundinet" />
                </div>
                <div class="top-header-menu">
                    <ul>
                        <li <?php ($origemUrl == 'index') ? print('class="ativo"') : '' ?>>
                            <a href="index.php">Página Inicial</a>
                        </li>
                        <li <?php ($origemUrl == 'planos-internet') ? print('class="ativo"') : '' ?>>
                            <a href="planos-internet.php">Internet</a>
                        </li>
                        <li <?php ($origemUrl == 'combos-internet') ? print('class="ativo"') : '' ?>>
                            <a href="combos-internet.php">Combos</a>
                        </li>
                        <li <?php ($origemUrl == 'planos-streaming') ? print('class="ativo"') : '' ?>>
                            <a href="planos-streaming.php">Streaming</a>
                        </li>
                        <li <?php ($origemUrl == 'seguranca') ? print('class="ativo"') : '' ?>>
                            <a href="seguranca.php">Segurança</a>
                        </li>
                        <li <?php ($origemUrl == 'indiqueumamigo') ? print('class="ativo"') : '' ?>>
                            <a href="indiqueumamigo.php">Indique um amigo</a>
                        </li>
                        <li <?php ($origemUrl == 'faq') ? print('class="ativo"') : '' ?>>
                            <a href="faq.php">Central de Ajuda</a>
                        </li>
                        <li>
                            <span>Central do cliente</span>
                            <div class="download-aplicativo">
                                <div class="title">
                                    <i class="fa-solid fa-mobile-screen-button fa-lg"></i>
                                    <h2>Aplicativo Mundinet</h2>
                                </div>
                                <div class="content">
                                    <p>Faça o download agora do aplicativo da Mundinet, nele você poderá: pagar faturas,
                                        verificar seu consumo e muito mais.</p>
                                    <span>Baixe o aplicativo Mundinet</span>
                                </div>
                                <div class="link-download">
                                    <a href="https://play.google.com/store/apps/details?id=com.r3r.mundinet"
                                        target="_blank">
                                        <i class="fa-brands fa-google-play"></i>
                                        <div class="descricao">
                                            <span>Download via</span>
                                            <b>Google Play</b>
                                        </div>
                                    </a>
                                    <a href="https://apps.apple.com/br/app/mundi-net-telecom/id6744907321" target="_blank">
                                        <i class="fa-brands fa-apple"></i>
                                        <div class="descricao">
                                            <span>Download via</span>
                                            <b>App Store</b>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <i class="fa-solid fa-bars fa-lg" id="open-menu-mobile"></i>
            </div>
        </div>