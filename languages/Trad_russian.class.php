<?php

class Trad {

# Слова

const W_ISSUE = 'Проблема';
const W_OPEN = 'Открыто';
const W_OPENED = 'Открыто';
const W_CLOSED = 'Закрыто';
const W_REOPENED = 'Повторно открыто';
const W_COMMENTED = 'Прокомментировано';
const W_NOBODY = 'никто';
const W_SOMEONE = 'кто-то';
const W_ENABLED = 'Включено';
const W_DISABLED = 'Отключено';
const W_NOTFOUND = 'Не найдено';
const W_FORBIDDEN = 'Запрещено';
const W_MENU = 'Меню';

const W_EXAMPLE = 'Пример';
const W_HEX = 'Hex';
const W_RENDERING = 'Отображение';
const W_ID = 'ID';
const W_DISPLAY_NAME = 'Отображаемое имя';

const W_SECONDE = 'секунда';
const W_MINUTE = 'минута';
const W_HOUR = 'час';
const W_DAY = 'день';
const W_WEEK = 'неделя';
const W_MONTH = 'месяц';
const W_YEAR = 'год';
const W_DECADE = 'декад';
const W_SECONDE_P = 'секунды';
const W_MINUTE_P = 'минуты';
const W_HOUR_P = 'часы';
const W_DAY_P = 'дни';
const W_WEEK_P = 'недели';
const W_MONTH_P = 'месяцы';
const W_YEAR_P = 'годы';
const W_DECADE_P = 'декады';

const W_PREVIOUS = 'Предыдущая';
const W_NEXT = 'Следующая';
const W_MORE = 'БОЛЬШЕ';
const W_CURRENT = 'Страница %nb1% из %nb2%';

const W_NOT_LOGGED = 'Не выполнен вход';

const W_SUSPENSION = '…';
const W_EXTRACT = '“%text%”';

const W_USER = 'Пользователь';
const W_DEVELOPPER = 'Разработчик';
const W_SUPERUSER = 'Суперпользователь';
const W_S_NEW = 'Новый';
const W_S_CONFIRMED = 'Подтверждено';
const W_S_ASSIGNED = 'Назначено %user%';
const W_S_RESOLVED = 'Решено';
const W_S_REJECTED = 'Отклонено';
const W_L_URGENT = 'Срочно';
const W_L_IMPROVEMENT = 'Улучшение';
const W_L_PRIVATE = 'Частное';

const W_PROFILEPIC = 'изображение профиля';

const W_RSS = 'RSS-канал';
const W_VERSION = 'Версия';

const W_CAPTCHA_IMAGE = 'Изображение CAPTCHA';
const W_CAPTCHA_REFRESH = 'Обновить изображение';
const W_CAPTCHA_INPUT = 'Введите текст:';

# Глаголы

const V_UPDATE = 'Обновить';
const V_UPDATE_DETAILS = 'Обновить сведения';
const V_UPDATE_CONTENT = 'Обновить содержимое';
const V_UPDATE_AND = 'Обновить & %adjective%';
const V_CANCEL = 'Отмена';
const V_PREVIEW = 'Предварительный просмотр';
const V_COMMENT = 'Комментарий';
const V_SUBMIT = 'Отправить';
const V_SELECT_FILE = 'Выберите файл…';
const V_UPLOADING = 'Загрузка…';
const V_SAVE_CONFIG = 'Сохранить настройки';
const V_APPLY = 'Применить';
const V_EDIT = 'Изменить';
const V_SIGNUP = 'Зарегистрироваться';
const V_LOGIN = 'Войти';
const V_CONTINUE = 'Продолжить';
const V_REMOVE_ISSUE = 'Удалить проблему';
const V_CLOSE = 'закрыть';
const V_REOPEN = 'открыть заново';
const V_EXPORT = 'Экспортировать необработанные данные';

# Предложения

const S_NOLABEL = '–';
const S_NODEPENDENCY = '–';
const S_COMMENT_LEAVE = 'Оставить комментарий:';
const S_AGO = '%duration% %pediod% ago';
const S_ISSUE_ABOUT = 'Об этой проблеме:';
const S_UPLOAD_ADD = 'Прикрепить файл:';
const S_WELCOME = 'Добро пожаловать, %user%';
const S_NEVER = 'Никогда';
const S_ME = 'Об обновлениях по вопросам, в которые я внес вклад';
const S_ALWAYS = 'Обо всех обновлениях';
const S_START_NOTIF = 'Уведомлять о новых обновлениях';
const S_STOP_NOTIF = 'Больше не уведомлять об обновлениях';
const S_NOTFOUND = 'Страница, которую вы ищете, больше не существует...';
const S_FORBIDDEN = 'Вам не разрешен доступ к этой странице. Пожалуйста, войдите/выйдите, чтобы продолжить.';

const S_VIEW_PARTICIPATION = 'Просмотреть его участие.';
const S_VIEW_STATUS = 'Просмотреть вопросы «%status%».';

const S_ISSUE_CREATED = 'by %user% %time%';
const S_ISSUE_UPDATED = '%adj% by %user% %time%.';
const S_ISSUE_STATUS_UPDATED = 'Статус обновлен до %status% by %user% %time%.';

const S_RSS_ISSUE_UPDATED = '%adj% by %user%.';
const S_RSS_ISSUE_STATUS_UPDATED = 'Статус обновлен до «%status%» by %user%.';

const S_INTRO_INSTALL = 'Похоже, вы впервые запускаете phpmyBugs! Пожалуйста, настройте его:';
const S_FIRST_ISSUE_TITLE = 'Как дела, тыква?';
const S_FIRST_ISSUE = 'Я ваша первая проблема! После входа вы сможете удалить меня.';

const S_NO_USER = 'Нет пользователей, соответствующих вашему запросу.';
const S_NO_ISSUE = 'Нет проблем, соответствующих вашему запросу.';
const S_MATCHING_ISSUES = '%nb% соответствующих проблем';
const S_NO_ACTIVITY = 'Нет недавней активности.';
const S_NO_UPLOAD = 'Нет загрузок.';
const S_SIZE_REMAINING = '%remain% осталось от %total% разрешенного.';
const S_NO_PROJECT = 'Нет проектов.';

const S_SEARCH = '#12, @user, words…';
const S_COPYRIGHT = 'Работает на %name%.';
const S_UPGRADE = 'Получить последнюю версию с <a href="'.RELEASE.'">GitHub</a> для <a href="'.UPGRADE.'">обновления</a>.';

const S_LAST_UPDATES = 'Последние обновления…';

const S_STAY_LOGGEDIN = 'Оставаться в системе';

const S_DEFAULT_DEFPROJ_DESC = 'Это проект по умолчанию, к которому имеют доступ все.';
const S_DEFAULT_2NDPROJ_DESC = 'Это может быть ваш второй проект, в котором только зарегистрированные пользователи могут публиковать сообщения о проблемах.';

# Оповещения

const A_ERROR_DIRECTORY = '<strong>Ошибка:</strong> невозможно создать каталог «%name%».';
const A_ERROR_FILE = '<strong>Ошибка:</strong> невозможно прочитать файл «%name%».';
const A_ERROR_FILE_WRITE = '<strong>Ошибка:</strong> невозможно записать файл «%name%».';
const A_ERROR_FATAL = 'Извините, что-то пошло не так. Обратитесь к администратору, если эта проблема не исчезнет.';
const A_ERROR = '<strong>%title%:</strong><br /><br />%message%<br /><br />Файл «<strong>%file%</strong>» на строке <strong>%line%</strong>.';

const A_SUCCESS_INSTALL = '<strong>Готово:</strong> phpmyBugs теперь полностью настроен.';
const A_ERROR_INSTALL = '<strong>Ошибка:</strong> phpmyBugs уже настроен. Удалите файл конфигурации, если хотите сбросить конфигурацию.';
const A_MODIF_SAVED = 'Изменения были сохранены.';

const A_ERROR_FORM = 'Произошла ошибка. Пожалуйста, отправьте форму еще раз.';
const A_ERROR_TOKEN = 'Неправильный токен. Пожалуйста, отправьте форму еще раз.';
const A_ERROR_EMPTY = 'Вам необходимо указать имя пользователя и пароль.';
const A_ERROR_SAME_USERNAME = 'Это имя пользователя недоступно.';
const A_SUCCESS_SIGNUP = '<strong>Готово:</strong> Теперь вы можете войти в систему.';

const A_CONFIRM_DELETE_COMMENT = 'Вы уверены, что хотите удалить этот комментарий?';
const A_SUCCESS_DELETE_COMMENT = 'Комментарий был удален.';
const A_CONFIRM_DELETE_ISSUE = 'Вы уверены, что хотите удалить эту проблему?';
const A_SUCCESS_DELETE_ISSUE = 'Задача была удалена.';
const A_CONFIRM_DELETE_UPLOAD = 'Вы уверены, что хотите удалить этот файл?';
const A_CONFIRM_DELETE_PROJECT = 'Вы уверены, что хотите удалить этот проект? Все соответствующие задачи будут утеряны.';

const A_LOGGED = 'Вы вошли в Систему.';
const A_LOGGED_OUT = 'Вы вышли из Системы.';
const A_ERROR_CONNEXION = '<strong>Ошибка:</strong> Неверное имя пользователя или пароль.';
const A_ERROR_CONNEXION_WAIT = '<strong>Ошибка:</strong> Неверное имя пользователя или пароль. Пожалуйста, подождите %duration% %period% перед повторной попыткой.';
const A_ERROR_LOGIN_WAIT = 'Подождите %duration% %period% перед повторной попыткой. Это защита от вредоносных атак.';

const A_ERROR_UPLOAD = 'Произошла ошибка. Попробуйте еще раз.';
const A_ERROR_UPLOAD_SIZE = 'Файл превышает максимально допустимый размер (%nb% max).';
const A_ERROR_UPLOAD_FULL = 'У вас недостаточно места на диске для загрузки этого файла: осталось %nb%.';

const A_PLEASE_LOGIN_ISSUES = 'Войдите в систему, чтобы увидеть проблемы.';
const A_PLEASE_LOGIN_COMMENT = 'Войдите в систему, чтобы оставить комментарий. Еще нет учетной записи? Создайте ее: это бесплатно и очень быстро!';
const A_PLEASE_LOGIN_ISSUE = 'Пожалуйста, войдите в систему, чтобы отправить сообщение о проблеме. У вас еще нет учетной записи? Создайте ее: это бесплатно и очень быстро!';

const A_SHOULD_LOGIN = 'Если у вас есть учетная запись, войдите в систему. Если нет, рассмотрите возможность ее создания: это бесплатно и очень быстро!';

const A_IE = 'Ваш браузер устарел: <a href="'.BROWSER.'">обновите или измените его</a>.';

# Почта

const M_NEW_COMMENT_O = '[%title% — %project% — Проблема #%id%] Новый комментарий';

const M_NEW_COMMENT = 'Привет, %username%!

Проблема #%id% — «%summary%» только что была прокомментирована %by%. Вы можете прочитать новый комментарий здесь:
%url%.

Если вы не хотите получать дальнейшие уведомления по этой проблеме, доступна опция (после входа) по ссылке выше.

-----
Это автоматическое письмо, пожалуйста, не отвечайте.
';

const M_NEW_ISSUE_O = '[%title% — %project%] Новая проблема';
const M_NEW_ISSUE = 'Привет, %username%!

Проблема №%id% — «%summary%» только что была отправлена ​​%by%. Вы можете прочитать ее здесь:
%url%.

Если вы не хотите получать дальнейшие уведомления по этой проблеме, доступна опция (после входа) по ссылке выше.

-----
Это автоматическое письмо, пожалуйста, не отвечайте.
';

# Заголовки

const T_INSTALLATION = 'Установка';
const T_SETTINGS = 'Настройки';
const T_GLOBAL_SETTINGS = 'Глобальные настройки';
const T_APPEARANCE = 'Внешний вид';
const T_ISSUES = 'Проблемы';
const T_GROUPS = 'Группы';
const T_USERS = 'Пользователи';
const T_PERMISSIONS = 'Разрешения';
const T_ENABLE_CAPTCHA = 'Управление Captcha';
const T_CAPTCHA = 'Captcha';
const T_BROWSE_ISSUES = 'Просмотр проблем';
const T_BROWSE_ALL_ISSUES = 'Просмотр всех проблем';
const T_ALL_ISSUES_DESCRIPTION = 'Это все открытые проблемы для всех проектов';
const T_NEW_ISSUE = 'Новая проблема';
const T_ALL_ISSUES = 'Все проблемы';
const T_PROJECTS = 'Проекты';
const T_DASHBOARD = 'Панель инструментов';
const T_LAST_UPDATES = 'Последние обновления';
const T_LAST_ACTIVITY = 'Последняя активность';
const T_UPLOADS = 'Загрузки';
const T_SEARCH = 'Поиск';
const T_LINK_CONTACT = 'Связаться с нами';
const T_LINK_LEGALNOTICE = 'Юридическое уведомление';
const T_LINK_PRIVACYPOLICY = 'Политика конфиденциальности';
const T_API_SETTINGS = 'API';
const T_API_ENABLE_SETTINGS = 'Управление API';
const T_API_ACCESS_SETTINGS = 'API-доступ';
const T_INFO = 'Информация';

# ФОРМЫ

const F_USERNAME = 'Имя пользователя:';
const F_PASSWORD = 'Пароль:';
const F_USERNAME2 = 'Имя пользователя';
const F_PASSWORD2 = 'Пароль';
const F_NAME = 'Имя:';
const F_URL = 'Url:';
const F_URL_CDN = 'CDN Url:';
const F_URL_REWRITING = 'Перезапись URL:';
const F_INTRO = 'Введение:';
const F_DESCRIPTION = 'Описание:';
const F_EMAIL = 'Email:';
const F_LINK_CONTACT = 'Ссылка на внешнюю страницу контактов (можно оставить пустой):';
const F_LINK_LEGALNOTICE = 'Ссылка на юридическое уведомление (можно оставить пустой):';
const F_LINK_PRIVACYPOLICY = 'Ссылка на политику конфиденциальности (можно оставить пустой):';
const F_MAX_UPLOAD = 'Максимальный размер на загрузку:';
const F_ALLOCATED_SPACE = 'Выделенное пространство на пользователя:';
const F_GROUP = 'Группа:';
const F_NOTIFICATIONS = 'Уведомлять:';
const F_PROJECT_X = 'Проект «%name%»:';
const F_LANGUAGE = 'Язык:';
const F_LOGS = 'Журналы:';

const F_ISSUES_PAGE = 'Проблем на странице:';
const F_ISSUES_PAGE_SEARCH = 'Проблем на страницу (поиск):';
const F_PREVIEW_ISSUE = 'Длина предпросмотров (проблемы):';
const F_PREVIEW_SEARCH = 'Длина предпросмотров (поиск):';
const F_PREVIEW_PROJECT = 'Длина предпросмотров (проекты):';
const F_LAST_EDITS = 'Количество проблем, отображаемых на панелях мониторинга:';
const F_LAST_ACTIVITY = 'Количество проблем, отображаемых на страницах пользователей:';
const F_THEME = "Тема";
const F_TIP_THEME = "Поместить файл .css в";

const F_ADD_PROJECT = 'Новый проект';
const F_ADD_COLOR = 'Новый цвет';
const F_ADD_STATUS = 'Новый статус';
const F_ADD_LABEL = 'Новая метка';
const F_ADD_GROUP = 'Новая группа';
const F_ADD_USER = 'Новый пользователь';

const F_SORT_BY = 'Сортировать по:';
const F_SORT_ID = 'ID';
const F_SORT_MOD = 'последнее обновление';
const F_SORT_DESC = 'по убыванию';
const F_SORT_ASC = 'по возрастанию';
const F_FILTER_STATUSES = 'Фильтр статусов:';
const F_FILTER_STATES = 'Фильтр состояний:';
const F_FILTER_LABELS = 'Фильтр меток:';
const F_FILTER_USERS = 'Фильтровать пользователей:';
const F_FILTER_MILESTONE = 'Фильтровать этап:';

const F_WRITE = 'Запись:';
const F_SUMMARY = 'Сводка';
const F_CONTENT = 'Содержание';

const F_STATUS = 'Статус:';
const F_RELATED = 'Связанные:';
const F_LABELS2 = 'Метки:';
const F_MILESTONE = 'Этап:';

const F_GENERAL_SETTINGS = 'Общие настройки:';
const F_PROJECTS = 'Проекты:';
const F_DATABASE = 'База данных:';
const F_UPLOADS = 'Загрузки:';
const F_COLORS = 'Управление цветами:';
const F_DISPLAY = 'Управление отображением:';
const F_STATUSES = 'Управление статусами:';
const F_LABELS = 'Управление метками:';
const F_GROUPS = 'Управление группами:';
const F_PERMISSIONS = 'Управление разрешениями:';
const F_USERS = 'Управление пользователями:';

const F_INVALID_CAPTCHA = 'Введенная вами CAPTCHA неверна. Повторите попытку.';

const F_TIP_NAME = 'Она будет отображаться в заголовке каждой страницы.';
const F_TIP_URL_REWRITING = 'Оставьте это поле пустым, чтобы отключить перезапись URL. В противном случае он должен содержать путь к папке phpmyBugs (начинающийся и заканчивающийся на "/") относительно имени домена.';
const F_TIP_URL_CDN = 'Оставьте это поле пустым, чтобы отключить CDN. В противном случае он должен содержать URL-адрес вашего CDN (например, <em>'.CDN_RAW_GIT.'</em>, можете использовать этот). Обязательно разместите все файлы из папки <em>/public</em> на вашем CDN.';
const F_TIP_INTRO = 'Он будет отображаться на домашней странице. Он будет проанализирован с помощью синтаксиса Markdown. Примечание: если есть только один проект с именем «%name%», домашняя страница автоматически перенаправляется на панель управления проектом, и этот текст не будет отображаться.';
const F_TIP_EMAIL = 'Оставьте это поле пустым, чтобы отключить уведомления по электронной почте. В противном случае этот адрес будет использоваться в качестве отправителя при отправке уведомления по электронной почте.';
const F_TIP_PASSWORD = 'Оставьте его пустым, если вы не хотите менять пароль.';
const F_TIP_USER_EMAIL = 'Требуется только если вы хотите получать уведомления.';
const F_TIP_NOTIFICATIONS = 'Это настройка по умолчанию: вы сможете изменить ее для каждой проблемы.';
const F_TIP_NOTIFICATIONS_DISABLED = 'Примечание: уведомления в настоящее время отключены администратором.';
const F_TIP_DESCRIPTION = 'Он будет отображаться на панели управления проекта. Он будет проанализирован с помощью синтаксиса markdown.';

const F_TIP_MAX_UPLOAD = 'Каждый загруженный файл не может превышать этот размер.';
const F_TIP_ALLOCATED_SPACE = 'Пользователь не может загружать другие файлы после достижения этого лимита.<br /><em>Внимание:</em> если ни одному зарегистрированному пользователю не разрешено загружать файлы (это не настройка по умолчанию), этот лимит к ним не применяется.';

const F_TIP_ID_STATUS = '<b>Совет:</b> будьте осторожны при изменении идентификаторов, поскольку каждая проблема сохраняет свой старый идентификатор статуса (за исключением случаев, когда этот идентификатор больше не существует: в этом случае будет использоваться статус по умолчанию).';

const F_TIP_ID_LABEL = '<b>Совет:</b> будьте осторожны при изменении идентификаторов, поскольку каждая метка одной проблемы сохраняет свой старый идентификатор (за исключением случаев, когда этот идентификатор больше не существует: в этом случае метка удаляется из проблемы).';
const F_TIP_ID_GROUP = '<b>Совет:</b> будьте осторожны при изменении идентификаторов, поскольку каждый пользователь сохраняет свой старый идентификатор группы (за исключением случаев, когда этот идентификатор больше не существует: в этом случае будет использоваться группа по умолчанию).';
const F_TIP_CAPTCHA = 'Выберите действия, при которых будет отображаться капча для не вошедших в систему пользователей.';
const F_TIP_API_ACCESS = 'Настройте доступ к API в файле <em>/database/config_api.php</em>. Для получения дополнительной информации см. файл API.md.';

const F_API_ENABLE = 'Включить API';

const HELP_MARKDOWN = '
<h2>Markdсобственный синтаксис:</h2>

<p>Абзацы:</p>
<pre><code class="blank no-highlight">Абзацы разделяются одной или несколькими пустыми строками.

Вот почему этот текст будет отображаться в той же строке, что и предыдущая фраза, независимо от переноса строки.

Чтобы начать новую строку, не создавая новый абзац:
вставьте 2 пробела перед переносом строки, как здесь.</code></pre>
<p>Выделение:</p>
<pre><code class="blank no-highlight">*Курсив*
_Снова курсив_

**Жирный текст**
_Снова жирный текст__ </code></pre>

<p>Ссылки:</p>
<pre><code class="blank no-highlight">Это [пример](http://example.com) встроенной ссылки.

Вот еще один: &lt;http://example.com&gt;.</code></pre>

<p>Изображения:</p>
<pre><code class="blank no-highlight">![Я изображение.](http://example.com/image.png)</code></pre>

<p>Заголовки:</p>
<pre><code class="blank no-highlight"># Заголовок верхнего уровня
## Заголовок второго уровня
### Заголовок третьего уровня
#### Заголовок четвертого уровня</code></pre>

<p>Списки:</p>
<pre><code class="blank no-highlight">- один элемент
* другой

1. первый элемент
2. второй элемент</code></pre>

<p>Цитаты:</p>
<pre><code class="blank no-highlight">> Я цитата из двух абзацев.
>
> Я второй абзац.</code></pre>

<p>Блоки кода:</p>
<pre><code class="blank no-highlight">Это `встроенный блок кода`.</code></pre>
<pre><code class="blank no-highlight"> &lt;?php echo "Я блок кода, потому что я отступлен
4 пробелами"; ?&gt;</code></pre>
<pre><code class="blank no-highlight">```
&lt;?php echo "Я блок кода."; ?&gt;
```

```php
&lt;?php echo "Поддерживаемые языки: bash, cs, ruby, diff, javascript, css, xml, http, java, php, python, sql, ini, perl, json, cpp, markdown, no-highlight"; ?&gt;
```</code></pre>
';

private static $permissions = array(
'home' => array(
'title' => 'Главная:',
'description' => 'Может получить доступ к домашней странице и просмотреть список всех открытых задач для своих проектов.'
),
'dashboard' => array(
'title' => 'Панели управления:',
'description' => 'Может получить доступ к панелям управления проектов.'
),
'issues' => array(
'title' => 'Просмотр задач:',
'description' => 'Может просматривать публичные задачи.'
),
'private_issues' => array(
'title' => 'Просмотр личных задач:',
'description' => 'Может просматривать задачи, помеченные как личные.'
),
'search' => array(
'title' => 'Поиск:',
'description' => 'Может искать проблемы или пользователей.'
),
'new_issue' => array(
'title' => 'Новая проблема:',
'description' => 'Может отправлять новую проблему.'
),
'edit_issue' => array(
'title' => 'Редактировать проблемы:',
'description' => 'Может редактировать текст всех проблем и удалять их.'
),
'update_issue' => array(
'title' => 'Обновлять проблемы:',
'description' => 'Может обновлять проблемы: изменять статус, добавлять метки, закрывать и открывать заново, ...'
),
'post_comment' => array(
'title' => 'Опубликовать комментарий:',
'description' => 'Может отправлять комментарий.'
),
'edit_comment' => array(
'title' => 'Редактировать комментарии:',
'description' => 'Может редактировать все комментарии (пользователи могут редактировать свои комментарии в любом случае).'
),
'view_user' => array(
'title' => 'Профили пользователей:',
'description' => 'Может просматривать все профили пользователей.'
),
'upload' => array(
'title' => 'Опубликовать файл:',
'description' => 'Может прикреплять файлы к комментарию или новой проблеме.'
),
'view_upload' => array(
'title' => 'Просмотр загрузок:',
'description' => 'Может получить доступ ко всем загруженным файлам.'
),
'settings' => array(
'title' => 'Изменить настройки:',
'description' => 'Может получить доступ к этой странице и изменить все глобальные настройки.'
),
'signup' => array(
'title' => 'Зарегистрироваться:',
'description' => 'Можно зарегистрироваться.'
),
'view_errors' => array(
'title' => 'Просмотреть фатальные ошибки:',
'description' => 'Можно просмотреть описание фатальных ошибок.'
)
);

public static function permissions($id, $type = 'description') {
return self::$permissions[$id][$type];
}

private static $settings = array(
'validate_url' => 'URL-адрес недействителен.',
'validate_email' => 'Адрес электронной почты недействителен.',
'private_label_removed' => 'Вы не можете удалить частную метку или изменить ее идентификатор, но вы можете переименовать ее.',
'default_status_removed' => 'Вы не можете удалить статус по умолчанию или изменить его идентификатор, но вы можете переименовать ее.',
'default_group_removed' => 'Вы не можете удалить группу по умолчанию или изменить ее идентификатор, но вы можете переименовать ее.',
'default_group_superuser_removed' => 'Вы не можете удалить группу суперпользователей или изменить ее идентификатор, но вы можете переименовать ее.',
'validate_same_username' => 'Предупреждение : у двух пользователей одинаковое имя пользователя.',
'validate_same_project_name' => 'Два проекта не могут иметь одинаковое имя. Один из них был автоматически переименован.',
'language_modified' => 'Обновите эту страницу, чтобы просмотреть ее на новом языке.'
);

public static function settings($id) {
return self::$settings[$id];
}

private static $errors = array(
E_ERROR => 'Фатальная ошибка',
E_WARNING => 'Предупреждение',
E_PARSE => 'Ошибка анализа',
E_NOTICE => 'Уведомление',
E_STRICT => 'Совет',
E_DEPRECATED => 'Устарело','default' => 'Ошибка'
);

public static function errors($no) {
return (isset(self::$errors[$no])) ? self::$errors[$no] : self::$errors['default'];
}
}

?>