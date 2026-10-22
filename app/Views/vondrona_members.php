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
                <a href="/vondrona/<?= esc($group['slug']) ?>" class="text-decoration-none fw-semibold"><?= esc($group['name']) ?></a>
                <span class="text-muted mx-2">&lt;</span>
                <span class="fw-semibold">Mpikambana</span>
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
                        <h5 class="card-title mb-0">Mpikambana (<?= $group['member_count'] ?>)</h5>
                        <div class="d-flex gap-2">
                            <a href="/vondrona/<?= esc($group['slug']) ?>" class="btn btn-outline-primary btn-sm rounded-pill">
                                <i class="bi bi-arrow-left me-1"></i> Hiverina
                            </a>
                            <a href="/vondrona/<?= esc($group['slug']) ?>/admin" class="btn btn-primary btn-sm rounded-pill">
                                <i class="bi bi-gear-fill me-1"></i> Fikarakarana
                            </a>
                        </div>
                    </div>

                    <!-- Search -->
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" class="form-control border-0 bg-light" placeholder="Hitady mpikambana..." name="q" value="<?= esc($search_query ?? '') ?>">
                                <button class="btn btn-primary" type="button"><i class="bi bi-search"></i></button>
                            </div>
                        </div>
                    </div>

                    <!-- Members list -->
                    <div class="row g-3">
                        <?php foreach ($members as $member): ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="card shadow-sm border-0">
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="flex-shrink-0">
                                            <a href="/namana/<?= esc($member['username']) ?>">
                                                <img src="<?= esc($member['avatar']) ?>" class="rounded-circle" width="50" height="50" alt="<?= esc($member['username']) ?>">
                                            </a>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-0">
                                                <a href="/namana/<?= esc($member['username']) ?>" class="text-decoration-none text-dark"><?= esc($member['username']) ?></a>
                                            </h6>
                                            <small class="text-muted"><?= esc($member['joined_date']) ?></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Pagination -->
                    <nav aria-label="Page navigation" class="mt-4">
                        <ul class="pagination justify-content-center">
                            <li class="page-item<?= $current_page === 1 ? ' disabled' : '' ?>">
                                <a class="page-link" href="/vondrona/<?= esc($group['slug']) ?>/members?page=<?= $current_page - 1 ?>">Heriny</a>
                            </li>
                            <?php for ($i = 1; $i <= min(5, $total_pages); $i++): ?>
                            <li class="page-item<?= $i === $current_page ? ' active' : '' ?>">
                                <a class="page-link" href="/vondrona/<?= esc($group['slug']) ?>/members?page=<?= $i ?>"><?= $i ?></a>
                            </li>
                            <?php endfor; ?>
                            <?php if ($total_pages > 5): ?>
                            <li class="page-item disabled"><span class="page-link">...</span></li>
                            <li class="page-item">
                                <a class="page-link" href="/vondrona/<?= esc($group['slug']) ?>/members?page=<?= $total_pages ?>"><?= $total_pages ?></a>
                            </li>
                            <?php endif; ?>
                            <li class="page-item<?= $current_page === $total_pages ? ' disabled' : '' ?>">
                                <a class="page-link" href="/vondrona/<?= esc($group['slug']) ?>/members?page=<?= $current_page + 1 ?>">Manaraka</a>
                            </li>
                            <li class="page-item<?= $current_page === $total_pages ? ' disabled' : '' ?>">
                                <a class="page-link" href="/vondrona/<?= esc($group['slug']) ?>/members?page=<?= $total_pages ?>">Farany</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
