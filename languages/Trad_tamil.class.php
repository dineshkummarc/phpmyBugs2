<?php

class Trad {

  # வார்த்தைகள்

 const W_ISSUE = 'பிரச்சினை';
 const W_OPEN = 'திறந்த';
 const W_OPENED = 'திறக்கப்பட்டது';
 const W_CLOSED = 'மூடப்பட்டது';
 const W_REOPENED = 'மீண்டும் திறக்கப்பட்டது';
 const W_COMMENTED = 'கருத்து';
 const W_NOBODY = 'யாரும் இல்லை';
 const W_SOMEONE = 'யாரோ';
 const W_ENABLED = 'இயக்கப்பட்டது';
 const W_DISABLED = 'முடக்கப்பட்டது';
 const W_NOTFOUND = 'கண்டுபிடிக்கப்படவில்லை';
 const W_FORBIDDEN = 'தடை';
 const W_MENU = 'மெனு';

 const W_EXAMPLE = 'உதாரணம்';
 const W_HEX = 'ஹெக்ஸ்';
 const W_RENDERING = 'ரெண்டரிங்';
 const W_ID = 'ID';
 const W_DISPLAY_NAME = 'காட்சி பெயர்';

 const W_SECONDE = 'இரண்டாவது';
 const W_MINUTE = 'நிமிடம்';
 const W_HOUR = 'மணி';
 const W_DAY = 'நாள்';
 const W_WEEK = 'வாரம்';
 const W_MONTH = 'மாதம்';
 const W_YEAR = 'ஆண்டு';
 const W_DECADE = 'தசாப்தம்';
 const W_SECONDE_P = 'வினாடிகள்';
 const W_MINUTE_P = 'நிமிடங்கள்';
 const W_HOUR_P = 'மணிகள்';
 const W_DAY_P = 'நாட்கள்';
 const W_WEEK_P = 'வாரங்கள்';
 const W_MONTH_P = 'மாதங்கள்';
 const W_YEAR_P = 'ஆண்டுகள்';
 const W_DECADE_P = 'பத்தாண்டுகள்';

 const W_PREVIOUS = 'முந்தைய';
 const W_NEXT = 'அடுத்து';
 const W_MORE = 'மேலும்';
 const W_CURRENT = '%nb2% இல் பக்கம் %nb1%';

 const W_NOT_LOGGED = 'உள்நுழையவில்லை';

 const W_SUSPENSION = '...';
 const W_EXTRACT = '"%text%"';

 const W_USER = 'பயனர்';
 const W_DEVELOPPER = 'டெவலப்பர்';
 const W_SUPERUSER = 'சூப்பர் யூசர்';
 const W_S_NEW = 'புதியது';
 const W_S_CONFIRMED = 'உறுதிப்படுத்தப்பட்டது';
 const W_S_ASSIGNED = '% பயனர்%க்கு ஒதுக்கப்பட்டது';
 const W_S_RESOLVED = 'தீர்ந்தது';
 const W_S_REJECTED = 'நிராகரிக்கப்பட்டது';
 const W_L_URGENT = 'அவசரம்';
 const W_L_IMPROVEMENT = 'மேம்பாடு';
 const W_L_PRIVATE = 'தனியார்';

 const W_PROFILEPIC = 'சுயவிவரப் படம்';

 const W_RSS = 'RSS ஊட்டம்';
 const W_VERSION = 'பதிப்பு';

 const W_CAPTCHA_IMAGE = 'CAPTCHA படம்';
 const W_CAPTCHA_REFRESH = 'புதுப்பிப்பு படத்தை';
 const W_CAPTCHA_INPUT = 'Type text:';

 # வினைச்சொற்கள்

 const V_UPDATE = 'புதுப்பிப்பு';
 const V_UPDATE_DETAILS = 'புதுப்பிப்பு விவரங்கள்';
 const V_UPDATE_CONTENT = 'உள்ளடக்கத்தைப் புதுப்பி';
 const V_UPDATE_AND = 'புதுப்பிப்பு & %பெயரடை%';
 const V_CANCEL = 'ரத்துசெய்';
 const V_PREVIEW = 'முன்னோட்டம்';
 const V_COMMENT = 'கருத்து';
 const V_SUBMIT = 'சமர்ப்பி';
 const V_SELECT_FILE = 'கோப்பைத் தேர்ந்தெடு...';
 const V_UPLOADING = 'பதிவேற்றுகிறது...';
 const V_SAVE_CONFIG = 'அமைப்புகளைச் சேமி';
 const V_APPLY = 'விண்ணப்பிக்கவும்';
 const V_EDIT = 'திருத்து';
 const V_SIGNUP = 'பதிவு';
 const V_LOGIN = 'உள்நுழைவு';
 const V_CONTINUE = 'தொடரவும்';
 const V_REMOVE_ISSUE = 'சிக்கலை அகற்று';
 const V_CLOSE = 'மூடு';
 const V_REOPEN = 'மீண்டும் திற';
 const V_EXPORT = 'மூலத் தரவை ஏற்றுமதி செய்';

 # வாக்கியங்கள்

 const S_NOLABEL = '–';
 const S_NODEPENDENCY = '–';
 const S_COMMENT_LEAVE = 'கருத்து:';
 const S_AGO = '% காலம்% %pediod% முன்பு';
 const S_ISSUE_ABOUT = 'இந்தச் சிக்கலைப் பற்றி:';
 const S_UPLOAD_ADD = 'ஒரு கோப்பை இணைக்கவும்:';
 const S_WELCOME = 'வரவேற்கிறேன், %பயனர்%';
 const S_NEVER = 'ஒருபோதும்';
 const S_ME = 'நான் பங்களித்த சிக்கல்கள் பற்றிய புதுப்பிப்புகள்';
 const S_ALWAYS = 'ஒவ்வொரு புதுப்பிப்பும்';
 const S_START_NOTIF = 'புதிய புதுப்பிப்புகளைப் பற்றி அறிவிக்கவும்';
 const S_STOP_NOTIF = 'மேலும் மேம்படுத்தல்கள் எதுவும் அறிவிக்கப்படாது';
 const S_NOTFOUND = 'நீங்கள் தேடும் பக்கம் இனி இல்லை...';
 const S_FORBIDDEN = 'இந்தப் பக்கத்தை அணுக உங்களுக்கு அனுமதி இல்லை. தொடர உள்நுழைக/வெளியேறவும்.';

 const S_VIEW_PARTICIPATION = 'அவரது பங்கேற்பைக் காண்க.';
 const S_VIEW_STATUS = '"%status%" சிக்கல்களைக் காண்க.';

 const S_ISSUE_CREATED = '%பயனர்% %நேரம்% மூலம்';
 const S_ISSUE_UPDATED = '%adj% by %user% %time%.';
 const S_ISSUE_STATUS_UPDATED = 'நிலை %பயனர்% %நேரம்% மூலம் %நிலை%க்கு புதுப்பிக்கப்பட்டது.';

 const S_RSS_ISSUE_UPDATED = '%adj% by %user%.';
 const S_RSS_ISSUE_STATUS_UPDATED = '%பயனர்% ஆல் "%நிலை%"க்கு நிலை புதுப்பிக்கப்பட்டது.';

 const S_INTRO_INSTALL = 'நீங்கள் முதல் முறையாக phpmyBugs ஐ இயக்குவது போல் தெரிகிறது! தயவுசெய்து இதை உள்ளமைக்கவும்:';
 const S_FIRST_ISSUE_TITLE = 'எப்படி இருக்கிறீர்கள், பூசணிக்கா?';
 const S_FIRST_ISSUE = 'நான் உங்கள் முதல் இதழ்! உள்நுழைந்த பிறகு, நீங்கள் என்னை நீக்கலாம்.';

 const S_NO_USER = 'உங்கள் கோரிக்கைக்கு எந்த பயனரும் பொருந்தவில்லை.';
 const S_NO_ISSUE = 'உங்கள் கோரிக்கையுடன் எந்த சிக்கலும் பொருந்தவில்லை.';
 const S_MATCHING_ISSUES = '%nb% பொருந்தும் சிக்கல்கள்';
 const S_NO_ACTIVITY = 'சமீபத்திய செயல்பாடு இல்லை.';
 const S_NO_UPLOAD = 'பதிவேற்றம் இல்லை.';
 const S_SIZE_REMAINING = '%மொத்தம்%% அனுமதிக்கப்பட்டது.';
 const S_NO_PROJECT = 'திட்டம் இல்லை.';

 const S_SEARCH = '#12, @user, வார்த்தைகள்...';
 const S_COPYRIGHT = '%name% ஆல் இயக்கப்படுகிறது.';
 const S_UPGRADE = '<a href="https://github.com/bugtrackr/Nireus/releases/latest">GitHub</a> இலிருந்து <a href="https://bugtrackr.github.io க்கு சமீபத்திய பதிப்பைப் பெறவும் / wiki/upgrade/">மேம்படுத்து</a>.';

 const S_LAST_UPDATES = 'கடைசி புதுப்பிப்புகள்...';

 const S_STAY_LOGGEDIN = 'என்னை உள்நுழைய வைத்திரு';

 const S_DEFAULT_DEFPROJ_DESC = 'இது அனைவரும் அணுகக்கூடிய இயல்புநிலை திட்டமாகும்.';
 const S_DEFAULT_2NDPROJ_DESC = 'இது உங்கள் 2வது திட்டத் திட்டமாக இருக்கலாம், இதில் பதிவு செய்யப்பட்ட பயனர்கள் மட்டுமே சிக்கல்களை இடுகையிட அனுமதிக்கப்படுவார்கள்.';

 #எச்சரிக்கைகள்

 const A_ERROR_DIRECTORY = '<strong>பிழை:</strong> "%name%" கோப்பகத்தை உருவாக்க முடியவில்லை.';
 const A_ERROR_FILE = '<strong>பிழை:</strong> “%name%” கோப்பைப் படிக்க முடியவில்லை.';
 const A_ERROR_FILE_WRITE = '<பிழை:</strong> "%name%" கோப்பை எழுத முடியவில்லை.';
 const A_ERROR_FATAL = 'மன்னிக்கவும், ஏதோ தவறாகிவிட்டது. இந்தப் பிரச்சனை தொடர்ந்தால் நிர்வாகியைத் தொடர்பு கொள்ளவும்.';
 const A_ERROR = '<strong>%title%:</strong><br /><br />%message%<br /><br />கோப்பு “<strong>%file%</strong>” வரி <strong> >%வரி%</strong>.';

 const A_SUCCESS_INSTALL = '<strong>முடிந்தது:</strong> phpmyBugs இப்போது முழுமையாக உள்ளமைக்கப்பட்டுள்ளது.';
 const A_ERROR_INSTALL = '<strong>பிழை:</strong> phpmyBugs ஏற்கனவே கட்டமைக்கப்பட்டுள்ளது. நீங்கள் உள்ளமைவை மீட்டமைக்க விரும்பினால், உள்ளமைவு கோப்பை அகற்றவும்.';
 const A_MODIF_SAVED = 'மாற்றங்கள் சேமிக்கப்பட்டன.';

 const A_ERROR_FORM = 'ஒரு பிழை ஏற்பட்டது. படிவத்தை மீண்டும் அனுப்பவும்.';
 const A_ERROR_TOKEN = 'பிழை டோக்கன். படிவத்தை மீண்டும் அனுப்பவும்.';
 const A_ERROR_EMPTY = 'நீங்கள் ஒரு பயனர் பெயர் மற்றும் கடவுச்சொல்லை குறிப்பிட வேண்டும்.';
 const A_ERROR_SAME_USERNAME = 'இந்த பயனர்பெயர் கிடைக்கவில்லை.';
 const A_SUCCESS_SIGNUP = '<strong>முடிந்தது:</strong> நீங்கள் இப்போது உள்நுழையலாம்.';

 const A_CONFIRM_DELETE_COMMENT = 'நிச்சயமாக இந்தக் கருத்தை நீக்க விரும்புகிறீர்களா?';
 const A_SUCCESS_DELETE_COMMENT = 'கருத்து நீக்கப்பட்டது.';
 const A_CONFIRM_DELETE_ISSUE = 'இந்தச் சிக்கலை நிச்சயமாக நீக்க விரும்புகிறீர்களா?';
 const A_SUCCESS_DELETE_ISSUE = 'சிக்கல் நீக்கப்பட்டது.';
 const A_CONFIRM_DELETE_UPLOAD = 'நிச்சயமாக இந்தக் கோப்பை நீக்க விரும்புகிறீர்களா?';
 const A_CONFIRM_DELETE_PROJECT = 'இந்த திட்டத்தை நிச்சயமாக நீக்க விரும்புகிறீர்களா? இது தொடர்பான அனைத்து சிக்கல்களும் மறைந்துவிடும்.';

 const A_LOGGED = 'நீங்கள் இப்போது கணினியில் உள்நுழைந்துள்ளீர்கள்.';
 const A_LOGGED_OUT = 'நீங்கள் இப்போது கணினியிலிருந்து வெளியேறிவிட்டீர்கள்.';
 const A_ERROR_CONNEXION = '<strong>பிழை:</strong> பயனர் பெயர் அல்லது கடவுச்சொல் தவறானது.';
 const A_ERROR_CONNEXION_WAIT = '<strong>பிழை:</strong> பயனர்பெயர் அல்லது கடவுச்சொல் தவறானது. மீண்டும் முயற்சிக்கும் முன் %காலம்% %காலம்% காத்திருக்கவும்.';
 const A_ERROR_LOGIN_WAIT = 'மீண்டும் முயற்சிக்கும் முன் தயவுசெய்து %காலம்% %காலம்% காத்திருக்கவும். இது தீங்கிழைக்கும் தாக்குதல்களுக்கு எதிராக பாதுகாக்கிறது.';

 const A_ERROR_UPLOAD = 'ஒரு பிழை ஏற்பட்டது. மீண்டும் முயற்சிக்கவும்.';
 const A_ERROR_UPLOAD_SIZE = 'கோப்பு அனுமதிக்கப்பட்ட அதிகபட்ச அளவை விட அதிகமாக உள்ளது (%nb% max)';
 const A_ERROR_UPLOAD_FULL = 'இந்த கோப்பை பதிவேற்றுவதற்கு உங்களிடம் போதுமான வட்டு இடம் இல்லை : %nb% மீதமுள்ளது.';

 const A_PLEASE_LOGIN_ISSUES = 'சிக்கல்களைக் காண உள்நுழைக.';
 const A_PLEASE_LOGIN_COMMENT = 'கருத்து வெளியிட உள்நுழைக. இன்னும் கணக்கு இல்லையா? ஒன்றை உருவாக்கவும்: இது இலவசம் மற்றும் அதிவேகமானது!';
 const A_PLEASE_LOGIN_ISSUE = 'ஒரு சிக்கலைச் சமர்ப்பிக்க உள்நுழையவும். இன்னும் கணக்கு இல்லையா? ஒன்றை உருவாக்கவும்: இது இலவசம் மற்றும் அதிவேகமானது!';
 const A_SHULD_LOGIN = 'உங்களிடம் கணக்கு இருந்தால், உள்நுழையவும். இல்லையெனில், ஒன்றை உருவாக்கவும்: இது இலவசம் மற்றும் அதிவேகமானது!';

 const A_IE = 'உங்கள் உலாவி காலாவதியானது: <a href="https://www.browser-update.org/en/update.html">மேம்படுத்தவும் அல்லது மாற்றவும்</a>.';

 # அஞ்சல்கள்

 const M_NEW_COMMENT_O = '[%title% — %project% — Issue #%id%] புதிய கருத்து';
 const M_NEW_COMMENT = 'வணக்கம், %பயனர்பெயர்%!

பிரச்சினை #%id% — “%சுருக்கம்%” %by% ஆல் கருத்து தெரிவிக்கப்பட்டது. புதிய கருத்தை நீங்கள் இங்கே படிக்கலாம்:
 %url%.

இந்தச் சிக்கலில் மேலும் அறிவிப்புகளைப் பெற விரும்பவில்லை என்றால், மேலே உள்ள இணைப்பின் மூலம் ஒரு விருப்பம் (பதிவு செய்த பிறகு) கிடைக்கும்.

-----
இது ஒரு தானியங்கி மின்னஞ்சல், தயவுசெய்து பதிலளிக்க வேண்டாம்.
 ';

 const M_NEW_ISSUE_O = '[%title% — %project%] NEW ISSUE';
 const M_NEW_ISSUE = 'வணக்கம், %பயனர்பெயர்%!

வெளியீடு #%id% — “%சுருக்கம்%” இப்போது %by% ஆல் சமர்ப்பிக்கப்பட்டது. நீங்கள் அதை இங்கே படிக்கலாம்:
 %url%.

இந்தச் சிக்கலில் மேலும் அறிவிப்புகளைப் பெற விரும்பவில்லை என்றால், மேலே உள்ள இணைப்பின் மூலம் ஒரு விருப்பம் (பதிவு செய்த பிறகு) கிடைக்கும்.

-----
இது ஒரு தானியங்கி மின்னஞ்சல், தயவுசெய்து பதிலளிக்க வேண்டாம்.
 ';

 # தலைப்புகள்

 const T_INSTALLATION = 'நிறுவல்';
 const T_SETTINGS = 'அமைப்புகள்';
 const T_GLOBAL_SETTINGS = 'உலகளாவிய அமைப்புகள்';
 const T_APPEARANCE = 'தோற்றம்';
 const T_ISSUES = 'சிக்கல்கள்';
 const T_GROUPS = 'குழுக்கள்';
 const T_USERS = 'பயனர்கள்';
 const T_PERMISSIONS = 'அனுமதிகள்';
 const T_ENABLE_CAPTCHA = 'CAPTCHA ஐ நிர்வகி';
 const T_CAPTCHA = 'கேப்ட்சா';
 const T_BROWSE_ISSUES = 'உலாவு சிக்கல்கள்';
 const T_BROWSE_ALL_ISSUES = 'அனைத்து சிக்கல்களையும் உலாவுக';
 const T_ALL_ISSUES_DESCRIPTION = 'இவை அனைத்தும் அனைத்து திட்டங்களுக்கும் திறந்த சிக்கல்கள்';
 const T_NEW_ISSUE = 'புதிய வெளியீடு';
 const T_ALL_ISSUES = 'அனைத்து சிக்கல்களும்';
 const T_PROJECTS = 'திட்டங்கள்';
 const T_DASHBOARD = 'டாஷ்போர்டு';
 const T_LAST_UPDATES = 'கடைசி புதுப்பிப்புகள்';
 const T_LAST_ACTIVITY = 'கடைசி செயல்பாடு';
 const T_UPLOADS = 'பதிவேற்றங்கள்';
 const T_SEARCH = 'தேடல்';
 const T_LINK_CONTACT = 'எங்களைத் தொடர்பு கொள்ளுங்கள்';
 const T_LINK_LEGALNOTICE = 'சட்ட அறிவிப்பு';
 const T_LINK_PRIVACYPOLICY = 'தனியுரிமைக் கொள்கை';
 const T_API_SETTINGS = 'API';
 const T_API_ENABLE_SETTINGS = 'API ஐ நிர்வகி';
 const T_API_ACCESS_SETTINGS = 'API அணுகல்';
 const T_INFO = 'தகவல்';

 # படிவங்கள்

 const F_USERNAME = 'பயனர் பெயர்:';
 const F_PASSWORD = 'கடவுச்சொல்:';
 const F_USERNAME2 = 'பயனர்பெயர்';
 const F_PASSWORD2 = 'கடவுச்சொல்';
 const F_NAME = 'பெயர்:';
 const F_URL = 'URL:';
 const F_URL_CDN = 'CDN Url:';
 const F_URL_REWRITING = 'URL மீண்டும் எழுதுதல்:';
 const F_INTRO = 'அறிமுகம்:';
 const F_DESCRIPTION = 'விளக்கம்:';
 const F_EMAIL = 'மின்னஞ்சல்:';
 const F_LINK_CONTACT = 'வெளிப்புற தொடர்பு பக்கத்திற்கான இணைப்பு (வெறுமையாக விடப்படலாம்):';
 const F_LINK_LEGALNOTICE = 'சட்ட அறிவிப்புக்கான இணைப்பு (வெறுமையாக விடப்படலாம்):';
 const F_LINK_PRIVACYPOLICY = 'தனியுரிமைக் கொள்கைக்கான இணைப்பு (வெறுமையாக விடப்படலாம்):';
 const F_MAX_UPLOAD = 'பதிவேற்றுவதற்கான அதிகபட்ச அளவு:';
 const F_ALLOCATED_SPACE = 'ஒரு பயனருக்கு இடம் ஒதுக்கப்பட்டது:';
 const F_GROUP = 'குழு:';
 const F_NOTIFICATIONS = 'அறிவிக்கப்பட வேண்டும்:';
 const F_PROJECT_X = 'திட்டம் "%பெயர்%":';
 const F_LANGUAGE = 'மொழி:';
 const F_LOGS = 'பதிவுகள்:';

 const F_ISSUES_PAGE = 'ஒரு பக்கத்திற்கான சிக்கல்கள்:';
 const F_ISSUES_PAGE_SEARCH = 'ஒரு பக்கத்திற்கான சிக்கல்கள் (தேடல்):';
 const F_PREVIEW_ISSUE = 'முன்பார்வைகளின் நீளம் (சிக்கல்கள்):';
 const F_PREVIEW_SEARCH = 'முன்பார்வைகளின் நீளம் (தேடல்):';
 const F_PREVIEW_PROJECT = 'முன்பார்வைகளின் நீளம் (திட்டங்கள்):';
 const F_LAST_EDITS = 'டாஷ்போர்டில் காட்டப்படும் சிக்கல்களின் எண்ணிக்கை:';
 const F_LAST_ACTIVITY = 'பயனர் பக்கங்களில் காட்டப்படும் சிக்கல்களின் எண்ணிக்கை:';
 const F_THEME = "தீம்";
 const F_TIP_THEME = ".css கோப்பை உள்ளே வைக்கவும்";

 const F_ADD_PROJECT = 'புதிய திட்டம்';
 const F_ADD_COLOR = 'புதிய நிறம்';
 const F_ADD_STATUS = 'புதிய நிலை';
 const F_ADD_LABEL = 'புதிய லேபிள்';
 const F_ADD_GROUP = 'புதிய குழு';
 const F_ADD_USER = 'புதிய பயனர்';

 const F_SORT_BY = 'வரிசைப்படுத்து:';
 const F_SORT_ID = 'ID';
 const F_SORT_MOD = 'கடைசி புதுப்பிப்பு';
 const F_SORT_DESC = 'இறங்கும்';
 const F_SORT_ASC = 'ஏறும்';
 const F_FILTER_STATUSES = 'வடிகட்டும் நிலைகள்:';
 const F_FILTER_STATES = 'வடிகட்டும் நிலைகள்:';
 const F_FILTER_LABELS = 'வடிகட்டி லேபிள்கள்:';
 const F_FILTER_USERS = 'வடிகட்டும் பயனர்கள்:';
 const F_FILTER_MILESTONE = 'வடிகட்டி மைல்கல்:';

 const F_WRITE = 'எழுது:';
 const F_SUMMARY = 'சுருக்கம்';
 const F_CONTENT = 'உள்ளடக்கம்';

 const F_STATUS = 'நிலை:';
 const F_RELATED = 'தொடர்புடையது:';
 const F_LABELS2 = 'லேபிள்கள்:';
 const F_MILESTONE = 'மைல்கல்:';

 const F_GENERAL_SETTINGS = 'பொது அமைப்புகள்:';
 const F_PROJECTS = 'திட்டங்கள்:';
 const F_DATABASE = 'தரவுத்தளம்:';
 const F_UPLOADS = 'பதிவேற்றங்கள்:';
 const F_COLORS = 'வண்ணங்களை நிர்வகி:';
 const F_DISPLAY = 'காட்சியை நிர்வகி:';
 const F_STATUSES = 'நிலைகளை நிர்வகி:';
 const F_LABELS = 'லேபிள்களை நிர்வகி:';
 const F_GROUPS = 'குழுக்களை நிர்வகி:';
 const F_PERMISSIONS = 'அனுமதிகளை நிர்வகி:';
 const F_USERS = 'பயனர்களை நிர்வகி:';

 const F_INVALID_CAPTCHA = 'நீங்கள் உள்ளிட்ட CAPTCHA தவறானது. மீண்டும் முயற்சிக்கவும்.';

 const F_TIP_NAME = 'இது ஒவ்வொரு பக்கத்தின் தலைப்பிலும் காட்டப்படும்.';
 const F_TIP_URL_REWRITING = 'URL மீண்டும் எழுதுவதை முடக்க இந்த புலத்தை காலியாக விடவும். இல்லையெனில், இது டொமைன் பெயருடன் தொடர்புடைய phpmyBugs கோப்புறைக்கான பாதையைக் கொண்டிருக்க வேண்டும் ("/" உடன் தொடங்கி முடிவடையும்),';
 const F_TIP_URL_CDN = 'CDN ஐ முடக்க இந்த புலத்தை காலியாக விடவும். இல்லையெனில், அதில் உங்கள் CDNன் URL இருக்க வேண்டும் (உதாரணமாக <em>https://cdn.rawgit.com/bugtrackr/Nireus/master/</em>, இதைப் பயன்படுத்த தயங்க வேண்டாம்). உங்கள் CDN இல் உள்ள <em>/public</em> கோப்புறையிலிருந்து எல்லா கோப்புகளையும் ஹோஸ்ட் செய்வதை உறுதி செய்து கொள்ளவும்.';
 const F_TIP_INTRO = 'இது முகப்பு பக்கத்தில் காட்டப்படும். இது மார்க் டவுன் தொடரியல் மூலம் விளக்கப்படுகிறது. குறிப்பு: "%name%" என்ற பெயரில் ஒரே ஒரு திட்டம் இருந்தால், முகப்புப் பக்கம் தானாகவே திட்ட டாஷ்போர்டிற்கு திருப்பி விடப்படும், மேலும் இந்த உரை காட்டப்படாது.';
 const F_TIP_EMAIL = 'மின்னஞ்சல் அறிவிப்புகளை முடக்க இந்த புலத்தை காலியாக விடவும். இல்லையெனில், மின்னஞ்சல் அறிவிப்பை அனுப்பும்போது இந்த முகவரி அனுப்புநராகப் பயன்படுத்தப்படும்.';
 const F_TIP_PASSWORD = 'கடவுச்சொல்லை மாற்ற விரும்பவில்லை என்றால் அதை காலியாக விடவும்.';
 const F_TIP_USER_EMAIL = 'நீங்கள் அறிவிப்புகளைப் பெற விரும்பினால் மட்டுமே தேவை.';
 const F_TIP_NOTIFICATIONS = 'இது இயல்புநிலை அமைப்பாகும்: ஒவ்வொரு சிக்கலுக்கும் இதை மாற்றலாம்.';
 const F_TIP_NOTIFICATIONS_DISABLED = 'குறிப்பு: அறிவிப்புகள் தற்போது நிர்வாகியால் முடக்கப்பட்டுள்ளன.';
 const F_TIP_DESCRIPTION = 'இது திட்ட டாஷ்போர்டில் காட்டப்படும். இது மார்க் டவுன் தொடரியல் மூலம் விளக்கப்படுகிறது.';

 const F_TIP_MAX_UPLOAD = 'பதிவேற்றம்\'ஏற்றப்பட்ட ஒவ்வொரு கோப்பும் இந்த அளவைத் தாண்டக்கூடாது.';
 const F_TIP_ALLOCATED_SPACE = 'இந்த வரம்பை அடைந்த பிறகு ஒரு பயனர் மற்ற கோப்புகளைப் பதிவேற்ற முடியாது.<br /><em>கவனம்:</em> உள்நுழைந்த பயனர்கள் கோப்புகளைப் பதிவேற்ற அனுமதிக்கப்படாவிட்டால் (இது இயல்புநிலை அமைப்பு அல்ல), இந்த வரம்பு அவர்களுக்குப் பொருந்தாது.';

 const F_TIP_ID_STATUS = '<b>உதவிக்குறிப்பு:</b> ஐடிகளை மாற்றும்போது கவனமாக இருங்கள், ஏனெனில் ஒவ்வொரு சிக்கலும் அதன் பழைய நிலை ஐடியை வைத்திருக்கும் (இந்த ஐடி இனி இல்லை என்றால்: இந்த வழக்கில், இயல்புநிலை நிலை பயன்படுத்தப்படும்). ';
 const F_TIP_ID_LABEL = '<b>உதவிக்குறிப்பு:</b> ஐடிகளை மாற்றும்போது கவனமாக இருங்கள், ஏனெனில் ஒரு சிக்கலின் ஒவ்வொரு லேபிளும் அதன் பழைய ஐடியை வைத்திருக்கும் (இந்த ஐடி இனி இல்லை என்றால்: இந்த வழக்கில், லேபிளில் இருந்து சிக்கல் அகற்றப்படும்). ';
 const F_TIP_ID_GROUP = '<b>உதவிக்குறிப்பு:</b> ஐடிகளை மாற்றும்போது கவனமாக இருங்கள், ஏனெனில் ஒவ்வொரு பயனரும் தனது பழைய குழு ஐடியை வைத்திருப்பார் (இந்த ஐடி இனி இல்லை என்றால்: இந்த வழக்கில், இயல்புநிலை குழு பயன்படுத்தப்படும்). ';
 const F_TIP_CAPTCHA = 'புகுபதிகை செய்யாத பயனர்களுக்கு கேப்ட்சாவைக் காண்பிக்க செயல்களைத் தேர்வு செய்யவும்.';
 const F_TIP_API_ACCESS = '<em>/database/config_api.php</em> கோப்பில் API அணுகலை உள்ளமைக்கவும். மேலும் தகவலுக்கு API.md கோப்பைப் பார்க்கவும்.';

 const F_API_ENABLE = 'API ஐ இயக்கு';

 const HELP_MARKDOWN = '
 <h2>சொந்த தொடரியலைக் குறிக்கிறது:</h2>

 <p>பத்திகள்:</p>
<pre><code class="blank no-highlight">பத்திகள் ஒன்று அல்லது அதற்கு மேற்பட்ட வெற்று கோடுகளால் பிரிக்கப்படுகின்றன.
இதனால்தான் இந்த வாசகம் கோடு உடைந்திருந்தாலும் முந்தைய சொற்றொடரின் அதே வரியில் காட்டப்படுகிறது.

புதிய பத்தியை உருவாக்காமல் புதிய வரியைத் தொடங்க:
இங்கே போல் கோடு உடைவதற்கு முன் 2 இடைவெளிகளைச் செருகவும்.</code></pre>
 <p>முக்கியம்:</p>
<pre><code class="blank no-highlight">* சாய்வு உரை*
மீண்டும் சாய்வு உரை_

** தடித்த உரை**
மீண்டும் தடிமனான உரை__ </code></pre>

 <p>இணைப்புகள்:</p>
<pre><code class="blank no-highlight">இது ஒரு இன்லைன் இணைப்பின் [ஒரு உதாரணம்](http://example.com).
இது மற்றொன்று : &lt;http://example.com&gt;.</code></pre>

 <p>படங்கள்:</p>
<pre><code class="blank no-highlight">![நான் ஒரு படம்.](http://example.com/image.png)</code></pre>

 <p>தலைப்புகள்:</p>
<pre><code class="blank no-highlight"># மேல் நிலை தலைப்பு
## இரண்டாம் நிலை தலைப்பு
### மூன்றாம் நிலை தலைப்பு
#### நான்காம் நிலை தலைப்பு</code></pre>

 <p>பட்டியல்கள்:</p>
<pre><code class="blank no-highlight">- ஒரு உருப்படி
* மற்றொன்று

1. முதல் புள்ளி
2. இரண்டாவது புள்ளி</code></pre>

 <p>கருப்பு மேற்கோள்கள்:</p>
<pre><code class="blank no-highlight">> நான் இரண்டு பத்திகளுடன் கருப்பு மேற்கோள் காட்டுகிறேன்.
>
> நான் இரண்டாவது பத்தி.</code> </pre>

 <p>குறியீடு தொகுதிகள்:</p>
<pre><code class="blank no-highlight">இது `இன்லைன் குறியீடு தொகுதி`.</code></pre>
<pre><code class="blank no-highlight"> &lt;?php எதிரொலி "இன்டென்ட் செய்யப்பட்டதால் நான் ஒரு குறியீடு தொகுதி
 4 இடைவெளிகளுடன்"; ?&gt;</code></pre>
<pre><code class="blank no-highlight">```
&lt;?php எதிரொலி "நான் ஒரு குறியீடு தொகுதி."; ?&gt;
```

```php
&lt;?php எதிரொலி "ஆதரவு மொழிகள்: bash, cs, ruby, diff, javascript, css, xml, http, java, php, python, sql, ini, perl, json, cpp, markdown, no-highlight"; ?&gt;
```</code></pre>
 ';


  private static $permissions = array(
 'home' => array(
 'title' => 'முகப்பு:',
 'description' => 'முகப்புப் பக்கத்தை அணுகலாம் மற்றும் அவரது திட்டங்கள் தொடர்பான அனைத்து திறந்த சிக்கல்களின் பட்டியலையும் பார்க்கலாம்.'
 ),
 'dashboard' => array(
 'title' => 'டாஷ்போர்டுகள்:',
 'description' => 'திட்டங்களை அணுகலாம்' டாஷ்போர்டுகள்.'
 ),
 'issues' => array(
 'title' => 'சிக்கல்களைக் காண்க:',
 'description' => 'பொதுப் பிரச்சினைகளைப் பார்க்கலாம்.'
 ),
 'private_issues' => array(
 'title' => 'தனிப்பட்ட சிக்கல்களைக் காண்க:',
 'description' => 'குறியிடப்பட்ட சிக்கல்களை தனிப்பட்ட முறையில் பார்க்கலாம்.'
 ),
 'search' => array(
 'title' => 'தேடல்:',
 'description' => 'சிக்கல்கள் அல்லது பயனர்களைத் தேடலாம்.'
 ),
 'new_issue' => array(
 'title' => 'புதிய வெளியீடு:',
 'description' => 'புதிய இதழைச் சமர்ப்பிக்கலாம்.'
 ),
 'edit_issue' => array(
 'title' => 'சிக்கல்களைத் திருத்து:',
 'description' => 'அனைத்து சிக்கல் உரையையும் திருத்தலாம் மற்றும் நீக்கலாம்.'
 ),
 'update_issue' => array(
 'title' => 'புதுப்பிப்பு சிக்கல்கள்:',
 'description' => 'சிக்கல்கள் புதுப்பிக்கப்படலாம்: நிலையை மாற்றவும், லேபிள்களைச் சேர்க்கவும், மூடிவிட்டு மீண்டும் திறக்கவும், ...'
 ),
 'post_comment' => array(
 'title' => 'ஒரு கருத்தை இடுகையிடவும்:',
 'description' => 'கருத்தை இடலாம்.'
 ),
 'edit_comment' => array(
 'title' => 'கருத்துகளைத் திருத்து:',
 'description' => 'அனைத்து கருத்துகளையும் திருத்தலாம் (பயனர்கள் தங்கள் கருத்துகளை எப்படியும் திருத்தலாம்)'
 ),
 'view_user' => array(
 'title' => 'பயனர் சுயவிவரங்கள்:',
 'description' => 'அனைத்து பயனர் சுயவிவரங்களையும் பார்க்க முடியும்.'
 ),
 'upload' => array(
 'title' => 'கோப்பை இடுகையிடவும்:',
 'description' => 'கருத்து அல்லது புதிய சிக்கலில் கோப்புகளைச் சேர்க்கலாம்.'
 ),
 'view_upload' => array(
 'title' => 'பதிவேற்றங்களைக் காண்க:',
 'description' => 'அனைத்து பதிவேற்றிய கோப்புகளையும் அணுகலாம்.'
 ),
 'settings' => array(
 'title' => 'எஸ்அமைப்புகளை மாற்று:',
 'description' => 'இந்தப் பக்கத்தை அணுகலாம் மற்றும் அனைத்து உலகளாவிய அமைப்புகளையும் மாற்றலாம்.'
 ),
 'signup' => array(
 'title' => 'பதிவு:',
 'description' => 'பதிவு செய்யலாம்.'
 ),
 'view_errors' => array(
 'title' => 'அபாயகரமான பிழைகளைக் காண்க:',
 'description' => 'அபாயகரமான பிழைகள் பற்றிய விளக்கத்தைப் பார்க்கலாம்.'
 )
 );

 public static function permissions($id, $type = 'விளக்கம்') {
 return self::$permissions[$id][$type];
 }

 private static $settings = array(
 'validate_url' => 'தவறான url.',
 'validate_email' => 'மின்னஞ்சல் செல்லாது.',
 'private_label_removed' => 'நீங்கள் ஒரு தனிப்பட்ட லேபிளை அகற்றவோ அல்லது அதன் ஐடியை மாற்றவோ முடியாது, ஆனால் நீங்கள் அதன் பெயரை மாற்றலாம்.',
 'default_status_removed' => 'இயல்புநிலை நிலையை நீக்கவோ அல்லது அதன் ஐடியை மாற்றவோ முடியாது, ஆனால் நீங்கள் அதன் பெயரை மாற்றலாம்.',
 'default_group_removed' => 'இயல்புநிலை குழுவை நீங்கள் அகற்றவோ அல்லது அதன் ஐடியை மாற்றவோ முடியாது, ஆனால் நீங்கள் அதன் பெயரை மாற்றலாம்.',
 'default_group_superuser_removed' => 'நீங்கள் ஒரு சூப்பர் யூசர் குழுவை அகற்றவோ அல்லது அதன் ஐடியை மாற்றவோ முடியாது, ஆனால் நீங்கள் அதன் பெயரை மாற்றலாம்.',
 'validate_same_username' => 'எச்சரிக்கை: இரு பயனர்களும் ஒரே பயனர் பெயரைக் கொண்டுள்ளனர்.',
 'validate_same_project_name' => 'இரண்டு திட்டங்களுக்கு ஒரே பெயர் இருக்கக்கூடாது. ஒன்று தானாகவே பெயர் மாற்றப்பட்டது.',
 'language_modified' => 'புதிய மொழியில் பார்க்க இந்தப் பக்கத்தைப் புதுப்பிக்கவும்.'
 );

  public static function settings($id) {
  return self::$settings[$id];
  }

 private static $errors = array(
 E_ERROR => 'அபாயகரமான பிழை',
 E_WARNING => 'எச்சரிக்கை',
 E_PARSE => 'பாகுபடுத்தும் பிழை',
 E_NOTICE => 'அறிவிப்பு',
 E_STRICT => 'ஆலோசனை',
 E_DEPRECATED => 'நிறுத்தப்பட்டது', 'இயல்புநிலை' => 'பிழை'
 );

 public static function errors($no) {
  return (isset(self::$errors[$no])) ? self::$errors[$no] : self::$errors['default'];
 }
}

?>
