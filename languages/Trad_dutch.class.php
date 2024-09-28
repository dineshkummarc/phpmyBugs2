<?php

class Trad {

# Woorden

const W_ISSUE = 'Probleem';
const W_OPEN = 'Open';
const W_OPENED = 'Geopend';
const W_CLOSED = 'Gesloten';
const W_REOPENED = 'Heropend';
const W_COMMENTED = 'Gecommenteerd';
const W_NOBODY = 'niemand';
const W_SOMEONE = 'iemand';
const W_ENABLED = 'Ingeschakeld';
const W_DISABLED = 'Uitgeschakeld';
const W_NOTFOUND = 'Niet gevonden';
const W_FORBIDDEN = 'Verboden';
const W_MENU = 'Menu';

const W_EXAMPLE = 'Voorbeeld';
const W_HEX = 'Hex';
const W_RENDERING = 'Rendering';
const W_ID = 'ID';
const W_DISPLAY_NAME = 'Weergavenaam';

const W_SECONDE = 'seconde';
const W_MINUTE = 'minuut';
const W_HOUR = 'uur';
const W_DAY = 'dag';
const W_WEEK = 'week';
const W_MONTH = 'maand';
const W_YEAR = 'jaar';
const W_DECADE = 'decad';
const W_SECONDE_P = 'seconden';
const W_MINUTE_P = 'minuten';
const W_HOUR_P = 'uren';
const W_DAY_P = 'dagen';
const W_WEEK_P = 'weken';
const W_MONTH_P = 'maanden';
const W_YEAR_P = 'jaren';
const W_DECADE_P = 'decads';

const W_PREVIOUS = 'Vorige';
const W_NEXT = 'Volgende';
const W_MORE = 'MEER';
const W_CURRENT = 'Pagina %nb1% van %nb2%';

const W_NOT_LOGGED = 'Niet ingelogd';

const W_SUSPENSION = '…';
const W_EXTRACT = '“%text%”';

const W_USER = 'Gebruiker';
const W_DEVELOPPER = 'Ontwikkelaar';
const W_SUPERUSER = 'Supergebruiker';
const W_S_NEW = 'Nieuw';
const W_S_CONFIRMED = 'Bevestigd';
const W_S_ASSIGNED = 'Toegewezen aan %user%';
const W_S_RESOLVED = 'Opgelost';
const W_S_REJECTED = 'Afgewezen';
const W_L_URGENT = 'Urgent';
const W_L_IMPROVEMENT = 'Verbetering';
const W_L_PRIVATE = 'Privé';

const W_PROFILEPIC = 'profielfoto';

const W_RSS = 'RSS-feed';
const W_VERSION = 'Versie';

const W_CAPTCHA_IMAGE = 'CAPTCHA-afbeelding';
const W_CAPTCHA_REFRESH = 'Afbeelding vernieuwen';
const W_CAPTCHA_INPUT = 'Typ de tekst:';

# Verbes

const V_UPDATE = 'Bijwerken';
const V_UPDATE_DETAILS = 'Details bijwerken';
const V_UPDATE_CONTENT = 'Inhoud bijwerken';
const V_UPDATE_AND = '& %adjective% bijwerken';
const V_CANCEL = 'Annuleren';
const V_PREVIEW = 'Voorbeeld';
const V_COMMENT = 'Opmerking';
const V_SUBMIT = 'Verzenden';
const V_SELECT_FILE = 'Selecteer een bestand…';
const V_UPLOADING = 'Uploaden…';
const V_SAVE_CONFIG = 'Instellingen opslaan';
const V_APPLY = 'Toepassen';
const V_EDIT = 'Bewerken';
const V_SIGNUP = 'Aanmelden';
const V_LOGIN = 'Inloggen';
const V_CONTINUE = 'Doorgaan';
const V_REMOVE_ISSUE = 'Probleem verwijderen';
const V_CLOSE = 'Sluiten';
const V_REOPEN = 'opnieuw openen';
const V_EXPORT = 'ruwe data exporteren';

# Zinnen

const S_NOLABEL = '–';
const S_NODEPENDENCY = '–';
const S_COMMENT_LEAVE = 'Geef een reactie:';
const S_AGO = '%duration% %pediod% geleden';
const S_ISSUE_ABOUT = 'Over dit probleem:';
const S_UPLOAD_ADD = 'Bestand bijvoegen:';
const S_WELCOME = 'Welkom, %user%';
const S_NEVER = 'Nooit';
const S_ME = 'Van updates over problemen waaraan ik heb bijgedragen';
const S_ALWAYS = 'Van elke update';
const S_START_NOTIF = 'Word op de hoogte gebracht van nieuwe updates';
const S_STOP_NOTIF = 'Word niet langer op de hoogte gebracht van updates';
const S_NOTFOUND = 'De pagina die u zoekt bestaat niet meer...';
const S_FORBIDDEN = 'U mag deze pagina niet openen. Meld u aan/af om verder te gaan.';

const S_VIEW_PARTICIPATION = 'Bekijk zijn deelname.';
const S_VIEW_STATUS = 'Bekijk problemen “%status%”.';

const S_ISSUE_CREATED = 'door %user% %time%';
const S_ISSUE_UPDATED = '%adj% door %user% %time%.';
const S_ISSUE_STATUS_UPDATED = 'Status bijgewerkt naar %status% door %user% %time%.';

const S_RSS_ISSUE_UPDATED = '%adj% door %user%.';
const S_RSS_ISSUE_STATUS_UPDATED = 'Status bijgewerkt naar “%status%” door %user%.';

const S_INTRO_INSTALL = 'Het lijkt erop dat dit de eerste keer is dat je phpmyBugs uitvoert! Configureer het als volgt:';
const S_FIRST_ISSUE_TITLE = 'Hoe gaat het met je, schatje?';
const S_FIRST_ISSUE = 'Ik ben je eerste probleem! Na het inloggen kun je me verwijderen.';

const S_NO_USER = 'Geen gebruiker komt overeen met je verzoek.';
const S_NO_ISSUE = 'Geen probleem komt overeen met je verzoek.';
const S_MATCHING_ISSUES = '%nb% overeenkomende problemen';
const S_NO_ACTIVITY = 'Geen recente activiteit.';
const S_NO_UPLOAD = 'Geen upload.';
const S_SIZE_REMAINING = '%remain% resterend op de toegestane %total%.';
const S_NO_PROJECT = 'Geen project.';

const S_SEARCH = '#12, @user, woorden…';
const S_COPYRIGHT = 'Powered by %name%.';
const S_UPGRADE = 'Haal de nieuwste versie van <a href="https://github.com/bugtrackr/Nireus/releases/latest">GitHub</a> op om <a href="https://bugtrackr.github.io/wiki/upgrade/">te upgraden</a>.';

const S_LAST_UPDATES = 'Laatste updates…';

const S_STAY_LOGGEDIN = 'Houd mij aangemeld';

const S_DEFAULT_DEFPROJ_DESC = 'Dit is het standaardproject waar iedereen toegang toe heeft.';
const S_DEFAULT_2NDPROJ_DESC = 'Dit zou je 2e projectproject kunnen zijn waar alleen geregistreerde gebruikers problemen mogen posten.';

# Waarschuwingen

const A_ERROR_DIRECTORY = '<strong>Fout:</strong> kan directory “%name%” niet aanmaken.';
const A_ERROR_FILE = '<strong>Fout:</strong> kan bestand “%name%” niet lezen.';
const A_ERROR_FILE_WRITE = '<strong>Fout:</strong> kan bestand “%name%” niet schrijven.';
const A_ERROR_FATAL = 'Sorry, er is iets misgegaan. Neem contact op met een beheerder als dit probleem zich blijft voordoen.';
const A_ERROR = '<strong>%title%:</strong><br /><br />%message%<br /><br />Bestand “<strong>%file%</strong>” op regel <strong>%line%</strong>.';

const A_SUCCESS_INSTALL = '<strong>Klaar:</strong> phpmyBugs is nu volledig geconfigureerd.';
const A_ERROR_INSTALL = '<strong>Fout:</strong> phpmyBugs is al geconfigureerd. Verwijder het configuratiebestand als u de configuratie wilt resetten.';
const A_MODIF_SAVED = 'Wijzigingen zijn opgeslagen.';

const A_ERROR_FORM = 'Er is een fout opgetreden. Stuur het formulier opnieuw.';
const A_ERROR_TOKEN = 'Verkeerd token. Stuur het formulier opnieuw.';
const A_ERROR_EMPTY = 'U moet een gebruikersnaam en wachtwoord opgeven.';
const A_ERROR_SAME_USERNAME = 'Deze gebruikersnaam is niet beschikbaar.';
const A_SUCCESS_SIGNUP = '<strong>Klaar:</strong> U kunt nu inloggen.';

const A_CONFIRM_DELETE_COMMENT = 'Weet u zeker dat u deze opmerking wilt verwijderen?';
const A_SUCCESS_DELETE_COMMENT = 'De opmerking is verwijderd.';
const A_CONFIRM_DELETE_ISSUE = 'Weet u zeker dat u dit probleem wilt verwijderen?';
const A_SUCCESS_DELETE_ISSUE = 'Het probleem is verwijderd.';
const A_CONFIRM_DELETE_UPLOAD = 'Weet u zeker dat u dit bestand wilt verwijderen?';
const A_CONFIRM_DELETE_PROJECT = 'Weet u zeker dat u dit project wilt verwijderen? Alle bijbehorende problemen gaan verloren.';

const A_LOGGED = 'U bent nu ingelogd op het systeem.';
const A_LOGGED_OUT = 'U bent nu uitgelogd van het systeem.';
const A_ERROR_CONNEXION = '<strong>Fout:</strong> Onjuiste gebruikersnaam of wachtwoord.';
const A_ERROR_CONNEXION_WAIT = '<strong>Fout:</strong> Onjuiste gebruikersnaam of wachtwoord. Wacht %duration% %period% voordat u het opnieuw probeert.';
const A_ERROR_LOGIN_WAIT = 'Wacht %duration% %period% voordat u het opnieuw probeert. Dit is een bescherming tegen kwaadaardige aanvallen.';

const A_ERROR_UPLOAD = 'Er is een fout opgetreden. Probeer het opnieuw.';
const A_ERROR_UPLOAD_SIZE = 'Bestand overschrijdt de maximaal toegestane grootte (%nb% max).';
const A_ERROR_UPLOAD_FULL = 'U hebt niet genoeg schijfruimte om dit bestand te uploaden: %nb% resterend.';

const A_PLEASE_LOGIN_ISSUES = 'Meld u aan om de problemen te bekijken.';
const A_PLEASE_LOGIN_COMMENT = 'Meld u aan om een ​​opmerking te plaatsen. Nog geen account? Maak er een aan: het is gratis en heel snel!';
const A_PLEASE_LOGIN_ISSUE = 'Meld u aan om een ​​probleem te melden. Nog geen account? Maak er een aan: het is gratis en heel snel!';
const A_SHOULD_LOGIN = 'Als u een account hebt, log dan in. Als u dat niet hebt, overweeg dan om er een aan te maken: het is gratis en heel snel!';

const A_IE = 'Uw browser is verouderd: <a href="https://www.browser-update.org/en/update.html">upgrade of wijzig deze</a>.';

# Mails

const M_NEW_COMMENT_O = '[%title% — %project% — Issue #%id%] Nieuwe opmerking';
const M_NEW_COMMENT = 'Hallo, %username%!

Het probleem #%id% — “%summary%” is zojuist becommentarieerd door %by%. U kunt de nieuwe opmerking hier lezen:
%url%.

Als u geen verdere meldingen over dit probleem wilt ontvangen, is er een optie beschikbaar (na het inloggen) via de bovenstaande link.

-----
Dit is een geautomatiseerde e-mail, reageer alstublieft niet.
';

const M_NEW_ISSUE_O = '[%title% — %project%] Nieuw probleem';
const M_NEW_ISSUE = 'Hallo, %username%!

Het probleem #%id% — “%summary%” is zojuist ingediend door %by%. U kunt het hier lezen:
%url%.

Als u geen verdere meldingen over dit probleem wilt ontvangen, is er een optie beschikbaar (na het inloggen) via de bovenstaande link.

-----
Dit is een geautomatiseerde e-mail, reageer niet.
';

# Titels

const T_INSTALLATION = 'Installatie';
const T_SETTINGS = 'Instellingen';
const T_GLOBAL_SETTINGS = 'Globale instellingen';
const T_APPEARANCE = 'Uiterlijk';
const T_ISSUES = 'Problemen';
const T_GROUPS = 'Groepen';
const T_USERS = 'Gebruikers';
const T_PERMISSIONS = 'Machtigingen';
const T_ENABLE_CAPTCHA = 'Captcha beheren';
const T_CAPTCHA = 'Captcha';
const T_BROWSE_ISSUES = 'Problemen bekijken';
const T_BROWSE_ALL_ISSUES = 'Alle problemen bekijken';
const T_ALL_ISSUES_DESCRIPTION = 'Dit zijn alle openstaande problemen voor alle projecten';
const T_NEW_ISSUE = 'Nieuw probleem';
const T_ALL_ISSUES = 'Alle problemen';
const T_PROJECTS = 'Projecten';
const T_DASHBOARD = 'Dashboard';
const T_LAST_UPDATES = 'Laatste updates';
const T_LAST_ACTIVITY = 'Laatste activiteit';
const T_UPLOADS = 'Uploads';
const T_SEARCH = 'Zoeken';
const T_LINK_CONTACT = 'Contact opnemen';
const T_LINK_LEGALNOTICE = 'Juridische kennisgeving';
const T_LINK_PRIVACYPOLICY = 'Privacybeleid';
const T_API_SETTINGS = 'API';
const T_API_ENABLE_SETTINGS = 'API beheren';
const T_API_ACCESS_SETTINGS = 'API-toegang';
const T_INFO = 'Info';

# FORMULIEREN

const F_USERNAME = 'Gebruikersnaam:';
const F_PASSWORD = 'Wachtwoord:';
const F_USERNAME2 = 'Gebruikersnaam';
const F_PASSWORD2 = 'Wachtwoord';
const F_NAME = 'Naam:';
const F_URL = 'Url:';
const F_URL_CDN = 'CDN-URL:';
const F_URL_REWRITING = 'Url herschrijven:';
const F_INTRO = 'Inleiding:';
const F_DESCRIPTION = 'Beschrijving:';
const F_EMAIL = 'E-mail:';
const F_LINK_CONTACT = 'Link naar externe contactpagina (kan leeg gelaten worden):';
const F_LINK_LEGALNOTICE = 'Link naar juridische kennisgeving (kan leeg gelaten worden):';
const F_LINK_PRIVACYPOLICY = 'Link naar privacybeleid (kan leeg gelaten worden):';
const F_MAX_UPLOAD = 'Maximale grootte per upload:';
const F_ALLOCATED_SPACE = 'Toegewezen ruimte per gebruiker:';
const F_GROUP = 'Groep:';
const F_NOTIFICATIONS = 'Word op de hoogte gebracht:';
const F_PROJECT_X = 'Project “%name%”:';
const F_LANGUAGE = 'Taal:';
const F_LOGS = 'Logboeken:';

const F_ISSUES_PAGE = 'Problemen per pagina:';
const F_ISSUES_PAGE_SEARCH = 'Problemen per pagina (zoeken):';
const F_PREVIEW_ISSUE = 'Lengte previews (problemen):';
const F_PREVIEW_SEARCH = 'Lengte previews (zoeken):';
const F_PREVIEW_PROJECT = 'Lengte previews (projecten):';
const F_LAST_EDITS = 'Aantal problemen weergegeven op dashboards:';
const F_LAST_ACTIVITY = 'Aantal problemen weergegeven op gebruikerspagina\'s:';
const F_THEME = "Thema";
const F_TIP_THEME = "Plaats het .css-bestand in";

const F_ADD_PROJECT = 'Nieuw project';
const F_ADD_COLOR = 'Nieuwe kleur';
const F_ADD_STATUS = 'Nieuwe status';
const F_ADD_LABEL = 'Nieuw label';
const F_ADD_GROUP = 'Nieuwe groep';
const F_ADD_USER = 'Nieuwe gebruiker';

const F_SORT_BY = 'Sorteren op:';
const F_SORT_ID = 'ID';
const F_SORT_MOD = 'laatste update';
const F_SORT_DESC = 'aflopend';
const F_SORT_ASC = 'oplopend';
const F_FILTER_STATUSES = 'Filterstatussen:';
const F_FILTER_STATES = 'Filterstatussen:';
const F_FILTER_LABELS = 'Filterlabels:';
const F_FILTER_USERS = 'Filtergebruikers:';
const F_FILTER_MILESTONE = 'Filtermijlpaal:';

const F_WRITE = 'Schrijven:';
const F_SUMMARY = 'Samenvatting';
const F_CONTENT = 'Inhoud';

const F_STATUS = 'Status:';
const F_RELATED = 'Gerelateerd:';
const F_LABELS2 = 'Labels:';
const F_MILESTONE = 'Mijlpaal:';

const F_GENERAL_SETTINGS = 'Algemene instellingen:';
const F_PROJECTS = 'Projecten:';
const F_DATABASE = 'Database:';
const F_UPLOADS = 'Uploads:';
const F_COLORS = 'Kleuren beheren:';
const F_DISPLAY = 'Weergave beheren:';
const F_STATUSES = 'Statussen beheren:';
const F_LABELS = 'Labels beheren:';
const F_GROUPS = 'Groepen beheren:';
const F_PERMISSIONS = 'Machtigingen beheren:';
const F_USERS = 'Gebruikers beheren:';

const F_INVALID_CAPTCHA = 'De CAPTCHA die u hebt ingevoerd, was onjuist. Probeer het opnieuw.';

const F_TIP_NAME = 'Deze wordt weergegeven in de header van elke pagina.';
const F_TIP_URL_REWRITING = 'Laat dit veld leeg om het herschrijven van URL\'s uit te schakelen. Anders moet het het pad naar de map phpmyBugs bevatten (begonnen en eindigend met een "\/"), relatief ten opzichte van de domeinnaam.';
const F_TIP_URL_CDN = 'Laat dit veld leeg om CDN uit te schakelen. Anders moet het de URL van uw CDN bevatten (bijvoorbeeld <em>https://cdn.rawgit.com/bugtrackr/Nireus/master/</em>, voel u vrij om deze te gebruiken). Zorg ervoor dat alle bestanden uit de map <em>/public</em> op uw CDN worden gehost.';
const F_TIP_INTRO = 'Dit wordt weergegeven op de startpagina. Het wordt geparseerd met de Markdown-syntaxis. Let op: als er maar één project is met de naam "%name%", wordt de startpagina automatisch doorgestuurd naar het projectdashboard en wordt deze tekst niet weergegeven.';
const F_TIP_EMAIL = 'Laat dit veld leeg om e-mailmeldingen uit te schakelen. Anders wordt dit adres gebruikt als afzender bij het verzenden van een e-mailmelding.';
const F_TIP_PASSWORD = 'Laat dit leeg als u het wachtwoord niet wilt wijzigen.';
const F_TIP_USER_EMAIL = 'Alleen vereist als u meldingen wilt ontvangen.';
const F_TIP_NOTIFICATIONS = 'Dit is een standaardinstelling: u kunt dit voor elk probleem wijzigen.';
const F_TIP_NOTIFICATIONS_DISABLED = 'Let op: meldingen zijn momenteel uitgeschakeld door de beheerder.';
const F_TIP_DESCRIPTION = 'Het wordt weergegeven op het projectdashboard. Het wordt geparseerd met de markdown-syntaxis.';

const F_TIP_MAX_UPLOAD = 'Elk geüpload bestand mag deze grootte niet overschrijden.';
const F_TIP_ALLOCATED_SPACE = 'Een gebruiker kan geen andere bestanden uploaden zodra hij deze limiet heeft bereikt.<br /><em>Let op:</em> als niet-ingelogde gebruikers bestanden mogen uploaden (dit is niet de standaardinstelling), is deze limiet niet op hen van toepassing.';

const F_TIP_ID_STATUS = '<b>Tip:</b> wees voorzichtig bij het wijzigen van de ID\'s, omdat elk probleem zijn oude status-ID behoudt (behalve als deze ID niet meer bestaat: in dat geval wordt de standaardstatus gebruikt).';
const F_TIP_ID_LABEL = '<b>Tip:</b> wees voorzichtig bij het wijzigen van de ID\'s, omdat elk label van een issue zijn oude ID behoudt (behalve als deze ID niet meer bestaat: in dat geval wordt het label van het issue verwijderd).';
const F_TIP_ID_GROUP = '<b>Tip:</b> wees voorzichtig bij het wijzigen van de ID\'s, omdat elke gebruiker zijn oude groeps-ID behoudt (behalve als deze ID niet meer bestaat: in dat geval wordt de standaardgroep gebruikt).';
const F_TIP_CAPTCHA = 'Kies de acties waarbij een captcha wordt weergegeven voor niet-ingelogde gebruikers.';
const F_TIP_API_ACCESS = 'Configureer API-toegang in het bestand <em>/database/config_api.php</em>. Zie het bestand API.md voor meer informatie.';

const F_API_ENABLE = 'API inschakelen';

const HELP_MARKDOWN = '
<h2>Markereneigen syntaxis:</h2>

<p>Alinea\'s:</p>
<pre><code class="blank no-highlight">Alinea\'s worden gescheiden door een of meer lege regels.
Daarom wordt deze tekst op dezelfde regel weergegeven als de vorige zin, ongeacht de regelafbreking.

Om een ​​nieuwe regel te beginnen zonder een nieuwe alinea te maken:
voeg 2 spaties in voor de regelafbreking, net als hier.</code></pre>
<p>Nadruk:</p>
<pre><code class="blank no-highlight">*Cursieve tekst*
_Opnieuw cursieve tekst_

**Vetgedrukte tekst**
__Opnieuw vetgedrukte tekst__ </code></pre>

<p>Links:</p>
<pre><code class="blank no-highlight">Dit is [een voorbeeld](http://example.com) van een inline link. Dit is er nog een: &lt;http://example.com&gt;.</code></pre>

<p>Afbeeldingen:</p>
<pre><code class="blank no-highlight">![Ik ben een afbeelding.](http://example.com/image.png)</code></pre>

<p>Kopteksten:</p>
<pre><code class="blank no-highlight"># Titel op het hoogste niveau
## Titel op het tweede niveau
### Titel op het derde niveau
#### Titel op het vierde niveau</code></pre>

<p>Lijsten:</p>
<pre><code class="blank no-highlight">- één item
* nog een

1. eerste item
2. tweede item</code></pre>

<p>Blokcitaten:</p>
<pre><code class="blank no-highlight">> Ik ben een blokcitaat met twee alinea\'s. >
> Ik ben de tweede alinea.</code></pre>

<p>Codeblokken:</p>
<pre><code class="blank no-highlight">Dit is een `inline codeblok`.</code></pre>
<pre><code class="blank no-highlight"> &lt;?php echo "Ik ben een codeblok, omdat ik ben
ingesprongen met 4 spaties"; ?&gt;</code></pre>
<pre><code class="blank no-highlight">```
&lt;?php echo "Ik ben een codeblok."; ?&gt;
```

```php
&lt;?php echo "Ondersteunde talen zijn: bash, cs, ruby, diff, javascript, css, xml, http, java, php, python, sql, ini, perl, json, cpp, markdown, no-highlight"; ?&gt;
```</code></pre>
';

private static $permissions = array(
'home' => array(
'title' => 'Home:',
'description' => 'Kan toegang krijgen tot de startpagina en een lijst bekijken van alle openstaande problemen voor zijn projecten.'
),
'dashboard' => array(
'title' => 'Dashboards:',
'description' => 'Kan toegang krijgen tot de projectdashboards.'
),
'issues' => array(
'title' => 'Problemen bekijken:',
'description' => 'Kan openbare problemen bekijken.'
),
'private_issues' => array(
'title' => 'Privéproblemen bekijken:',
'description' => 'Kan problemen bekijken die als privé zijn gemarkeerd.'
),
'search' => array(
'title' => 'Zoeken:',
'description' => 'Kan problemen of gebruikers zoeken.'
),
'new_issue' => array(
'title' => 'Nieuw issue:',
'description' => 'Kan een nieuw issue indienen.'
),
'edit_issue' => array(
'title' => 'Problemen bewerken:',
'description' => 'Kan de tekst van alle issues bewerken en verwijderen.'
),
'update_issue' => array(
'title' => 'Problemen bijwerken:',
'description' => 'Kan issues bijwerken: status wijzigen, labels toevoegen, sluiten en opnieuw openen, ...'
),
'post_comment' => array(
'title' => 'Een opmerking plaatsen:',
'description' => 'Kan een opmerking plaatsen.'
),
'edit_comment' => array(
'title' => 'Opmerkingen bewerken:',
'description' => 'Kan alle opmerkingen bewerken (gebruikers kunnen hoe dan ook hun eigen opmerkingen bewerken).'
),
'view_user' => array(
'title' => 'Gebruikersprofielen:',
'description' => 'Kan bekijken alle gebruikersprofielen.'
),
'upload' => array(
'title' => 'Bestand plaatsen:',
'description' => 'Kan bestanden toevoegen aan een opmerking of een nieuw probleem.'
),
'view_upload' => array(
'title' => 'Uploads bekijken:',
'description' => 'Kan toegang krijgen tot alle geüploade bestanden.'
),
'settings' => array(
'title' => 'Instellingen wijzigen:',
'description' => 'Kan toegang krijgen tot deze pagina en alle algemene instellingen wijzigen.'
),
'signup' => array(
'title' => 'Aanmelden:',
'description' => 'Kan aanmelden.'
),
'view_errors' => array(
'title' => 'Fatale fouten bekijken:',
'description' => 'Kan de beschrijving van fatale fouten bekijken.'
)
);

public static function permissions($id, $type = 'beschrijving') {
return self::$permissies[$id][$type];
}

private static $settings = array(
'validate_url' => 'De url is niet geldig.',
'validate_email' => 'Het e-mailadres is niet geldig.',
'private_label_removed' => 'Je kunt het private label niet verwijderen of de ID ervan wijzigen, maar je kunt het wel hernoemen.',
'default_status_removed' => 'Je kunt de standaardstatus niet verwijderen of de ID ervan wijzigen, maar je kunt het wel hernoemen.',
'default_group_removed' => 'Je kunt de standaardgroep niet verwijderen of de ID ervan wijzigen, maar je kunt het wel hernoemen.',
'default_group_superuser_removed' => 'Je kunt de superusergroep niet verwijderen of de ID ervan wijzigen, maar je kunt het wel hernoemen.',
'validate_same_username' => 'Waarschuwing: twee gebruikers hebben dezelfde gebruikersnaam.',
'validate_same_project_name' => 'Twee projecten kunnen niet dezelfde naam hebben. Eén is automatisch hernoemd.',
'language_modified' => 'Vernieuw deze pagina om deze in de nieuwe taal te bekijken.'
);

public static function settings($id) {
return self::$settings[$id];
}

private static $errors = array(
E_ERROR => 'Fatale fout',
E_WARNING => 'Waarschuwing',
E_PARSE => 'Parseerfout',
E_NOTICE => 'Kennisgeving',
E_STRICT => 'Advies',
E_DEPRECATED => 'Verouderd','standaard' => 'Fout'
);

public static function errors($no) {
return (isset(self::$fouten[$no])) ? self::$fouten[$no] : self::$fouten['standaard'];
}
}

?>