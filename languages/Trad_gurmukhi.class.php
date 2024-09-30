<?php

class Trad {

		# ਸ਼ਬਦ

  const W_ISSUE = 'ਮਸਲਾ';
  const W_OPEN = 'ਓਪਨ';
  const W_OPENED = 'ਖੋਲ੍ਹਿਆ';
  const W_CLOSED = 'ਬੰਦ';
  const W_REOPENED = 'ਮੁੜ ਖੋਲ੍ਹਿਆ';
  const W_COMMENTED = 'ਟਿੱਪਣੀ ਕੀਤੀ';
  const W_NOBODY = 'ਕੋਈ ਨਹੀਂ';
  const W_SOMEONE = 'ਕਿਸੇ';
  const W_ENABLED = 'ਸਮਰੱਥ';
  const W_DISABLED = 'ਅਯੋਗ';
  const W_NOTFOUND = 'ਨਹੀਂ ਮਿਲਿਆ';
  const W_FORBIDDEN = 'ਵਰਜਿਤ';
  const W_MENU = 'ਮੀਨੂ';

  const W_EXAMPLE = 'ਉਦਾਹਰਨ';
  const W_HEX = 'Hex';
  const W_RENDERING = 'ਰੈਂਡਰਿੰਗ';
  const W_ID = 'ID';
  const W_DISPLAY_NAME = 'ਡਿਸਪਲੇ ਨਾਮ';

  const W_SECONDE = 'ਦੂਜਾ';
  const W_MINUTE = 'ਮਿੰਟ';
  const W_HOUR = 'ਘੰਟਾ';
  const W_DAY = 'ਦਿਨ';
  const W_WEEK = 'ਹਫ਼ਤਾ';
  const W_MONTH = 'ਮਹੀਨਾ';
  const W_YEAR = 'ਸਾਲ';
  const W_DECADE = 'ਦਹਾਕਾ';
  const W_SECONDE_P = 'ਸਕਿੰਟ';
  const W_MINUTE_P = 'ਮਿੰਟ';
  const W_HOUR_P = 'ਘੰਟੇ';
  const W_DAY_P = 'ਦਿਨ';
  const W_WEEK_P = 'ਹਫ਼ਤੇ';
  const W_MONTH_P = 'ਮਹੀਨੇ';
  const W_YEAR_P = 'ਸਾਲ';
  const W_DECADE_P = 'ਦਹਾਕੇ';

  const W_PREVIOUS = 'ਪਿਛਲਾ';
  const W_NEXT = 'ਅਗਲਾ';
  const W_MORE = 'ਹੋਰ';
  const W_CURRENT = 'ਪੰਨਾ %nb1% ਦਾ %nb2%';

  const W_NOT_LOGGED = 'ਲੌਗਇਨ ਨਹੀਂ ਕੀਤਾ';

  const W_SUSPENSION = '…';
  const W_EXTRACT = '"%text%"';

  const W_USER = 'ਉਪਭੋਗਤਾ';
  const W_DEVELOPPER = 'ਡਿਵੈਲਪਰ';
  const W_SUPERUSER = 'ਸੁਪਰ ਯੂਜ਼ਰ';
  const W_S_NEW = 'ਨਵਾਂ';
  const W_S_CONFIRMED = 'ਪੁਸ਼ਟੀ';
  const W_S_ASSIGNED = '% user% ਨੂੰ ਸੌਂਪਿਆ ਗਿਆ';
  const W_S_RESOLVED = 'ਹੱਲ';
  const W_S_REJECTED = 'ਅਸਵੀਕਾਰ ਕੀਤਾ ਗਿਆ';
  const W_L_URGENT = 'ਜ਼ਰੂਰੀ';
  const W_L_IMPROVEMENT = 'ਸੁਧਾਰ';
  const W_L_PRIVATE = 'ਪ੍ਰਾਈਵੇਟ';

  const W_PROFILEPIC = 'ਪ੍ਰੋਫਾਈਲ ਤਸਵੀਰ';

  const W_RSS = 'RSS ਫੀਡ';
  const W_VERSION = 'ਵਰਜਨ';

  const W_CAPTCHA_IMAGE = 'ਕੈਪਚਾ ਚਿੱਤਰ';
  const W_CAPTCHA_REFRESH = 'ਚਿੱਤਰ ਤਾਜ਼ਾ ਕਰੋ';
  const W_CAPTCHA_INPUT = 'ਟੈਕਸਟ ਟਾਈਪ ਕਰੋ:';

  # ਕਿਰਿਆਵਾਂ

  const V_UPDATE = 'ਅੱਪਡੇਟ';
  const V_UPDATE_DETAILS = 'ਵੇਰਵਿਆਂ ਨੂੰ ਅੱਪਡੇਟ ਕਰੋ';
  const V_UPDATE_CONTENT = 'ਸਮੱਗਰੀ ਅੱਪਡੇਟ ਕਰੋ';
  const V_UPDATE_AND = 'ਅੱਪਡੇਟ & %ਵਿਸ਼ੇਸ਼ਣ%';
  const V_CANCEL = 'ਰੱਦ ਕਰੋ';
  const V_PREVIEW = 'ਝਲਕ';
  const V_COMMENT = 'ਟਿੱਪਣੀ';
  const V_SUBMIT = 'ਸਬਮਿਟ';
  const V_SELECT_FILE = 'ਇੱਕ ਫ਼ਾਈਲ ਚੁਣੋ...';
  const V_UPLOADING = 'ਅੱਪਲੋਡ ਕੀਤਾ ਜਾ ਰਿਹਾ ਹੈ...';
  const V_SAVE_CONFIG = 'ਸੈਟਿੰਗ ਸੰਭਾਲੋ';
  const V_APPLY = 'ਲਾਗੂ ਕਰੋ';
  const V_EDIT = 'ਸੰਪਾਦਨ';
  const V_SIGNUP = 'ਸਾਈਨ ਅੱਪ';
  const V_LOGIN = 'ਲੌਗ ਇਨ';
  const V_CONTINUE = 'ਜਾਰੀ ਰੱਖੋ';
  const V_REMOVE_ISSUE = 'ਮਸਲਾ ਮਿਟਾਓ';
  const V_CLOSE = 'ਬੰਦ ਕਰੋ';
  const V_REOPEN = 'ਮੁੜ ਖੋਲ੍ਹੋ';
  const V_EXPORT = 'ਕੱਚਾ ਡੇਟਾ ਐਕਸਪੋਰਟ ਕਰੋ';

  # ਸੰਵੇਦਨਾ

  const S_NOLABEL = '–';
  const S_NODEPENDENCY = '–';
  const S_COMMENT_LEAVE = 'ਇੱਕ ਟਿੱਪਣੀ ਛੱਡੋ:';
  const S_AGO = '%duration% %pediod% ago';
  const S_ISSUE_ABOUT = 'ਇਸ ਮੁੱਦੇ ਬਾਰੇ:';
  const S_UPLOAD_ADD = 'ਇੱਕ ਫ਼ਾਈਲ ਨੱਥੀ ਕਰੋ:';
  const S_WELCOME = 'ਜੀ ਆਇਆਂ ਨੂੰ, % user%';
  const S_NEVER = 'ਕਦੇ ਨਹੀਂ';
  const S_ME = 'ਉਨ੍ਹਾਂ ਮੁੱਦਿਆਂ \'ਤੇ ਅੱਪਡੇਟ ਜਿਨ੍ਹਾਂ ਵਿੱਚ ਮੈਂ ਯੋਗਦਾਨ ਪਾਇਆ ਹੈ';
  const S_ALWAYS = 'ਹਰੇਕ ਅੱਪਡੇਟ ਦਾ';
  const S_START_NOTIF = 'ਨਵੇਂ ਅੱਪਡੇਟਾਂ ਬਾਰੇ ਸੂਚਿਤ ਕਰੋ';
  const S_STOP_NOTIF = 'ਹੁਣ ਅੱਪਡੇਟ ਬਾਰੇ ਸੂਚਿਤ ਨਹੀਂ ਕੀਤਾ ਜਾਵੇਗਾ';
  const S_NOTFOUND = 'ਜਿਹੜਾ ਪੰਨਾ ਤੁਸੀਂ ਲੱਭ ਰਹੇ ਹੋ ਉਹ ਹੁਣ ਮੌਜੂਦ ਨਹੀਂ ਹੈ...';
  const S_FORBIDDEN = 'ਤੁਹਾਨੂੰ ਇਸ ਪੰਨੇ ਤੱਕ ਪਹੁੰਚਣ ਦੀ ਇਜਾਜ਼ਤ ਨਹੀਂ ਹੈ। ਜਾਰੀ ਰੱਖਣ ਲਈ ਕਿਰਪਾ ਕਰਕੇ ਲਾਗਇਨ/ਆਊਟ ਕਰੋ।';

  const S_VIEW_PARTICIPATION = 'ਉਸਦੀ ਭਾਗੀਦਾਰੀ ਵੇਖੋ।';
  const S_VIEW_STATUS = 'ਸਮੱਸਿਆ ਵੇਖੋ “%status%”।';

  const S_ISSUE_CREATED = '%user% %time% ਦੁਆਰਾ';
  const S_ISSUE_UPDATED = '%adj% by %user% %time%।';
  const S_ISSUE_STATUS_UPDATED = 'ਸਥਿਤੀ ਨੂੰ %user% %time% ਦੁਆਰਾ %status% ਤੱਕ ਅੱਪਡੇਟ ਕੀਤਾ ਗਿਆ।';

  const S_RSS_ISSUE_UPDATED = '%adj% by %user%।';
  const S_RSS_ISSUE_STATUS_UPDATED = 'ਸਥਿਤੀ ਨੂੰ %user% ਦੁਆਰਾ "%status%" ਵਿੱਚ ਅੱਪਡੇਟ ਕੀਤਾ ਗਿਆ।';

  const S_INTRO_INSTALL = 'ਇੰਝ ਲੱਗਦਾ ਹੈ ਕਿ ਇਹ ਪਹਿਲੀ ਵਾਰ ਹੈ ਜਦੋਂ ਤੁਸੀਂ phpmyBugs ਚਲਾ ਰਹੇ ਹੋ! ਕਿਰਪਾ ਕਰਕੇ ਇਸਨੂੰ ਕੌਂਫਿਗਰ ਕਰੋ:';
  const S_FIRST_ISSUE_TITLE = 'ਤੁਸੀਂ ਕਿਵੇਂ ਹੋ, ਕੱਦੂ?';
  const S_FIRST_ISSUE = 'ਮੈਂ ਤੁਹਾਡਾ ਪਹਿਲਾ ਅੰਕ ਹਾਂ! ਲਾਗਿੰਗ ਕਰਨ ਤੋਂ ਬਾਅਦ, ਤੁਸੀਂ ਮੈਨੂੰ ਮਿਟਾਉਣ ਦੇ ਯੋਗ ਹੋਵੋਗੇ।';

  const S_NO_USER = 'ਕੋਈ ਉਪਭੋਗਤਾ ਤੁਹਾਡੀ ਬੇਨਤੀ ਨਾਲ ਮੇਲ ਨਹੀਂ ਖਾਂਦਾ।';
  const S_NO_ISSUE = 'ਤੁਹਾਡੀ ਬੇਨਤੀ ਨਾਲ ਕੋਈ ਮੁੱਦਾ ਮੇਲ ਨਹੀਂ ਖਾਂਦਾ।';
  const S_MATCHING_ISSUES = '%nb% ਮੇਲ ਖਾਂਦੀਆਂ ਸਮੱਸਿਆਵਾਂ';
  const S_NO_ACTIVITY = 'ਕੋਈ ਹਾਲੀਆ ਗਤੀਵਿਧੀ ਨਹੀਂ।';
  const S_NO_UPLOAD = 'ਕੋਈ ਅੱਪਲੋਡ ਨਹੀਂ।';
  const S_SIZE_REMAINING = '% ਕੁੱਲ% ਦੀ ਇਜਾਜ਼ਤ \'ਤੇ % ਬਾਕੀ %।';
  const S_NO_PROJECT = 'ਕੋਈ ਪ੍ਰੋਜੈਕਟ ਨਹੀਂ।';

  const S_SEARCH = '#12, @user, words…';
  const S_COPYRIGHT = '%name% ਦੁਆਰਾ ਸੰਚਾਲਿਤ।';
  const S_UPGRADE = '<a href="https://github.com/bugtrackr/Nireus/releases/latest">GitHub</a> ਤੋਂ <a href="https://bugtrackr.github.io ਤੱਕ ਨਵੀਨਤਮ ਸੰਸਕਰਣ ਪ੍ਰਾਪਤ ਕਰੋ /wiki/upgrade/">ਅੱਪਗ੍ਰੇਡ ਕਰੋ</a>।';

  const S_LAST_UPDATES = 'ਆਖਰੀ ਅੱਪਡੇਟ...';

  const S_STAY_LOGGEDIN = 'ਮੈਨੂੰ ਲਾਗਇਨ ਰੱਖੋ';

  const S_DEFAULT_DEFPROJ_DESC = 'ਇਹ ਡਿਫਾਲਟ ਪ੍ਰੋਜੈਕਟ ਹੈ ਜਿੱਥੇ ਹਰ ਕਿਸੇ ਦੀ ਪਹੁੰਚ ਹੈ।';
  const S_DEFAULT_2NDPROJ_DESC = 'ਇਹ ਤੁਹਾਡਾ ਦੂਜਾ ਪ੍ਰੋਜੈਕਟ ਪ੍ਰੋਜੈਕਟ ਹੋ ਸਕਦਾ ਹੈ ਜਿੱਥੇ ਸਿਰਫ ਰਜਿਸਟਰਡ ਉਪਭੋਗਤਾਵਾਂ ਨੂੰ ਮੁੱਦੇ ਪੋਸਟ ਕਰਨ ਦੀ ਇਜਾਜ਼ਤ ਹੈ।';

  # ਚੇਤਾਵਨੀਆਂ

  const A_ERROR_DIRECTORY = '<strong>ਗਲਤੀ:</strong> ਡਾਇਰੈਕਟਰੀ “%name%” ਬਣਾਉਣ ਵਿੱਚ ਅਸਮਰੱਥ।';
  const A_ERROR_FILE = '<strong>ਗਲਤੀ:</strong> ਫਾਈਲ “%name%” ਨੂੰ ਪੜ੍ਹਨ ਵਿੱਚ ਅਸਮਰੱਥ।';
  const A_ERROR_FILE_WRITE = '<strong>ਗਲਤੀ:</strong> ਫਾਈਲ “%name%” ਲਿਖਣ ਵਿੱਚ ਅਸਮਰੱਥ।';
  const A_ERROR_FATAL = 'ਮਾਫ਼ ਕਰਨਾ, ਕੁਝ ਗਲਤ ਹੋ ਗਿਆ। ਜੇਕਰ ਇਹ ਸਮੱਸਿਆ ਬਣੀ ਰਹਿੰਦੀ ਹੈ ਤਾਂ ਕਿਰਪਾ ਕਰਕੇ ਪ੍ਰਬੰਧਕ ਨਾਲ ਸੰਪਰਕ ਕਰੋ।';
  const A_ERROR = '<strong>%title%:</strong><br /><br />%message%<br /><br />ਫਾਇਲ “<strong>%file%</strong>” ਲਾਈਨ < strong>%line%</strong>.';

  const A_SUCCESS_INSTALL = '<strong>ਹੋ ਗਿਆ:</strong> phpmyBugs ਹੁਣ ਪੂਰੀ ਤਰ੍ਹਾਂ ਸੰਰਚਿਤ ਹੈ।';
  const A_ERROR_INSTALL = '<strong>ਗਲਤੀ:</strong> phpmyBugs ਪਹਿਲਾਂ ਹੀ ਸੰਰਚਿਤ ਹੈ। ਜੇਕਰ ਤੁਸੀਂ ਸੰਰਚਨਾ ਨੂੰ ਰੀਸੈਟ ਕਰਨਾ ਚਾਹੁੰਦੇ ਹੋ ਤਾਂ ਕਿਰਪਾ ਕਰਕੇ ਸੰਰਚਨਾ ਫਾਇਲ ਨੂੰ ਹਟਾ ਦਿਓ।';
  const A_MODIF_SAVED = 'ਸੋਧਾਂ ਨੂੰ ਸੰਭਾਲਿਆ ਗਿਆ ਸੀ।';

  const A_ERROR_FORM = 'ਇੱਕ ਗਲਤੀ ਆਈ ਹੈ। ਕਿਰਪਾ ਕਰਕੇ ਫਾਰਮ ਦੁਬਾਰਾ ਭੇਜੋ।';
  const A_ERROR_TOKEN = 'ਗਲਤ ਟੋਕਨ। ਕਿਰਪਾ ਕਰਕੇ ਫਾਰਮ ਦੁਬਾਰਾ ਭੇਜੋ।';
  const A_ERROR_EMPTY = 'ਤੁਹਾਨੂੰ ਇੱਕ ਉਪਭੋਗਤਾ ਨਾਮ ਅਤੇ ਇੱਕ ਪਾਸਵਰਡ ਦੇਣਾ ਪਵੇਗਾ।';
  const A_ERROR_SAME_USERNAME = 'ਇਹ ਉਪਭੋਗਤਾ ਨਾਮ ਉਪਲਬਧ ਨਹੀਂ ਹੈ।';
  const A_SUCCESS_SIGNUP = '<strong>ਹੋ ਗਿਆ:</strong> ਤੁਸੀਂ ਹੁਣ ਲਾਗਇਨ ਕਰ ਸਕਦੇ ਹੋ।';

  const A_CONFIRM_DELETE_COMMENT = 'ਕੀ ਤੁਸੀਂ ਯਕੀਨਨ ਇਸ ਟਿੱਪਣੀ ਨੂੰ ਮਿਟਾਉਣਾ ਚਾਹੁੰਦੇ ਹੋ?';
  const A_SUCCESS_DELETE_COMMENT = 'ਟਿੱਪਣੀ ਮਿਟਾ ਦਿੱਤੀ ਗਈ ਸੀ।';
  const A_CONFIRM_DELETE_ISSUE = 'ਕੀ ਤੁਸੀਂ ਯਕੀਨਨ ਇਸ ਮੁੱਦੇ ਨੂੰ ਮਿਟਾਉਣਾ ਚਾਹੁੰਦੇ ਹੋ?';
  const A_SUCCESS_DELETE_ISSUE = 'ਮਸਲਾ ਮਿਟਾ ਦਿੱਤਾ ਗਿਆ ਸੀ।';
  const A_CONFIRM_DELETE_UPLOAD = 'ਕੀ ਤੁਸੀਂ ਯਕੀਨਨ ਇਸ ਫ਼ਾਈਲ ਨੂੰ ਮਿਟਾਉਣਾ ਚਾਹੁੰਦੇ ਹੋ?';
  const A_CONFIRM_DELETE_PROJECT = 'ਕੀ ਤੁਸੀਂ ਯਕੀਨਨ ਇਸ ਪ੍ਰੋਜੈਕਟ ਨੂੰ ਮਿਟਾਉਣਾ ਚਾਹੁੰਦੇ ਹੋ? ਸਾਰੇ ਸੰਬੰਧਿਤ ਮੁੱਦੇ ਖਤਮ ਹੋ ਜਾਣਗੇ।';

  const A_LOGGED = 'ਤੁਸੀਂ ਹੁਣ ਸਿਸਟਮ ਵਿੱਚ ਲਾਗਇਨ ਹੋ ਗਏ ਹੋ।';
  const A_LOGGED_OUT = 'ਤੁਸੀਂ ਹੁਣ ਸਿਸਟਮ ਤੋਂ ਲਾਗ ਆਊਟ ਹੋ ਗਏ ਹੋ।';
  const A_ERROR_CONNEXION = '<strong>ਗਲਤੀ:</strong> ਗਲਤ ਯੂਜ਼ਰਨਾਮ ਜਾਂ ਪਾਸਵਰਡ।';
  const A_ERROR_CONNEXION_WAIT = '<strong>ਗਲਤੀ:</strong> ਗਲਤ ਯੂਜ਼ਰਨਾਮ ਜਾਂ ਪਾਸਵਰਡ। ਦੁਬਾਰਾ ਕੋਸ਼ਿਸ਼ ਕਰਨ ਤੋਂ ਪਹਿਲਾਂ ਕਿਰਪਾ ਕਰਕੇ %duration% %period% ਦੀ ਉਡੀਕ ਕਰੋ।';
  const A_ERROR_LOGIN_WAIT = 'ਦੁਬਾਰਾ ਕੋਸ਼ਿਸ਼ ਕਰਨ ਤੋਂ ਪਹਿਲਾਂ ਕਿਰਪਾ ਕਰਕੇ %duration% %period% ਦੀ ਉਡੀਕ ਕਰੋ। ਇਹ ਖਤਰਨਾਕ ਹਮਲਿਆਂ ਤੋਂ ਸੁਰੱਖਿਆ ਹੈ।';

  const A_ERROR_UPLOAD = 'ਇੱਕ ਗਲਤੀ ਆਈ ਹੈ। ਕਿਰਪਾ ਕਰਕੇ ਦੁਬਾਰਾ ਕੋਸ਼ਿਸ਼ ਕਰੋ।';
  const A_ERROR_UPLOAD_SIZE = 'ਫਾਇਲ ਅਧਿਕਤਮ ਮਨਜ਼ੂਰ ਆਕਾਰ (%nb% ਅਧਿਕਤਮ) ਤੋਂ ਵੱਧ ਗਈ ਹੈ।';
  const A_ERROR_UPLOAD_FULL = 'ਤੁਹਾਡੇ ਕੋਲ ਇਸ ਫ਼ਾਈਲ ਨੂੰ ਅੱਪਲੋਡ ਕਰਨ ਲਈ ਲੋੜੀਂਦੀ ਡਿਸਕ ਥਾਂ ਨਹੀਂ ਹੈ: %nb% ਬਾਕੀ।';

  const A_PLEASE_LOGIN_ISSUES = 'ਮਸਲਿਆਂ ਨੂੰ ਦੇਖਣ ਲਈ ਕਿਰਪਾ ਕਰਕੇ ਲਾਗਇਨ ਕਰੋ।';
  const A_PLEASE_LOGIN_COMMENT = 'ਕਿਰਪਾ ਕਰਕੇ ਟਿੱਪਣੀ ਪੋਸਟ ਕਰਨ ਲਈ ਲੌਗ ਇਨ ਕਰੋ। ਅਜੇ ਤੱਕ ਕੋਈ ਖਾਤਾ ਨਹੀਂ ਹੈ? ਇੱਕ ਬਣਾਓ: ਇਹ ਮੁਫਤ ਅਤੇ ਅਸਲ ਵਿੱਚ ਤੇਜ਼ ਹੈ!';
  const A_PLEASE_LOGIN_ISSUE = 'ਕਿਰਪਾ ਕਰਕੇ ਕੋਈ ਮੁੱਦਾ ਦਰਜ ਕਰਨ ਲਈ ਲਾਗਇਨ ਕਰੋ। ਅਜੇ ਤੱਕ ਕੋਈ ਖਾਤਾ ਨਹੀਂ ਹੈ? ਇੱਕ ਬਣਾਓ: ਇਹ ਮੁਫਤ ਅਤੇ ਅਸਲ ਵਿੱਚ ਤੇਜ਼ ਹੈ!';
  const A_SHOULD_LOGIN = 'ਜੇਕਰ ਤੁਹਾਡੇ ਕੋਲ ਖਾਤਾ ਹੈ, ਤਾਂ ਕਿਰਪਾ ਕਰਕੇ ਲੌਗਇਨ ਕਰੋ। ਜੇਕਰ ਨਹੀਂ, ਤਾਂ ਇੱਕ ਬਣਾਉਣ \'ਤੇ ਵਿਚਾਰ ਕਰੋ: ਇਹ ਮੁਫਤ ਅਤੇ ਅਸਲ ਵਿੱਚ ਤੇਜ਼ ਹੈ!';

  const A_IE = 'ਤੁਹਾਡਾ ਬ੍ਰਾਊਜ਼ਰ ਪੁਰਾਣਾ ਹੈ: <a href="https://www.browser-update.org/en/update.html">ਇਸ ਨੂੰ ਅੱਪਗ੍ਰੇਡ ਕਰੋ ਜਾਂ ਬਦਲੋ</a>।';

  # ਮੇਲ

  const M_NEW_COMMENT_O = '[%title% — %project% — ਅੰਕ #%id%] ਨਵੀਂ ਟਿੱਪਣੀ';
  const M_NEW_COMMENT = 'ਹੈਲੋ, %ਯੂਜ਼ਰਨੇਮ%!

ਮੁੱਦਾ #%id% — “%ਸਾਰ%” ਹੁਣੇ ਹੀ %by% ਦੁਆਰਾ ਟਿੱਪਣੀ ਕੀਤੀ ਗਈ ਹੈ। ਤੁਸੀਂ ਇੱਥੇ ਨਵੀਂ ਟਿੱਪਣੀ ਪੜ੍ਹ ਸਕਦੇ ਹੋ:
  %url%।

ਜੇਕਰ ਤੁਸੀਂ ਇਸ ਮੁੱਦੇ \'ਤੇ ਹੋਰ ਸੂਚਨਾਵਾਂ ਪ੍ਰਾਪਤ ਨਹੀਂ ਕਰਨਾ ਚਾਹੁੰਦੇ ਹੋ, ਤਾਂ ਉੱਪਰ ਦਿੱਤੇ ਲਿੰਕ ਰਾਹੀਂ (ਲੌਗਿੰਗ ਕਰਨ ਤੋਂ ਬਾਅਦ) ਇੱਕ ਵਿਕਲਪ ਉਪਲਬਧ ਹੈ।

-----
ਇਹ ਇੱਕ ਸਵੈਚਲਿਤ ਈਮੇਲ ਹੈ, ਕਿਰਪਾ ਕਰਕੇ ਜਵਾਬ ਨਾ ਦਿਓ।
  ';

  const M_NEW_ISSUE_O = '[%title% — %project%] ਨਵਾਂ ਮੁੱਦਾ';
  const M_NEW_ISSUE = 'ਹੈਲੋ, %ਯੂਜ਼ਰਨੇਮ%!

ਮੁੱਦਾ #%id% — “%ਸਾਰ%” ਹੁਣੇ ਹੀ %by% ਦੁਆਰਾ ਸਪੁਰਦ ਕੀਤਾ ਗਿਆ ਹੈ। ਤੁਸੀਂ ਇਸਨੂੰ ਇੱਥੇ ਪੜ੍ਹ ਸਕਦੇ ਹੋ:
  %url%।

ਜੇਕਰ ਤੁਸੀਂ ਇਸ ਮੁੱਦੇ \'ਤੇ ਹੋਰ ਸੂਚਨਾਵਾਂ ਪ੍ਰਾਪਤ ਨਹੀਂ ਕਰਨਾ ਚਾਹੁੰਦੇ ਹੋ, ਤਾਂ ਉੱਪਰ ਦਿੱਤੇ ਲਿੰਕ ਰਾਹੀਂ (ਲੌਗਿੰਗ ਕਰਨ ਤੋਂ ਬਾਅਦ) ਇੱਕ ਵਿਕਲਪ ਉਪਲਬਧ ਹੈ।

-----
ਇਹ ਇੱਕ ਸਵੈਚਲਿਤ ਈਮੇਲ ਹੈ, ਕਿਰਪਾ ਕਰਕੇ ਜਵਾਬ ਨਾ ਦਿਓ।
  ';

  # ਸਿਰਲੇਖ

 const T_INSTALLATION = 'ਇੰਸਟਾਲੇਸ਼ਨ';
  const T_SETTINGS = 'ਸੈਟਿੰਗ';
  const T_GLOBAL_SETTINGS = 'ਗਲੋਬਲ ਸੈਟਿੰਗ';
  const T_APPEARANCE = 'ਦਿੱਖ';
  const T_ISSUES = 'ਮਸਲਿਆਂ';
  const T_GROUPS = 'ਗਰੁੱਪ';
  const T_USERS = 'ਉਪਭੋਗਤਾ';
  const T_PERMISSIONS = 'ਅਧਿਕਾਰੀਆਂ';
  const T_ENABLE_CAPTCHA = 'ਕੈਪਚਾ ਪ੍ਰਬੰਧਿਤ ਕਰੋ';
  const T_CAPTCHA = 'ਕੈਪਚਾ';
  const T_BROWSE_ISSUES = 'ਬ੍ਰਾਊਜ਼ ਮੁੱਦੇ';
  const T_BROWSE_ALL_ISSUES = 'ਸਾਰੇ ਮੁੱਦੇ ਬ੍ਰਾਊਜ਼ ਕਰੋ';
  const T_ALL_ISSUES_DESCRIPTION = 'ਇਹ ਸਾਰੇ ਪ੍ਰੋਜੈਕਟਾਂ ਲਈ ਖੁੱਲ੍ਹੇ ਮੁੱਦੇ ਹਨ';
  const T_NEW_ISSUE = 'ਨਵਾਂ ਮੁੱਦਾ';
  const T_ALL_ISSUES = 'ਸਾਰੇ ਮੁੱਦੇ';
  const T_PROJECTS = 'ਪ੍ਰੋਜੈਕਟ';
  const T_DASHBOARD = 'ਡੈਸ਼ਬੋਰਡ';
  const T_LAST_UPDATES = 'ਆਖਰੀ ਅੱਪਡੇਟ';
  const T_LAST_ACTIVITY = 'ਆਖਰੀ ਗਤੀਵਿਧੀ';
  const T_UPLOADS = 'ਅੱਪਲੋਡ';
  const T_SEARCH = 'ਖੋਜ';
  const T_LINK_CONTACT = 'ਸਾਡੇ ਨਾਲ ਸੰਪਰਕ ਕਰੋ';
  const T_LINK_LEGALNOTICE = 'ਕਾਨੂੰਨੀ ਨੋਟਿਸ';
  const T_LINK_PRIVACYPOLICY = 'ਗੋਪਨੀਯਤਾ ਨੀਤੀ';
  const T_API_SETTINGS = 'API';
  const T_API_ENABLE_SETTINGS = 'API ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ';
  const T_API_ACCESS_SETTINGS = 'API ਪਹੁੰਚ';
  const T_INFO = 'ਜਾਣਕਾਰੀ';

  # ਫਾਰਮ

  const F_USERNAME = 'ਉਪਭੋਗਤਾ ਨਾਮ:';
  const F_PASSWORD = 'ਪਾਸਵਰਡ:';
  const F_USERNAME2 = 'ਉਪਭੋਗਤਾ ਨਾਮ';
  const F_PASSWORD2 = 'ਪਾਸਵਰਡ';
  const F_NAME = 'ਨਾਮ:';
  const F_URL = 'Url:';
  const F_URL_CDN = 'CDN Url:';
  const F_URL_REWRITING = 'Url ਰੀਰਾਈਟਿੰਗ:';
  const F_INTRO = 'ਜਾਣ-ਪਛਾਣ:';
  const F_DESCRIPTION = 'ਵੇਰਵਾ:';
  const F_EMAIL = 'ਈਮੇਲ:';
  const F_LINK_CONTACT = 'ਬਾਹਰੀ ਸੰਪਰਕ ਪੰਨੇ ਨਾਲ ਲਿੰਕ (ਖਾਲੀ ਛੱਡਿਆ ਜਾ ਸਕਦਾ ਹੈ):';
  const F_LINK_LEGALNOTICE = 'ਕਾਨੂੰਨੀ ਨੋਟਿਸ ਨਾਲ ਲਿੰਕ (ਖਾਲੀ ਛੱਡਿਆ ਜਾ ਸਕਦਾ ਹੈ):';
  const F_LINK_PRIVACYPOLICY = 'ਗੋਪਨੀਯਤਾ ਨੀਤੀ ਨਾਲ ਲਿੰਕ (ਖਾਲੀ ਛੱਡਿਆ ਜਾ ਸਕਦਾ ਹੈ):';
  const F_MAX_UPLOAD = 'ਅਪਲੋਡ ਪ੍ਰਤੀ ਅਧਿਕਤਮ ਆਕਾਰ:';
  const F_ALLOCATED_SPACE = 'ਪ੍ਰਤੀ ਯੂਜ਼ਰ ਸਪੇਸ ਨਿਰਧਾਰਤ:';
  const F_GROUP = 'ਗਰੁੱਪ:';
  const F_NOTIFICATIONS = 'ਸੂਚਨਾ ਪ੍ਰਾਪਤ ਕਰੋ:';
  const F_PROJECT_X = 'ਪ੍ਰੋਜੈਕਟ “%name%”:';
  const F_LANGUAGE = 'ਭਾਸ਼ਾ:';
  const F_LOGS = 'ਲੌਗਸ:';

  const F_ISSUES_PAGE = 'ਪ੍ਰਤੀ ਪੰਨਾ ਮੁੱਦੇ:';
  const F_ISSUES_PAGE_SEARCH = 'ਪ੍ਰਤੀ ਪੰਨਾ ਮੁੱਦੇ (ਖੋਜ):';
  const F_PREVIEW_ISSUE = 'ਝਲਕ ਦੀ ਲੰਬਾਈ (ਮਸਲਿਆਂ):';
  const F_PREVIEW_SEARCH = 'ਝਲਕ ਦੀ ਲੰਬਾਈ (ਖੋਜ):';
  const F_PREVIEW_PROJECT = 'ਪੂਰਵ-ਝਲਕ ਦੀ ਲੰਬਾਈ (ਪ੍ਰੋਜੈਕਟ):';
  const F_LAST_EDITS = 'ਡੈਸ਼ਬੋਰਡਾਂ \'ਤੇ ਪ੍ਰਦਰਸ਼ਿਤ ਮੁੱਦਿਆਂ ਦੀ ਸੰਖਿਆ:';
  const F_LAST_ACTIVITY = 'ਉਪਭੋਗਤਾ ਪੰਨਿਆਂ \'ਤੇ ਪ੍ਰਦਰਸ਼ਿਤ ਮੁੱਦਿਆਂ ਦੀ ਸੰਖਿਆ:';
  const F_THEME = 'ਥੀਮ';
  const F_TIP_THEME = '.css ਫਾਈਲ ਨੂੰ ਅੰਦਰ ਰੱਖੋ';

  const F_ADD_PROJECT = 'ਨਵਾਂ ਪ੍ਰੋਜੈਕਟ';
  const F_ADD_COLOR = 'ਨਵਾਂ ਰੰਗ';
  const F_ADD_STATUS = 'ਨਵੀਂ ਸਥਿਤੀ';
  const F_ADD_LABEL = 'ਨਵਾਂ ਲੇਬਲ';
  const F_ADD_GROUP = 'ਨਵਾਂ ਸਮੂਹ';
  const F_ADD_USER = 'ਨਵਾਂ ਉਪਭੋਗਤਾ';

  const F_SORT_BY = 'ਇਸ ਤਰ੍ਹਾਂ ਛਾਂਟੋ:';
  const F_SORT_ID = 'ID';
  const F_SORT_MOD = 'ਆਖਰੀ ਅੱਪਡੇਟ';
  const F_SORT_DESC = 'ਉਤਰਦਾ';
  const F_SORT_ASC = 'ਚੜ੍ਹਦਾ';
  const F_FILTER_STATUSES = 'ਫਿਲਟਰ ਸਥਿਤੀਆਂ:';
  const F_FILTER_STATES = 'ਫਿਲਟਰ ਸਟੇਟਸ:';
  const F_FILTER_LABELS = 'ਫਿਲਟਰ ਲੇਬਲ:';
  const F_FILTER_USERS = 'ਫਿਲਟਰ ਉਪਭੋਗਤਾ:';
  const F_FILTER_MILESTONE = 'ਫਿਲਟਰ ਮੀਲ ਪੱਥਰ:';

  const F_WRITE = 'ਲਿਖੋ:';
  const F_SUMMARY = 'ਸਾਰਾਂਸ਼';
  const F_CONTENT = 'ਸਮੱਗਰੀ';

  const F_STATUS = 'ਸਥਿਤੀ:';
  const F_RELATED = 'ਸਬੰਧਤ:';
  const F_LABELS2 = 'ਲੇਬਲ:';
  const F_MILESTONE = 'ਮੀਲ ਦਾ ਪੱਥਰ:';

  const F_GENERAL_SETTINGS = 'ਆਮ ਸੈਟਿੰਗ:';
  const F_PROJECTS = 'ਪ੍ਰੋਜੈਕਟ:';
  const F_DATABASE = 'ਡਾਟਾਬੇਸ:';
  const F_UPLOADS = 'ਅੱਪਲੋਡ:';
  const F_COLORS = 'ਰੰਗਾਂ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ:';
  const F_DISPLAY = 'ਡਿਸਪਲੇ ਦਾ ਪ੍ਰਬੰਧ ਕਰੋ :';
  const F_STATUSES = 'ਸਥਿਤੀਆਂ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ:';
  const F_LABELS = 'ਲੇਬਲ ਪ੍ਰਬੰਧਿਤ ਕਰੋ:';
  const F_GROUPS = 'ਸਮੂਹਾਂ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ:';
  const F_PERMISSIONS = 'ਅਧਿਕਾਰੀਆਂ ਦਾ ਪ੍ਰਬੰਧਨ ਕਰੋ:';
  const F_USERS = 'ਵਰਤੋਂਕਾਰ ਪ੍ਰਬੰਧਿਤ ਕਰੋ:';

  const F_INVALID_CAPTCHA = 'ਤੁਹਾਡੇ ਵੱਲੋਂ ਦਾਖਲ ਕੀਤਾ ਕੈਪਟਚਾ ਗਲਤ ਸੀ। ਕਿਰਪਾ ਕਰਕੇ ਦੁਬਾਰਾ ਕੋਸ਼ਿਸ਼ ਕਰੋ।';

  const F_TIP_NAME = 'ਇਹ ਹਰੇਕ ਪੰਨੇ ਦੇ ਸਿਰਲੇਖ \'ਤੇ ਪ੍ਰਦਰਸ਼ਿਤ ਹੋਵੇਗਾ।';
  const F_TIP_URL_REWRITING = 'url ਰੀਰਾਈਟਿੰਗ ਨੂੰ ਅਯੋਗ ਕਰਨ ਲਈ ਇਸ ਖੇਤਰ ਨੂੰ ਖਾਲੀ ਛੱਡੋ। ਨਹੀਂ ਤਾਂ, ਇਸ ਵਿੱਚ phpmyBugs ਫੋਲਡਰ ਦਾ ਮਾਰਗ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ (ਇੱਕ "/" ਨਾਲ ਸ਼ੁਰੂ ਅਤੇ ਸਮਾਪਤ), ਡੋਮੇਨ ਨਾਮ ਦੇ ਅਨੁਸਾਰ।';
  const F_TIP_URL_CDN = 'CDN ਨੂੰ ਅਯੋਗ ਕਰਨ ਲਈ ਇਸ ਖੇਤਰ ਨੂੰ ਖਾਲੀ ਛੱਡੋ। ਨਹੀਂ ਤਾਂ, ਇਸ ਵਿੱਚ ਤੁਹਾਡੇ CDN ਦਾ URL ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ (ਉਦਾਹਰਨ ਲਈ <em>https://cdn.rawgit.com/bugtrackr/Nireus/master/</em>, ਇਸਦੀ ਵਰਤੋਂ ਕਰਨ ਲਈ ਸੁਤੰਤਰ ਮਹਿਸੂਸ ਕਰੋ)। ਆਪਣੇ CDN \'ਤੇ <em>/public</em> ਫੋਲਡਰ ਤੋਂ ਸਾਰੀਆਂ ਫਾਈਲਾਂ ਨੂੰ ਹੋਸਟ ਕਰਨਾ ਯਕੀਨੀ ਬਣਾਓ।';
  const F_TIP_INTRO = 'ਇਹ ਹੋਮ ਪੇਜ \'ਤੇ ਦਿਖਾਇਆ ਜਾਵੇਗਾ। ਇਸਨੂੰ ਮਾਰਕਡਾਊਨ ਸਿੰਟੈਕਸ ਨਾਲ ਪਾਰਸ ਕੀਤਾ ਜਾਵੇਗਾ। ਨੋਟ: ਜੇਕਰ "%name%" ਨਾਂ ਦਾ ਸਿਰਫ਼ ਇੱਕ ਪ੍ਰੋਜੈਕਟ ਹੈ, ਤਾਂ ਹੋਮ ਪੇਜ ਨੂੰ ਆਪਣੇ ਆਪ ਪ੍ਰੋਜੈਕਟ ਡੈਸ਼ਬੋਰਡ \'ਤੇ ਰੀਡਾਇਰੈਕਟ ਕੀਤਾ ਜਾਂਦਾ ਹੈ, ਅਤੇ ਇਹ ਟੈਕਸਟ ਪ੍ਰਦਰਸ਼ਿਤ ਨਹੀਂ ਕੀਤਾ ਜਾਵੇਗਾ।';
  const F_TIP_EMAIL = 'ਈਮੇਲ ਸੂਚਨਾਵਾਂ ਨੂੰ ਅਯੋਗ ਕਰਨ ਲਈ ਇਸ ਖੇਤਰ ਨੂੰ ਖਾਲੀ ਛੱਡੋ। ਨਹੀਂ ਤਾਂ, ਈਮੇਲ ਸੂਚਨਾ ਭੇਜਣ ਵੇਲੇ ਇਹ ਪਤਾ ਭੇਜਣ ਵਾਲੇ ਵਜੋਂ ਵਰਤਿਆ ਜਾਵੇਗਾ।';
  const F_TIP_PASSWORD = 'ਜੇਕਰ ਤੁਸੀਂ ਪਾਸਵਰਡ ਨਹੀਂ ਬਦਲਣਾ ਚਾਹੁੰਦੇ ਤਾਂ ਇਸਨੂੰ ਖਾਲੀ ਛੱਡੋ।';
  const F_TIP_USER_EMAIL = 'ਸਿਰਫ਼ ਲੋੜੀਂਦਾ ਹੈ ਜੇਕਰ ਤੁਸੀਂ ਸੂਚਨਾਵਾਂ ਪ੍ਰਾਪਤ ਕਰਨਾ ਚਾਹੁੰਦੇ ਹੋ।';
  const F_TIP_NOTIFICATIONS = 'ਇਹ ਇੱਕ ਡਿਫਾਲਟ ਸੈਟਿੰਗ ਹੈ: ਤੁਸੀਂ ਹਰ ਮੁੱਦੇ ਲਈ ਇਸਨੂੰ ਬਦਲਣ ਦੇ ਯੋਗ ਹੋਵੋਗੇ।';
  const F_TIP_NOTIFICATIONS_DISABLED = 'ਨੋਟ: ਸੂਚਨਾਵਾਂ ਵਰਤਮਾਨ ਵਿੱਚ ਪ੍ਰਬੰਧਕ ਦੁਆਰਾ ਅਯੋਗ ਹਨ।';
  const F_TIP_DESCRIPTION = 'ਇਹ ਪ੍ਰੋਜੈਕਟ ਡੈਸ਼ਬੋਰਡ \'ਤੇ ਪ੍ਰਦਰਸ਼ਿਤ ਹੋਵੇਗਾ। ਇਸ ਨੂੰ ਮਾਰਕਡਾਊਨ ਸਿੰਟੈਕਸ ਨਾਲ ਪਾਰਸ ਕੀਤਾ ਜਾਵੇਗਾ।';

  const F_TIP_MAX_UPLOAD = 'ਹਰੇਕ ਅੱਪਲੋਡ ਕੀਤੀ ਫ਼ਾਈਲ ਇਸ ਆਕਾਰ ਤੋਂ ਵੱਧ ਨਹੀਂ ਹੋ ਸਕਦੀ।';
  const F_TIP_ALLOCATED_SPACE = 'ਉਪਭੋਗਤਾ ਇਸ ਸੀਮਾ \'ਤੇ ਪਹੁੰਚਣ ਤੋਂ ਬਾਅਦ ਹੋਰ ਫਾਈਲਾਂ ਨੂੰ ਅਪਲੋਡ ਨਹੀਂ ਕਰ ਸਕਦਾ ਹੈ।<br /><em>ਧਿਆਨ ਦਿਓ:</em> ਜੇਕਰ ਕਿਸੇ ਵੀ ਲੌਗ ਕੀਤੇ ਉਪਭੋਗਤਾ ਨੂੰ ਫਾਈਲਾਂ ਅਪਲੋਡ ਕਰਨ ਦੀ ਇਜਾਜ਼ਤ ਨਹੀਂ ਹੈ (ਇਹ ਡਿਫੌਲਟ ਸੈਟਿੰਗ ਨਹੀਂ ਹੈ), ਇਹ ਸੀਮਾ ਉਨ੍ਹਾਂ \'ਤੇ ਲਾਗੂ ਨਹੀਂ ਹੁੰਦੀ।';

  const F_TIP_ID_STATUS = '<b>ਟਿਪ:</b> ID ਨੂੰ ਬਦਲਣ ਵੇਲੇ ਸਾਵਧਾਨ ਰਹੋ, ਕਿਉਂਕਿ ਹਰੇਕ ਮੁੱਦਾ ਆਪਣੀ ਪੁਰਾਣੀ ਸਥਿਤੀ ID ਰੱਖਦਾ ਹੈ (ਸਿਵਾਏ ਜੇਕਰ ਇਹ ID ਹੁਣ ਮੌਜੂਦ ਨਹੀਂ ਹੈ: ਇਸ ਸਥਿਤੀ ਵਿੱਚ, ਡਿਫੌਲਟ ਸਥਿਤੀ ਵਰਤੀ ਜਾਵੇਗੀ)। ';
  const F_TIP_ID_LABEL = '<b>ਟਿਪ:</b> ਆਈਡੀ ਬਦਲਣ ਵੇਲੇ ਸਾਵਧਾਨ ਰਹੋ, ਕਿਉਂਕਿ ਇੱਕ ਮੁੱਦੇ ਦਾ ਹਰੇਕ ਲੇਬਲ ਆਪਣੀ ਪੁਰਾਣੀ ਆਈਡੀ ਰੱਖਦਾ ਹੈ (ਸਿਵਾਏ ਜੇਕਰ ਇਹ ID ਹੁਣ ਮੌਜੂਦ ਨਹੀਂ ਹੈ: ਇਸ ਸਥਿਤੀ ਵਿੱਚ, ਲੇਬਲ ਨੂੰ ਆਈਡੀ ਤੋਂ ਹਟਾ ਦਿੱਤਾ ਜਾਂਦਾ ਹੈ ਮੁੱਦਾ)।';
  const F_TIP_ID_GROUP = '<b>ਟਿਪ:</b> ID ਨੂੰ ਬਦਲਣ ਵੇਲੇ ਸਾਵਧਾਨ ਰਹੋ, ਕਿਉਂਕਿ ਹਰੇਕ ਉਪਭੋਗਤਾ ਆਪਣੀ ਪੁਰਾਣੀ ਗਰੁੱਪ ID ਰੱਖਦਾ ਹੈ (ਸਿਵਾਏ ਜੇਕਰ ਇਹ ID ਹੁਣ ਮੌਜੂਦ ਨਹੀਂ ਹੈ: ਇਸ ਸਥਿਤੀ ਵਿੱਚ, ਡਿਫਾਲਟ ਸਮੂਹ ਵਰਤਿਆ ਜਾਵੇਗਾ)। ';
  const F_TIP_CAPTCHA = 'ਉਨ੍ਹਾਂ ਕਾਰਵਾਈਆਂ ਦੀ ਚੋਣ ਕਰੋ ਜਿੱਥੇ ਲੌਗਇਨ ਨਾ ਕੀਤੇ ਉਪਭੋਗਤਾਵਾਂ ਲਈ ਕੈਪਚਾ ਦਿਖਾਇਆ ਜਾਵੇਗਾ।';
  const F_TIP_API_ACCESS = '<em>/database/config_api.php</em> ਫਾਈਲ ਵਿੱਚ API ਪਹੁੰਚ ਨੂੰ ਸੰਰਚਿਤ ਕਰੋ। ਵਧੇਰੇ ਜਾਣਕਾਰੀ ਲਈ API.md ਫਾਈਲ ਵੇਖੋ।';

  const F_API_ENABLE = 'ਏਪੀਆਈ ਨੂੰ ਯੋਗ ਕਰੋ';

  const HELP_MARKDOWN = '
  <h2>ਮਾਰਕਆਪਣਾ ਸੰਟੈਕਸ:</h2>

  <p>ਪੈਰੇ:</p>
<pre><code class="blank no-highlight">ਪੈਰਾਗ੍ਰਾਫਾਂ ਨੂੰ ਇੱਕ ਜਾਂ ਇੱਕ ਤੋਂ ਵੱਧ ਖਾਲੀ ਲਾਈਨਾਂ ਨਾਲ ਵੱਖ ਕੀਤਾ ਜਾਂਦਾ ਹੈ।
ਇਸ ਲਈ ਇਹ ਟੈਕਸਟ ਉਸੇ ਲਾਈਨ ਵਿੱਚ ਪ੍ਰਦਰਸ਼ਿਤ ਕੀਤਾ ਜਾਵੇਗਾ ਜੋ ਪਿਛਲੇ ਵਾਕਾਂਸ਼ ਵਿੱਚ ਹੈ, ਭਾਵੇਂ ਲਾਈਨ ਬ੍ਰੇਕ ਕਿਉਂ ਨਾ ਹੋਵੇ।

ਇੱਕ ਨਵਾਂ ਪੈਰਾਗ੍ਰਾਫ਼ ਬਣਾਏ ਬਿਨਾਂ ਇੱਕ ਨਵੀਂ ਲਾਈਨ ਸ਼ੁਰੂ ਕਰਨ ਲਈ:
ਲਾਈਨ ਬ੍ਰੇਕ ਤੋਂ ਪਹਿਲਾਂ 2 ਸਪੇਸ ਪਾਓ, ਜਿਵੇਂ ਕਿ ਇੱਥੇ।</code></pre>
  <p>ਜ਼ੋਰ:</p>
<pre><code class="blank no-highlight">*ਇਟਾਲਿਕ ਟੈਕਸਟ*
_Itatic ਪਾਠ ਦੁਬਾਰਾ_

**ਬੋਲਡ ਟੈਕਸਟ**
__ਬੋਲਡ ਟੈਕਸਟ ਦੁਬਾਰਾ__ </code></pre>

  <p>ਲਿੰਕਸ:</p>
<pre><code class="blank no-highlight">ਇਹ ਇਨਲਾਈਨ ਲਿੰਕ ਦੀ [ਇੱਕ ਉਦਾਹਰਨ](http://example.com) ਹੈ।
ਇਹ ਇੱਕ ਹੋਰ ਹੈ: &lt;http://example.com&gt;।</code></pre>

  <p>ਚਿੱਤਰ:</p>
<pre><code class="blank no-highlight">![ਮੈਂ ਇੱਕ ਚਿੱਤਰ ਹਾਂ।](http://example.com/image.png)</code></pre>

  <p>ਸਿਰਲੇਖ:</p>
<pre><code class="blank no-highlight"># ਸਿਖਰਲੇ ਪੱਧਰ ਦਾ ਸਿਰਲੇਖ
## ਦੂਜੇ ਪੱਧਰ ਦਾ ਸਿਰਲੇਖ
### ਤੀਜੇ ਪੱਧਰ ਦਾ ਸਿਰਲੇਖ
#### ਚੌਥੇ ਪੱਧਰ ਦਾ ਸਿਰਲੇਖ</code></pre>

  <p>ਸੂਚੀਆਂ:</p>
<pre><code class="blank no-highlight">- ਇੱਕ ਆਈਟਮ
* ਇੱਕ ਹੋਰ

1. ਪਹਿਲੀ ਆਈਟਮ
2. ਦੂਜੀ ਆਈਟਮ</code></pre>

  <p>ਬਲਾਕ ਕੋਟਸ:</p>
<pre><code class="blank no-highlight">> ਮੈਂ ਦੋ ਪੈਰਿਆਂ ਵਾਲਾ ਇੱਕ ਬਲਾਕਕੋਟ ਹਾਂ।
>
> ਮੈਂ ਦੂਜਾ ਪੈਰਾਗ੍ਰਾਫ ਹਾਂ।</code></pre>

  <p>ਕੋਡ ਬਲਾਕ:</p>
<pre><code class="blank no-highlight">ਇਹ ਇੱਕ `ਇਨਲਾਈਨ ਕੋਡ ਬਲਾਕ` ਹੈ।</code></pre>
<pre><code class="blank no-highlight"> &lt;?php echo "ਮੈਂ ਇੱਕ ਕੋਡ ਬਲਾਕ ਹਾਂ, ਕਿਉਂਕਿ ਮੈਂ ਇੰਡੈਂਟਡ ਹਾਂ
 4 ਸਪੇਸ ਦੇ ਨਾਲ"; ?&gt;</code></pre>
<pre><code class="blank no-highlight">``
&lt;?php echo "ਮੈਂ ਇੱਕ ਕੋਡ ਬਲਾਕ ਹਾਂ।"; ?&gt;
``

``php
&lt;?php echo "ਸਮਰਥਿਤ ਭਾਸ਼ਾਵਾਂ ਹਨ: bash, cs, ruby, diff, javascript, css, xml, http, java, php, python, sql, ini, perl, json, cpp, markdown, no-highlight"; ?&gt;
```</code></pre>
  ';


  private static $permissions = array(
  'home' => array(
  'title' => 'ਘਰ:',
  'description' => 'ਹੋਮ ਪੇਜ ਤੱਕ ਪਹੁੰਚ ਕਰ ਸਕਦਾ ਹੈ ਅਤੇ ਉਸਦੇ ਪ੍ਰੋਜੈਕਟਾਂ ਲਈ ਸਾਰੇ ਖੁੱਲੇ ਮੁੱਦਿਆਂ ਦੀ ਸੂਚੀ ਦੇਖ ਸਕਦਾ ਹੈ।'
  ),
  'dashboard' => array(
  'title' => 'ਡੈਸ਼ਬੋਰਡ:',
  'description' => 'ਪ੍ਰੋਜੈਕਟਾਂ ਦੇ ਡੈਸ਼ਬੋਰਡਾਂ ਤੱਕ ਪਹੁੰਚ ਕਰ ਸਕਦਾ ਹੈ।'
  ),
  'issues' =>  array(
  'title' => 'ਸਮੱਸਿਆ ਵੇਖੋ:',
  'description' => 'ਜਨਤਕ ਮੁੱਦੇ ਦੇਖ ਸਕਦੇ ਹੋ।'
  ),
  'private_issues' => array(
  'title' => 'ਨਿੱਜੀ ਮੁੱਦੇ ਵੇਖੋ:',
  'description' => 'ਨਿੱਜੀ ਵਜੋਂ ਟੈਗ ਕੀਤੇ ਮੁੱਦਿਆਂ ਨੂੰ ਦੇਖ ਸਕਦੇ ਹੋ।'
  ),
  'search' => array(
  'title' => 'ਖੋਜ:',
  'description' => 'ਸਮੱਸਿਆਵਾਂ ਜਾਂ ਉਪਭੋਗਤਾਵਾਂ ਦੀ ਖੋਜ ਕਰ ਸਕਦਾ ਹੈ।'
  ),
  'new_issue' => array(
  'title' => 'ਨਵਾਂ ਅੰਕ:',
  'description' => 'ਨਵਾਂ ਅੰਕ ਦਰਜ ਕਰ ਸਕਦਾ ਹੈ।'
  ),
  'edit_issue' => array(
  'title' => 'ਸੰਪਾਦਨ ਮੁੱਦੇ:',
  'description' => 'ਸਾਰੇ ਮੁੱਦਿਆਂ ਦੇ ਟੈਕਸਟ ਨੂੰ ਸੰਪਾਦਿਤ ਕਰ ਸਕਦਾ ਹੈ ਅਤੇ ਉਨ੍ਹਾਂ ਨੂੰ ਮਿਟਾ ਸਕਦਾ ਹੈ।'
  ),
  'update_issue' => array(
  'title' => 'ਅਪਡੇਟ ਮੁੱਦੇ:',
  'description' => 'ਸਮੱਸਿਆ ਨੂੰ ਅੱਪਡੇਟ ਕਰ ਸਕਦਾ ਹੈ: ਸਥਿਤੀ ਬਦਲੋ, ਲੇਬਲ ਜੋੜੋ, ਬੰਦ ਕਰੋ ਅਤੇ ਦੁਬਾਰਾ ਖੋਲ੍ਹੋ, ...'
  ),
  'post_comment' => array(
  'title' => 'ਟਿੱਪਣੀ ਪੋਸਟ ਕਰੋ:',
  'description' => 'ਟਿੱਪਣੀ ਪੋਸਟ ਕਰ ਸਕਦੇ ਹੋ।'
  ),
  'edit_comment' => array(
  'title' => 'ਟਿੱਪਣੀਆਂ ਨੂੰ ਸੋਧੋ:',
  'description' => 'ਸਾਰੀਆਂ ਟਿੱਪਣੀਆਂ ਨੂੰ ਸੰਪਾਦਿਤ ਕਰ ਸਕਦਾ ਹੈ (ਉਪਭੋਗਤਾ ਫਿਰ ਵੀ ਆਪਣੀਆਂ ਟਿੱਪਣੀਆਂ ਨੂੰ ਸੋਧ ਸਕਦੇ ਹਨ)।'
  ),
  'view_user' => array(
  'title' => 'ਉਪਭੋਗਤਾ ਪ੍ਰੋਫ਼ਾਈਲ:',
  'description' => 'ਸਾਰੇ ਯੂਜ਼ਰ ਪ੍ਰੋਫਾਈਲ ਦੇਖ ਸਕਦੇ ਹੋ।'
  ),
  'upload' => array(
  'title' => 'ਇੱਕ ਫਾਈਲ ਪੋਸਟ ਕਰੋ:',
  'description' => 'ਕਿਸੇ ਟਿੱਪਣੀ ਜਾਂ ਨਵੇਂ ਮੁੱਦੇ ਨਾਲ ਫਾਈਲਾਂ ਨੱਥੀ ਕਰ ਸਕਦਾ ਹੈ।'
  ),
  'view_upload' => array(
  'title' => 'ਅੱਪਲੋਡ ਦੇਖੋ:',
  'description' => 'ਸਭ ਅੱਪਲੋਡ ਕੀਤੀਆਂ ਫਾਈਲਾਂ ਤੱਕ ਪਹੁੰਚ ਕਰ ਸਕਦਾ ਹੈ।'
  ),
  'settings' => array(
  'title' => 'ਸੈਟਿੰਗ ਬਦਲੋ:',
  'description' => 'ਇਸ ਪੰਨੇ ਨੂੰ ਐਕਸੈਸ ਕਰ ਸਕਦਾ ਹੈ ਅਤੇ ਸਾਰੀਆਂ ਗਲੋਬਲ ਸੈਟਿੰਗਾਂ ਨੂੰ ਸੋਧ ਸਕਦਾ ਹੈ।'
  ),
  'signup' => array(
  'title' => 'ਸਾਈਨ ਅੱਪ ਕਰੋ:',
  'description' => 'ਸਾਈਨ ਅੱਪ ਕਰ ਸਕਦੇ ਹੋ।'
  ),
  'view_errors' => array(
  'title' => 'ਘਾਤਕ ਗਲਤੀਆਂ ਵੇਖੋ:',
  'description' => 'ਘਾਤਕ ਗਲਤੀਆਂ ਦਾ ਵੇਰਵਾ ਦੇਖ ਸਕਦਾ ਹੈ।'
  )
  );

  ਜਨਤਕ ਸਥਿਰ ਫੰਕਸ਼ਨ ਅਨੁਮਤੀਆਂ ($id, $type = 'ਵਰਣਨ') {
  ਵਾਪਸੀ ਸਵੈ::$ ਅਨੁਮਤੀਆਂ[$id][$type];
  }

  ਪ੍ਰਾਈਵੇਟ ਸਥਿਰ $ਸੈਟਿੰਗ = ਐਰੇ(
  'validate_url' => 'url ਵੈਧ ਨਹੀਂ ਹੈ।',
  'validate_email' => 'ਈਮੇਲ ਵੈਧ ਨਹੀਂ ਹੈ।',
  'private_label_removed' => 'ਤੁਸੀਂ ਪ੍ਰਾਈਵੇਟ ਲੇਬਲ ਨੂੰ ਹਟਾ ਨਹੀਂ ਸਕਦੇ ਜਾਂ ਇਸਦੀ ID ਨੂੰ ਬਦਲ ਨਹੀਂ ਸਕਦੇ, ਪਰ ਤੁਸੀਂ ਇਸਦਾ ਨਾਮ ਬਦਲ ਸਕਦੇ ਹੋ।',
  'default_status_removed' => 'ਤੁਸੀਂ ਡਿਫਾਲਟ ਸਥਿਤੀ ਨੂੰ ਹਟਾ ਨਹੀਂ ਸਕਦੇ ਹੋ ਜਾਂ ਇਸਦੀ ID ਨੂੰ ਬਦਲ ਨਹੀਂ ਸਕਦੇ ਹੋ, ਪਰ ਤੁਸੀਂ ਇਸਦਾ ਨਾਮ ਬਦਲ ਸਕਦੇ ਹੋ।',
  'default_group_removed' => 'ਤੁਸੀਂ ਡਿਫਾਲਟ ਗਰੁੱਪ ਨੂੰ ਹਟਾ ਨਹੀਂ ਸਕਦੇ ਜਾਂ ਇਸਦੀ ਆਈਡੀ ਨਹੀਂ ਬਦਲ ਸਕਦੇ, ਪਰ ਤੁਸੀਂ ਇਸਦਾ ਨਾਮ ਬਦਲ ਸਕਦੇ ਹੋ।',
  'default_group_superuser_removed' => 'ਤੁਸੀਂ ਸੁਪਰਯੂਜ਼ਰ ਗਰੁੱਪ ਨੂੰ ਹਟਾ ਨਹੀਂ ਸਕਦੇ ਜਾਂ ਇਸਦੀ ਆਈਡੀ ਨਹੀਂ ਬਦਲ ਸਕਦੇ, ਪਰ ਤੁਸੀਂ ਇਸਦਾ ਨਾਮ ਬਦਲ ਸਕਦੇ ਹੋ।',
  'validate_same_username' => 'ਚੇਤਾਵਨੀ: ਦੋ ਉਪਭੋਗਤਾਵਾਂ ਦਾ ਇੱਕੋ ਉਪਭੋਗਤਾ ਨਾਮ ਹੈ।',
  'validate_same_project_name' => 'ਦੋ ਪ੍ਰੋਜੈਕਟਾਂ ਦਾ ਇੱਕੋ ਨਾਮ ਨਹੀਂ ਹੋ ਸਕਦਾ। ਇੱਕ ਦਾ ਨਾਮ ਆਪਣੇ ਆਪ ਬਦਲ ਦਿੱਤਾ ਗਿਆ ਹੈ।',
  'language_modified' => 'ਇਸ ਪੰਨੇ ਨੂੰ ਨਵੀਂ ਭਾਸ਼ਾ ਵਿੱਚ ਦੇਖਣ ਲਈ ਤਾਜ਼ਾ ਕਰੋ।'
  );

  ਜਨਤਕ ਸਥਿਰ ਫੰਕਸ਼ਨ ਸੈਟਿੰਗ ($id) {
  ਵਾਪਸੀ ਸਵੈ::$ ਸੈਟਿੰਗਾਂ[$id];
  }

  ਪ੍ਰਾਈਵੇਟ ਸਥਿਰ $ਗਲਤੀਆਂ = ਐਰੇ(
  E_ERROR => 'ਘਾਤਕ ਗਲਤੀ',
  E_WARNING => 'ਚੇਤਾਵਨੀ',
  E_PARSE => 'ਪਾਰਸ ਗਲਤੀ',
  E_NOTICE => 'ਨੋਟਿਸ',
  E_STRICT => 'ਸਲਾਹ',
  E_DEPRECATED => 'ਨਾਪਸੰਦ','ਡਿਫੌਲਟ' => 'ਗਲਤੀ'
  );
  ਜਨਤਕ ਸਥਿਰ ਫੰਕਸ਼ਨ ਤਰੁਟੀਆਂ ($ ਨਹੀਂ) {
  ਵਾਪਸੀ (isset(self::$errors[$no]))? self::$errors[$no] : self::$errors['default'];
  }
}

?>