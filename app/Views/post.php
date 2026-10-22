<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="container py-4" id="main">
    <!-- Breadcrumb -->
    <div class="bg-white rounded-3 shadow-sm p-3 mb-4">
        <small class="text-muted">Eto ianao :</small>
        <a href="/" class="text-decoration-none fw-semibold">Fandraisana</a>
        <span class="text-muted mx-2">/</span>
        <a href="/namana/<?= esc($post['username']) ?>" class="text-decoration-none fw-semibold"><?= esc($post['username']) ?></a>
        <span class="text-muted mx-2">/</span>
        <span class="fw-semibold">Post</span>
    </div>

    <div class="row g-4">
        <!-- Main Content -->
        <div class="col-lg-8">
            <!-- Post -->
            <div class="card shadow-sm mb-4 border-0">
                <div class="card-body p-4">
                    <div class="d-flex align-items-start">
                        <div class="flex-shrink-0 me-3">
                            <a href="/namana/<?= esc($post['username']) ?>">
                                <img class='rounded-circle' src='<?= esc($post['avatar']) ?>' alt='Avatar' width="50" height="50">
                            </a>
                        </div>
                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <div>
                                    <b><a href="/namana/<?= esc($post['username']) ?>" class="text-decoration-none text-dark"><?= esc($post['username']) ?></a></b>
                                    <small class="text-muted ms-2"><?= esc($post['created_at']) ?></small>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-link text-decoration-none p-0" data-bs-toggle="dropdown">
                                        <i class="bi bi-three-dots text-muted"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="/namana/<?= esc($post['username']) ?>/posts/<?= esc($post['post_id']) ?>/alert"><i class="bi bi-exclamation-triangle me-2"></i> Alazao</a></li>
                                        <li><a class="dropdown-item" href="/namana/<?= esc($post['username']) ?>/posts/<?= esc($post['post_id']) ?>"><i class="bi bi-link me-2"></i> Haka rohy</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mb-3"><?= $post['content'] ?></div>
                            <?php if (!empty($post['image'])): ?>
                            <div class='image mb-3'>
                                <img src="<?= esc($post['image']) ?>" class='img-fluid rounded-3' alt='Post image'>
                            </div>
                            <?php endif; ?>
                            <div class="rea d-flex gap-3 text-muted">
                                <a href="/namana/<?= esc($post['username']) ?>/posts/<?= esc($post['post_id']) ?>/like" class="posts like<?= $post['liked'] ? ' text-primary' : '' ?> text-decoration-none">
                                    <i class="bi bi-hand-thumbs-up-fill me-1"></i> Mankafy <span><?= $post['likes'] ?></span>
                                </a>
                                <a href="#comments" class="text-decoration-none">
                                    <i class="bi bi-chat me-1"></i> Hevitra <?= $post['comments'] ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Comments Section -->
            <div class="card shadow-sm border-0" id="comments">
                <div class="card-body p-4">
                    <h5 class="card-title mb-4">Hevitra (<?= count($comments_list) ?>)</h5>
                    
                    <?php foreach ($comments_list as $comment): ?>
                    <div class="d-flex mb-4 pb-3 border-bottom">
                        <div class="flex-shrink-0 me-3">
                            <a href="/namana/<?= esc($comment['username']) ?>">
                                <img class='rounded-circle' src='<?= esc($comment['avatar']) ?>' alt='Avatar' width="40" height="40">
                            </a>
                        </div>
                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-between align-items-start mb-1">
                                <div>
                                    <b><a href="/namana/<?= esc($comment['username']) ?>" class="text-decoration-none text-dark"><?= esc($comment['username']) ?></a></b>
                                    <small class="text-muted ms-2"><?= esc($comment['time']) ?></small>
                                </div>
                            </div>
                            <div class="mb-2"><?= $comment['content'] ?></div>
                            <div class="text-muted small">
                                <a href="#" class="text-decoration-none"><i class="bi bi-hand-thumbs-up me-1"></i> Mankafy <span><?= $comment['likes'] ?></span></a>
                                <a href="#" class="text-decoration-none ms-3"><i class="bi bi-reply me-1"></i> Valinay</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                    <!-- Add Comment Form -->
                    <div class="mt-4 pt-4 border-top">
                        <form action="/namana/<?= esc($post['username']) ?>/posts/<?= esc($post['post_id']) ?>/comments/" method="post">
                            <div class="d-flex gap-3">
                                <div class="flex-shrink-0">
                                    <img class='rounded-circle' src='<?= esc($current_user['avatar']) ?>' alt='Avatar' width="40" height="40">
                                </div>
                                <div class="flex-grow-1">
                                    <textarea name="comment" class="form-control border-0 bg-light rounded-3" placeholder="Hampiditra hevitra..." rows="2" style="resize: none;"></textarea>
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

        <!-- Sidebar -->
        <div class="col-lg-4">
            <!-- User Info -->
            <div class="card shadow-sm mb-4 border-0">
                <div class="card-body p-4 text-center">
                    <img class='rounded-circle mb-3' src='<?= esc($post['avatar']) ?>' alt='Avatar' width="80" height="80">
                    <h5 class="card-title mb-1"><?= esc($post['username']) ?></h5>
                    <div class="d-flex justify-content-center gap-2 mb-3 flex-wrap">
                        <a href="/hafatra/hanoratra/<?= esc($post['username']) ?>" class="btn btn-primary btn-sm rounded-pill">
                            <i class="bi bi-envelope-fill me-1"></i> Handefa hafatra
                        </a>
                        <a href="/profile/manokana/ask/<?= esc($post['username']) ?>" class="btn btn-outline-primary btn-sm rounded-pill">
                            <i class="bi bi-person-plus-fill me-1"></i> Angataho ho namana
                        </a>
                    </div>
                    <a href="/profile/ban/add/<?= esc($post['username']) ?>" class="btn btn-outline-danger btn-sm rounded-pill">
                        <i class="bi bi-x-circle me-1"></i> Saky
                    </a>
                </div>
            </div>

            <!-- Ad Space -->
            <div class="card shadow-sm border-0">
                <div class="card-body p-4">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2975745699979667" crossorigin="anonymous"></script>
                    <!-- namana_sidebar -->
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-2975745699979667" data-ad-slot="4833611700" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
