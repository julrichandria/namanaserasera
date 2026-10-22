<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="container py-4" id="main">
    <!-- Breadcrumb -->
    <div class="bg-white rounded-3 shadow-sm p-3 mb-4">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <small class="text-muted">Eto ianao :</small>
                <a href="/" class="text-decoration-none fw-semibold">Fandraisana</a>
                <span class="text-muted mx-2">&lt;</span>
                <a href="/namana/<?= esc($photo['user']) ?>" class="text-decoration-none fw-semibold"><?= esc($photo['user']) ?></a>
                <span class="text-muted mx-2">&lt;</span>
                <a href="/namana/<?= esc($photo['user']) ?>/album" class="text-decoration-none fw-semibold"><?= esc($photo['album']['name']) ?></a>
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
                    <!-- Photo header -->
                    <div class="d-flex align-items-center gap-3 mb-4 pb-4 border-bottom">
                        <div class="flex-shrink-0">
                            <a href="/namana/<?= esc($photo['user']) ?>">
                                <img src="<?= esc($photo['user_avatar']) ?>" class="rounded-circle" width="50" height="50" alt="<?= esc($photo['user']) ?>">
                            </a>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-0">
                                <a href="/namana/<?= esc($photo['user']) ?>" class="text-decoration-none text-dark"><?= esc($photo['user']) ?></a>
                            </h5>
                            <small class="text-muted"><?= esc($photo['time']) ?></small>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="dropdown">
                                <button class="btn btn-link text-muted" type="button" data-bs-toggle="dropdown">
                                    <i class="bi bi-three-dots-vertical fs-5"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="/album/photo/<?= esc($photo['id']) ?>/report">Alazao</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Photo -->
                    <div class="text-center mb-4">
                        <img src="<?= esc($photo['url']) ?>" class="img-fluid rounded-3 shadow-sm" alt="<?= esc($photo['title']) ?>">
                    </div>

                    <!-- Actions -->
                    <div class="d-flex gap-3 mb-4">
                        <a href="/album/photo/<?= esc($photo['id']) ?>/like" class="btn btn-outline-primary btn-sm rounded-pill">
                            <i class="bi bi-heart me-2"></i> Mpakafy <?= $photo['likes'] ?>
                        </a>
                        <a href="#comments" class="btn btn-outline-primary btn-sm rounded-pill">
                            <i class="bi bi-chat me-2"></i> Hevitra <?= $photo['comments'] ?>
                        </a>
                    </div>

                    <!-- Comments section -->
                    <div id="comments" class="mt-4 pt-4 border-top">
                        <h5 class="card-title mb-4">Hevitra (<?= count($comments) ?>)</h5>
                        <?php if (empty($comments)): ?>
                        <div class="text-center text-muted py-3">
                            <p>Tsy misy hevitra</p>
                        </div>
                        <?php else: ?>
                        <?php foreach ($comments as $comment): ?>
                        <div class="d-flex gap-3 mb-4">
                            <div class="flex-shrink-0">
                                <img src="<?= esc($comment['avatar']) ?>" class="rounded-circle" width="40" height="40" alt="<?= esc($comment['user']) ?>">
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start mb-1">
                                    <div>
                                        <h6 class="mb-0">
                                            <a href="/namana/<?= esc($comment['user']) ?>" class="text-decoration-none text-dark"><?= esc($comment['user']) ?></a>
                                        </h6>
                                        <small class="text-muted"><?= esc($comment['time']) ?></small>
                                    </div>
                                </div>
                                <div class="mb-2"><?= $comment['body'] ?></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <?php endif; ?>

                        <!-- Comment form -->
                        <div class="mt-4">
                            <form action="/album/photo/<?= esc($photo['id']) ?>/comment" method="post">
                                <div class="d-flex gap-3">
                                    <div class="flex-shrink-0">
                                        <img class='rounded-circle' src='<?= esc($current_user['avatar']) ?>' alt='Avatar' width="40" height="40">
                                    </div>
                                    <div class="flex-grow-1">
                                        <textarea name="body" class="form-control border-0 bg-light rounded-3" placeholder="Manorata hevitra..." rows="3" style="resize: none;"></textarea>
                                    </div>
                                </div>
                                <div class="mt-2 text-end">
                                    <button class="btn btn-primary btn-sm rounded-pill px-4">
                                        <i class="bi bi-send-fill me-2"></i> Alefa
                                    </button>
                                </div>
                                <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
