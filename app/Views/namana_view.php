<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="container py-4" id="main">
    <!-- Breadcrumb -->
    <div class="bg-white rounded-3 shadow-sm p-3 mb-4">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <small class="text-muted">Eto ianao :</small>
                <a href="/" class="text-decoration-none fw-semibold">Fandraisana</a>
                <span class="text-muted mx-2">/</span>
                <a href="/namana" class="text-decoration-none fw-semibold">Namana</a>
                <span class="text-muted mx-2">/</span>
                <span class="fw-semibold"><?= esc($user['username']) ?></span>
            </div>
            <div class="d-flex gap-2">
                <a href="/mg/" class="d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" id="flag-icons-mg" width="20" viewBox="0 0 640 480">
                        <g fill-rule="evenodd" stroke-width="1pt">
                            <path fill="#fc3d32" d="M213.3 0H640v240H213.3z" />
                            <path fill="#007e3a" d="M213.3 240H640v240H213.3z" />
                            <path fill="#fff" d="M0 0h213.3v480H0z" />
                        </g>
                    </svg>
                </a>
                <a href="/en/" class="d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" id="flag-icons-gb" width="20" viewBox="0 0 640 480">
                        <path fill="#012169" d="M0 0h640v480H0z" />
                        <path fill="#FFF" d="m75 0 244 181L562 0h78v62L400 241l240 178v61h-80L320 301 81 480H0v-60l239-178L0 64V0h75z" />
                        <path fill="#C8102E" d="m424 281 216 159v40L369 281h55zm-184 20 6 35L54 480H0l240-179zM640 0v3L391 191l2-44L590 0h50zM0 0l239 176h-60L0 42V0z" />
                        <path fill="#FFF" d="M241 0v480h160V0H241zM0 160v160h640V160H0z" />
                        <path fill="#C8102E" d="M0 193v96h640v-96H0zM273 0v480h96V0h-96z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <img src="<?= esc($user['avatar']) ?>" class="rounded-circle mb-3 border" width="150" height="150" alt="Avatar">
                            <div class="d-flex gap-2 justify-content-center">
                                <a href="/hafatra/hanoratra/<?= esc($user['username']) ?>" class="btn btn-primary btn-sm rounded-pill">Hafatra</a>
                                <a href="#" class="btn btn-outline-primary btn-sm rounded-pill">Hamela namana</a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <h4 class="mb-1"><?= esc($user['display_name']) ?></h4>
                            <h6 class="text-muted mb-3">@<?= esc($user['username']) ?></h6>
                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <div class="bg-light rounded-3 p-3">
                                        <p class="mb-1 small text-muted">Sokajy</p>
                                        <p class="fw-semibold"><?= esc($user['gender']) ?></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-light rounded-3 p-3">
                                        <p class="mb-1 small text-muted">Toerana</p>
                                        <p class="fw-semibold"><?= esc($user['location']) ?></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-light rounded-3 p-3">
                                        <p class="mb-1 small text-muted">Diavina</p>
                                        <p class="fw-semibold"><?= $user['age'] ?> taona</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-light rounded-3 p-3">
                                        <p class="mb-1 small text-muted">Namana</p>
                                        <p class="fw-semibold"><?= $user['friends_count'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="bg-light rounded-3 p-3">
                                        <p class="mb-1 small text-muted">Sary</p>
                                        <p class="fw-semibold"><?= $user['photos_count'] ?></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-light rounded-3 p-3">
                                        <p class="mb-1 small text-muted">Niditra tamin'ny</p>
                                        <p class="fw-semibold"><?= esc($user['joined_date']) ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 p-3 bg-light rounded-3">
                                <h5 class="card-title mb-2">Momba azy</h5>
                                <p class="mb-0"><?= nl2br(esc($user['bio'])) ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Posts -->
            <div class="card shadow-sm border-0 mt-4">
                <div class="card-body p-4">
                    <h5 class="card-title mb-4">Eritreritra mandalo</h5>
                    <?php foreach ($posts as $post): ?>
                    <div class="card shadow-sm mb-4 border-0">
                        <div class="card-body p-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <a href="/namana/<?= esc($post['username']) ?>">
                                        <img class='rounded-circle' src='<?= esc($post['avatar']) ?>' alt='Avatar' width="50" height="50">
                                    </a>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <div>
                                            <b><a href="/namana/<?= esc($post['username']) ?>" class="text-decoration-none text-dark"><?= esc($post['username']) ?></a></b>
                                            <small class="text-muted ms-2">(<a href="/namana/<?= esc($post['username']) ?>/posts/<?= esc($post['post_id']) ?>" class="text-decoration-none text-muted"><?= esc($post['time']) ?></a>)</small>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn btn-link text-decoration-none p-0" data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="/namana/<?= esc($post['username']) ?>/posts/<?= esc($post['post_id']) ?>/alert"><i class="bi bi-exclamation-triangle me-2"></i> Alazao</a></li>
                                                <li><a class="dropdown-item" href="/namana/<?= esc($post['username']) ?>/posts/<?= esc($post['post_id']) ?>"><i class="bi bi-link me-2"></i> Haka rohy</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="/namana/<?= esc($post['username']) ?>/posts/<?= esc($post['post_id']) ?>" class="text-decoration-none text-dark">
                                        <div class="mb-3"><?= $post['content'] ?></div>
                                    </a>
                                    <?php if (!empty($post['image'])): ?>
                                    <div class='image mb-3'>
                                        <a href="/namana/<?= esc($post['username']) ?>/posts/<?= esc($post['post_id']) ?>">
                                            <img src="<?= esc($post['image']) ?>" class='img-fluid rounded-3' alt='Post image'>
                                        </a>
                                    </div>
                                    <?php endif; ?>
                                    <div class="rea d-flex gap-3 text-muted">
                                        <a href="/namana/<?= esc($post['username']) ?>/posts/<?= esc($post['post_id']) ?>/like" id="<?= esc($post['post_id']) ?>" class="posts like<?= $post['liked'] ? ' text-primary' : '' ?> text-decoration-none">
                                            <i class="bi bi-hand-thumbs-up-fill me-1"></i> Mankafy <span><?= $post['likes'] ?></span>
                                        </a>
                                        <a href="/namana/<?= esc($post['username']) ?>/posts/<?= esc($post['post_id']) ?>#comments" class="text-decoration-none">
                                            <i class="bi bi-chat me-1"></i> Hevitra <?= $post['comments'] ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
