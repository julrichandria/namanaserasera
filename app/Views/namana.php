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
                <span class="fw-semibold">Namana</span>
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
                    <h5 class="card-title mb-4">Lisitry ny mpikambana</h5>

                    <!-- Search -->
                    <div class="row mb-4">
                        <div class="col-md-4">
                            <div class="input-group">
                                <input type="text" class="form-control border-0 bg-light" placeholder="Tadiavo" name="q" value="<?= esc($search_query) ?>">
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
                                    <li><a class="dropdown-item<?= ($filter_type ?? '') === 'rehetra' ? ' active' : '' ?>" href="/namana?type=rehetra">rehetra</a></li>
                                    <li><a class="dropdown-item<?= ($filter_type ?? '') === 'nofidiko' ? ' active' : '' ?>" href="/namana?type=nofidiko">nofidiko</a></li>
                                    <li><a class="dropdown-item<?= ($filter_type ?? '') === 'nifidy' ? ' active' : '' ?>" href="/namana?type=nifidy">nifidy ahy</a></li>
                                    <li><a class="dropdown-item<?= ($filter_type ?? '') === 'nosakanako' ? ' active' : '' ?>" href="/namana?type=nosakanako">nosakanako</a></li>
                                    <li><a class="dropdown-item<?= ($filter_type ?? '') === 'nisakana' ? ' active' : '' ?>" href="/namana?type=nisakana">nisakana ahy</a></li>
                                    <li><a class="dropdown-item<?= ($filter_type ?? '') === 'nangataka' ? ' active' : '' ?>" href="/namana?type=nangataka">nangataka</a></li>
                                    <li><a class="dropdown-item<?= ($filter_type ?? '') === 'nangatahiko' ? ' active' : '' ?>" href="/namana?type=nangatahiko">nangatahiko</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm rounded-pill dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                    Lahy/Vavy <span class="badge bg-primary ms-1">misy hoe</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item<?= ($filter_gender ?? '') === 'lahy' ? ' active' : '' ?>" href="/namana?gender=lahy">lahy/vavy</a></li>
                                    <li><a class="dropdown-item<?= ($filter_gender ?? '') === 'Lehilahy' ? ' active' : '' ?>" href="/namana?gender=Lehilahy">Lehilahy</a></li>
                                    <li><a class="dropdown-item<?= ($filter_gender ?? '') === 'Vehivavy' ? ' active' : '' ?>" href="/namana?gender=Vehivavy">Vehivavy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Members list -->
                    <div class="row g-4">
                        <?php foreach ($members as $member): ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="card shadow-sm border-0 h-100">
                                <div class="card-body p-4 text-center">
                                    <a href="/namana/<?= esc($member['username']) ?>">
                                        <img src="<?= esc($member['avatar']) ?>" class="rounded-circle mb-3" width="100" height="100" alt="<?= esc($member['display_name']) ?>">
                                    </a>
                                    <h5 class="card-title mb-1">
                                        <a href="/namana/<?= esc($member['username']) ?>" class="text-decoration-none text-dark"><?= esc($member['display_name']) ?></a>
                                    </h5>
                                    <div class="text-muted small mb-3">
                                        <?= esc($member['gender']) ?><?php if ($member['location']): ?><br><?= esc($member['location']) ?><?php endif; ?><?php if ($member['age']): ?><br><?= $member['age'] ?> taona<?php endif; ?>
                                    </div>
                                    <?php if (!empty($member['bio'])): ?>
                                    <div class="text-muted small mb-3"><?= mb_strimwidth($member['bio'], 0, 100, '...') ?></div>
                                    <?php endif; ?>
                                    <div class="d-flex gap-2 justify-content-center flex-wrap">
                                        <a href="/namana/<?= esc($member['username']) ?>/about" class="btn btn-outline-primary btn-sm rounded-pill">mombamomba</a>
                                        <a href="/hafatra/hanoratra/<?= esc($member['username']) ?>" class="btn btn-primary btn-sm rounded-pill">hafatra</a>
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
                                <a class="page-link" href="/namana?page=<?= $current_page - 1 ?>">Heriny</a>
                            </li>
                            <?php for ($i = 1; $i <= min(5, $total_pages); $i++): ?>
                            <li class="page-item<?= $i === $current_page ? ' active' : '' ?>">
                                <a class="page-link" href="/namana?page=<?= $i ?>"><?= $i ?></a>
                            </li>
                            <?php endfor; ?>
                            <?php if ($total_pages > 5): ?>
                            <li class="page-item disabled"><span class="page-link">...</span></li>
                            <li class="page-item">
                                <a class="page-link" href="/namana?page=<?= $total_pages ?>"><?= $total_pages ?></a>
                            </li>
                            <?php endif; ?>
                            <li class="page-item<?= $current_page === $total_pages ? ' disabled' : '' ?>">
                                <a class="page-link" href="/namana?page=<?= $current_page + 1 ?>">Manaraka</a>
                            </li>
                            <li class="page-item<?= $current_page === $total_pages ? ' disabled' : '' ?>">
                                <a class="page-link" href="/namana?page=<?= $total_pages ?>">Farany</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
