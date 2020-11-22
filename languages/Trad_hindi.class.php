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
	const S_ISSUE_STATUS_UPDATED = '%user% द्वारा %time% बजे से %status% में अपडेट की गई स्थिति;';

	const S_RSS_ISSUE_UPDATED = '%adj% %user% द्वारा;';
	const S_RSS_ISSUE_STATUS_UPDATED = '%user% द्वारा स्थिति “%status%” में अपडेट की गई।';

	const S_INTRO_INSTALL = 'ऐसा लग रहा है कि आप पहली बार phpmyBugs चलाते हैं! कृपया इसे कॉन्फ़िगर करें:';
	const S_FIRST_ISSUE_TITLE = 'आप कैसे कर रहे हैं, कद्दू?';
	const S_FIRST_ISSUE = 'मैं आपका पहला अंक हूँ! लॉग इन करने के बाद, आप मुझे हटा सकेंगे;';

	const S_NO_USER = 'कोई भी उपयोगकर्ता आपके अनुरोध से मेल नहीं खाता है।';
	const S_NO_ISSUE = 'कोई समस्या आपके अनुरोध से मेल नहीं खाती है।';
	const S_MATCHING_ISSUES = '%nb% मिलान समस्याएँ';
	const S_NO_ACTIVITY = 'हाल की कोई गतिविधि नहीं।';
	const S_NO_UPLOAD = 'कोई अपलोड नहीं।';
	const S_SIZE_REMAINING = '%total% पर %remain% रहे।';
	const S_NO_PROJECT = 'कोई परियोजना नहीं।';

	const S_SEARCH = '# 12, @user, शब्द ...';
	const S_COPYRIGHT = '%name% द्वारा संचालित';

	const S_LAST_UPDATES = 'अंतिम अपडेट ...';

		# Alerts

	const A_ERROR_DIRECTORY = '<strong> त्रुटि: </strong> निर्देशिका "%name%" बनाने में असमर्थ।';
	const A_ERROR_FILE = '<strong> त्रुटि: </strong> फ़ाइल "%name%" पढ़ने में असमर्थ';
	const A_ERROR_FILE_WRITE = '<strong> त्रुटि: </strong> फ़ाइल "%file%" लिखने में असमर्थ';
	const A_ERROR_FATAL = 'क्षमा करें, कुछ गलत हुआ। अगर यह समस्या बनी रहती तो एक व्यवस्थापक से संपर्क करें।';
	const A_ERROR = '<strong>%title%: </strong> <br/>%message% <br/> <br/> फ़ाइल "<strong>%file% </strong>" लाइन पर फ़ाइल < strong>%line% </strong>';

	const A_SUCCESS_INSTALL = '<strong> संपन्न: </strong> phpmyBugs अब पूरी तरह से कॉन्फ़िगर किया गया है;';
	const A_ERROR_INSTALL = '<strong> त्रुटि: </strong> phpmyBugs पहले से कॉन्फ़िगर है। यदि आप कॉन्फ़िगरेशन रीसेट करना चाहते हैं, तो कृपया कॉन्फ़िगरेशन फ़ाइल हटा दें।';
	const A_MODIF_SAVED = 'संशोधन सहेजे गए थे';

	const A_ERROR_FORM = 'एक त्रुटि हुई। कृपया दोबारा फॉर्म भेजें। ';
	const A_ERROR_TOKEN = 'गलत टोकन। कृपया दोबारा फॉर्म भेजें। ';
	const A_ERROR_EMPTY = 'आपको एक उपयोगकर्ता नाम और एक पासवर्ड निर्दिष्ट करना होगा।';
	const A_ERROR_SAME_USERNAME = 'यह उपयोगकर्ता नाम उपलब्ध नहीं है।';
	const A_SUCCESS_SIGNUP = '<strong> संपन्न: </strong> अब आप लॉग इन कर सकते हैं';

	const A_CONFIRM_DELETE_COMMENT = 'क्या आप वाकई इस टिप्पणी को हटाना चाहते हैं?';
	const A_SUCCESS_DELETE_COMMENT = 'टिप्पणी हटा दी गई थी';
	const A_CONFIRM_DELETE_ISSUE = 'क्या आप वाकई इस मुद्दे को हटाना चाहते हैं?';
	const A_SUCCESS_DELETE_ISSUE = 'समस्या हटा दी गई थी।';
	const A_CONFIRM_DELETE_UPLOAD = 'क्या आप वाकई इस फ़ाइल को हटाना चाहते हैं?';
	const A_CONFIRM_DELETE_PROJECT = 'क्या आप वाकई इस प्रोजेक्ट को हटाना चाहते हैं? सभी संबंधित मुद्दे खो जाएंगे।';

	const A_LOGGED = 'अब आप सिस्टम में लॉग इन हैं।';
	const A_LOGGED_OUT = 'अब आप सिस्टम से लॉग आउट हो गए हैं।';
	const A_ERROR_CONNEXION = '<strong> त्रुटि: </strong> गलत उपयोगकर्ता नाम या पासवर्ड';
	const A_ERROR_CONNEXION_WAIT = '<strong> त्रुटि: </strong> गलत उपयोगकर्ता नाम या पासवर्ड। कृपया पुनः प्रयास करने से पहले %duration% %period% प्रतीक्षा करें;';
	const A_ERROR_LOGIN_WAIT = 'कृपया पुनः प्रयास करने से पहले %duration% %period% प्रतीक्षा करें। यह दुर्भावनापूर्ण हमलों के खिलाफ एक सुरक्षा है। ';

	const A_ERROR_UPLOAD = 'एक त्रुटि हुई। कृपया पुन: प्रयास करें।';
	const A_ERROR_UPLOAD_SIZE = 'फ़ाइल अधिकतम अनुमत आकार (%nb% अधिकतम) से अधिक है।';
	const A_ERROR_UPLOAD_FULL = 'इस फ़ाइल को अपलोड करने के लिए आपके पास पर्याप्त डिस्क स्थान नहीं है: %nb% शेष;';

	const A_PLEASE_LOGIN_ISSUES = 'कृपया मुद्दों को देखने के लिए लॉग इन करें।';
	const A_PLEASE_LOGIN_COMMENT = 'कृपया टिप्पणी पोस्ट करने के लिए लॉग इन करें। अभी तक कोई खाता नहीं है? एक बनाएँ: यह मुफ़्त है और वास्तव में तेज़ है! ';
	const A_PLEASE_LOGIN_ISSUE = 'कृपया कोई समस्या सबमिट करने के लिए लॉग इन करें। अभी तक कोई खाता नहीं है? एक बनाएँ: यह मुफ़्त है और वास्तव में तेज़ है! ';
	const A_SHOULD_LOGIN = 'यदि आपका खाता है, तो कृपया लॉग इन करें। यदि नहीं, तो एक बनाने पर विचार करें: यह मुफ़्त है और वास्तव में तेज़ है!';

	const A_IE = 'आपका ब्राउज़र अप्रचलित है: <a href="http://www.browserchoice.eu"> इसे अपग्रेड करना या इसे बदलना </a>';

		# Mails

	const M_NEW_COMMENT_O = '[%title% - %project% - अंक #%id%] नई टिप्पणी';
	const M_NEW_COMMENT = 'हाय, %username%!

	#%Id% - "%summary%" मुद्दे पर %by% द्वारा टिप्पणी की गई है। आप नई टिप्पणी यहां पढ़ सकते हैं:
	%url%

	यदि आप इस मुद्दे पर और सूचनाएं प्राप्त नहीं करना चाहते हैं, तो ऊपर दिए गए लिंक के माध्यम से एक विकल्प उपलब्ध है (लॉग इन करने के बाद)।

	-----
	यह एक स्वचालित ईमेल है, कृपया उत्तर न दें।
	';

	const M_NEW_ISSUE_O = '[%title% - %project%] नया मुद्दा';
	const M_NEW_ISSUE = 'हाय, %username%!

	#%Id% - "%summary%" अंक %by% से कम हो गया है। आप इसे यहां पढ़ सकते हैं:
	%url%

	यदि आप इस मुद्दे पर और सूचनाएं प्राप्त नहीं करना चाहते हैं, तो ऊपर दिए गए लिंक के माध्यम से एक विकल्प उपलब्ध है (लॉग इन करने के बाद)।

	-----
	यह एक स्वचालित ईमेल है, कृपया उत्तर न दें।
	';

		# Titles

	const T_INSTALLATION = 'स्थापना';
	const T_SETTINGS = 'सेटिंग';
	const T_GLOBAL_SETTINGS = 'वैश्विक सेटिंग';
	const T_APPEARANCE = 'सूरत';
	const T_ISSUES = 'मुद्दे';
	const T_GROUPS = 'समूह';
	const T_USERS = 'उपयोगकर्ता';
	const T_BROWSE_ISSUES = 'समस्याएं ब्राउज़ करें';
	const T_NEW_ISSUE = 'नया मुद्दा';
	const T_PROJECTS = 'प्रोजेक्ट';
	const T_DASHBOARD = 'डैशबोर्ड';
	const T_LAST_UPDATES = 'अंतिम अपडेट';
	const T_LAST_ACTIVITY = 'अंतिम गतिविधि';
	const T_UPLOADS = 'अपलोड';
	const T_SEARCH = 'खोज';

		# FORMS

	const F_USERNAME = 'उपयोगकर्ता नाम:';
	const F_PASSWORD = 'पासवर्ड:';
	const F_USERNAME2 = 'उपयोगकर्ता नाम';
	const F_PASSWORD2 = 'पासवर्ड';
	const F_NAME = 'नाम:';
	const F_URL = 'यूआरएल:';
	const F_URL_REWRITING = 'यूआरएल पुनर्लेखन:';
	const F_INTRO = 'परिचय:';
	const F_DESCRIPTION = 'विवरण:';
	const F_EMAIL = 'ईमेल:';
	const F_MAX_UPLOAD = 'अधिकतम आकार प्रति अपलोड:';
	const F_ALLOCATED_SPACE = 'प्रति उपयोगकर्ता आवंटित स्थान:';
	const F_GROUP = 'समूह:';
	const F_NOTIFICATIONS = 'अधिसूचित किया जाए:';
	const F_PROJECT_X = 'प्रोजेक्ट "%name%":';
	const F_LANGUAGE = 'भाषा:';
	const F_LOGS = 'लॉग्स:';

	const F_ISSUES_PAGE = 'प्रति पृष्ठ समस्याएं:';
	const F_ISSUES_PAGE_SEARCH = 'प्रति पृष्ठ मुद्दे (खोज):';
	const F_PREVIEW_ISSUE = 'पूर्वावलोकन लंबाई (मुद्दे):';
	const F_PREVIEW_SEARCH = 'पूर्वावलोकन लंबाई (खोज):';
	const F_PREVIEW_PROJECT = 'पूर्वावलोकन लंबाई (परियोजनाएं):';
	const F_LAST_EDITS = 'डैशबोर्ड पर प्रदर्शित मुद्दों की संख्या:';
	const F_LAST_ACTIVITY = 'उपयोगकर्ता पृष्ठों पर प्रदर्शित मुद्दों की संख्या:';

	const F_ADD_PROJECT = 'नई परियोजना';
	const F_ADD_COLOR = 'नया रंग';
	const F_ADD_STATUS = 'नई स्थिति';
	const F_ADD_LABEL = 'नया लेबल';
	const F_ADD_GROUP = 'नया समूह';
	const F_ADD_USER = 'नया उपयोगकर्ता';

	const F_SORT_BY = 'द्वारा क्रमबद्ध करें:';
	const F_SORT_ID = 'ID';
	const F_SORT_MOD = 'अंतिम अद्यतन';
	const F_SORT_DESC = 'अवरोही';
	const F_SORT_ASC = 'आरोही';
	const F_FILTER_STATUSES = 'फ़िल्टर स्थिति:';
	const F_FILTER_STATES = 'फ़िल्टर स्थिति:';
	const F_FILTER_LABELS = 'फ़िल्टर लेबल:';
	const F_FILTER_USERS = 'उपयोगकर्ताओं को फ़िल्टर करें:';

	const F_WRITE = 'लिखें:';
	const F_SUMMARY = 'सारांश';
	const F_CONTENT = 'सामग्री';

	const F_STATUS = 'स्थिति:';
	const F_RELATED = 'संबंधित:';
	const F_LABELS2 = 'लेबल:';

	const F_GENERAL_SETTINGS = 'सामान्य सेटिंग:';
	const F_PROJECTS = 'प्रोजेक्ट:';
	const F_DATABASE = 'डेटाबेस:';
	const F_UPLOADS = 'अपलोड:';
	const F_COLORS = 'रंग प्रबंधित करें:';
	const F_DISPLAY = 'प्रदर्शन प्रबंधित करें:';
	const F_STATUSES = 'स्थिति प्रबंधित करें:';
	const F_LABELS = 'लेबल प्रबंधित करें:';
	const F_GROUPS = 'समूह प्रबंधित करें:';
	const F_PERMISSIONS = 'अनुमतियाँ प्रबंधित करें:';
	const F_USERS = 'उपयोगकर्ताओं को प्रबंधित करें:';

	const F_TIP_NAME = 'यह प्रत्येक पृष्ठ के शीर्षलेख पर प्रदर्शित होगा।';
	const F_TIP_URL_REWRITING = 'url पुनर्लेखन को अक्षम करने के लिए इस फ़ील्ड को खाली छोड़ दें। अन्यथा, इसमें phpmyBugs फ़ोल्डर के लिए पथ होना चाहिए (शुरू और एक "/" के साथ समाप्त), डोमेन नाम के सापेक्ष; ';
	const F_TIP_INTRO = 'यह होम पेज पर प्रदर्शित होगा। इसे मार्कडाउन सिंटैक्स के साथ पार्स किया जाएगा। नोट: यदि "%name%" नाम की केवल एक परियोजना है, तो मुखपृष्ठ स्वचालित रूप से प्रोजेक्ट डैशबोर्ड पर पुनर्निर्देशित हो जाता है, और यह पाठ प्रदर्शित नहीं होगा। ';
	const F_TIP_EMAIL = 'ईमेल सूचनाओं को अक्षम करने के लिए इस फ़ील्ड को खाली छोड़ दें। अन्यथा, इस पते का उपयोग ईमेल अधिसूचना भेजते समय प्रेषक के रूप में किया जाएगा। ';
	const F_TIP_PASSWORD = 'यदि आप पासवर्ड बदलना नहीं चाहते हैं तो इसे खाली छोड़ दें;';
	const F_TIP_USER_EMAIL = 'केवल तभी यदि आप सूचनाएं प्राप्त करना चाहते हैं।';
	const F_TIP_NOTIFICATIONS = 'यह एक डिफ़ॉल्ट सेटिंग है: आप इसे प्रत्येक मुद्दे के लिए बदल पाएंगे;';
	const F_TIP_NOTIFICATIONS_DISABLED = 'नोट: सूचनाएं वर्तमान में व्यवस्थापक द्वारा अक्षम कर दी गई हैं।';
	const F_TIP_DESCRIPTION = 'यह प्रोजेक्ट डैशबोर्ड पर प्रदर्शित होगा। इसे मार्कडाउन सिंटैक्स के साथ पार्स किया जाएगा। ';

	const F_TIP_MAX_UPLOAD = 'प्रत्येक अपलोड की गई फ़ाइल इस आकार से अधिक नहीं हो सकती।';
	const F_TIP_ALLOCATED_SPACE = 'एक उपयोगकर्ता इस सीमा तक पहुँचने के बाद अन्य फ़ाइलों को अपलोड नहीं कर सकता। <br/> <em> ध्यान दें: </em> यदि कोई लॉग इन उपयोगकर्ताओं को फाइलें अपलोड करने की अनुमति नहीं है (यह डिफ़ॉल्ट सेटिंग नहीं है,) यह सीमा उन पर लागू नहीं होती है। ';

	const F_TIP_ID_STATUS = '<b> युक्ति: </b> आईडी बदलते समय सावधान रहें, क्योंकि प्रत्येक समस्या अपनी पुरानी स्थिति आईडी रखती है (सिवाय अगर यह आईडी अब मौजूद नहीं है: इस स्थिति में, डिफ़ॉल्ट स्थिति का उपयोग किया जाएगा)। ';
	const F_TIP_ID_LABEL = '<b> युक्ति: </b> आईडी बदलते समय सावधान रहें, क्योंकि एक अंक का प्रत्येक लेबल अपनी पुरानी आईडी रखता है (सिवाय अगर यह आईडी अब मौजूद नहीं है: इस मामले में, लेबल हटा दिया गया है मुद्दा)।';
	const F_TIP_ID_GROUP = '<b> युक्ति: </b> आईडी बदलते समय सावधान रहें, क्योंकि प्रत्येक उपयोगकर्ता अपनी पुरानी समूह आईडी रखता है (सिवाय अगर यह आईडी अब मौजूद नहीं है: इस मामले में, डिफ़ॉल्ट समूह का उपयोग किया जाएगा)। ';

	const HELP_MARKDOWN = '
		<h2> मार्कडाउन सिंटैक्स: </h2>

<P> पैराग्राफ: </p>
<pre> <code class="blank no-highlight"> पैराग्राफ को एक या अधिक रिक्त लाइनों द्वारा अलग किया जाता है।
यही कारण है कि यह पाठ उसी पंक्ति में प्रदर्शित किया जाएगा, जो कि पिछले वाक्यांश, लाइन के टूटने से कोई फर्क नहीं पड़ता।

एक नया पैराग्राफ बनाए बिना एक नई लाइन शुरू करने के लिए:
लाइन ब्रेक से पहले 2 रिक्त स्थान डालें, जैसे यहाँ। </code> </pre>
<P> जोर: </p>
<pre> <code class="blank no-highlight"> * इटैलिक टेक्स्ट *
_ पाठ फिर से_

**बोल्ड अक्षर**
__बॉल्ड टेक्स्ट फिर से </code> </pre>

<P> लिंक: </p>
<pre> <code class="blank no-highlight"> यह इनलाइन लिंक है [एक उदाहरण] (http://example.com)।
यह एक और है: &lt; http://example.com&gt; </code> </pre>

<P> चित्र: </p>
<pre> <code class="blank no-highlight">! [मैं एक छवि हूं।] (http://example.com/image.png) </code> </pre>

<P> हेडर: </p>
<pre> <code class="blank no-highlight"> # शीर्ष स्तर का शीर्षक
## दूसरे स्तर का खिताब
### तीसरे स्तर का खिताब
#### चौथे स्तर का शीर्षक </code> </pre>

<P> सूची: </p>
<pre> <code class="blank no-highlight"> - एक आइटम
* और एक

1. पहला आइटम
2. दूसरा आइटम </code> </pre>

<P> Blockquotes: </p>
<pre> <code class="blank no-highlight"> मैं दो अनुच्छेदों के साथ एक अवरोधक हूं।
>
> मैं दूसरा पैराग्राफ हूं। </code> </pre>

<p> कोड ब्लॉक: </p>
<pre> <code class="blank no-highlight"> यह एक `इनलाइन कोड ब्लॉक` है। </code> </b>
<pre> <code class="blank no-highlight"> &lt;?php echo "मैं एक कोड ब्लॉक हूं, क्योंकि मैं इंडेंटेड हूं
    4 स्थानों के साथ "; &gt; </code> </pre>
<pre> <code class="blank no-highlight"> `` `
&lt;?php गूंज "मैं एक कोड ब्लॉक हूं।" ?&gt;
`` `

`` `Php
&lt;?php echo "समर्थित भाषाएं हैं: bash, cs, ruby, diff, javascript, css, xml, http, java, php, python, sql, ini, perl, json, cpp, markdown, no-highlight"; ?&gt;
`` `</Code> </pre>
';

	private static $permissions = array(
		'home' => array (
		'title' => 'घर:',
		'description' => 'होम पेज पर पहुँच सकते हैं।'
		),
		'dashboard' => array (
		'title' => 'डैशबोर्ड:',
		'description' => 'प्रोजेक्ट डैशबोर्ड तक पहुंच सकता है।'
		),
		'issues' => array (
		'title' => 'मुद्दे देखें:',
		'description' => 'सार्वजनिक मुद्दों को देख सकते हैं।'
		),
		'private_issues' => array (
		'title' => 'निजी मुद्दे देखें:',
		'description' => 'निजी के रूप में टैग किए गए मुद्दों को देख सकते हैं।'
		),
		'search' => array (
		'title' => 'खोज:',
		'description' => 'मुद्दों या उपयोगकर्ताओं को खोज सकते हैं।'
		),
		'new_issue' => array (
		'title' => 'नया अंक:',
		'description' => 'एक नया मुद्दा प्रस्तुत कर सकते हैं।'
		),
		'edit_issue' => array (
		'title' => 'मुद्दों को संपादित करें:',
		'description' => 'सभी मुद्दों के पाठ को संपादित कर सकते हैं और उन्हें हटा सकते हैं।'
		),
		'update_issue' => array (
		'title' => 'अद्यतन समस्याएँ:',
		'description' => 'मुद्दों को अद्यतन कर सकते हैं: स्थिति बदलें, लेबल जोड़ें, बंद करें और फिर से खोलें, ...'
		),
		'post_comment' => array (
		'title' => 'एक टिप्पणी पोस्ट करें:',
		'description' => 'टिप्पणी पोस्ट कर सकते हैं।'
		),
		'edit_comment' => array (
		'title' => 'टिप्पणी संपादित करें:',
		'description' => 'सभी टिप्पणियों को संपादित कर सकते हैं (उपयोगकर्ता वैसे भी अपनी टिप्पणियों को संपादित कर सकते हैं)।'
		),
		'view_user' => array (
		'title' => 'उपयोगकर्ता प्रोफ़ाइल:',
		'description' => 'सभी उपयोगकर्ता प्रोफ़ाइल देख सकते हैं।'
		),
		'upload' => array (
		'title' => 'एक फ़ाइल पोस्ट करें:',
		'description' => 'किसी टिप्पणी या किसी नए मुद्दे पर फ़ाइलें संलग्न कर सकते हैं।'
		),
		'view_upload' => array (
		'title' => 'अपलोड देखें:',
		'description' => 'सभी अपलोड की गई फ़ाइलों तक पहुँच प्राप्त कर सकते हैं।'
		),
		'settings' => array (
		'title' => 'सेटिंग बदलें:',
		'description' => 'इस पृष्ठ पर पहुँच सकते हैं और सभी वैश्विक सेटिंग्स को संशोधित कर सकते हैं।'
		),
		'signup' => array (
		'title' => 'साइन अप:',
		'description' => 'साइन अप कर सकते हैं।'
		),
		'view_errors' => array (
		'title' => 'घातक त्रुटियां देखें:',
		'description' => 'घातक त्रुटियों का वर्णन देख सकते हैं।'
		)
	);

	public static function permissions($id, $type = 'description') {
		return self::$permissions[$id][$type];
	}

	private static $settings = array(
		'validate_url' => 'url मान्य नहीं है।',
		'validate_email' => 'ईमेल मान्य नहीं है।',
		'Private_label_removed' => 'आप निजी लेबल को हटा सकते हैं या उसकी ID नहीं बदल सकते, लेकिन आप उसका नाम बदल सकते हैं।',
		'default_status_removed' => 'आप डिफ़ॉल्ट स्थिति को हटा सकते हैं या इसकी ID नहीं बदल सकते, लेकिन आप इसका नाम बदल सकते हैं।',
		'default_group_removed' => 'आप डिफ़ॉल्ट समूह को हटा सकते हैं या उसकी ID नहीं बदल सकते, लेकिन आप उसका नाम बदल सकते हैं।',
		'default_group_superuser_removed' => 'आप सुपरयुजर समूह को हटा नहीं सकते या उसकी आईडी नहीं बदल सकते, लेकिन आप उसका नाम बदल सकते हैं।',
		'validate_same_username' => 'चेतावनी: दो उपयोगकर्ताओं के पास एक ही उपयोगकर्ता नाम है।',
		'validate_same_project_name' => 'दो प्रोजेक्ट्स का एक ही नाम नहीं हो सकता। एक का स्वतः नाम बदल दिया गया है।',
		'language_modified' => 'इस पृष्ठ को नई भाषा में देखने के लिए इसे ताज़ा करें।'
	);

	public static function settings($id) {
		return self::$settings[$id];
	}

	private static $errors = array(
		E_ERROR => 'घातक त्रुटि',
		E_WARNING => 'चेतावनी',
		E_PARSE => 'पार्स त्रुटि',
		E_NOTICE => 'सूचना',
		E_STRICT => 'सलाह',
		E_DEPRECATED => 'पदावनत',
		'default' => 'त्रुटि'
	);
	public static function errors($no) {
		return (isset(self::$errors[$no])) ? self::$errors[$no] : self::$errors['default'];
	}
}

?>