$(function () {
    // Add form-control class to input elements
    $('input.input-text').addClass("form-control");
    $('input.input-submit').addClass("btn btn-default");

    // Auto-resize textarea
    $('.gwp textarea').on('input', function() {
        this.parentNode.dataset.replicatedValue = this.value;
    });

    // Submit comment on Enter key (without Shift)
    $('.hpb .cfm textarea').keypress(function(e) {
        if (e.which == 13 && !e.shiftKey) {
            this.form.submit();
            return false;
        }
    });

    // Add photo button click handler
    $('#add-photo').click(function() {
        $('#drag-and-drop-zone').show();
        $('#add-photo').hide();
    });

    // Upload close button
    $('.upload-close').click(function() {
        $('#upload-message').html(rollback);
        $('#drag-and-drop-zone').hide();
        $('#add-photo').show();
    });

    // Photo upload button for vondrona
    $('#addPhotoBtn').click(function() {
        $('#photoInput').click();
    });

    // Handle file selection
    $('#photoInput').change(function() {
        if (this.files && this.files[0]) {
            const fileName = this.files[0].name;
            $('#addPhotoBtn').html('<i class="bi bi-check me-1"></i> ' + fileName);
        }
    });
});
