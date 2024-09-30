<?php

class Trad {

 # 字

 const W_ISSUE = '问题';
 const W_OPEN = '开启';
 const W_OPENED = '开启';
 const W_CLOSED = '已关闭';
 const W_REOPENED = '重新开启';
 const W_COMMENTED = '已注解';
 const W_NOBODY = '无人';
 const W_SOMEONE = '某人';
 const W_ENABLED = '启用';
 const W_DISABLED = '停用';
 const W_NOTFOUND = '未找到';
 const W_FORBIDDEN = '禁止';
 const W_MENU = '选单';

 const W_EXAMPLE = '范例';
 const W_HEX = '十六进位';
 const W_RENDERING = '渲染';
 const W_ID = 'ID';
 const W_DISPLAY_NAME = '显示名称';

 const W_SECONDE = '第二';
 const W_MINUTE = '分钟';
 const W_HOUR = '小时';
 const W_DAY = '天';
 const W_WEEK = '周';
 const W_MONTH = '月份';
 const W_YEAR = '年份';
 const W_DECADE = '十年';
 const W_SECONDE_P = '秒';
 const W_MINUTE_P = '分钟';
 const W_HOUR_P = '小时';
 const W_DAY_P = '天';
 const W_WEEK_P = '周';
 const W_MONTH_P = '月份';
 const W_YEAR_P = '年';
 const W_DECADE_P = '十年';

 const W_PREVIOUS = '上一个';
 const W_NEXT = '下一个';
 const W_MORE = '更多';
 const W_CURRENT = '第 %nb1% 页（共 %nb2%）';

 const W_NOT_LOGGED = '未登入';

 const W_SUSPENSION = '...';
 const W_EXTRACT = '“%text%”';

 const W_USER = '使用者';
 const W_DEVELOPPER = '开发人员';
 const W_SUPERUSER = '超级使用者';
 const W_S_NEW = '新';
 const W_S_CONFIRMED = '已确认';
 const W_S_ASSIGNED = '分配给%user%';
 const W_S_RESOLVED = '已解决';
 const W_S_REJECTED = '已拒绝';
 const W_L_URGENT = '紧急';
 const W_L_IMPROVEMENT = '改进';
 const W_L_PRIVATE = '私有';

 const W_PROFILEPIC = '个人资料图片';

 const W_RSS = 'RSS 提要';
 const W_VERSION = '版本';

 const W_CAPTCHA_IMAGE = '验证码影像';
 const W_CAPTCHA_REFRESH = '刷新影像';
 const W_CAPTCHA_INPUT = '输入文字：';

 # 动词

 const V_UPDATE = '更新';
 const V_UPDATE_DETAILS = '更新详细资料';
 const V_UPDATE_CONTENT = '更新内容';
 const V_UPDATE_AND = '更新&%形容词%';
 const V_CANCEL = '取消';
 const V_PREVIEW = '预览';
 const V_COMMENT = '评论';
 const V_SUBMIT = '提交';
 const V_SELECT_FILE = '选择一个档案...';
 const V_UPLOADING = '正在上传...';
 const V_SAVE_CONFIG = '储存设定';
 const V_APPLY = '应用';
 const V_EDIT = '编辑';
 const V_SIGNUP = '注册';
 const V_LOGIN = '登入';
 const V_CONTINUE = '继续';
 const V_REMOVE_ISSUE = '删除问题';
 const V_CLOSE = '关闭';
 const V_REOPEN = '重新开启';
 const V_EXPORT = '导出原始资料';

 # 句子

 const S_NOLABEL = '–';
 const S_NODEPENDENCY = '–';
 const S_COMMENT_LEAVE = '发表评论：';
 const S_AGO = '%duration% %pediod% 前';
 const S_ISSUE_ABOUT = '关于此问题：';
 const S_UPLOAD_ADD = '附加档案：';
 const S_WELCOME = '欢迎，%user%';
 const S_NEVER = '从不';
 const S_ME = '关于我贡献的问题的更新';
 const S_ALWAYS = '每次更新';
 const S_START_NOTIF = '收到新更新通知';
 const S_STOP_NOTIF = '不再收到更新通知';
 const S_NOTFOUND = '您正在寻找的页面不再存在...';
 const S_FORBIDDEN = '您无权存取此页面。请登入/登出以继续';

 const S_VIEW_PARTICIPATION = '查看他的参与情况';
 const S_VIEW_STATUS = '查看问题“%status%”';

 const S_ISSUE_CREATED = '由 %user% %time%';
 const S_ISSUE_UPDATED = '%adj% by %user% %time%';
 const S_ISSUE_STATUS_UPDATED = '状态已由 %user% %time% 更新为 %status%';

 const S_RSS_ISSUE_UPDATED = '%adj% by %user%.';
 const S_RSS_ISSUE_STATUS_UPDATED = '状态已由 %user% 更新为「%status%」';

 const S_INTRO_INSTALL = '看起来这是您第一次运行 phpmyBugs！请配置它：';
 const S_FIRST_ISSUE_TITLE = '你好吗，南瓜？ ';
 const S_FIRST_ISSUE = '我是你的第一期！登入后，您将可以删除我';

 const S_NO_USER = '没有使用者符合您的请';
 const S_NO_ISSUE = '没有问题符合您的要求';
 const S_MATCHING_ISSUES = '%nb% 匹配问题';
 const S_NO_ACTIVITY = '最近没有活动';
 const S_NO_UPLOAD = '不上传';
 const S_SIZE_REMAINING = '在允许的 %total% 范围内剩余 %remain%';
 const S_NO_PROJECT = '没有项目';

 const S_SEARCH = '#12，@用户，单字...';
 const S_COPYRIGHT = '由 %name% 提供支援';
 const S_UPGRADE = '从<a href="'.RELEASE.'">GitHub</a> 取得最新版本到<a href="https://bugtrackr.github.io /wiki/upgrade/">升级</a>。 ';

 const S_LAST_UPDATES = '最近更新...';

 const S_STAY_LOGGEDIN = '保持登入状态';

 const S_DEFAULT_DEFPROJ_DESC = '这是每个人都可以存取的预设项目。 ';
 const S_DEFAULT_2NDPROJ_DESC = '这可能是您的第二个项目，其中只允许注册用户发布问题。 ';

 # 警报

 const A_ERROR_DIRECTORY = '<strong>错误：</strong>无法建立目录「%name%」。 ';
 const A_ERROR_FILE = '<strong>错误：</strong>无法读取档案「%name%」。 ';
 const A_ERROR_FILE_WRITE = '<strong>错误：</strong>无法写入档案「%name%」。 ';
 const A_ERROR_FATAL = '抱歉，出了点问题。如果此问题仍然存在，请联络管理员。 ';
 const A_ERROR = '<strong>%title%:</strong><br /><br />%message%<br /><br />档案「<strong>%file%</strong>」线上<强>%line%</strong>。 ';

 const A_SUCCESS_INSTALL = '<strong>完成：</strong> phpmyBugs 现已完全配置。 ';
 const A_ERROR_INSTALL = '<strong>错误：</strong> phpmyBugs 已设定。如果您想重置配置，请删除设定档。 ';
 const A_MODIF_SAVED = '修改已储存。 ';

 const A_ERROR_FORM = '发生错误。请再次发送表格。 ';
 const A_ERROR_TOKEN = '错误的标记。请再次发送表格。 ';
 const A_ERROR_EMPTY = '您必须指定使用者名称和密码。 ';
 const A_ERROR_SAME_USERNAME = '该使用者名称不可用。 ';
 const A_SUCCESS_SIGNUP = '<strong>完成：</strong>您现在可以登入了。 ';

 const A_CONFIRM_DELETE_COMMENT = '您确定要删除此评论吗？ ';
 const A_SUCCESS_DELETE_COMMENT = '评论已删除。 ';
 const A_CONFIRM_DELETE_ISSUE = '您确定要删除此问题吗？ ';
 const A_SUCCESS_DELETE_ISSUE = '该问题已删除。 ';
 const A_CONFIRM_DELETE_UPLOAD = '您确定要删除此档案吗？ ';
 const A_CONFIRM_DELETE_PROJECT = '您确定要删除此项目吗？所有相应的问题都将丢失。 ';

 const A_LOGGED = '您现在已登入系统。 ';
 const A_LOGGED_OUT = '您现在已从系统中登出。 ';
 const A_ERROR_CONNEXION = '<strong>错误：</strong>使用者名称或密码错误。 ';
 const A_ERROR_CONNEXION_WAIT = '<strong>错误：</strong>使用者名称或密码错误。请等待 %duration% %period%，然后再试一次。 ';
 const A_ERROR_LOGIN_WAIT = '请等待 %duration% %period% 后再重试。这是针对恶意攻击的保护。 ';

 const A_ERROR_UPLOAD = '发生错误。请再试一次。 ';
 const A_ERROR_UPLOAD_SIZE = '档案超出允许的最大大小（%nb% max）。 ';
 const A_ERROR_UPLOAD_FULL = '您没有足够的磁碟空间来上传此档案：剩余 %nb%。 ';

 const A_PLEASE_LOGIN_ISSUES = '请登入检视问题。 ';
 const A_PLEASE_LOGIN_COMMENT = '请登入后发表评论。还没有帐户？创建一个：它是免费的，而且速度非常快！ ';
 const A_PLEASE_LOGIN_ISSUE = '请登入以提交问题。还没有帐户？创建一个：它是免费的，而且速度非常快！ ';
 const A_SHOULD_LOGIN = '如果您有帐户，请登入。 ';

 const A_IE = '您的浏览器已过时：<a href="'.BROWSER.'">升级或更改</a>。 ';

 # 邮件

 const M_NEW_COMMENT_O = '[%title% — %project% — Issue #%id%] 新评论';
 const M_NEW_COMMENT = '嗨，%用户名%！

问题 #%id% —“%summary%”刚刚被 %by% 评论。您可以在这里阅读新评论：
 %网址%。

如果您不想收到有关此问题的进一步通知，可以透过上面的连结使用选项（登入后）。

-----
这是一封自动发送的电子邮件，请勿回覆。 ';

 const M_NEW_ISSUE_O = '[%title% — %project%] 新问题';
 const M_NEW_ISSUE = '嗨，%用户名%！

%by% 刚刚提交了问题 #%id% —“%summary%”。您可以在这里阅读：
 %网址%。

如果您不想收到有关此问题的进一步通知，可以透过上面的连结使用选项（登入后）。

-----
这是一封自动发送的电子邮件，请勿回覆。 ';

 # 标题

 const T_INSTALLATION = '安装';
 const T_SETTINGS = '设定';
 const T_GLOBAL_SETTINGS = '全域设定';
 const T_APPEARANCE = '外观';
 const T_ISSUES = '问题';
 const T_GROUPS = '组';
 const T_USERS = '使用者';
 const T_PERMISSIONS = '权限';
 const T_ENABLE_CAPTCHA = '管理验证码';
 const T_CAPTCHA = '验证码';
 const T_BROWSE_ISSUES = '浏览问题';
 const T_BROWSE_ALL_ISSUES = '浏览所有问题';
 const T_ALL_ISSUES_DESCRIPTION = '这是所有项目的所有未决问题';
 const T_NEW_ISSUE = '新问题';
 const T_ALL_ISSUES = '所有问题';
 const T_PROJECTS = '项目';
 const T_DASHBOARD = '仪表板';
 const T_LAST_UPDATES = '最后更新';
 const T_LAST_ACTIVITY = '最后一个活动';
 const T_UPLOADS = '上传';
 const T_SEARCH = '搜寻';
 const T_LINK_CONTACT = '联络我们';
 const T_LINK_LEGALNOTICE = '法律声明';
 const T_LINK_PRIVACYPOLICY = '隐私权政策';
 const T_API_SETTINGS = 'API';
 const T_API_ENABLE_SETTINGS = '管理 API';
 const T_API_ACCESS_SETTINGS = 'API 存取';
 const T_INFO = '讯息';

 # 表格

 const F_USERNAME = '使用者名称：';
 const F_PASSWORD = '密码：';
 const F_USERNAME2 = '使用者名称';
 const F_PASSWORD2 = '密码';
 const F_NAME = '名称：';
 const F_URL = '网址：';
 const F_URL_CDN = 'CDN 网址：';
 const F_URL_REWRITING = '网址重写：';
 const F_INTRO = '简介：';
 const F_DESCRIPTION = '说明：';
 const F_EMAIL = '电子邮件：';
 const F_LINK_CONTACT = '外部联络页面连结（可以留空）：';
 const F_LINK_LEGALNOTICE = '法律声明连结（可以留空）：';
 const F_LINK_PRIVACYPOLICY = '隐私权政策连结（可以留空）：';
 const F_MAX_UPLOAD = '每次上传的最大大小：';
 const F_ALLOCATED_SPACE = '为每个使用者指派的空间：';
 const F_GROUP = '组：';
 const F_NOTIFICATIONS = '收到通知：';
 const F_PROJECT_X = '项目「%name%」:';
 const F_LANGUAGE = '语言：';
 const F_LOGS = '日志：';

 const F_ISSUES_PAGE = '每页问题：';
 const F_ISSUES_PAGE_SEARCH = '每页问题（搜寻）：';
 const F_PREVIEW_ISSUE = '预览长度（问题）：';
 const F_PREVIEW_SEARCH = '预览长度（搜寻）：';
 const F_PREVIEW_PROJECT = '预览长度（项目）：';
 const F_LAST_EDITS = '仪表板上显示的问题数：';
 const F_LAST_ACTIVITY = '使用者页面上显示的问题数：';
 const F_THEME = "主题";
 const F_TIP_THEME = "将 .css 档案放入";

 const F_ADD_PROJECT = '新专案';
 const F_ADD_COLOR = '新颜色';
 const F_ADD_STATUS = '新状态';
 const F_ADD_LABEL = '新标签';
 const F_ADD_GROUP = '新群组';
 const F_ADD_USER = '新使用者';

 const F_SORT_BY = '排序依据：';
 const F_SORT_ID = 'ID';
 const F_SORT_MOD = '最后更新';
 const F_SORT_DESC = '降序';
 const F_SORT_ASC = '升序';
 const F_FILTER_STATUSES = '过滤器状态：';
 const F_FILTER_STATES = '过滤器状态：';
 const F_FILTER_LABELS = '过滤标签：';
 const F_FILTER_USERS = '过滤使用者：';
 const F_FILTER_MILESTONE = '过滤里程碑：';

 const F_WRITE = '写入：';
 const F_SUMMARY = '摘要';
 const F_CONTENT = '内容';

 const F_STATUS = '状态：';
 const F_RELATED = '相关：';
 const F_LABELS2 = '标签：';
 const F_MILESTONE = '里程碑：';

 const F_GENERAL_SETTINGS = '常规设定：';
 const F_PROJECTS = '项目：';
 const F_DATABASE = '资料库：';
 const F_UPLOADS = '上传：';
 const F_COLORS = '管理颜色：';
 const F_DISPLAY = '管理显示：';
 const F_STATUSES = '管理状态：';
 const F_LABELS = '管理标签：';
 const F_GROUPS = '管理群组：';
 const F_PERMISSIONS = '管理权限：';
 const F_USERS = '管理使用者：';

 const F_INVALID_CAPTCHA = '您输入的验证码错误。请再试一次。 ';

 const F_TIP_NAME = '它将显示在每页的页首。 ';
 const F_TIP_URL_REWRITING = '将此栏位留空以停用 URL 重写。否则，它应该包含相对于网域的 phpmyBugs 资料夹的路径（以“/”开头和结尾）。 ';
 const F_TIP_URL_CDN = '将此栏位留空以停用 CDN。否则，它必须包含您的 CDN 的 URL（例如<em>'.CDN_RAW_GIT.'</em>，请随意使用这个）。确保托管 CDN 上 <em>/public</em> 资料夹中的所有档案。 ';
 const F_TIP_INTRO = '它将显示在主页上。它将使用 Markdown 语法进行解析。注意：如果只有一个名为「%name%」的项目，主页会自动重新导向到项目仪表板，并且不会显示此文字。 ';
 const F_TIP_EMAIL = '将此栏位留空以停用电子邮件通知。否则，发送电子邮件通知时将使用该地址作为寄件者。 ';
 const F_TIP_PASSWORD = '如果您不想更改密码，请将其留空。 ';
 const F_TIP_USER_EMAIL = '只有在您想要接收通知时才需要。 ';
 const F_TIP_NOTIFICATIONS = '这是预设值：您可以针对每个问题更改它。 ';
 const F_TIP_NOTIFICATIONS_DISABLED = '注意：通知目前已被管理员停用。 ';
 const F_TIP_DESCRIPTION = '它将显示在专案仪表板上。它将使用 markdown 语法进行解析。 ';

 const F_TIP_MAX_UPLOAD = '每个上传的档案不能超过此大小。 ';
 const F_TIP_ALLOCATED_SPACE = '使用者一旦达到此限制，就无法上传其他档案。 。 ';

 const F_TIP_ID_STATUS = '<b>提示：</b>更改ID 时要小心，因为每个问题都会保留其旧的状态ID（除非该ID 不再存在：在这种情况下，将使用预设状态） 。 ';
 const F_TIP_ID_LABEL = '<b>提示：</b>更改ID 时要小心，因为一个问题的每个标签都会保留其旧ID（除非该ID 不再存在：在这种情况下，该标签将从问题）。 ';
 const F_TIP_ID_GROUP = '<b>提示：</b>更改ID 时要小心，因为每个使用者都会保留其旧的群组ID（除非该ID 不再存在：在这种情况下，将使用预设群组）。 ';
 const F_TIP_CAPTCHA = '选择未登入使用者显示验证码的动作。 ';
 const F_TIP_API_ACCESS = '在<em>/database/config_api.php</em>档案中设定A​​PI存取。有关详细信息，请参阅 API.md 档案。 ';

 const F_API_ENABLE = '启用 API';

 const HELP_MARKDOWN = '
 <h2>马克德自己的语法：</h2>

 <p>段落：</p>
<pre><code class="blank no-highlight">段落之间以一个或多个空白行分隔。
这就是为什么此文字将显示在前一个短语的同一行中，无论换行符号如何。

要开始新行而不建立新段落：
在换行符前插入 2 个空格，就像这里一样。
 <p>强调：</p>
<pre><code class="blank no-highlight">*斜体文字*
_又是斜体文字_

**粗体文字**
__再次粗体文字__ </code></pre>

 <p>连结：</p>
<pre><code class="blank no-highlight">这是内嵌连结的[范例](http://example.com)。
这是另一个：<http://example.com>。

 <p>图片：</p>
<pre><code class="blank no-highlight">![我是一张图片。

 <p>标题：</p>
<pre><code class="blank no-highlight"># 顶级标题
## 二级标题
### 三级标题
####四级标题</code></pre>

 <p>列表：</p>
<pre><code class="blank no-highlight">- 一项
* 另一个

1.第一项
2.第二项</code></pre>

 <p>区块引用：</p>
<pre><code class="blank no-highlight">> 我是一个包含两个段落​​的区块引用。
>
> 我是第二段。

 <p>程式码区块：</p>
<pre><code class="blank no-highlight">这是一个「内嵌程式码区块」。
<pre><code class="blank no-highlight"> <?php echo "我是一个程式码区块，因为我缩排了
 有 4 个空格"; ?></code></pre>
<pre><code class="blank no-highlight">```
<?php echo "我是一个程式码区块。"; ？
````

````php
&lt;?php echo "支援的语言有：bash, cs, ruby​​, diff, javascript, css, xml, http, java, php, python, sql, ini, perl, json, cpp, markdown, no-highlight "; ？
```</code></pre>
 ';


 private static $permissions = array(
 'home' => array(
 'title' => '首页：',
 'description' => '可以存取主页并查看其项目的所有未解决问题的清单。 '
 ),
 'dashboard' => array(
 'title' => '仪表板：',
 'description' => '可以存取专案仪表板。 '
 ),
 'issues' => array(
 'title' => '查看问题：',
 'description' => '可以查看公共问题。 '
 ),
 'private_issues' => array(
 'title' => '查看私人问题：',
 'description' => '可以查看标记为私人的问题。 '
 ),
 'search' => array(
 'title' => '搜寻：',
 'description' => '可以搜寻问题或使用者。 '
 ),
 'new_issue' => array(
 'title' => '新问题：',
 'description' => '可以提交新问题。 '
 ),
 'edit_issue' => array(
 'title' => '编辑问题：',
 'description' => '可以编辑所有问题的文字并删除它们。 '
 ),
 'update_issue' => array(
 'title' => '更新问题：',
 'description' => '可以更新问题：更改状态、新增标签、关闭并重新打开，...'
 ),
 'post_comment' => array(
 'title' => '发表评论：',
 'description' => '可以发表评论。 '
 ),
 'edit_comment' => array(
 'title' => '编辑评论：',
 'description' => '可以编辑所有评论（用户无论如何都可以编辑自己的评论）。 '
 ),
 'view_user' => array(
 'title' => '使用者个人资料：',
 'description' => '可以查看所有使用者个人资料。 '
 ),
 'upload' => array(
 'title' => '发布文件：',
 'description' => '可以将文件附加到评论或新问题。 '
 ),
 'view_upload' => array(
 'title' => '查看上传内容：',
 'description' => '可以存取所有上传的档案。 '
 ),
 'settings' => array(
 'title' => '更改设定：',
 'description' => '可以存取此页面并修改所有全域设定。 '
 ),
 'signup' => array(
 'title' => '注册：',
 'description' => '可以注册。 '
 ),
 'view_errors' => array(
 'title' => '查看致命错误：',
 'description' => '可以查看致命错误的描述。 '
 )
 );

 public static function permissions($id, $type = '描述') {
 return self::$permissions[$id][$type];
 }

 private static $settings = array(
 'validate_url' => '该网址无效。 ',
 'validate_email' => '电子邮件无效。 ',
 'private_label_removed' => '您无法删除私有标签或变更其 ID，但可以重新命名。 ',
 'default_status_removed' => '您无法删除预设状态或变更其 ID，但可以重新命名。 ',
 'default_group_removed' => '您无法删除预设群组或更改其 ID，但可以重命名它。 ',
 'default_group_superuser_removed' => '您无法删除超级使用者群组或变更其 ID，但可以重新命名。 ',
 'validate_same_username' => '警告：两个使用者有相同的使用者名称。 ',
 'validate_same_project_name' => '两个项目不能有相同的名称。其中一个已自动重命名。 ',
 'language_modified' => '刷新此页面即可以新语言检视。 '
 );

 public static function settings($id) {
 return self::$settings[$id];
 }

 private static $errors = array(
 E_ERROR => '致命错误',
 E_WARNING => '警告',
 E_PARSE => '解析错误',
 E_NOTICE => '通知',
 E_STRICT => '建议',
 E_DEPRECATED => '已弃用','预设' => '错误'
 );

 public static function errors($no) {
 return (isset(self::$errors[$no])) ? self::$errors[$no] : self::$errors['default'];
 }
}

?>