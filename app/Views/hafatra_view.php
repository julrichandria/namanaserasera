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
                <span class="fw-semibold"><?= esc($message['subject']) ?></span>
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
                    <!-- Message header -->
                    <div class="d-flex align-items-start gap-3 mb-4 pb-4 border-bottom">
                        <div class="flex-shrink-0">
                            <a href="/namana/<?= esc($message['from']) ?>">
                                <img src="<?= esc($message['from_avatar']) ?>" class="rounded-circle" width="60" height="60" alt="<?= esc($message['from']) ?>">
                            </a>
                        </div>
                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <h5 class="mb-1">
                                        <a href="/namana/<?= esc($message['from']) ?>" class="text-decoration-none text-dark"><?= esc($message['from']) ?></a>
                                    <?php if ($message['unread']): ?>
                                    <span class="badge bg-danger ms-2">Vaovao</span>
                                    <?php endif; ?>
                                    </h5>
                                    <small class="text-muted"><?= esc($message['time']) ?></small>
                                </div>
                                <div class="d-flex gap-2">
                                    <a href="/hafatra" class="btn btn-outline-primary btn-sm rounded-pill">
                                        <i class="bi bi-arrow-left me-1"></i> Hiverina
                                    </a>
                                    <a href="/hafatra/hanoratra/<?= esc($message['from']) ?>" class="btn btn-primary btn-sm rounded-pill">
                                        <i class="bi bi-reply-fill me-1"></i> Valiana
                                    </a>
                                    <a href="/hafatra/delete/<?= esc($message['id']) ?>" class="btn btn-outline-danger btn-sm rounded-pill">
                                        <i class="bi bi-trash me-1"></i> Fafao
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Message subject -->
                    <h4 class="mb-4"><?= esc($message['subject']) ?></h4>

                    <!-- Message body -->
                    <div class="mb-4">
                        <div class="bg-light rounded-3 p-4">
                            <?= $message['body'] ?>
                        </div>
                    </div>

                    <!-- Replies -->
                    <?php if (!empty($message['replies'])): ?>
                    <div class="mt-4 pt-4 border-top">
                        <h5 class="card-title mb-4">Valin-kevitra (<?= count($message['replies']) ?>)</h5>
                        <?php foreach ($message['replies'] as $reply): ?>
                        <div class="d-flex gap-3 mb-4">
                            <div class="flex-shrink-0">
                                <img src="<?= esc($reply['avatar']) ?>" class="rounded-circle" width="40" height="40" alt="<?= esc($reply['from']) ?>">
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start mb-1">
                                    <div>
                                        <h6 class="mb-0">
                                            <a href="/namana/<?= esc($reply['from']) ?>" class="text-decoration-none text-dark"><?= esc($reply['from']) ?></a>
                                        </h6>
                                        <small class="text-muted"><?= esc($reply['time']) ?></small>
                                    </div>
                                </div>
                                <div class="mb-2"><?= $reply['body'] ?></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>

                    <!-- Reply form -->
                    <div class="mt-4 pt-4 border-top">
                        <form action="/hafatra/inbox/<?= esc($message['id']) ?>/reply" method="post">
                            <div class="d-flex gap-3">
                                <div class="flex-shrink-0">
                                    <img class='rounded-circle' src='<?= esc($current_user['avatar']) ?>' alt='Avatar' width="40" height="40">
                                </div>
                                <div class="flex-grow-1">
                                    <textarea name="body" class="form-control border-0 bg-light rounded-3" placeholder="Manorata valin-kevitra..." rows="3" style="resize: none;"></textarea>
                                </div>
                            </div>
                            <div class="mt-2 text-end">
                                <button class="btn btn-primary btn-sm rounded-pill px-4">
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
</div>

<?= $this->endSection() ?>
