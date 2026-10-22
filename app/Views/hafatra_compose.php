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
                <a href="/hafatra" class="text-decoration-none fw-semibold">Hafatra</a>
                <span class="text-muted mx-2">/</span>
                <span class="fw-semibold">Hanoratra hafatra</span>
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
                    <h5 class="card-title mb-4">Hanoratra hafatra</h5>

                    <form action="/hafatra/send" method="post">
                        <!-- To field -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Ho amin'ny</label>
                            <div class="input-group">
                                <input type="text" class="form-control border-0 bg-light" placeholder="Manoratra anarana..." name="to" value="<?= esc($to) ?>">
                                <button type="button" class="btn btn-primary" data-bs-toggle="dropdown">
                                    <i class="bi bi-people-fill"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <?php foreach ($users as $user): ?>
                                    <li><a class="dropdown-item" href="/hafatra/hanoratra/<?= esc($user['username']) ?>"><?= esc($user['username']) ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>

                        <!-- Subject field -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Lohahevitra</label>
                            <input type="text" class="form-control border-0 bg-light" placeholder="Soraty lohahevitra..." name="subject">
                        </div>

                        <!-- Message field -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Hafatra</label>
                            <textarea class="form-control border-0 bg-light" placeholder="Soraty hafatra..." name="body" rows="6" style="resize: none;"></textarea>
                        </div>

                        <!-- Submit button -->
                        <div class="text-end">
                            <a href="/hafatra" class="btn btn-outline-primary btn-sm rounded-pill me-2">
                                <i class="bi bi-arrow-left me-1"></i> Hiverina
                            </a>
                            <button type="submit" class="btn btn-primary btn-sm rounded-pill px-4">
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

<?= $this->endSection() ?>
