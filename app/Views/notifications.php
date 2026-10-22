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
                <span class="fw-semibold">Fampatsiahivana</span>
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
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="card-title mb-0">Fampatsiahivana</h5>
                        <a href="#" class="btn btn-outline-primary btn-sm rounded-pill">Hamaky rehetra</a>
                    </div>

                    <!-- Notifications list -->
                    <div class="list-group list-group-flush">
                        <?php foreach ($notifications as $notification): ?>
                        <div class="list-group-item list-group-item-action border-0 rounded-3 mb-2<?= $notification['unread'] ? ' bg-light' : '' ?>">
                            <div class="d-flex align-items-start gap-3">
                                <div class="flex-shrink-0">
                                    <?php if ($notification['user']): ?>
                                    <a href="/namana/<?= esc($notification['user']) ?>">
                                        <img src="<?= esc($notification['user_avatar']) ?>" class="rounded-circle" width="45" height="45" alt="<?= esc($notification['user']) ?>">
                                    </a>
                                    <?php else: ?>
                                    <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                                        <i class="bi bi-bell-fill"></i>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-between align-items-start mb-1">
                                        <div>
                                            <?php if ($notification['user']): ?>
                                            <strong class="fw-semibold">
                                                <a href="/namana/<?= esc($notification['user']) ?>" class="text-decoration-none text-dark"><?= esc($notification['user']) ?></a>
                                            </strong>
                                            <?php endif; ?>
                                            <span class="text-muted"><?= esc($notification['message']) ?></span>
                                        </div>
                                        <small class="text-muted"><?= esc($notification['time']) ?></small>
                                    </div>
                                </div>
                                <?php if ($notification['unread']): ?>
                                <div class="flex-shrink-0">
                                    <span class="badge bg-primary rounded-pill">Vaovao</span>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Pagination -->
                    <nav aria-label="Page navigation" class="mt-4">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#">Heriny</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">Manaraka</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
