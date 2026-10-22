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
                <span class="fw-semibold">Fikarakarana</span>
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
                        <h5 class="card-title mb-0">Fikarakarana ny vondrona</h5>
                        <a href="/vondrona/<?= esc($group['slug']) ?>" class="btn btn-outline-primary btn-sm rounded-pill">
                            <i class="bi bi-arrow-left me-1"></i> Hiverina
                        </a>
                    </div>

                    <!-- Group settings -->
                    <div class="mb-4 pb-4 border-bottom">
                        <h6 class="card-title mb-3">Fampidirana ny vondrona</h6>
                        <form action="/vondrona/<?= esc($group['slug']) ?>/admin/settings" method="post">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label small">Anaran'ny vondrona</label>
                                    <input type="text" class="form-control" name="name" value="<?= esc($group['name']) ?>">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small">Faharavoana</label>
                                    <select class="form-select" name="privacy">
                                        <option value="public">Misokatra ho an'ny rehetra</option>
                                        <option value="private">Voasakana</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label small">Fomba fanazavana</label>
                                    <textarea class="form-control" name="description" rows="3">"Ame sensible s'abstenir". Ato no afahana milaza ny zavatra tsy sahinao lazaina ampahibe maso sy ny tsy azonao lazaina na aiza na aiza...</textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary btn-sm rounded-pill">
                                        <i class="bi bi-save me-2"></i> Hitahiry
                                    </button>
                                </div>
                            </div>
                            <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
                        </form>
                    </div>

                    <!-- Member management -->
                    <div>
                        <h6 class="card-title mb-3">Fikarakarana ny mpikambana</h6>

                        <!-- Search -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control border-0 bg-light" placeholder="Hitady mpikambana..." name="q" value="">
                                    <button class="btn btn-primary" type="button"><i class="bi bi-search"></i></button>
                                </div>
                            </div>
                        </div>

                        <!-- Members list -->
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>MPikambana</th>
                                        <th>Role</th>
                                        <th>Niditra</th>
                                        <th>Asa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($members as $member): ?>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="<?= esc($member['avatar']) ?>" class="rounded-circle" width="35" height="35" alt="<?= esc($member['username']) ?>">
                                                <a href="/namana/<?= esc($member['username']) ?>" class="text-decoration-none fw-semibold"><?= esc($member['username']) ?></a>
                                            </div>
                                        </td>
                                        <td>
                                            <select class="form-select form-select-sm" style="width: auto;">
                                                <option value="member" <?= $member['role'] === 'member' ? 'selected' : '' ?>>Mpikambana</option>
                                                <option value="moderator" <?= $member['role'] === 'moderator' ? 'selected' : '' ?>>Mpitarika</option>
                                                <option value="admin" <?= $member['role'] === 'admin' ? 'selected' : '' ?>>Admin</option>
                                            </select>
                                        </td>
                                        <td><?= esc($member['joined_date']) ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-outline-danger btn-sm rounded-pill">Sazy</button>
                                                <button class="btn btn-outline-secondary btn-sm rounded-pill">Avoaka</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
