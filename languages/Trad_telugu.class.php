<?php

class Trad {

		# పదాలు

  const W_ISSUE = 'ఇష్యూ';
  const W_OPEN = 'ఓపెన్';
  const W_OPENED = 'తెరవబడింది';
  const W_CLOSED = 'మూసివేయబడింది';
  const W_REOPENED = 'తిరిగి తెరవబడింది';
  const W_COMMENTED = 'వ్యాఖ్యానించబడింది';
  const W_NOBODY = 'ఎవరూ';
  const W_SOMEONE = 'ఎవరైనా';
  const W_ENABLED = 'ప్రారంభించబడింది';
  const W_DISABLED = 'డిసేబుల్';
  const W_NOTFOUND = 'కనుగొనబడలేదు';
  const W_FORBIDDEN = 'నిషిద్ధం';
  const W_MENU = 'మెనూ';

  const W_EXAMPLE = 'ఉదాహరణ';
  const W_HEX = 'హెక్స్';
  const W_RENDERING = 'రెండరింగ్';
  const W_ID = 'ID';
  const W_DISPLAY_NAME = 'ప్రదర్శన పేరు';

  const W_SECONDE = 'రెండవ';
  const W_MINUTE = 'నిమిషం';
  const W_HOUR = 'గంట';
  const W_DAY = 'రోజు';
  const W_WEEK = 'వారం';
  const W_MONTH = 'నెల';
  const W_YEAR = 'సంవత్సరం';
  const W_DECADE = 'దశాబ్దం';
  const W_SECONDE_P = 'సెకన్లు';
  const W_MINUTE_P = 'నిమిషాలు';
  const W_HOUR_P = 'గంటలు';
  const W_DAY_P = 'రోజులు';
  const W_WEEK_P = 'వారాలు';
  const W_MONTH_P = 'నెలలు';
  const W_YEAR_P = 'సంవత్సరాలు';
  const W_DECADE_P = 'దశాబ్దాలు';

  const W_PREVIOUS = 'మునుపటి';
  const W_NEXT = 'తదుపరి';
  const W_MORE = 'మరిన్ని';
  const W_CURRENT = '%nb2%లో %nb1% పేజీ';

  const W_NOT_LOGGED = 'లాగిన్ చేయబడలేదు';

  const W_SUSPENSION = '...';
  const W_EXTRACT = '"%text%"';

  const W_USER = 'యూజర్';
  const W_DEVELOPPER = 'డెవలపర్';
  const W_SUPERUSER = 'సూపర్యూజర్';
  const W_S_NEW = 'కొత్తది';
  const W_S_CONFIRMED = 'ధృవీకరించబడింది';
  const W_S_ASSIGNED = '%user%కి కేటాయించబడింది';
  const W_S_RESOLVED = 'పరిష్కరించబడింది';
  const W_S_REJECTED = 'తిరస్కరించబడింది';
  const W_L_URGENT = 'అత్యవసరం';
  const W_L_IMPROVEMENT = 'మెరుగుదల';
  const W_L_PRIVATE = 'ప్రైవేట్';

  const W_PROFILEPIC = 'ప్రొఫైల్ పిక్చర్';

  const W_RSS = 'RSS ఫీడ్';
  const W_VERSION = 'వెర్షన్';

  const W_CAPTCHA_IMAGE = 'CAPTCHA చిత్రం';
  const W_CAPTCHA_REFRESH = 'చిత్రాన్ని రిఫ్రెష్ చేయండి';
  const W_CAPTCHA_INPUT = 'టెక్స్ట్ టైప్ చేయండి:';

  # క్రియలు

  const V_UPDATE = 'నవీకరణ';
  const V_UPDATE_DETAILS = 'వివరాలను నవీకరించు';
  const V_UPDATE_CONTENT = 'కంటెంట్‌ను నవీకరించు';
  const V_UPDATE_AND = 'నవీకరణ & % విశేషణం%';
  const V_CANCEL = 'రద్దు';
  const V_PREVIEW = 'ప్రివ్యూ';
  const V_COMMENT = 'వ్యాఖ్య';
  const V_SUBMIT = 'సమర్పించు';
  const V_SELECT_FILE = 'ఫైల్‌ని ఎంచుకోండి...';
  const V_UPLOADING = 'అప్‌లోడ్ చేస్తోంది...';
  const V_SAVE_CONFIG = 'సెట్టింగ్‌లను సేవ్ చేయి';
  const V_APPLY = 'వర్తించు';
  const V_EDIT = 'సవరించు';
  const V_SIGNUP = 'సైన్ అప్';
  const V_LOGIN = 'లాగిన్';
  const V_CONTINUE = 'కొనసాగించు';
  const V_REMOVE_ISSUE = 'సమస్యను తొలగించు';
  const V_CLOSE = 'మూసివేయి';
  const V_REOPEN = 'తిరిగి తెరవండి';
  const V_EXPORT = 'ముడి డేటాను ఎగుమతి చేయండి';

  # వాక్యాలు

  const S_NOLABEL = '–';
  const S_NODEPENDENCY = '–';
  const S_COMMENT_LEAVE = 'వ్యాఖ్యానించండి:';
  const S_AGO = '% వ్యవధి% %pediod% క్రితం';
  const S_ISSUE_ABOUT = 'ఈ సమస్య గురించి:';
  const S_UPLOAD_ADD = 'ఒక ఫైల్‌ను అటాచ్ చేయండి:';
  const S_WELCOME = 'స్వాగతం, %యూజర్%';
  const S_NEVER = 'నెవర్';
  const S_ME = 'నేను సహకరించిన సమస్యలపై నవీకరణలు';
  const S_ALWAYS = 'ప్రతి నవీకరణలలో';
  const S_START_NOTIF = 'కొత్త నవీకరణల గురించి తెలియజేయండి';
  const S_STOP_NOTIF = 'ఇకపై నవీకరణల గురించి తెలియజేయబడదు';
  const S_NOTFOUND = 'మీరు వెతుకుతున్న పేజీ ఇప్పుడు లేదు...';
  const S_FORBIDDEN = 'ఈ పేజీని యాక్సెస్ చేయడానికి మీకు అనుమతి లేదు. దయచేసి కొనసాగడానికి లాగిన్/అవుట్ చేయండి.';

  const S_VIEW_PARTICIPATION = 'అతని భాగస్వామ్యాన్ని వీక్షించండి.';
  const S_VIEW_STATUS = '"%status%" సమస్యలను వీక్షించండి.';

  const S_ISSUE_CREATED = '% యూజర్% % టైమ్% ద్వారా';
  const S_ISSUE_UPDATED = '%adj% by %user% %time%.';
  const S_ISSUE_STATUS_UPDATED = 'స్థితి% వినియోగదారు% %సమయం% ద్వారా %status%కి నవీకరించబడింది.';

  const S_RSS_ISSUE_UPDATED = '%adj% by %user%.';
  const S_RSS_ISSUE_STATUS_UPDATED = '%user% ద్వారా స్థితి "%status%"కి నవీకరించబడింది.';

  const S_INTRO_INSTALL = 'ఇది మీరు మొదటిసారిగా phpmyBugsని అమలు చేస్తున్నట్లు కనిపిస్తోంది! దయచేసి దీన్ని కాన్ఫిగర్ చేయండి:';
  const S_FIRST_ISSUE_TITLE = 'మీరు ఎలా ఉన్నారు, గుమ్మడికాయ?';
  const S_FIRST_ISSUE = 'నేను మీ మొదటి సంచిక! లాగింగ్ చేసిన తర్వాత, మీరు నన్ను తొలగించగలరు.';

  const S_NO_USER = 'మీ అభ్యర్థనకు ఏ వినియోగదారు సరిపోలలేదు.';
  const S_NO_ISSUE = 'మీ అభ్యర్థనకు ఏ సమస్య సరిపోలలేదు.';
  const S_MATCHING_ISSUES = '%nb% సరిపోలే సమస్యలు';
  const S_NO_ACTIVITY = 'ఇటీవలి కార్యాచరణ లేదు.';
  const S_NO_UPLOAD = 'అప్‌లోడ్ లేదు.';
  const S_SIZE_REMAINING = 'అనుమతించిన %మొత్తం%లో% మిగిలి ఉంది.';
  const S_NO_PROJECT = 'ప్రాజెక్ట్ లేదు.';

  const S_SEARCH = '#12, @user, పదాలు...';
  const S_COPYRIGHT = '%name% ద్వారా ఆధారితం.';
  const S_UPGRADE = '<a href="https://github.com/bugtrackr/Nireus/releases/latest">GitHub</a> నుండి <a href="https://bugtrackr.github.ioకి తాజా సంస్కరణను పొందండి /wiki/upgrade/">అప్‌గ్రేడ్</a>.';

  const S_LAST_UPDATES = 'చివరి నవీకరణలు...';

  const S_STAY_LOGGEDIN = 'నన్ను లాగిన్ చేసి ఉంచు';

  const S_DEFAULT_DEFPROJ_DESC = 'ఇది ప్రతిఒక్కరూ యాక్సెస్ చేయగల డిఫాల్ట్ ప్రాజెక్ట్.';
  const S_DEFAULT_2NDPROJ_DESC = 'ఇది మీ 2వ ప్రాజెక్ట్ ప్రాజెక్ట్ కావచ్చు, ఇక్కడ నమోదిత వినియోగదారులు మాత్రమే సమస్యలను పోస్ట్ చేయడానికి అనుమతించబడతారు.';

  # హెచ్చరికలు

  const A_ERROR_DIRECTORY = '<strong>లోపం:</strong> “%name%” డైరెక్టరీని సృష్టించలేకపోయింది.';
  const A_ERROR_FILE = '<strong>లోపం:</strong> ఫైల్ “%name%” చదవలేకపోయింది.';
  const A_ERROR_FILE_WRITE = '<వrong>లోపం:</strong> “%name%” ఫైల్‌ని వ్రాయలేకపోయింది.';
  const A_ERROR_FATAL = 'క్షమించండి, ఏదో తప్పు జరిగింది. ఈ సమస్య కొనసాగితే దయచేసి నిర్వాహకుడిని సంప్రదించండి.';
  const A_ERROR = '<strong>%title%:</strong><br /><br />%message%<br /><br />ఫైల్ “<strong>%file%</strong>” లైన్ < strong>%line%</strong>.';

  const A_SUCCESS_INSTALL = '<strong>పూర్తయింది:</strong> phpmyBugs ఇప్పుడు పూర్తిగా కాన్ఫిగర్ చేయబడింది.';
  const A_ERROR_INSTALL = '<strong>లోపం:</strong> phpmyBugs ఇప్పటికే కాన్ఫిగర్ చేయబడింది. మీరు కాన్ఫిగరేషన్‌ని రీసెట్ చేయాలనుకుంటే దయచేసి కాన్ఫిగరేషన్ ఫైల్‌ను తీసివేయండి.';
  const A_MODIF_SAVED = 'సవరణలు సేవ్ చేయబడ్డాయి.';

  const A_ERROR_FORM = 'ఒక లోపం సంభవించింది. దయచేసి ఫారమ్‌ను మళ్లీ పంపండి.';
  const A_ERROR_TOKEN = 'తప్పు టోకెన్. దయచేసి ఫారమ్‌ను మళ్లీ పంపండి.';
  const A_ERROR_EMPTY = 'మీరు వినియోగదారు పేరు మరియు పాస్‌వర్డ్‌ను పేర్కొనాలి.';
  const A_ERROR_SAME_USERNAME = 'ఈ వినియోగదారు పేరు అందుబాటులో లేదు.';
  const A_SUCCESS_SIGNUP = '<strong>పూర్తయింది:</strong> మీరు ఇప్పుడు లాగిన్ చేయవచ్చు.';

  const A_CONFIRM_DELETE_COMMENT = 'మీరు ఖచ్చితంగా ఈ వ్యాఖ్యను తొలగించాలనుకుంటున్నారా?';
  const A_SUCCESS_DELETE_COMMENT = 'వ్యాఖ్య తొలగించబడింది.';
  const A_CONFIRM_DELETE_ISSUE = 'మీరు ఖచ్చితంగా ఈ సమస్యను తొలగించాలనుకుంటున్నారా?';
  const A_SUCCESS_DELETE_ISSUE = 'సమస్య తొలగించబడింది.';
  const A_CONFIRM_DELETE_UPLOAD = 'మీరు ఖచ్చితంగా ఈ ఫైల్‌ను తొలగించాలనుకుంటున్నారా?';
  const A_CONFIRM_DELETE_PROJECT = 'మీరు ఖచ్చితంగా ఈ ప్రాజెక్ట్‌ను తొలగించాలనుకుంటున్నారా? సంబంధిత సమస్యలన్నీ పోతాయి.';

  const A_LOGGED = 'మీరు ఇప్పుడు సిస్టమ్‌లోకి లాగిన్ అయ్యారు.';
  const A_LOGGED_OUT = 'మీరు ఇప్పుడు సిస్టమ్ నుండి లాగ్ అవుట్ అయ్యారు.';
  const A_ERROR_CONNEXION = '<strong>లోపం:</strong> వినియోగదారు పేరు లేదా పాస్‌వర్డ్ తప్పు.';
  const A_ERROR_CONNEXION_WAIT = '<strong>లోపం:</strong> వినియోగదారు పేరు లేదా పాస్‌వర్డ్ తప్పు. దయచేసి మళ్లీ ప్రయత్నించే ముందు %duration% %period% వేచి ఉండండి.';
  const A_ERROR_LOGIN_WAIT = 'దయచేసి మళ్లీ ప్రయత్నించే ముందు % వ్యవధి% %పీరియడ్% వేచి ఉండండి. ఇది హానికరమైన దాడుల నుండి రక్షణ.';

  const A_ERROR_UPLOAD = 'ఒక లోపం సంభవించింది. దయచేసి మళ్లీ ప్రయత్నించండి.';
  const A_ERROR_UPLOAD_SIZE = 'ఫైల్ అనుమతించబడిన గరిష్ట పరిమాణాన్ని మించిపోయింది (%nb% గరిష్టంగా).';
  const A_ERROR_UPLOAD_FULL = 'ఈ ఫైల్‌ను అప్‌లోడ్ చేయడానికి మీకు తగినంత డిస్క్ స్థలం లేదు : %nb% మిగిలి ఉంది.';

  const A_PLEASE_LOGIN_ISSUES = 'సమస్యలను చూడటానికి దయచేసి లాగిన్ అవ్వండి.';
  const A_PLEASE_LOGIN_COMMENT = 'వ్యాఖ్యను పోస్ట్ చేయడానికి దయచేసి లాగిన్ అవ్వండి. ఇంకా ఖాతా లేదా? ఒకదాన్ని సృష్టించండి: ఇది ఉచితం మరియు చాలా వేగంగా ఉంటుంది!';
  const A_PLEASE_LOGIN_ISSUE = 'సమస్యను సమర్పించడానికి దయచేసి లాగిన్ అవ్వండి. ఇంకా ఖాతా లేదా? ఒకదాన్ని సృష్టించండి: ఇది ఉచితం మరియు చాలా వేగంగా ఉంటుంది!';
  const A_SHOULD_LOGIN = 'మీకు ఖాతా ఉంటే, దయచేసి లాగిన్ అవ్వండి. లేకపోతే, ఒకదాన్ని సృష్టించడాన్ని పరిగణించండి: ఇది ఉచితం మరియు చాలా వేగంగా ఉంటుంది!';

  const A_IE = 'మీ బ్రౌజర్ వాడుకలో లేదు: <a href="https://www.browser-update.org/en/update.html">అప్‌గ్రేడ్ చేయండి లేదా మార్చండి</a>.';

  # మెయిల్స్

  const M_NEW_COMMENT_O = '[%title% — %project% — సమస్య #%id%] కొత్త వ్యాఖ్య';
  const M_NEW_COMMENT = 'హాయ్, %యూజర్ పేరు%!

సమస్య #%id% — “%సారాంశం%” ఇప్పుడే %by% ద్వారా వ్యాఖ్యానించబడింది. మీరు కొత్త వ్యాఖ్యను ఇక్కడ చదవవచ్చు:
  %url%.

మీరు ఈ సమస్యపై తదుపరి నోటిఫికేషన్‌లను స్వీకరించకూడదనుకుంటే, ఎగువ లింక్ ద్వారా ఒక ఎంపిక (లాగింగ్ తర్వాత) అందుబాటులో ఉంటుంది.

-----
ఇది స్వయంచాలక ఇమెయిల్, దయచేసి ప్రత్యుత్తరం ఇవ్వవద్దు.
  ';

  const M_NEW_ISSUE_O = '[%title% — %project%] కొత్త సమస్య';
  const M_NEW_ISSUE = 'హాయ్, %యూజర్ పేరు%!

సమస్య #%id% — “%సారాంశం%” ఇప్పుడే %by% ద్వారా సమర్పించబడింది. మీరు దీన్ని ఇక్కడ చదవవచ్చు:
  %url%.

మీరు ఈ సమస్యపై తదుపరి నోటిఫికేషన్‌లను స్వీకరించకూడదనుకుంటే, ఎగువ లింక్ ద్వారా ఒక ఎంపిక (లాగింగ్ తర్వాత) అందుబాటులో ఉంటుంది.

-----
ఇది స్వయంచాలక ఇమెయిల్, దయచేసి ప్రత్యుత్తరం ఇవ్వవద్దు.
  ';

  # శీర్షికలు

 const T_INSTALLATION = 'ఇన్‌స్టాలేషన్';
  const T_SETTINGS = 'సెట్టింగ్‌లు';
  const T_GLOBAL_SETTINGS = 'గ్లోబల్ సెట్టింగ్‌లు';
  const T_APPEARANCE = 'ప్రదర్శన';
  const T_ISSUES = 'సమస్యలు';
  const T_GROUPS = 'గ్రూప్స్';
  const T_USERS = 'వినియోగదారులు';
  const T_PERMISSIONS = 'అనుమతులు';
  const T_ENABLE_CAPTCHA = 'క్యాప్చా నిర్వహించండి';
  const T_CAPTCHA = 'Captcha';
  const T_BROWSE_ISSUES = 'సమస్యలను బ్రౌజ్ చేయండి';
  const T_BROWSE_ALL_ISSUES = 'అన్ని సమస్యలను బ్రౌజ్ చేయండి';
  const T_ALL_ISSUES_DESCRIPTION = 'ఇవన్నీ అన్ని ప్రాజెక్ట్‌ల కోసం బహిరంగ సమస్యలు';
  const T_NEW_ISSUE = 'కొత్త సంచిక';
  const T_ALL_ISSUES = 'అన్ని సమస్యలు';
  const T_PROJECTS = 'ప్రాజెక్ట్‌లు';
  const T_DASHBOARD = 'డ్యాష్‌బోర్డ్';
  const T_LAST_UPDATES = 'చివరి నవీకరణలు';
  const T_LAST_ACTIVITY = 'చివరి కార్యాచరణ';
  const T_UPLOADS = 'అప్‌లోడ్‌లు';
  const T_SEARCH = 'శోధన';
  const T_LINK_CONTACT = 'మమ్మల్ని సంప్రదించండి';
  const T_LINK_LEGALNOTICE = 'చట్టపరమైన నోటీసు';
  const T_LINK_PRIVACYPOLICY = 'గోప్యతా విధానం';
  const T_API_SETTINGS = 'API';
  const T_API_ENABLE_SETTINGS = 'APIని నిర్వహించండి';
  const T_API_ACCESS_SETTINGS = 'API యాక్సెస్';
  const T_INFO = 'సమాచారం';

  # ఫారమ్‌లు

  const F_USERNAME = 'వినియోగదారు పేరు:';
  const F_PASSWORD = 'పాస్‌వర్డ్:';
  const F_USERNAME2 = 'వినియోగదారు పేరు';
  const F_PASSWORD2 = 'పాస్‌వర్డ్';
  const F_NAME = 'పేరు:';
  const F_URL = 'Url:';
  const F_URL_CDN = 'CDN Url:';
  const F_URL_REWRITING = 'Url తిరిగి వ్రాయడం:';
  const F_INTRO = 'పరిచయం:';
  const F_DESCRIPTION = 'వివరణ:';
  const F_EMAIL = 'ఇమెయిల్:';
  const F_LINK_CONTACT = 'బాహ్య సంప్రదింపు పేజీకి లింక్ (ఖాళీగా ఉంచవచ్చు):';
  const F_LINK_LEGALNOTICE = 'చట్టపరమైన నోటీసుకు లింక్ (ఖాళీగా ఉంచవచ్చు):';
  const F_LINK_PRIVACYPOLICY = 'గోప్యతా విధానానికి లింక్ (ఖాళీగా ఉంచవచ్చు):';
  const F_MAX_UPLOAD = 'అప్‌లోడ్‌కు గరిష్ట పరిమాణం:';
  const F_ALLOCATED_SPACE = 'ఒక వినియోగదారుకు కేటాయించబడిన స్థలం:';
  const F_GROUP = 'సమూహం:';
  const F_NOTIFICATIONS = 'తెలియజేయబడాలి:';
  const F_PROJECT_X = 'ప్రాజెక్ట్ “%పేరు%”:';
  const F_LANGUAGE = 'భాష:';
  const F_LOGS = 'లాగ్‌లు:';

  const F_ISSUES_PAGE = 'ప్రతి పేజీకి సమస్యలు:';
  const F_ISSUES_PAGE_SEARCH = 'ఒక పేజీకి సంబంధించిన సమస్యలు (శోధన):';
  const F_PREVIEW_ISSUE = 'ప్రివ్యూల పొడవు (సమస్యలు):';
  const F_PREVIEW_SEARCH = 'ప్రివ్యూల పొడవు (శోధన):';
  const F_PREVIEW_PROJECT = 'ప్రివ్యూల పొడవు (ప్రాజెక్ట్‌లు):';
  const F_LAST_EDITS = 'డ్యాష్‌బోర్డ్‌లలో ప్రదర్శించబడిన సమస్యల సంఖ్య:';
  const F_LAST_ACTIVITY = 'వినియోగదారు పేజీలలో ప్రదర్శించబడే సమస్యల సంఖ్య:';
  const F_THEME = "థీమ్";
  const F_TIP_THEME = ".css ఫైల్‌ను ఇందులో ఉంచండి";

  const F_ADD_PROJECT = 'కొత్త ప్రాజెక్ట్';
  const F_ADD_COLOR = 'కొత్త రంగు';
  const F_ADD_STATUS = 'కొత్త స్థితి';
  const F_ADD_LABEL = 'కొత్త లేబుల్';
  const F_ADD_GROUP = 'కొత్త సమూహం';
  const F_ADD_USER = 'కొత్త వినియోగదారు';

  const F_SORT_BY = 'క్రమబద్ధీకరించు:';
  const F_SORT_ID = 'ID';
  const F_SORT_MOD = 'చివరి నవీకరణ';
  const F_SORT_DESC = 'అవరోహణ';
  const F_SORT_ASC = 'ఆరోహణ';
  const F_FILTER_STATUSES = 'ఫిల్టర్ స్థితిగతులు:';
  const F_FILTER_STATES = 'ఫిల్టర్ స్టేట్స్:';
  const F_FILTER_LABELS = 'ఫిల్టర్ లేబుల్స్:';
  const F_FILTER_USERS = 'ఫిల్టర్ యూజర్లు:';
  const F_FILTER_MILESTONE = 'ఫిల్టర్ మైలురాయి:';

  const F_WRITE = 'వ్రాయండి:';
  const F_SUMMARY = 'సారాంశం';
  const F_CONTENT = 'కంటెంట్';

  const F_STATUS = 'స్థితి:';
  const F_RELATED = 'సంబంధిత:';
  const F_LABELS2 = 'లేబుల్స్:';
  const F_MILESTONE = 'మైలురాయి:';

  const F_GENERAL_SETTINGS = 'సాధారణ సెట్టింగ్‌లు:';
  const F_PROJECTS = 'ప్రాజెక్ట్‌లు:';
  const F_DATABASE = 'డేటాబేస్:';
  const F_UPLOADS = 'అప్‌లోడ్‌లు:';
  const F_COLORS = 'రంగులను నిర్వహించండి:';
  const F_DISPLAY = 'ప్రదర్శనను నిర్వహించు :';
  const F_STATUSES = 'స్థితిలను నిర్వహించండి:';
  const F_LABELS = 'లేబుల్‌లను నిర్వహించండి:';
  const F_GROUPS = 'సమూహాలను నిర్వహించండి:';
  const F_PERMISSIONS = 'అనుమతులను నిర్వహించండి:';
  const F_USERS = 'వినియోగదారులను నిర్వహించండి:';

  const F_INVALID_CAPTCHA = 'మీరు నమోదు చేసిన CAPTCHA తప్పు. దయచేసి మళ్లీ ప్రయత్నించండి.';

  const F_TIP_NAME = 'ఇది ప్రతి పేజీ యొక్క హెడర్‌పై ప్రదర్శించబడుతుంది.';
  const F_TIP_URL_REWRITING = 'url తిరిగి వ్రాయడాన్ని నిలిపివేయడానికి ఈ ఫీల్డ్‌ను ఖాళీగా వదిలివేయండి. లేకుంటే, అది డొమైన్ పేరుకు సంబంధించి phpmyBugs ఫోల్డర్‌కి పాత్‌ను కలిగి ఉండాలి (ప్రారంభించి "/"తో ముగుస్తుంది),';
  const F_TIP_URL_CDN = 'CDNని నిలిపివేయడానికి ఈ ఫీల్డ్‌ను ఖాళీగా వదిలేయండి. లేకపోతే, అది మీ CDN యొక్క URLని కలిగి ఉండాలి (ఉదాహరణకు <em>https://cdn.rawgit.com/bugtrackr/Nireus/master/</em>, దీన్ని ఉపయోగించడానికి సంకోచించకండి). మీ CDNలో <em>/public</em> ఫోల్డర్ నుండి అన్ని ఫైల్‌లను హోస్ట్ చేసినట్లు నిర్ధారించుకోండి.';
  const F_TIP_INTRO = 'ఇది హోమ్ పేజీలో ప్రదర్శించబడుతుంది. ఇది మార్క్‌డౌన్ సింటాక్స్‌తో అన్వయించబడుతుంది. గమనిక: “%name%” పేరుతో ఒకే ఒక ప్రాజెక్ట్ ఉంటే, హోమ్ పేజీ స్వయంచాలకంగా ప్రాజెక్ట్ డ్యాష్‌బోర్డ్‌కి మళ్లించబడుతుంది మరియు ఈ వచనం ప్రదర్శించబడదు.';
  const F_TIP_EMAIL = 'ఇమెయిల్ నోటిఫికేషన్‌లను నిలిపివేయడానికి ఈ ఫీల్డ్‌ను ఖాళీగా ఉంచండి. లేకపోతే, ఇమెయిల్ నోటిఫికేషన్‌ను పంపేటప్పుడు ఈ చిరునామా పంపినవారిగా ఉపయోగించబడుతుంది.';
  const F_TIP_PASSWORD = 'మీరు పాస్‌వర్డ్‌ను మార్చకూడదనుకుంటే దాన్ని ఖాళీగా వదిలేయండి.';
  const F_TIP_USER_EMAIL = 'మీరు నోటిఫికేషన్‌లను స్వీకరించాలనుకుంటే మాత్రమే అవసరం.';
  const F_TIP_NOTIFICATIONS = 'ఇది డిఫాల్ట్ సెట్టింగ్: మీరు ప్రతి సంచికకు దీన్ని మార్చగలరు.';
  const F_TIP_NOTIFICATIONS_DISABLED = 'గమనిక: నోటిఫికేషన్‌లు ప్రస్తుతం నిర్వాహకునిచే నిలిపివేయబడ్డాయి.';
  const F_TIP_DESCRIPTION = 'ఇది ప్రాజెక్ట్ డాష్‌బోర్డ్‌లో ప్రదర్శించబడుతుంది. ఇది మార్క్‌డౌన్ సింటాక్స్‌తో అన్వయించబడుతుంది.';

  const F_TIP_MAX_UPLOAD = 'అప్‌లోడ్ చేయబడిన ప్రతి ఫైల్ ఈ పరిమాణాన్ని మించకూడదు.';
  const F_TIP_ALLOCATED_SPACE = 'ఒక వినియోగదారు ఈ పరిమితిని చేరుకున్న తర్వాత ఇతర ఫైల్‌లను అప్‌లోడ్ చేయలేరు.<br /><em>శ్రద్ధ:</em> లాగిన్ చేసిన వినియోగదారులు ఎవరూ ఫైల్‌లను అప్‌లోడ్ చేయడానికి అనుమతించకపోతే (ఇది డిఫాల్ట్ సెట్టింగ్ కాదు), ఈ పరిమితి వారికి వర్తించదు.';

  const F_TIP_ID_STATUS = '<b>చిట్కా:</b> IDలను మార్చేటప్పుడు జాగ్రత్తగా ఉండండి, ఎందుకంటే ప్రతి సమస్య దాని పాత స్థితి IDని ఉంచుతుంది (ఈ ID ఇకపై ఉనికిలో లేకుంటే మినహా: ఈ సందర్భంలో, డిఫాల్ట్ స్థితి ఉపయోగించబడుతుంది). ';
  const F_TIP_ID_LABEL = '<b>చిట్కా:</b> IDలను మార్చేటప్పుడు జాగ్రత్తగా ఉండండి, ఎందుకంటే ఒక సమస్య యొక్క ప్రతి లేబుల్ దాని పాత IDని ఉంచుతుంది (ఈ ID ఇకపై ఉనికిలో లేకుంటే మినహా: ఈ సందర్భంలో, లేబుల్ నుండి తీసివేయబడుతుంది సమస్య).';
  const F_TIP_ID_GROUP = '<b>చిట్కా:</b> IDలను మార్చేటప్పుడు జాగ్రత్తగా ఉండండి, ఎందుకంటే ప్రతి వినియోగదారు తన పాత సమూహ IDని ఉంచుకుంటారు (ఈ ID ఇకపై ఉనికిలో లేకుంటే మినహా: ఈ సందర్భంలో, డిఫాల్ట్ సమూహం ఉపయోగించబడుతుంది). ';
  const F_TIP_CAPTCHA = 'వినియోగదారులు లాగిన్ చేయనందుకు క్యాప్చా చూపబడే చర్యలను ఎంచుకోండి.';
  const F_TIP_API_ACCESS = '<em>/database/config_api.php</em> ఫైల్‌లో API యాక్సెస్‌ని కాన్ఫిగర్ చేయండి. మరింత సమాచారం కోసం API.md ఫైల్ చూడండి.';

  const F_API_ENABLE = 'APIని ప్రారంభించు';

  const HELP_MARKDOWN = '
  <h2>మార్క్డ్స్వంత సింటాక్స్:</h2>

  <p>పేరాలు:</p>
<pre><code class="blank no-highlight">పేరాగ్రాఫ్‌లు ఒకటి లేదా అంతకంటే ఎక్కువ ఖాళీ పంక్తులతో వేరు చేయబడ్డాయి.
అందుకే ఈ వచనం పంక్తి విరిగిపోయినప్పటికీ మునుపటి పదబంధంలో అదే లైన్‌లో ప్రదర్శించబడుతుంది.

కొత్త పేరాను సృష్టించకుండా కొత్త లైన్‌ను ప్రారంభించడానికి:
ఇక్కడ లాగానే లైన్ బ్రేక్‌కు ముందు 2 ఖాళీలను చొప్పించండి.</code></pre>
  <p>ప్రాముఖ్యత:</p>
<pre><code class="blank no-highlight">*ఇటాలిక్ టెక్స్ట్*
_ఇటాటిక్ టెక్స్ట్ మళ్లీ_

**బోల్డ్ టెక్స్ట్**
__బోల్డ్ టెక్స్ట్ మళ్లీ__ </code></pre>

  <p>లింక్‌లు:</p>
<pre><code class="blank no-highlight">ఇది ఇన్‌లైన్ లింక్ యొక్క [ఒక ఉదాహరణ](http://example.com).
ఇది మరొకటి : &lt;http://example.com&gt;.</code></pre>

  <p>చిత్రాలు:</p>
<pre><code class="blank no-highlight">![నేను ఒక చిత్రం.](http://example.com/image.png)</code></pre>

  <p>శీర్షికలు:</p>
<pre><code class="blank no-highlight"># అగ్ర స్థాయి శీర్షిక
## రెండవ స్థాయి టైటిల్
### మూడవ స్థాయి టైటిల్
#### నాల్గవ స్థాయి శీర్షిక</code></pre>

  <p>జాబితాలు:</p>
<pre><code class="blank no-highlight">- ఒక అంశం
* మరొకటి

1. మొదటి అంశం
2. రెండవ అంశం</code></pre>

  <p>బ్లాక్‌కోట్‌లు:</p>
<pre><code class="blank no-highlight">> నేను రెండు పేరాలతో బ్లాక్‌కోట్.
>
> నేను రెండవ పేరా.</code> </pre>

  <p>కోడ్ బ్లాక్‌లు:</p>
<pre><code class="blank no-highlight">ఇది `ఇన్‌లైన్ కోడ్ బ్లాక్`.</code></pre>
<pre><code class="blank no-highlight"> &lt;?php echo "నేను ఒక కోడ్ బ్లాక్, ఎందుకంటే నేను ఇండెంట్ అయ్యాను
 4 ఖాళీలతో"; ?&gt;</code></pre>
<pre><code class="blank no-highlight">```
&lt;?php echo "నేను ఒక కోడ్ బ్లాక్."; ?&gt;
```

```php
&lt;?php echo "మద్దతు ఉన్న భాషలు: బాష్, cs, రూబీ, డిఫ్, జావాస్క్రిప్ట్, css, xml, http, java, php, python, sql, ini, perl, json, cpp, markdown, no-highlight"; ?&gt;
```</code></pre>
  ';


	private static $permissions = array(
  'home' => array(
  'title' => 'హోమ్:',
  'description' => 'హోమ్ పేజీకి యాక్సెస్ చేయగలరు మరియు అతని ప్రాజెక్ట్‌లకు సంబంధించిన అన్ని ఓపెన్ సమస్యల జాబితాను వీక్షించగలరు.'
  ),
  'dashboard' => array(
  'title' => 'డ్యాష్‌బోర్డ్‌లు:',
  'description' => 'ప్రాజెక్ట్‌ల డ్యాష్‌బోర్డ్‌లను యాక్సెస్ చేయవచ్చు.'
  ),
  'issues' => array(
  'title' => 'సమస్యలను వీక్షించండి:',
  'description' => 'ప్రజా సమస్యలను వీక్షించగలరు.'
  ),
  'private_issues' => array(
  'title' => 'ప్రైవేట్ సమస్యలను వీక్షించండి:',
  'description' => 'ప్రైవేట్‌గా ట్యాగ్ చేయబడిన సమస్యలను వీక్షించవచ్చు.'
  ),
  'search' => array(
  'title' => 'శోధన:',
  'description' => 'సమస్యలు లేదా వినియోగదారులను శోధించవచ్చు.'
  ),
  'new_issue' => array(
  'title' => 'కొత్త సంచిక:',
  'description' => 'కొత్త సంచికను సమర్పించవచ్చు.'
  ),
  'edit_issue' => array(
  'title' => 'సమస్యలను సవరించు:',
  'description' => 'అన్ని సమస్యల వచనాన్ని సవరించవచ్చు మరియు వాటిని తొలగించవచ్చు.'
  ),
  'update_issue' => array(
  'title' => 'సమస్యలను నవీకరించండి:',
  'description' => 'సమస్యలను నవీకరించవచ్చు: స్థితిని మార్చవచ్చు, లేబుల్‌లను జోడించవచ్చు, మూసివేయవచ్చు మరియు మళ్లీ తెరవవచ్చు, ...'
  ),
  'post_comment' => array(
  'title' => 'వ్యాఖ్యను పోస్ట్ చేయండి:',
  'description' => 'వ్యాఖ్యను పోస్ట్ చేయవచ్చు.'
  ),
  'edit_comment' => array(
  'title' => 'వ్యాఖ్యలను సవరించు:',
  'description' => 'అన్ని వ్యాఖ్యలను సవరించగలరు (వినియోగదారులు తమ స్వంత వ్యాఖ్యలను ఎలాగైనా సవరించగలరు)'
  ),
  'view_user' => array(
  'title' => 'వినియోగదారు ప్రొఫైల్‌లు:',
  'description' => 'అన్ని వినియోగదారు ప్రొఫైల్‌లను వీక్షించవచ్చు.'
  ),
  'upload' => array(
  'title' => 'ఫైల్‌ను పోస్ట్ చేయండి:',
  'description' => 'వ్యాఖ్య లేదా కొత్త సమస్యకు ఫైళ్లను జోడించవచ్చు.'
  ),
  'view_upload' => array(
  'title' => 'అప్‌లోడ్‌లను వీక్షించండి:',
  'description' => 'అప్‌లోడ్ చేసిన అన్ని ఫైళ్లను యాక్సెస్ చేయవచ్చు.'
  ),
  'settings' => array(
  'title' => 'సెట్టింగ్‌లను మార్చండి:',
  'description' => 'ఈ పేజీని యాక్సెస్ చేయవచ్చు మరియు అన్ని గ్లోబల్ సెట్టింగ్‌లను సవరించవచ్చు.'
  ),
  'signup' => array(
  'title' => 'సైన్ అప్:',
  'description' => 'సైన్ అప్ చేయవచ్చు.'
  ),
  'view_errors' => array(
  'title' => 'ప్రాణాంతక లోపాలను వీక్షించండి:',
  'description' => 'ప్రాణాంతక దోషాల వివరణను వీక్షించవచ్చు.'
  )
  );

  public static function permissions($id, $type = 'వివరణ') {
  return self::$permissions[$id][$type];
  }

 private static $settings = array(
  'validate_url' => 'url చెల్లదు.',
  'validate_email' => 'ఈమెయిల్ చెల్లదు.',
  'private_label_removed' => 'మీరు ప్రైవేట్ లేబుల్‌ను తీసివేయలేరు లేదా దాని IDని మార్చలేరు, కానీ మీరు దాని పేరు మార్చవచ్చు.',
  'default_status_removed' => 'మీరు డిఫాల్ట్ స్థితిని తీసివేయలేరు లేదా దాని IDని మార్చలేరు, కానీ మీరు దాని పేరు మార్చవచ్చు.',
  'default_group_removed' => 'మీరు డిఫాల్ట్ సమూహాన్ని తీసివేయలేరు లేదా దాని IDని మార్చలేరు, కానీ మీరు దాని పేరు మార్చవచ్చు.',
  'default_group_superuser_removed' => 'మీరు సూపర్‌యూజర్ సమూహాన్ని తీసివేయలేరు లేదా దాని IDని మార్చలేరు, కానీ మీరు దాని పేరు మార్చవచ్చు.',
  'validate_same_username' => 'హెచ్చరిక: ఇద్దరు వినియోగదారులకు ఒకే వినియోగదారు పేరు ఉంది.',
  'validate_same_project_name' => 'రెండు ప్రాజెక్ట్‌లకు ఒకే పేరు ఉండకూడదు. ఒకటి స్వయంచాలకంగా పేరు మార్చబడింది.',
  'language_modified' => 'ఈ పేజీని కొత్త భాషలో వీక్షించడానికి రిఫ్రెష్ చేయండి.'
  );

  	public static function settings($id) {
  return self::$settings[$id];
  }

  private static $errors = array(
  E_ERROR => 'ఫాటల్ ఎర్రర్',
  E_WARNING => 'హెచ్చరిక',
  E_PARSE => 'పార్స్ ఎర్రర్',
  E_NOTICE => 'నోటీస్',
  E_STRICT => 'సలహా',
  E_DEPRECATED => 'విస్మరించబడింది','డిఫాల్ట్' => 'లోపం'
  );
  
  public static function errors($no) {
		return (isset(self::$errors[$no])) ? self::$errors[$no] : self::$errors['డిఫాల్ట్'];
  }
}

?>