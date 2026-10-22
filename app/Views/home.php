<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="container py-4" id="main">
    <!-- Breadcrumb -->
    <div class="bg-white rounded-3 shadow-sm p-3 mb-4">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <small class="text-muted">Eto ianao :</small>
                <a href="/" class="text-decoration-none fw-semibold">Fandraisana</a>
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
        <!-- Main Content -->
        <div class="col-lg-8">
            <!-- Post Creation Form -->
            <div class="card shadow-sm mb-4 border-0">
                <div class="card-body p-4">
                    <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                            <a href="/namana/<?= esc($current_user['username']) ?>">
                                <img class='rounded-circle' src='<?= esc($current_user['avatar']) ?>' alt='Avatar' width="50" height="50">
                            </a>
                        </div>
                        <div class="flex-grow-1">
                            <form class="edit" action="/" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
                                <div class="gwp mb-3">
                                    <textarea name="body" class="autoresize form-control border-0 bg-light" rows="3" placeholder="Inona no tianao hozaraina?" style="resize: none;"></textarea>
                                </div>
                                <div id="drag-and-drop-zone" class="dm-uploader p-4 text-center rounded-3 bg-light mb-3" style="display: none;">
                                    <a class="btn-close btn upload-close position-absolute top-0 end-0 m-2"></a>
                                    <div id="upload-message">
                                        <h5 id="upload-label" class="text-muted mb-3">Agorisao maketo ny sary</h5>
                                        <div id="upload-button" class="btn btn-primary btn-sm mb-3">
                                            <span>Na alaivo ao amin'ny ordi</span>
                                            <input type="file" name='image' title="Click to add Files" multiple>
                                        </div>
                                    </div>
                                </div>
                                <div class="btnset d-flex justify-content-between align-items-center">
                                    <a id="add-photo" class="btn btn-outline-primary">
                                        <i class="bi bi-image me-2"></i>Sary
                                    </a>
                                    <button class="btn btn-primary" type="submit" value="Submit">
                                        <i class="bi bi-send-fill me-2"></i> Zarao
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Posts Loop -->
            <?php foreach ($posts as $post): ?>
            <div class="card shadow-sm mb-4 border-0">
                <div class="card-body p-4">
                    <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                            <a href="/namana/<?= esc($post['username']) ?>">
                                <img class='rounded-circle' src='<?= esc($post['avatar']) ?>' alt='Avatar' width="50" height="50">
                            </a>
                        </div>
                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <div>
                                    <b><a href="/namana/<?= esc($post['username']) ?>" class="text-decoration-none text-dark"><?= esc($post['username']) ?></a></b>
                                    <small class="text-muted ms-2">(<a href="/namana/<?= esc($post['username']) ?>/posts/<?= esc($post['post_id']) ?>" class="text-decoration-none text-muted"><?= esc($post['time']) ?></a>)</small>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-link text-decoration-none p-0" data-bs-toggle="dropdown">
                                        <i class="bi bi-three-dots"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="/namana/<?= esc($post['username']) ?>/posts/<?= esc($post['post_id']) ?>/alert"><i class="bi bi-exclamation-triangle me-2"></i> Alazao</a></li>
                                        <li><a class="dropdown-item" href="/namana/<?= esc($post['username']) ?>/posts/<?= esc($post['post_id']) ?>"><i class="bi bi-link me-2"></i> Haka rohy</a></li>
                                    </ul>
                                </div>
                            </div>
                            <a href="/namana/<?= esc($post['username']) ?>/posts/<?= esc($post['post_id']) ?>" class="text-decoration-none text-dark">
                                <div class="mb-3"><?= $post['content'] ?></div>
                            </a>
                            <?php if (!empty($post['image'])): ?>
                            <div class='image mb-3'>
                                <a href="/namana/<?= esc($post['username']) ?>/posts/<?= esc($post['post_id']) ?>">
                                    <img src="<?= esc($post['image']) ?>" class='img-fluid rounded-3' alt='Post image'>
                                </a>
                            </div>
                            <?php endif; ?>
                            <div class="rea d-flex gap-3 text-muted">
                                <a href="/namana/<?= esc($post['username']) ?>/posts/<?= esc($post['post_id']) ?>/like" id="<?= esc($post['post_id']) ?>" class="posts like<?= $post['liked'] ? ' text-primary' : '' ?> text-decoration-none">
                                    <i class="bi bi-hand-thumbs-up-fill me-1"></i> Mankafy <span><?= $post['likes'] ?></span>
                                </a>
                                <a href="/namana/<?= esc($post['username']) ?>/posts/<?= esc($post['post_id']) ?>#comments" class="text-decoration-none">
                                    <i class="bi bi-chat me-1"></i> Hevitra <?= $post['comments'] ?>
                                </a>
                            </div>
                            <div class="cfm mt-3 pt-3 border-top">
                                <form action="/namana/<?= esc($post['username']) ?>/posts/<?= esc($post['post_id']) ?>/comments/" method="post">
                                    <div class="gwp">
                                        <textarea name="comment" class="form-control border-0 bg-light" placeholder="Hampiditra hevitra..." rows="1" style="resize: none;"></textarea>
                                    </div>
                                    <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

            <div class="text-center py-3">
                <a href="/posts?page=2" class="btn btn-outline-primary rounded-pill px-4">tohiny...</a>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <!-- Recent Photos -->
            <div class="card shadow-sm mb-4 border-0">
                <div class="card-body p-4">
                    <h5 class="card-title mb-4">Sary notsongaina</h5>
                    <div class="row g-2">
                        <?php foreach ($recent_photos as $photo): ?>
                        <div class="col-4 mb-2">
                            <a href="<?= esc($photo['url']) ?>" class="d-block">
                                <img class="img-fluid rounded-2" src="<?= esc($photo['thumb']) ?>" alt='Photo'>
                            </a>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="mt-4 d-flex gap-2">
                        <a class="btn btn-primary flex-grow-1" href="/album">
                            <i class="bi bi-images me-2"></i> Sary rehetra
                        </a>
                        <a class="btn btn-outline-primary" href="/album/image/create">
                            <i class="bi bi-camera me-2"></i> Hampiditra
                        </a>
                    </div>
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

<script>
$(function() {
    'use strict';
    var rollback = $('#upload-message').html();
    var sid, aid, hash;

    $('#drag-and-drop-zone').dmUploader({
        url: '/ajax/sary/ampidiro',
        extraData: {
            '<?= csrf_token() ?>': '<?= $csrf_token ?>'
        },
        fieldName: 'image',
        maxFileSize: 100000000,
        extFilter: ["jpg", "jpeg", "png", "gif"],
        onDragEnter: function() {
            this.addClass('active');
        },
        onDragLeave: function() {
            this.removeClass('active');
        },
        onNewFile: function(id, file) {
            ui_multi_add_file(id, file);
        },
        onBeforeUpload: function(id) {
            ui_multi_update_file_progress(id, 0, '', true);
        },
        onFileSizeError: function(file) {
            var err = ('<div class="alert alert-danger mt-3">File \'' + file.name + '\' cannot be added: size excess limit</div>');
            $('#upload-message').html(err);
        },
        onUploadError: function(id, xhr, status, message) {
            var err = ('<div class="alert alert-danger mt-3">Error during upload: ' + message + '</div>');
            $('#upload-message').html(err);
        },
        onFileTypeError: function(file) {
            var err = ('<div class="alert alert-danger mt-3">File \'' + file.name + '\' cannot be added: must be an image (type error)</div>');
            $('#upload-message').html(err);
        },
        onUploadProgress: function(id, percent) {
            ui_multi_update_file_progress(id, percent);
        },
        onUploadSuccess: function(id, data) {
            console.log('Server Response for file #' + id + ': ' + JSON.stringify(data));
            if (data.o !== undefined) {
                var img = $('<img>');
                img.attr('src', data.o);
                img.addClass('img-fluid rounded-3');
                $('#upload-message').html(img);
                $('#upload-message').append('<input type="hidden" name="type" value="i">')
                    .append('<input type="hidden" id="sid" name="sid" value="' + data.sid + '">')
                    .append('<input type="hidden" id="aid" name="aid" value="' + data.aid + '">')
                    .append('<input type="hidden" id="hash" name="hash" value="' + data.hash + '">');
                sid = data.sid;
                aid = data.aid;
                hash = data.hash;
            } else {
                var error = '<div class="text-danger">Upload failed</div>';
                $('#upload-message').append(error).append(rollback);
            }
        }
    });

    function ui_multi_add_file(id, file) {
        var template = '<div class="progress mb-2"><div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"> </div></div>';
        template = $(template);
        template.prop('id', 'uploaderFile' + id);
        template.data('file-id', id);
        $('#upload-message').html(template);
    }

    function ui_multi_update_file_progress(id, percent, color, active) {
        color = (typeof color === 'undefined' ? false : color);
        active = (typeof active === 'undefined' ? true : active);

        var bar = $('#uploaderFile' + id).find('div.progress-bar');
        bar.width(percent + '%').attr('aria-valuenow', percent);
        bar.toggleClass('progress-bar-striped progress-bar-animated', active);

        if (percent === 0) {
            bar.html('');
        } else {
            bar.html(percent + '%');
        }

        if (color !== false) {
            bar.removeClass('bg-success bg-info bg-warning bg-danger');
            bar.addClass('bg-' + color);
        }
    }
});
</script>

<?= $this->endSection() ?>
