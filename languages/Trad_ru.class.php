<?php

class Trad {

		# Words

	const W_ISSUE = 'Проблема';
	const W_OPEN = 'Открыть';
	const W_OPENED = 'Открыто';
	const W_CLOSED = 'Закрыто';
	const W_REOPENED = 'Открыто повторно';
	const W_COMMENTED = 'Прокомментировал';
	const W_NOBODY = 'никто';
	const W_SOMEONE = 'кто-то';
	const W_ENABLED = 'Включено';
	const W_DISABLED = 'Отключено';
	const W_NOTFOUND = 'Не найдено';
	const W_FORBIDDEN = 'Запрещено';
	const W_MENU = 'Меню';

	const W_EXAMPLE = 'Пример';
	const W_HEX = 'Шестнадцатеричный';
	const W_RENDERING = 'Рендеринг';
	const W_ID = 'ID';
	const W_DISPLAY_NAME = 'Отображаемое имя';
	
	const W_SECONDE = 'второй';
	const W_MINUTE = 'минута';
	const W_HOUR = 'час';
	const W_DAY = 'день';
	const W_WEEK = 'неделя';
	const W_MONTH = 'месяц';
	const W_YEAR = 'год';
	const W_DECADE = 'декада';
	const W_SECONDE_P = 'секунды';
	const W_MINUTE_P = 'минут';
	const W_HOUR_P = 'часы';
	const W_DAY_P = 'дни';
	const W_WEEK_P = 'недели';
	const W_MONTH_P = 'месяцев';
	const W_YEAR_P = 'лет';
	const W_DECADE_P = 'декады';

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
	const W_L_PRIVATE = 'Частный';

	const W_PROFILEPIC = 'изображение профиля';

    const W_RSS = 'RSS-канал';

		# Verbes

	const V_UPDATE = 'Обновить';
	const V_UPDATE_DETAILS = 'Обновить детали';
	const V_UPDATE_CONTENT = 'Обновить содержимое';
	const V_UPDATE_AND = 'Обновить & %adjective%';
	const V_CANCEL = 'Отменить';
	const V_PREVIEW = 'Предварительный просмотр';
	const V_COMMENT = 'Комментарий';
	const V_SUBMIT = 'Отправить';
	const V_SELECT_FILE = 'Выбрать файл…';
	const V_UPLOADING = 'Загрузка…';
	const V_SAVE_CONFIG = 'Сохранить настройки';
	const V_APPLY = 'Применить';
	const V_EDIT = 'Редактировать';
	const V_SIGNUP = 'Зарегистрироваться';
	const V_CONTINUE = 'Продолжить';
	const V_REMOVE_ISSUE = 'Удалить проблему';
	const V_CLOSE = 'закрыть';
	const V_REOPEN = 'открыть заново';
	const V_EXPORT = 'Экспорт сырых данных';

		# Sentencies

	const S_NOLABEL = '–';
	const S_NODEPENDENCY = '–';
	const S_COMMENT_LEAVE = 'Оставить комментарий:';
	const S_AGO = '%duration% %pediod% ago';
	const S_ISSUE_ABOUT = 'Об этой проблеме:';
	const S_UPLOAD_ADD = 'Прикрепить файл:';
	const S_WELCOME = 'Добро пожаловать,%user%';
	const S_NEVER = 'Никогда';
	const S_ME = 'Из обновлений по вопросам, в которых я участвовал';
	const S_ALWAYS = 'Каждого обновления';
	const S_START_NOTIF = 'Получать уведомления о новых обновлениях';
	const S_STOP_NOTIF = 'Больше не получать уведомления об обновлениях';
	const S_NOTFOUND = 'Страница, которую вы ищете, больше не существует ...';
	const S_FORBIDDEN = 'У вас нет доступа к этой странице. Пожалуйста, войдите / выйдите, чтобы продолжить.';

	const S_VIEW_PARTICIPATION = 'Посмотреть его участие.';
    const S_VIEW_STATUS = 'Просмотреть проблемы “%status%”.';

	const S_ISSUE_CREATED = 'поль %user% %time%';
	const S_ISSUE_UPDATED = '%adj% by %user% %time%.';
	const S_ISSUE_STATUS_UPDATED = 'Статус обновлен до %status% %user% %time%.';

	const S_RSS_ISSUE_UPDATED = '%adj% от %user%.';
	const S_RSS_ISSUE_STATUS_UPDATED = 'Статус обновлен до %status% %user%.';

	const S_INTRO_INSTALL = 'Похоже, вы впервые запускаете phpmyBugs! Пожалуйста, настройте его:';
	const S_FIRST_ISSUE_TITLE = 'Как дела, тыква?';
	const S_FIRST_ISSUE = 'Я твоя первая проблема! После входа вы сможете удалить меня.';

	const S_NO_USER = 'Ни один пользователь не соответствует вашему запросу.';
	const S_NO_ISSUE = 'Нет проблем, соответствующих вашему запросу.';
	const S_MATCHING_ISSUES = '%nb% проблем сопоставления';
	const S_NO_ACTIVITY = 'Нет недавних действий.';
	const S_NO_UPLOAD = 'Нет загрузки.';
	const S_SIZE_REMAINING = '%remain% от разрешенного %total%.';
	const S_NO_PROJECT = 'Нет проекта.';

	const S_SEARCH = '# 12, @user, words…';
	const S_COPYRIGHT = 'На основе %name%.';

	const S_LAST_UPDATES = 'Последние обновления…';

		# Alerts

	const A_ERROR_DIRECTORY = '<strong> Ошибка: </strong> не удалось создать каталог “%name%”.';
	const A_ERROR_FILE = '<strong> Ошибка: </strong> невозможно прочитать файл “%name%”.';
	const A_ERROR_FILE_WRITE = '<strong> Ошибка: </strong> не удалось записать файл “%name%”.';
	const A_ERROR_FATAL = 'К сожалению, что-то пошло не так. Если проблема не исчезнет, обратитесь к администратору. ';
	const A_ERROR = '<strong>%title%: </strong> <br /> <br />%message% <br /> <br /> Файл «<strong>%file% </strong>» в строке < strong>%line% </strong>.';

	const A_SUCCESS_INSTALL = '<strong> Готово: </strong> phpmyBugs полностью настроен.';
	const A_ERROR_INSTALL = '<strong> Ошибка: </strong> phpmyBugs уже настроен. Пожалуйста, удалите файл конфигурации, если вы хотите сбросить конфигурацию. ';
	const A_MODIF_SAVED = 'Изменения сохранены.';

	const A_ERROR_FORM = 'Произошла ошибка. Отправьте форму еще раз. ';
	const A_ERROR_TOKEN = 'Неверный токен. Отправьте форму еще раз. ';
	const A_ERROR_EMPTY = 'Вы должны указать имя пользователя и пароль.';
	const A_ERROR_SAME_USERNAME = 'Это имя пользователя недоступно.';
	const A_SUCCESS_SIGNUP = '<strong> Готово: </strong> теперь вы можете войти в систему.';

	const A_CONFIRM_DELETE_COMMENT = 'Вы уверены, что хотите удалить этот комментарий?';
	const A_SUCCESS_DELETE_COMMENT = 'Комментарий удален.';
	const A_CONFIRM_DELETE_ISSUE = 'Вы уверены, что хотите удалить эту проблему?';
	const A_SUCCESS_DELETE_ISSUE = 'Проблема удалена.';
	const A_CONFIRM_DELETE_UPLOAD = 'Вы уверены, что хотите удалить этот файл?';
	const A_CONFIRM_DELETE_PROJECT = 'Вы уверены, что хотите удалить этот проект? Все соответствующие выпуски будут потеряны.';

	const A_LOGGED = 'Вы вошли в Систему.';
	const A_LOGGED_OUT = 'Вы вышли из системы.';
	const A_ERROR_CONNEXION = '<strong> Ошибка: </strong> неправильное имя пользователя или пароль.';
	const A_ERROR_CONNEXION_WAIT = '<strong> Ошибка: </strong> неправильное имя пользователя или пароль. Пожалуйста, подождите %duration% %period% перед повторной попыткой.';
	const A_ERROR_LOGIN_WAIT = 'Пожалуйста, подождите %duration% %period% перед повторной попыткой. Это защита от злонамеренных атак.';

	const A_ERROR_UPLOAD = 'Произошла ошибка. Пожалуйста, попробуйте еще раз.';
	const A_ERROR_UPLOAD_SIZE = 'Файл превышает максимально допустимый размер (%nb% max).';
	const A_ERROR_UPLOAD_FULL = 'У вас недостаточно места на диске для загрузки этого файла: осталось %nb%.';

	const A_PLEASE_LOGIN_ISSUES = 'Пожалуйста, войдите в систему, чтобы увидеть проблемы.';
	const A_PLEASE_LOGIN_COMMENT = 'Пожалуйста, авторизуйтесь, чтобы оставить комментарий. Еще нет аккаунта? Создайте один: это бесплатно и очень быстро!';
	const A_PLEASE_LOGIN_ISSUE = 'Пожалуйста, войдите в систему, чтобы сообщить о проблеме. Еще нет аккаунта? Создайте один: это бесплатно и очень быстро!';
	const A_SHOULD_LOGIN = 'Если у вас есть учетная запись, пожалуйста, войдите в систему. Если нет, подумайте о ее создании: это бесплатно и очень быстро!';

	const A_IE = 'Ваш браузер устарел: <a href="http://www.browserchoice.eu"> обновите или измените его </a>.';

		# Mails

	const M_NEW_COMMENT_O = '[%title% - %project% - Issue #%id%] Новый комментарий';
	const M_NEW_COMMENT = 'Привет, %username%!

	Вопрос № %id% - “%summary%” только что прокомментировал %by%. Вы можете прочитать новый комментарий здесь:
	%url%.

	Если вы не хотите получать дальнейшие уведомления по этой проблеме, вариант доступен (после входа) по ссылке выше.

	-----
	Это автоматическое письмо, не отвечайте.
	';

	const M_NEW_ISSUE_O = '[%title% - %project%] Новый выпуск';
	const M_NEW_ISSUE = 'Привет, %username%!

	Вопрос №%id% - “%summary%” только что был отправлен %by%. Вы можете прочитать это здесь:
	%url%.

	Если вы не хотите получать дальнейшие уведомления по этой проблеме, вариант доступен (после входа) по ссылке выше.

	-----
	Это автоматическое письмо, не отвечайте.
	';

		# Titles

	const T_INSTALLATION = 'Установка';
	const T_SETTINGS = 'Настройки';
	const T_GLOBAL_SETTINGS = 'Глобальные настройки';
	const T_APPEARANCE = 'Внешний вид';
	const T_ISSUES = 'Проблемы';
	const T_GROUPS = 'Группы';
	const T_USERS = 'Пользователи';
	const T_BROWSE_ISSUES = 'Просмотреть проблемы';
	const T_NEW_ISSUE = 'Новая проблема';
	const T_PROJECTS = 'Проекты';
	const T_DASHBOARD = 'Панель управления';
	const T_LAST_UPDATES = 'Последние обновления';
	const T_LAST_ACTIVITY = 'Последнее действие';
	const T_UPLOADS = 'Загрузки';
	const T_SEARCH = 'Поиск';

		# FORMS

	const F_USERNAME = 'Имя пользователя:';
	const F_PASSWORD = 'Пароль:';
	const F_USERNAME2 = 'Имя пользователя';
	const F_PASSWORD2 = 'Пароль';
	const F_NAME = 'Имя:';
	const F_URL = 'URL:';
	const F_URL_REWRITING = 'Перезапись URL:';
	const F_INTRO = 'Введение:';
	const F_DESCRIPTION = 'Описание:';
	const F_EMAIL = 'Электронная почта:';
	const F_MAX_UPLOAD = 'Максимальный размер одной загрузки:';
	const F_ALLOCATED_SPACE = 'Выделенное пространство на пользователя:';
	const F_GROUP = 'Группа:';
	const F_NOTIFICATIONS = 'Получать уведомление:';
	const F_PROJECT_X = 'Проект “%name%”:';
	const F_LANGUAGE = 'Язык:';
	const F_LOGS = 'Журналы:';

	const F_ISSUES_PAGE = 'Вопросов на странице:';
	const F_ISSUES_PAGE_SEARCH = 'Количество ошибок на странице (поиск):';
	const F_PREVIEW_ISSUE = 'Длина превью (выпусков):';
	const F_PREVIEW_SEARCH = 'Длина превью (поиск):';
	const F_PREVIEW_PROJECT = 'Длина превью (проектов):';
	const F_LAST_EDITS = 'Количество проблем, отображаемых на информационных панелях:';
	const F_LAST_ACTIVITY = 'Количество проблем, отображаемых на страницах пользователей:';

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
	const F_FILTER_STATUSES = 'Статусы фильтров:';
	const F_FILTER_STATES = 'Состояние фильтра:';
	const F_FILTER_LABELS = 'Метки фильтра:';
	const F_FILTER_USERS = 'Фильтровать пользователей:';

	const F_WRITE = 'Запись:';
	const F_SUMMARY = 'Сводка';
	const F_CONTENT = 'Контент';

	const F_STATUS = 'Статус:';
	const F_RELATED = 'Связано:';
	const F_LABELS2 = 'Ярлыки:';

	const F_GENERAL_SETTINGS = 'Общие настройки:';
	const F_PROJECTS = 'Проекты:';
	const F_DATABASE = 'База данных:';
	const F_UPLOADS = 'Загрузки:';
	const F_COLORS = 'Управление цветами:';
	const F_DISPLAY = 'Управление отображением:';
	const F_STATUSES = 'Управление статусами:';
	const F_LABELS = 'Управление ярлыками:';
	const F_GROUPS = 'Управление группами:';
	const F_PERMISSIONS = 'Управление разрешениями:';
	const F_USERS = 'Управление пользователями:';

	const F_TIP_NAME = 'Он будет отображаться в заголовке каждой страницы.';
	const F_TIP_URL_REWRITING = 'Оставьте это поле пустым, чтобы отключить перезапись URL. В противном случае он должен содержать путь к папке phpmyBugs (начинающейся и оканчивающейся знаком "/") относительно имени домена.';
	const F_TIP_INTRO = 'Он будет отображаться на домашней странице. Он будет проанализирован с использованием синтаксиса Markdown. Примечание: если есть только один проект с именем “%name%”, домашняя страница автоматически перенаправляется на панель управления проекта, и этот текст не будет отображаться.';
	const F_TIP_EMAIL = 'Оставьте это поле пустым, чтобы отключить уведомления по электронной почте. В противном случае этот адрес будет использоваться в качестве отправителя при отправке уведомления по электронной почте.';
	const F_TIP_PASSWORD = 'Оставьте поле пустым, если вы не хотите менять пароль.';
	const F_TIP_USER_EMAIL = 'Требуется, только если вы хотите получать уведомления.';
	const F_TIP_NOTIFICATIONS = 'Это настройка по умолчанию: вы можете изменить ее для каждой проблемы.';
	const F_TIP_NOTIFICATIONS_DISABLED = 'Примечание: уведомления в настоящее время отключены администратором.';
	const F_TIP_DESCRIPTION = 'Он будет отображаться на панели инструментов проекта. Он будет проанализирован с использованием синтаксиса уценки.';

	const F_TIP_MAX_UPLOAD = 'Каждый загружаемый файл не может превышать этот размер.';
	const F_TIP_ALLOCATED_SPACE = 'Пользователь не может загружать другие файлы, когда он достиг этого предела. <br /> <em> Внимание: </em> если ни одному зарегистрированному пользователю не разрешено загружать файлы (это не настройка по умолчанию), это ограничение на них не распространяется.';

	const F_TIP_ID_STATUS = '<b> Совет: </b> будьте осторожны при изменении идентификаторов, потому что каждая проблема сохраняет свой старый идентификатор статуса (кроме случаев, когда этот идентификатор больше не существует: в этом случае будет использоваться статус по умолчанию).';
	const F_TIP_ID_LABEL = '<b> Совет: </b> будьте осторожны при изменении идентификаторов, потому что каждая метка одной проблемы сохраняет свой старый идентификатор (кроме случаев, когда этот идентификатор больше не существует: в этом случае метка удаляется из выпуск).';
	const F_TIP_ID_GROUP = '<b> Совет: </b> будьте осторожны при изменении идентификаторов, потому что каждый пользователь сохраняет свой старый идентификатор группы (кроме случаев, когда этот идентификатор больше не существует: в этом случае будет использоваться группа по умолчанию).';

	const HELP_MARKDOWN = '
<h2> Синтаксис Markdown: </h2>

<p> Абзацы: </p>
<pre> <code class="blank no-highlight"> Абзацы разделяются одной или несколькими пустыми строками.
Вот почему этот текст будет отображаться в той же строке, что и предыдущая фраза, независимо от разрыва строки.

Чтобы начать новую строку без создания нового абзаца:
вставьте два пробела перед разрывом строки, как здесь. </code> </pre>
<p> Акцент: </p>
<pre> <code class="blank no-highlight"> * Курсив *
_Итатический текст снова_

**Жирный текст**
__Жирный текст снова __ </code> </pre>

<p> Ссылки: </p>
<pre> <code class="blank no-highlight"> Это [пример] (http://example.com) встроенной ссылки.
Это еще один: &lt;http://example.com&gt; </code> </pre>

<p> Изображения: </p>
<pre> <code class="blank no-highlight">! [Я изображение.] (http://example.com/image.png) </code> </pre>

<p> Заголовки: </p>
<pre> <code class="blank no-highlight"> # заголовок верхнего уровня
## Название второго уровня
### Заголовок третьего уровня
#### Заголовок четвертого уровня </code> </pre>

<p> Списки: </p>
<pre> <code class="blank no-highlight"> - один элемент
* Еще один

1. первый пункт
2. второй элемент </code> </pre>

<p> Цитаты: </p>
<pre> <code class="blank no-highlight" >> Я - цитата из двух абзацев.
>
> Я второй абзац. </code> </pre>

<p> Блоки кода: </p>
<pre> <code class="blank no-highlight"> Это `встроенный блок кода`. </code> </pre>
<pre> <code class="blank no-highlight"> &lt;?php echo "Я являюсь блоком кода, потому что у меня отступ
    с 4 пробелами ";?&gt; </code> </pre>
<pre> <code class = "blank no-highlight"> ```
&lt;?php echo "Я - блок кода.";?&gt;
```

```php
&lt;?php echo "Поддерживаемые языки: bash, cs, ruby, diff, javascript, css, xml, http, java, php, python, sql, ini, perl, json, cpp, markdown, no-highlight"; ?&gt;
``` </code> </pre>
';


	private static $permissions = array(
		'home' => array (
		'title' => 'Главная:',
		'description' => 'Может получить доступ к домашней странице.'
		),
		'dashboard' => array (
		'title' => 'Панели мониторинга:',
		'description' => 'Имеет доступ к панелям управления проектами.'
		),
		'issues' => array (
		'title' => 'Просмотреть проблемы:',
		'description' => 'Может просматривать общедоступные вопросы.'
		),
		'private_issues' => array (
		'title' => 'Просмотреть личные вопросы:',
		'description' => 'Может просматривать проблемы, помеченные как личные.'
		),
		'search' => array (
		'title' => 'Поиск:',
		'description' => 'Может искать проблемы или пользователей.'
		),
		'new_issue' => array (
		'title' => 'Новый выпуск:',
		'description' => 'Можно отправить новую проблему.'
		),
		'edit_issue' => array (
		'title' => 'Редактировать проблемы:',
		'description' => 'Можно редактировать текст всех вопросов и удалять их.'
		),
		'update_issue' => array (
		'title' => 'Проблемы с обновлением:',
		'description' => 'Может обновлять проблемы: изменять статус, добавлять ярлыки, закрывать и снова открывать, ...'
		),
		'post_comment' => array (
		'title' => 'Оставить комментарий:',
		'description' => 'Может оставлять комментарии.'
		),
		'edit_comment' => array (
		'title' => 'Редактировать комментарии:',
		'description' => 'Можно редактировать все комментарии (пользователи в любом случае могут редактировать свои собственные комментарии).'
		),
		'view_user' => array (
		'title' => 'Профили пользователей:',
		'description' => 'Может просматривать все профили пользователей.'
		),
		'upload' => array (
		'title' => 'Опубликовать файл:',
		'description' => 'Можно прикреплять файлы к комментарию или новой проблеме.'
		),
		'view_upload' => array (
		'title' => 'Просмотреть загрузки:',
		'description' => 'Имеет доступ ко всем загруженным файлам.'
		),
		'settings' => array (
		'title' => 'Изменить настройки:',
		'description' => 'Может получить доступ к этой странице и изменить все глобальные настройки.'
		),
		'signup' => array (
		'title' => 'Зарегистрироваться:',
		'description' => 'Можно зарегистрироваться.'
		),
		'view_errors' => array (
		'title' => 'Просмотреть критические ошибки:',
		'description' => 'Может просматривать описание критических ошибок.'
		)
	);

	public static function permissions($id, $type = 'description') {
		return self::$permissions[$id][$type];
	}

	private static $settings = array(
		'validate_url' => 'Недействительный URL.',
		'validate_email' => 'Электронная почта недействительна.',
		'private_label_removed' => 'Вы не можете удалить частную метку или изменить ее идентификатор, но вы можете переименовать ее.',
		'default_status_removed' => 'Вы не можете удалить статус по умолчанию или изменить его идентификатор, но вы можете его переименовать.',
		'default_group_removed' => 'Вы не можете удалить группу по умолчанию или изменить ее идентификатор, но вы можете переименовать ее.',
		'default_group_superuser_removed' => 'Вы не можете удалить группу суперпользователя или изменить ее идентификатор, но вы можете переименовать ее.',
		'validate_same_username' => 'Предупреждение: два пользователя имеют одинаковое имя пользователя.',
		'validate_same_project_name' => 'Два проекта не могут иметь одно и то же имя. Один был автоматически переименован.',
		'language_modified' => 'Обновите эту страницу, чтобы просмотреть ее на новом языке.'
	);

	public static function settings($id) {
		return self::$settings[$id];
	}

	private static $errors = array(
		E_ERROR => 'Неустранимая ошибка',
		E_WARNING => 'Предупреждение',
		E_PARSE => 'Ошибка разбора',
		E_NOTICE => 'Уведомление',
		E_STRICT => 'Совет',
		E_DEPRECATED => 'Устарело',
		'default' => 'Ошибка'
	);
	
	public static function errors($no) {
		return (isset(self::$errors[$no])) ? self::$errors[$no] : self::$errors['default'];
	}
}

?>