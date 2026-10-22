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
                <a href="/vondrona" class="text-decoration-none fw-semibold">Vondrona</a>
                <span class="text-muted mx-2">&lt;</span>
                <span class="fw-semibold"><?= esc($group['name']) ?></span>
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
        <!-- Main content -->
        <div class="col-lg-8">
            <!-- Group info card -->
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div class="d-flex align-items-start gap-3">
                            <div class="flex-shrink-0">
                                <div class="rounded-3 bg-primary d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                    <i class="bi bi-people-fill text-white fs-3"></i>
                                </div>
                            </div>
                            <div>
                                <h4 class="card-title mb-1"><?= esc($group['name']) ?></h4>
                                <div class="text-muted small mb-2">
                                    Natsangan'i <a href="/namana/<?= esc($group['creator']) ?>" class="text-decoration-none fw-semibold"><?= esc($group['creator']) ?></a> • <?= esc($group['created_date']) ?>
                                </div>
                                <div class="d-flex gap-2">
                                    <span class="badge bg-primary"><?= $group['member_count'] ?> mpikambana</span>
                                    <span class="badge bg-secondary"><?= $group['post_count'] ?> resaka</span>
                                </div>
                            </div>
                        </div>
                        <a href="/vondrona/<?= esc($group['slug']) ?>/admin" class="btn btn-outline-primary btn-sm rounded-pill">
                            <i class="bi bi-gear-fill me-1"></i> Fikarakarana
                        </a>
                    </div>
                    <div class="bg-light rounded-3 p-3">
                        <p class="mb-0 text-muted small"><?= nl2br(esc($group['description'])) ?></p>
                    </div>
                </div>
            </div>

            <!-- New post form -->
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body p-4">
                    <form action="/vondrona/<?= esc($group['slug']) ?>/post" method="post" enctype="multipart/form-data">
                        <div class="d-flex gap-3 mb-3">
                            <div class="flex-shrink-0">
                                <img class='rounded-circle' src='<?= esc($current_user['avatar']) ?>' alt='Avatar' width="45" height="45">
                            </div>
                            <div class="flex-grow-1">
                                <textarea name="content" class="form-control border-0 bg-light rounded-3" placeholder="Manorata resaka vaovao..." rows="3" style="resize: none;"></textarea>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex gap-2">
                                <button type="button" class="btn btn-outline-primary btn-sm rounded-pill" id="addPhotoBtn">
                                    <i class="bi bi-image me-1"></i> Ampidiro sary
                                </button>
                                <input type="file" name="photo" class="d-none" id="photoInput">
                            </div>
                            <button class="btn btn-primary btn-sm rounded-pill px-4">
                                <i class="bi bi-send-fill me-2"></i> Alefa
                            </button>
                        </div>
                        <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
                    </form>
                </div>
            </div>

            <!-- Posts list -->
            <?php foreach ($posts as $post): ?>
            <div class="card shadow-sm border-0 mb-3">
                <div class="card-body p-4">
                    <div class="d-flex gap-3">
                        <div class="flex-shrink-0">
                            <a href="/namana/<?= esc($post['user']) ?>">
                                <img src="<?= esc($post['user_avatar']) ?>" class="rounded-circle" width="50" height="50" alt="<?= esc($post['user']) ?>">
                            </a>
                        </div>
                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <div>
                                    <h6 class="mb-0">
                                        <a href="/namana/<?= esc($post['user']) ?>" class="text-decoration-none text-dark fw-semibold"><?= esc($post['user']) ?></a>
                                    </h6>
                                    <small class="text-muted"><?= esc($post['time']) ?></small>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-link text-muted p-0" type="button" data-bs-toggle="dropdown">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="/vondrona/<?= esc($group['slug']) ?>/post/<?= esc($post['id']) ?>/report">Alazao</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mb-3"><?= nl2br(esc($post['content'])) ?></div>
                            <div class="d-flex gap-3">
                                <a href="/vondrona/<?= esc($group['slug']) ?>/post/<?= esc($post['id']) ?>/like" class="btn btn-outline-primary btn-sm rounded-pill">
                                    <i class="bi bi-heart me-1"></i> <?= $post['likes'] ?>
                                </a>
                                <a href="/vondrona/<?= esc($group['slug']) ?>/post/<?= esc($post['id']) ?>" class="btn btn-outline-primary btn-sm rounded-pill">
                                    <i class="bi bi-chat me-1"></i> <?= $post['comments'] ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

            <!-- Pagination -->
            <nav aria-label="Page navigation" class="mt-4">
                <ul class="pagination justify-content-center">
                    <li class="page-item<?= $current_page === 1 ? ' disabled' : '' ?>">
                        <a class="page-link" href="/vondrona/<?= esc($group['slug']) ?>?page=<?= $current_page - 1 ?>">Heriny</a>
                    </li>
                    <?php for ($i = 1; $i <= min(5, $total_pages); $i++): ?>
                    <li class="page-item<?= $i === $current_page ? ' active' : '' ?>">
                        <a class="page-link" href="/vondrona/<?= esc($group['slug']) ?>?page=<?= $i ?>"><?= $i ?></a>
                    </li>
                    <?php endfor; ?>
                    <?php if ($total_pages > 5): ?>
                    <li class="page-item disabled"><span class="page-link">...</span></li>
                    <li class="page-item">
                        <a class="page-link" href="/vondrona/<?= esc($group['slug']) ?>?page=<?= $total_pages ?>"><?= $total_pages ?></a>
                    </li>
                    <?php endif; ?>
                    <li class="page-item<?= $current_page === $total_pages ? ' disabled' : '' ?>">
                        <a class="page-link" href="/vondrona/<?= esc($group['slug']) ?>?page=<?= $current_page + 1 ?>">Manaraka</a>
                    </li>
                    <li class="page-item<?= $current_page === $total_pages ? ' disabled' : '' ?>">
                        <a class="page-link" href="/vondrona/<?= esc($group['slug']) ?>?page=<?= $total_pages ?>">Farany</a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <div class="card shadow-sm border-0">
                <div class="card-body p-4">
                    <h6 class="card-title mb-3">Mombamomba ny vondrona</h6>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="text-muted small">Mpikambana</span>
                            <span class="fw-semibold"><?= $group['member_count'] ?></span>
                        </div>
                        <div class="d-flex justify-content-between mb-1">
                            <span class="text-muted small">Resaka</span>
                            <span class="fw-semibold"><?= $group['post_count'] ?></span>
                        </div>
                    </div>
                    <hr>
                    <h6 class="card-title mb-3">Mpikambana vao</h6>
                    <div class="d-flex gap-2 flex-wrap">
                        <img src="https://avatar.serasera.org/11357611cb1b43ff3138d1eba068644b.jpg" class="rounded-circle" width="35" height="35" alt="member">
                        <img src="https://avatar.serasera.org/b73d50e7cdc8a99d9be32cfa468784ac.jpg" class="rounded-circle" width="35" height="35" alt="member">
                        <img src="https://avatar.serasera.org/ffcace233dee39fa2f95c963695faeb3.jpg" class="rounded-circle" width="35" height="35" alt="member">
                        <img src="https://avatar.serasera.org/613371a5d30a674c048952a2d17112bc.jpg" class="rounded-circle" width="35" height="35" alt="member">
                        <img src="https://avatar.serasera.org/14d05c4c4970579b49702d88f0016110.jpg" class="rounded-circle" width="35" height="35" alt="member">
                    </div>
                    <div class="mt-3">
                        <a href="/vondrona/<?= esc($group['slug']) ?>/members" class="btn btn-outline-primary btn-sm rounded-pill w-100">Hijery ny mpikambana rehetra</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
