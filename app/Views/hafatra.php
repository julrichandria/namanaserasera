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
                <span class="fw-semibold">Hafatra</span>
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
                        <h5 class="card-title mb-0">Hafatra</h5>
                        <a href="/hafatra/hanoratra" class="btn btn-primary btn-sm rounded-pill">
                            <i class="bi bi-pencil-fill me-2"></i> Hanoratra hafatra
                        </a>
                    </div>

                    <!-- Search -->
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" class="form-control border-0 bg-light" placeholder="Tadiavo hafatra..." name="q" value="<?= esc($search_query ?? '') ?>">
                                <button class="btn btn-primary" type="button"><i class="bi bi-search"></i></button>
                            </div>
                        </div>
                    </div>

                    <!-- Tabs -->
                    <ul class="nav nav-tabs mb-4" id="hafatraTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link<?= $current_tab === 'inbox' ? ' active' : '' ?>" id="inbox-tab" data-bs-toggle="tab" data-bs-target="#inbox" type="button" role="tab">
                                Hafatra voaray
                                <?php if ($current_tab === 'inbox'): ?>
                                <span class="badge bg-danger ms-2">Tsy voavaky</span>
                                <?php endif; ?>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link<?= $current_tab === 'outbox' ? ' active' : '' ?>" id="outbox-tab" data-bs-toggle="tab" data-bs-target="#outbox" type="button" role="tab">Hafatra lasa</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link<?= $current_tab === 'archives' ? ' active' : '' ?>" id="archives-tab" data-bs-toggle="tab" data-bs-target="#archives" type="button" role="tab">Tahiry</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link<?= $current_tab === 'draft' ? ' active' : '' ?>" id="draft-tab" data-bs-toggle="tab" data-bs-target="#draft" type="button" role="tab">Vakiraoka</button>
                        </li>
                    </ul>

                    <!-- Tab content -->
                    <div class="tab-content" id="hafatraTabsContent">
                        <!-- Inbox -->
                        <div class="tab-pane fade<?= $current_tab === 'inbox' ? ' show active' : '' ?>" id="inbox" role="tabpanel">
                            <?php if (empty($messages)): ?>
                            <div class="text-center text-muted py-5">
                                <i class="bi bi-inbox fs-1 mb-3 d-block"></i>
                                <p>Tsy misy hafatra</p>
                            </div>
                            <?php else: ?>
                            <div class="row g-3">
                                <?php foreach ($messages as $message): ?>
                                <div class="col-12">
                                    <div class="card shadow-sm border-0<?= $message['unread'] ? ' border-start border-4 border-primary' : '' ?><?= $message['unread'] ? ' bg-light' : '' ?>">
                                        <div class="card-body p-3">
                                            <div class="d-flex align-items-start gap-3">
                                                <div class="flex-shrink-0">
                                                    <a href="/hafatra/inbox/<?= esc($message['id']) ?>">
                                                        <img src="<?= esc($message['from_avatar']) ?>" class="rounded-circle" width="50" height="50" alt="<?= esc($message['from']) ?>">
                                                    </a>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                                        <div>
                                                            <h6 class="mb-0">
                                                                <a href="/hafatra/inbox/<?= esc($message['id']) ?>" class="text-decoration-none text-dark"><?= esc($message['from']) ?></a>
                                                                <?php if ($message['unread']): ?>
                                                                <span class="badge bg-danger ms-2">Vaovao</span>
                                                                <?php endif; ?>
                                                            </h6>
                                                            <small class="text-muted"><?= esc($message['time']) ?></small>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <a href="/hafatra/inbox/<?= esc($message['id']) ?>" class="text-decoration-none text-dark fw-semibold">
                                                            <?= esc($message['subject']) ?>
                                                        </a>
                                                    </div>
                                                    <div class="d-flex gap-2 flex-wrap">
                                                        <a href="/hafatra/inbox/<?= esc($message['id']) ?>" class="btn btn-outline-primary btn-sm rounded-pill">Hamaky</a>
                                                        <a href="/hafatra/inbox/<?= esc($message['id']) ?>" class="btn btn-primary btn-sm rounded-pill">Valiana</a>
                                                        <a href="/hafatra/delete/<?= esc($message['id']) ?>" class="btn btn-outline-danger btn-sm rounded-pill">Fafao</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>

                            <!-- Pagination -->
                            <?php if ($total_pages > 1): ?>
                            <nav aria-label="Page navigation" class="mt-4">
                                <ul class="pagination justify-content-center">
                                    <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                    <li class="page-item<?= $i === $current_page ? ' active' : '' ?>">
                                        <a class="page-link" href="/hafatra?page=<?= $i ?>"><?= $i ?></a>
                                    </li>
                                    <?php endfor; ?>
                                </ul>
                            </nav>
                            <?php endif; ?>
                            <?php endif; ?>
                        </div>

                        <!-- Outbox -->
                        <div class="tab-pane fade<?= $current_tab === 'outbox' ? ' show active' : '' ?>" id="outbox" role="tabpanel">
                            <div class="text-center text-muted py-5">
                                <i class="bi bi-send fs-1 mb-3 d-block"></i>
                                <p>Tsy misy hafatra lasa</p>
                            </div>
                        </div>

                        <!-- Archives -->
                        <div class="tab-pane fade<?= $current_tab === 'archives' ? ' show active' : '' ?>" id="archives" role="tabpanel">
                            <div class="text-center text-muted py-5">
                                <i class="bi bi-archive fs-1 mb-3 d-block"></i>
                                <p>Tsy misy hafatra tahiry</p>
                            </div>
                        </div>

                        <!-- Draft -->
                        <div class="tab-pane fade<?= $current_tab === 'draft' ? ' show active' : '' ?>" id="draft" role="tabpanel">
                            <div class="text-center text-muted py-5">
                                <i class="bi bi-file-ear-text fs-1 mb-3 d-block"></i>
                                <p>Tsy misy vakiraoka</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
