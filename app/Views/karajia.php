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
                <span class="fw-semibold">Karajia</span>
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

    <div class="row g-0">
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-body p-0">
                    <div class="row g-0">
                        <!-- Rooms sidebar -->
                        <div class="col-md-2 border-end bg-light">
                            <div class="p-4">
                                <h6 class="mb-3 fw-semibold text-muted small">Efitra</h6>
                                <div class="list-group list-group-flush">
                                    <?php foreach ($rooms as $room): ?>
                                    <a href="/karajia?room=<?= esc($room['id']) ?>" class="list-group-item list-group-item-action border-0 rounded-3 mb-2<?= $current_room === $room['id'] ? ' active' : '' ?>">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="fw-semibold"><?= esc($room['name']) ?></span>
                                            <?php if ($room['unread_count'] > 0): ?>
                                            <span class="badge rounded-pill" style="background-color: var(--primary-color);"><?= $room['unread_count'] ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </a>
                                    <?php endforeach; ?>
                                </div>
                                <div class="mt-4 pt-4 border-top">
                                    <div class="text-center text-muted small">
                                        <span class="badge bg-light text-muted">Toro-lalana: Soraty `/help`</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Chat area -->
                        <div class="col-md-8">
                            <div class="d-flex flex-column" style="height: 600px;">
                                <!-- Chat header -->
                                <div class="p-4 border-bottom">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="mb-0 fw-semibold">
                                                # <?= esc($current_room_name) ?>
                                            </h6>
                                            <small class="text-muted">
                                                Lohateny: <?= esc($current_room_topic) ?>
                                            </small>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn btn-link text-muted p-0" type="button" data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots-vertical fs-5"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#">Mombamomba</a></li>
                                                <li><a class="dropdown-item" href="#">Sazy ny mpikambana</a></li>
                                                <li><a class="dropdown-item text-danger" href="#">Avoaka</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Messages -->
                                <div class="flex-grow-1 overflow-auto p-4" id="chat-messages">
                                    <?php foreach ($messages as $message): ?>
                                    <?php if ($message['is_system']): ?>
                                    <div class="text-center text-muted small mb-3">
                                        <span class="badge bg-light text-muted"><?= esc($message['message']) ?></span>
                                    </div>
                                    <?php else: ?>
                                    <div class="mb-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="badge text-white" style="width: 30px; background-color: var(--primary-color);"><?= esc($message['user_initials']) ?></span>
                                            <strong class="fw-semibold"><?= esc($message['username']) ?></strong>
                                            <?php if ($message['time']): ?>
                                            <small class="text-muted"><?= esc($message['time']) ?></small>
                                            <?php endif; ?>
                                        </div>
                                        <div style="margin-left: 2.5rem;"><?= esc($message['message']) ?></div>
                                    </div>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>

                                <!-- Message input -->
                                <div class="p-4 border-top bg-light">
                                    <form id="chat-form">
                                        <div class="input-group">
                                            <input type="text" class="form-control border-0" placeholder="Soraty hafatra..." id="message-input">
                                            <button type="submit" class="btn btn-primary rounded-pill px-4">
                                                <i class="bi bi-send-fill"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Users sidebar -->
                        <div class="col-md-2 border-start bg-light">
                            <div class="p-4">
                                <h6 class="mb-3 fw-semibold text-muted small">Mpikarajia</h6>
                                <div class="list-group list-group-flush">
                                    <?php foreach ($users as $user): ?>
                                    <a href="/namana/<?= esc($user['username']) ?>" class="list-group-item list-group-item-action border-0 rounded-3 mb-2">
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="badge text-white" style="width: 30px; background-color: var(--primary-color);"><?= esc($user['initials']) ?></span>
                                            <span class="fw-semibold"><?= esc($user['username']) ?></span>
                                            <?php if ($user['is_current']): ?>
                                            <span class="text-muted small">(ianao)</span>
                                            <?php endif; ?>
                                        </div>
                                    </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    // Auto-scroll to bottom
    var chatMessages = document.getElementById('chat-messages');
    chatMessages.scrollTop = chatMessages.scrollHeight;

    // Handle message submission
    $('#chat-form').on('submit', function(e) {
        e.preventDefault();
        var message = $('#message-input').val().trim();
        if (message) {
            // Add message to chat (in real app, this would be sent to server)
            var initials = '<?= $current_user['initials'] ?>';
            var username = '<?= $current_user['username'] ?>';

            var html = '<div class="mb-2">' +
                '<div class="d-flex align-items-center gap-2">' +
                '<span class="badge text-white" style="width: 30px; background-color: var(--primary-color);">' + initials + '</span>' +
                '<strong class="fw-semibold">' + username + '</strong>' +
                '<small class="text-muted">Azo</small>' +
                '</div>' +
                '<div style="margin-left: 2.5rem;">' + message + '</div>' +
                '</div>';

            $('#chat-messages').append(html);
            $('#message-input').val('');
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }
    });
});
</script>

<?= $this->endSection() ?>
