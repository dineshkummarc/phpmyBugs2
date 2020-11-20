<?php

class Trad {

		# Words

	const W_ISSUE = 'Issue';
	const W_OPEN = 'Öffnen';
	const W_OPENED = 'Geöffnet';
	const W_CLOSED = 'Geschlossen';
	const W_REOPENED = 'Wiedereröffnet';
	const W_COMMENTED = 'Kommentiert';
	const W_NOBODY = 'niemand';
	const W_SOMEONE = 'jemand';
	const W_ENABLED = 'Aktiviert';
	const W_DISABLED = 'Deaktiviert';
	const W_NOTFOUND = 'Nicht gefunden';
	const W_FORBIDDEN = 'Verboten';
	const W_MENU = 'Menü';

	const W_EXAMPLE = 'Beispiel';
	const W_HEX = 'Hex';
	const W_RENDERING = 'Rendern';
	const W_ID = 'ID';
	const W_DISPLAY_NAME = 'Anzeigename';
	
	const W_SECONDE = 'second';
	const W_MINUTE = 'Minute';
	const W_HOUR = 'Stunde';
	const W_DAY = 'Tag';
	const W_WEEK = 'Woche';
	const W_MONTH = 'Monat';
	const W_YEAR = 'Jahr';
	const W_DECADE = 'decad';
	const W_SECONDE_P = 'Sekunden';
	const W_MINUTE_P = 'Minuten';
	const W_HOUR_P = 'Stunden';
	const W_DAY_P = 'Tage';
	const W_WEEK_P = 'Wochen';
	const W_MONTH_P = 'Monate';
	const W_YEAR_P = 'Jahre';
	const W_DECADE_P = 'Dekaden';

	const W_PREVIOUS = 'Zurück';
	const W_NEXT = 'Weiter';
	const W_CURRENT = 'Seite %nb1% von %nb2%';

	const W_NOT_LOGGED = 'Nicht protokolliert';

	const W_SUSPENSION = '…';
	const W_EXTRACT = '« %text% »';

	const W_USER = 'Benutzer';
	const W_DEVELOPPER = 'Entwickler';
	const W_SUPERUSER = 'Superuser';
	const W_S_NEW = 'Neu';
	const W_S_CONFIRMED = 'Bestätigt';
	const W_S_ASSIGNED = '%user% zugewiesen';
	const W_S_RESOLVED = 'Gelöst';
	const W_S_REJECTED = 'Abgelehnt';
	const W_L_URGENT = 'Dringend';
	const W_L_IMPROVEMENT = 'Verbesserung';
	const W_L_PRIVATE = 'Privat';

	const W_PROFILEPIC = 'Profilbild';

	const W_RSS = 'RSS-Feed';

		# Verben

	const V_UPDATE = 'Update';
	const V_UPDATE_DETAILS = 'Details aktualisieren';
	const V_UPDATE_CONTENT = 'Inhalt aktualisieren';
	const V_UPDATE_AND = 'Update & %adjective%';
	const V_CANCEL = 'Abbrechen';
	const V_PREVIEW = 'Vorschau';
	const V_COMMENT = 'Kommentar';
	const V_SUBMIT = 'Submit';
	const V_SELECT_FILE = 'Datei auswählen ...';
	const V_UPLOADING = 'Hochladen ...';
	const V_SAVE_CONFIG = 'Einstellungen speichern';
	const V_APPLY = 'Übernehmen';
	const V_EDIT = 'Bearbeiten';
	const V_SIGNUP = 'Anmelden';
	const V_CONTINUE = 'Weiter';
	const V_REMOVE_ISSUE = 'Problem löschen';
	const V_CLOSE = 'close';
	const V_REOPEN = 'wieder öffnen';
	const V_EXPORT = 'Rohdaten exportieren';

		# Sentencies

	const S_NOLABEL = '-';
	const S_NODEPENDENCY = '-';
	const S_COMMENT_LEAVE = 'Hinterlasse einen Kommentar:';
	const S_AGO = '%duration% %pediod% vor';
	const S_ISSUE_ABOUT = 'Zu diesem Problem:';
	const S_UPLOAD_ADD = 'Datei anhängen:';
	const S_WELCOME = 'Willkommen, %user%';
	const S_NEVER = 'Nie';
	const S_ME = 'Von Updates zu Problemen, zu denen ich beigetragen habe';
	const S_ALWAYS = 'Von jedem Update';
	const S_START_NOTIF = 'Über neue Updates informiert werden';
	const S_STOP_NOTIF = 'Updates werden nicht mehr benachrichtigt';
	const S_NOTFOUND = 'Die Seite, nach der Sie suchen, existiert nicht mehr ...';
	const S_FORBIDDEN = 'Sie dürfen nicht auf diese Seite zugreifen. Bitte melden Sie sich an / ab, um fortzufahren. ';

	const S_VIEW_PARTICIPATION = 'Seine Teilnahme anzeigen.';
	const S_VIEW_STATUS = 'Probleme anzeigen "%status%".';

	const S_ISSUE_CREATED = 'von %user% %time%';
	const S_ISSUE_UPDATED = '%adj% von %user% %time%.';
	const S_ISSUE_STATUS_UPDATED = 'Status von %user% %time% auf %status% aktualisiert.';

	const S_RSS_ISSUE_UPDATED = '%adj% von %user%.';
	const S_RSS_ISSUE_STATUS_UPDATED = 'Status von %user% auf "%status%" aktualisiert.';

	const S_INTRO_INSTALL = 'Es sieht so aus, als ob Sie phpmyBugs zum ersten Mal ausführen! Bitte konfigurieren Sie es: ';
	const S_FIRST_ISSUE_TITLE = 'Wie geht es dir, Kürbis?';
	const S_FIRST_ISSUE = 'Ich bin Ihre erste Ausgabe! Nach der Anmeldung können Sie mich löschen. ';

	const S_NO_USER = 'Kein Benutzer stimmt mit Ihrer Anfrage überein.';
	const S_NO_ISSUE = 'Kein Problem entspricht Ihrer Anfrage.';
	const S_MATCHING_ISSUES = '%nb% Übereinstimmungsprobleme';
	const S_NO_ACTIVITY = 'Keine aktuelle Aktivität.';
	const S_NO_UPLOAD = 'Kein Upload.';
	const S_SIZE_REMAINING = '%bleibt% auf %total% erlaubt.';
	const S_NO_PROJECT = 'Kein Projekt.';

	const S_SEARCH = '# 12, @user, words…';
	const S_COPYRIGHT = 'Powered by %name%.';

	const S_LAST_UPDATES = 'Letzte Aktualisierungen…';

		# Alerts

	const A_ERROR_DIRECTORY = '<strong> Fehler: </strong> Verzeichnis "%name%" kann nicht erstellt werden.';
	const A_ERROR_FILE = '<strong> Fehler: </strong> Datei "% name%" kann nicht gelesen werden.';
	const A_ERROR_FILE_WRITE = '<strong> Fehler: </strong> Datei "% name%" kann nicht geschrieben werden.';
	const A_ERROR_FATAL = 'Entschuldigung, etwas ist schief gelaufen. Bitte wenden Sie sich an einen Administrator, wenn das Problem weiterhin besteht. ';
	const A_ERROR = '<strong>% title%: </strong> <br/> <br/>%message% <br/> <br/> Datei "<strong>%file% </strong>" in Zeile <stark>%line% </strong>.';

	const A_SUCCESS_INSTALL = '<strong> Fertig: </strong> phpmyBugs ist jetzt vollständig konfiguriert.';
	const A_ERROR_INSTALL = '<strong> Fehler: </strong> phpmyBugs ist bereits konfiguriert. Bitte entfernen Sie die Konfigurationsdatei, wenn Sie die Konfiguration zurücksetzen möchten. ';
	const A_MODIF_SAVED = 'Änderungen wurden gespeichert.';

	const A_ERROR_FORM = 'Ein Fehler ist aufgetreten. Bitte senden Sie das Formular erneut. ';
	const A_ERROR_TOKEN = 'Falsches Token. Bitte senden Sie das Formular erneut. ';
	const A_ERROR_EMPTY = 'Sie müssen einen Benutzernamen und ein Passwort angeben.';
	const A_ERROR_SAME_USERNAME = 'Dieser Benutzername ist nicht verfügbar.';
	const A_SUCCESS_SIGNUP = '<strong> Fertig: </strong> Sie können sich jetzt anmelden.';

	const A_CONFIRM_DELETE_COMMENT = 'Möchten Sie diesen Kommentar wirklich löschen?';
	const A_SUCCESS_DELETE_COMMENT = 'Der Kommentar wurde gelöscht.';
	const A_CONFIRM_DELETE_ISSUE = 'Möchten Sie dieses Problem wirklich löschen?';
	const A_SUCCESS_DELETE_ISSUE = 'Das Problem wurde gelöscht.';
	const A_CONFIRM_DELETE_UPLOAD = 'Möchten Sie diese Datei wirklich löschen?';
	const A_CONFIRM_DELETE_PROJECT = 'Möchten Sie dieses Projekt wirklich löschen? Alle entsprechenden Probleme gehen verloren. ';

	const A_LOGGED = 'Sie sind jetzt im System angemeldet.';
	const A_LOGGED_OUT = 'Sie sind jetzt vom System abgemeldet.';
	const A_ERROR_CONNEXION = '<strong> Fehler: </strong> Falscher Benutzername oder falsches Passwort.';
	const A_ERROR_CONNEXION_WAIT = '<strong> Fehler: </strong> Falscher Benutzername oder falsches Passwort. Bitte warten Sie %duration% %Zeitraum%, bevor Sie es erneut versuchen. ';
	const A_ERROR_LOGIN_WAIT = 'Bitte warten Sie %duration% %Zeitraum%, bevor Sie es erneut versuchen. Dies ist ein Schutz vor böswilligen Angriffen. ';

	const A_ERROR_UPLOAD = 'Ein Fehler ist aufgetreten. Bitte versuche es erneut.';
	const A_ERROR_UPLOAD_SIZE = 'Datei überschreitet die maximal zulässige Größe (%nb% max).';
	const A_ERROR_UPLOAD_FULL = 'Sie haben nicht genügend Speicherplatz zum Hochladen dieser Datei: %nb% verbleibend.';

	const A_PLEASE_LOGIN_ISSUES = 'Bitte melden Sie sich an, um die Probleme zu sehen.';
	const A_PLEASE_LOGIN_COMMENT = 'Bitte melden Sie sich an, um einen Kommentar zu schreiben. Noch keinen Account? Erstellen Sie eine: Es ist kostenlos und sehr schnell! ';
	const A_PLEASE_LOGIN_ISSUE = 'Bitte melden Sie sich an, um ein Problem einzureichen. Noch keinen Account? Erstellen Sie eine: Es ist kostenlos und sehr schnell! ';
	const A_SHOULD_LOGIN = 'Wenn Sie ein Konto haben, melden Sie sich bitte an. Wenn nicht, erstellen Sie eines: Es ist kostenlos und sehr schnell!';

	const A_IE = 'Ihr Browser ist veraltet: <a href="http://www.browserchoice.eu"> aktualisieren oder ändern </a>.';

		# Mails

	const M_NEW_COMMENT_O = '[%title% - %project% - Problem #%id%] Neuer Kommentar';
	const M_NEW_COMMENT = 'Hallo, %Benutzername%!

	Das Problem #%id% - "%summary%" wurde gerade von %by% kommentiert. Den neuen Kommentar können Sie hier lesen:
	%url%.

	Wenn Sie keine weiteren Benachrichtigungen zu diesem Problem erhalten möchten, ist eine Option (nach der Protokollierung) über den obigen Link verfügbar.

	-----
	Dies ist eine automatisierte E-Mail, bitte antworten Sie nicht.
	';

	const M_NEW_ISSUE_O = '[%title% - %project%] Neue Ausgabe';
	const M_NEW_ISSUE = 'Hallo, %Benutzername%!

	Das Problem #%id% - "%summary%" wurde gerade von %by% übermittelt. Sie können es hier lesen:
	%url%.

	Wenn Sie keine weiteren Benachrichtigungen zu diesem Problem erhalten möchten, ist eine Option (nach der Protokollierung) über den obigen Link verfügbar.

	-----
	Dies ist eine automatisierte E-Mail, bitte antworten Sie nicht.
		';

		# Titles

	const T_INSTALLATION = 'Installation';
	const T_SETTINGS = 'Einstellungen';
	const T_GLOBAL_SETTINGS = 'Globale Einstellungen';
	const T_APPEARANCE = 'Aussehen';
	const T_ISSUES = 'Probleme';
	const T_GROUPS = 'Gruppen';
	const T_USERS = 'Benutzer';
	const T_BROWSE_ISSUES = 'Probleme durchsuchen';
	const T_NEW_ISSUE = 'Neue Ausgabe';
	const T_PROJECTS = 'Projekte';
	const T_DASHBOARD = 'Dashboard';
	const T_LAST_UPDATES = 'Letzte Aktualisierungen';
	const T_LAST_ACTIVITY = 'Letzte Aktivität';
	const T_UPLOADS = 'Uploads';
	const T_SEARCH = 'Suche';

		# FORMS

	const F_USERNAME = 'Benutzername:';
	const F_PASSWORD = 'Passwort:';
	const F_USERNAME2 = 'Benutzername';
	const F_PASSWORD2 = 'Passwort';
	const F_NAME = 'Name:';
	const F_URL = 'Url:';
	const F_URL_REWRITING = 'URL neu schreiben:';
	const F_INTRO = 'Einführung:';
	const F_DESCRIPTION = 'Beschreibung:';
	const F_EMAIL = 'Email:';
	const F_MAX_UPLOAD = 'Maximale Größe pro Upload:';
	const F_ALLOCATED_SPACE = 'Zugewiesener Speicherplatz pro Benutzer:';
	const F_GROUP = 'Gruppe:';
	const F_NOTIFICATIONS = 'Benachrichtigt werden:';
	const F_PROJECT_X = 'Projekt "%name%":';
	const F_LANGUAGE = 'Sprache:';
	const F_LOGS = 'Logs:';

	const F_ISSUES_PAGE = 'Probleme pro Seite:';
	const F_ISSUES_PAGE_SEARCH = 'Probleme pro Seite (Suche):';
	const F_PREVIEW_ISSUE = 'Vorschau der Länge (Probleme):';
	const F_PREVIEW_SEARCH = 'Vorschau Länge (Suche):';
	const F_PREVIEW_PROJECT = 'Vorschau der Länge (Projekte):';
	const F_LAST_EDITS = 'Anzahl der auf Dashboards angezeigten Probleme:';
	const F_LAST_ACTIVITY = 'Anzahl der auf Benutzerseiten angezeigten Probleme:';

	const F_ADD_PROJECT = 'Neues Projekt';
	const F_ADD_COLOR = 'Neue Farbe';
	const F_ADD_STATUS = 'Neuer Status';
	const F_ADD_LABEL = 'Neues Label';
	const F_ADD_GROUP = 'Neue Gruppe';
	const F_ADD_USER = 'Neuer Benutzer';

	const F_SORT_BY = 'Sortieren nach:';
	const F_SORT_ID = 'ID';
	const F_SORT_MOD = 'letzte Aktualisierung';
	const F_SORT_DESC = 'absteigend';
	const F_SORT_ASC = 'aufsteigend';
	const F_FILTER_STATUSES = 'Filterstatus:';
	const F_FILTER_STATES = 'Filterzustände:';
	const F_FILTER_LABELS = 'Filterbeschriftungen:';
	const F_FILTER_USERS = 'Benutzer filtern:';

	const F_WRITE = 'Write:';
	const F_SUMMARY = 'Zusammenfassung';
	const F_CONTENT = 'Inhalt';

	const F_STATUS = 'Status:';
	const F_RELATED = 'Verwandte:';
	const F_LABELS2 = 'Labels:';

	const F_GENERAL_SETTINGS = 'Allgemeine Einstellungen:';
	const F_PROJECTS = 'Projekte:';
	const F_DATABASE = 'Datenbank:';
	const F_UPLOADS = 'Uploads:';
	const F_COLORS = 'Farben verwalten:';
	const F_DISPLAY = 'Anzeige verwalten:';
	const F_STATUSES = 'Status verwalten:';
	const F_LABELS = 'Labels verwalten:';
	const F_GROUPS = 'Gruppen verwalten:';
	const F_PERMISSIONS = 'Berechtigungen verwalten:';
	const F_USERS = 'Benutzer verwalten:';

	const F_TIP_NAME = 'Es wird in der Kopfzeile jeder Seite angezeigt.';
	const F_TIP_URL_REWRITING = 'Lassen Sie dieses Feld leer, um das Umschreiben von URLs zu deaktivieren. Andernfalls sollte es den Pfad zum Ordner phpmyBugs (gestartet und beendet mit einem "/") relativ zum Domänennamen enthalten. ';
	const F_TIP_INTRO = 'Es wird auf der Homepage angezeigt. Es wird mit der Markdown-Syntax analysiert. Hinweis: Wenn nur ein Projekt mit dem Namen "%name%" vorhanden ist, wird die Startseite automatisch zum Projekt-Dashboard umgeleitet, und dieser Text wird nicht angezeigt. ';
	const F_TIP_EMAIL = 'Lassen Sie dieses Feld leer, um E-Mail-Benachrichtigungen zu deaktivieren. Andernfalls wird diese Adresse beim Senden einer E-Mail-Benachrichtigung als Absender verwendet. ';
	const F_TIP_PASSWORD = 'Lass es leer, wenn du das Passwort nicht ändern willst.';
	const F_TIP_USER_EMAIL = 'Nur erforderlich, wenn Sie Benachrichtigungen erhalten möchten.';
	const F_TIP_NOTIFICATIONS = 'Dies ist eine Standardeinstellung: Sie können sie für jedes Problem ändern.';
	const F_TIP_NOTIFICATIONS_DISABLED = 'Hinweis: Benachrichtigungen werden derzeit vom Administrator deaktiviert.';
	const F_TIP_DESCRIPTION = 'Es wird im Projekt-Dashboard angezeigt. Es wird mit der Markdown-Syntax analysiert. ';

	const F_TIP_MAX_UPLOAD = 'Jede hochgeladene Datei darf diese Größe nicht überschreiten.';
	const F_TIP_ALLOCATED_SPACE = 'Ein Benutzer kann keine anderen Dateien hochladen, sobald er dieses Limit erreicht hat. <br /> <em> Achtung: </ em> wenn keine angemeldeten Benutzer Dateien hochladen dürfen (dies ist nicht die Standardeinstellung), Diese Grenze gilt nicht für sie. ';

	const F_TIP_ID_STATUS = '<b> Tipp: </b> Seien Sie vorsichtig, wenn Sie die IDs ändern, da jedes Problem seine alte Status-ID beibehält (außer wenn diese ID nicht mehr vorhanden ist: In diesem Fall wird der Standardstatus verwendet). ';
	const F_TIP_ID_LABEL = '<b> Tipp: </b> Seien Sie vorsichtig, wenn Sie die IDs ändern, da jedes Etikett eines Problems seine alte ID behält (außer wenn diese ID nicht mehr vorhanden ist: In diesem Fall wird das Etikett aus dem entfernt Problem).';
	const F_TIP_ID_GROUP = '<b> Tipp: </b> Seien Sie vorsichtig, wenn Sie die IDs ändern, da jeder Benutzer seine alte Gruppen-ID beibehält (außer wenn diese ID nicht mehr vorhanden ist: In diesem Fall wird die Standardgruppe verwendet). ';

	const HELP_MARKDOWN = '
	<h2> Markdown-Syntax: </h2>

	<p> Absätze: </p>
	<pre> <code class = "Leerzeichen ohne Hervorhebung"> Absätze werden durch eine oder mehrere Leerzeilen getrennt.
	Aus diesem Grund wird dieser Text unabhängig vom Zeilenumbruch in derselben Zeile wie der vorherige Satz angezeigt.

	So beginnen Sie eine neue Zeile, ohne einen neuen Absatz zu erstellen:
	Fügen Sie wie hier 2 Leerzeichen vor dem Zeilenumbruch ein. </code> </pre>
	<p> Schwerpunkt: </p>
	<pre> <code class = "leeres No-Highlight"> * Kursiver Text *
	_Itatischer Text wieder_

	** Fettgedruckter Text **
	__ Nochmals fetter Text__ </code> </pre>

	<p> Links: </p>
	<pre> <code class = "blank no-Highlight"> Dies ist [ein Beispiel] (http://example.com) eines Inline-Links.
	Dies ist eine andere: &lt; http://example.com&gt;. </Code> </pre>

	<p> Bilder: </p>
	<pre> <code class = "leer, kein Highlight">! [Ich bin ein Bild.] (http://example.com/image.png) </code> </pre>

	<p> Überschriften: </p>
	<pre> <code class = "leer, kein Highlight"> # Titel der obersten Ebene
	## Titel der zweiten Ebene
	### Titel der dritten Ebene
	#### Titel der vierten Ebene </code> </pre>

	<p> Listen: </p>
	<pre> <code class = "leer, kein Highlight"> - ein Element
	* noch einer

	1. erster Punkt
	2. zweites Element </code> </pre>

	<p> Blockzitate: </p>
	<pre> <code class = "leeres No-Highlight" >> Ich bin ein Blockzitat mit zwei Absätzen.
	>
	> Ich bin der zweite Absatz. </Code> </pre>

	<p> Codeblöcke: </p>
	<pre> <code class = "blank no-Highlight"> Dies ist ein Inline-Codeblock. </code> </pre>
	<pre> <code class = "leer, kein Highlight"> &lt;? php echo "Ich bin ein Codeblock, weil ich eingerückt bin
		mit 4 Leerzeichen ";?&gt; </code> </pre>
	<pre> <code class = "leeres No-Highlight"> `` `
	&lt;?php echo "Ich bin ein Codeblock."; &gt;
	`` `

	`` `php
	&lt;?php echo "Unterstützte Sprachen sind: Bash, CS, Ruby, Diff, Javascript, CSS, XML, http, Java, PHP, Python, SQL, INI, Perl, JSON, CPP, Markdown, No-Highlight"; &gt;
	`` `</code> </pre>
	';

	private static $permissions = array(
		'home' => array (
	'title' => 'Home:',
	'description' => 'Kann auf die Homepage zugreifen.'
	),
	'Dashboard' => Array (
	'title' => 'Dashboards:',
	'description' => 'Kann auf die Projekt-Dashboards zugreifen.'
	),
	'Issues' => Array (
	'title' => 'Probleme anzeigen:',
	'description' => 'Kann öffentliche Themen anzeigen.'
	),
	'private_issues' => array (
	'title' => 'Private Ausgaben anzeigen:',
	'description' => 'Kann als privat gekennzeichnete Probleme anzeigen.'
	),
	'search' => array (
	'title' => 'Search:',
	'description' => 'Kann Probleme oder Benutzer suchen.'
	),
	'new_issue' => array (
	'title' => 'Neue Ausgabe:',
	'description' => 'Kann eine neue Ausgabe einreichen.'
	),
	'edit_issue' => array (
	'title' => 'Probleme bearbeiten:',
	'description' => 'Kann den Text aller Probleme bearbeiten und löschen.'
	),
	'update_issue' => array (
	'title' => 'Update-Probleme:',
	'description' => 'Kann Probleme aktualisieren: Status ändern, Beschriftungen hinzufügen, schließen und wieder öffnen, ...'
	),
	'post_comment' => array (
	'title' => 'Kommentar schreiben:',
	'description' => 'Kann einen Kommentar posten.'
	),
	'edit_comment' => array (
	'title' => 'Kommentare bearbeiten:',
	'description' => 'Kann alle Kommentare bearbeiten (Benutzer können trotzdem ihre eigenen Kommentare bearbeiten).'
	),
	'view_user' => array (
	'title' => 'Benutzerprofile:',
	'description' => 'Kann alle Benutzerprofile anzeigen.'
	),
	'upload' => array (
	'title' => 'Poste eine Datei:',
	'description' => 'Kann Dateien an einen Kommentar oder ein neues Problem anhängen.'
	),
	'view_upload' => array (
	'title' => 'Uploads anzeigen:',
	'description' => 'Kann auf alle hochgeladenen Dateien zugreifen.'
	),
	'settings' => array (
	'title' => 'Einstellungen ändern:',
	'description' => 'Kann auf diese Seite zugreifen und alle globalen Einstellungen ändern.'
	),
	'signup' => array (
	'title' => 'Anmelden:',
	'description' => 'Kann sich anmelden.'
	),
	'view_errors' => array (
	'title' => 'Schwerwiegende Fehler anzeigen:',
	'description' => 'Kann die Beschreibung schwerwiegender Fehler anzeigen.'
	)
	);

	public static function permissions($id, $type = 'Beschreibung') {
		return self::$permissions[$id][$type];
	}

	private static $settings = array(
		'validate_url' => 'Die URL ist ungültig.',
	'validate_email' => 'Die E-Mail ist ungültig.',
	'private_label_removed' => 'Sie können das Private Label nicht entfernen oder seine ID ändern, aber Sie können es umbenennen.',
	'default_status_removed' => 'Sie können den Standardstatus nicht entfernen oder seine ID ändern, aber Sie können ihn umbenennen.',
	'default_group_removed' => 'Sie können die Standardgruppe nicht entfernen oder ihre ID ändern, aber Sie können sie umbenennen.',
	'default_group_superuser_removed' => 'Sie können die Superuser-Gruppe nicht entfernen oder ihre ID ändern, aber Sie können sie umbenennen.',
	'validate_same_username' => 'Warnung: Zwei Benutzer haben denselben Benutzernamen.',
	'validate_same_project_name' => 'Zwei Projekte können nicht denselben Namen haben. Einer wurde automatisch umbenannt. ',
	'language_modified' => 'Aktualisiere diese Seite, um sie in der neuen Sprache anzuzeigen.'
	);

	public static function settings($id) {
		return self::$settings[$id];
	}

	private static $errors = array(
		E_ERROR => 'Schwerwiegender Fehler',
	E_WARNING => 'Warnung',
	E_PARSE => 'Analysefehler',
	E_NOTICE => 'Hinweis',
	E_STRICT => 'Beratung',
	E_DEPRECATED => 'Veraltet',
	'default' => 'Fehler'
	);
	public static function errors($no) {
		return (isset(self::$errors[$no])) ? self::$errors[$no] : self::$errors['Standard'];
	}
}

?>