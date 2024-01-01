 // Show progress bar on AJAX start
 $(document).ajaxStart(function () {
    $('#progress-bar').css('width', '100%');
});

// Hide progress bar on AJAX complete
$(document).ajaxComplete(function () {
    $('#progress-bar').css('width', '0');
});

// Show progress bar on page load
$(document).ready(function () {
    $(window).on('beforeunload', function () {
        $('#progress-bar').css('width', '100%');
    });
});