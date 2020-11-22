<?php

class Trad {

		# Words

	const W_ISSUE = 'अंक';
	const W_OPEN = 'ओपन';
	const W_OPENED = 'खोला';
	const W_CLOSED = 'बंद';
	const W_REOPENED = 'फिर से खोला';
	const W_COMMENTED = 'टिप्पणी';
	const W_NOBODY = 'कोई नहीं';
	const W_SOMEONE = 'कोई';
	const W_ENABLED = 'सक्षम';
	const W_DISABLED = 'अक्षम';
	const W_NOTFOUND = 'नहीं मिला';
	const W_FORBIDDEN = 'निषिद्ध';
	const W_MENU = 'मेनू';

	const W_EXAMPLE = 'उदाहरण';
	const W_HEX = 'हेक्स';
	const W_RENDERING = 'प्रतिपादन';
	const W_ID = 'आईडी';
	const W_DISPLAY_NAME = 'प्रदर्शन नाम';
	
	const W_SECONDE = 'दूसरा';
	const W_MINUTE = 'मिनट';
	const W_HOUR = 'घंटा';
	const W_DAY = 'दिन';
	const W_WEEK = 'सप्ताह';
	const W_MONTH = 'महीना';
	const W_YEAR = 'वर्ष';
	const W_DECADE = 'शताब्दी';
	const W_SECONDE_P = 'सेकंड';
	const W_MINUTE_P = 'मिनट';
	const W_HOUR_P = 'घंटे';
	const W_DAY_P = 'दिन';
	const W_WEEK_P = 'सप्ताह';
	const W_MONTH_P = 'महीने';
	const W_YEAR_P = 'वर्ष';
	const W_DECADE_P = 'शताब्दी';

	const W_PREVIOUS = 'पिछला';
	const W_NEXT = 'अगला';
	const W_CURRENT = 'पृष्ठ %nb1% %nb2%';

	const W_NOT_LOGGED = 'लॉग इन नहीं';

	const W_SUSPENSION = '...';
	const W_EXTRACT = '“%text%”';

	const W_USER = 'उपयोगकर्ता';
	const W_DEVELOPPER = 'डेवलपर';
	const W_SUPERUSER = 'सुपरयुसर';
	const W_S_NEW = 'नया';
	const W_S_CONFIRMED = 'पुष्टि';
	const W_S_ASSIGNED = '%user% को सौंपा';
	const W_S_RESOLVED = 'हल';
	const W_S_REJECTED = 'अस्वीकृत';
	const W_L_URGENT = 'तत्काल';
	const W_L_IMPROVEMENT = 'सुधार';
	const W_L_PRIVATE = 'निजी';

	const W_PROFILEPIC = 'प्रोफ़ाइल चित्र';

	const W_RSS = 'आरएसएस फ़ीड';

		# Verbes

	const V_UPDATE = 'अपडेट';
	const V_UPDATE_DETAILS = 'विवरण अपडेट करें';
	const V_UPDATE_CONTENT = 'सामग्री अपडेट करें';
	const V_UPDATE_AND = 'अपडेट और %adjective%';
	const V_CANCEL = 'रद्द करें';
	const V_PREVIEW = 'पूर्वावलोकन';
	const V_COMMENT = 'टिप्पणी';
	const V_SUBMIT = 'सबमिट';
	const V_SELECT_FILE = 'एक फ़ाइल का चयन करें ...';
	const V_UPLOADING = 'अपलोडिंग ...';
	const V_SAVE_CONFIG = 'सेटिंग सहेजें';
	const V_APPLY = 'लागू करें';
	const V_EDIT = 'संपादित करें';
	const V_SIGNUP = 'साइन अप';
	const V_CONTINUE = 'जारी रखें';
	const V_REMOVE_ISSUE = 'समस्या हटाएँ';
	const V_CLOSE = 'करीब';
	const V_REOPEN = 'फिर से खोलना';
	const V_EXPORT = 'कच्चा डेटा निर्यात करें';

		# Sentencies

	const S_NOLABEL = '–';
	const S_NODEPENDENCY = '–';
	const S_COMMENT_LEAVE = 'एक टिप्पणी छोड़ें:';
	const S_AGO = '%duration% %pediod%';
	const S_ISSUE_ABOUT = 'इस मुद्दे के बारे में:';
	const S_UPLOAD_ADD = 'एक फ़ाइल संलग्न करें:';
	const S_WELCOME = 'आपका स्वागत है, %user%';
	const S_NEVER = 'कभी नहीँ';
	const S_ME = 'जिन मुद्दों पर मैंने योगदान दिया है उन पर अपडेट';
	const S_ALWAYS = 'प्रत्येक अद्यतन का';
	const S_START_NOTIF = 'नए अपडेट से अवगत रहें';
	const S_STOP_NOTIF = 'अब अपडेट की सूचना नहीं दी जानी चाहिए';
	const S_NOTFOUND = 'आप जिस पृष्ठ की तलाश कर रहे हैं वह अब मौजूद नहीं है ...';
	const S_FORBIDDEN = 'आपको इस पृष्ठ पर पहुंचने की अनुमति नहीं है। कृपया जारी रखने के लिए / बाहर लॉग इन करें। ';

	const S_VIEW_PARTICIPATION = 'उसकी भागीदारी देखें।';
	const S_VIEW_STATUS = 'मुद्दों को “%status%” देखें।';

	const S_ISSUE_CREATED = '%user% द्वारा %time% बजे';
	const S_ISSUE_UPDATED = '%adj% %user% द्वारा %time% बजे;';
	const S_ISSUE_STATUS_UPDATED = '%user% द्वारा %time% बजे से %status% में अपडेट की गई स्थिति;'

	const S_RSS_ISSUE_UPDATED = '%adj% %user% द्वारा;'
	const S_RSS_ISSUE_STATUS_UPDATED = '%%% द्वारा स्थिति "% स्थिति% में अपडेट की गई।';

	const S_INTRO_INSTALL = 'It looks like it\'s the first time you run phpmyBugs! Please configure it:';
	const S_FIRST_ISSUE_TITLE = 'How are you doing, pumpkin?';
	const S_FIRST_ISSUE = 'I am your first issue! After logging, you will be able to delete me.';

	const S_NO_USER = 'No user matches your request.';
	const S_NO_ISSUE = 'No issue matches your request.';
	const S_MATCHING_ISSUES = '%nb% matching issues';
	const S_NO_ACTIVITY = 'No recent activity.';
	const S_NO_UPLOAD = 'No upload.';
	const S_SIZE_REMAINING = '%remain% remaining on the %total% allowed.';
	const S_NO_PROJECT = 'No project.';

	const S_SEARCH = '#12, @user, words…';
	const S_COPYRIGHT = 'Powered by %name%.';

	const S_LAST_UPDATES = 'Last updates…';

		# Alerts

	const A_ERROR_DIRECTORY = '<strong>Error:</strong> unable to create directory “%name%”.';
	const A_ERROR_FILE = '<strong>Error:</strong> unable to read file “%name%”.';
	const A_ERROR_FILE_WRITE = '<strong>Error:</strong> unable to write file “%name%”.';
	const A_ERROR_FATAL = 'Sorry, something went wrong. Please contact an administrator if this problem persists.';
	const A_ERROR = '<strong>%title%:</strong><br /><br />%message%<br /><br />File “<strong>%file%</strong>” on line <strong>%line%</strong>.';

	const A_SUCCESS_INSTALL = '<strong>Done:</strong> phpmyBugs is now completely configured.';
	const A_ERROR_INSTALL = '<strong>Error:</strong> phpmyBugs is already configured. Please remove the config file if you want to reset the configuration.';
	const A_MODIF_SAVED = 'Modifications were saved.';

	const A_ERROR_FORM = 'An error occured. Please send again the form.';
	const A_ERROR_TOKEN = 'Wrong token. Please send again the form.';
	const A_ERROR_EMPTY = 'You have to specify a username and a password.';
	const A_ERROR_SAME_USERNAME = 'This username is not available.';
	const A_SUCCESS_SIGNUP = '<strong>Done:</strong> You can now log in.';

	const A_CONFIRM_DELETE_COMMENT = 'Are you sure you want to delete this comment?';
	const A_SUCCESS_DELETE_COMMENT = 'The comment was deleted.';
	const A_CONFIRM_DELETE_ISSUE = 'Are you sure you want to delete this issue?';
	const A_SUCCESS_DELETE_ISSUE = 'The issue was deleted.';
	const A_CONFIRM_DELETE_UPLOAD = 'Are you sure you want to delete this file?';
	const A_CONFIRM_DELETE_PROJECT = 'Are you sure you want to delete this project? All the corresponding issues will be lost.';

	const A_LOGGED = 'You are now logged into the System.';
	const A_LOGGED_OUT = 'You are now logged out from the System.';
	const A_ERROR_CONNEXION = '<strong>Error:</strong> Wrong username or password.';
	const A_ERROR_CONNEXION_WAIT = '<strong>Error:</strong> Wrong username or password. Please wait %duration% %period% before trying again.';
	const A_ERROR_LOGIN_WAIT = 'Please wait %duration% %period% before trying again. This a protection against malicious attacks.';

	const A_ERROR_UPLOAD = 'An error occured. Please try again.';
	const A_ERROR_UPLOAD_SIZE = 'File exceeds the maximum allowed size (%nb% max).';
	const A_ERROR_UPLOAD_FULL = 'You don\'t have enought disk space to upload this file : %nb% remaining.';

	const A_PLEASE_LOGIN_ISSUES = 'Please log in to see the issues.';
	const A_PLEASE_LOGIN_COMMENT = 'Please log in to post a comment. No account yet? Create one: it\'s free and really fast !';
	const A_PLEASE_LOGIN_ISSUE = 'Please log in to submit an issue. No account yet? Create one: it\'s free and really fast !';
	const A_SHOULD_LOGIN = 'If you have an account, please log in. If not, consider creating one: it\'s free and really fast !';

	const A_IE = 'Your browser is obsolete: <a href="http://www.browserchoice.eu">upgrade or change it</a>.';

		# Mails

	const M_NEW_COMMENT_O = '[%title% — %project% — Issue #%id%] New comment';
	const M_NEW_COMMENT = 'Hi, %username%!

The issue #%id% — “%summary%” has just been commented by %by%. You can read the new comment here:
	%url%.

If you don\'t want to receive further notifications on this issue, an option is available (after logging) via the link above.

-----
This is an automated email, please do not reply.
	';

	const M_NEW_ISSUE_O = '[%title% — %project%] New issue';
	const M_NEW_ISSUE = 'Hi, %username%!

The issue #%id% — “%summary%” has just been submited by %by%. You can read it here:
	%url%.

If you don\'t want to receive further notifications on this issue, an option is available (after logging) via the link above.

-----
This is an automated email, please do not reply.
	';

		# Titles

	const T_INSTALLATION = 'Installation';
	const T_SETTINGS = 'Settings';
	const T_GLOBAL_SETTINGS = 'Global settings';
	const T_APPEARANCE = 'Appearance';
	const T_ISSUES = 'Issues';
	const T_GROUPS = 'Groups';
	const T_USERS = 'Users';
	const T_BROWSE_ISSUES = 'Browse issues';
	const T_NEW_ISSUE = 'New issue';
	const T_PROJECTS = 'Projects';
	const T_DASHBOARD = 'Dashboard';
	const T_LAST_UPDATES = 'Last updates';
	const T_LAST_ACTIVITY = 'Last activity';
	const T_UPLOADS = 'Uploads';
	const T_SEARCH = 'Search';


		# FORMS

	const F_USERNAME = 'Username:';
	const F_PASSWORD = 'Password:';
	const F_USERNAME2 = 'Username';
	const F_PASSWORD2 = 'Password';
	const F_NAME = 'Name:';
	const F_URL = 'Url:';
	const F_URL_REWRITING = 'Url rewriting:';
	const F_INTRO = 'Introduction:';
	const F_DESCRIPTION = 'Description:';
	const F_EMAIL = 'Email:';
	const F_MAX_UPLOAD = 'Maximum size per upload:';
	const F_ALLOCATED_SPACE = 'Allocated space per user:';
	const F_GROUP = 'Group:';
	const F_NOTIFICATIONS = 'Be notified:';
	const F_PROJECT_X = 'Project “%name%”:';
	const F_LANGUAGE = 'Language:';
	const F_LOGS = 'Logs:';

	const F_ISSUES_PAGE = 'Issues per page:';
	const F_ISSUES_PAGE_SEARCH = 'Issues per page (search):';
	const F_PREVIEW_ISSUE = 'Previews length (issues):';
	const F_PREVIEW_SEARCH = 'Previews length (search):';
	const F_PREVIEW_PROJECT = 'Previews length (projects):';
	const F_LAST_EDITS = 'Number of issues displayed on dashboards:';
	const F_LAST_ACTIVITY = 'Number of issues displayed on user pages:';

	const F_ADD_PROJECT = 'New project';
	const F_ADD_COLOR = 'New color';
	const F_ADD_STATUS = 'New status';
	const F_ADD_LABEL = 'New label';
	const F_ADD_GROUP = 'New group';
	const F_ADD_USER = 'New user';

	const F_SORT_BY = 'Sort by:';
	const F_SORT_ID = 'ID';
	const F_SORT_MOD = 'last update';
	const F_SORT_DESC = 'descending';
	const F_SORT_ASC = 'ascending';
	const F_FILTER_STATUSES = 'Filter statuses:';
	const F_FILTER_STATES = 'Filter states:';
	const F_FILTER_LABELS = 'Filter labels:';
	const F_FILTER_USERS = 'Filter users:';

	const F_WRITE = 'Write:';
	const F_SUMMARY = 'Summary';
	const F_CONTENT = 'Content';

	const F_STATUS = 'Status:';
	const F_RELATED = 'Related:';
	const F_LABELS2 = 'Labels:';

	const F_GENERAL_SETTINGS = 'General settings:';
	const F_PROJECTS = 'Projects:';
	const F_DATABASE = 'Database:';
	const F_UPLOADS = 'Uploads:';
	const F_COLORS = 'Manage colors:';
	const F_DISPLAY = 'Manage display :';
	const F_STATUSES = 'Manage statuses:';
	const F_LABELS = 'Manage labels:';
	const F_GROUPS = 'Manage groups:';
	const F_PERMISSIONS = 'Manage permissions:';
	const F_USERS = 'Manage users:';

	const F_TIP_NAME = 'It will be displayed on the header of each page.';
	const F_TIP_URL_REWRITING = 'Leave this field empty to disable url rewriting. Otherwise, it should contain the path to phpmyBugs folder (started and ended with a "/"), relative to the domain name.';
	const F_TIP_INTRO = 'It will be displayed on the home page. It will be parsed with the Markdown syntax. Note: if there is only one project named “%name%”, the home page is automatically redirected to the project dashboard, and this text will not be displayed.';
	const F_TIP_EMAIL = 'Leave this field empty to disable email notifications. Otherwise, this address will be used as sender when sending an email notification.';
	const F_TIP_PASSWORD = 'Leave it empty if you don\'t want to change the password.';
	const F_TIP_USER_EMAIL = 'Required only if you want to receive notifications.';
	const F_TIP_NOTIFICATIONS = 'This a default setting: you will be able to change it for each issue.';
	const F_TIP_NOTIFICATIONS_DISABLED = 'Note: notifications are currently disabled by the administrator.';
	const F_TIP_DESCRIPTION = 'It will be displayed on the project dashboard. It will be parsed with the markdown syntax.';

	const F_TIP_MAX_UPLOAD = 'Each uploaded file can\'t exceed this size.';
	const F_TIP_ALLOCATED_SPACE = 'A user can\'t upload other files once he reached this limit.<br /><em>Attention:</em> if none logged users are allowed to upload files (this is not the default setting), this limit does not apply to them.';

	const F_TIP_ID_STATUS = '<b>Tip:</b> be careful when changing the IDs, because each issue keeps its old status ID (except if this ID does not exist anymore: in this case, the default status will be used).';
	const F_TIP_ID_LABEL = '<b>Tip:</b> be careful when changing the IDs, because each label of one issue keeps its old ID (except if this ID does not exist anymore: in this case, the label is removed from the issue).';
	const F_TIP_ID_GROUP = '<b>Tip:</b> be careful when changing the IDs, because each user keeps its old group ID (except if this ID does not exist anymore: in this case, the default group will be used).';

	const HELP_MARKDOWN = '
		<h2>Markdown syntax:</h2>

		<p>Paragraphs:</p>
<pre><code class="blank no-highlight">Paragraphs are separated by one or more blank lines.
That\'s why this text will be displayed in the same line that the previous phrase, no matter the line break.

To start a new line without creating a new paragraph:  
insert 2 spaces before the line break, just like here.</code></pre>
		<p>Emphasis:</p>
<pre><code class="blank no-highlight">*Italic text*  
_Itatic text again_  

**Bold text**  
__Bold text again__  </code></pre>

		<p>Links:</p>
<pre><code class="blank no-highlight">This is [an example](http://example.com) of inline link.  
This is another one : &lt;http://example.com&gt;.</code></pre>

		<p>Images:</p>
<pre><code class="blank no-highlight">![I am an image.](http://example.com/image.png)</code></pre>

		<p>Headers:</p>
<pre><code class="blank no-highlight"># Top Level title
## Second level title
### Third level title
#### Fourth level title</code></pre>

		<p>Lists:</p>
<pre><code class="blank no-highlight">- one item
* another one

1. first item
2. second item</code></pre>

		<p>Blockquotes:</p>
<pre><code class="blank no-highlight">> I am a blockquote with two paragraphs.
>
> I am the second paragraph.</code></pre>

		<p>Code blocks:</p>
<pre><code class="blank no-highlight">This is an `inline code block`.</code></pre>
<pre><code class="blank no-highlight">    &lt;?php echo "I am a code block, because I am indented
    with 4 spaces"; ?&gt;</code></pre>
<pre><code class="blank no-highlight">```
&lt;?php echo "I am a code block."; ?&gt;
```

```php
&lt;?php echo "Supported languages are : bash, cs, ruby, diff, javascript, css, xml, http, java, php, python, sql, ini, perl, json, cpp, markdown, no-highlight"; ?&gt;
```</code></pre>
	';


	private static $permissions = array(
		'home' => array(
			'title' => 'Home:',
			'description' => 'Can access to the home page.'
		),
		'dashboard' => array(
			'title' => 'Dashboards:',
			'description' => 'Can access to the projects dashboards.'
		),
		'issues' =>  array(
			'title' => 'View issues:',
			'description' => 'Can view public issues.'
		),
		'private_issues' => array(
			'title' => 'View private issues:',
			'description' => 'Can view issues tagged as private.'
		),
		'search' => array(
			'title' => 'Search:',
			'description' => 'Can search issues or users.'
		),
		'new_issue' => array(
			'title' => 'New issue:',
			'description' => 'Can submit a new issue.'
		),
		'edit_issue' => array(
			'title' => 'Edit issues:',
			'description' => 'Can edit the text of all the issues and delete them.'
		),
		'update_issue' => array(
			'title' => 'Update issues:',
			'description' => 'Can update issues : change status, add labels, close and reopen, ...'
		),
		'post_comment' => array(
			'title' => 'Post a comment:',
			'description' => 'Can post a comment.'
		),
		'edit_comment' => array(
			'title' => 'Edit comments:',
			'description' => 'Can edit all the comments (users can edit their own comments anyway).'
		),
		'view_user' => array(
			'title' => 'User profiles:',
			'description' => 'Can view all the user profiles.'
		),
		'upload' => array(
			'title' => 'Post a file:',
			'description' => 'Can attach files to a comment or a new issue.'
		),
		'view_upload' => array(
			'title' => 'View uploads:',
			'description' => 'Can access to all the uploaded files.'
		),
		'settings' => array(
			'title' => 'Change settings:',
			'description' => 'Can access this page and modify all the global settings.'
		),
		'signup' => array(
			'title' => 'Sign up:',
			'description' => 'Can sign up.'
		),
		'view_errors' => array(
			'title' => 'View fatal errors:',
			'description' => 'Can view the description of fatal errors.'
		)
	);

	public static function permissions($id, $type = 'description') {
		return self::$permissions[$id][$type];
	}

	private static $settings = array(
		'validate_url' => 'The url is not valid.',
		'validate_email' => 'The email is not valid.',
		'private_label_removed' => 'You can\'t remove the private label or change its ID, but you can rename it.',
		'default_status_removed' => 'You can\'t remove the default status or change its ID, but you can rename it.',
		'default_group_removed' => 'You can\'t remove the default group or change its ID, but you can rename it.',
		'default_group_superuser_removed' => 'You can\'t remove the superuser group or change its ID, but you can rename it.',
		'validate_same_username' => 'Warning : two users have the same username.',
		'validate_same_project_name' => 'Two projects can\'t have the same name. One has been automatically renamed.',
		'language_modified' => 'Refresh this page to view it in the new language.'
	);

	public static function settings($id) {
		return self::$settings[$id];
	}

	private static $errors = array(
		E_ERROR => 'Fatal error',
		E_WARNING => 'Warning',
		E_PARSE => 'Parse error',
		E_NOTICE => 'Notice',
		E_STRICT => 'Advice',
		E_DEPRECATED => 'Deprecated',
		'default' => 'Error'
	);
	public static function errors($no) {
		return (isset(self::$errors[$no])) ? self::$errors[$no] : self::$errors['default'];
	}
}

?>