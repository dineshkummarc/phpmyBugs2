<?php

class Trad {

# Từ

const W_ISSUE = 'Issue';
const W_OPEN = 'Open';
const W_OPENED = 'Opened';
const W_CLOSED = 'Closed';
const W_REOPENED = 'Reopened';
const W_COMMENTED = 'Commented';
const W_NOBODY = 'nobody';
const W_SOMEONE = 'someone';
const W_ENABLED = 'Enabled';
const W_DISABLED = 'Disabled';
const W_NOTFOUND = 'Not found';
const W_FORBIDDEN = 'Forbidden';
const W_MENU = 'Menu';

const W_EXAMPLE = 'Example';
const W_HEX = 'Hex';
const W_RENDERING = 'Kết xuất';
const W_ID = 'ID';
const W_DISPLAY_NAME = 'Tên hiển thị';

const W_SECONDE = 'giây';
const W_MINUTE = 'phút';
const W_HOUR = 'giờ';
const W_DAY = 'ngày';
const W_WEEK = 'tuần';
const W_MONTH = 'tháng';
const W_YEAR = 'năm';
const W_DECADE = 'thập kỷ';
const W_SECONDE_P = 'giây';
const W_MINUTE_P = 'phút';
const W_HOUR_P = 'giờ';
const W_DAY_P = 'ngày';
const W_WEEK_P = 'tuần';
const W_MONTH_P = 'tháng';
const W_YEAR_P = 'năm';
const W_DECADE_P = 'thập kỷ';

const W_PREVIOUS = 'Trước';
const W_NEXT = 'Tiếp theo';
const W_MORE = 'THÊM';
const W_CURRENT = 'Trang %nb1% của %nb2%';

const W_NOT_LOGGED = 'Chưa đăng nhập';

const W_SUSPENSION = '…';
const W_EXTRACT = '“%text%”';

const W_USER = 'Người dùng';
const W_DEVELOPPER = 'Nhà phát triển';
const W_SUPERUSER = 'Siêu người dùng';
const W_S_NEW = 'Mới';
const W_S_CONFIRMED = 'Đã xác nhận';
const W_S_ASSIGNED = 'Đã giao cho %user%';
const W_S_RESOLVED = 'Đã giải quyết';
const W_S_REJECTED = 'Đã từ chối';
const W_L_URGENT = 'Khẩn cấp';
const W_L_IMPROVEMENT = 'Cải thiện';
const W_L_PRIVATE = 'Riêng tư';

const W_PROFILEPIC = 'ảnh đại diện';

const W_RSS = 'Nguồn cấp RSS';
const W_VERSION = 'Phiên bản';

const W_CAPTCHA_IMAGE = 'Hình ảnh CAPTCHA';
const W_CAPTCHA_REFRESH = 'Làm mới hình ảnh';
const W_CAPTCHA_INPUT = 'Nhập văn bản:';

# Động từ

const V_UPDATE = 'Cập nhật';
const V_UPDATE_DETAILS = 'Cập nhật chi tiết';
const V_UPDATE_CONTENT = 'Cập nhật nội dung';
const V_UPDATE_AND = 'Cập nhật & %adjective%';
const V_CANCEL = 'Hủy';
const V_PREVIEW = 'Xem trước';
const V_COMMENT = 'Bình luận';
const V_SUBMIT = 'Gửi';
const V_SELECT_FILE = 'Chọn tệp…';
const V_UPLOADING = 'Đang tải lên…';
const V_SAVE_CONFIG = 'Lưu cài đặt';
const V_APPLY = 'Áp dụng';
const V_EDIT = 'Chỉnh sửa';
const V_SIGNUP = 'Đăng ký';
const V_LOGIN = 'Đăng nhập';
const V_CONTINUE = 'Tiếp tục';
const V_REMOVE_ISSUE = 'Xóa sự cố';
const V_CLOSE = 'đóng';
const V_REOPEN = 'mở lại';
const V_EXPORT = 'Xuất dữ liệu thô';

# Câu

const S_NOLABEL = '–';
const S_NODEPENDENCY = '–';
const S_COMMENT_LEAVE = 'Để lại bình luận:';
const S_AGO = '%duration% %pediod% ago';
const S_ISSUE_ABOUT = 'Về sự cố này:';
const S_UPLOAD_ADD = 'Đính kèm tệp:';
const S_WELCOME = 'Chào mừng, %user%';
const S_NEVER = 'Không bao giờ';
const S_ME = 'Cập nhật về các sự cố tôi đã đóng góp';
const S_ALWAYS = 'Cập nhật từng sự cố';
const S_START_NOTIF = 'Được thông báo về các bản cập nhật mới';
const S_STOP_NOTIF = 'Không còn được thông báo về các bản cập nhật nữa';
const S_NOTFOUND = 'Trang bạn đang tìm kiếm không còn tồn tại nữa...';
const S_FORBIDDEN = 'Bạn không được phép truy cập trang này. Vui lòng đăng nhập/đăng xuất để tiếp tục.';

const S_VIEW_PARTICIPATION = 'Xem sự tham gia của anh ấy.';
const S_VIEW_STATUS = 'Xem các sự cố “%status%”.';

const S_ISSUE_CREATED = 'bởi %user% %time%';
const S_ISSUE_UPDATED = '%adj% bởi %user% %time%.';
const S_ISSUE_STATUS_UPDATED = 'Trạng thái được cập nhật thành %status% bởi %user% %time%.';

const S_RSS_ISSUE_UPDATED = '%adj% của %user%.';
const S_RSS_ISSUE_STATUS_UPDATED = 'Trạng thái được cập nhật thành "%status%" của %user%.';

const S_INTRO_INSTALL = 'Có vẻ như đây là lần đầu tiên bạn chạy phpmyBugs! Vui lòng định cấu hình nó:';
const S_FIRST_ISSUE_TITLE = 'Bạn khỏe không, bí ngô?';
const S_FIRST_ISSUE = 'Tôi là vấn đề đầu tiên của bạn! Sau khi đăng nhập, bạn sẽ có thể xóa tôi.';

const S_NO_USER = 'Không có người dùng nào khớp với yêu cầu của bạn.';
const S_NO_ISSUE = 'Không có vấn đề nào khớp với yêu cầu của bạn.';
const S_MATCHING_ISSUES = '%nb% vấn đề khớp';
const S_NO_ACTIVITY = 'Không có hoạt động gần đây.';

const S_NO_UPLOAD = 'Không tải lên.';
const S_SIZE_REMAINING = '%remain% còn lại trên %total% được phép.';
const S_NO_PROJECT = 'Không có dự án.';

const S_SEARCH = '#12, @user, words…';
const S_COPYRIGHT = 'Được cung cấp bởi %name%.';
const S_UPGRADE = 'Lấy phiên bản mới nhất từ ​​<a href="https://github.com/bugtrackr/Nireus/releases/latest">GitHub</a> để <a href="https://bugtrackr.github.io/wiki/upgrade/">nâng cấp</a>.';

const S_LAST_UPDATES = 'Cập nhật gần đây nhất…';

const S_STAY_LOGGEDIN = 'Giữ tôi đăng nhập';

const S_DEFAULT_DEFPROJ_DESC = 'Đây là dự án mặc định mà mọi người đều có quyền truy cập.';
const S_DEFAULT_2NDPROJ_DESC = 'Đây có thể là dự án thứ 2 của bạn mà chỉ những người dùng đã đăng ký mới được phép đăng sự cố.';

# Cảnh báo

const A_ERROR_DIRECTORY = '<strong>Lỗi:</strong> không thể tạo thư mục “%name%”.';
const A_ERROR_FILE = '<strong>Lỗi:</strong> không thể đọc tệp “%name%”.';
const A_ERROR_FILE_WRITE = '<strong>Lỗi:</strong> không thể ghi tệp “%name%”.';
const A_ERROR_FATAL = 'Rất tiếc, đã xảy ra lỗi. Vui lòng liên hệ với quản trị viên nếu sự cố này vẫn tiếp diễn.';
const A_ERROR = '<strong>%title%:</strong><br /><br />%message%<br /><br />Tệp “<strong>%file%</strong>” trên dòng <strong>%line%</strong>.';

const A_SUCCESS_INSTALL = '<strong>Hoàn tất:</strong> phpmyBugs hiện đã được cấu hình hoàn chỉnh.';
const A_ERROR_INSTALL = '<strong>Lỗi:</strong> phpmyBugs đã được cấu hình. Vui lòng xóa tệp cấu hình nếu bạn muốn đặt lại cấu hình.';
const A_MODIF_SAVED = 'Đã lưu các sửa đổi.';

const A_ERROR_FORM = 'Đã xảy ra lỗi. Vui lòng gửi lại biểu mẫu.';
const A_ERROR_TOKEN = 'Mã thông báo không đúng. Vui lòng gửi lại biểu mẫu.';
const A_ERROR_EMPTY = 'Bạn phải chỉ định tên người dùng và mật khẩu.';
const A_ERROR_SAME_USERNAME = 'Tên người dùng này không khả dụng.';
const A_SUCCESS_SIGNUP = '<strong>Hoàn tất:</strong> Bây giờ bạn có thể đăng nhập.';

const A_CONFIRM_DELETE_COMMENT = 'Bạn có chắc chắn muốn xóa bình luận này không?';
const A_SUCCESS_DELETE_COMMENT = 'Bình luận đã bị xóa.';
const A_CONFIRM_DELETE_ISSUE = 'Bạn có chắc chắn muốn xóa sự cố này không?';
const A_SUCCESS_DELETE_ISSUE = 'Sự cố đã bị xóa.';
const A_CONFIRM_DELETE_UPLOAD = 'Bạn có chắc chắn muốn xóa tệp này không?';
const A_CONFIRM_DELETE_PROJECT = 'Bạn có chắc chắn muốn xóa dự án này không? Tất cả các vấn đề tương ứng sẽ bị mất.';

const A_LOGGED = 'Bây giờ bạn đã đăng nhập vào Hệ thống.';
const A_LOGGED_OUT = 'Bây giờ bạn đã đăng xuất khỏi Hệ thống.';
const A_ERROR_CONNEXION = '<strong>Lỗi:</strong> Tên người dùng hoặc mật khẩu không đúng.';
const A_ERROR_CONNEXION_WAIT = '<strong>Lỗi:</strong> Tên người dùng hoặc mật khẩu không đúng. Vui lòng đợi %duration% %period% trước khi thử lại.';
const A_ERROR_LOGIN_WAIT = 'Vui lòng đợi %duration% %period% trước khi thử lại. Đây là biện pháp bảo vệ chống lại các cuộc tấn công độc hại.';

const A_ERROR_UPLOAD = 'Đã xảy ra lỗi. Vui lòng thử lại.';
const A_ERROR_UPLOAD_SIZE = 'Tệp vượt quá kích thước tối đa được phép (%nb% max).';
const A_ERROR_UPLOAD_FULL = 'Bạn không có đủ dung lượng đĩa để tải tệp này lên: còn lại %nb%.';

const A_PLEASE_LOGIN_ISSUES = 'Vui lòng đăng nhập để xem các sự cố.';
const A_PLEASE_LOGIN_COMMENT = 'Vui lòng đăng nhập để đăng bình luận. Chưa có tài khoản? Tạo một tài khoản: miễn phí và thực sự nhanh chóng!';
const A_PLEASE_LOGIN_ISSUE = 'Vui lòng đăng nhập để gửi sự cố. Chưa có tài khoản? Tạo một tài khoản: miễn phí và thực sự nhanh chóng!';
const A_SHOULD_LOGIN = 'Nếu bạn có tài khoản, vui lòng đăng nhập. Nếu chưa có, hãy cân nhắc tạo một tài khoản: miễn phí và thực sự nhanh chóng!';

const A_IE = 'Trình duyệt của bạn đã lỗi thời: <a href="https://www.browser-update.org/en/update.html">nâng cấp hoặc thay đổi</a>.';

# Thư

const M_NEW_COMMENT_O = '[%title% — %project% — Sự cố #%id%] Bình luận mới';
const M_NEW_COMMENT = 'Xin chào, %username%!

Sự cố #%id% — “%summary%” vừa được %by% bình luận. Bạn có thể đọc bình luận mới tại đây:
%url%.

Nếu bạn không muốn nhận thêm thông báo về sự cố này, có một tùy chọn khả dụng (sau khi đăng nhập) qua liên kết ở trên.

-----
Đây là email tự động, vui lòng không trả lời.
';

const M_NEW_ISSUE_O = '[%title% — %project%] Sự cố mới';
const M_NEW_ISSUE = 'Xin chào, %username%!

Vấn đề #%id% — “%summary%” vừa được %by% gửi. Bạn có thể đọc tại đây:
%url%.

Nếu bạn không muốn nhận thêm thông báo về vấn đề này, có một tùy chọn khả dụng (sau khi đăng nhập) qua liên kết ở trên.

-----
Đây là email tự động, vui lòng không trả lời.
';

# Tiêu đề

const T_INSTALLATION = 'Cài đặt';
const T_SETTINGS = 'Cài đặt';
const T_GLOBAL_SETTINGS = 'Cài đặt chung';
const T_APPEARANCE = 'Giao diện';
const T_ISSUES = 'Vấn đề';
const T_GROUPS = 'Nhóm';
const T_USERS = 'Người dùng';
const T_PERMISSIONS = 'Quyền';
const T_ENABLE_CAPTCHA = 'Quản lý Captcha';
const T_CAPTCHA = 'Captcha';
const T_BROWSE_ISSUES = 'Duyệt các vấn đề';
const T_BROWSE_ALL_ISSUES = 'Duyệt tất cả các vấn đề';
const T_ALL_ISSUES_DESCRIPTION = 'Đây là tất cả các vấn đề mở cho tất cả các dự án';
const T_NEW_ISSUE = 'Vấn đề mới';
const T_ALL_ISSUES = 'Tất cả các vấn đề';
const T_PROJECTS = 'Dự án';
const T_DASHBOARD = 'Bảng điều khiển';
const T_LAST_UPDATES = 'Cập nhật gần đây nhất';
const T_LAST_ACTIVITY = 'Hoạt động gần đây nhất';
const T_UPLOADS = 'Tải lên';
const T_SEARCH = 'Tìm kiếm';
const T_LINK_CONTACT = 'Liên hệ với chúng tôi';
const T_LINK_LEGALNOTICE = 'Thông báo pháp lý';
const T_LINK_PRIVACYPOLICY = 'Chính sách bảo mật';
const T_API_SETTINGS = 'API';
const T_API_ENABLE_SETTINGS = 'Quản lý API';
const T_API_ACCESS_SETTINGS = 'Truy cập API';
const T_INFO = 'Thông tin';

# FORM

const F_USERNAME = 'Tên người dùng:';
const F_PASSWORD = 'Mật khẩu:';
const F_USERNAME2 = 'Tên người dùng';
const F_PASSWORD2 = 'Mật khẩu';
const F_NAME = 'Tên:';
const F_URL = 'Url:';
const F_URL_CDN = 'Url CDN:';
const F_URL_REWRITING = 'Viết lại URL:';
const F_INTRO = 'Giới thiệu:';
const F_DESCRIPTION = 'Mô tả:';
const F_EMAIL = 'Email:';
const F_LINK_CONTACT = 'Liên kết đến trang liên hệ bên ngoài (có thể để trống):';
const F_LINK_LEGALNOTICE = 'Liên kết đến thông báo pháp lý (có thể để trống):';
const F_LINK_PRIVACYPOLICY = 'Liên kết đến chính sách bảo mật (có thể để trống):';
const F_MAX_UPLOAD = 'Kích thước tối đa cho mỗi lần tải lên:';
const F_ALLOCATED_SPACE = 'Không gian được phân bổ cho mỗi người dùng:';
const F_GROUP = 'Nhóm:';
const F_NOTIFICATIONS = 'Được thông báo:';
const F_PROJECT_X = 'Dự án “%name%”:';
const F_LANGUAGE = 'Ngôn ngữ:';
const F_LOGS = 'Nhật ký:';

const F_ISSUES_PAGE = 'Số vấn đề trên mỗi trang:';
const F_ISSUES_PAGE_SEARCH = 'Số vấn đề trên mỗi trang (tìm kiếm):';
const F_PREVIEW_ISSUE = 'Độ dài bản xem trước (số vấn đề):';
const F_PREVIEW_SEARCH = 'Độ dài bản xem trước (tìm kiếm):';
const F_PREVIEW_PROJECT = 'Độ dài bản xem trước (dự án):';
const F_LAST_EDITS = 'Số lượng vấn đề được hiển thị trên bảng điều khiển:';
const F_LAST_ACTIVITY = 'Số lượng vấn đề được hiển thị trên các trang người dùng:';
const F_THEME = "Chủ đề";
const F_TIP_THEME = "Đặt tệp .css vào";

const F_ADD_PROJECT = 'Dự án mới';
const F_ADD_COLOR = 'Màu mới';
const F_ADD_STATUS = 'Trạng thái mới';
const F_ADD_LABEL = 'Nhãn mới';
const F_ADD_GROUP = 'Nhóm mới';
const F_ADD_USER = 'Người dùng mới';

const F_SORT_BY = 'Sắp xếp theo:';
const F_SORT_ID = 'ID';
const F_SORT_MOD = 'cập nhật cuối cùng';
const F_SORT_DESC = 'giảm dần';
const F_SORT_ASC = 'tăng dần';
const F_FILTER_STATUSES = 'Trạng thái bộ lọc:';
const F_FILTER_STATES = 'Trạng thái bộ lọc:';
const F_FILTER_LABELS = 'Nhãn bộ lọc:';
const F_FILTER_USERS = 'Lọc người dùng:';
const F_FILTER_MILESTONE = 'Lọc mốc:';

const F_WRITE = 'Ghi:';
const F_SUMMARY = 'Tóm tắt';
const F_CONTENT = 'Nội dung';

const F_STATUS = 'Trạng thái:';
const F_RELATED = 'Liên quan:';
const F_LABELS2 = 'Nhãn:';
const F_MILESTONE = 'Milestone:';

const F_GENERAL_SETTINGS = 'Cài đặt chung:';
const F_PROJECTS = 'Dự án:';
const F_DATABASE = 'Cơ sở dữ liệu:';
const F_UPLOADS = 'Tải lên:';
const F_COLORS = 'Quản lý màu sắc:';
const F_DISPLAY = 'Quản lý hiển thị:';
const F_STATUSES = 'Quản lý trạng thái:';
const F_LABELS = 'Quản lý nhãn:';
const F_GROUPS = 'Quản lý nhóm:';
const F_PERMISSIONS = 'Quản lý quyền:';
const F_USERS = 'Quản lý người dùng:';

const F_INVALID_CAPTCHA = 'CAPTCHA bạn nhập không đúng. Vui lòng thử lại.';

const F_TIP_NAME = 'CAPTCHA sẽ hiển thị trên tiêu đề của mỗi trang.';
const F_TIP_URL_REWRITING = 'Để trống trường này để vô hiệu hóa việc ghi lại url. Nếu không, trường này phải chứa đường dẫn đến thư mục phpmyBugs (bắt đầu và kết thúc bằng "/"), liên quan đến tên miền.';
const F_TIP_URL_CDN = 'Để trống trường này để vô hiệu hóa CDN. Nếu không, trường này phải chứa URL của CDN của bạn (ví dụ: <em>https://cdn.rawgit.com/bugtrackr/Nireus/master/</em>, bạn có thể sử dụng trường này). Đảm bảo lưu trữ tất cả các tệp từ thư mục <em>/public</em> trên CDN của bạn.';

const F_TIP_INTRO = 'Nó sẽ được hiển thị trên trang chủ. Nó sẽ được phân tích cú pháp với cú pháp Markdown. Lưu ý: nếu chỉ có một dự án có tên là "%name%", trang chủ sẽ tự động được chuyển hướng đến bảng điều khiển dự án và văn bản này sẽ không được hiển thị.';
const F_TIP_EMAIL = 'Để trống trường này để tắt thông báo qua email. Nếu không, địa chỉ này sẽ được sử dụng làm người gửi khi gửi thông báo qua email.';
const F_TIP_PASSWORD = 'Để trống nếu bạn không muốn thay đổi mật khẩu.';
const F_TIP_USER_EMAIL = 'Chỉ bắt buộc nếu bạn muốn nhận thông báo.';
const F_TIP_NOTIFICATIONS = 'Đây là cài đặt mặc định: bạn sẽ có thể thay đổi cài đặt này cho từng sự cố.';
const F_TIP_NOTIFICATIONS_DISABLED = 'Lưu ý: thông báo hiện đang bị quản trị viên tắt.';
const F_TIP_DESCRIPTION = 'Nó sẽ được hiển thị trên bảng điều khiển dự án. Nó sẽ được phân tích cú pháp với cú pháp markdown.';

const F_TIP_MAX_UPLOAD = 'Mỗi tệp được tải lên không được vượt quá kích thước này.';
const F_TIP_ALLOCATED_SPACE = 'Người dùng không thể tải lên các tệp khác sau khi đạt đến giới hạn này.<br /><em>Lưu ý:</em> nếu không có người dùng nào đã đăng nhập được phép tải lên tệp (đây không phải là cài đặt mặc định), thì giới hạn này không áp dụng cho họ.';

const F_TIP_ID_STATUS = '<b>Mẹo:</b> hãy cẩn thận khi thay đổi ID, vì mỗi sự cố vẫn giữ nguyên ID trạng thái cũ của nó (trừ khi ID này không còn tồn tại nữa: trong trường hợp này, trạng thái mặc định sẽ được sử dụng).';

const F_TIP_ID_LABEL = '<b>Mẹo:</b> hãy cẩn thận khi thay đổi ID, vì mỗi nhãn của một vấn đề vẫn giữ nguyên ID cũ (trừ khi ID này không còn tồn tại nữa: trong trường hợp này, nhãn sẽ bị xóa khỏi vấn đề).';
const F_TIP_ID_GROUP = '<b>Mẹo:</b> hãy cẩn thận khi thay đổi ID, vì mỗi người dùng vẫn giữ nguyên ID nhóm cũ (trừ khi ID này không còn tồn tại nữa: trong trường hợp này, nhóm mặc định sẽ được sử dụng).';
const F_TIP_CAPTCHA = 'Chọn các hành động mà captcha sẽ được hiển thị cho những người dùng chưa đăng nhập.';
const F_TIP_API_ACCESS = 'Cấu hình quyền truy cập API trong tệp <em>/database/config_api.php</em>. Để biết thêm thông tin, hãy xem tệp API.md.';

const F_API_ENABLE = 'Bật API';

const HELP_MARKDOWN = '
<h2>Markdcú pháp riêng:</h2>

<p>Đoạn văn:</p>
<pre><code class="blank no-highlight">Các đoạn văn được phân tách bằng một hoặc nhiều dòng trống.
Đó là lý do tại sao văn bản này sẽ được hiển thị trên cùng một dòng với cụm từ trước đó, bất kể ngắt dòng.

Để bắt đầu một dòng mới mà không tạo đoạn văn mới:
chèn 2 khoảng trắng trước khi ngắt dòng, giống như ở đây.</code></pre>
<p>Nhấn mạnh:</p>
<pre><code class="blank no-highlight">*Văn bản in nghiêng*
_Văn bản in nghiêng một lần nữa_

**Văn bản in đậm**
__Văn bản in đậm một lần nữa__ </code></pre>

<p>Liên kết:</p>
<pre><code class="blank no-highlight">Đây là [một ví dụ](http://example.com) về liên kết nội tuyến.
Đây là một ví dụ khác: &lt;http://example.com&gt;.</code></pre>

<p>Hình ảnh:</p>
<pre><code class="blank no-highlight">![Tôi là một hình ảnh.](http://example.com/image.png)</code></pre>

<p>Tiêu đề:</p>
<pre><code class="blank no-highlight"># Tiêu đề cấp cao nhất
## Tiêu đề cấp hai
### Tiêu đề cấp ba
#### Tiêu đề cấp bốn</code></pre>

<p>Danh sách:</p>
<pre><code class="blank no-highlight">- một mục
* một mục khác

1. mục đầu tiên
2. mục thứ hai</code></pre>

<p>Trích dẫn khối:</p>
<pre><code class="blank no-highlight">> Tôi là một trích dẫn khối có hai đoạn văn.
>
> Tôi là đoạn văn thứ hai.</code></pre>

<p>Khối mã:</p>
<pre><code class="blank no-highlight">Đây là `khối mã nội tuyến`.</code></pre>
<pre><code class="blank no-highlight"> &lt;?php echo "Tôi là một khối mã, vì tôi thụt lề
với 4 khoảng trắng"; ?&gt;</code></pre>
<pre><code class="blank no-highlight">```
&lt;?php echo "Tôi là một khối mã."; ?&gt;
```

```php
&lt;?php echo "Các ngôn ngữ được hỗ trợ là: bash, cs, ruby, diff, javascript, css, xml, http, java, php, python, sql, ini, perl, json, cpp, markdown, no-highlight"; ?&gt;
```</code></pre>
';

private static $permissions = array(
'home' => array(
'title' => 'Home:',
'description' => 'Có thể truy cập vào trang chủ và xem danh sách tất cả các vấn đề đang mở cho các dự án của anh ấy.'
),
'dashboard' => array(
'title' => 'Dashboards:',
'description' => 'Có thể truy cập vào bảng điều khiển của dự án.'
),
'issues' => array(
'title' => 'Xem các vấn đề:',
'description' => 'Có thể xem các vấn đề công khai.'
),
'private_issues' => array(
'title' => 'Xem các vấn đề riêng tư:',
'description' => 'Có thể xem các vấn đề được gắn thẻ là riêng tư.'
),
'search' => array(
'title' => 'Tìm kiếm:',
'description' => 'Có thể tìm kiếm các vấn đề hoặc người dùng.'
),
'new_issue' => array(
'title' => 'Vấn đề mới:',
'description' => 'Có thể gửi một vấn đề mới.'
),

'edit_issue' => array(
'title' => 'Chỉnh sửa các vấn đề:',
'description' => 'Có thể chỉnh sửa văn bản của tất cả các vấn đề và xóa chúng.'
),
'update_issue' => array(
'title' => 'Cập nhật các vấn đề:',
'description' => 'Có thể cập nhật các vấn đề: thay đổi trạng thái, thêm nhãn, đóng và mở lại, ...'
),
'post_comment' => array(
'title' => 'Đăng bình luận:',
'description' => 'Có thể đăng bình luận.'
),
'edit_comment' => array(
'title' => 'Chỉnh sửa bình luận:',
'description' => 'Có thể chỉnh sửa tất cả các bình luận (người dùng có thể chỉnh sửa bình luận của riêng họ).'
),
'view_user' => array(
'title' => 'Hồ sơ người dùng:',
'description' => 'Có thể xem tất cả các hồ sơ người dùng.'
),
'upload' => array(
'title' => 'Đăng tệp:',
'description' => 'Có thể đính kèm tệp vào bình luận hoặc một vấn đề mới.'
),
'view_upload' => array(
'title' => 'Xem các mục tải lên:',
'description' => 'Có thể truy cập vào tất cả các tệp đã tải lên.'
),
'settings' => array(
'title' => 'Thay đổi cài đặt:',
'description' => 'Có thể truy cập trang này và sửa đổi tất cả các cài đặt chung.'
),
'signup' => array(
'title' => 'Đăng ký:',
'description' => 'Có thể đăng ký.'
),
'view_errors' => array(
'title' => 'Xem các lỗi nghiêm trọng:',
'description' => 'Có thể xem mô tả về các lỗi nghiêm trọng.'
)
);

public static function permissions($id, $type = 'description') {
return self::$permissions[$id][$type];
}

private static $settings = array(
'validate_url' => 'URL không hợp lệ.',
'validate_email' => 'Email không hợp lệ.',
'private_label_removed' => 'Bạn không thể xóa nhãn riêng tư hoặc thay đổi ID của nhãn, nhưng bạn có thể đổi tên nhãn.',
'default_status_removed' => 'Bạn không thể xóa trạng thái mặc định hoặc thay đổi ID của nhãn, nhưng bạn có thể đổi tên nhãn.',
'default_group_removed' => 'Bạn không thể xóa nhóm mặc định hoặc thay đổi ID của nhóm, nhưng bạn có thể đổi tên nhóm.',
'default_group_superuser_removed' => 'Bạn không thể xóa nhóm siêu người dùng hoặc thay đổi ID của nhóm, nhưng bạn có thể đổi tên nhóm.',
'validate_same_username' => 'Cảnh báo: hai người dùng có cùng tên người dùng.',
'validate_same_project_name' => 'Hai dự án không được có cùng tên. Một đã được đổi tên tự động.',
'language_modified' => 'Làm mới trang này để xem bằng ngôn ngữ mới.'
);

public static function settings($id) {
return self::$settings[$id];
}

private static $errors = array(
E_ERROR => 'Lỗi nghiêm trọng',
E_WARNING => 'Cảnh báo',
E_PARSE => 'Lỗi phân tích cú pháp',
E_NOTICE => 'Thông báo',
E_STRICT => 'Lời khuyên',
E_DEPRECATED => 'Đã lỗi thời','default' => 'Lỗi'
);
public static function errors($no) {
return (isset(self::$errors[$no])) ? self::$errors[$no] : self::$errors['default'];
}
}

?>