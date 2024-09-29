<?php

class Trad {

#शब्द

const W_ISSUE = 'समस्या';
const W_OPEN = 'उघडा';
const W_OPENED = 'उघडले';
const W_CLOSED = 'बंद';
const W_REOPENED = 'पुन्हा उघडले';
const W_COMMENTED = 'टिप्पणी केली';
const W_NOBODY = 'कोणीही नाही';
const W_SOMEONE = 'कोणीतरी';
const W_ENABLED = 'सक्षम';
const W_DISABLED = 'अक्षम';
const W_NOTFOUND = 'सापडले नाही';
const W_FORBIDDEN = 'निषिद्ध';
const W_MENU = 'मेनू';
const W_EXAMPLE = 'उदाहरण';
const W_HEX = 'हेक्स';
const W_RENDERING = 'रेंडरिंग';
const W_ID = 'आयडी';
const W_DISPLAY_NAME = 'डिस्प्ले नेम';
const W_SECONDE = 'सेकंड';
const W_MINUTE = 'मिनिट';
const W_HOUR = 'तास';
const W_DAY = 'दिवस';
const W_WEEK = 'आठवडा';
const W_MONTH = 'महिना';
const W_YEAR = 'वर्ष';
const W_DECADE = 'दशक';
const W_SECONDE_P = 'सेकंड';
const W_MINUTE_P = 'मिनिट';
const W_HOUR_P = 'तास';
const W_DAY_P = 'दिवस';
const W_WEEK_P = 'आठवडा';
const W_MONTH_P = 'महिना';
const W_YEAR_P = 'वर्ष';
const W_DECADE_P = 'दशक';
const W_PREVIOUS = 'मागील';
const W_NEXT = 'पुढील';
const W_MORE = 'अधिक';
const W_CURRENT = 'पृष्ठ %nb1% पैकी %nb2%';
const W_NOT_LOGGED = 'लॉग इन नाही';
const W_SUSPENSION = '…';
const W_EXTRACT = '“%text%”';
const W_USER = 'वापरकर्ता';
const W_DEVELOPPER = 'डेव्हलपर';
const W_SUPERUSER = 'सुपर यूजर';
const W_S_NEW = 'नवीन';
const W_S_CONFIRMED = 'पुष्टी';
const W_S_ASSIGNED = '%user% ला नियुक्त केले';
const W_S_RESOLVED = 'निराकरण';
const W_S_REJECTED = 'नाकारले';
const W_L_URGENT = 'अर्जंट';
const W_L_IMPROVEMENT = 'सुधारणा';
const W_L_PRIVATE = 'खाजगी';
const W_PROFILEPIC = 'प्रोफाइल पिक्चर';
const W_RSS = 'RSS फीड';
const W_VERSION = 'आवृत्ती';
const W_CAPTCHA_IMAGE = 'कॅप्चा प्रतिमा';
const W_CAPTCHA_REFRESH = 'प्रतिमा रिफ्रेश करा';
const W_CAPTCHA_INPUT = 'मजकूर टाइप करा:';
# क्रिया
const V_UPDATE = 'अपडेट';
const V_UPDATE_DETAILS = 'तपशील अपडेट करा';
const V_UPDATE_CONTENT = 'सामग्री अपडेट करा';
const V_UPDATE_AND = 'अपडेट आणि %विशेषण%';
const V_CANCEL = 'रद्द करा';
const V_PREVIEW = 'पूर्वावलोकन';
const V_COMMENT = 'टिप्पणी';
const V_SUBMIT = 'सबमिट करा';
const V_SELECT_FILE = 'फाइल निवडा…';
const V_UPLOADING = 'अपलोड करत आहे…';
const V_SAVE_CONFIG = 'सेटिंग्ज सेव्ह करा';
const V_APPLY = 'लागू करा';
const V_EDIT = 'संपादित करा';
const V_SIGNUP = 'साइन अप';
const V_LOGIN = 'लॉग इन';
const V_CONTINUE = 'सुरू ठेवा';
const V_REMOVE_ISSUE = 'समस्या हटवा';
const V_CLOSE = 'बंद करा';
const V_REOPEN = 'पुन्हा उघडा';
const V_EXPORT = 'कच्चा डेटा निर्यात करा';
#वाक्य
const S_NOLABEL = '–';
const S_NODEPENDENCY = '–';
const S_COMMENT_LEAVE = 'टिप्पणी द्या:';
const S_AGO = '%duration% %pediod% पूर्वी';
const S_ISSUE_ABOUT = 'या समस्येबद्दल:';
const S_UPLOAD_ADD = 'फाइल जोडा:';
const S_WELCOME = 'स्वागत आहे, %user%';
const S_NEVER = 'कधीही नाही';
const S_ME = 'मी ज्या मुद्द्यांमध्ये योगदान दिले आहे त्यांची अद्यतने';
const S_ALWAYS = 'प्रत्येक अपडेटबद्दल';
const S_START_NOTIF = 'नवीन अपडेट्सबद्दल माहिती ठेवा';
const S_STOP_NOTIF = 'यापुढे अपडेट्सबद्दल सूचित केले जाणार नाही';
const S_NOTFOUND = 'तुम्ही शोधत असलेले पान यापुढे अस्तित्वात नाही...';
const S_FORBIDDEN = 'तुम्हाला या पानावर प्रवेश करण्याची परवानगी नाही. कृपया सुरू ठेवण्यासाठी लॉग इन/आउट करा.';
const S_VIEW_PARTICIPATION = 'त्यांचा सहभाग पहा.';
const S_VIEW_STATUS = 'समस्या पहा “%status%”.';
const S_ISSUE_CREATED = '%वापरकर्ता% %time%';
const S_ISSUE_UPDATED = '%adj% by %user% %time%.';
const S_ISSUE_STATUS_UPDATED = '%status% मध्ये %time% वाजता %user% ने स्थिती अपडेट केली.';
const S_RSS_ISSUE_UPDATED = 'स्थिती %user% ने "%status%" वर अपडेट केली.';
const S_INTRO_INSTALL = 'तुम्ही PHPMyBugs चालवण्याची ही पहिलीच वेळ आहे असे दिसते! कृपया हे कॉन्फिगर करा:';
const S_FIRST_ISSUE_TITLE = 'कसा आहेस, भोपळा?';
const S_FIRST_ISSUE = 'मी तुमचा पहिला अंक आहे! लॉग इन केल्यानंतर, तुम्ही मला हटवू शकाल.';
const S_NO_USER = 'कोणताही वापरकर्ता तुमच्या विनंतीशी जुळत नाही.';
const S_NO_ISSUE = 'तुमच्या विनंतीशी जुळणारी कोणतीही समस्या नाही.';
const S_MATCHING_ISSUES = '%nb% जुळणारे मुद्दे';
const S_NO_ACTIVITY = 'अलीकडील कोणतीही गतिविधी नाही.';
const S_NO_UPLOAD = 'अपलोड नाही.';
const S_SIZE_REMAINING = 'अनुमत %एकूण% वर उर्वरित %% शिल्लक.';
const S_NO_PROJECT = 'प्रकल्प नाही.';
const S_SEARCH = '#12, @user, शब्द…';
const S_COPYRIGHT = '%name% द्वारा समर्थित.';
const S_UPGRADE = '<a href="https://github.com/bugtrackr/Nireus/releases/latest">Github</a> to <a href="https://bugtrackr.github.io/wiki/upgrade "/">अपग्रेड होईपर्यंत नवीनतम आवृत्ती मिळवा</a>.';
const S_LAST_UPDATES = 'अंतिम अपडेट…';
const S_STAY_LOGGEDIN = 'मला लॉग इन करून ठेवा';
const S_DEFAULT_DEFPROJ_DESC = 'हा डीफॉल्ट प्रकल्प आहे जिथे प्रत्येकाला प्रवेश आहे.';
const S_DEFAULT_2NDPROJ_DESC = 'हा तुमचा दुसरा प्रकल्प असू शकतो जिथे फक्त नोंदणीकृत वापरकर्त्यांना समस्या पोस्ट करण्याची परवानगी आहे.';

#अलर्ट

const A_ERROR_DIRECTORY = '<strong>त्रुटी:</strong> निर्देशिका “%name%” तयार करण्यात अक्षम.';
const A_ERROR_FILE = '<strong>त्रुटी:</strong> फाइल वाचण्यात अक्षम “%name%”.';
const A_ERROR_FILE_WRITE = '<strong>त्रुटी:</strong> फाइल “%name%” लिहिण्यास अक्षम.';
const A_ERROR_FATAL = 'क्षमस्व, काहीतरी चूक झाली. ही समस्या कायम राहिल्यास, कृपया प्रशासकाशी संपर्क साधा.';
const A_ERROR = '<strong>%title%:</strong><br /><br />%message%<br /><br />फाइल “<strong>%file%</strong>” ओळ <strong> >%लाइन% वर.';
const A_SUCCESS_INSTALL = '<strong>पूर्ण:</strong> PHPMyBugs आता पूर्णपणे कॉन्फिगर केले आहे.';
const A_ERROR_INSTALL = '<strong>त्रुटी:</strong> PHPMyBugs आधीच कॉन्फिगर केलेले आहे. जर तुम्हाला कॉन्फिगरेशन रिसेट करायचे असेल तर कृपया कॉन्फिगरेशन फाइल हटवा.';
const A_MODIF_SAVED = 'फेरफार जतन केले गेले.';
const A_ERROR_FORM = 'एक त्रुटी आली आहे. कृपया फॉर्म पुन्हा पाठवा.';
const A_ERROR_TOKEN = 'चुकीचे टोकन. कृपया फॉर्म पुन्हा पाठवा.';
const A_ERROR_EMPTY = 'तुम्ही वापरकर्तानाव आणि पासवर्ड नमूद करणे आवश्यक आहे.';
const A_ERROR_SAME_USERNAME = 'हे वापरकर्तानाव उपलब्ध नाही.';
const A_SUCCESS_SIGNUP = '<strong>पूर्ण:</strong>तुम्ही आता लॉग इन करू शकता.';
const A_CONFIRM_DELETE_COMMENT = 'तुम्हाला नक्की ही टिप्पणी हटवायची आहे का?';
const A_SUCCESS_DELETE_COMMENT = 'टिप्पणी हटवली.';
const A_CONFIRM_DELETE_ISSUE = 'तुम्हाला खात्री आहे की तुम्ही ही समस्या हटवू इच्छिता?';
const A_SUCCESS_DELETE_ISSUE = 'समस्या हटवण्यात आली.';
const A_CONFIRM_DELETE_UPLOAD = 'तुम्हाला नक्की ही फाइल हटवायची आहे का?';
const A_CONFIRM_DELETE_PROJECT = 'तुम्हाला हा प्रकल्प नक्की हटवायचा आहे का? संबंधित सर्व मुद्दे नष्ट होतील.';
const A_LOGGED = 'तुम्ही आता सिस्टममध्ये लॉग इन झाला आहात.';
const A_LOGGED_OUT = 'तुम्ही आता सिस्टममधून लॉग आउट झाला आहात.';
const A_ERROR_CONNEXION = '<strong>त्रुटी:</strong> चुकीचे वापरकर्तानाव किंवा पासवर्ड.';
const A_ERROR_CONNEXION_WAIT = '<strong>त्रुटी:</strong> चुकीचे वापरकर्तानाव किंवा पासवर्ड. कृपया पुन्हा प्रयत्न करण्यापूर्वी %duration% %period% प्रतीक्षा करा.';
const A_ERROR_LOGIN_WAIT = 'पुन्हा प्रयत्न करण्यापूर्वी कृपया %duration% %period% प्रतीक्षा करा. हे दुर्भावनापूर्ण हल्ल्यांपासून संरक्षण आहे.';
const A_ERROR_UPLOAD = 'एक त्रुटी आली आहे. कृपया पुन्हा प्रयत्न करा.';
const A_ERROR_UPLOAD_SIZE = 'फाइलने कमाल अनुमत आकार (%nb% कमाल) ओलांडला आहे.';
const A_ERROR_UPLOAD_FULL = 'ही फाइल अपलोड करण्यासाठी तुमच्याकडे पुरेशी डिस्क जागा नाही: %nb% बाकी.';
const A_PLEASE_LOGIN_ISSUES = 'समस्या पाहण्यासाठी कृपया लॉग इन करा.';
const A_PLEASE_LOGIN_COMMENT = 'टिप्पणी पोस्ट करण्यासाठी कृपया लॉग इन करा. अजून खाते नाही? एक तयार करा: ते विनामूल्य आणि खरोखर जलद आहे!';
const A_PLEASE_LOGIN_ISSUE = 'एक मुद्दा सबमिट करण्यासाठी कृपया लॉग इन करा. अजून खाते नाही? एक तयार करा: ते विनामूल्य आणि खरोखर जलद आहे!';
const A_SHOULD_LOGIN = 'तुमचे खाते असल्यास, कृपया लॉग इन करा. नसल्यास, खाते तयार करण्याचा विचार करा: ते विनामूल्य आणि अतिशय जलद आहे!';

const A_IE = 'तुमचा ब्राउझर कालबाह्य झाला आहे: <a href="https://www.browser-update.org/en/update.html">त्याला अपग्रेड करा किंवा बदला</a>.';

#सामना

const M_NEW_COMMENT_O = '[%title% — %project% — अंक #%id%] नवीन टिप्पणी';
const M_NEW_COMMENT = 'नमस्कार, %वापरकर्तानाव%!

अंक #%id% — “%summary%” वर आत्ताच %by% ने टिप्पणी केली होती. आपण येथे नवीन टिप्पणी वाचू शकता:
%url%.

जर तुम्हाला या समस्येवर आणखी कोणतीही माहिती मिळवायची नसेल तर, वरील लिंकद्वारे (लॉग इन केल्यानंतर) एक पर्याय उपलब्ध आहे.

,
हा एक स्वयंचलित ईमेल आहे, कृपया उत्तर देऊ नका.
';

const M_NEW_ISSUE_O = '[%title% — %project%] नवीन समस्या';
const M_NEW_ISSUE = 'हॅलो, %वापरकर्तानाव%!

अंक #%id% — “%summary%” नुकताच %by% ने सबमिट केला. आपण ते येथे वाचू शकता:
%url%.

जर तुम्हाला या समस्येवर पुढील सूचना प्राप्त करायच्या नसतील, तर वरील लिंकद्वारे (लॉग इन केल्यानंतर) एक पर्याय उपलब्ध आहे.

,
हा एक स्वयंचलित ईमेल आहे, कृपया उत्तर देऊ नका.
';

#विषय

const T_INSTALLATION = 'इन्स्टॉलेशन';
const T_SETTINGS = 'सेटिंग्ज';
const T_GLOBAL_SETTINGS = 'जागतिक सेटिंग्ज';
const T_APPEARANCE = 'दिसणे';
const T_ISSUES = 'समस्या';
const T_GROUPS = 'समूह';
const T_USERS = 'वापरकर्ता';
const T_PERMISSIONS = 'परवानग्या';
const T_ENABLE_CAPTCHA = 'कॅप्चा व्यवस्थापित करा';
const T_CAPTCHA = 'कॅप्चा';
const T_BROWSE_ISSUES = 'समस्या ब्राउझ करा';
const T_BROWSE_ALL_ISSUES = 'सर्व समस्या ब्राउझ करा';
const T_ALL_ISSUES_DESCRIPTION = 'या सर्व प्रकल्पांना खुल्या समस्या आहेत';
const T_NEW_ISSUE = 'नवीन समस्या';
const T_ALL_ISSUES = 'सर्व समस्या';
const T_PROJECTS = 'प्रकल्प';
const T_DASHBOARD = 'डॅशबोर्ड';
const T_LAST_UPDATES = 'अंतिम अपडेट';
const T_LAST_ACTIVITY = 'अंतिम क्रियाकलाप';
const T_UPLOADS = 'अपलोड्स';
const T_SEARCH = 'शोध';
const T_LINK_CONTACT = 'आमच्याशी संपर्क साधा';
const T_LINK_LEGALNOTICE = 'कायदेशीर सूचना';
const T_LINK_PRIVACYPOLICY = 'गोपनीयता धोरण';
const T_API_SETTINGS = 'API';
const T_API_ENABLE_SETTINGS = 'एपीआय व्यवस्थापित करा';
const T_API_ACCESS_SETTINGS = 'API प्रवेश';
const T_INFO = 'माहिती';
# फॉर्म
const F_USERNAME = 'वापरकर्तानाव:';
const F_PASSWORD = 'पासवर्ड:';
const F_USERNAME2 = 'वापरकर्तानाव';
const F_PASSWORD2 = 'पासवर्ड';
const F_NAME = 'नाव:';
const F_URL = 'URL:';
const F_URL_CDN = 'CDN url:';
const F_URL_REWRITING = 'URL पुनर्लेखन:';
const F_INTRO = 'परिचय:';
const F_DESCRIPTION = 'वर्णन:';
const F_EMAIL = 'ईमेल:';
const F_LINK_CONTACT = 'बाह्य संपर्क पानाचा दुवा (रिकामा सोडला जाऊ शकतो):';
const F_LINK_LEGALNOTICE = 'कायदेशीर सूचनेचा दुवा (रिकामा सोडला जाऊ शकतो):';
const F_LINK_PRIVACYPOLICY = 'गोपनीयता धोरण दुवा (रिकामा सोडला जाऊ शकतो):';
const F_MAX_UPLOAD = 'प्रति अपलोड कमाल आकार:';
const F_ALLOCATED_SPACE = 'प्रति वापरकर्ता जागा वाटप:';
const F_GROUP = 'समूह:';
const F_NOTIFICATIONS = 'सूचना द्या:';
const F_PROJECT_X = 'प्रोजेक्ट “%name%”:';
const F_LANGUAGE = 'भाषा:';
const F_LOGS = 'लॉग:';
const F_ISSUES_PAGE = 'प्रति पान समस्या:';
const F_ISSUES_PAGE_SEARCH = 'प्रति पान समस्या (शोध):';
const F_PREVIEW_ISSUE = 'पूर्वावलोकन लांबी (समस्या):';
const F_PREVIEW_SEARCH = 'पूर्वावलोकन लांबी (शोध):';
const F_PREVIEW_PROJECT = 'पूर्वावलोकन लांबी (प्रकल्प):';
const F_LAST_EDITS = 'डॅशबोर्डवर प्रदर्शित झालेल्या समस्यांची संख्या:';
const F_LAST_ACTIVITY = 'वापरकर्ता पृष्ठांवर प्रदर्शित झालेल्या समस्यांची संख्या:';
const F_THEME = "थीम";
const F_TIP_THEME = ".css फाइल मध्ये ठेवा";
const F_ADD_PROJECT = 'नवीन प्रकल्प';
const F_ADD_COLOR = 'नवीन रंग';
const F_ADD_STATUS = 'नवीन स्थिती';
const F_ADD_LABEL = 'नवीन लेबल';
const F_ADD_GROUP = 'नवीन गट';
const F_ADD_USER = 'नवीन वापरकर्ता';
const F_SORT_BY = 'यानुसार क्रमवारी लावा:';
const F_SORT_ID = 'आयडी';
const F_SORT_MOD = 'अंतिम अद्यतनित';
const F_SORT_DESC = 'उतरते';
const F_SORT_ASC = 'चढते';
const F_FILTER_STATUSES = 'स्थिती फिल्टर करा:';
const F_FILTER_STATES = 'फिल्टर स्टेट्स:';
const F_FILTER_LABELS = 'फिल्टर लेबल्स:';
const F_FILTER_USERS = 'वापरकर्ते फिल्टर करा:';
const F_FILTER_MILESTONE = 'फिल्टर माइलस्टोन:';

const F_WRITE = 'लिहा:';
const F_SUMMARY = 'सारांश';
const F_CONTENT = 'सामग्री';
const F_STATUS = 'स्थिती:';
const F_RELATED = 'संबंधित:';
const F_LABELS2 = 'लेबल्स:';
const F_MILESTONE = 'माइलस्टोन:';
const F_GENERAL_SETTINGS = 'सामान्य सेटिंग्ज:';
const F_PROJECTS = 'प्रकल्प:';
const F_DATABASE = 'डेटाबेस:';
const F_UPLOADS = 'अपलोड्स:';
const F_COLORS = 'रंग व्यवस्थापित करा:';
const F_DISPLAY = 'डिस्प्ले व्यवस्थापित करा:';
const F_STATUSES = 'स्थिती व्यवस्थापित करा:';
const F_LABELS = 'लेबल्स व्यवस्थापित करा:';
const F_GROUPS = 'समूह व्यवस्थापित करा:';
const F_PERMISSIONS = 'परवानग्या व्यवस्थापित करा:';
const F_USERS = 'वापरकर्ते व्यवस्थापित करा:';
const F_INVALID_CAPTCHA = 'तुम्ही प्रविष्ट केलेला कॅप्चा अवैध होता. कृपया पुन्हा प्रयत्न करा.';
const F_TIP_NAME = 'हे प्रत्येक पानाच्या शीर्षलेखावर प्रदर्शित केले जाईल.';
const F_TIP_URL_REWRITING = 'URL पुनर्लेखन अक्षम करण्यासाठी हे फील्ड रिक्त सोडा. अन्यथा, त्यात डोमेन नावाशी संबंधित phpmyBugs फोल्डरचा मार्ग ("/" ने सुरू होणारा आणि समाप्त होणारा) असावा.';
const F_TIP_URL_CDN = 'CDN अक्षम करण्यासाठी हे क्षेत्र रिकामे सोडा. अन्यथा, त्यात तुमच्या CDN ची URL असावी (उदाहरणार्थ <em>https://cdn.rawgit.com/bugtrackr/Nireus/master/</em>, मोकळ्या मनाने हे वापरा). तुमच्या CDN वरील <em>/public</em> फोल्डरमधून सर्व फाइल्स होस्ट केल्याचे सुनिश्चित करा.';
const F_TIP_INTRO = 'हे मुख्यपृष्ठावर प्रदर्शित केले जाईल. हे मार्कडाउन सिंटॅक्ससह पार्स केले जाईल. टीप: "%name%" नावाचा एकच प्रकल्प असल्यास, मुख्यपृष्ठ आपोआप प्रोजेक्ट डॅशबोर्डवर पुनर्निर्देशित केले जाईल, आणि हा मजकूर प्रदर्शित केला जाणार नाही.';
const F_TIP_EMAIL = 'ईमेल सूचना अक्षम करण्यासाठी हे क्षेत्र रिकामे सोडा. अन्यथा, हा पत्ता ईमेल सूचना पाठवताना पासून म्हणून वापरला जाईल.';
const F_TIP_PASSWORD = 'तुम्हाला पासवर्ड बदलायचा नसेल तर हे रिकामे सोडा.';
const F_TIP_USER_EMAIL = 'तुम्हाला सूचना प्राप्त करायच्या असतील तरच आवश्यक.';
const F_TIP_NOTIFICATIONS = 'ही डीफॉल्ट सेटिंग आहे: तुम्ही प्रत्येक समस्येसाठी ते बदलू शकाल.';
const F_TIP_NOTIFICATIONS_DISABLED = 'टीप: सूचना सध्या प्रशासकाद्वारे अक्षम केल्या आहेत.';
const F_TIP_DESCRIPTION = 'हा प्रकल्प डॅशबोर्डवर प्रदर्शित केला जाईल. हे मार्कडाउन सिंटॅक्ससह पार्स केले जाईल.';
const F_TIP_MAX_UPLOAD = 'प्रत्येक अपलोड केलेली फाइल हा आकार ओलांडू शकत नाही.';
const F_TIP_ALLOCATED_SPACE = 'या मर्यादेपर्यंत वापरकर्ता अधिक फायली अपलोड करू शकत नाही.<br /><em>टीप:</em> जर लॉग इन केलेल्या वापरकर्त्याला फाइल अपलोड करण्याची परवानगी नसेल (ही डीफॉल्ट सेटिंग आहे), तर ही मर्यादा त्यांना लागू नाही.';
const F_TIP_ID_STATUS = '<b>टीप:</b> आयडी बदलताना सावधगिरी बाळगा, कारण प्रत्येक समस्या त्याचा जुना स्टेटस आयडी ठेवते (हा आयडी यापुढे अस्तित्वात नसल्यास: या प्रकरणात, डीफॉल्ट स्थिती वापरली जाईल).' ;
const F_TIP_ID_LABEL = '<b>टीप:</b> आयडी बदलताना सावधगिरी बाळगा, कारण एखाद्या समस्येचे प्रत्येक लेबल त्याचा जुना आयडी ठेवते (हा आयडी यापुढे अस्तित्वात नसल्यास: या प्रकरणात, लेबलशी लिंक केली जाईल समस्या काढून टाकली आहे).';
const F_TIP_ID_GROUP = '<b>टीप:</b> आयडी बदलताना सावधगिरी बाळगा, कारण प्रत्येक वापरकर्ता त्यांचा जुना गट आयडी ठेवतो (हा आयडी यापुढे अस्तित्वात नसल्यास: या प्रकरणात, डीफॉल्ट गट वापरला जाईल).';
const F_TIP_CAPTCHA = 'लॉग इन नसलेल्या वापरकर्त्यांसाठी कॅप्चा दाखवल्या जातील अशा क्रिया निवडा.';
const F_TIP_API_ACCESS = '<em>/database/config_api.php</em> फाइलमध्ये API प्रवेश कॉन्फिगर करा. अधिक माहितीसाठी api.md फाइल पहा.';

const F_API_ENABLE = 'एपीआय सक्षम करा';

const HELP_MARKDOWN = '
<h2>मार्कडाउन सिंटॅक्स:</h2>

<p>परिच्छेद:</p>
<pre><code class="blank no-highlight">परिच्छेद एक किंवा अधिक रिक्त ओळींनी विभक्त केले आहेत.
त्यामुळे हा मजकूर ओळीच्या खंडाकडे दुर्लक्ष करून, मागील वाक्यांशाप्रमाणेच दिसेल.

नवीन परिच्छेद तयार न करता नवीन ओळ सुरू करण्यासाठी:
लाईन ब्रेकच्या आधी 2 स्पेस घाला, जसे इथे.</code></pre>

<p>जोर:</p>
<pre><code class="blank no-highlight">*इटालिक मजकूर*
_इटॅलिक मजकूर पुन्हा_

**ठळक मजकूर**
__पुन्हा ठळक मजकूर__ </code></pre>

<p>लिंक:</p>
<pre><code class="blank no-highlight">हे एका इनलाइन लिंकचे [उदाहरण](http://example.com) आहे.
हे आणखी एक आहे: &lt;http://example.com&gt;.</code></pre>

<p>इमेज:</p>
<pre><code class="blank no-highlight">![मी एक प्रतिमा आहे.](http://example.com/image.png)</code></pre>

<p>शीर्षक:</p>
<pre><code class="blank no-highlight"># शीर्ष स्तरीय शीर्षक
##द्वितीय स्तरावरील शीर्षक
### तिसऱ्या स्तरावरील शीर्षक
#### चौथ्या स्तराचे शीर्षक</code></pre>

<p>याद्या:</p>
<pre><code class="blank no-highlight">- एक आयटम
*दुसरा

1. प्रथम आयटम
2. दुसरा आयटम</code></pre>

<p>ब्लॉककोट:</p>
<pre><code class="blank no-highlight">> मी दोन परिच्छेदांसह ब्लॉककोट आहे.
,
>मी दुसरा परिच्छेद आहे.</code></pre>

<p>कोड ब्लॉक:</p>
<pre><code class="blank no-highlight">हा `इनलाइन कोड ब्लॉक` आहे.</code></pre>
<pre><code class="blank no-highlight"> &lt;?php echo "मी एक कोड ब्लॉक आहे, कारण मी 4 स्पेससह इंडेंट केलेले आहे"; ?&gt;</code></pre>
<pre><code class="blank no-highlight">``
&lt;?php प्रतिध्वनी "मी एक कोड ब्लॉक आहे."; ?&gt;
,

``php
&lt;?php echo "समर्थित भाषा आहेत: bash, cs, ruby, diff, javascript, css, xml, http, java, php, python, sql, ini, perl, json, cpp, markdown, no-highlight" ; ?&gt;
```</code></pre>
';

private static $permissions = array(
'home' => array(
'title' => 'घर:',
'description' => 'मुख्यपृष्ठावर प्रवेश करू शकतो आणि तुमच्या प्रकल्पांसाठी सर्व खुल्या समस्यांची सूची पाहू शकतो.'
),
'dashboard' => array(
'title' => 'डॅशबोर्ड:',
'description' => 'प्रकल्प डॅशबोर्डवर प्रवेश करू शकतो.'
),
'issues' => array(
'title' => 'समस्या पहा:',
'description' => 'सार्वजनिक समस्या पाहू शकतो.'
),
'private_issues' => array(
'title' => 'वैयक्तिक समस्या पहा:',
'description' => 'खाजगी म्हणून टॅग केलेल्या समस्या पाहू शकता.'
),
'search' => array(
'title' => 'शोध:',
'description' => 'समस्या किंवा वापरकर्ते शोधू शकतात.'
),
'new_issue' => array(
'title' => 'नवीन अंक:',
'description' => 'नवीन अंक सादर करू शकता.'
),
'edit_issue' => array(
'title' => 'समस्या संपादित करा:',
'description' => 'सर्व समस्यांचा मजकूर संपादित करून तो हटवू शकतो.'
),
'update_issue' => array(
'title' => 'अद्ययावत समस्या:',
'description' => 'समस्या अपडेट करू शकतात: स्थिती बदला, लेबले जोडा, बंद करा आणि पुन्हा उघडा, ...'
),
'post_comment' => array(
'title' => 'टिप्पणी पोस्ट करा:',
'description' => 'टिप्पण्या पोस्ट करू शकता.'
),
'edit_comment' => array(
'title' => 'टिप्पण्या संपादित करा:',
'description' => 'सर्व टिप्पण्या संपादित केल्या जाऊ शकतात (वापरकर्ते त्यांच्या स्वतःच्या टिप्पण्या संपादित करू शकतात).'
),
'view_user' => array(
'title' => 'वापरकर्ता प्रोफाइल:',
'description' => 'सर्व वापरकर्ते प्रोफाइल पाहू शकतात.'
),
'upload' => array(
'title' => 'फाइल पोस्ट करा:',
'description' => 'टिप्पणी किंवा नवीन मुद्द्याला फाइल्स संलग्न करू शकता.'
),
'view_upload' => array(
'title' => 'अपलोड पहा:',
'description' => 'सर्व अपलोड केलेल्या फाइल्समध्ये प्रवेश करू शकतो.'
),
'settings' => array(
'title' => 'सेटिंग्ज बदला:',
'description' => 'या पानावर प्रवेश करू शकतो आणि सर्व जागतिक सेटिंग्ज बदलू शकतो.'
),
'signup' => array(
'title' => 'साइन अप करा:',
'description' => 'साइन अप करू शकता.'
),
'view_errors' => array(
'title' => 'घातक चुका पहा:',
'description' => 'घातक त्रुटींचे वर्णन पाहू शकतो.'
)
);

public static function permissions($id, $type = 'वर्णन') {
return self::$permissions[$id][$type];
}

private static $settings = array(

'validate_url' => 'URL वैध नाही.',
'validate_email' => 'ईमेल वैध नाही.',
'private_label_removed' => 'तुम्ही खाजगी लेबल काढू शकत नाही किंवा त्याचा आयडी बदलू शकत नाही, परंतु तुम्ही त्याचे नाव बदलू शकता.',
'default_status_removed' => 'तुम्ही डीफॉल्ट स्थिती काढू शकत नाही किंवा त्याचा आयडी बदलू शकत नाही, परंतु तुम्ही त्याचे नाव बदलू शकता.',
'default_group_removed' => 'तुम्ही डीफॉल्ट गट काढू शकत नाही किंवा त्याचा आयडी बदलू शकत नाही, परंतु तुम्ही त्याचे नाव बदलू शकता.',
'default_group_superuser_removed' => 'तुम्ही सुपरयुजर ग्रुप काढू शकत नाही किंवा त्याचा आयडी बदलू शकत नाही, पण तुम्ही त्याचे नाव बदलू शकता.',
'validate_same_username' => 'चेतावणी: दोन वापरकर्त्यांना एकच वापरकर्तानाव आहे.',
'validate_same_project_name' => 'दोन प्रकल्पांना एकच नाव असू शकत नाही.. एखाद्याचे नाव आपोआप बदलले गेले आहे.',
'language_modified' => 'नवीन भाषा पाहण्यासाठी हे पान रिफ्रेश करा.'

);

public static function settings($id) {
return self::$settings[$id];

}

private static $errors = array(
E_ERROR => 'घातक त्रुटी',
E_WARNING => 'चेतावणी',
E_PARSE => 'विश्लेषण त्रुटी',
E_NOTICE => 'सूचना',
E_STRICT => 'सल्ला',
E_DEPRECATED => 'deprecated', 'DEFAULT' => 'त्रुटी'
);

public static function errors($no) {
return (isset(self::$errors[$no]))? self::$errors[$no] : self::$errors['default'];
}
}

?>