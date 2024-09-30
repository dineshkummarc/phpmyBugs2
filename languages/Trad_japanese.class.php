<?php

class Trad {

# 単語

const W_ISSUE = '問題';
const W_OPEN = '開く';
const W_OPENED = '開く';
const W_CLOSED = '閉じる';
const W_REOPENED = '再開';
const W_COMMENTED = 'コメント済み';
const W_NOBODY = '誰も';
const W_SOMEONE = '誰か';
const W_ENABLED = '有効';
const W_DISABLED = '無効';
const W_NOTFOUND = '見つかりません';
const W_FORBIDDEN = '禁止';
const W_MENU = 'メニュー';

const W_EXAMPLE = '例';
const W_HEX = '16 進数';
const W_RENDERING = 'レンダリング';
const W_ID = 'ID';
const W_DISPLAY_NAME = '表示名';

const W_SECONDE = '秒';
const W_MINUTE = '分';
const W_HOUR = '時間';
const W_DAY = '日';
const W_WEEK = '週';
const W_MONTH = '月';
const W_YEAR = '年';
const W_DECADE = '10 進数';
const W_SECONDE_P = '秒';
const W_MINUTE_P = '分';
const W_HOUR_P = '時間';
const W_DAY_P = '日';
const W_WEEK_P = '週';
const W_MONTH_P = '月';
const W_YEAR_P = '年';
const W_DECADE_P = '十年';

const W_PREVIOUS = '前';
const W_NEXT = '次';
const W_MORE = '続き';
const W_CURRENT = 'ページ %nb1% / %nb2%';

const W_NOT_LOGGED = 'ログインしていません';

const W_SUSPENSION = '…';
const W_EXTRACT = '“%text%”';

const W_USER = 'ユーザー';
const W_DEVELOPPER = '開発者';
const W_SUPERUSER = 'スーパーユーザー';
const W_S_NEW = '新規';
const W_S_CONFIRMED = '確認済み';
const W_S_ASSIGNED = '%user% に割り当て済み';
const W_S_RESOLVED = '解決済み';
const W_S_REJECTED = '拒否';
const W_L_URGENT = '緊急';
const W_L_IMPROVEMENT = '改善';
const W_L_PRIVATE = '非公開';

const W_PROFILEPIC = 'プロフィール写真';

const W_RSS = 'RSS フィード';
const W_VERSION = 'バージョン';

const W_CAPTCHA_IMAGE = 'CAPTCHA 画像';
const W_CAPTCHA_REFRESH = '画像を更新';
const W_CAPTCHA_INPUT = 'テキストを入力してください:';

# 動詞

const V_UPDATE = '更新';
const V_UPDATE_DETAILS = '詳細を更新';
const V_UPDATE_CONTENT = 'コンテンツを更新';
const V_UPDATE_AND = '更新 & %adjective%';
const V_CANCEL = 'キャンセル';
const V_PREVIEW = 'プレビュー';
const V_COMMENT = 'コメント';
const V_SUBMIT = '送信';
const V_SELECT_FILE = 'ファイルを選択...';
const V_UPLOADING = 'アップロード中...';
const V_SAVE_CONFIG = '設定を保存';
const V_APPLY = '適用';
const V_EDIT = '編集';
const V_SIGNUP = 'サインアップ';
const V_LOGIN = 'ログイン';
const V_CONTINUE = '続行';
const V_REMOVE_ISSUE = '問題を削除';
const V_CLOSE = '閉じる';
const V_REOPEN = '再度開く';
const V_EXPORT = '生データをエクスポート';

# 文

const S_NOLABEL = '–';
const S_NODEPENDENCY = '–';
const S_COMMENT_LEAVE = 'コメントを残す:';
const S_AGO = '%duration% %pediod% 前';
const S_ISSUE_ABOUT = 'この問題について:';
const S_UPLOAD_ADD = 'ファイルを添付:';
const S_WELCOME = 'ようこそ、%user%';
const S_NEVER = 'なし';
const S_ME = '私が貢献した問題の更新について';
const S_ALWAYS = '各更新について';
const S_START_NOTIF = '新しい更新について通知する';
const S_STOP_NOTIF = '更新について通知しない';
const S_NOTFOUND = 'お探しのページはもう存在しません...';
const S_FORBIDDEN = 'このページにアクセスすることは許可されていません。続行するにはログイン/ログアウトしてください。';

const S_VIEW_PARTICIPATION = '彼の参加を表示します。';
const S_VIEW_STATUS = '問題「%status%」を表示します。';

const S_ISSUE_CREATED = '%user% %time% による';
const S_ISSUE_UPDATED = '%adj% by %user% %time%.';
const S_ISSUE_STATUS_UPDATED = 'ステータスが %status% に更新されました by %user% %time%.';

const S_RSS_ISSUE_UPDATED = '%adj% by %user%.';
const S_RSS_ISSUE_STATUS_UPDATED = 'ステータスが %user% によって “%status%” に更新されました。';

const S_INTRO_INSTALL = 'phpmyBugs を初めて実行されたようです。設定してください:';
const S_FIRST_ISSUE_TITLE = 'お元気ですか、パンプキンさん?';
const S_FIRST_ISSUE = '私はあなたの最初の問題です! ログイン後、私を削除できます。';

const S_NO_USER = 'リクエストに一致するユーザーがいません。';
const S_NO_ISSUE = 'リクエストに一致する問題はありません。';
const S_MATCHING_ISSUES = '%nb% 件の一致する問題';
const S_NO_ACTIVITY = '最近のアクティビティはありません。';
const S_NO_UPLOAD = 'アップロードはありません。';
const S_SIZE_REMAINING = '%total% の許可された残りは %remain% です。';
const S_NO_PROJECT = 'プロジェクトはありません。';

const S_SEARCH = '#12、@user、単語…';
const S_COPYRIGHT = '%name% によって提供されています。';
const S_UPGRADE = '<a href="'.RELEASE.'">GitHub</a> から最新バージョンを取得して、<a href="'.UPGRADE.'">アップグレード</a>します。';

const S_LAST_UPDATES = '最新の更新...';

const S_STAY_LOGGEDIN = 'ログイン状態を維持します';

const S_DEFAULT_DEFPROJ_DESC = 'これは、全員がアクセスできるデフォルトのプロジェクトです。';

const S_DEFAULT_2NDPROJ_DESC = 'これは、登録ユーザーのみが問題を投稿できる 2 番目のプロジェクトです。';

# アラート

const A_ERROR_DIRECTORY = '<strong>エラー:</strong> ディレクトリ “%name%” を作成できません。'; const A_ERROR_FILE = '<strong>エラー:</strong> ファイル “%name%” を読み取れません。';
const A_ERROR_FILE_WRITE = '<strong>エラー:</strong> ファイル “%name%” に書き込めません。';
const A_ERROR_FATAL = '申し訳ございません。問題が発生しました。問題が解決しない場合は、管理者に連絡してください。';
const A_ERROR = '<strong>%title%:</strong><br /><br />%message%<br /><br />ファイル “<strong>%file%</strong>” の行 <strong>%line%</strong> にあります。';

const A_SUCCESS_INSTALL = '<strong>完了:</strong> phpmyBugs の設定が完了しました。';
const A_ERROR_INSTALL = '<strong>エラー:</strong> phpmyBugs はすでに設定されています。設定をリセットする場合は、設定ファイルを削除してください。';
const A_MODIF_SAVED = '変更が保存されました。';

const A_ERROR_FORM = 'エラーが発生しました。フォームを再度送信してください。';
const A_ERROR_TOKEN = 'トークンが間違っています。フォームを再度送信してください。';
const A_ERROR_EMPTY = 'ユーザー名とパスワードを指定する必要があります。';
const A_ERROR_SAME_USERNAME = 'このユーザー名は使用できません。';
const A_SUCCESS_SIGNUP = '<strong>完了:</strong> これでログインできます。';

const A_CONFIRM_DELETE_COMMENT = 'このコメントを削除してもよろしいですか?';
const A_SUCCESS_DELETE_COMMENT = 'コメントは削除されました。';
const A_CONFIRM_DELETE_ISSUE = 'この課題を削除してもよろしいですか?';
const A_SUCCESS_DELETE_ISSUE = '課題は削除されました。';
const A_CONFIRM_DELETE_UPLOAD = 'このファイルを削除してもよろしいですか?';
const A_CONFIRM_DELETE_PROJECT = 'このプロジェクトを削除してもよろしいですか? 関連するすべての問題は失われます。';

const A_LOGGED = 'システムにログインしました。';
const A_LOGGED_OUT = 'システムからログアウトしました。';
const A_ERROR_CONNEXION = '<strong>エラー:</strong> ユーザー名またはパスワードが間違っています。';
const A_ERROR_CONNEXION_WAIT = '<strong>エラー:</strong> ユーザー名またはパスワードが間違っています。再試行する前に %duration% %period% 待ってください。';
const A_ERROR_LOGIN_WAIT = '再試行する前に %duration% %period% 待ってください。これは悪意のある攻撃に対する保護です。';

const A_ERROR_UPLOAD = 'エラーが発生しました。もう一度お試しください。';
const A_ERROR_UPLOAD_SIZE = 'ファイルが最大許容サイズ (最大 %nb%) を超えています。';
const A_ERROR_UPLOAD_FULL = 'このファイルをアップロードするためのディスク容量が足りません: 残り %nb% です。';

const A_PLEASE_LOGIN_ISSUES = '問題を確認するにはログインしてください。';
const A_PLEASE_LOGIN_COMMENT = 'コメントを投稿するにはログインしてください。まだアカウントをお持ちでない場合は、アカウントを作成してください。無料で非常に高速です!';
const A_PLEASE_LOGIN_ISSUE = '問題を送信するにはログインしてください。まだアカウントをお持ちでない場合は、アカウントを作成してください。無料で非常に高速です!';
const A_SHOULD_LOGIN = 'アカウントをお持ちの場合は、ログインしてください。お持ちでない場合は、作成を検討してください。無料で非常に高速です!';

const A_IE = 'お使いのブラウザは古いです: <a href="'.BROWSER.'">アップグレードまたは変更してください</a>。';

# メール

const M_NEW_COMMENT_O = '[%title% — %project% — 問題 #%id%] 新しいコメント';

const M_NEW_COMMENT = 'こんにちは、%username%!

問題 #%id% — “%summary%” に %by% がコメントしました。新しいコメントは、次のリンクから読むことができます:
%url%。

この問題に関する今後の通知を受け取りたくない場合は、上記のリンクから (ログイン後に) オプションを利用できます。

-----
これは自動メールです。返信しないでください。
';

const M_NEW_ISSUE_O = '[%title% — %project%] 新しい問題';

const M_NEW_ISSUE = 'こんにちは、%username%!

問題 #%id% — “%summary%” が %by% によって提出されました。こちらで読むことができます:
%url%。

この問題に関する今後の通知を受け取りたくない場合は、上記のリンクから (ログイン後に) オプションを利用できます。

-----
これは自動メールです。返信しないでください。
';

# タイトル

const T_INSTALLATION = 'インストール';
const T_SETTINGS = '設定';
const T_GLOBAL_SETTINGS = 'グローバル設定';
const T_APPEARANCE = '外観';
const T_ISSUES = '問題';
const T_GROUPS = 'グループ';
const T_USERS = 'ユーザー';
const T_PERMISSIONS = '権限';
const T_ENABLE_CAPTCHA = 'Captcha の管理';
const T_CAPTCHA = 'Captcha';
const T_BROWSE_ISSUES = '問題を参照';
const T_BROWSE_ALL_ISSUES = 'すべての問題を参照';
const T_ALL_ISSUES_DESCRIPTION = 'これはすべてのプロジェクトの未解決の問題です';
const T_NEW_ISSUE = '新しい問題';
const T_ALL_ISSUES = 'すべての問題';
const T_PROJECTS = 'プロジェクト';
const T_DASHBOARD = 'ダッシュボード';
const T_LAST_UPDATES = '最終更新';
const T_LAST_ACTIVITY = '最終アクティビティ';
const T_UPLOADS = 'アップロード';
const T_SEARCH = '検索';
const T_LINK_CONTACT = 'お問い合わせ';
const T_LINK_LEGALNOTICE = '法的通知';
const T_LINK_PRIVACYPOLICY = 'プライバシー ポリシー';
const T_API_SETTINGS = 'API';
const T_API_ENABLE_SETTINGS = 'API の管理';
const T_API_ACCESS_SETTINGS = 'API アクセス';
const T_INFO = '情報';

# フォーム

const F_USERNAME = 'ユーザー名:';
const F_PASSWORD = 'パスワード:';
const F_USERNAME2 = 'ユーザー名';
const F_PASSWORD2 = 'パスワード';
const F_NAME = '名前:';
const F_URL = 'URL:';
const F_URL_CDN = 'CDN URL:';
const F_URL_REWRITING = 'URL書き換え:';
const F_INTRO = '概要:';
const F_DESCRIPTION = '説明:';
const F_EMAIL = 'メールアドレス:';
const F_LINK_CONTACT = '外部の連絡先ページへのリンク（空白のままにできます）:';
const F_LINK_LEGALNOTICE = '法的通知へのリンク（空白のままにできます）:';
const F_LINK_PRIVACYPOLICY = 'プライバシー ポリシーへのリンク（空白のままにできます）:';
const F_MAX_UPLOAD = 'アップロードあたりの最大サイズ:';
const F_ALLOCATED_SPACE = 'ユーザーあたりの割り当て領域:';
const F_GROUP = 'グループ:';
const F_NOTIFICATIONS = '通知を受け取る:';
const F_PROJECT_X = 'プロジェクト “%name%”:';
const F_LANGUAGE = '言語:';
const F_LOGS = 'ログ:';

const F_ISSUES_PAGE = 'ページあたりの問題:';
const F_ISSUES_PAGE_SEARCH = 'ページあたりの課題数 (検索):';
const F_PREVIEW_ISSUE = 'プレビューの長さ (課題):';
const F_PREVIEW_SEARCH = 'プレビューの長さ (検索):';
const F_PREVIEW_PROJECT = 'プレビューの長さ (プロジェクト):';
const F_LAST_EDITS = 'ダッシュボードに表示される課題の数:';
const F_LAST_ACTIVITY = 'ユーザー ページに表示される課題の数:';
const F_THEME = "テーマ";
const F_TIP_THEME = ".css ファイルを次の場所に配置します";

const F_ADD_PROJECT = '新しいプロジェクト';
const F_ADD_COLOR = '新しい色';
const F_ADD_STATUS = '新しいステータス';
const F_ADD_LABEL = '新しいラベル';
const F_ADD_GROUP = '新しいグループ';
const F_ADD_USER = '新しいユーザー';

const F_SORT_BY = '並べ替え:';
const F_SORT_ID = 'ID';
const F_SORT_MOD = '最終更新';
const F_SORT_DESC = '降順';
const F_SORT_ASC = '昇順';
const F_FILTER_STATUSES = 'フィルターステータス:';
const F_FILTER_STATES = 'フィルター状態:';
const F_FILTER_LABELS = 'フィルターラベル:';
const F_FILTER_USERS = 'フィルターユーザー:';
const F_FILTER_MILESTONE = 'フィルターマイルストーン:';

const F_WRITE = '書き込み:';
const F_SUMMARY = '概要';
const F_CONTENT = 'コンテンツ';

const F_STATUS = 'ステータス:';
const F_RELATED = '関連:';
const F_LABELS2 = 'ラベル:';
const F_MILESTONE = 'マイルストーン:';

const F_GENERAL_SETTINGS = '一般設定:';
const F_PROJECTS = 'プロジェクト:';
const F_DATABASE = 'データベース:';
const F_UPLOADS = 'アップロード:';
const F_COLORS = '色の管理:';
const F_DISPLAY = '表示の管理:';
const F_STATUSES = 'ステータスの管理:';
const F_LABELS = 'ラベルの管理:';
const F_GROUPS = 'グループの管理:';
const F_PERMISSIONS = '権限の管理:';
const F_USERS = 'ユーザーの管理:';

const F_INVALID_CAPTCHA = '入力した CAPTCHA が間違っています。もう一度お試しください。';

const F_TIP_NAME = '各ページのヘッダーに表示されます。';
const F_TIP_URL_REWRITING = 'URL の書き換えを無効にするには、このフィールドを空のままにしてください。それ以外の場合は、ドメイン名を基準とした phpmyBugs フォルダへのパス (先頭と末尾に "/" が付く) を含める必要があります。';
const F_TIP_URL_CDN = 'CDN を無効にするには、このフィールドを空のままにしてください。それ以外の場合は、CDN の URL を含める必要があります (例: <em>'.CDN_RAW_GIT.'</em>。この URL を自由に使用してください)。<em>/public</em> フォルダーのすべてのファイルを CDN でホストするようにしてください。';
const F_TIP_INTRO = 'ホームページに表示されます。Markdown 構文で解析されます。注: 「%name%」という名前のプロジェクトが 1 つしかない場合、ホームページは自動的にプロジェクト ダッシュボードにリダイレクトされ、このテキストは表示されません。';
const F_TIP_EMAIL = 'メール通知を無効にするには、このフィールドを空のままにしてください。それ以外の場合は、メール通知を送信するときにこのアドレスが送信者として使用されます。';
const F_TIP_PASSWORD = 'パスワードを変更しない場合は、空のままにしてください。';
const F_TIP_USER_EMAIL = '通知を受信する場合にのみ必要です。'; const F_TIP_NOTIFICATIONS = 'これはデフォルト設定です。各課題ごとに変更できます。';
const F_TIP_NOTIFICATIONS_DISABLED = '注意: 通知は現在管理者によって無効になっています。';
const F_TIP_DESCRIPTION = 'プロジェクトダッシュボードに表示されます。マークダウン構文で解析されます。';

const F_TIP_MAX_UPLOAD = 'アップロードされた各ファイルはこのサイズを超えることはできません。';
const F_TIP_ALLOCATED_SPACE = 'この制限に達すると、ユーザーは他のファイルをアップロードできなくなります。<br /><em>注意:</em> ログインしているユーザーが誰もファイルをアップロードできない場合 (これはデフォルト設定ではありません)、この制限は適用されません。';

const F_TIP_ID_STATUS = '<b>ヒント:</b> ID を変更するときは注意してください。各課題は古いステータス ID を保持します (この ID が存在しない場合は除きます。この場合は、デフォルトのステータスが使用されます)。';
const F_TIP_ID_LABEL = '<b>ヒント:</b> ID を変更するときは注意してください。1 つの課題の各ラベルは古い ID を保持します (この ID が存在しない場合は除きます。この場合は、ラベルが課題から削除されます)。';
const F_TIP_ID_GROUP = '<b>ヒント:</b> ID を変更するときは注意してください。各ユーザーは古いグループ ID を保持します (この ID が存在しない場合は除きます。この場合は、デフォルトのグループが使用されます)。';
const F_TIP_CAPTCHA = 'ログインしていないユーザーに対してキャプチャを表示するアクションを選択します。';
const F_TIP_API_ACCESS = '<em>/database/config_api.php</em> ファイルで API アクセスを構成します。詳細については、API.md ファイルを参照してください。';

const F_API_ENABLE = 'API を有効にします';

const HELP_MARKDOWN = '
<h2>Markd独自の構文:</h2>

<p>段落:</p>

<pre><code class="blank no-highlight">段落は 1 行以上の空白行で区切られます。

そのため、改行に関係なく、このテキストは前のフレーズと同じ行に表示されます。

新しい段落を作成せずに新しい行を開始するには、次のように改行の前に 2 つのスペースを挿入します。</code></pre>

<p>強調:</p>

<pre><code class="blank no-highlight">*斜体テキスト*
_再び斜体テキスト_

**太字テキスト**
__再び太字テキスト__ </code></pre>

<p>リンク:</p>

<pre><code class="blank no-highlight">これはインライン リンクの [例](http://example.com) です。

これは別の例です: &lt;http://example.com&gt;.</code></pre>

<p>画像:</p>
<pre><code class="blank no-highlight">![私は画像です。](http://example.com/image.png)</code></pre>

<p>ヘッダー:</p>
<pre><code class="blank no-highlight"># トップレベルのタイトル
## セカンドレベルのタイトル
### サードレベルのタイトル
#### 第 4 レベルのタイトル</code></pre>

<p>リスト:</p>
<pre><code class="blank no-highlight">- 1 つの項目
* もう 1 つ

1. 最初の項目
2. 2 番目の項目</code></pre>

<p>引用:</p>
<pre><code class="blank no-highlight">> 私は 2 つの段落を持つ引用です。
>
> 私は 2 番目の段落です。</code></pre>

<p>コード ブロック:</p>
<pre><code class="blank no-highlight">これは `インライン コード ブロック` です。</code></pre>
<pre><code class="blank no-highlight"> &lt;?php echo "私は 4 つのスペースでインデントされているため、コード ブロックです"; ?&gt;</code></pre>
<pre><code class="blank no-highlight">```
&lt;?php echo "私はコード ブロックです。"; ?&gt;
```

```php
&lt;?php echo "サポートされている言語は、bash、cs、ruby、diff、javascript、css、xml、http、java、php、python、sql、ini、perl、json、cpp、markdown、no-highlight です"; ?&gt;
```</code></pre>
';

private static $permissions = array(
'home' => array(
'title' => 'ホーム:',
'description' => 'ホームページにアクセスし、自分のプロジェクトのすべての未解決の問題のリストを表示できます。'
),
'dashboard' => array(
'title' => 'ダッシュボード:',
'description' => 'プロジェクトダッシュボードにアクセスできます。'
),
'issues' => array(
'title' => '問題を表示:',
'description' => '公開の問題を表示できます。'
),
'private_issues' => array(
'title' => '非公開の問題を表示:',
'description' => '非公開としてタグ付けされた問題を表示できます。'
),
'search' => array(
'title' => '検索:',
'description' => '問題を検索できますまたはユーザー。'
),
'new_issue' => array(
'title' => '新しい問題:',
'description' => '新しい問題を送信できます。'
),
'edit_issue' => array(
'title' => '問題を編集:',
'description' => 'すべての問題のテキストを編集し、削除できます。'
),
'update_issue' => array(
'title' => '問題を更新:',
'description' => '問題を更新できます: ステータスの変更、ラベルの追加、クローズと再開など...'
),
'post_comment' => array(
'title' => 'コメントを投稿:',
'description' => 'コメントを投稿できます。'
),
'edit_comment' => array(
'title' => 'コメントを編集:',
'description' => 'すべてのコメントを編集できます (ユーザーは自分のコメントを編集できます)。'
),
'view_user' => array(
'title' => 'ユーザー プロファイル:',
'description' => 'すべてのユーザー プロファイルを表示できます。'
),
'upload' => array(
'title' => 'ファイルを投稿:',
'description' => 'コメントまたは新しい問題にファイルを添付できます。'
),
'view_upload' => array(
'title' => 'アップロードを表示:',
'description' => 'アップロードされたすべてのファイルにアクセスできます。'
),
'settings' => array(
'title' => '設定を変更:',
'description' => 'このページにアクセスして、すべてのグローバル設定を変更できます。'
),
'signup' => array(
'title' => 'サインインup:',
'description' => 'サインアップできます。'
),
'view_errors' => array(
'title' => '致命的なエラーを表示:',
'description' => '致命的なエラーの説明を表示できます。'
)
);

public static function permission($id, $type = 'description') {
return self::$permissions[$id][$type];
}

private static $settings = array(
'validate_url' => 'URL が無効です。',
'validate_email' => 'メールが無効です。',
'private_label_removed' => 'プライベート ラベルを削除したり、その ID を変更したりすることはできませんが、名前を変更することはできます。',
'default_status_removed' => 'デフォルト ステータスを削除したり、その ID を変更したりすることはできませんが、名前を変更することはできます。',
'default_group_removed' => 'デフォルト グループを削除したり、その ID を変更したりすることはできませんが、名前を変更することはできます。',
'default_group_superuser_removed' => 'スーパーユーザー グループを削除したり、その ID を変更したりすることはできませんが、名前を変更することはできます。',
'validate_same_username' => '警告: 2 人のユーザーが同じユーザー名を持っています。',
'validate_same_project_name' => '2 つのプロジェクトに同じ名前を付けることはできません。1 つは自動的に名前が変更されました。',
'language_modified' => '新しい言語で表示するには、このページを更新してください。'
);

public static function settings($id) {
return self::$settings[$id];
}

private static $errors = array(
E_ERROR => '致命的なエラー',
E_WARNING => '警告',
E_PARSE => '解析エラー',
E_NOTICE => '通知',
E_STRICT => 'アドバイス',
E_DEPRECATED => '非推奨','default' => 'エラー'
);
public static function errors($no) {
return (isset(self::$errors[$no])) ? self::$errors[$no] : self::$errors['default'];
}
}

?>