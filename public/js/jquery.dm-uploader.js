/*!
 * jQuery Drag & Drop Uploader
 * Simple drag and drop file upload plugin
 */

(function($) {
    $.fn.dmUploader = function(options) {
        var settings = $.extend({
            url: '',
            fieldName: 'file',
            extraData: {},
            maxFileSize: 0,
            extFilter: [],
            onDragEnter: null,
            onDragLeave: null,
            onNewFile: null,
            onBeforeUpload: null,
            onUploadProgress: null,
            onUploadSuccess: null,
            onUploadError: null,
            onFileSizeError: null,
            onFileTypeError: null
        }, options);

        return this.each(function() {
            var $element = $(this);
            var dragCounter = 0;

            // Drag and drop events
            $element.on('dragenter', function(e) {
                e.preventDefault();
                e.stopPropagation();
                dragCounter++;
                if (typeof settings.onDragEnter === 'function') {
                    settings.onDragEnter.call($element);
                }
            });

            $element.on('dragleave', function(e) {
                e.preventDefault();
                e.stopPropagation();
                dragCounter--;
                if (dragCounter === 0 && typeof settings.onDragLeave === 'function') {
                    settings.onDragLeave.call($element);
                }
            });

            $element.on('dragover', function(e) {
                e.preventDefault();
                e.stopPropagation();
            });

            $element.on('drop', function(e) {
                e.preventDefault();
                e.stopPropagation();
                dragCounter = 0;

                var files = e.originalEvent.dataTransfer.files;
                handleFiles(files);
            });

            // File input change
            $element.find('input[type="file"]').on('change', function(e) {
                var files = this.files;
                handleFiles(files);
            });

            function handleFiles(files) {
                for (var i = 0; i < files.length; i++) {
                    var file = files[i];
                    var fileId = 'file_' + Date.now() + '_' + i;

                    // Check file size
                    if (settings.maxFileSize > 0 && file.size > settings.maxFileSize) {
                        if (typeof settings.onFileSizeError === 'function') {
                            settings.onFileSizeError.call($element, file);
                        }
                        continue;
                    }

                    // Check file extension
                    if (settings.extFilter.length > 0) {
                        var ext = file.name.split('.').pop().toLowerCase();
                        if (settings.extFilter.indexOf(ext) === -1) {
                            if (typeof settings.onFileTypeError === 'function') {
                                settings.onFileTypeError.call($element, file);
                            }
                            continue;
                        }
                    }

                    if (typeof settings.onNewFile === 'function') {
                        settings.onNewFile.call($element, fileId, file);
                    }

                    uploadFile(fileId, file);
                }
            }

            function uploadFile(fileId, file) {
                var formData = new FormData();
                formData.append(settings.fieldName, file);

                // Add extra data
                for (var key in settings.extraData) {
                    formData.append(key, settings.extraData[key]);
                }

                if (typeof settings.onBeforeUpload === 'function') {
                    settings.onBeforeUpload.call($element, fileId);
                }

                $.ajax({
                    url: settings.url,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    xhr: function() {
                        var xhr = new window.XMLHttpRequest();
                        xhr.upload.addEventListener('progress', function(e) {
                            if (e.lengthComputable) {
                                var percent = Math.round((e.loaded / e.total) * 100);
                                if (typeof settings.onUploadProgress === 'function') {
                                    settings.onUploadProgress.call($element, fileId, percent);
                                }
                            }
                        }, false);
                        return xhr;
                    },
                    success: function(data) {
                        if (typeof settings.onUploadSuccess === 'function') {
                            settings.onUploadSuccess.call($element, fileId, data);
                        }
                    },
                    error: function(xhr, status, message) {
                        if (typeof settings.onUploadError === 'function') {
                            settings.onUploadError.call($element, fileId, xhr, status, message);
                        }
                    }
                });
            }
        });
    };
})(jQuery);
