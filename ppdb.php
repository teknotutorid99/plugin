<?php
/**
 * Plugin Name: PPDB Plugin
 * Description: Plugin Penerimaan Peserta Didik Baru untuk WordPress.
 * Version: 1.0.0
 * Author: Nama Kamu
 */

if (!defined('ABSPATH')) exit; // Hindari akses langsung

// Hook untuk menambahkan menu di admin
add_action('admin_menu', 'ppdb_register_admin_menu');

// Hook untuk memuat CSS dan JS
add_action('admin_enqueue_scripts', 'ppdb_enqueue_assets');

function ppdb_enqueue_assets() {
    wp_enqueue_style('ppdb-style', plugin_dir_url(__FILE__) . 'assets/style.css');
    wp_enqueue_script('ppdb-script', plugin_dir_url(__FILE__) . 'assets/script.js', ['jquery'], null, true);

}

function ppdb_register_admin_menu() {
    add_menu_page(
        'PPDB',
        'PPDB',
        'manage_options',
        'ppdb-dashboard',
        'ppdb_admin_page',
        'dashicons-welcome-learn-more',
        25
    );
}



// Halaman//
function ppdb_admin_page() {
    ?>
    <div class="ppdb-container">
        <header class="ppdb-header">
            <h1>Dashboard Plugin PPDB</h1>
        </header>

        <div class="ppdb-body">
            <nav class="ppdb-sidebar">
                <h3>Menu</h3>
                <ul>
                    <li><a href="#" class="button-link" data-menu="pengaturan">Pengaturan Plugin</a></li>
                    <li><a href="#" class="button-link" data-menu="profile">Profile Sekolah</a></li>
                    <li><a href="#" class="button-link" data-menu="ppdb">PPDB</a></li>
                    <li><a href="#" class="button-link" data-menu="pengumuman">Pengumuman</a></li>
                    <li><a href="#" class="button-link" data-menu="cetak">Cetak Bukti Pendaftaran</a></li>
                    <li><a href="#" class="button-link" data-menu="laporan">Laporan</a></li>
                </ul>
            </nav>

            <div class="menu-section" id="content-pengaturan" style="display:none;">
                <h2>Pengaturan Plugin</h2>
            </div>

            <div class="menu-section" id="content-profile" style="display:none;">
                <h2>Profile Sekolah</h2>
                <p>Isi data profil sekolah di sini.</p>
            </div>

            <div class="menu-section" id="content-ppdb" style="display:none;">
                <h2>Formulir PPDB</h2>
                <p>Form pendaftaran peserta didik baru akan ditampilkan di sini.</p>
            </div>

            <div class="menu-section" id="content-pengumuman" style="display:none;">
                <h2>Pengumuman</h2>
                <p>Pengumuman hasil seleksi ditampilkan di sini.</p>
            </div>

            <div class="menu-section" id="content-cetak" style="display:none;">
                <h2>Cetak Bukti Pendaftaran</h2>
                <p>Halaman untuk cetak bukti pendaftaran.</p>
            </div>

            <div class="menu-section" id="content-laporan" style="display:none;">
                <h2>Laporan</h2>
                <p>Laporan data pendaftar ditampilkan di sini.</p>
            </div>
        </div>
    </div>
    <?php
}