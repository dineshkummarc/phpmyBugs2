<?php

class Trad {

  ＃ 字

  const W_ISSUE = '問題';
  const W_OPEN = '開啟';
  const W_OPENED = '開啟';
  const W_CLOSED = '已關閉';
  const W_REOPENED = '重新開啟';
  const W_COMMENTED = '已註解';
  const W_NOBODY = '無人';
  const W_SOMEONE = '某人';
  const W_ENABLED = '啟用';
  const W_DISABLED = '停用';
  const W_NOTFOUND = '未找到';
  const W_FORBIDDEN = '禁止';
  const W_MENU = '選單';

  const W_EXAMPLE = '範例';
  const W_HEX = '十六進位';
  const W_RENDERING = '渲染';
  const W_ID = 'ID';
  const W_DISPLAY_NAME = '顯示名稱';

  const W_SECONDE = '第二';
  const W_MINUTE = '分鐘';
  const W_HOUR = '小時';
  const W_DAY = '天';
  const W_WEEK = '週';
  const W_MONTH = '月份';
  const W_YEAR = '年份';
  const W_DECADE = '十年';
  const W_SECONDE_P = '秒';
  const W_MINUTE_P = '分鐘';
  const W_HOUR_P = '小時';
  const W_DAY_P = '天';
  const W_WEEK_P = '週';
  const W_MONTH_P = '月份';
  const W_YEAR_P = '年';
  const W_DECADE_P = '十年';

  const W_PREVIOUS = '上一個';
  const W_NEXT = '下一個';
  const W_MORE = '更多';
  const W_CURRENT = '第 %nb1% 頁（共 %nb2%）';

  const W_NOT_LOGGED = '未登入';

  const W_SUSPENSION = '...';
  const W_EXTRACT = '“%text%”';

  const W_USER = '使用者';
  const W_DEVELOPPER = '開發人員';
  const W_SUPERUSER = '超級使用者';
  const W_S_NEW = '新';
  const W_S_CONFIRMED = '已確認';
  const W_S_ASSIGNED = '分配給%user%';
  const W_S_RESOLVED = '已解決';
  const W_S_REJECTED = '已拒絕';
  const W_L_URGENT = '緊急';
  const W_L_IMPROVMENT = '改進';
  const W_L_PRIVATE = '私有';

  const W_PROFILEPIC = '個人資料圖片';

  const W_RSS = 'RSS 提要';
  const W_VERSION = '版本';

  const W_CAPTCHA_IMAGE = '驗證碼影像';
  const W_CAPTCHA_REFRESH = '刷新影像';
  const W_CAPTCHA_INPUT = '輸入文字：';

  # 動詞

  const V_UPDATE = '更新';
  const V_UPDATE_DETAILS = '更新詳細資料';
  const V_UPDATE_CONTENT = '更新內容';
  const V_UPDATE_AND = '更新&%形容詞%';
  const V_CANCEL = '取消';
  const V_PREVIEW = '預覽';
  const V_COMMENT = '評論';
  const V_SUBMIT = '提交';
  const V_SELECT_FILE = '選擇一個檔案...';
  const V_UPLOADING = '正在上傳...';
  const V_SAVE_CONFIG = '儲存設定';
  const V_APPLY = '應用';
  const V_EDIT = '編輯';
  const V_SIGNUP = '註冊';
  const V_LOGIN = '登入';
  const V_CONTINUE = '繼續';
  const V_REMOVE_ISSUE = '刪除問題';
  const V_CLOSE = '關閉';
  const V_REOPEN = '重新開啟';
  const V_EXPORT = '導出原始資料';

  # 句子

  const S_NOLABEL = '–';
  const S_NODEPENDENCY = '–';
  const S_COMMENT_LEAVE = '發表評論：';
  const S_AGO = '%duration% %pediod% 前';
  const S_ISSUE_ABOUT = '關於此問題：';
  const S_UPLOAD_ADD = '附加檔案：';
  const S_WELCOME = '歡迎，%user%';
  const S_NEVER = '從不';
  const S_ME = '關於我貢獻的問題的更新';
  const S_ALWAYS = '每次更新';
  const S_START_NOTIF = '收到新更新通知';
  const S_STOP_NOTIF = '不再收到更新通知';
  const S_NOTFOUND = '您正在尋找的頁面不再存在...';
  const S_FORBIDDEN = '您無權存取此頁面。請登入/登出以繼續。

  const S_VIEW_PARTICIPATION = '查看他的參與情況。
  const S_VIEW_STATUS = '查看問題“%status%”。

  const S_ISSUE_CREATED = '由 %user% %time%';
  const S_ISSUE_UPDATED = '%adj% by %user% %time%。
  const S_ISSUE_STATUS_UPDATED = '狀態已由 %user% %time% 更新為 %status%。

  const S_RSS_ISSUE_UPDATED = '%adj% by %user%.';
  const S_RSS_ISSUE_STATUS_UPDATED = '狀態已由 %user% 更新為「%status%」。

  const S_INTRO_INSTALL = '看起來這是您第一次運行 phpmyBugs！請配置它：';
  const S_FIRST_ISSUE_TITLE = '你好嗎，南瓜？
  const S_FIRST_ISSUE = '我是你的第一期！登入後，您將可以刪除我。

  const S_NO_USER = '沒有使用者符合您的請求。
  const S_NO_ISSUE = '沒有問題符合您的要求。
  const S_MATCHING_ISSUES = '%nb% 匹配問題';
  const S_NO_ACTIVITY = '最近沒有活動。
  const S_NO_UPLOAD = '不上傳。
  const S_SIZE_REMAINING = '在允許的 %total% 範圍內剩餘 %remain%。
  const S_NO_PROJECT = '沒有項目。

  const S_SEARCH = '#12，@用戶，單字...';
  const S_COPYRIGHT = '由 %name% 提供支援。
  const S_UPGRADE = '從 <a href="https://github.com/bugtrackr/Nireus/releases/latest">GitHub</a> 取得最新版本到 <a href="https://bugtrackr.github.io /wiki/upgrade/">升級</a>。';

  const S_LAST_UPDATES = '最近更新...';

  const S_STAY_LOGGEDIN = '保持登入狀態';

  const S_DEFAULT_DEFPROJ_DESC = '這是每個人都可以存取的預設項目。 ';
  const S_DEFAULT_2NDPROJ_DESC = '這可能是您的第二個項目，其中只允許註冊用戶發布問題。

  # 警報

  const A_ERROR_DIRECTORY = '<strong>錯誤：</strong>無法建立目錄「%name%」。
  const A_ERROR_FILE = '<strong>錯誤：</strong>無法讀取檔案「%name%」。
  const A_ERROR_FILE_WRITE = '<strong>錯誤：</strong>無法寫入檔案「%name%」。
  const A_ERROR_FATAL = '抱歉，出了點問題。如果此問題仍然存在，請聯絡管理員。
  const A_ERROR = '<strong>%title%:</strong><br /><br />%message%<br /><br />檔案「<strong>%file%</strong>」線上 <強>%line%</strong>。

  const A_SUCCESS_INSTALL = '<strong>完成：</strong> phpmyBugs 現已完全配置。
  const A_ERROR_INSTALL = '<strong>錯誤：</strong> phpmyBugs 已設定。如果您想重置配置，請刪除設定檔。
  const A_MODIF_SAVED = '修改已儲存。

  const A_ERROR_FORM = '發生錯誤。請再次發送表格。
  const A_ERROR_TOKEN = '錯誤的標記。請再次發送表格。
  const A_ERROR_EMPTY = '您必須指定使用者名稱和密碼。
  const A_ERROR_SAME_USERNAME = '該使用者名稱不可用。
  const A_SUCCESS_SIGNUP = '<strong>完成：</strong>您現在可以登入了。

  const A_CONFIRM_DELETE_COMMENT = '您確定要刪除此評論嗎？
  const A_SUCCESS_DELETE_COMMENT = '評論已刪除。
  const A_CONFIRM_DELETE_ISSUE = '您確定要刪除此問題嗎？
  const A_SUCCESS_DELETE_ISSUE = '該問題已刪除。
  const A_CONFIRM_DELETE_UPLOAD = '您確定要刪除此檔案嗎？
  const A_CONFIRM_DELETE_PROJECT = '您確定要刪除此項目嗎？所有相應的問題都將丟失。

  const A_LOGGED = '您現在已登入系統。
  const A_LOGGED_OUT = '您現在已從系統中登出。
  const A_ERROR_CONNEXION = '<strong>錯誤：</strong>使用者名稱或密碼錯誤。
  const A_ERROR_CONNEXION_WAIT = '<strong>錯誤：</strong>使用者名稱或密碼錯誤。請等待 %duration% %period%，然後再試一次。
  const A_ERROR_LOGIN_WAIT = '請等待 %duration% %period% 後再重試。這是針對惡意攻擊的保護。

  const A_ERROR_UPLOAD = '發生錯誤。請再試一次。
  const A_ERROR_UPLOAD_SIZE = '檔案超出允許的最大大小（%nb% max）。
  const A_ERROR_UPLOAD_FULL = '您沒有足夠的磁碟空間來上傳此檔案：剩餘 %nb%。

  const A_PLEASE_LOGIN_ISSUES = '請登入檢視問題。
  const A_PLEASE_LOGIN_COMMENT = '請登入後發表評論。還沒有帳戶？創建一個：它是免費的，而且速度非常快！
  const A_PLEASE_LOGIN_ISSUE = '請登入以提交問題。還沒有帳戶？創建一個：它是免費的，而且速度非常快！
  const A_SHOULD_LOGIN = '如果您有帳戶，請登入。

  const A_IE = '您的瀏覽器已過時：<a href="https://www.browser-update.org/en/update.html">升級或更改</a>。 ';

  # 郵件

  const M_NEW_COMMENT_O = '[%title% — %project% — Issue #%id%] 新評論';
  const M_NEW_COMMENT = '嗨，%用戶名%！

問題 #%id% —“%summary%”剛剛被 %by% 評論。您可以在這裡閱讀新評論：
  %網址%。

如果您不想收到有關此問題的進一步通知，可以透過上面的連結使用選項（登入後）。

-----
這是一封自動發送的電子郵件，請勿回覆。
  ';

  const M_NEW_ISSUE_O = '[%title% — %project%] 新問題';
  const M_NEW_ISSUE = '嗨，%用戶名%！

%by% 剛剛提交了問題 #%id% —“%summary%”。您可以在這裡閱讀：
  %網址%。

如果您不想收到有關此問題的進一步通知，可以透過上面的連結使用選項（登入後）。

-----
這是一封自動發送的電子郵件，請勿回覆。
  ';

  # 標題

 const T_INSTALLATION = '安裝';
  const T_SETTINGS = '設定';
  const T_GLOBAL_SETTINGS = '全域設定';
  const T_APPEARANCE = '外觀';
  const T_ISSUES = '問題';
  const T_GROUPS = '組';
  const T_USERS = '使用者';
  const T_PERMISSIONS = '權限';
  const T_ENABLE_CAPTCHA = '管理驗證碼';
  const T_CAPTCHA = '驗證碼';
  const T_BROWSE_ISSUES = '瀏覽問題';
  const T_BROWSE_ALL_ISSUES = '瀏覽所有問題';
  const T_ALL_ISSUES_DESCRIPTION = '這是所有項目的所有未決問題';
  const T_NEW_ISSUE = '新問題';
  const T_ALL_ISSUES = '所有問題';
  const T_PROJECTS = '項目';
  const T_DASHBOARD = '儀表板';
  const T_LAST_UPDATES = '最後更新';
  const T_LAST_ACTIVITY = '最後一個活動';
  const T_UPLOADS = '上傳';
  const T_SEARCH = '搜尋';
  const T_LINK_CONTACT = '聯絡我們';
  const T_LINK_LEGALNOTICE = '法律聲明';
  const T_LINK_PRIVACYPOLICY = '隱私權政策';
  const T_API_SETTINGS = 'API';
  const T_API_ENABLE_SETTINGS = '管理 API';
  const T_API_ACCESS_SETTINGS = 'API 存取';
  const T_INFO = '訊息';

  # 表格

  const F_USERNAME = '使用者名稱：';
  const F_PASSWORD = '密碼：';
  const F_USERNAME2 = '使用者名稱';
  const F_PASSWORD2 = '密碼';
  const F_NAME = '名稱：';
  const F_URL = '網址：';
  const F_URL_CDN = 'CDN 網址：';
  const F_URL_REWRITING = '網址重寫：';
  const F_INTRO = '簡介：';
  const F_DESCRIPTION = '說明：';
  const F_EMAIL = '電子郵件：';
  const F_LINK_CONTACT = '外部聯絡頁面連結（可以留空）：';
  const F_LINK_LEGALNOTICE = '法律聲明連結（可以留空）：';
  const F_LINK_PRIVACYPOLICY = '隱私權政策連結（可以留空）：';
  const F_MAX_UPLOAD = '每次上傳的最大大小：';
  const F_ALLOCATED_SPACE = '為每個使用者指派的空間：';
  const F_GROUP = '組：';
  const F_NOTIFICATIONS = '收到通知：';
  const F_PROJECT_X = '項目「%name%」:';
  const F_LANGUAGE = '語言：';
  const F_LOGS = '日誌：';

  const F_ISSUES_PAGE = '每頁問題：';
  const F_ISSUES_PAGE_SEARCH = '每頁問題（搜尋）：';
  const F_PREVIEW_ISSUE = '預覽長度（問題）：';
  const F_PREVIEW_SEARCH = '預覽長度（搜尋）：';
  const F_PREVIEW_PROJECT = '預覽長度（項目）：';
  const F_LAST_EDITS = '儀表板上顯示的問題數：';
  const F_LAST_ACTIVITY = '使用者頁面上顯示的問題數：';
  const F_THEME = "主題";
  const F_TIP_THEME = "將 .css 檔案放入";

  const F_ADD_PROJECT = '新專案';
  const F_ADD_COLOR = '新顏色';
  const F_ADD_STATUS = '新狀態';
  const F_ADD_LABEL = '新標籤';
  const F_ADD_GROUP = '新群組';
  const F_ADD_USER = '新使用者';

  const F_SORT_BY = '排序依據：';
  const F_SORT_ID = 'ID';
  const F_SORT_MOD = '最後更新';
  const F_SORT_DESC = '降序';
  const F_SORT_ASC = '升序';
  const F_FILTER_STATUSES = '過濾器狀態：';
  const F_FILTER_STATES = '過濾器狀態：';
  const F_FILTER_LABELS = '過濾標籤：';
  const F_FILTER_USERS = '過濾使用者：';
  const F_FILTER_MILESTONE = '過濾里程碑：';

  const F_WRITE = '寫入：';
  const F_SUMMARY = '摘要';
  const F_CONTENT = '內容';

  const F_STATUS = '狀態：';
  const F_RELATED = '相關：';
  const F_LABELS2 = '標籤：';
  const F_MILESTONE = '里程碑：';

  const F_GENERAL_SETTINGS = '常規設定：';
  const F_PROJECTS = '項目：';
  const F_DATABASE = '資料庫：';
  const F_UPLOADS = '上傳：';
  const F_COLORS = '管理顏色：';
  const F_DISPLAY = '管理顯示：';
  const F_STATUSES = '管理狀態：';
  const F_LABELS = '管理標籤：';
  const F_GROUPS = '管理群組：';
  const F_PERMISSIONS = '管理權限：';
  const F_USERS = '管理使用者：';

  const F_INVALID_CAPTCHA = '您輸入的驗證碼錯誤。請再試一次。

  const F_TIP_NAME = '它將顯示在每頁的頁首。
  const F_TIP_URL_REWRITING = '將此欄位留空以停用 URL 重寫。否則，它應該包含相對於網域的 phpmyBugs 資料夾的路徑（以“/”開頭和結尾）。
  const F_TIP_URL_CDN = '將此欄位留空以停用 CDN。否則，它必須包含您的 CDN 的 URL（例如<em>https://cdn.rawgit.com/bugtrackr/Nireus/master/</em>，請隨意使用這個）。確保託管 CDN 上 <em>/public</em> 資料夾中的所有檔案。
  const F_TIP_INTRO = '它將顯示在主頁上。它將使用 Markdown 語法進行解析。注意：如果只有一個名為「%name%」的項目，主頁會自動重新導向到項目儀表板，並且不會顯示此文字。
  const F_TIP_EMAIL = '將此欄位留空以停用電子郵件通知。否則，發送電子郵件通知時將使用該地址作為寄件者。
  const F_TIP_PASSWORD = '如果您不想更改密碼，請將其留空。
  const F_TIP_USER_EMAIL = '只有在您想要接收通知時才需要。
  const F_TIP_NOTIFICATIONS = '這是預設值：您可以針對每個問題更改它。
  const F_TIP_NOTIFICATIONS_DISABLED = '注意：通知目前已被管理員停用。
  const F_TIP_DESCRIPTION = '它將顯示在專案儀表板上。它將使用 markdown 語法進行解析。

  const F_TIP_MAX_UPLOAD = '每個上傳的檔案不能超過此大小。
  const F_TIP_ALLOCATED_SPACE = '使用者一旦達到此限制，就無法上傳其他檔案。 。

  const F_TIP_ID_STATUS = '<b>提示：</b>更改 ID 時要小心，因為每個問題都會保留其舊的狀態 ID（除非該 ID 不再存在：在這種情況下，將使用預設狀態）。 ';
  const F_TIP_ID_LABEL = '<b>提示：</b>更改 ID 時要小心，因為一個問題的每個標籤都會保留其舊 ID（除非該 ID 不再存在：在這種情況下，該標籤將從問題）。
  const F_TIP_ID_GROUP = '<b>提示：</b>更改 ID 時要小心，因為每個使用者都會保留其舊的群組 ID（除非該 ID 不再存在：在這種情況下，將使用預設群組）。 ';
  const F_TIP_CAPTCHA = '選擇未登入使用者顯示驗證碼的動作。
  const F_TIP_API_ACCESS = '在<em>/database/config_api.php</em>檔案中設定A​​PI存取。有關詳細信息，請參閱 API.md 檔案。

  const F_API_ENABLE = '啟用 API';

  常數 HELP_MARKDOWN = '
  <h2>馬克德自己的語法：</h2>

  <p>段落：</p>
<pre><code class="blank no-highlight">段落之間以一個或多個空白行分隔。
這就是為什麼此文字將顯示在前一個短語的同一行中，無論換行符號如何。

要開始新行而不建立新段落：
在換行符前插入 2 個空格，就像這裡一樣。
  <p>強調：</p>
<pre><code class="blank no-highlight">*斜體文字*
_又是斜體文字_

**粗體文字**
__再次粗體文字__ </code></pre>

  <p>連結：</p>
<pre><code class="blank no-highlight">這是內嵌連結的[範例](http://example.com)。
這是另一個：<http://example.com>。

  <p>圖片：</p>
<pre><code class="blank no-highlight">![我是一張圖片。

  <p>標題：</p>
<pre><code class="blank no-highlight"># 頂級標題
## 二級標題
### 三級標題
####四級標題</code></pre>

  <p>列表：</p>
<pre><code class="blank no-highlight">- 一項
* 另一個

1.第一項
2.第二項</code></pre>

  <p>區塊引用：</p>
<pre><code class="blank no-highlight">> 我是一個包含兩個段落​​的區塊引用。
>
> 我是第二段。

  <p>程式碼區塊：</p>
<pre><code class="blank no-highlight">這是一個「內嵌程式碼區塊」。
<pre><code class="blank no-highlight"> <?php echo "我是一個程式碼區塊，因為我縮排了
 有 4 個空格"; ?></code></pre>
<pre><code class="blank no-highlight">```
<?php echo "我是一個程式碼區塊。"; ？
````

````php
&lt;?php echo "支援的語言有：bash, cs, ruby​​, diff, javascript, css, xml, http, java, php, python, sql, ini, perl, json, cpp, markdown, no-highlight "; ？
```</code></pre>
  ';


  private static $permissions = array(
  'home' => array(
  '標題' => '首頁：',
  'description' => '可以存取主頁並查看其項目的所有未解決問題的清單。
  ),
  '儀表板' => array(
  '標題' => '儀表板：',
  'description' => '可以存取專案儀表板。
  ),
  '問題' => array(
  'title' => '查看問題：',
  'description' => '可以查看公共問題。
  ),
  'private_issues' => array(
  'title' => '查看私人問題：',
  'description' => '可以查看標記為私人的問題。
  ),
  '搜尋' => array(
  '標題' => '搜尋：',
  'description' => '可以搜尋問題或使用者。
  ),
  'new_issue' => array(
  'title' => '新問題：',
  'description' => '可以提交新問題。
  ),
  'edit_issue' => array(
  'title' => '編輯問題：',
  'description' => '可以編輯所有問題的文字並刪除它們。
  ),
  'update_issue' => array(
  'title' => '更新問題：',
  'description' => '可以更新問題：更改狀態、新增標籤、關閉並重新打開，...'
  ),
  'post_comment' => array(
  'title' => '發表評論：',
  '描述' => '可以發表評論。
  ),
  '編輯評論' => array(
  'title' => '編輯評論：',
  'description' => '可以編輯所有評論（用戶無論如何都可以編輯自己的評論）。
  ),
  'view_user' => array(
  '標題' => '使用者個人資料：',
  'description' => '可以查看所有使用者個人資料。
  ),
  '上傳' => array(
  'title' => '發布文件：',
  'description' => '可以將文件附加到評論或新問題。
  ),
  'view_upload' => array(
  'title' => '查看上傳內容：',
  'description' => '可以存取所有上傳的檔案。
  ),
  '設定' => array(
  '標題' => '更改設定：',
  'description' => '可以存取此頁面並修改所有全域設定。
  ),
  '註冊' => array(
  '標題' => '註冊：',
  '描述' => '可以註冊。
  ),
  'view_errors' => array(
  'title' => '查看致命錯誤：',
  'description' => '可以查看致命錯誤的描述。
  ）
  ）;

  public static function permissions($id, $type = '描述') {
  返回自我::$權限[$id][$type];
  }

  private static $settings = array(
  'validate_url' => '該網址無效。
  'validate_email' => '電子郵件無效。
  'private_label_removed' => '您無法刪除私有標籤或變更其 ID，但可以重新命名。
  'default_status_removed' => '您無法刪除預設狀態或變更其 ID，但可以重新命名。
  'default_group_removed' => '您無法刪除預設群組或更改其 ID，但可以重命名它。
  'default_group_superuser_removed' => '您無法刪除超級使用者群組或變更其 ID，但可以重新命名。
  'validate_same_username' => '警告：兩個使用者有相同的使用者名稱。
  'validate_same_project_name' => '兩個項目不能有相同的名稱。其中一個已自動重命名。
  'language_modified' => '刷新此頁面即可以新語言檢視。
  ）；

  public static function settings($id) {
  return self::$settings[$id];
  }

  private static $errors = array(
  E_ERROR => '致命錯誤',
  E_WARNING => '警告',
  E_PARSE => '解析錯誤',
  E_NOTICE => '通知',
  E_STRICT => '建議',
  E_DEPRECATED => '已棄用','預設' => '錯誤'
  ）；
  
  public static function errors($no) {
  return (isset(self::$errors[$no])) ？ self::$errors[$no] : self::$errors['default'];
  }
}

?>