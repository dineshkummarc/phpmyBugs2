<?php

class Trad {

		# শব্দ

  const W_ISSUE = 'ইস্যু';
  const W_OPEN = 'খোলা';
  const W_OPENED = 'খোলা';
  const W_CLOSED = 'বন্ধ';
  const W_REOPENED = 'পুনরায় খোলা';
  const W_COMMENTED = 'মন্তব্য করা';
  const W_NOBODY = 'কেউ';
  const W_SOMEONE = 'কেউ';
  const W_ENABLED = 'সক্ষম';
  const W_DISABLED = 'অক্ষম';
  const W_NOTFOUND = 'পাওয়া যায়নি';
  const W_FORBIDDEN = 'নিষিদ্ধ';
  const W_MENU = 'মেনু';

  const W_EXAMPLE = 'উদাহরণ';
  const W_HEX = 'হেক্স';
  const W_RENDERING = 'রেন্ডারিং';
  const W_ID = 'ID';
  const W_DISPLAY_NAME = 'প্রদর্শন নাম';

  const W_SECONDE = 'সেকেন্ড';
  const W_MINUTE = 'মিনিট';
  const W_HOUR = 'ঘন্টা';
  const W_DAY = 'দিন';
  const W_WEEK = 'সপ্তাহ';
  const W_MONTH = 'মাস';
  const W_YEAR = 'বছর';
  const W_DECADE = 'দশক';
  const W_SECONDE_P = 'সেকেন্ড';
  const W_MINUTE_P = 'মিনিট';
  const W_HOUR_P = 'ঘন্টা';
  const W_DAY_P = 'দিন';
  const W_WEEK_P = 'সপ্তাহ';
  const W_MONTH_P = 'মাস';
  const W_YEAR_P = 'বছর';
  const W_DECADE_P = 'দশক';

  const W_PREVIOUS = 'পূর্ববর্তী';
  const W_NEXT = 'পরবর্তী';
  const W_MORE = 'আরও';
  const W_CURRENT = 'পৃষ্ঠা %nb1% এর %nb2%';

  const W_NOT_LOGGED = 'লগ ইন করা হয়নি';

  const W_SUSPENSION = '…';
  const W_EXTRACT = '"%text%"';

  const W_USER = 'ব্যবহারকারী';
  const W_DEVELOPPER = 'ডেভেলপার';
  const W_SUPERUSER = 'সুপার ব্যবহারকারী';
  const W_S_NEW = 'নতুন';
  const W_S_CONFIRMED = 'নিশ্চিত';
  const W_S_ASSIGNED = '%user% কে বরাদ্দ করা হয়েছে';
  const W_S_RESOLVED = 'সমাধান করা';
  const W_S_REJECTED = 'প্রত্যাখ্যাত';
  const W_L_URGENT = 'জরুরী';
  const W_L_IMPROVEMENT = 'উন্নতি';
  const W_L_PRIVATE = 'ব্যক্তিগত';

  const W_PROFILEPIC = 'প্রোফাইল ছবি';

  const W_RSS = 'RSS ফিড';
  const W_VERSION = 'সংস্করণ';

  const W_CAPTCHA_IMAGE = 'ক্যাপচা ইমেজ';
  const W_CAPTCHA_REFRESH = 'ছবি রিফ্রেশ করুন';
  const W_CAPTCHA_INPUT = 'পাঠ্য টাইপ করুন:';

  # ক্রিয়াপদ

  const V_UPDATE = 'আপডেট';
  const V_UPDATE_DETAILS = 'বিশদ আপডেট করুন';
  const V_UPDATE_CONTENT = 'কন্টেন্ট আপডেট করুন';
  const V_UPDATE_AND = 'আপডেট & %adjective%';
  const V_CANCEL = 'বাতিল';
  const V_PREVIEW = 'প্রিভিউ';
  const V_COMMENT = 'মন্তব্য';
  const V_SUBMIT = 'জমা দিন';
  const V_SELECT_FILE = 'একটি ফাইল নির্বাচন করুন...';
  const V_UPLOADING = 'আপলোড হচ্ছে…';
  const V_SAVE_CONFIG = 'সেটিংস সংরক্ষণ করুন';
  const V_APPLY = 'প্রয়োগ করুন';
  const V_EDIT = 'সম্পাদনা';
  const V_SIGNUP = 'সাইন আপ';
  const V_LOGIN = 'লগ ইন';
  const V_CONTINUE = 'চালিয়ে যান';
  const V_REMOVE_ISSUE = 'ইস্যু মুছুন';
  const V_CLOSE = 'ক্লোজ';
  const V_REOPEN = 'পুনরায় খুলুন';
  const V_EXPORT = 'কাঁচা তথ্য রপ্তানি করুন';

  # বাক্যাংশ

  const S_NOLABEL = '–';
  const S_NODEPENDENCY = '–';
  const S_COMMENT_LEAVE = 'একটি মন্তব্য করুন:';
  const S_AGO = '%duration% %pediod% ago';
  const S_ISSUE_ABOUT = 'এই সমস্যা সম্পর্কে:';
  const S_UPLOAD_ADD = 'একটি ফাইল সংযুক্ত করুন:';
  const S_WELCOME = 'স্বাগত, %user%';
  const S_NEVER = 'কখনও না';
  const S_ME = 'আমি যে বিষয়গুলিতে অবদান রেখেছি তার আপডেটগুলি';
  const S_ALWAYS = 'প্রতিটি আপডেটের';
  const S_START_NOTIF = 'নতুন আপডেট সম্পর্কে অবহিত হন';
  const S_STOP_NOTIF = 'আর আপডেট জানানো হবে না';
  const S_NOTFOUND = 'আপনি যে পৃষ্ঠাটি খুঁজছেন সেটি আর বিদ্যমান নেই...';
  const S_FORBIDDEN = 'আপনি এই পৃষ্ঠায় প্রবেশ করতে পারবেন না। চালিয়ে যেতে লগ ইন/আউট করুন.';

  const S_VIEW_PARTICIPATION = 'তার অংশগ্রহণ দেখুন।';
  const S_VIEW_STATUS = 'সমস্যা দেখুন “%status%”।';

  const S_ISSUE_CREATED = '% user% %time%' দ্বারা;
  const S_ISSUE_UPDATED = '%adj% by %user% %time%।';
  const S_ISSUE_STATUS_UPDATED = 'স্থিতি %status%-এ %user% %time% দ্বারা আপডেট করা হয়েছে।';

  const S_RSS_ISSUE_UPDATED = '%adj% by %user%।';
  const S_RSS_ISSUE_STATUS_UPDATED = 'স্থিতি %user% দ্বারা "%status%" এ আপডেট করা হয়েছে।';

  const S_INTRO_INSTALL = 'মনে হচ্ছে আপনি প্রথমবার phpmyBugs চালাচ্ছেন! অনুগ্রহ করে এটি কনফিগার করুন:';
  const S_FIRST_ISSUE_TITLE = 'কেমন আছো, কুমড়ো?';
  const S_FIRST_ISSUE = 'আমি আপনার প্রথম সমস্যা! লগ করার পর, আপনি আমাকে মুছে ফেলতে সক্ষম হবেন।';

  const S_NO_USER = 'কোন ব্যবহারকারী আপনার অনুরোধের সাথে মেলে না।';
  const S_NO_ISSUE = 'কোন সমস্যা আপনার অনুরোধের সাথে মেলে না।';
  const S_MATCHING_ISSUES = '%nb% ম্যাচিং সমস্যা';
  const S_NO_ACTIVITY = 'কোন সাম্প্রতিক কার্যকলাপ নেই।';
  const S_NO_UPLOAD = 'কোন আপলোড নেই।';
  const S_SIZE_REMAINING = 'অনুমোদিত %total%-এ %remain% বাকি।';
  const S_NO_PROJECT = 'কোন প্রকল্প নেই।';

  const S_SEARCH = '#12, @user, words…';
  const S_COPYRIGHT = '%name% দ্বারা চালিত।';
  const S_UPGRADE = '<a href="https://github.com/bugtrackr/Nireus/releases/latest">GitHub</a> থেকে <a href="https://bugtrackr.github.io-তে সর্বশেষ সংস্করণ পান /wiki/upgrade/">আপগ্রেড</a>.';

  const S_LAST_UPDATES = 'শেষ আপডেট...';

  const S_STAY_LOGGEDIN = 'আমাকে লগ ইন রাখুন';

  const S_DEFAULT_DEFPROJ_DESC = 'এটি ডিফল্ট প্রকল্প যেখানে প্রত্যেকেরই অ্যাক্সেস আছে।';
  const S_DEFAULT_2NDPROJ_DESC = 'এটি আপনার ২য় প্রজেক্ট হতে পারে যেখানে শুধুমাত্র নিবন্ধিত ব্যবহারকারীদের সমস্যা পোস্ট করার অনুমতি দেওয়া হয়।';

  # সতর্কতা

  const A_ERROR_DIRECTORY = '<strong>ত্রুটি:</strong> "%name%" ডিরেক্টরি তৈরি করতে অক্ষম।';
  const A_ERROR_FILE = '<strong>ত্রুটি:</strong> ফাইলটি পড়তে অক্ষম “%name%”।';
  const A_ERROR_FILE_WRITE = '<strong>ত্রুটি:</strong> ফাইল “%name%” লিখতে অক্ষম।';
  const A_ERROR_FATAL = 'দুঃখিত, কিছু ভুল হয়েছে। এই সমস্যা চলতে থাকলে অনুগ্রহ করে একজন প্রশাসকের সাথে যোগাযোগ করুন।';
  const A_ERROR = '<strong>%title%:</strong><br /><br />%message%<br /><br />ফাইল “<strong>%file%</strong>” অন লাইন < strong>%line%</strong>.';

  const A_SUCCESS_INSTALL = '<strong>সম্পন্ন:</strong> phpmyBugs এখন সম্পূর্ণরূপে কনফিগার করা হয়েছে।';
  const A_ERROR_INSTALL = '<strong>ত্রুটি:</strong> phpmyBugs ইতিমধ্যেই কনফিগার করা আছে। আপনি যদি কনফিগারেশন রিসেট করতে চান তাহলে অনুগ্রহ করে কনফিগারেশন ফাইলটি সরিয়ে দিন।';
  const A_MODIF_SAVED = 'পরিবর্তন সংরক্ষিত হয়েছে।';

  const A_ERROR_FORM = 'একটি ত্রুটি ঘটেছে। অনুগ্রহ করে আবার ফর্ম পাঠান।';
  const A_ERROR_TOKEN = 'ভুল টোকেন। অনুগ্রহ করে আবার ফর্ম পাঠান।';
  const A_ERROR_EMPTY = 'আপনাকে একটি ব্যবহারকারীর নাম এবং একটি পাসওয়ার্ড উল্লেখ করতে হবে।';
  const A_ERROR_SAME_USERNAME = 'এই ব্যবহারকারীর নাম উপলব্ধ নেই।';
  const A_SUCCESS_SIGNUP = '<strong>সম্পন্ন:</strong> আপনি এখন লগ ইন করতে পারেন।';

  const A_CONFIRM_DELETE_COMMENT = 'আপনি কি এই মন্তব্যটি মুছে দেওয়ার বিষয়ে নিশ্চিত?';
  const A_SUCCESS_DELETE_COMMENT = 'মন্তব্যটি মুছে ফেলা হয়েছে।';
  const A_CONFIRM_DELETE_ISSUE = 'আপনি কি নিশ্চিত যে আপনি এই সমস্যাটি মুছে ফেলতে চান?';
  const A_SUCCESS_DELETE_ISSUE = 'ইস্যুটি মুছে ফেলা হয়েছে।';
  const A_CONFIRM_DELETE_UPLOAD = 'আপনি কি নিশ্চিত যে আপনি এই ফাইলটি মুছে ফেলতে চান?';
  const A_CONFIRM_DELETE_PROJECT = 'আপনি কি এই প্রকল্পটি মুছে ফেলার বিষয়ে নিশ্চিত? সমস্ত সংশ্লিষ্ট বিষয় হারিয়ে যাবে।';

  const A_LOGGED = 'আপনি এখন সিস্টেমে লগ ইন করেছেন।';
  const A_LOGGED_OUT = 'আপনি এখন সিস্টেম থেকে লগ আউট হয়ে গেছেন।';
  const A_ERROR_CONNEXION = '<strong>ত্রুটি:</strong> ভুল ব্যবহারকারীর নাম বা পাসওয়ার্ড।';
  const A_ERROR_CONNEXION_WAIT = '<strong>ত্রুটি:</strong> ভুল ব্যবহারকারীর নাম বা পাসওয়ার্ড। আবার চেষ্টা করার আগে অনুগ্রহ করে %duration% %period% অপেক্ষা করুন।';
  const A_ERROR_LOGIN_WAIT = 'আবার চেষ্টা করার আগে অনুগ্রহ করে %duration% %period% অপেক্ষা করুন। এটি দূষিত আক্রমণের বিরুদ্ধে সুরক্ষা।';

  const A_ERROR_UPLOAD = 'একটি ত্রুটি ঘটেছে। আবার চেষ্টা করুন.';
  const A_ERROR_UPLOAD_SIZE = 'ফাইল সর্বোচ্চ অনুমোদিত আকার অতিক্রম করেছে (%nb% সর্বোচ্চ)।';
  const A_ERROR_UPLOAD_FULL = 'এই ফাইলটি আপলোড করার জন্য আপনার কাছে পর্যাপ্ত ডিস্ক স্পেস নেই : %nb% বাকি।';

  const A_PLEASE_LOGIN_ISSUES = 'সমস্যা দেখতে লগ ইন করুন।';
  const A_PLEASE_LOGIN_COMMENT = 'অনুগ্রহ করে একটি মন্তব্য পোস্ট করতে লগ ইন করুন। এখনও কোন অ্যাকাউন্ট? একটি তৈরি করুন: এটি বিনামূল্যে এবং সত্যিই দ্রুত!';
  const A_PLEASE_LOGIN_ISSUE = 'একটি সমস্যা জমা দিতে লগ ইন করুন। এখনও কোন অ্যাকাউন্ট? একটি তৈরি করুন: এটি বিনামূল্যে এবং সত্যিই দ্রুত!';
  const A_SHOULD_LOGIN = 'যদি আপনার একটি অ্যাকাউন্ট থাকে, অনুগ্রহ করে লগ ইন করুন। না থাকলে, একটি তৈরি করার কথা বিবেচনা করুন: এটি বিনামূল্যে এবং সত্যিই দ্রুত!';

  const A_IE = 'আপনার ব্রাউজার অপ্রচলিত: <a href="https://www.browser-update.org/en/update.html">আপগ্রেড বা পরিবর্তন করুন</a>।';

  # মেইল

  const M_NEW_COMMENT_O = '[%title% — %project% — ইস্যু #%id%] নতুন মন্তব্য';
  const M_NEW_COMMENT = 'হাই, %ব্যবহারকারীর নাম%!

সমস্যা #%id% — “%summary%” এইমাত্র %by% দ্বারা মন্তব্য করা হয়েছে। আপনি এখানে নতুন মন্তব্য পড়তে পারেন:
  %url%।

আপনি যদি এই বিষয়ে আরও বিজ্ঞপ্তি পেতে না চান তবে উপরের লিঙ্কের মাধ্যমে একটি বিকল্প উপলব্ধ (লগ করার পরে)।

-----
এটি একটি স্বয়ংক্রিয় ইমেল, দয়া করে উত্তর দেবেন না।
  ';

  const M_NEW_ISSUE_O = '[%title% — %project%] নতুন সমস্যা';
  const M_NEW_ISSUE = 'হাই, %ব্যবহারকারীর নাম%!

ইস্যুটি #%id% — “%summary%” এইমাত্র %by% দ্বারা জমা দেওয়া হয়েছে। আপনি এটি এখানে পড়তে পারেন:
  %url%।

আপনি যদি এই বিষয়ে আরও বিজ্ঞপ্তি পেতে না চান, তাহলে উপরের লিঙ্কের মাধ্যমে একটি বিকল্প উপলব্ধ (লগ করার পরে)।

-----
এটি একটি স্বয়ংক্রিয় ইমেল, দয়া করে উত্তর দেবেন না।
  ';

  # শিরোনাম

 const T_INSTALLATION = 'ইনস্টলেশন';
  const T_SETTINGS = 'সেটিংস';
  const T_GLOBAL_SETTINGS = 'গ্লোবাল সেটিংস';
  const T_APPEARANCE = 'আবির্ভাব';
  const T_ISSUES = 'ইস্যুস';
  const T_GROUPS = 'গ্রুপ';
  const T_USERS = 'ব্যবহারকারী';
  const T_PERMISSIONS = 'অনুমতি';
  const T_ENABLE_CAPTCHA = 'ক্যাপচা পরিচালনা করুন';
  const T_CAPTCHA = 'ক্যাপচা';
  const T_BROWSE_ISSUES = 'সমস্যা ব্রাউজ করুন';
  const T_BROWSE_ALL_ISSUES = 'সমস্ত সমস্যা ব্রাউজ করুন';
  const T_ALL_ISSUES_DESCRIPTION = 'এটি সমস্ত প্রকল্পের জন্য উন্মুক্ত সমস্যা';
  const T_NEW_ISSUE = 'নতুন সমস্যা';
  const T_ALL_ISSUES = 'সমস্ত সমস্যা';
  const T_PROJECTS = 'প্রকল্প';
  const T_DASHBOARD = 'ড্যাশবোর্ড';
  const T_LAST_UPDATES = 'শেষ আপডেট';
  const T_LAST_ACTIVITY = 'শেষ কার্যকলাপ';
  const T_UPLOADS = 'আপলোড';
  const T_SEARCH = 'অনুসন্ধান';
  const T_LINK_CONTACT = 'আমাদের সাথে যোগাযোগ করুন';
  const T_LINK_LEGALNOTICE = 'আইনি নোটিশ';
  const T_LINK_PRIVACYPOLICY = 'গোপনীয়তা নীতি';
  const T_API_SETTINGS = 'API';
  const T_API_ENABLE_SETTINGS = 'এপিআই পরিচালনা করুন';
  const T_API_ACCESS_SETTINGS = 'API অ্যাক্সেস';
  const T_INFO = 'তথ্য';

  # ফর্ম

  const F_USERNAME = 'ব্যবহারকারীর নাম:';
  const F_PASSWORD = 'পাসওয়ার্ড:';
  const F_USERNAME2 = 'ব্যবহারকারীর নাম';
  const F_PASSWORD2 = 'পাসওয়ার্ড';
  const F_NAME = 'নাম:';
  const F_URL = 'Url:';
  const F_URL_CDN = 'CDN Url:';
  const F_URL_REWRITING = 'ইউআরএল পুনর্লিখন:';
  const F_INTRO = 'পরিচয়:';
  const F_DESCRIPTION = 'বর্ণনা:';
  const F_EMAIL = 'ইমেল:';
  const F_LINK_CONTACT = 'বাহ্যিক যোগাযোগ পৃষ্ঠার লিঙ্ক (খালি রাখা যেতে পারে):';
  const F_LINK_LEGALNOTICE = 'আইনি নোটিশের লিঙ্ক (খালি রাখা যেতে পারে):';
  const F_LINK_PRIVACYPOLICY = 'গোপনীয়তা নীতির লিঙ্ক (খালি রাখা যেতে পারে):';
  const F_MAX_UPLOAD = 'আপলোড প্রতি সর্বোচ্চ আকার:';
  const F_ALLOCATED_SPACE = 'ব্যবহারকারী প্রতি বরাদ্দ স্থান:';
  const F_GROUP = 'গ্রুপ:';
  const F_NOTIFICATIONS = 'বিজ্ঞাপন করুন:';
  const F_PROJECT_X = 'প্রকল্প “%name%”:';
  const F_LANGUAGE = 'ভাষা:';
  const F_LOGS = 'লগস:';

  const F_ISSUES_PAGE = 'প্রতি পৃষ্ঠায় সমস্যা:';
  const F_ISSUES_PAGE_SEARCH = 'প্রতি পৃষ্ঠায় সমস্যা (অনুসন্ধান):';
  const F_PREVIEW_ISSUE = 'প্রিভিউ দৈর্ঘ্য (সমস্যা):';
  const F_PREVIEW_SEARCH = 'প্রিভিউ দৈর্ঘ্য (অনুসন্ধান):';
  const F_PREVIEW_PROJECT = 'প্রিভিউ দৈর্ঘ্য (প্রকল্প):';
  const F_LAST_EDITS = 'ড্যাশবোর্ডে প্রদর্শিত সমস্যার সংখ্যা:';
  const F_LAST_ACTIVITY = 'ব্যবহারকারী পৃষ্ঠাগুলিতে প্রদর্শিত সমস্যার সংখ্যা:';
  const F_THEME = "থিম";
  const F_TIP_THEME = ".css ফাইলটি এখানে রাখুন";

  const F_ADD_PROJECT = 'নতুন প্রকল্প';
  const F_ADD_COLOR = 'নতুন রঙ';
  const F_ADD_STATUS = 'নতুন অবস্থা';
  const F_ADD_LABEL = 'নতুন লেবেল';
  const F_ADD_GROUP = 'নতুন গ্রুপ';
  const F_ADD_USER = 'নতুন ব্যবহারকারী';

  const F_SORT_BY = 'এভাবে সাজান:';
  const F_SORT_ID = 'ID';
  const F_SORT_MOD = 'শেষ আপডেট';
  const F_SORT_DESC = 'উতরাই';
  const F_SORT_ASC = 'আরোহী';
  const F_FILTER_STATUSES = 'ফিল্টার স্ট্যাটাস:';
  const F_FILTER_STATES = 'ফিল্টার স্টেটস:';
  const F_FILTER_LABELS = 'ফিল্টার লেবেল:';
  const F_FILTER_USERS = 'ব্যবহারকারীদের ফিল্টার করুন:';
  const F_FILTER_MILESTONE = 'ফিল্টার মাইলস্টোন:';

  const F_WRITE = 'লিখুন:';
  const F_SUMMARY = 'সারাংশ';
  const F_CONTENT = 'সামগ্রী';

  const F_STATUS = 'স্থিতি:';
  const F_RELATED = 'সম্পর্কিত:';
  const F_LABELS2 = 'লেবেল:';
  const F_MILESTONE = 'মাইলস্টোন:';

  const F_GENERAL_SETTINGS = 'সাধারণ সেটিংস:';
  const F_PROJECTS = 'প্রকল্প:';
  const F_DATABASE = 'ডাটাবেস:';
  const F_UPLOADS = 'আপলোড:';
  const F_COLORS = 'রঙ পরিচালনা করুন:';
  const F_DISPLAY = 'প্রদর্শন পরিচালনা করুন :';
  const F_STATUSES = 'স্থিতিগুলি পরিচালনা করুন:';
  const F_LABELS = 'লেবেল পরিচালনা করুন:';
  const F_GROUPS = 'গ্রুপ পরিচালনা করুন:';
  const F_PERMISSIONS = 'অনুমতি পরিচালনা করুন:';
  const F_USERS = 'ব্যবহারকারীদের পরিচালনা করুন:';

  const F_INVALID_CAPTCHA = 'আপনি যে ক্যাপচা লিখেছেন তা ভুল ছিল। আবার চেষ্টা করুন.';

  const F_TIP_NAME = 'এটি প্রতিটি পৃষ্ঠার হেডারে প্রদর্শিত হবে।';
  const F_TIP_URL_REWRITING = 'ইউআরএল পুনর্লিখন নিষ্ক্রিয় করতে এই ক্ষেত্রটি খালি রাখুন। অন্যথায়, এটিতে ডোমেন নামের সাপেক্ষে phpmyBugs ফোল্ডারের পাথ ("/" দিয়ে শুরু এবং শেষ হওয়া উচিত।';
  const F_TIP_URL_CDN = 'CDN নিষ্ক্রিয় করতে এই ক্ষেত্রটি খালি রাখুন। অন্যথায়, এতে আপনার CDN এর URL থাকতে হবে (উদাহরণস্বরূপ <em>https://cdn.rawgit.com/bugtrackr/Nireus/master/</em>, এটি ব্যবহার করতে দ্বিধা বোধ করুন)। আপনার CDN এ <em>/public</em> ফোল্ডার থেকে সমস্ত ফাইল হোস্ট করা নিশ্চিত করুন৷';
  const F_TIP_INTRO = 'এটি হোম পেজে প্রদর্শিত হবে। এটি মার্কডাউন সিনট্যাক্সের সাথে পার্স করা হবে। দ্রষ্টব্য: যদি "%name%" নামে শুধুমাত্র একটি প্রকল্প থাকে, তবে হোম পেজটি স্বয়ংক্রিয়ভাবে প্রকল্প ড্যাশবোর্ডে পুনঃনির্দেশিত হয় এবং এই পাঠ্যটি প্রদর্শিত হবে না।';
  const F_TIP_EMAIL = 'ইমেল বিজ্ঞপ্তি নিষ্ক্রিয় করতে এই ক্ষেত্রটি খালি রাখুন। অন্যথায়, ইমেল বিজ্ঞপ্তি পাঠানোর সময় এই ঠিকানাটি প্রেরক হিসাবে ব্যবহার করা হবে।';
  const F_TIP_PASSWORD = 'আপনি যদি পাসওয়ার্ড পরিবর্তন করতে না চান তাহলে এটি খালি রাখুন।';
  const F_TIP_USER_EMAIL = 'প্রয়োজন শুধুমাত্র যদি আপনি বিজ্ঞপ্তি পেতে চান।';
  const F_TIP_NOTIFICATIONS = 'এটি একটি ডিফল্ট সেটিং: আপনি প্রতিটি সমস্যার জন্য এটি পরিবর্তন করতে সক্ষম হবেন।';
  const F_TIP_NOTIFICATIONS_DISABLED = 'দ্রষ্টব্য: বিজ্ঞপ্তিগুলি বর্তমানে প্রশাসক দ্বারা নিষ্ক্রিয়।';
  const F_TIP_DESCRIPTION = 'এটি প্রজেক্ট ড্যাশবোর্ডে প্রদর্শিত হবে। এটাকে মার্কডাউন সিনট্যাক্স দিয়ে পার্স করা হবে।';

  const F_TIP_MAX_UPLOAD = 'প্রতিটি আপলোড করা ফাইল এই আকারের বেশি হতে পারে না।';
  const F_TIP_ALLOCATED_SPACE = 'একজন ব্যবহারকারী এই সীমায় পৌঁছে গেলে অন্য ফাইল আপলোড করতে পারবে না।<br /><em>মনোযোগ:</em> যদি কোনো লগ-ইন ব্যবহারকারীকে ফাইল আপলোড করার অনুমতি না দেওয়া হয় (এটি ডিফল্ট সেটিং নয়), এই সীমা তাদের জন্য প্রযোজ্য নয়।';

  const F_TIP_ID_STATUS = '<b>টিপ:</b> আইডি পরিবর্তন করার সময় সতর্কতা অবলম্বন করুন, কারণ প্রতিটি সমস্যা তার পুরানো স্ট্যাটাস আইডি রাখে (যদি এই আইডিটি আর বিদ্যমান না থাকে তবে এই ক্ষেত্রে, ডিফল্ট স্ট্যাটাস ব্যবহার করা হবে)। ';
  const F_TIP_ID_LABEL = '<b>টিপ:</b> আইডি পরিবর্তন করার সময় সতর্কতা অবলম্বন করুন, কারণ একটি সমস্যার প্রতিটি লেবেল তার পুরানো আইডি রাখে (যদি এই আইডিটি আর বিদ্যমান না থাকে তবে: এই ক্ষেত্রে, লেবেলটি থেকে সরানো হয় সমস্যা)।';
  const F_TIP_ID_GROUP = '<b>টিপ:</b> আইডি পরিবর্তন করার সময় সতর্কতা অবলম্বন করুন, কারণ প্রতিটি ব্যবহারকারী তার পুরানো গ্রুপ আইডি রাখে (যদি এই আইডিটি আর বিদ্যমান না থাকে তবে এই ক্ষেত্রে, ডিফল্ট গ্রুপ ব্যবহার করা হবে)। ';
  const F_TIP_CAPTCHA = 'ব্যবহারকারীদের লগ ইন না করার জন্য একটি ক্যাপচা দেখানো হবে এমন অ্যাকশন বেছে নিন।';
  const F_TIP_API_ACCESS = '<em>/database/config_api.php</em> ফাইলে API অ্যাক্সেস কনফিগার করুন। আরও তথ্যের জন্য API.md ফাইল দেখুন।';

  const F_API_ENABLE = 'এপিআই সক্ষম করুন';

  const HELP_MARKDOWN = '
  <h2>মার্কডনিজস্ব সিনট্যাক্স:</h2>

  <p>অনুচ্ছেদ:</p>
<pre><code class="blank no-highlight">অনুচ্ছেদগুলি এক বা একাধিক ফাঁকা লাইন দ্বারা পৃথক করা হয়৷
এই কারণেই এই পাঠ্যটি একই লাইনে প্রদর্শিত হবে যেটি পূর্ববর্তী বাক্যাংশটি, লাইন বিরতি যাই হোক না কেন।

একটি নতুন অনুচ্ছেদ তৈরি না করে একটি নতুন লাইন শুরু করতে:
লাইন বিরতির আগে 2টি স্পেস সন্নিবেশ করুন, ঠিক এখানের মতো।</code></pre>
  <p>জোর:</p>
<pre><code class="blank no-highlight">*ইটালিক টেক্সট*
_ইটাটিক টেক্সট আবার_

**বোল্ড লেখা**
__আবার বোল্ড টেক্সট__ </code></pre>

  <p>লিঙ্ক:</p>
<pre><code class="blank no-highlight">এটি ইনলাইন লিঙ্কের [একটি উদাহরণ](http://example.com)।
এটি আরেকটি: &lt;http://example.com&gt;।</code></pre>

  <p>ছবি:</p>
<pre><code class="blank no-highlight">![আমি একটি ছবি।](http://example.com/image.png)</code></pre>

  <p>হেডার:</p>
<pre><code class="blank no-highlight"># শীর্ষ স্তরের শিরোনাম৷
## দ্বিতীয় স্তরের শিরোনাম
### তৃতীয় স্তরের শিরোনাম
#### চতুর্থ স্তরের শিরোনাম</code></pre>

  <p>তালিকা:</p>
<pre><code class="blank no-highlight">- একটি আইটেম
* আরেকটি

1. প্রথম আইটেম
2. দ্বিতীয় আইটেম</code></pre>

  <p>ব্লককোটস:</p>
<pre><code class="blank no-highlight">> আমি দুটি অনুচ্ছেদ সহ একটি ব্লককোট।
>
> আমি দ্বিতীয় অনুচ্ছেদ।</code></pre>

  <p>কোড ব্লক:</p>
<pre><code class="blank no-highlight">এটি একটি `ইনলাইন কোড ব্লক`।</code></pre>
<pre><code class="blank no-highlight"> &lt;?php echo "আমি একটি কোড ব্লক, কারণ আমি ইন্ডেন্টেড
 4টি স্পেস সহ"; ?&gt;</code></pre>
<pre><code class="blank no-highlight">```
&lt;?php প্রতিধ্বনি "আমি একটি কোড ব্লক।"; ?&gt;
```

``পিএইচপি
&lt;?php echo "সমর্থিত ভাষাগুলি হল: bash, cs, ruby, diff, javascript, css, xml, http, java, php, python, sql, ini, perl, json, cpp, markdown, no-highlight"; ?&gt;
```</code></pre>
  ';


  private static $permissions = array(
  'home' => array(
  'title' => 'বাড়ি:',
  'description' => 'হোম পেজে অ্যাক্সেস করতে পারে এবং তার প্রজেক্টের জন্য সমস্ত খোলা সমস্যার তালিকা দেখতে পারে।'
  ),
  'dashboard' => array(
  'title' => 'ড্যাশবোর্ড:',
  'description' => 'প্রকল্পের ড্যাশবোর্ডে প্রবেশ করতে পারে।'
  ),
  'issues' => array(
  'title' => 'সমস্যা দেখুন:',
  'description' => 'পাবলিক সমস্যা দেখতে পারেন।'
  ),
  'private_issues' => array(
  'title' => 'ব্যক্তিগত সমস্যা দেখুন:',
  'description' => 'ব্যক্তিগত হিসাবে ট্যাগ করা সমস্যা দেখতে পারেন।'
  ),
  'search' => array(
  'title' => 'অনুসন্ধান:',
  'description' => 'সমস্যা বা ব্যবহারকারীদের অনুসন্ধান করতে পারে।'
  ),
  'new_issue' => array(
  'title' => 'নতুন সমস্যা:',
  'description' => 'একটি নতুন সমস্যা জমা দিতে পারেন।'
  ),
  'edit_issue' => array(
  'title' => 'সমস্যা সম্পাদনা করুন:',
  'description' => 'সমস্ত সমস্যার টেক্সট এডিট করে মুছে দিতে পারে।'
  ),
  'update_issue' => array(
  'title' => 'আপডেট সমস্যা:',
  'description' => 'সমস্যা আপডেট করতে পারে: স্থিতি পরিবর্তন করুন, লেবেল যোগ করুন, বন্ধ করুন এবং পুনরায় খুলুন, ...'
  ),
  'post_comment' => array(
  'title' => 'একটি মন্তব্য পোস্ট করুন:',
  'description' => 'একটি মন্তব্য পোস্ট করতে পারেন।'
  ),
  'edit_comment' => array(
  'title' => 'মন্তব্য সম্পাদনা করুন:',
  'description' => 'সমস্ত মন্তব্য সম্পাদনা করতে পারে (ব্যবহারকারীরা তাদের নিজস্ব মন্তব্য যেভাবেই সম্পাদনা করতে পারে)।'
  ),
  'view_user' => array(
  'title' => 'ব্যবহারকারীর প্রোফাইল:',
  'description' => 'সব ব্যবহারকারীর প্রোফাইল দেখতে পারেন।'
  ),
  'upload' => array(
  'title' => 'একটি ফাইল পোস্ট করুন:',
  'description' => 'একটি মন্তব্য বা একটি নতুন সমস্যা ফাইল সংযুক্ত করতে পারেন।'
  ),
  'view_upload' => array(
  'title' => 'আপলোড দেখুন:',
  'description' => 'আপলোড করা সমস্ত ফাইল অ্যাক্সেস করতে পারে।'
  ),
  'settings' => array(
  'title' => 'সেটিংস পরিবর্তন করুন:',
  'description' => 'এই পৃষ্ঠাটি অ্যাক্সেস করতে এবং সমস্ত বিশ্বব্যাপী সেটিংস পরিবর্তন করতে পারে।'
  ),
  'signup' => array(
  'title' => 'সাইন আপ করুন:',
  'description' => 'সাইন আপ করতে পারেন।'
  ),
  'view_errors' => array(
  'title' => 'মারাত্মক ত্রুটি দেখুন:',
  'description' => 'মারাত্মক ত্রুটির বর্ণনা দেখতে পারেন।'
  )
  );

  public static function permissions($id, $type = 'description') {
  return self::$permissions[$id][$type];
  }

  private static $settings = array(
  'validate_url' => 'ইউআরএলটি বৈধ নয়।',
  'validate_email' => 'ইমেইলটি বৈধ নয়।',
  'private_label_removed' => 'আপনি প্রাইভেট লেবেলটি অপসারণ করতে বা এর আইডি পরিবর্তন করতে পারবেন না, তবে আপনি এটির নাম পরিবর্তন করতে পারেন।',
  'default_status_removed' => 'আপনি ডিফল্ট স্ট্যাটাস মুছে ফেলতে বা এর আইডি পরিবর্তন করতে পারবেন না, তবে আপনি এটির নাম পরিবর্তন করতে পারেন।',
  'default_group_removed' => 'আপনি ডিফল্ট গ্রুপ অপসারণ করতে বা এর আইডি পরিবর্তন করতে পারবেন না, তবে আপনি এটির নাম পরিবর্তন করতে পারেন।',
  'default_group_superuser_removed' => 'আপনি সুপার ইউজার গ্রুপকে অপসারণ করতে বা এর আইডি পরিবর্তন করতে পারবেন না, তবে আপনি এটির নাম পরিবর্তন করতে পারেন।',
  'validate_same_username' => 'সতর্কতা: দুই ব্যবহারকারীর একই ব্যবহারকারীর নাম আছে।',
  'validate_same_project_name' => 'দুটি প্রকল্পের একই নাম থাকতে পারে না। একজনের নাম স্বয়ংক্রিয়ভাবে পরিবর্তন করা হয়েছে।',
  'language_modified' => 'নতুন ভাষায় দেখতে এই পৃষ্ঠাটি রিফ্রেশ করুন।'
  );

  public static function settings($id) {
		return self::$settings[$id];
  }

  private static $errors = array(
  E_ERROR => 'মারাত্মক ত্রুটি',
  E_WARNING => 'সতর্কতা',
  E_PARSE => 'পার্স ত্রুটি',
  E_NOTICE => 'নোটিস',
  E_STRICT => 'পরামর্শ',
  E_DEPRECATED => 'বঞ্চিত','ডিফল্ট' => 'ত্রুটি'
  );
  public static function errors($no) {
  return (isset(self::$errors[$no]))? self::$errors[$no] : self::$errors['default'];
  }
}

?>