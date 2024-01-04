 // Show progress bar on AJAX start
 $(document).ajaxStart(function () {
    $('#progress-bar').css('width', '100%');
    document.querySelector('.modal-action').classList.add('hidden')
});

// Hide progress bar on AJAX complete
$(document).ajaxComplete(function () {
    $('#progress-bar').css('width', '0');
    document.querySelector('.modal-action').classList.remove('hidden')
});

// Show progress bar on page load
$(document).ready(function () {
    $(window).on('beforeunload', function () {
        $('#progress-bar').css('width', '100%');
        document.querySelector('.modal-action').classList.add('hidden')
        document.querySelector('.modal-actiondata').classList.add('hidden')
    });
});
