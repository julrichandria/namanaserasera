<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($title ?? 'Namana Serasera.org') ?></title>
    <meta name="keywords" content="namana, malagasy, mifandray, serasera, madagasikara, madagascar, amis, friends">
    <meta name="description" content="Namana Serasera - Malagasy Mifandray">
    <meta name="robots" content="index,follow">
    <meta property="fb:app_id" content="176874585689531">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Namana Serasera - Malagasy mifandray">
    <meta property="og:image" content="https://namana.serasera.org/media/namana_ogimage_v30.jpg">
    <meta property="og:description" content="Takela ifandraisan'ny Malagasy maneran-tany noforonina ny Oktobra 2002">
    <meta property="og:url" content="https://namana.serasera.org/">
    <link rel="alternate" type="application/rss+xml" title="Namana vaovao" href="https://feeds.feedburner.com/serasera/namanavaovao">
    <link rel="shortcut icon" href="/img/image.png" type="image/png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="/css/stylesheet.css">
    <style>
        .bg-primary-custom {
            background-color: #008cba !important;
        }

        /* Mobile slide-out menu */
        .mobile-menu {
            position: fixed;
            top: 0;
            left: 0;
            width: 280px;
            height: 100vh;
            background: rgba(0, 140, 186, 0.95);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            box-shadow: 4px 0 20px rgba(0, 0, 0, 0.15);
            transform: translateX(-100%);
            transition: transform 0.3s ease;
            z-index: 1050;
            padding: 2rem 1rem;
            overflow-y: auto;
        }

        .mobile-menu.show {
            transform: translateX(0);
        }

        .mobile-menu-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1040;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .mobile-menu-overlay.show {
            opacity: 1;
            visibility: visible;
        }

        .mobile-menu-item {
            display: flex;
            align-items: center;
            padding: 1rem;
            color: white !important;
            text-decoration: none;
            border-radius: 12px;
            margin-bottom: 0.5rem;
            transition: all 0.2s ease;
        }

        .mobile-menu-item:hover,
        .mobile-menu-item.active {
            background: rgba(255, 255, 255, 0.2);
        }

        .mobile-menu-item i {
            font-size: 1.5rem;
            margin-right: 1rem;
            width: 30px;
            text-align: center;
        }

        .mobile-menu-item span {
            color: white !important;
        }

        .mobile-menu-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .mobile-menu-header strong {
            color: white !important;
        }

        .mobile-menu-close {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: white;
        }

        .bottom-nav-scroll {
            display: flex;
            gap: 0.5rem;
            align-items: center;
        }

        /* Hide bottom nav on desktop */
        @media (min-width: 768px) {
            .bottom-nav {
                display: none;
            }
        }

        /* Hide regular navbar menu on mobile */
        @media (max-width: 767px) {
            .navbar-collapse {
                display: none !important;
            }
        }

        /* Add padding bottom to main content on mobile */
        @media (max-width: 767px) {
            #main {
                padding-bottom: 80px;
            }
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body class="body_bg">

<header>
    <nav class="navbar bg-primary-custom sticky-top shadow-sm py-3">
        <div class="container">
            <div class="d-flex align-items-center w-100">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a class="navbar-brand text-white fw-bold text-decoration-none d-flex align-items-center" href="/">
                        <img class="me-1" width="32" height="32" src="/img/image.png" alt="Logo">
                        <span class="fs-6">namana</span>
                    </a>
                </div>

                <!-- Menu Desktop -->
                <div class="flex-grow-1 d-none d-md-block">
                    <ul class="navbar-nav d-flex justify-content-center mb-0">
                        <li class="nav-item">
                            <a href="/" class="nav-link px-1 py-0 text-white rounded<?= ($active_menu ?? '') === 'home' ? ' active' : '' ?>">
                                <i class="bi bi-house-fill fs-6 me-1"></i>Fandraisana
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/namana" class="nav-link px-1 py-0 text-white rounded<?= ($active_menu ?? '') === 'namana' ? ' active' : '' ?>">
                                <i class="bi bi-people-fill fs-6 me-1"></i>Namana
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/hafatra" class="nav-link px-1 py-0 text-white rounded<?= ($active_menu ?? '') === 'hafatra' ? ' active' : '' ?>">
                                <i class="bi bi-envelope-fill fs-6 me-1"></i>Hafatra
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/album" class="nav-link px-1 py-0 text-white rounded<?= ($active_menu ?? '') === 'album' ? ' active' : '' ?>">
                                <i class="bi bi-image-fill fs-6 me-1"></i>Sary
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/vondrona" class="nav-link px-1 py-0 text-white rounded<?= ($active_menu ?? '') === 'vondrona' ? ' active' : '' ?>">
                                <i class="bi bi-collection-fill fs-6 me-1"></i>Vondrona
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/karajia" class="nav-link px-1 py-0 text-white rounded<?= ($active_menu ?? '') === 'karajia' ? ' active' : '' ?>">
                                <i class="bi bi-chat-dots-fill fs-6 me-1"></i>Karajia
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Notification -->
                <div class="flex-shrink-0 ms-auto">
                    <div class="dropdown d-none d-md-block">
                        <button class="btnnotif bg-white rounded-circle px-1 py-1 d-inline-flex align-items-center justify-content-center border-0" style="width: 32px; height: 32px;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-bell-fill" style="font-size: 0.875rem;"></i>
                            <span class="unread position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="display: block !important;">
                                3
                            </span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end shadow" style="width: 300px; max-height: 400px; overflow-y: auto;">
                            <li><h6 class="dropdown-header">Fampatsiahivana</h6></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/notifications">Tsy misy fampatsiahivana vaovao</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-center" href="/notifications">Hijery rehetra &raquo;</a></li>
                        </ul>
                    </div>
                    <div class="dropdown d-md-none">
                        <button class="btnnotif bg-white rounded-circle px-2 py-2 d-inline-flex align-items-center justify-content-center border-0" style="width: 40px; height: 40px;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-bell-fill fs-6"></i>
                            <span class="unread position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="display: block !important;">
                                3
                            </span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end shadow" style="width: 300px; max-height: 400px; overflow-y: auto;">
                            <li><h6 class="dropdown-header">Fampatsiahivana</h6></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/notifications">Tsy misy fampatsiahivana vaovao</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-center" href="/notifications">Hijery rehetra &raquo;</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Photo de profil / Hamburger -->
                <div class="flex-shrink-0 ms-3">
                    <div class="dropdown d-none d-md-block">
                        <button class="btn d-flex align-items-center border-0 bg-transparent p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="<?= $current_user['avatar'] ?? '/img/image.png' ?>" class="rounded-circle" width="32" height="32" alt="Profile">
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end shadow">
                            <li>
                                <div class="dropdown-item-text">
                                    <div class="d-flex align-items-center">
                                        <img src="<?= $current_user['avatar'] ?? '/img/image.png' ?>" class="rounded-circle me-2" width="24" height="24" alt="Profile">
                                        <div>
                                            <strong><?= $current_user['username'] ?? 'LurissAdr' ?></strong>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/profile"><i class="bi bi-person me-2"></i>Ianao</a></li>
                            <li><a class="dropdown-item" href="/notifications"><i class="bi bi-bell me-2"></i>Fampatsiahivana</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="/logout"><i class="bi bi-box-arrow-right me-2"></i>Hivoaka</a></li>
                        </ul>
                    </div>
                    <button class="navbar-toggler border-0 bg-transparent d-md-none" type="button" id="mobileMenuToggle" aria-label="Toggle navigation">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="transform: scaleX(-1);">
                            <rect x="2" y="4" width="12" height="2" rx="1" fill="white"/>
                            <rect x="2" y="11" width="20" height="2" rx="1" fill="white"/>
                            <rect x="2" y="18" width="12" height="2" rx="1" fill="white"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>
</header>

<?= $this->renderSection('content') ?>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 mb-4 mb-lg-0">
                <div class="d-flex align-items-center mb-4">
                    <img src="/img/image.png" alt="Logo" width="45" height="45" class="me-3">
                    <div>
                        <h5 class="text-white mb-0 fw-bold fs-5">Namana Serasera</h5>
                        <small class="text-white-50">Tambajotra sosialy malagasy</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h6 class="text-white fw-bold mb-3 text-uppercase small">Momba anao</h6>
                <ul class="list-unstyled mb-4">
                    <li class="mb-1"><a href="/namana/<?= $current_user['username'] ?? '' ?>" class="text-white-50 text-decoration-none small">Ny momba anao</a></li>
                    <li class="mb-1"><a href="https://login.serasera.org/mg/member/profile" class="text-white-50 text-decoration-none small">Hanova tenimiafina</a></li>
                    <li class="mb-1"><a href="/namana/<?= $current_user['username'] ?? '' ?>/album" class="text-white-50 text-decoration-none small">Ny tahirintsariko</a></li>
                    <li class="mb-1"><a href="/namana/<?= $current_user['username'] ?? '' ?>/posts" class="text-white-50 text-decoration-none small">Eritreritra mandalo</a></li>
                </ul>
                <h6 class="text-white fw-bold mb-3 text-uppercase small">Namana</h6>
                <ul class="list-unstyled">
                    <li class="mb-1"><a href="/namana/" class="text-white-50 text-decoration-none small">Namana rehetra</a></li>
                    <li class="mb-1"><a href="/namana/?type=manokana" class="text-white-50 text-decoration-none small">Namana manokana</a></li>
                    <li class="mb-1"><a href="/namana/?type=nifidy" class="text-white-50 text-decoration-none small">Nifidy ahy</a></li>
                    <li class="mb-1"><a href="/namana/?type=voasakana" class="text-white-50 text-decoration-none small">Namana voasakana</a></li>
                    <li class="mb-1"><a href="/namana/?type=nisakana" class="text-white-50 text-decoration-none small">Nisakana ahy</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h6 class="text-white fw-bold mb-3 text-uppercase small">Hafatra</h6>
                <ul class="list-unstyled mb-4">
                    <li class="mb-1"><a href="/hafatra/hanoratra" class="text-white-50 text-decoration-none small">Hanoratra hafatra</a></li>
                    <li class="mb-1"><a href="/hafatra" class="text-white-50 text-decoration-none small">Hafatra voaray</a></li>
                    <li class="mb-1"><a href="/hafatra?type=outbox" class="text-white-50 text-decoration-none small">Hafatra lasa</a></li>
                    <li class="mb-1"><a href="/hafatra?type=archives" class="text-white-50 text-decoration-none small">Hafatra tahiry</a></li>
                    <li class="mb-1"><a href="/hafatra?type=draft" class="text-white-50 text-decoration-none small">Vakiraoka</a></li>
                    <li class="mb-1"><a href="/posts" class="text-white-50 text-decoration-none small">Eritreritra mandalo</a></li>
                </ul>
                <h6 class="text-white fw-bold mb-3 text-uppercase small">Sary</h6>
                <ul class="list-unstyled">
                    <li class="mb-1"><a href="/album/image/create" class="text-white-50 text-decoration-none small">Hampiditra sary</a></li>
                    <li class="mb-1"><a href="/album/ampidiro" class="text-white-50 text-decoration-none small">Hanokatra tahirintsary</a></li>
                    <li class="mb-1"><a href="/namana/sary/rehetra" class="text-white-50 text-decoration-none small">Sary rehetra</a></li>
                    <li class="mb-1"><a href="/album" class="text-white-50 text-decoration-none small">Tahirintsary</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h6 class="text-white fw-bold mb-3 text-uppercase small">Vondrona</h6>
                <ul class="list-unstyled mb-4">
                    <li class="mb-1"><a href="/vondrona" class="text-white-50 text-decoration-none small">Vondrona rehetra</a></li>
                    <li class="mb-1"><a href="/vondrona/ahy" class="text-white-50 text-decoration-none small">Ny natsangako</a></li>
                    <li class="mb-1"><a href="/vondrona/nidirako" class="text-white-50 text-decoration-none small">Vondrona nidirako</a></li>
                    <li class="mb-1"><a href="/vondrona/hanokatra" class="text-white-50 text-decoration-none small">Hanangana vondrona</a></li>
                    <li class="mb-1"><a href="/vondrona/fanasana" class="text-white-50 text-decoration-none small">Fanasàna</a></li>
                </ul>
                <h6 class="text-white fw-bold mb-3 text-uppercase small">Momba ny takelaka</h6>
                <ul class="list-unstyled">
                    <li class="mb-1"><a href="/sosokevitra-sy-tsikera" class="text-white-50 text-decoration-none small">Soso-kevitra</a></li>
                    <li class="mb-1"><a href="/news" class="text-white-50 text-decoration-none small">Zava-baovao</a></li>
                    <li class="mb-1"><a href="/fanoroana" class="text-white-50 text-decoration-none small">Fanoroana</a></li>
                    <li class="mb-1"><a href="http://pub.serasera.org/2009/06/tarif-publicitaire.html" class="text-white-50 text-decoration-none small">Dokam-barotra</a></li>
                </ul>
            </div>
        </div>
        <hr class="border-secondary my-4">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <p class="text-white-50 mb-0 small">&copy; 2026 Namana Serasera.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <span class="text-white-50 small">Page load <span id="page-load-time"></span>s</span>
            </div>
        </div>
    </div>
</footer>

<!-- Mobile Slide-out Menu -->
<div class="mobile-menu-overlay d-md-none" id="mobileMenuOverlay"></div>
<div class="mobile-menu d-md-none" id="mobileMenu">
    <div class="mobile-menu-header">
        <div class="d-flex align-items-center">
            <img src="<?= $current_user['avatar'] ?? '/img/image.png' ?>" class="rounded-circle me-2" width="40" height="40" alt="Profile">
            <strong><?= $current_user['username'] ?? 'LurissAdr' ?></strong>
        </div>
        <button class="mobile-menu-close" id="mobileMenuClose">&times;</button>
    </div>
    <a href="/" class="mobile-menu-item<?= ($active_menu ?? '') === 'home' ? ' active' : '' ?>">
        <i class="bi bi-house-fill"></i>
        <span>Fandraisana</span>
    </a>
    <a href="/namana" class="mobile-menu-item<?= ($active_menu ?? '') === 'namana' ? ' active' : '' ?>">
        <i class="bi bi-people-fill"></i>
        <span>Namana</span>
    </a>
    <a href="/hafatra" class="mobile-menu-item<?= ($active_menu ?? '') === 'hafatra' ? ' active' : '' ?>">
        <i class="bi bi-envelope-fill"></i>
        <span>Hafatra</span>
    </a>
    <a href="/album" class="mobile-menu-item<?= ($active_menu ?? '') === 'album' ? ' active' : '' ?>">
        <i class="bi bi-image-fill"></i>
        <span>Sary</span>
    </a>
    <a href="/vondrona" class="mobile-menu-item<?= ($active_menu ?? '') === 'vondrona' ? ' active' : '' ?>">
        <i class="bi bi-collection-fill"></i>
        <span>Vondrona</span>
    </a>
    <a href="/karajia" class="mobile-menu-item<?= ($active_menu ?? '') === 'karajia' ? ' active' : '' ?>">
        <i class="bi bi-chat-dots-fill"></i>
        <span>Karajia</span>
    </a>
    <a href="/notifications" class="mobile-menu-item">
        <i class="bi bi-bell"></i>
        <span>Fampatsiahivana</span>
    </a>
    <a href="/logout" class="mobile-menu-item">
        <i class="bi bi-box-arrow-right"></i>
        <span>Hivoaka</span>
    </a>
</div>

<!-- Chat Widget Button -->
<div class="chat-widget">
    <button class="chat-widget-btn" id="chatWidgetBtn">
        <i class="bi bi-chat-dots-fill"></i>
        <span class="chat-widget-badge">5</span>
    </button>
    <div class="chat-widget-window" id="chatWidgetWindow">
        <!-- Conversation List View -->
        <div class="chat-widget-header" id="chatListHeader">
            <div class="d-flex align-items-center">
                <div class="chat-widget-avatar me-2">
                    <i class="bi bi-envelope-fill"></i>
                </div>
                <div>
                    <h6 class="mb-0 text-white">Hafatra</h6>
                    <small class="text-white-50">Hafatra voaray</small>
                </div>
            </div>
            <button class="chat-widget-close" id="chatWidgetClose">
                <i class="bi bi-x-lg"></i>
            </button>
        </div>
        
        <!-- Single Conversation View -->
        <div class="chat-widget-header d-none" id="chatConversationHeader">
            <div class="d-flex align-items-center">
                <button class="chat-widget-back me-2" id="chatWidgetBack">
                    <i class="bi bi-arrow-left"></i>
                </button>
                <img src="" class="chat-widget-user-avatar me-2" id="chatUserAvatar" alt="">
                <div>
                    <h6 class="mb-0 text-white" id="chatUserName">fillecool</h6>
                    <small class="text-white-50">Vakiana</small>
                </div>
            </div>
            <button class="chat-widget-close" id="chatWidgetClose2">
                <i class="bi bi-x-lg"></i>
            </button>
        </div>
        
        <div class="chat-widget-body" id="chatWidgetBody">
            <!-- Search -->
            <div class="chat-widget-search mb-3">
                <input type="text" class="form-control form-control-sm border-0 bg-light rounded-pill" placeholder="Hitady hafatra..." id="chatWidgetSearch">
            </div>
            
            <!-- Conversation List -->
            <div class="chat-conversation-list" id="chatConversationList">
                <div class="chat-conversation-item unread" data-user="fillecool" data-avatar="https://avatar.serasera.org/b73d50e7cdc8a99d9be32cfa468784ac.jpg">
                    <img src="https://avatar.serasera.org/b73d50e7cdc8a99d9be32cfa468784ac.jpg" class="chat-conversation-avatar" alt="fillecool">
                    <div class="chat-conversation-content">
                        <div class="chat-conversation-header">
                            <strong>fillecool</strong>
                            <small class="text-muted">3mn lasa</small>
                        </div>
                        <p class="chat-conversation-preview">Salut ! Ca va ?</p>
                    </div>
                    <span class="chat-conversation-badge">1</span>
                </div>
                <div class="chat-conversation-item" data-user="hery" data-avatar="https://avatar.serasera.org/11357611cb1b43ff3138d1eba068644b.jpg">
                    <img src="https://avatar.serasera.org/11357611cb1b43ff3138d1eba068644b.jpg" class="chat-conversation-avatar" alt="hery">
                    <div class="chat-conversation-content">
                        <div class="chat-conversation-header">
                            <strong>hery</strong>
                            <small class="text-muted">1 ora lasa</small>
                        </div>
                        <p class="chat-conversation-preview">Manao ahoana daholo !</p>
                    </div>
                </div>
                <div class="chat-conversation-item" data-user="diasa" data-avatar="https://avatar.serasera.org/ffcace233dee39fa2f95c963695faeb3.jpg">
                    <img src="https://avatar.serasera.org/ffcace233dee39fa2f95c963695faeb3.jpg" class="chat-conversation-avatar" alt="diasa">
                    <div class="chat-conversation-content">
                        <div class="chat-conversation-header">
                            <strong>diasa</strong>
                            <small class="text-muted">3 andro lasa</small>
                        </div>
                        <p class="chat-conversation-preview">Lay tany Morondava</p>
                    </div>
                </div>
                <div class="chat-conversation-item" data-user="TSIAFAKE95" data-avatar="https://avatar.serasera.org/6709112c6aa0db5af3b465722099b254.jpg">
                    <img src="https://avatar.serasera.org/6709112c6aa0db5af3b465722099b254.jpg" class="chat-conversation-avatar" alt="TSIAFAKE95">
                    <div class="chat-conversation-content">
                        <div class="chat-conversation-header">
                            <strong>TSIAFAKE95</strong>
                            <small class="text-muted">12 andro lasa</small>
                        </div>
                        <p class="chat-conversation-preview">Resaka fiainana</p>
                    </div>
                </div>
                <div class="chat-conversation-item" data-user="Slay12" data-avatar="https://avatar.serasera.org/b0f646d4362cfa2bb140bbe07bb7f645.jpg">
                    <img src="https://avatar.serasera.org/b0f646d4362cfa2bb140bbe07bb7f645.jpg" class="chat-conversation-avatar" alt="Slay12">
                    <div class="chat-conversation-content">
                        <div class="chat-conversation-header">
                            <strong>Slay12</strong>
                            <small class="text-muted">15 andro lasa</small>
                        </div>
                        <p class="chat-conversation-preview">salama daoly ry reto an...</p>
                    </div>
                </div>
            </div>
            
            <!-- Single Conversation Messages -->
            <div class="chat-message-list d-none" id="chatMessageList">
                <div class="chat-message-item">
                    <img src="https://avatar.serasera.org/b73d50e7cdc8a99d9be32cfa468784ac.jpg" class="chat-message-avatar" alt="fillecool">
                    <div class="chat-message-content">
                        <div class="chat-message-header">
                            <strong>fillecool</strong>
                            <small class="text-muted">3mn lasa</small>
                        </div>
                        <p>Salut ! Ca va ?</p>
                    </div>
                </div>
                <div class="chat-message-item sent">
                    <div class="chat-message-content">
                        <div class="chat-message-header">
                            <strong>Ianao</strong>
                            <small class="text-muted">2mn lasa</small>
                        </div>
                        <p>Oui merci ! Et toi ?</p>
                    </div>
                </div>
                <div class="chat-message-item">
                    <img src="https://avatar.serasera.org/b73d50e7cdc8a99d9be32cfa468784ac.jpg" class="chat-message-avatar" alt="fillecool">
                    <div class="chat-message-content">
                        <div class="chat-message-header">
                            <strong>fillecool</strong>
                            <small class="text-muted">1mn lasa</small>
                        </div>
                        <p>Tres bien ! Tu fais quoi ce soir ?</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="chat-widget-footer" id="chatWidgetFooter">
            <a href="/hafatra/hanoratra" class="btn btn-primary w-100">
                <i class="bi bi-pencil-fill me-2"></i>Hanoratra hafatra vaovao
            </a>
        </div>
        <div class="chat-widget-footer d-none" id="chatMessageFooter">
            <div class="chat-widget-input">
                <input type="text" placeholder="Soraty hafatra..." id="chatWidgetInput">
                <button class="chat-widget-send" id="chatWidgetSend">
                    <i class="bi bi-send-fill"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 1090;">
    <div id="liveToast" class="toast shadow-lg" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto">
                <span id="notif-title-all" role="button" style="cursor: pointer;">Fampatsiahivana</span>
                <a href="javascript:void(0)" id="filter-unread" class="text-decoration-none small ms-1 fw-normal text-primary" title="Tsy voavaky">(Tsy voavaky)</a>
            </strong>
            <small><button id="close-toast" type="button" class="btn-close" aria-label="Close"></button></small>
        </div>
        <div class="toast-body overflow-auto" style="max-height: 70vh;"></div>
        <div class="text-end p-2 border-top bg-light">
            <a href="/notifications" class="text-decoration-none small text-primary fw-semibold">Tohiny... &raquo;</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="/js/app.js"></script>
<script src="/js/jquery.dm-uploader.js"></script>
<script>
// Initialize Bootstrap tooltips
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})

// Mobile menu toggle
document.getElementById('mobileMenuToggle').addEventListener('click', function() {
    document.getElementById('mobileMenu').classList.add('show');
    document.getElementById('mobileMenuOverlay').classList.add('show');
});

document.getElementById('mobileMenuClose').addEventListener('click', function() {
    document.getElementById('mobileMenu').classList.remove('show');
    document.getElementById('mobileMenuOverlay').classList.remove('show');
});

document.getElementById('mobileMenuOverlay').addEventListener('click', function() {
    document.getElementById('mobileMenu').classList.remove('show');
    document.getElementById('mobileMenuOverlay').classList.remove('show');
});

// Chat widget toggle
document.getElementById('chatWidgetBtn').addEventListener('click', function() {
    document.getElementById('chatWidgetWindow').classList.toggle('show');
});

document.getElementById('chatWidgetClose').addEventListener('click', function() {
    document.getElementById('chatWidgetWindow').classList.remove('show');
});

document.getElementById('chatWidgetClose2').addEventListener('click', function() {
    document.getElementById('chatWidgetWindow').classList.remove('show');
});

// Chat conversation list click
document.querySelectorAll('.chat-conversation-item').forEach(function(item) {
    item.addEventListener('click', function() {
        var user = this.getAttribute('data-user');
        var avatar = this.getAttribute('data-avatar');
        
        // Show conversation view
        document.getElementById('chatListHeader').classList.add('d-none');
        document.getElementById('chatConversationHeader').classList.remove('d-none');
        document.getElementById('chatConversationList').classList.add('d-none');
        document.getElementById('chatMessageList').classList.remove('d-none');
        document.getElementById('chatWidgetFooter').classList.add('d-none');
        document.getElementById('chatMessageFooter').classList.remove('d-none');
        
        // Set user info
        document.getElementById('chatUserName').textContent = user;
        document.getElementById('chatUserAvatar').src = avatar;
    });
});

// Chat back button
document.getElementById('chatWidgetBack').addEventListener('click', function() {
    // Show list view
    document.getElementById('chatListHeader').classList.remove('d-none');
    document.getElementById('chatConversationHeader').classList.add('d-none');
    document.getElementById('chatConversationList').classList.remove('d-none');
    document.getElementById('chatMessageList').classList.add('d-none');
    document.getElementById('chatWidgetFooter').classList.remove('d-none');
    document.getElementById('chatMessageFooter').classList.add('d-none');
});

// Chat widget send message
document.getElementById('chatWidgetSend').addEventListener('click', function() {
    var input = document.getElementById('chatWidgetInput');
    var message = input.value.trim();
    if (message) {
        var chatBody = document.getElementById('chatMessageList');
        var userMessage = document.createElement('div');
        userMessage.className = 'chat-message-item sent';
        userMessage.innerHTML = '<div class="chat-message-content"><div class="chat-message-header"><strong>Ianao</strong><small class="text-muted">Vakiana</small></div><p>' + message + '</p></div>';
        chatBody.appendChild(userMessage);
        input.value = '';
        chatBody.scrollTop = chatBody.scrollHeight;
    }
});

document.getElementById('chatWidgetInput').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        document.getElementById('chatWidgetSend').click();
    }
});

// Page load time
window.addEventListener('load', function() {
    var loadTime = performance.now();
    document.getElementById('page-load-time').textContent = (loadTime / 1000).toFixed(4);
});
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-YWHTK8BN39"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'G-YWHTK8BN39');
</script>

</body>
</html>
