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
                <span class="fw-semibold">Sary</span>
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
                        <h5 class="card-title mb-0">Sary rehetra</h5>
                        <div class="d-flex gap-2">
                            <a href="/album/image/create" class="btn btn-primary btn-sm rounded-pill">
                                <i class="bi bi-camera-fill me-2"></i> Hampiditra sary
                            </a>
                            <a href="/album/ampidiro" class="btn btn-outline-primary btn-sm rounded-pill">
                                <i class="bi bi-folder-fill me-2"></i> Hanokatra tahirintsary
                            </a>
                        </div>
                    </div>

                    <!-- Recent photos grid -->
                    <div class="row g-3">
                        <?php foreach ($recent_photos as $photo): ?>
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="photo-card position-relative overflow-hidden rounded-3 shadow-sm">
                                <a href="/album/photo/<?= esc($photo['id']) ?>" class="text-decoration-none">
                                    <img src="<?= esc($photo['url']) ?>" class="w-100 h-100 object-fit-cover" alt="<?= esc($photo['title']) ?>" style="aspect-ratio: 1/1;">
                                    <div class="photo-overlay position-absolute bottom-0 start-0 end-0 p-3">
                                        <small class="text-white fw-semibold"><?= esc($photo['user']) ?></small>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Pagination -->
                    <nav aria-label="Page navigation" class="mt-4">
                        <ul class="pagination justify-content-center">
                            <li class="page-item<?= $current_page === 1 ? ' disabled' : '' ?>">
                                <a class="page-link" href="/album?page=<?= $current_page - 1 ?>">Heriny</a>
                            </li>
                            <?php for ($i = 1; $i <= min(5, $total_pages); $i++): ?>
                            <li class="page-item<?= $i === $current_page ? ' active' : '' ?>">
                                <a class="page-link" href="/album?page=<?= $i ?>"><?= $i ?></a>
                            </li>
                            <?php endfor; ?>
                            <?php if ($total_pages > 5): ?>
                            <li class="page-item disabled"><span class="page-link">...</span></li>
                            <li class="page-item">
                                <a class="page-link" href="/album?page=<?= $total_pages ?>"><?= $total_pages ?></a>
                            </li>
                            <?php endif; ?>
                            <li class="page-item<?= $current_page === $total_pages ? ' disabled' : '' ?>">
                                <a class="page-link" href="/album?page=<?= $current_page + 1 ?>">Manaraka</a>
                            </li>
                            <li class="page-item<?= $current_page === $total_pages ? ' disabled' : '' ?>">
                                <a class="page-link" href="/album?page=<?= $total_pages ?>">Farany</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- Albums section -->
            <div class="card shadow-sm border-0 mt-4">
                <div class="card-body p-4">
                    <h5 class="card-title mb-4">Tahirintsary</h5>
                    <div class="row g-3">
                        <?php foreach ($albums as $album): ?>
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="photo-card position-relative overflow-hidden rounded-3 shadow-sm">
                                <a href="/album/<?= esc($album['id']) ?>" class="text-decoration-none">
                                    <img src="<?= esc($album['cover']) ?>" class="w-100 h-100 object-fit-cover" alt="<?= esc($album['name']) ?>" style="aspect-ratio: 1/1;">
                                    <div class="photo-overlay position-absolute bottom-0 start-0 end-0 p-3">
                                        <small class="text-white fw-semibold"><?= esc($album['name']) ?></small>
                                        <br>
                                        <small class="text-white-50"><?= $album['photo_count'] ?> sary - <?= esc($album['user']) ?></small>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
