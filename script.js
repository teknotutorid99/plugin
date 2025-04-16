// assets/script.js
jQuery(document).ready(function($) {
    // Fungsi untuk mengunci semua menu kecuali Pengaturan
    function lockMenus() {
        $('.button-link').not('[data-menu="pengaturan"]').addClass('disabled').css({
            'pointer-events': 'none',
            'opacity': '0.5'
        });
    }