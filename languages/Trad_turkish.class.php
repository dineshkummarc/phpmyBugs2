<?php

class Trad {

# Words

const W_ISSUE = 'Sorun';
const W_OPEN = 'Açık';
const W_OPENED = 'Açıldı';
const W_CLOSED = 'Kapatıldı';
const W_REOPENED = 'Yeniden Açıldı';
const W_COMMENTED = 'Yorumlandı';
const W_NOBODY = 'kimse';
const W_SOMEONE = 'birisi';
const W_ENABLED = 'Etkinleştirildi';
const W_DISABLED = 'Devre Dışı';
const W_NOTFOUND = 'Bulunamadı';
const W_FORBIDDEN = 'Yasaklandı';
const W_MENU = 'Menü';

const W_EXAMPLE = 'Örnek';
const W_HEX = 'Hex';
const W_RENDERING = 'Görüntüleme';
const W_ID = 'ID';
const W_DISPLAY_NAME = 'Görüntü adı';

const W_SECONDE = 'saniye';
const W_MINUTE = 'dakika';
const W_HOUR = 'saat';
const W_DAY = 'gün';
const W_WEEK = 'hafta';
const W_MONTH = 'ay';
const W_YEAR = 'yıl';
const W_DECADE = 'on';
const W_SECONDE_P = 'saniye';
const W_MINUTE_P = 'dakika';
const W_HOUR_P = 'saat';
const W_DAY_P = 'gün';
const W_WEEK_P = 'haftalar';
const W_MONTH_P = 'aylar';
const W_YEAR_P = 'yıllar';
const W_DECADE_P = 'onlarca';

const W_PREVIOUS = 'Önceki';
const W_NEXT = 'Sonraki';
const W_MORE = 'DAHA FAZLA';
const W_CURRENT = 'Sayfa %nb1% / %nb2%';

const W_NOT_LOGGED = 'Oturum açılmadı';

const W_SUSPENSION = '…';
const W_EXTRACT = '“%text%”';

const W_USER = 'Kullanıcı';
const W_DEVELOPPER = 'Geliştirici';
const W_SUPERUSER = 'Süper Kullanıcı';
const W_S_NEW = 'Yeni';
const W_S_CONFIRMED = 'Onaylandı';
const W_S_ASSIGNED = '%user%\'a atandı';
const W_S_RESOLVED = 'Çözüldü';
const W_S_REJECTED = 'Reddedildi';
const W_L_URGENT = 'Acil';
const W_L_IMPROVEMENT = 'İyileştirme';
const W_L_PRIVATE = 'Özel';

const W_PROFILEPIC = 'profil resmi';

const W_RSS = 'RSS beslemesi';
const W_VERSION = 'Sürüm';

const W_CAPTCHA_IMAGE = 'CAPTCHA Resmi';
const W_CAPTCHA_REFRESH = 'Resmi Yenile';
const W_CAPTCHA_INPUT = 'Metni yazın:';

# Fiiller

const V_UPDATE = 'Güncelle';
const V_UPDATE_DETAILS = 'Ayrıntıları güncelle';
const V_UPDATE_CONTENT = 'İçeriği güncelle';
const V_UPDATE_AND = 'Güncelle & %adjective%';
const V_CANCEL = 'İptal';
const V_PREVIEW = 'Önizleme';
const V_COMMENT = 'Yorum';
const V_SUBMIT = 'Gönder';
const V_SELECT_FILE = 'Bir dosya seç...';
const V_UPLOADING = 'Yükleniyor...';
const V_SAVE_CONFIG = 'Ayarları kaydet';
const V_APPLY = 'Uygula';
const V_EDIT = 'Düzenle';
const V_SIGNUP = 'Kaydol';
const V_LOGIN = 'Giriş yap';
const V_CONTINUE = 'Devam et';
const V_REMOVE_ISSUE = 'Sorunu sil';
const V_CLOSE = 'kapat';
const V_REOPEN = 'yeniden aç';
const V_EXPORT = 'Ham verileri dışa aktar';

# Cümleler

const S_NOLABEL = '–';
const S_NODEPENDENCY = '–';
const S_COMMENT_LEAVE = 'Yorum bırak:';
const S_AGO = '%duration% %pediod% önce';
const S_ISSUE_ABOUT = 'Bu sorun hakkında:';
const S_UPLOAD_ADD = 'Bir dosya ekle:';
const S_WELCOME = 'Hoş geldiniz, %user%';
const S_NEVER = 'Asla';
const S_ME = 'Katkıda bulunduğum konulardaki güncellemeler';
const S_ALWAYS = 'Her güncellemenin';
const S_START_NOTIF = 'Yeni güncellemelerden haberdar olun';
const S_STOP_NOTIF = 'Artık güncellemelerden haberdar olmayın';
const S_NOTFOUND = 'Aradığınız sayfa artık mevcut değil...';
const S_FORBIDDEN = 'Bu sayfaya erişmenize izin verilmiyor. Devam etmek için lütfen oturum açın/çıkın.';

const S_VIEW_PARTICIPATION = 'Katılımını görüntüle.';
const S_VIEW_STATUS = '“%status%”” konularını görüntüle.';

const S_ISSUE_CREATED = '%user% %time% tarafından';
const S_ISSUE_UPDATED = '%adj% %user% %time% tarafından';
const S_ISSUE_STATUS_UPDATED = 'Durum %user% %time% tarafından %status% olarak güncellendi.';

const S_RSS_ISSUE_UPDATED = '%adj% %user% tarafından.';
const S_RSS_ISSUE_STATUS_UPDATED = 'Durum %user% tarafından “%status%” olarak güncellendi.';

const S_INTRO_INSTALL = 'Görünüşe göre phpmyBugs\'ı ilk kez çalıştırıyorsunuz! Lütfen yapılandırın:';
const S_FIRST_ISSUE_TITLE = 'Nasılsın, balkabağı?';
const S_FIRST_ISSUE = 'Ben ilk sorununuzum! Giriş yaptıktan sonra beni silebileceksiniz.';

const S_NO_USER = 'İsteğinizle eşleşen kullanıcı yok.';
const S_NO_ISSUE = 'İsteğinizle eşleşen sorun yok.';
const S_MATCHING_ISSUES = '%nb% eşleşen sorun';
const S_NO_ACTIVITY = 'Son etkinlik yok.';
const S_NO_UPLOAD = 'Yükleme yok.';
const S_SIZE_REMAINING = 'İzin verilen %total% üzerinde kalan %remain%';
const S_NO_PROJECT = 'Proje yok.';

const S_SEARCH = '#12, @user, words…';
const S_COPYRIGHT = '%name% tarafından desteklenmektedir.';
const S_UPGRADE = '<a href="https://github.com/bugtrackr/Nireus/releases/latest">GitHub</a> dan <a href="https://bugtrackr.github.io/wiki/upgrade/">yükseltmeye</a> en son sürümü al.';

const S_LAST_UPDATES = 'Son güncellemeler…';

const S_STAY_LOGGEDIN = 'Oturumumu açık tut';

const S_DEFAULT_DEFPROJ_DESC = 'Bu, herkesin erişebildiği varsayılan projedir.';
const S_DEFAULT_2NDPROJ_DESC = 'Bu, yalnızca kayıtlı kullanıcıların sorun göndermesine izin verilen 2. projeniz olabilir.';

# Uyarılar

const A_ERROR_DIRECTORY = '<strong>Hata:</strong> “%name%” dizini oluşturulamadı.';
const A_ERROR_FILE = '<strong>Hata:</strong> “%name%” dosyası okunamıyor.';
const A_ERROR_FILE_WRITE = '<strong>Hata:</strong> “%name%” dosyası yazılamıyor.';
const A_ERROR_FATAL = 'Üzgünüz, bir sorun oluştu. Bu sorun devam ederse lütfen bir yöneticiyle iletişime geçin.';
const A_ERROR = '<strong>%title%:</strong><br /><br />%message%<br /><br />“<strong>%file%</strong>” dosyası <strong>%line%</strong> satırında.';

const A_SUCCESS_INSTALL = '<strong>Tamamlandı:</strong> phpmyBugs artık tamamen yapılandırıldı.';
const A_ERROR_INSTALL = '<strong>Hata:</strong> phpmyBugs zaten yapılandırılmış. Yapılandırmayı sıfırlamak istiyorsanız lütfen yapılandırma dosyasını kaldırın.';
const A_MODIF_SAVED = 'Değişiklikler kaydedildi.';

const A_ERROR_FORM = 'Bir hata oluştu. Lütfen formu tekrar gönderin.';
const A_ERROR_TOKEN = 'Yanlış belirteç. Lütfen formu tekrar gönderin.';
const A_ERROR_EMPTY = 'Bir kullanıcı adı ve parola belirtmeniz gerekiyor.';
const A_ERROR_SAME_USERNAME = 'Bu kullanıcı adı mevcut değil.';
const A_SUCCESS_SIGNUP = '<strong>Tamamlandı:</strong> Artık giriş yapabilirsiniz.';

const A_CONFIRM_DELETE_COMMENT = 'Bu yorumu silmek istediğinizden emin misiniz?';
const A_SUCCESS_DELETE_COMMENT = 'Yorum silindi.';
const A_CONFIRM_DELETE_ISSUE = 'Bu sorunu silmek istediğinizden emin misiniz?';
const A_SUCCESS_DELETE_ISSUE = 'Sorun silindi.';
const A_CONFIRM_DELETE_UPLOAD = 'Bu dosyayı silmek istediğinizden emin misiniz?';
const A_CONFIRM_DELETE_PROJECT = 'Bu projeyi silmek istediğinizden emin misiniz? İlgili tüm sorunlar kaybolacak.';

const A_LOGGED = 'Artık Sistemde oturum açtınız.';
const A_LOGGED_OUT = 'Artık Sistemden çıkış yaptınız.';
const A_ERROR_CONNEXION = '<strong>Hata:</strong> Yanlış kullanıcı adı veya parola.';
const A_ERROR_CONNEXION_WAIT = '<strong>Hata:</strong> Yanlış kullanıcı adı veya parola. Lütfen tekrar denemeden önce %duration% %period% bekleyin.';
const A_ERROR_LOGIN_WAIT = 'Tekrar denemeden önce lütfen %duration% %period% bekleyin. Bu kötü amaçlı saldırılara karşı bir korumadır.';

const A_ERROR_UPLOAD = 'Bir hata oluştu. Lütfen tekrar deneyin.';
const A_ERROR_UPLOAD_SIZE = 'Dosya izin verilen maksimum boyutu (%nb% max) aşıyor.';
const A_ERROR_UPLOAD_FULL = 'Bu dosyayı yüklemek için yeterli disk alanınız yok: kalan %nb%.';

const A_PLEASE_LOGIN_ISSUES = 'Sorunları görmek için lütfen oturum açın.';
const A_PLEASE_LOGIN_COMMENT = 'Yorum göndermek için lütfen oturum açın. Henüz hesabınız yok mu? Bir tane oluşturun: ücretsiz ve gerçekten hızlı!';
const A_PLEASE_LOGIN_ISSUE = 'Sorun göndermek için lütfen oturum açın. Henüz hesabınız yok mu? Bir tane oluşturun: ücretsiz ve gerçekten hızlı!';
const A_SHOULD_LOGIN = 'Hesabınız varsa lütfen giriş yapın. Yoksa, bir tane oluşturmayı düşünün: ücretsiz ve gerçekten hızlı!';

const A_IE = 'Tarayıcınız eski: <a href="https://www.browser-update.org/en/update.html">güncelleyin veya değiştirin</a>.';

# Mailler

const M_NEW_COMMENT_O = '[%title% — %project% — Sorun #%id%] Yeni yorum';
const M_NEW_COMMENT = 'Merhaba, %username%!

#%id% — “%summary%” sorununa %by% tarafından yorum yapıldı. Yeni yorumu buradan okuyabilirsiniz:
%url%.

Bu sorunla ilgili daha fazla bildirim almak istemiyorsanız, yukarıdaki bağlantı üzerinden (giriş yaptıktan sonra) bir seçenek mevcuttur.

-----
Bu otomatik bir e-postadır, lütfen yanıtlamayın.
';

const M_NEW_ISSUE_O = '[%title% — %project%] Yeni sorun';
const M_NEW_ISSUE = 'Merhaba, %username%!

#%id% — “%summary%” sorunu az önce %by% tarafından gönderildi. Buradan okuyabilirsiniz:
%url%.

Bu sorunla ilgili daha fazla bildirim almak istemiyorsanız, yukarıdaki bağlantı üzerinden (oturum açtıktan sonra) bir seçenek mevcuttur.

-----
Bu otomatik bir e-postadır, lütfen yanıtlamayın.
';

# Başlıklar

const T_INSTALLATION = 'Kurulum';
const T_SETTINGS = 'Ayarlar';
const T_GLOBAL_SETTINGS = 'Genel ayarlar';
const T_APPEARANCE = 'Görünüm';
const T_ISSUES = 'Sorunlar';
const T_GROUPS = 'Gruplar';
const T_USERS = 'Kullanıcılar';
const T_PERMISSIONS = 'İzinler';
const T_ENABLE_CAPTCHA = 'Captcha\'yı Yönet';
const T_CAPTCHA = 'Captcha';
const T_BROWSE_ISSUES = 'Sorunlara göz at';
const T_BROWSE_ALL_ISSUES = 'Tüm sorunlara göz at';
const T_ALL_ISSUES_DESCRIPTION = 'Bunlar tüm projeler için açık sorunlardır';
const T_NEW_ISSUE = 'Yeni sorun';
const T_ALL_ISSUES = 'Tüm sorunlar';
const T_PROJECTS = 'Projeler';
const T_DASHBOARD = 'Pano';
const T_LAST_UPDATES = 'Son güncellemeler';
const T_LAST_ACTIVITY = 'Son etkinlik';
const T_UPLOADS = 'Yüklemeler';
const T_SEARCH = 'Ara';
const T_LINK_CONTACT = 'Bizimle İletişime Geçin';
const T_LINK_LEGALNOTICE = 'Yasal Uyarı';
const T_LINK_PRIVACYPOLICY = 'Gizlilik Politikası';
const T_API_SETTINGS = 'API';
const T_API_ENABLE_SETTINGS = 'API\'yi Yönet';
const T_API_ACCESS_SETTINGS = 'API erişimi';
const T_INFO = 'Bilgi';

# FORMS

const F_USERNAME = 'Kullanıcı adı:';
const F_PASSWORD = 'Şifre:';
const F_USERNAME2 = 'Kullanıcı Adı';
const F_PASSWORD2 = 'Şifre';
const F_NAME = 'Ad:';
const F_URL = 'Url:';
const F_URL_CDN = 'CDN Url:';
const F_URL_REWRITING = 'Url yeniden yazma:';
const F_INTRO = 'Giriş:';
const F_DESCRIPTION = 'Açıklama:';
const F_EMAIL = 'E-posta:';
const F_LINK_CONTACT = 'Harici iletişim sayfasına bağlantı (boş bırakılabilir):';
const F_LINK_LEGALNOTICE = 'Yasal bildirime bağlantı (boş bırakılabilir):';
const F_LINK_PRIVACYPOLICY = 'Gizlilik politikasına bağlantı (boş bırakılabilir):';
const F_MAX_UPLOAD = 'Yükleme başına maksimum boyut:';
const F_ALLOCATED_SPACE = 'Kullanıcı başına ayrılan alan:';
const F_GROUP = 'Grup:';
const F_NOTIFICATIONS = 'Bildirim alın:';
const F_PROJECT_X = 'Proje “%name%”:';
const F_LANGUAGE = 'Dil:';
const F_LOGS = 'Günlükler:';

const F_ISSUES_PAGE = 'Sayfa başına sorunlar:';
const F_ISSUES_PAGE_SEARCH = 'Sayfa başına sorun (arama):';
const F_PREVIEW_ISSUE = 'Önizleme uzunluğu (sorunlar):';
const F_PREVIEW_SEARCH = 'Önizleme uzunluğu (arama):';
const F_PREVIEW_PROJECT = 'Önizleme uzunluğu (projeler):';
const F_LAST_EDITS = 'Gösterge panolarında görüntülenen sorun sayısı:';
const F_LAST_ACTIVITY = 'Kullanıcı sayfalarında görüntülenen sorun sayısı:';
const F_THEME = "Tema";
const F_TIP_THEME = ".css dosyasını şuraya yerleştirin";

const F_ADD_PROJECT = 'Yeni proje';
const F_ADD_COLOR = 'Yeni renk';
const F_ADD_STATUS = 'Yeni durum';
const F_ADD_LABEL = 'Yeni etiket';
const F_ADD_GROUP = 'Yeni grup';
const F_ADD_USER = 'Yeni kullanıcı';

const F_SORT_BY = 'Sırala:';
const F_SORT_ID = 'ID';
const F_SORT_MOD = 'son güncelleme';
const F_SORT_DESC = 'azalan';
const F_SORT_ASC = 'artan';
const F_FILTER_STATUSES = 'Filtre durumları:';
const F_FILTER_STATES = 'Filtre durumları:';
const F_FILTER_LABELS = 'Etiketleri filtrele:';
const F_FILTER_USERS = 'Kullanıcıları filtrele:';
const F_FILTER_MILESTONE = 'Kıta taşını filtrele:';

const F_WRITE = 'Yaz:';
const F_SUMMARY = 'Özet';
const F_CONTENT = 'İçerik';

const F_STATUS = 'Durum:';
const F_RELATED = 'İlgili:';
const F_LABELS2 = 'Etiketler:';
const F_MILESTONE = 'Önemli Nokta:';

const F_GENERAL_SETTINGS = 'Genel ayarlar:';
const F_PROJECTS = 'Projeler:';
const F_DATABASE = 'Veritabanı:';
const F_UPLOADS = 'Yüklemeler:';
const F_COLORS = 'Renkleri yönet:';
const F_DISPLAY = 'Görüntüyü yönet:';
const F_STATUSES = 'Durumları yönet:';
const F_LABELS = 'Etiketleri yönet:';
const F_GROUPS = 'Grupları yönet:';
const F_PERMISSIONS = 'İzinleri yönet:';
const F_USERS = 'Kullanıcıları yönet:';

const F_INVALID_CAPTCHA = 'Girdiğiniz CAPTCHA yanlış. Lütfen tekrar deneyin.';

const F_TIP_NAME = 'Her sayfanın başlığında gösterilecektir.';
const F_TIP_URL_REWRITING = 'URL yeniden yazmayı devre dışı bırakmak için bu alanı boş bırakın. Aksi takdirde, etki alanı adına göre phpmyBugs klasörüne giden yolu (bir "/" ile başlayıp biten) içermelidir.';
const F_TIP_URL_CDN = 'CDN\'yi devre dışı bırakmak için bu alanı boş bırakın. Aksi takdirde, CDN\'nizin URL\'sini içermesi gerekir (örneğin <em>https://cdn.rawgit.com/bugtrackr/Nireus/master/</em>, bunu kullanmaktan çekinmeyin). CDN\'nizde <em>/public</em> klasöründeki tüm dosyaları barındırdığınızdan emin olun.';
const F_TIP_INTRO = 'Ana sayfada gösterilecektir. Markdown sözdizimiyle ayrıştırılacaktır. Not: “%name%” adında yalnızca bir proje varsa, ana sayfa otomatik olarak proje panosuna yönlendirilir ve bu metin gösterilmez.';
const F_TIP_EMAIL = 'E-posta bildirimlerini devre dışı bırakmak için bu alanı boş bırakın. Aksi takdirde, bu adres bir e-posta bildirimi gönderirken gönderici olarak kullanılacaktır.';
const F_TIP_PASSWORD = 'Şifreyi değiştirmek istemiyorsanız boş bırakın.';
const F_TIP_USER_EMAIL = 'Yalnızca bildirim almak istiyorsanız gereklidir.';
const F_TIP_NOTIFICATIONS = 'Bu varsayılan bir ayardır: her sorun için değiştirebileceksiniz.';
const F_TIP_NOTIFICATIONS_DISABLED = 'Not: bildirimler şu anda yönetici tarafından devre dışı bırakıldı.';
const F_TIP_DESCRIPTION = 'Proje panosunda gösterilecektir. Markdown sözdizimiyle ayrıştırılacaktır.';

const F_TIP_MAX_UPLOAD = 'Yüklenen her dosya bu boyutu aşamaz.';
const F_TIP_ALLOCATED_SPACE = 'Bir kullanıcı bu sınıra ulaştığında başka dosya yükleyemez.<br /><em>Dikkat:</em> oturum açmamış hiçbir kullanıcının dosya yüklemesine izin verilmiyorsa (bu varsayılan ayar değildir), bu sınır onlar için geçerli değildir.';

const F_TIP_ID_STATUS = '<b>İpucu:</b> Kimlikleri değiştirirken dikkatli olun, çünkü her sorun eski durum kimliğini korur (bu kimlik artık yoksa: bu durumda varsayılan durum kullanılır).';
const F_TIP_ID_LABEL = '<b>İpucu:</b> Kimlikleri değiştirirken dikkatli olun, çünkü bir sorunun her etiketi eski kimliğini korur (bu kimlik artık yoksa: bu durumda etiket sorundan kaldırılır).';
const F_TIP_ID_GROUP = '<b>İpucu:</b> Kimlikleri değiştirirken dikkatli olun, çünkü her kullanıcı eski grup kimliğini korur (bu kimlik artık yoksa: bu durumda varsayılan grup kullanılır).';
const F_TIP_CAPTCHA = 'Oturum açmamış kullanıcılar için captcha\'nın gösterileceği eylemleri seçin.';
const F_TIP_API_ACCESS = '<em>/database/config_api.php</em> dosyasında API erişimini yapılandırın. Daha fazla bilgi için API.md dosyasına bakın.';

const F_API_ENABLE = 'API\'yi etkinleştir';

const HELP_MARKDOWN = '
<h2>Markdkendi sözdizimi:</h2>

<p>Paragraflar:</p>
<pre><code class="blank no-highlight">Paragraflar bir veya daha fazla boş satırla ayrılır.
Bu nedenle bu metin, satır sonu ne olursa olsun, önceki cümleyle aynı satırda görüntülenecektir.

Yeni bir paragraf oluşturmadan yeni bir satıra başlamak için:
tıpkı burada olduğu gibi, satır sonundan önce 2 boşluk ekleyin.</code></pre>
<p>Vurgu:</p>
<pre><code class="blank no-highlight">*İtalik metin*
_İtatik metin tekrar_

**Kalın metin**
__Kalın metin tekrar__ </code></pre>

<p>Bağlantılar:</p>
<pre><code class="blank no-highlight">Bu, satır içi bağlantının [bir örneğidir](http://example.com). Bu da bir diğeri: &lt;http://example.com&gt;.</code></pre>

<p>Resimler:</p>
<pre><code class="blank no-highlight">![Ben bir resmim.](http://example.com/image.png)</code></pre>

<p>Başlıklar:</p>
<pre><code class="blank no-highlight"># Üst Düzey başlık
## İkinci düzey başlık
### Üçüncü düzey başlık
#### Dördüncü düzey başlık</code></pre>

<p>Listeler:</p>
<pre><code class="blank no-highlight">- bir öğe
* bir diğeri

1. ilk öğe
2. ikinci öğe</code></pre>

<p>Alıntı blokları:</p>
<pre><code class="blank no-highlight">> Ben iki paragraftan oluşan bir alıntı bloğuyum. >
> Ben ikinci paragrafım.</code></pre>

<p>Kod blokları:</p>
<pre><code class="blank no-highlight">Bu bir `satır içi kod bloğu`.</code></pre>
<pre><code class="blank no-highlight"> &lt;?php echo "Ben bir kod bloğuyum, çünkü 4 boşlukla
girintiliyim"; ?&gt;</code></pre>
<pre><code class="blank no-highlight">```
&lt;?php echo "Ben bir kod bloğuyum."; ?&gt;
```

```php
&lt;?php echo "Desteklenen diller şunlardır: bash, cs, ruby, diff, javascript, css, xml, http, java, php, python, sql, ini, perl, json, cpp, markdown, no-highlight"; ?&gt;
```</code></pre>
';

private static $permissions = array(
'home' => array(
'title' => 'Ana Sayfa:',
'description' => 'Ana sayfaya erişebilir ve projelerine ait tüm açık sorunların listesini görüntüleyebilir.'
),
'dashboard' => array(
'title' => 'Panolar:',
'description' => 'Proje panolarına erişebilir.'
),
'issues' => array(
'title' => 'Sorunları görüntüle:',
'description' => 'Genel sorunları görüntüleyebilir.'
),
'private_issues' => array(
'title' => 'Özel sorunları görüntüle:',
'description' => 'Özel olarak etiketlenen sorunları görüntüleyebilir.'
),
'search' => array(
'title' => 'Arama:',
'description' => 'Sorunları arayabilir veya kullanıcılar.'
),
'new_issue' => array(
'title' => 'Yeni sorun:',
'description' => 'Yeni bir sorun gönderilebilir.'
),
'edit_issue' => array(
'title' => 'Sorunları düzenle:',
'description' => 'Tüm sorunların metinlerini düzenleyebilir ve silebilir.'
),
'update_issue' => array(
'title' => 'Sorunları güncelle:',
'description' => 'Sorunları güncelleyebilir: durumu değiştirebilir, etiket ekleyebilir, kapatabilir ve yeniden açabilir, ...'
),
'post_comment' => array(
'title' => 'Yorum gönder:',
'description' => 'Yorum gönderilebilir.'
),
'edit_comment' => array(
'title' => 'Yorumları düzenle:',
'description' => 'Tüm yorumları düzenleyebilir (kullanıcılar kendi yorumlarını yine de düzenleyebilir).'
),
'view_user' => array(
'title' => 'Kullanıcı profilleri:',
'description' => 'Tüm kullanıcı profillerini görüntüleyebilir.'
),
'upload' => array(
'title' => 'Bir dosya gönder:',
'description' => 'Bir yoruma veya yeni bir soruna dosya ekleyebilir.'
),
'view_upload' => array(
'title' => 'Yüklemeleri görüntüle:',
'description' => 'Yüklenen tüm dosyalara erişebilir.'
),
'settings' => array(
'title' => 'Ayarları değiştir:',
'description' => 'Bu sayfaya erişebilir ve tüm genel ayarları değiştirebilir.'
),
'signup' => array(
'title' => 'Kaydol:',
'description' => 'Kaydolabilir.'
),
'view_errors' => array(
'title' => 'Ölümcül hataları görüntüle:',
'description' => 'Ölümcül hataların açıklamasını görüntüleyebilir.'
)
);

public static function permissions($id, $type = 'description') {
return self::$permissions[$id][$type];
}

private static $settings = array(
'validate_url' => 'URL geçerli değil.',
'validate_email' => 'E-posta geçerli değil.',
'private_label_removed' => 'Özel etiketi kaldıramaz veya kimliğini değiştiremezsiniz, ancak adını değiştirebilirsiniz.',
'default_status_removed' => 'Varsayılan durumu kaldıramaz veya kimliğini değiştiremezsiniz, ancak adını değiştirebilirsiniz.',
'default_group_removed' => 'Varsayılan grubu kaldıramaz veya kimliğini değiştiremezsiniz, ancak adını değiştirebilirsiniz.',
'default_group_superuser_removed' => 'Süper kullanıcı grubunu kaldıramaz veya kimliğini değiştiremezsiniz, ancak adını değiştirebilirsiniz.',
'validate_same_username' => 'Uyarı : iki kullanıcının kullanıcı adı aynı.',
'validate_same_project_name' => 'İki proje aynı ada sahip olamaz. Birinin adı otomatik olarak değiştirildi.',
'language_modified' => 'Yeni dilde görüntülemek için bu sayfayı yenileyin.'
);

public static function settings($id) {
return self::$settings[$id];
}

private static $errors = array(
E_ERROR => 'Ölümcül hata',
E_WARNING => 'Uyarı',
E_PARSE => 'Ayrıştırma hatası',
E_NOTICE => 'Bildirim',
E_STRICT => 'Tavsiye',
E_DEPRECATED => 'Kullanımdan kaldırıldı','varsayılan' => 'Hata'
);
public static function errors($hayır) {
return (isset(self::$errors[$hayır])) ? self::$errors[$hayır] : self::$errors['varsayılan'];
}
}

?>