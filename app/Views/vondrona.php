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
                <span class="fw-semibold">Vondrona</span>
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
                        <h5 class="card-title mb-0">Lisitry ny vondrona</h5>
                        <a href="/vondrona/hanokatra" class="btn btn-primary btn-sm rounded-pill">
                            <i class="bi bi-people-fill me-2"></i> Hanangana vondrona
                        </a>
                    </div>

                    <!-- Search -->
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" class="form-control border-0 bg-light" placeholder="Hitady vondrona..." name="q" value="<?= esc($search_query ?? '') ?>">
                                <button class="btn btn-primary" type="button"><i class="bi bi-search"></i></button>
                            </div>
                        </div>
                    </div>

                    <!-- Filters -->
                    <div class="row mb-4">
                        <div class="col-md-6 mb-2 mb-md-0">
                            <div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm rounded-pill dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                    Karazana <span class="badge bg-primary ms-1"><?= $filter_type ?? 'rehetra' ?></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item<?= ($filter_type ?? '') === 'all' ? ' active' : '' ?>" href="/vondrona?type=all">Vondrona rehetra</a></li>
                                    <li><a class="dropdown-item<?= ($filter_type ?? '') === 'my' ? ' active' : '' ?>" href="/vondrona?type=my">Vondrona natsangako</a></li>
                                    <li><a class="dropdown-item<?= ($filter_type ?? '') === 'joined' ? ' active' : '' ?>" href="/vondrona?type=joined">Vondrona nidirako</a></li>
                                    <li><a class="dropdown-item<?= ($filter_type ?? '') === 'open' ? ' active' : '' ?>" href="/vondrona?type=open">Vondrona misokatra</a></li>
                                    <li><a class="dropdown-item<?= ($filter_type ?? '') === 'closed' ? ' active' : '' ?>" href="/vondrona?type=closed">Vondrona voasivana</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm rounded-pill dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                    Filaharana <span class="badge bg-primary ms-1"><?= $sort_by ?? 'name' ?></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item<?= ($sort_by ?? '') === 'name' ? ' active' : '' ?>" href="/vondrona?sort=name">anaran'ny vondrona</a></li>
                                    <li><a class="dropdown-item<?= ($sort_by ?? '') === 'date' ? ' active' : '' ?>" href="/vondrona?sort=date">Daty niforonany</a></li>
                                    <li><a class="dropdown-item<?= ($sort_by ?? '') === 'members' ? ' active' : '' ?>" href="/vondrona?sort=members">Isan'ny mpikambana</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Groups list -->
                    <div class="row g-3">
                        <?php foreach ($groups as $group): ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="card shadow-sm border-0 h-100">
                                <div class="card-body p-3">
                                    <h6 class="card-title mb-2">
                                        <a href="/vondrona/<?= esc($group['slug']) ?>" class="text-decoration-none text-dark">
                                            <?= esc($group['name']) ?>
                                        </a>
                                        <span class="badge bg-secondary ms-2"><?= $group['member_count'] ?></span>
                                    </h6>
                                    <div class="text-muted small mb-3">
                                        <?= mb_strimwidth($group['description'], 0, 100, '...') ?>
                                    </div>
                                    <div class="d-flex gap-2 flex-wrap">
                                        <a href="/vondrona/<?= esc($group['slug']) ?>" class="btn btn-outline-primary btn-sm rounded-pill">Hamaky</a>
                                        <a href="/vondrona/join/<?= esc($group['slug']) ?>" class="btn btn-primary btn-sm rounded-pill">Midira</a>
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
                                <a class="page-link" href="/vondrona?page=<?= $current_page - 1 ?>">Heriny</a>
                            </li>
                            <?php for ($i = 1; $i <= min(5, $total_pages); $i++): ?>
                            <li class="page-item<?= $i === $current_page ? ' active' : '' ?>">
                                <a class="page-link" href="/vondrona?page=<?= $i ?>"><?= $i ?></a>
                            </li>
                            <?php endfor; ?>
                            <?php if ($total_pages > 5): ?>
                            <li class="page-item disabled"><span class="page-link">...</span></li>
                            <li class="page-item">
                                <a class="page-link" href="/vondrona?page=<?= $total_pages ?>"><?= $total_pages ?></a>
                            </li>
                            <?php endif; ?>
                            <li class="page-item<?= $current_page === $total_pages ? ' disabled' : '' ?>">
                                <a class="page-link" href="/vondrona?page=<?= $current_page + 1 ?>">Manaraka</a>
                            </li>
                            <li class="page-item<?= $current_page === $total_pages ? ' disabled' : '' ?>">
                                <a class="page-link" href="/vondrona?page=<?= $total_pages ?>">Farany</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
