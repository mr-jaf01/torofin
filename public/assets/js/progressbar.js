 // Show progress bar on AJAX start
 $(document).ajaxStart(function () {
    $('#progress-bar').css('width', '100%');
    showLoadingOverlay();
    document.querySelector('.modal-action').classList.add('hidden')
});


// Hide progress bar on AJAX complete
$(document).ajaxComplete(function () {
    $('#progress-bar').css('width', '0');
    $('#loading-overlay').fadeOut();
    document.querySelector('.modal-action').classList.remove('hidden')
});


// Show progress bar on page load
$(document).ready(function () {
    $(window).on('beforeunload', function () {
        $('#progress-bar').css('width', '100%');
        showLoadingOverlay();
        document.querySelector('.modal-action').classList.add('hidden')
        document.querySelector('.modal-actiondata').classList.add('hidden')
    });
});



function showLoadingOverlay() {
    $('#loading-overlay').fadeIn();
}

function hideLoadingOverlay() {
    $('#loading-overlay').fadeOut();
}

