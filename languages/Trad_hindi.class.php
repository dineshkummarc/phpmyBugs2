<?php

class Trad {

# शब्द

const W_ISSUE = 'मुद्दा';
const W_OPEN = 'खुला';
const W_OPENED = 'खुला';
const W_CLOSED = 'बंद';
const W_REOPENED = 'फिर से खोला';
const W_COMMENTED = 'टिप्पणी की गई';
const W_NOBODY = 'कोई नहीं';
const W_SOMEONE = 'कोई';
const W_ENABLED = 'सक्षम';
const W_DISABLED = 'अक्षम';
const W_NOTFOUND = 'नहीं मिला';
const W_FORBIDDEN = 'निषिद्ध';
const W_MENU = 'मेनू';
const W_EXAMPLE = 'उदाहरण';
const W_HEX = 'हेक्स';
const W_RENDERING = 'रेंडरिंग';
const W_ID = 'आईडी';
const W_DISPLAY_NAME = 'प्रदर्शन नाम';
const W_SECONDE = 'सेकंड';
const W_MINUTE = 'मिनट';
const W_HOUR = 'घंटा';
const W_DAY = 'दिन';
const W_WEEK = 'सप्ताह';
const W_MONTH = 'महीना';
const W_YEAR = 'वर्ष';
const W_DECADE = 'दशक';
const W_SECONDE_P = 'सेकंड';
const W_MINUTE_P = 'मिनट';
const W_HOUR_P = 'घंटे';
const W_DAY_P = 'दिन';
const W_WEEK_P = 'सप्ताह';
const W_MONTH_P = 'महीने';
const W_YEAR_P = 'वर्ष';
const W_DECADE_P = 'दशक';
const W_PREVIOUS = 'पिछला';
const W_NEXT = 'अगला';
const W_MORE = 'अधिक';
const W_CURRENT = 'पृष्ठ %nb1% का %nb2%';
const W_NOT_LOGGED = 'लॉग इन नहीं किया गया';
const W_SUSPENSION = '…';
const W_EXTRACT = '“%text%”';
const W_USER = 'उपयोगकर्ता';
const W_DEVELOPPER = 'डेवलपर';
const W_SUPERUSER = 'सुपरयूजर';
const W_S_NEW = 'नया';
const W_S_CONFIRMED = 'पुष्टि की गई';
const W_S_ASSIGNED = '%user% को असाइन किया गया';
const W_S_RESOLVED = 'समाधान किया गया';
const W_S_REJECTED = 'अस्वीकृत';
const W_L_URGENT = 'तत्काल';
const W_L_IMPROVEMENT = 'सुधार';
const W_L_PRIVATE = 'निजी';
const W_PROFILEPIC = 'प्रोफ़ाइल चित्र';
const W_RSS = 'आरएसएस फ़ीड';
const W_VERSION = 'संस्करण';
const W_CAPTCHA_IMAGE = 'कैप्चा छवि';
const W_CAPTCHA_REFRESH = 'छवि ताज़ा करें';
const W_CAPTCHA_INPUT = 'टेक्स्ट लिखें:';
# क्रियाएँ
const V_UPDATE = 'अपडेट करें';
const V_UPDATE_DETAILS = 'विवरण अपडेट करें';
const V_UPDATE_CONTENT = 'सामग्री अपडेट करें';
const V_UPDATE_AND = 'अपडेट करें और %विशेषण%';
const V_CANCEL = 'रद्द करें';
const V_PREVIEW = 'पूर्वावलोकन';
const V_COMMENT = 'टिप्पणी करें';
const V_SUBMIT = 'सबमिट करें';
const V_SELECT_FILE = 'फ़ाइल चुनें…';
const V_UPLOADING = 'अपलोड हो रहा है…';
const V_SAVE_CONFIG = 'सेटिंग्स सहेजें';
const V_APPLY = 'लागू करें';
const V_EDIT = 'संपादित करें';
const V_SIGNUP = 'साइन अप करें';
const V_LOGIN = 'लॉग इन करें';
const V_CONTINUE = 'जारी रखें';
const V_REMOVE_ISSUE = 'समस्या मिटाएँ';
const V_CLOSE = 'बंद करें';
const V_REOPEN = 'पुनः खोलें';
const V_EXPORT = 'कच्चा डेटा निर्यात करें';
# वाक्य
const S_NOLABEL = '–';
const S_NODEPENDENCY = '–';
const S_COMMENT_LEAVE = 'टिप्पणी छोड़ें:';
const S_AGO = '%duration% %pediod% पहले';
const S_ISSUE_ABOUT = 'इस समस्या के बारे में:';
const S_UPLOAD_ADD = 'फ़ाइल संलग्न करें:';
const S_WELCOME = 'स्वागत है, %user%';
const S_NEVER = 'कभी नहीं';
const S_ME = 'जिन समस्याओं में मैंने योगदान दिया है, उनके अपडेट';
const S_ALWAYS = 'प्रत्येक अपडेट के बारे में';
const S_START_NOTIF = 'नए अपडेट के बारे में सूचित रहें';
const S_STOP_NOTIF = 'अब अपडेट के बारे में सूचित नहीं किया जाएगा';
const S_NOTFOUND = 'आप जिस पेज को खोज रहे हैं वह अब मौजूद नहीं है...';
const S_FORBIDDEN = 'आपको इस पेज तक पहुँचने की अनुमति नहीं है। कृपया जारी रखने के लिए लॉग इन/आउट करें।';
const S_VIEW_PARTICIPATION = 'उनकी भागीदारी देखें।';
const S_VIEW_STATUS = 'मुद्दे “%status%” देखें।';
const S_ISSUE_CREATED = 'by %user% %time%';
const S_ISSUE_UPDATED = '%adj% by %user% %time%.';
const S_ISSUE_STATUS_UPDATED = 'स्थिति %user% %time% द्वारा %status% में अपडेट की गई।';

const S_RSS_ISSUE_UPDATED = 'स्थिति %user% द्वारा “%status%” में अपडेट की गई।';

const S_INTRO_INSTALL = 'ऐसा लगता है कि यह पहली बार है जब आपने phpmyBugs चलाया है! कृपया इसे कॉन्फ़िगर करें:';
const S_FIRST_ISSUE_TITLE = 'आप कैसे हैं, कद्दू?';
const S_FIRST_ISSUE = 'मैं आपकी पहली समस्या हूँ! लॉग इन करने के बाद, आप मुझे हटा सकेंगे।';

const S_NO_USER = 'कोई भी उपयोगकर्ता आपके अनुरोध से मेल नहीं खाता।';
const S_NO_ISSUE = 'कोई भी समस्या आपके अनुरोध से मेल नहीं खाती।';
const S_MATCHING_ISSUES = '%nb% मिलान संबंधी समस्याएँ';
const S_NO_ACTIVITY = 'कोई हाल ही की गतिविधि नहीं.';
const S_NO_UPLOAD = 'कोई अपलोड नहीं.';
const S_SIZE_REMAINING = 'अनुमत %total% पर शेष%% शेष है.';
const S_NO_PROJECT = 'कोई प्रोजेक्ट नहीं.';
const S_SEARCH = '#12, @user, शब्द…';
const S_COPYRIGHT = '%name% द्वारा संचालित.';
const S_UPGRADE = '<a href="https://github.com/bugtrackr/Nireus/releases/latest">गिटहब</a> से <a href="https://bugtrackr.github.io/wiki/upgrade/">अपग्रेड</a> तक नवीनतम संस्करण प्राप्त करें.';

const S_LAST_UPDATES = 'अंतिम अपडेट…';

const S_STAY_LOGGEDIN = 'मुझे लॉग इन रखें';

const S_DEFAULT_DEFPROJ_DESC = 'यह डिफ़ॉल्ट प्रोजेक्ट है जहाँ सभी की पहुँच है।';
const S_DEFAULT_2NDPROJ_DESC = 'यह आपकी दूसरी प्रोजेक्ट हो सकती है जहाँ केवल पंजीकृत उपयोगकर्ताओं को ही समस्याएँ पोस्ट करने की अनुमति है।';

# अलर्ट

const A_ERROR_DIRECTORY = '<strong>त्रुटि:</strong> निर्देशिका “%name%” बनाने में असमर्थ।';
const A_ERROR_FILE = '<strong>त्रुटि:</strong> फ़ाइल “%name%” पढ़ने में असमर्थ।';
const A_ERROR_FILE_WRITE = '<strong>त्रुटि:</strong> फ़ाइल “%name%” लिखने में असमर्थ।';
const A_ERROR_FATAL = 'क्षमा करें, कुछ गलत हो गया। यदि यह समस्या बनी रहती है तो कृपया किसी व्यवस्थापक से संपर्क करें।';
const A_ERROR = '<strong>%title%:</strong><br /><br />%message%<br /><br />फ़ाइल “<strong>%file%</strong>” लाइन <strong>%line%</strong> पर।';
const A_SUCCESS_INSTALL = '<strong>संपन्न:</strong> पी.एच.पीमाईबग्स अब पूरी तरह से कॉन्फ़िगर हो गया है।';
const A_ERROR_INSTALL = '<strong>त्रुटि:</strong> पी.एच.पीमाईबग्स पहले से ही कॉन्फ़िगर हो गया है। यदि आप कॉन्फ़िगरेशन को रीसेट करना चाहते हैं तो कृपया कॉन्फ़िगरेशन फ़ाइल को हटा दें।';
const A_MODIF_SAVED = 'संशोधन सहेजे गए थे।';
const A_ERROR_FORM = 'कोई त्रुटि हुई है। कृपया फ़ॉर्म फिर से भेजें।';
const A_ERROR_TOKEN = 'गलत टोकन। कृपया फ़ॉर्म फिर से भेजें।';
const A_ERROR_EMPTY = 'आपको उपयोगकर्ता नाम और पासवर्ड निर्दिष्ट करना होगा।';
const A_ERROR_SAME_USERNAME = 'यह उपयोगकर्ता नाम उपलब्ध नहीं है।';
const A_SUCCESS_SIGNUP = '<strong>संपन्न:</strong> अब आप लॉग इन कर सकते हैं।';
const A_CONFIRM_DELETE_COMMENT = 'क्या आप वाकई इस टिप्पणी को हटाना चाहते हैं?';
const A_SUCCESS_DELETE_COMMENT = 'टिप्पणी हटा दी गई थी।';
const A_CONFIRM_DELETE_ISSUE = 'क्या आप वाकई इस मुद्दे को हटाना चाहते हैं?';
const A_SUCCESS_DELETE_ISSUE = 'मुद्दे को हटा दिया गया था।';
const A_CONFIRM_DELETE_UPLOAD = 'क्या आप वाकई इस फ़ाइल को हटाना चाहते हैं?';
const A_CONFIRM_DELETE_PROJECT = 'क्या आप वाकई इस प्रोजेक्ट को हटाना चाहते हैं? सभी संबंधित मुद्दे खो जाएँगे.';
const A_LOGGED = 'अब आप सिस्टम में लॉग इन हैं.';
const A_LOGGED_OUT = 'अब आप सिस्टम से लॉग आउट हैं.';
const A_ERROR_CONNEXION = '<strong>त्रुटि:</strong> गलत उपयोगकर्ता नाम या पासवर्ड.';
const A_ERROR_CONNEXION_WAIT = '<strong>त्रुटि:</strong> गलत उपयोगकर्ता नाम या पासवर्ड. कृपया पुनः प्रयास करने से पहले %duration% %period% प्रतीक्षा करें.';
const A_ERROR_LOGIN_WAIT = 'कृपया पुनः प्रयास करने से पहले %duration% %period% प्रतीक्षा करें. यह दुर्भावनापूर्ण हमलों के विरुद्ध सुरक्षा है.';
const A_ERROR_UPLOAD = 'कोई त्रुटि हुई है। कृपया पुनः प्रयास करें।';
const A_ERROR_UPLOAD_SIZE = 'फ़ाइल अधिकतम स्वीकृत आकार (%nb% अधिकतम) से अधिक है।';
const A_ERROR_UPLOAD_FULL = 'आपके पास इस फ़ाइल को अपलोड करने के लिए पर्याप्त डिस्क स्थान नहीं है: %nb% शेष है।';
const A_PLEASE_LOGIN_ISSUES = 'समस्याओं को देखने के लिए कृपया लॉग इन करें।';
const A_PLEASE_LOGIN_COMMENT = 'कृपया टिप्पणी पोस्ट करने के लिए लॉग इन करें। अभी तक कोई खाता नहीं है? एक बनाएँ: यह मुफ़्त है और वास्तव में तेज़ है!';
const A_PLEASE_LOGIN_ISSUE = 'समस्या सबमिट करने के लिए कृपया लॉग इन करें। अभी तक कोई खाता नहीं है? एक बनाएँ: यह मुफ़्त है और वास्तव में तेज़ है!';
const A_SHOULD_LOGIN = 'यदि आपके पास खाता है, तो कृपया लॉग इन करें। यदि नहीं, तो एक खाता बनाने पर विचार करें: यह मुफ़्त और बहुत तेज़ है!';

const A_IE = 'आपका ब्राउज़र पुराना हो गया है: <a href="https://www.browser-update.org/en/update.html">इसे अपग्रेड करें या बदलें</a>.';

# मेल

const M_NEW_COMMENT_O = '[%title% — %project% — समस्या #%id%] नई टिप्पणी';
const M_NEW_COMMENT = 'नमस्ते, %username%!

समस्या #%id% — “%summary%” पर अभी-अभी %by% द्वारा टिप्पणी की गई है। आप नई टिप्पणी यहाँ पढ़ सकते हैं:
%url%.

यदि आप इस समस्या पर आगे कोई सूचना प्राप्त नहीं करना चाहते हैं, तो ऊपर दिए गए लिंक के माध्यम से (लॉग इन करने के बाद) एक विकल्प उपलब्ध है।

-----
यह एक स्वचालित ईमेल है, कृपया उत्तर न दें।
';

const M_NEW_ISSUE_O = '[%title% — %project%] नया मुद्दा';
const M_NEW_ISSUE = 'नमस्ते, %username%!

मुद्दा #%id% — “%summary%” अभी-अभी %by% द्वारा सबमिट किया गया है। आप इसे यहाँ पढ़ सकते हैं:
%url%.

यदि आप इस मुद्दे पर आगे की सूचनाएँ प्राप्त नहीं करना चाहते हैं, तो ऊपर दिए गए लिंक के माध्यम से एक विकल्प उपलब्ध है (लॉग इन करने के बाद)।

-----
यह एक स्वचालित ईमेल है, कृपया उत्तर न दें।
';

# शीर्षक

const T_INSTALLATION = 'स्थापना';
const T_SETTINGS = 'सेटिंग्स';
const T_GLOBAL_SETTINGS = 'वैश्विक सेटिंग्स';
const T_APPEARANCE = 'उपस्थिति';
const T_ISSUES = 'समस्याएँ';
const T_GROUPS = 'समूह';
const T_USERS = 'उपयोगकर्ता';
const T_PERMISSIONS = 'अनुमतियाँ';
const T_ENABLE_CAPTCHA = 'कैप्चा प्रबंधित करें';
const T_CAPTCHA = 'कैप्चा';
const T_BROWSE_ISSUES = 'समस्याएँ ब्राउज़ करें';
const T_BROWSE_ALL_ISSUES = 'सभी समस्याएँ ब्राउज़ करें';
const T_ALL_ISSUES_DESCRIPTION = 'ये सभी परियोजनाएँ सभी खुले मुद्दे हैं';
const T_NEW_ISSUE = 'नई समस्या';
const T_ALL_ISSUES = 'सभी समस्याएँ';
const T_PROJECTS = 'परियोजनाएँ';
const T_DASHBOARD = 'डैशबोर्ड';
const T_LAST_UPDATES = 'अंतिम अपडेट';
const T_LAST_ACTIVITY = 'अंतिम गतिविधि';
const T_UPLOADS = 'अपलोड';
const T_SEARCH = 'खोज';
const T_LINK_CONTACT = 'हमसे संपर्क करें';
const T_LINK_LEGALNOTICE = 'कानूनी नोटिस';
const T_LINK_PRIVACYPOLICY = 'गोपनीयता नीति';
const T_API_SETTINGS = 'एपीआई';
const T_API_ENABLE_SETTINGS = 'एपीआई प्रबंधित करें';
const T_API_ACCESS_SETTINGS = 'एपीआई एक्सेस';
const T_INFO = 'जानकारी';
# फॉर्म
const F_USERNAME = 'उपयोगकर्ता नाम:';
const F_PASSWORD = 'पासवर्ड:';
const F_USERNAME2 = 'उपयोगकर्ता नाम';
const F_PASSWORD2 = 'पासवर्ड';
const F_NAME = 'नाम:';
const F_URL = 'यूआरएल:';
const F_URL_CDN = 'सी.डी.एन यूआरएल:';
const F_URL_REWRITING = 'यूआरएल पुनर्लेखन:';
const F_INTRO = 'परिचय:';
const F_DESCRIPTION = 'विवरण:';
const F_EMAIL = 'ईमेल:';
const F_LINK_CONTACT = 'बाहरी संपर्क पृष्ठ का लिंक (खाली छोड़ा जा सकता है):';
const F_LINK_LEGALNOTICE = 'कानूनी नोटिस का लिंक (खाली छोड़ा जा सकता है):';
const F_LINK_PRIVACYPOLICY = 'गोपनीयता नीति का लिंक (खाली छोड़ा जा सकता है):';
const F_MAX_UPLOAD = 'प्रति अपलोड अधिकतम आकार:';
const F_ALLOCATED_SPACE = 'प्रति उपयोगकर्ता आवंटित स्थान:';
const F_GROUP = 'समूह:';
const F_NOTIFICATIONS = 'सूचित किया जाए:';
const F_PROJECT_X = 'प्रोजेक्ट “%name%”:';
const F_LANGUAGE = 'भाषा:';
const F_LOGS = 'लॉग:';
const F_ISSUES_PAGE = 'प्रति पृष्ठ समस्याएँ:';
const F_ISSUES_PAGE_SEARCH = 'प्रति पृष्ठ समस्याएँ (खोज):';
const F_PREVIEW_ISSUE = 'पूर्वावलोकन लंबाई (समस्याएँ):';
const F_PREVIEW_SEARCH = 'पूर्वावलोकन लंबाई (खोज):';
const F_PREVIEW_PROJECT = 'पूर्वावलोकन लंबाई (परियोजनाएँ):';
const F_LAST_EDITS = 'डैशबोर्ड पर प्रदर्शित समस्याओं की संख्या:';
const F_LAST_ACTIVITY = 'उपयोगकर्ता पृष्ठों पर प्रदर्शित समस्याओं की संख्या:';
const F_THEME = "थीम";
const F_TIP_THEME = ".css फ़ाइल को इसमें रखें";
const F_ADD_PROJECT = 'नई परियोजना';
const F_ADD_COLOR = 'नया रंग';
const F_ADD_STATUS = 'नई स्थिति';
const F_ADD_LABEL = 'नया लेबल';
const F_ADD_GROUP = 'नया समूह';
const F_ADD_USER = 'नया उपयोगकर्ता';
const F_SORT_BY = 'इसके अनुसार क्रमबद्ध करें:';
const F_SORT_ID = 'आईडी';
const F_SORT_MOD = 'अंतिम अद्यतन';
const F_SORT_DESC = 'अवरोही';
const F_SORT_ASC = 'आरोही';
const F_FILTER_STATUSES = 'फ़िल्टर स्थितियाँ:';
const F_FILTER_STATES = 'फ़िल्टर स्थितियाँ:';
const F_FILTER_LABELS = 'फ़िल्टर लेबल:';
const F_FILTER_USERS = 'फ़िल्टर उपयोगकर्ता:';
const F_FILTER_MILESTONE = 'फ़िल्टर मील का पत्थर:';

const F_WRITE = 'लिखें:';
const F_SUMMARY = 'सारांश';
const F_CONTENT = 'सामग्री';
const F_STATUS = 'स्थिति:';
const F_RELATED = 'संबंधित:';
const F_LABELS2 = 'लेबल:';
const F_MILESTONE = 'मील का पत्थर:';
const F_GENERAL_SETTINGS = 'सामान्य सेटिंग्स:';
const F_PROJECTS = 'प्रोजेक्ट:';
const F_DATABASE = 'डेटाबेस:';
const F_UPLOADS = 'अपलोड:';
const F_COLORS = 'रंग प्रबंधित करें:';
const F_DISPLAY = 'डिस्प्ले प्रबंधित करें:';
const F_STATUSES = 'स्थिति प्रबंधित करें:';
const F_LABELS = 'लेबल प्रबंधित करें:';
const F_GROUPS = 'समूह प्रबंधित करें:';
const F_PERMISSIONS = 'अनुमति प्रबंधित करें:';
const F_USERS = 'उपयोगकर्ता प्रबंधित करें:';
const F_INVALID_CAPTCHA = 'आपके द्वारा दर्ज किया गया कैप्चा गलत था। कृपया पुनः प्रयास करें।';
const F_TIP_NAME = 'यह प्रत्येक पृष्ठ के शीर्षलेख पर प्रदर्शित होगा।';
const F_TIP_URL_REWRITING = 'यूआरएल पुनर्लेखन को अक्षम करने के लिए इस फ़ील्ड को खाली छोड़ दें। अन्यथा, इसमें डोमेन नाम के सापेक्ष phpmyBugs फ़ोल्डर (एक "/" के साथ शुरू और समाप्त) का पथ होना चाहिए।';
const F_TIP_URL_CDN = 'CDN को अक्षम करने के लिए इस फ़ील्ड को खाली छोड़ दें। अन्यथा, इसमें आपके सीडीएन का यूआरएल होना चाहिए (उदाहरण के लिए <em>https://cdn.rawgit.com/bugtrackr/Nireus/master/</em>, इसे इस्तेमाल करने में संकोच न करें)। अपने सीडीएन पर <em>/public</em> फ़ोल्डर से सभी फ़ाइलों को होस्ट करना सुनिश्चित करें।';
const F_TIP_INTRO = 'यह होम पेज पर प्रदर्शित किया जाएगा। इसे मार्कडाउन सिंटैक्स के साथ पार्स किया जाएगा। नोट: यदि "%name%" नाम की केवल एक परियोजना है, तो होम पेज स्वचालित रूप से प्रोजेक्ट डैशबोर्ड पर रीडायरेक्ट हो जाता है, और यह टेक्स्ट प्रदर्शित नहीं होगा।';
const F_TIP_EMAIL = 'ईमेल सूचनाएँ अक्षम करने के लिए इस फ़ील्ड को खाली छोड़ दें। अन्यथा, ईमेल सूचना भेजते समय इस पते का उपयोग प्रेषक के रूप में किया जाएगा।';
const F_TIP_PASSWORD = 'यदि आप पासवर्ड नहीं बदलना चाहते हैं तो इसे खाली छोड़ दें।';
const F_TIP_USER_EMAIL = 'केवल तभी आवश्यक है जब आप सूचनाएँ प्राप्त करना चाहते हैं।';
const F_TIP_NOTIFICATIONS = 'यह एक डिफ़ॉल्ट सेटिंग है: आप इसे प्रत्येक समस्या के लिए बदल सकेंगे।';
const F_TIP_NOTIFICATIONS_DISABLED = 'नोट: सूचनाएँ वर्तमान में व्यवस्थापक द्वारा अक्षम हैं।';
const F_TIP_DESCRIPTION = 'यह प्रोजेक्ट डैशबोर्ड पर प्रदर्शित किया जाएगा। इसे मार्कडाउन सिंटैक्स के साथ पार्स किया जाएगा।';
const F_TIP_MAX_UPLOAD = 'प्रत्येक अपलोड की गई फ़ाइल इस आकार से अधिक नहीं हो सकती।';
const F_TIP_ALLOCATED_SPACE = 'एक उपयोगकर्ता इस सीमा तक पहुँचने के बाद अन्य फ़ाइलें अपलोड नहीं कर सकता।<br /><em>ध्यान दें:</em> यदि किसी भी लॉग इन उपयोगकर्ता को फ़ाइलें अपलोड करने की अनुमति नहीं है (यह डिफ़ॉल्ट सेटिंग नहीं है), तो यह सीमा उन पर लागू नहीं होती है।';
const F_TIP_ID_STATUS = '<b>टिप:</b> आईडी बदलते समय सावधान रहें, क्योंकि प्रत्येक समस्या अपनी पुरानी स्थिति आईडी रखती है (सिवाय इसके कि अगर यह आईडी अब मौजूद नहीं है: इस मामले में, डिफ़ॉल्ट स्थिति का उपयोग किया जाएगा)।';
const F_TIP_ID_LABEL = '<b>टिप:</b> आईडी बदलते समय सावधान रहें, क्योंकि एक समस्या का प्रत्येक लेबल अपनी पुरानी आईडी रखता है (सिवाय इसके कि अगर यह आईडी अब मौजूद नहीं है: इस मामले में, लेबल को समस्या से हटा दिया जाता है)।';
const F_TIP_ID_GROUP = '<b>टिप:</b> आईडी बदलते समय सावधान रहें, क्योंकि प्रत्येक उपयोगकर्ता अपनी पुरानी समूह आईडी रखता है (सिवाय इसके कि अगर यह आईडी अब मौजूद नहीं है: इस मामले में, डिफ़ॉल्ट समूह का उपयोग किया जाएगा)।';
const F_TIP_CAPTCHA = 'ऐसी क्रियाएँ चुनें जहाँ लॉग इन न करने वाले उपयोगकर्ताओं के लिए कैप्चा दिखाया जाएगा।';
const F_TIP_API_ACCESS = '<em>/database/config_api.php</em> फ़ाइल में एपीआई एक्सेस कॉन्फ़िगर करें। अधिक जानकारी के लिए एपीआई.एमडी फ़ाइल देखें।';

const F_API_ENABLE = 'एपीआई सक्षम करें';

const HELP_MARKDOWN = '
<h2>Markdअपना सिंटैक्स:</h2>

<p>पैराग्राफ:</p>
<pre><code class="blank no-highlight">पैराग्राफ एक या अधिक रिक्त पंक्तियों द्वारा अलग किए जाते हैं।
इसलिए यह टेक्स्ट उसी पंक्ति में प्रदर्शित होगा जिसमें पिछला वाक्यांश था, चाहे लाइन ब्रेक कुछ भी हो।

नया पैराग्राफ बनाए बिना नई लाइन शुरू करने के लिए:
लाइन ब्रेक से पहले 2 स्पेस डालें, ठीक वैसे ही जैसे यहाँ है।</code></pre>

<p>जोर:</p>
<pre><code class="blank no-highlight">*इटैलिक टेक्स्ट*
_इटैलिक टेक्स्ट फिर से_

**बोल्ड टेक्स्ट**
__बोल्ड टेक्स्ट फिर से__ </code></pre>

<p>लिंक:</p>
<pre><code class="blank no-highlight">यह इनलाइन लिंक का [एक उदाहरण](http://example.com) है।
यह एक और है: &lt;http://example.com&gt;.</code></pre>

<p>छवियाँ:</p>
<pre><code class="blank no-highlight">![मैं एक छवि हूँ.](http://example.com/image.png)</code></pre>

<p>शीर्षलेख:</p>
<pre><code class="blank no-highlight"># शीर्ष स्तरीय शीर्षक
## द्वितीय स्तरीय शीर्षक
### तृतीय स्तरीय शीर्षक
#### चतुर्थ स्तरीय शीर्षक</code></pre>

<p>सूचियाँ:</p>
<pre><code class="blank no-highlight">- एक आइटम
* दूसरा

1. पहला आइटम
2. दूसरा आइटम</code></pre>

<p>ब्लॉककोट:</p>
<pre><code class="blank no-highlight">> मैं एक ब्लॉककोट हूँ दो पैराग्राफ के साथ।
>
> मैं दूसरा पैराग्राफ हूँ।</code></pre>

<p>कोड ब्लॉक:</p>
<pre><code class="blank no-highlight">यह एक `इनलाइन कोड ब्लॉक` है।</code></pre>
<pre><code class="blank no-highlight"> &lt;?php echo "मैं एक कोड ब्लॉक हूँ, क्योंकि मैं 4 स्पेस के साथ इंडेंटेड हूँ"; ?&gt;</code></pre>
<pre><code class="blank no-highlight">```
&lt;?php echo "मैं एक कोड ब्लॉक हूँ।"; ?&gt;
```

```php
&lt;?php echo "समर्थित भाषाएँ हैं: bash, cs, ruby, diff, javascript, css, xml, http, java, php, python, sql, ini, perl, json, cpp, markdown, no-highlight"; ?&gt;
```</code></pre>
';

private static $permissions = array(

'home' => array(

'title' => 'होम:',

'description' => 'होम पेज तक पहुँच सकता है और अपनी परियोजनाओं के लिए सभी खुले मुद्दों की सूची देख सकता है।'

),

'dashboard' => array(

'title' => 'डैशबोर्ड:',

'description' => 'परियोजनाओं के डैशबोर्ड तक पहुँच सकता है।'

),

'issues' => array(

'title' => 'मुद्दे देखें:',

'description' => 'सार्वजनिक मुद्दे देख सकता है।'

),

'private_issues' => array(

'title' => 'निजी मुद्दे देखें:',

'description' => 'निजी के रूप में टैग किए गए मुद्दे देख सकता है।'

),

'search' => array(

'title' => 'खोज:',

'description' => 'मुद्दों या उपयोगकर्ताओं को खोज सकता है।'

),

'new_issue' => array(

'title' => 'नया मुद्दा:',

'description' => 'नया मुद्दा सबमिट कर सकता है।'

),
'edit_issue' => array(
'title' => 'समस्याओं को संपादित करें:',
'description' => 'सभी समस्याओं के पाठ को संपादित कर सकते हैं और उन्हें हटा सकते हैं।'
),
'update_issue' => array(
'title' => 'समस्याओं को अपडेट करें:',
'description' => 'समस्याओं को अपडेट कर सकते हैं: स्थिति बदलें, लेबल जोड़ें, बंद करें और फिर से खोलें, ...'
),
'post_comment' => array(
'title' => 'टिप्पणी पोस्ट करें:',
'description' => 'टिप्पणी पोस्ट कर सकते हैं।'
),
'edit_comment' => array(
'title' => 'टिप्पणियाँ संपादित करें:',
'description' => 'सभी टिप्पणियाँ संपादित कर सकते हैं (उपयोगकर्ता वैसे भी अपनी टिप्पणियाँ संपादित कर सकते हैं)।'
),
'view_user' => array(
'title' => 'उपयोगकर्ता प्रोफ़ाइल:',
'description' => 'सभी उपयोगकर्ता प्रोफ़ाइल देख सकते हैं।'
),
'upload' => array(
'title' => 'फ़ाइल पोस्ट करें:',
'description' => 'किसी टिप्पणी या किसी नए मुद्दे पर फ़ाइलें संलग्न कर सकते हैं।'
),
'view_upload' => array(
'title' => 'अपलोड देखें:',
'description' => 'सभी अपलोड की गई फ़ाइलों तक पहुँच सकते हैं।'
),
'settings' => array(
'title' => 'सेटिंग्स बदलें:',
'description' => 'इस पृष्ठ तक पहुँच सकते हैं और सभी वैश्विक सेटिंग्स को संशोधित कर सकते हैं।'
),
'signup' => array(
'title' => 'साइन अप करें:',
'description' => 'साइन अप कर सकते हैं।'
),
'view_errors' => array(
'title' => 'घातक त्रुटियाँ देखें:',
'description' => 'घातक त्रुटियों का विवरण देख सकते हैं।'
)
);

public static function permissions($id, $type = 'description') {
return self::$permissions[$id][$type];
}

private static $settings = array(

'validate_url' => 'यूआरएल मान्य नहीं है.',

'validate_email' => 'ईमेल मान्य नहीं है.',

'private_label_removed' => 'आप निजी लेबल को हटा नहीं सकते या उसकी आईडी नहीं बदल सकते, लेकिन आप उसका नाम बदल सकते हैं.',

'default_status_removed' => 'आप डिफ़ॉल्ट स्थिति को हटा नहीं सकते या उसकी आईडी नहीं बदल सकते, लेकिन आप उसका नाम बदल सकते हैं.',

'default_group_removed' => 'आप डिफ़ॉल्ट समूह को हटा नहीं सकते या उसकी आईडी नहीं बदल सकते, लेकिन आप उसका नाम बदल सकते हैं.',

'default_group_superuser_removed' => 'आप सुपरयूज़र समूह को हटा नहीं सकते या उसकी आईडी नहीं बदल सकते, लेकिन आप उसका नाम बदल सकते हैं.',

'validate_same_username' => 'चेतावनी: दो उपयोगकर्ताओं का उपयोगकर्ता नाम एक ही है.',
'validate_same_project_name' => 'दो प्रोजेक्ट का नाम एक जैसा नहीं हो सकता। एक का नाम अपने आप बदल दिया गया है।',

'language_modified' => 'इस पेज को नई भाषा में देखने के लिए रिफ्रेश करें।'

);

public static function settings($id) {
return self::$settings[$id];

}

private static $errors = array(

E_ERROR => 'गंभीर त्रुटि',

E_WARNING => 'चेतावनी',

E_PARSE => 'पार्स त्रुटि',

E_NOTICE => 'सूचना',

E_STRICT => 'सलाह',

E_DEPRECATED => 'बहिष्कृत','डिफ़ॉल्ट' => 'त्रुटि'
);

public static function errors($no) {
return (isset(self::$errors[$no])) ? self::$errors[$no] : self::$errors['चूक'];
}
}

?>