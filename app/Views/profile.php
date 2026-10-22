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
                <span class="fw-semibold">Ianao</span>
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
                            <img src="<?= esc($current_user['avatar']) ?>" class="rounded-circle mb-3 border" width="150" height="150" alt="Avatar">
                            <div class="d-flex gap-2 justify-content-center">
                                <a href="/profile/edit" class="btn btn-primary btn-sm rounded-pill">Hanova profil</a>
                                <a href="/profile/avatar" class="btn btn-outline-primary btn-sm rounded-pill">Hanova sary</a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <h4 class="mb-1"><?= esc($current_user['display_name']) ?></h4>
                            <h6 class="text-muted mb-3">@<?= esc($current_user['username']) ?></h6>
                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <div class="bg-light rounded-3 p-3">
                                        <p class="mb-1 small text-muted">Sokajy</p>
                                        <p class="fw-semibold"><?= esc($current_user['gender']) ?></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-light rounded-3 p-3">
                                        <p class="mb-1 small text-muted">Toerana</p>
                                        <p class="fw-semibold"><?= esc($current_user['location']) ?></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-light rounded-3 p-3">
                                        <p class="mb-1 small text-muted">Diavina</p>
                                        <p class="fw-semibold"><?= $current_user['age'] ?> taona</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-light rounded-3 p-3">
                                        <p class="mb-1 small text-muted">Namana</p>
                                        <p class="fw-semibold"><?= $current_user['friends_count'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="bg-light rounded-3 p-3">
                                        <p class="mb-1 small text-muted">Sary</p>
                                        <p class="fw-semibold"><?= $current_user['photos_count'] ?></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-light rounded-3 p-3">
                                        <p class="mb-1 small text-muted">Niditra tamin'ny</p>
                                        <p class="fw-semibold"><?= esc($current_user['joined_date']) ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 p-3 bg-light rounded-3">
                                <h5 class="card-title mb-2">Momba anao</h5>
                                <p class="mb-0"><?= nl2br(esc($current_user['bio'])) ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Profile tabs -->
            <div class="card shadow-sm border-0 mt-4">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <ul class="nav nav-tabs mb-0" id="profileTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="posts-tab" data-bs-toggle="tab" data-bs-target="#posts" type="button" role="tab">Eritreritra mandalo</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="photos-tab" data-bs-toggle="tab" data-bs-target="#photos" type="button" role="tab">Sary</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="friends-tab" data-bs-toggle="tab" data-bs-target="#friends" type="button" role="tab">Namana</button>
                            </li>
                        </ul>
                        <div class="d-flex gap-2">
                            <a href="/album/image/create" class="btn btn-outline-primary btn-sm rounded-pill">
                                <i class="bi bi-camera me-1"></i> Sary
                            </a>
                            <button class="btn btn-primary btn-sm rounded-pill" data-bs-toggle="modal" data-bs-target="#postModal">
                                <i class="bi bi-plus-lg me-1"></i> Post
                            </button>
                        </div>
                    </div>

                    <div class="tab-content" id="profileTabsContent">
                        <div class="tab-pane fade show active" id="posts" role="tabpanel">
                            <div class="text-center text-muted py-5">
                                <i class="bi bi-file-text fs-1 mb-3 d-block"></i>
                                <p>Tsy misy eritreritra mandalo</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="photos" role="tabpanel">
                            <div class="text-center text-muted py-5">
                                <i class="bi bi-images fs-1 mb-3 d-block"></i>
                                <p>Tsy misy sary</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="friends" role="tabpanel">
                            <div class="text-center text-muted py-5">
                                <i class="bi bi-people fs-1 mb-3 d-block"></i>
                                <p>Tsy misy namana</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Post Modal -->
<div class="modal fade" id="postModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-3">
            <div class="modal-header border-0">
                <h5 class="modal-title">Hamorona eritreritra vaovao</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
                    <div class="mb-3">
                        <textarea name="body" class="form-control border-0 bg-light" rows="5" placeholder="Inona no tianao hozaraina?" style="resize: none;"></textarea>
                    </div>
                    <div class="text-end">
                        <button class="btn btn-primary rounded-pill px-4" type="submit">
                            <i class="bi bi-send-fill me-2"></i> Zarao
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
