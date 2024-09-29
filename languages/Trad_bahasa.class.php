<?php

class Trad {

# Kata

const W_ISSUE = 'Masalah';
const W_OPEN = 'Buka';
const W_OPENED = 'Dibuka';
const W_CLOSED = 'Tutup';
const W_REOPENED = 'Dibuka kembali';
const W_COMMENTED = 'Dikomentari';
const W_NOBODY = 'tak seorang pun';
const W_SOMEONE = 'seseorang';
const W_ENABLED = 'Diaktifkan';
const W_DISABLED = 'Dinonaktifkan';
const W_NOTFOUND = 'Tidak ditemukan';
const W_FORBIDDEN = 'Dilarang';
const W_MENU = 'Menu';
const W_EXAMPLE = 'Contoh';
const W_HEX = 'Hex';
const W_RENDERING = 'Rendering';
const W_ID = 'ID';
const W_DISPLAY_NAME = 'Nama tampilan';
const W_SECONDE = 'detik';
const W_MINUTE = 'menit';
const W_HOUR = 'jam';
const W_DAY = 'hari';
const W_WEEK = 'minggu';
const W_MONTH = 'bulan';
const W_YEAR = 'tahun';
const W_DECADE = 'dekade';
const W_SECONDE_P = 'detik';
const W_MINUTE_P = 'menit';
const W_HOUR_P = 'jam';
const W_DAY_P = 'hari';
const W_WEEK_P = 'minggu';
const W_MONTH_P = 'bulan';
const W_YEAR_P = 'tahun';
const W_DECADE_P = 'dekade';
const W_PREVIOUS = 'Sebelumnya';
const W_NEXT = 'Berikutnya';
const W_MORE = 'LEBIH BANYAK';
const W_CURRENT = 'Halaman %nb1% dari %nb2%';
const W_NOT_LOGGED = 'Tidak masuk';
const W_SUSPENSION = '…';
const W_EXTRACT = '“%text%”';
const W_USER = 'Pengguna';
const W_DEVELOPPER = 'Pengembang';
const W_SUPERUSER = 'Pengguna super';
const W_S_NEW = 'Baru';
const W_S_CONFIRMED = 'Dikonfirmasi';
const W_S_ASSIGNED = 'Ditugaskan ke %user%';
const W_S_RESOLVED = 'Terselesaikan';
const W_S_REJECTED = 'Ditolak';
const W_L_URGENT = 'Mendesak';
const W_L_IMPROVEMENT = 'Peningkatan';
const W_L_PRIVATE = 'Pribadi';
const W_PROFILEPIC = 'gambar profil';
const W_RSS = 'Umpan RSS';
const W_VERSION = 'Versi';
const W_CAPTCHA_IMAGE = 'Gambar CAPTCHA';
const W_CAPTCHA_REFRESH = 'Segarkan Gambar';
const W_CAPTCHA_INPUT = 'Ketik teks:'; # Kata Kerja
const V_UPDATE = 'Perbarui';
const V_UPDATE_DETAILS = 'Perbarui detail';
const V_UPDATE_CONTENT = 'Perbarui konten';
const V_UPDATE_AND = 'Perbarui & %kata sifat%';
const V_CANCEL = 'Batal';
const V_PREVIEW = 'Pratinjau';
const V_COMMENT = 'Komentar';
const V_SUBMIT = 'Kirim';
const V_SELECT_FILE = 'Pilih file…';
const V_UPLOADING = 'Mengunggah…';
const V_SAVE_CONFIG = 'Simpan pengaturan';
const V_APPLY = 'Terapkan';
const V_EDIT = 'Sunting';
const V_SIGNUP = 'Daftar';
const V_LOGIN = 'Masuk';
const V_CONTINUE = 'Lanjutkan';
const V_REMOVE_ISSUE = 'Hapus masalah';
const V_CLOSE = 'tutup';
const V_REOPEN = 'buka kembali';
const V_EXPORT = 'Ekspor data mentah'; # Kalimat
const S_NOLABEL = '–';
const S_NODEPENDENCY = '–';
const S_COMMENT_LEAVE = 'Tinggalkan komentar:';
const S_AGO = '%duration% %pediod% lalu';
const S_ISSUE_ABOUT = 'Tentang masalah ini:';
const S_UPLOAD_ADD = 'Lampirkan berkas:';
const S_WELCOME = 'Selamat datang, %user%';
const S_NEVER = 'Tidak pernah';
const S_ME = 'Dari pembaruan pada masalah yang telah saya ikuti';
const S_ALWAYS = 'Dari setiap pembaruan';
const S_START_NOTIF = 'Mendapatkan pemberitahuan tentang pembaruan baru';
const S_STOP_NOTIF = 'Tidak lagi mendapatkan pemberitahuan tentang pembaruan';
const S_NOTFOUND = 'Halaman yang Anda cari tidak ada lagi...';
const S_FORBIDDEN = 'Anda tidak diizinkan mengakses halaman ini. Harap masuk/keluar untuk melanjutkan.';
const S_VIEW_PARTICIPATION = 'Lihat partisipasinya.';
const S_VIEW_STATUS = 'Lihat masalah “%status%”.';
const S_ISSUE_CREATED = 'oleh %user% %time%';
const S_ISSUE_UPDATED = '%adj% oleh %user% %time%.';
const S_ISSUE_STATUS_UPDATED = 'Status diperbarui menjadi %status% oleh %user% %time%.';
const S_RSS_ISSUE_UPDATED = '%adj% oleh %user%.';
const S_RSS_ISSUE_STATUS_UPDATED = 'Status diperbarui menjadi “%status%” oleh %user%.';
const S_INTRO_INSTALL = 'Sepertinya ini pertama kalinya Anda menjalankan phpmyBugs! Harap konfigurasikan:';
const S_FIRST_ISSUE_TITLE = 'Apa kabar, pumpkin?';
const S_FIRST_ISSUE = 'Saya masalah pertama Anda! Setelah masuk, Anda akan dapat menghapus saya.';
const S_NO_USER = 'Tidak ada pengguna yang cocok dengan permintaan Anda.';
const S_NO_ISSUE = 'Tidak ada masalah yang cocok dengan permintaan Anda.';
const S_MATCHING_ISSUES = '%nb% masalah yang cocok';
const S_NO_ACTIVITY = 'Tidak ada aktivitas terkini.';
const S_NO_UPLOAD = 'Tidak ada unggahan.';
const S_SIZE_REMAINING = '%remain% tersisa pada %total% yang diizinkan.';
const S_NO_PROJECT = 'Tidak ada proyek.';
const S_SEARCH = '#12, @user, words…';
const S_COPYRIGHT = 'Didukung oleh %name%.';
const S_UPGRADE = 'Dapatkan versi terbaru dari <a href="https://github.com/bugtrackr/Nireus/releases/latest">GitHub</a> ke <a href="https://bugtrackr.github.io/wiki/upgrade/">upgrade</a>.';
const S_LAST_UPDATES = 'Pembaruan terakhir…';
const S_STAY_LOGGEDIN = 'Biarkan saya tetap masuk';
const S_DEFAULT_DEFPROJ_DESC = 'Ini adalah proyek default yang dapat diakses oleh semua orang.';
const S_DEFAULT_2NDPROJ_DESC = 'Ini bisa menjadi proyek ke-2 Anda yang hanya dapat diakses oleh pengguna terdaftar.';

# Peringatan

const A_ERROR_DIRECTORY = '<strong>Kesalahan:</strong> tidak dapat membuat direktori “%name%”.';
const A_ERROR_FILE = '<strong>Kesalahan:</strong> tidak dapat membaca berkas “%name%”.';
const A_ERROR_FILE_WRITE = '<strong>Kesalahan:</strong> tidak dapat menulis berkas “%name%”.';
const A_ERROR_FATAL = 'Maaf, terjadi kesalahan. Silakan hubungi administrator jika masalah ini terus berlanjut.';
const A_ERROR = '<strong>%title%:</strong><br /><br />%message%<br /><br />Berkas “<strong>%file%</strong>” pada baris <strong>%line%</strong>.';
const A_SUCCESS_INSTALL = '<strong>Selesai:</strong> phpmyBugs kini telah dikonfigurasi sepenuhnya.';
const A_ERROR_INSTALL = '<strong>Kesalahan:</strong> phpmyBugs telah dikonfigurasi. Silakan hapus berkas konfigurasi jika Anda ingin menyetel ulang konfigurasi.';
const A_MODIF_SAVED = 'Modifikasi telah disimpan.';
const A_ERROR_FORM = 'Terjadi kesalahan. Silakan kirim lagi formulirnya.';
const A_ERROR_TOKEN = 'Token salah. Silakan kirim lagi formulirnya.';
const A_ERROR_EMPTY = 'Anda harus menentukan nama pengguna dan kata sandi.';
const A_ERROR_SAME_USERNAME = 'Nama pengguna ini tidak tersedia.';
const A_SUCCESS_SIGNUP = '<strong>Selesai:</strong> Sekarang Anda dapat masuk.';
const A_CONFIRM_DELETE_COMMENT = 'Apakah Anda yakin ingin menghapus komentar ini?';
const A_SUCCESS_DELETE_COMMENT = 'Komentar telah dihapus.';
const A_CONFIRM_DELETE_ISSUE = 'Apakah Anda yakin ingin menghapus masalah ini?';
const A_SUCCESS_DELETE_ISSUE = 'Masalah telah dihapus.'; 
const A_CONFIRM_DELETE_UPLOAD = 'Apakah Anda yakin ingin menghapus berkas ini?';

const A_CONFIRM_DELETE_PROJECT = 'Apakah Anda yakin ingin menghapus proyek ini? Semua masalah terkait akan hilang.';

const A_LOGGED = 'Anda sekarang masuk ke Sistem.';

const A_LOGGED_OUT = 'Anda sekarang keluar dari Sistem.';

const A_ERROR_CONNEXION = '<strong>Kesalahan:</strong> Nama pengguna atau kata sandi salah.';

const A_ERROR_CONNEXION_WAIT = '<strong>Kesalahan:</strong> Nama pengguna atau kata sandi salah. Harap tunggu %duration% %period% sebelum mencoba lagi.';

const A_ERROR_LOGIN_WAIT = 'Harap tunggu %duration% %period% sebelum mencoba lagi. Ini adalah perlindungan terhadap serangan jahat.';

const A_ERROR_UPLOAD = 'Terjadi kesalahan. Silakan coba lagi.';
const A_ERROR_UPLOAD_SIZE = 'Berkas melebihi ukuran maksimum yang diizinkan (maks. %nb%).';
const A_ERROR_UPLOAD_FULL = 'Anda tidak memiliki cukup ruang disk untuk mengunggah berkas ini: tersisa %nb%.';
const A_PLEASE_LOGIN_ISSUES = 'Silakan masuk untuk melihat masalah.';
const A_PLEASE_LOGIN_COMMENT = 'Silakan masuk untuk mengirim komentar. Belum punya akun? Buat satu: gratis dan sangat cepat!';
const A_PLEASE_LOGIN_ISSUE = 'Silakan masuk untuk mengirim masalah. Belum punya akun? Buat satu: gratis dan sangat cepat!'; 
const A_SHOULD_LOGIN = 'Jika Anda memiliki akun, silakan masuk. Jika tidak, pertimbangkan untuk membuatnya: gratis dan sangat cepat!';

const A_IE = 'Peramban Anda sudah usang: <a href="https://www.browser-update.org/en/update.html">tingkatkan atau ubah</a>.';

# Email

const M_NEW_COMMENT_O = '[%title% — %project% — Masalah #%id%] Komentar baru';

const M_NEW_COMMENT = 'Hai, %username%!

Masalah #%id% — “%summary%” baru saja dikomentari oleh %by%. Anda dapat membaca komentar baru di sini:
%url%.

Jika Anda tidak ingin menerima pemberitahuan lebih lanjut tentang masalah ini, opsi tersedia (setelah masuk) melalui tautan di atas.

-----
Ini adalah email otomatis, mohon jangan membalas.
';

const M_NEW_ISSUE_O = '[%title% — %project%] Masalah baru';
const M_NEW_ISSUE = 'Hai, %username%!

Masalah #%id% — “%summary%” baru saja dikirimkan oleh %by%. Anda dapat membacanya di sini:
%url%.

Jika Anda tidak ingin menerima pemberitahuan lebih lanjut tentang masalah ini, opsi tersedia (setelah masuk) melalui tautan di atas.

-----
Ini adalah email otomatis, mohon jangan membalas.
';

# Judul

const T_INSTALLATION = 'Instalasi';
const T_SETTINGS = 'Pengaturan';
const T_GLOBAL_SETTINGS = 'Pengaturan global';
const T_APPEARANCE = 'Tampilan';
const T_ISSUES = 'Masalah';
const T_GROUPS = 'Grup'; 
const T_USERS = 'Pengguna'; 
const T_PERMISSIONS = 'Izin'; 
const T_ENABLE_CAPTCHA = 'Kelola Captcha'; 
const T_CAPTCHA = 'Captcha'; 
const T_BROWSE_ISSUES = 'Telusuri masalah'; 
const T_BROWSE_ALL_ISSUES = 'Telusuri semua masalah'; 
const T_ALL_ISSUES_DESCRIPTION = 'Ini semua adalah masalah terbuka untuk semua proyek'; 
const T_NEW_ISSUE = 'Masalah baru'; 
const T_ALL_ISSUES = 'Semua masalah'; 
const T_PROJECTS = 'Proyek'; 
const T_DASHBOARD = 'Dasbor'; 
const T_LAST_UPDATES = 'Pembaruan terakhir'; 
const T_LAST_ACTIVITY = 'Aktivitas terakhir'; 
const T_UPLOADS = 'Unggahan'; 
const T_SEARCH = 'Pencarian'; 
const T_LINK_CONTACT = 'Hubungi Kami'; 
const T_LINK_LEGALNOTICE = 'Pemberitahuan Hukum'; 
const T_LINK_PRIVACYPOLICY = 'Kebijakan Privasi'; 
const T_API_SETTINGS = 'API'; 
const T_API_ENABLE_SETTINGS = 'Kelola API'; 
const T_API_ACCESS_SETTINGS = 'Akses API'; 
const T_INFO = 'Info'; # FORMULIR 
const F_USERNAME = 'Nama Pengguna:'; 
const F_PASSWORD = 'Kata Sandi:'; 
const F_USERNAME2 = 'Nama Pengguna'; 
const F_PASSWORD2 = 'Kata Sandi'; 
const F_NAME = 'Nama:';
const F_URL = 'Url:'; 
const F_URL_CDN = 'Url CDN:'; 
const F_URL_REWRITING = 'Penulisan ulang url:'; 
const F_INTRO = 'Pendahuluan:'; 
const F_DESCRIPTION = 'Deskripsi:'; 
const F_EMAIL = 'Email:'; 
const F_LINK_CONTACT = 'Tautan ke halaman kontak eksternal (dapat dibiarkan kosong):';
const F_LINK_LEGALNOTICE = 'Tautan ke pemberitahuan hukum (dapat dibiarkan kosong):';
const F_LINK_PRIVACYPOLICY = 'Tautan ke kebijakan privasi (dapat dibiarkan kosong):';
const F_MAX_UPLOAD = 'Ukuran maksimum per unggahan:';
const F_ALLOCATED_SPACE = 'Ruang yang dialokasikan per pengguna:';
const F_GROUP = 'Grup:';
const F_NOTIFICATIONS = 'Diberitahu:';
const F_PROJECT_X = 'Proyek “%name%”:';
const F_LANGUAGE = 'Bahasa:';
const F_LOGS = 'Log:';
const F_ISSUES_PAGE = 'Masalah per halaman:'; 
const F_ISSUES_PAGE_SEARCH = 'Masalah per halaman (pencarian):';
const F_PREVIEW_ISSUE = 'Panjang pratinjau (masalah):';
const F_PREVIEW_SEARCH = 'Panjang pratinjau (pencarian):';
const F_PREVIEW_PROJECT = 'Panjang pratinjau (proyek):';
const F_LAST_EDITS = 'Jumlah masalah yang ditampilkan di dasbor:';
const F_LAST_ACTIVITY = 'Jumlah masalah yang ditampilkan di halaman pengguna:';
const F_THEME = "Tema";
const F_TIP_THEME = "Tempatkan file .css di";
const F_ADD_PROJECT = 'Proyek baru';
const F_ADD_COLOR = 'Warna baru';
const F_ADD_STATUS = 'Status baru'; 
const F_ADD_LABEL = 'Label baru'; 
const F_ADD_GROUP = 'Grup baru'; 
const F_ADD_USER = 'Pengguna baru'; 
const F_SORT_BY = 'Urutkan berdasarkan:'; 
const F_SORT_ID = 'ID'; 
const F_SORT_MOD = 'pembaruan terakhir'; 
const F_SORT_DESC = 'menurun'; 
const F_SORT_ASC = 'menaik'; 
const F_FILTER_STATUSES = 'Status filter:'; 
const F_FILTER_STATES = 'Status filter:'; 
const F_FILTER_LABELS = 'Label filter:'; 
const F_FILTER_USERS = 'Filter pengguna:'; 
const F_FILTER_MILESTONE = 'Tonggak pencapaian filter:'; 
const F_WRITE = 'Tulis:'; 
const F_SUMMARY = 'Ringkasan'; 
const F_CONTENT = 'Konten'; 
const F_STATUS = 'Status:'; 
const F_RELATED = 'Terkait:'; 
const F_LABELS2 = 'Label:'; 
const F_MILESTONE = 'Tonggak:'; 
const F_GENERAL_SETTINGS = 'Pengaturan umum:'; 
const F_PROJECTS = 'Proyek:'; 
const F_DATABASE = 'Basis data:'; 
const F_UPLOADS = 'Unggahan:'; 
const F_COLORS = 'Kelola warna:'; 
const F_DISPLAY = 'Kelola tampilan:'; 
const F_STATUSES = 'Kelola status:'; 
const F_LABELS = 'Kelola label:'; 
const F_GROUPS = 'Kelola grup:';
const F_PERMISSIONS = 'Kelola izin:';
const F_USERS = 'Kelola pengguna:';
const F_INVALID_CAPTCHA = 'CAPTCHA yang Anda masukkan salah. Silakan coba lagi.';
const F_TIP_NAME = 'CAPTCHA akan ditampilkan di header setiap halaman.';
const F_TIP_URL_REWRITING = 'Biarkan kolom ini kosong untuk menonaktifkan penulisan ulang url. Jika tidak, kolom ini harus berisi jalur ke folder phpmyBugs (dimulai dan diakhiri dengan "/"), relatif terhadap nama domain.';
const F_TIP_URL_CDN = 'Biarkan kolom ini kosong untuk menonaktifkan CDN. Jika tidak, kolom ini harus berisi URL CDN Anda (misalnya <em>https://cdn.rawgit.com/bugtrackr/Nireus/master/</em>, silakan gunakan yang ini). Pastikan untuk menyimpan semua file dari folder <em>/public</em> di CDN Anda.';
const F_TIP_INTRO = 'File tersebut akan ditampilkan di beranda. File tersebut akan diurai dengan sintaks Markdown. Catatan: jika hanya ada satu proyek bernama “%name%”, beranda akan secara otomatis dialihkan ke dasbor proyek, dan teks ini tidak akan ditampilkan.';
const F_TIP_EMAIL = 'Biarkan kolom ini kosong untuk menonaktifkan notifikasi email. Jika tidak, alamat ini akan digunakan sebagai pengirim saat mengirim notifikasi email.';
const F_TIP_PASSWORD = 'Biarkan kosong jika Anda tidak ingin mengubah kata sandi.';
const F_TIP_USER_EMAIL = 'Hanya diperlukan jika Anda ingin menerima notifikasi.';
const F_TIP_NOTIFICATIONS = 'Ini adalah pengaturan default: Anda dapat mengubahnya untuk setiap masalah.'; 
const F_TIP_NOTIFICATIONS_DISABLED = 'Catatan: notifikasi saat ini dinonaktifkan oleh administrator.';
const F_TIP_DESCRIPTION = 'Akan ditampilkan di dasbor proyek. Akan diurai dengan sintaks markdown.';
const F_TIP_MAX_UPLOAD = 'Setiap file yang diunggah tidak boleh melebihi ukuran ini.';
const F_TIP_ALLOCATED_SPACE = 'Pengguna tidak dapat mengunggah file lain setelah mencapai batas ini.<br /><em>Perhatian:</em> jika tidak ada pengguna yang masuk yang diizinkan untuk mengunggah file (ini bukan pengaturan default), batas ini tidak berlaku untuk mereka.';
const F_TIP_ID_STATUS = '<b>Tips:</b> berhati-hatilah saat mengubah ID, karena setiap masalah tetap mempertahankan ID status lamanya (kecuali jika ID ini tidak ada lagi: dalam kasus ini, status default akan digunakan).'; 
const F_TIP_ID_LABEL = '<b>Tips:</b> berhati-hatilah saat mengubah ID, karena setiap label dari satu masalah tetap menggunakan ID lamanya (kecuali jika ID ini tidak ada lagi: dalam kasus ini, label dihapus dari masalah tersebut).';
const F_TIP_ID_GROUP = '<b>Tips:</b> berhati-hatilah saat mengubah ID, karena setiap pengguna tetap menggunakan ID grup lamanya (kecuali jika ID ini tidak ada lagi: dalam kasus ini, grup default akan digunakan).';
const F_TIP_CAPTCHA = 'Pilih tindakan yang akan menampilkan captcha untuk pengguna yang tidak login.';
const F_TIP_API_ACCESS = 'Konfigurasikan akses API di file <em>/database/config_api.php</em>. Untuk info lebih lanjut, lihat file API.md.';
const F_API_ENABLE = 'Aktifkan API';
const HELP_MARKDOWN = '
<h2>Ditandaisintaksis sendiri:</h2>

<p>Paragraf:</p>
<pre><code class="blank no-highlight">Paragraf dipisahkan oleh satu atau beberapa baris kosong.

Itulah sebabnya teks ini akan ditampilkan di baris yang sama dengan frasa sebelumnya, tidak peduli jeda barisnya.

Untuk memulai baris baru tanpa membuat paragraf baru:
masukkan 2 spasi sebelum jeda baris, seperti di sini.</code></pre>

<p>Penekanan:</p>
<pre><code class="blank no-highlight">*Teks ​​miring*
_Teks miring lagi_

**Teks ​​tebal**
__Teks tebal lagi__ </code></pre>

<p>Tautan:</p>
<pre><code class="blank no-highlight">Ini adalah [contoh](http://example.com) tautan sebaris. Ini yang lainnya: &lt;http://example.com&gt;.</code></pre>

<p>Gambar:</p>
<pre><code class="blank no-highlight">![Saya adalah gambar.](http://example.com/image.png)</code></pre>

<p>Header:</p>
<pre><code class="blank no-highlight"># Judul Tingkat Atas
## Judul Tingkat Kedua
### Judul Tingkat Ketiga
#### Judul Tingkat Keempat</code></pre>

<p>Daftar:</p>
<pre><code class="blank no-highlight">- satu item
* satu lagi

1. item pertama
2. item kedua</code></pre>

<p>Kutipan Blok:</p>
<pre><code class="blank no-highlight">> Saya adalah kutipan blok dengan dua paragraf. >
> Saya adalah paragraf kedua.</code></pre>

<p>Blok kode:</p>
<pre><code class="blank no-highlight">Ini adalah `blok kode sebaris`.</code></pre>
<pre><code class="blank no-highlight"> &lt;?php echo "Saya adalah blok kode, karena saya diberi indentasi
dengan 4 spasi"; ?&gt;</code></pre>
<pre><code class="blank no-highlight">```
&lt;?php echo "Saya adalah blok kode."; ?&gt;
```

```php
&lt;?php echo "Bahasa yang didukung adalah: bash, cs, ruby, diff, javascript, css, xml, http, java, php, python, sql, ini, perl, json, cpp, markdown, no-highlight"; ?&gt;
```</code></pre>
';

private static $permissions = array(
'home' => array(
'title' => 'Beranda:',
'description' => 'Dapat mengakses beranda dan melihat daftar semua isu terbuka untuk proyeknya.'
),
'dashboard' => array(
'title' => 'Dasbor:',
'description' => 'Dapat mengakses dasbor proyek.'
),
'issues' => array(
'title' => 'Lihat isu:',
'description' => 'Dapat melihat isu publik.'
),
'private_issues' => array(
'title' => 'Lihat isu pribadi:',
'description' => 'Dapat melihat isu yang ditandai sebagai pribadi.'
),
'search' => array(
'title' => 'Cari:',
'description' => 'Dapat mencari isu atau pengguna.'
),
'new_issue' => array(
'title' => 'Isu baru:',
'description' => 'Dapat mengirimkan isu baru.'
),
'edit_issue' => array(
'title' => 'Edit masalah:',
'description' => 'Dapat mengedit teks semua masalah dan menghapusnya.'
),
'update_issue' => array(
'title' => 'Perbarui masalah:',
'description' => 'Dapat memperbarui masalah: mengubah status, menambahkan label, menutup dan membuka kembali, ...'
),
'post_comment' => array(
'title' => 'Kirim komentar:',
'description' => 'Dapat mengirim komentar.'
),
'edit_comment' => array(
'title' => 'Edit komentar:',
'description' => 'Dapat mengedit semua komentar (pengguna tetap dapat mengedit komentar mereka sendiri).'
),
'view_user' => array(
'title' => 'Profil pengguna:',
'description' => 'Dapat melihat semua profil pengguna.'
),
'upload' => array(
'title' => 'Kirim file:',
'description' => 'Dapat lampirkan file ke komentar atau masalah baru.'
),
'view_upload' => array(
'title' => 'Lihat unggahan:',
'description' => 'Dapat mengakses semua file yang diunggah.'
),
'settings' => array(
'title' => 'Ubah pengaturan:',
'description' => 'Dapat mengakses halaman ini dan mengubah semua pengaturan global.'
),
'signup' => array(
'title' => 'Daftar:',
'description' => 'Dapat mendaftar.'
),
'view_errors' => array(
'title' => 'Lihat kesalahan fatal:',
'description' => 'Dapat melihat deskripsi kesalahan fatal.'
)
);

public static function permissions($id, $type = 'description') {
return self::$permissions[$id][$type]; }

private static $settings = array(
'validate_url' => 'Url tidak valid.',
'validate_email' => 'Email tidak valid.',
'private_label_removed' => 'Anda tidak dapat menghapus label pribadi atau mengubah ID-nya, tetapi Anda dapat mengganti namanya.',
'default_status_removed' => 'Anda tidak dapat menghapus status default atau mengubah ID-nya, tetapi Anda dapat mengganti namanya.',
'default_group_removed' => 'Anda tidak dapat menghapus grup default atau mengubah ID-nya, tetapi Anda dapat mengganti namanya.',
'default_group_superuser_removed' => 'Anda tidak dapat menghapus grup superuser atau mengubah ID-nya, tetapi Anda dapat mengganti namanya.',
'validate_same_username' => 'Peringatan: dua pengguna memiliki nama pengguna yang sama.',
'validate_same_project_name' => 'Dua proyek tidak dapat memiliki nama yang sama. Satu telah diganti nama secara otomatis.',
'language_modified' => 'Segarkan halaman ini untuk melihatnya dalam bahasa baru.'
);

public static function settings($id) {
return self::$settings[$id];
}

private static $errors = array(
E_ERROR => 'Kesalahan fatal',
E_WARNING => 'Peringatan',
E_PARSE => 'Kesalahan penguraian',
E_NOTICE => 'Pemberitahuan',
E_STRICT => 'Saran',
E_DEPRECATED => 'Tidak berlaku lagi','default' => 'Kesalahan'
);

public static function errors($no) {
return (isset(self::$errors[$no])) ? self::$errors[$no] : self::$errors['default'];
}
}

?>