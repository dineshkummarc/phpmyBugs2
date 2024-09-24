<?php

class Trad {

		# Words

	const W_ISSUE = 'Problema';
	const W_OPEN = 'Abrir';
	const W_OPENED = 'Abierto';
	const W_CLOSED = 'Cerrado';
	const W_REOPENED = 'Reabierto';
	const W_COMMENTED = 'Comentado';
	const W_NOBODY = 'nadie';
	const W_SOMEONE = 'alguien';
	const W_ENABLED = 'Habilitado';
	const W_DISABLED = 'Deshabilitado';
	const W_NOTFOUND = 'No encontrado';
	const W_FORBIDDEN = 'Prohibido';
	const W_MENU = 'Menú';

	const W_EXAMPLE = 'Ejemplo';
	const W_HEX = 'Hex';
	const W_RENDERING = 'Representación';
	const W_ID = 'ID';
	const W_DISPLAY_NAME = 'Nombre para mostrar';

	const W_SECONDE = 'segundo';
	const W_MINUTE = 'minuto';
	const W_HOUR = 'hora';
	const W_DAY = 'día';
	const W_WEEK = 'semana';
	const W_MONTH = 'mes';
	const W_YEAR = 'año';
	const W_DECADE = 'decad';
	const W_SECONDE_P = 'segundos';
	const W_MINUTE_P = 'minutos';
	const W_HOUR_P = 'horas';
	const W_DAY_P = 'días';
	const W_WEEK_P = 'semanas';
	const W_MONTH_P = 'meses';
	const W_YEAR_P = 'años';
	const W_DECADE_P = 'décadas';

	const W_PREVIOUS = 'Anterior';
	const W_NEXT = 'Siguiente';
	const W_CURRENT = 'Página %nb1% de %nb2%';

	const W_NOT_LOGGED = 'No registrado';

	const W_SUSPENSION = '…';
	const W_EXTRACT = '“%texto%”';

	const W_USER = 'Usuario';
	const W_DEVELOPPER = 'Desarrollador';
	const W_SUPERUSER = 'Superusuario';
	const W_S_NEW = 'Nuevo';
	const W_S_CONFIRMED = 'Confirmado';
	const W_S_ASSIGNED = 'Asignado a %usuario%';
	const W_S_RESOLVED = 'Resuelto';
	const W_S_REJECTED = 'Rechazado';
	const W_L_URGENT = 'Urgente';
	const W_L_IMPROVEMENT = 'Mejora';
	const W_L_PRIVATE = 'Privado';

	const W_PROFILEPIC = 'foto de perfil';

	const W_RSS = 'Fuente RSS';

		# Verbes

	const V_UPDATE = 'Actualizar';
	const V_UPDATE_DETAILS = 'Detalles de actualización';
	const V_UPDATE_CONTENT = 'Actualizar contenido';
	const V_UPDATE_AND = 'Actualizar & %adjetivo%';
	const V_CANCEL = 'Cancelar';
	const V_PREVIEW = 'Vista previa';
	const V_COMMENT = 'Comentario';
	const V_SUBMIT = 'Enviar';
	const V_SELECT_FILE = 'Seleccionar un archivo ...';
	const V_UPLOADING = 'Subiendo…';
	const V_SAVE_CONFIG = 'Guardar configuración';
	const V_APPLY = 'Aplicar';
	const V_EDIT = 'Editar';
	const V_SIGNUP = 'Registrarse';
	const V_CONTINUE = 'Continuar';
	const V_REMOVE_ISSUE = 'Eliminar problema';
	const V_CLOSE = 'cerrar';
	const V_REOPEN = 'reabrir';
	const V_EXPORT = 'Exportar datos brutos';

		# Sentencies

	const S_NOLABEL = '-';
	const S_NODEPENDENCY = '-';
	const S_COMMENT_LEAVE = 'Deja un comentario:';
	const S_AGO = '%duration% %pediod% ago';
	const S_ISSUE_ABOUT = 'Acerca de este problema:';
	const S_UPLOAD_ADD = 'Adjuntar un archivo:';
	const S_WELCOME = 'Bienvenido, %usuario%';
	const S_NEVER = 'Nunca';
	const S_ME = 'De actualizaciones sobre temas en los que he contribuido';
	const S_ALWAYS = 'De cada actualización';
	const S_START_NOTIF = 'Recibir notificaciones de nuevas actualizaciones';
	const S_STOP_NOTIF = 'Ya no recibirán notificaciones de actualizaciones';
	const S_NOTFOUND = 'La página que estás buscando ya no existe ...';
	const S_FORBIDDEN = 'No tiene permiso para acceder a esta página. Inicie sesión o cierre sesión para continuar.';

	const S_VIEW_PARTICIPATION = 'Ver su participación.';
	const S_VIEW_STATUS = 'Ver problemas “%status%”.';

	const S_ISSUE_CREATED = 'por %usuario% %tiempo%';
	const S_ISSUE_UPDATED = '%adj% por %usuario% %tiempo%.';
	const S_ISSUE_STATUS_UPDATED = 'Estado actualizado a %status% por %user% %time%.';

	const S_RSS_ISSUE_UPDATED = '%adj% por %usuario%.';
	const S_RSS_ISSUE_STATUS_UPDATED = 'Estado actualizado a “%status%” por %user%.';

	const S_INTRO_INSTALL = '¡Parece que es la primera vez que ejecuta phpmyBugs! Configúrelo: ';
	const S_FIRST_ISSUE_TITLE = '¿Cómo estás, calabaza?';
	const S_FIRST_ISSUE = '¡Soy tu primer número! Después de iniciar sesión, podrá eliminarme. ';

	const S_NO_USER = 'Ningún usuario coincide con su solicitud.';
	const S_NO_ISSUE = 'Ningún problema coincide con su solicitud.';
	const S_MATCHING_ISSUES = '%nb% problemas de coincidencia';
	const S_NO_ACTIVITY = 'No hay actividad reciente.';
	const S_NO_UPLOAD = 'Sin carga.';
	const S_SIZE_REMAINING = '%restante% restante del %total% permitido.';
	const S_NO_PROJECT = 'Sin proyecto.';

	const S_SEARCH = '# 12, @usuario, palabras…';
	const S_COPYRIGHT = 'Desarrollado por %name%.';

	const S_LAST_UPDATES = 'Últimas actualizaciones ...';

		# Alerts

	const A_ERROR_DIRECTORY = '<strong> Error: </strong> no se pudo crear el directorio “%name%”.';
	const A_ERROR_FILE = '<strong> Error: </strong> no se puede leer el archivo “%name%”.';
	const A_ERROR_FILE_WRITE = '<strong> Error: </strong> no se puede escribir el archivo “%name%”.';
	const A_ERROR_FATAL = 'Lo siento, algo salió mal. Si el problema persiste, por favor contacte a un administrador.';
	const A_ERROR = '<strong>%title%: </strong> <br /> <br />%mensaje% <br /> <br /> Archivo “<strong>%archivo% </strong>” en línea < fuerte>%línea% </strong>.';

	const A_SUCCESS_INSTALL = '<strong> Hecho: </strong> phpmyBugs ahora está completamente configurado.';
	const A_ERROR_INSTALL = '<strong> Error: </strong> phpmyBugs ya está configurado. Elimine el archivo de configuración si desea restablecer la configuración. ';
	const A_MODIF_SAVED = 'Se guardaron las modificaciones.';

	const A_ERROR_FORM = 'Ocurrió un error. Vuelva a enviar el formulario. ';
	const A_ERROR_TOKEN = 'Token incorrecto. Vuelva a enviar el formulario. ';
	const A_ERROR_EMPTY = 'Debe especificar un nombre de usuario y una contraseña.';
	const A_ERROR_SAME_USERNAME = 'Este nombre de usuario no está disponible.';
	const A_SUCCESS_SIGNUP = '<strong> Hecho: </strong> ahora puede iniciar sesión.';

	const A_CONFIRM_DELETE_COMMENT = '¿Está seguro de que desea eliminar este comentario?';
	const A_SUCCESS_DELETE_COMMENT = 'El comentario fue eliminado.';
	const A_CONFIRM_DELETE_ISSUE = '¿Está seguro de que desea eliminar este problema?';
	const A_SUCCESS_DELETE_ISSUE = 'El problema fue eliminado.';
	const A_CONFIRM_DELETE_UPLOAD = '¿Está seguro de que desea eliminar este archivo?';
	const A_CONFIRM_DELETE_PROJECT = '¿Está seguro de que desea eliminar este proyecto? Se perderán todos los números correspondientes. ';

	const A_LOGGED = 'Ahora ha iniciado sesión en el sistema.';
	const A_LOGGED_OUT = 'Ahora se desconectó del sistema.';
	const A_ERROR_CONNEXION = '<strong> Error: </strong> nombre de usuario o contraseña incorrectos.';
	const A_ERROR_CONNEXION_WAIT = '<strong> Error: </strong> Nombre de usuario o contraseña incorrectos. Espere %duration% %period% antes de volver a intentarlo. ';
	const A_ERROR_LOGIN_WAIT = 'Espere %duration% %period% antes de volver a intentarlo. Esta es una protección contra ataques maliciosos. ';

	const A_ERROR_UPLOAD = 'Ocurrió un error. Inténtalo de nuevo.';
	const A_ERROR_UPLOAD_SIZE = 'El archivo excede el tamaño máximo permitido (%nb% max).';
	const A_ERROR_UPLOAD_FULL = 'No tiene suficiente espacio en disco para cargar este archivo:%nb% restante.';

	const A_PLEASE_LOGIN_ISSUES = 'Inicie sesión para ver los problemas.';
	const A_PLEASE_LOGIN_COMMENT = 'Inicie sesión para publicar un comentario. ¿No tienes cuenta aún? Crea uno: ¡es gratis y muy rápido! ';
	const A_PLEASE_LOGIN_ISSUE = 'Inicie sesión para enviar un problema. ¿No tienes cuenta aún? Crea uno: ¡es gratis y muy rápido! ';
	const A_SHOULD_LOGIN = 'Si tiene una cuenta, inicie sesión. Si no, considere crear una: ¡es gratis y muy rápido!';

	const A_IE = 'Su navegador está obsoleto: <a href="http://www.browserchoice.eu"> actualícelo o cámbielo </a>.';

		# Mails

	const M_NEW_COMMENT_O = '[%title% -%project% - Issue #%id%] Nuevo comentario';
	const M_NEW_COMMENT = '¡Hola,% username%!

	El problema #%id% - "%summary%" acaba de ser comentado por %by%. Puedes leer el nuevo comentario aquí:
	%url%.

	Si no desea recibir más notificaciones sobre este problema, hay una opción disponible (después de iniciar sesión) a través del enlace anterior.

	-----
	Este es un correo electrónico automático, no responda.
	';

	const M_NEW_ISSUE_O = '[%title% - %project%] Nuevo problema';
	const M_NEW_ISSUE = '¡Hola, %username%!

	El problema #%id% - "%summary%" acaba de ser enviado por %by%. Puede leerlo aquí:
	% url%.

	Si no desea recibir más notificaciones sobre este problema, hay una opción disponible (después de iniciar sesión) a través del enlace anterior.

	-----
	Este es un correo electrónico automático, no responda.
	';

		# Titles

	const T_INSTALLATION = 'Instalación';
	const T_SETTINGS = 'Configuración';
	const T_GLOBAL_SETTINGS = 'Configuración global';
	const T_APPEARANCE = 'Apariencia';
	const T_ISSUES = 'Problemas';
	const T_GROUPS = 'Grupos';
	const T_USERS = 'Usuarios';
	const T_BROWSE_ISSUES = 'Problemas de exploración';
	const T_NEW_ISSUE = 'Nuevo problema';
	const T_PROJECTS = 'Proyectos';
	const T_DASHBOARD = 'Panel de control';
	const T_LAST_UPDATES = 'Últimas actualizaciones';
	const T_LAST_ACTIVITY = 'Última actividad';
	const T_UPLOADS = 'Cargas';
	const T_SEARCH = 'Buscar';

		# FORMS

	const F_USERNAME = 'Nombre de usuario:';
	const F_PASSWORD = 'Contraseña:';
	const F_USERNAME2 = 'Nombre de usuario';
	const F_PASSWORD2 = 'Contraseña';
	const F_NAME = 'Nombre:';
	const F_URL = 'Url:';
	const F_URL_REWRITING = 'Reescritura de URL:';
	const F_INTRO = 'Introducción:';
	const F_DESCRIPTION = 'Descripción:';
	const F_EMAIL = 'Correo electrónico:';
	const F_MAX_UPLOAD = 'Tamaño máximo por carga:';
	const F_ALLOCATED_SPACE = 'Espacio asignado por usuario:';
	const F_GROUP = 'Grupo:';
	const F_NOTIFICATIONS = 'Ser notificado:';
	const F_PROJECT_X = 'Proyecto “%nombre%”:';
	const F_LANGUAGE = 'Idioma:';
	const F_LOGS = 'Registros:';

	const F_ISSUES_PAGE = 'Problemas por página:';
	const F_ISSUES_PAGE_SEARCH = 'Problemas por página (búsqueda):';
	const F_PREVIEW_ISSUE = 'Duración de las vistas previas (números):';
	const F_PREVIEW_SEARCH = 'Longitud de las vistas previas (búsqueda):';
	const F_PREVIEW_PROJECT = 'Duración de las vistas previas (proyectos):';
	const F_LAST_EDITS = 'Número de problemas mostrados en los paneles:';
	const F_LAST_ACTIVITY = 'Número de problemas mostrados en las páginas del usuario:';

	const F_ADD_PROJECT = 'Nuevo proyecto';
	const F_ADD_COLOR = 'Nuevo color';
	const F_ADD_STATUS = 'Nuevo estado';
	const F_ADD_LABEL = 'Nueva etiqueta';
	const F_ADD_GROUP = 'Nuevo grupo';
	const F_ADD_USER = 'Nuevo usuario';

	const F_SORT_BY = 'Ordenar por:';
	const F_SORT_ID = 'ID';
	const F_SORT_MOD = 'última actualización';
	const F_SORT_DESC = 'descendente';
	const F_SORT_ASC = 'ascendente';
	const F_FILTER_STATUSES = 'Estados de filtro:';
	const F_FILTER_STATES = 'Estados de filtro:';
	const F_FILTER_LABELS = 'Etiquetas de filtro:';
	const F_FILTER_USERS = 'Filtrar usuarios:';

	const F_WRITE = 'Escribir:';
	const F_SUMMARY = 'Resumen';
	const F_CONTENT = 'Contenido';

	const F_STATUS = 'Estado:';
	const F_RELATED = 'Relacionado:';
	const F_LABELS2 = 'Etiquetas:';

	const F_GENERAL_SETTINGS = 'Configuración general:';
	const F_PROJECTS = 'Proyectos:';
	const F_DATABASE = 'Base de datos:';
	const F_UPLOADS = 'Cargas:';
	const F_COLORS = 'Administrar colores:';
	const F_DISPLAY = 'Administrar pantalla:';
	const F_STATUSES = 'Administrar estados:';
	const F_LABELS = 'Administrar etiquetas:';
	const F_GROUPS = 'Administrar grupos:';
	const F_PERMISSIONS = 'Administrar permisos:';
	const F_USERS = 'Administrar usuarios:';

	const F_TIP_NAME = 'Se mostrará en el encabezado de cada página.';
	const F_TIP_URL_REWRITING = 'Deje este campo vacío para deshabilitar la reescritura de URL. De lo contrario, debería contener la ruta a la carpeta phpmyBugs (comenzada y terminada con "/"), relativa al nombre de dominio. ';
	const F_TIP_INTRO = 'Se mostrará en la página de inicio. Se analizará con la sintaxis de Markdown. Nota: si solo hay un proyecto llamado “%name%”, la página de inicio se redirige automáticamente al panel del proyecto y este texto no se mostrará. ';
	const F_TIP_EMAIL = 'Deje este campo vacío para deshabilitar las notificaciones por correo electrónico. De lo contrario, esta dirección se utilizará como remitente al enviar una notificación por correo electrónico. ';
	const F_TIP_PASSWORD = 'Déjelo vacío si no desea cambiar la contraseña.';
	const F_TIP_USER_EMAIL = 'Obligatorio solo si desea recibir notificaciones.';
	const F_TIP_NOTIFICATIONS = 'Esta es una configuración predeterminada: podrá cambiarla para cada problema.';
	const F_TIP_NOTIFICATIONS_DISABLED = 'Nota: las notificaciones están actualmente deshabilitadas por el administrador.';
	const F_TIP_DESCRIPTION = 'Se mostrará en el panel del proyecto. Se analizará con la sintaxis de rebajas. ';

	const F_TIP_MAX_UPLOAD = 'Cada archivo cargado no puede exceder este tamaño.';
	const F_TIP_ALLOCATED_SPACE = 'Un usuario no puede cargar otros archivos una vez que alcanzó este límite. <br /> <em> Atención: </em> si ningún usuario registrado puede cargar archivos (esta no es la configuración predeterminada), este límite no se aplica a ellos. ';

	const F_TIP_ID_STATUS = '<b> Consejo: </b> tenga cuidado al cambiar las ID, porque cada problema conserva su ID de estado anterior (excepto si esta ID ya no existe: en este caso, se utilizará el estado predeterminado).';
	const F_TIP_ID_LABEL = '<b> Sugerencia: </b> tenga cuidado al cambiar los ID, porque cada etiqueta de un problema conserva su ID anterior (excepto si este ID ya no existe: en este caso, la etiqueta se elimina del problema).';
	const F_TIP_ID_GROUP = '<b> Consejo: </b> tenga cuidado al cambiar las ID, porque cada usuario conserva su ID de grupo anterior (excepto si esta ID ya no existe: en este caso, se utilizará el grupo predeterminado).';

	const HELP_MARKDOWN = '
		<h2> Sintaxis de Markdown: </h2>

	<p> Párrafos: </p>
	<pre> <code class="blank no-highlight"> Los párrafos están separados por una o más líneas en blanco.
	Es por eso que este texto se mostrará en la misma línea que la frase anterior, sin importar el salto de línea.

	Para comenzar una nueva línea sin crear un nuevo párrafo:
	inserte 2 espacios antes del salto de línea, como aquí. </code> </pre>
	<p> Énfasis: </p>
	<pre> <code class="blank no-highlight"> * Texto en cursiva *
	_Vuelve a escribir un mensaje de texto_

	**Texto en negrita**
	__ Texto en negrita otra vez__ </code> </pre>

	<p> Enlaces: </p>
	<pre> <code class="blank no-highlight"> Este es [un ejemplo] (http://example.com) de enlace en línea.
	Este es otro: &lt;http://example.com&gt;. </code> </pre>

	<p> Imágenes: </p>
	<pre> <code class="blank no-highlight">! [Soy una imagen.] (http://example.com/image.png) </code> </pre>

	<p> Encabezados: </p>
	<pre> <code class="blank no-highlight"> # Título de nivel superior
	## Título de segundo nivel
	### Título de tercer nivel
	#### Título de cuarto nivel </code> </pre>

	<p> Listas: </p>
	<pre> <code class = "espacio en blanco sin resaltar"> - un elemento
	* otro

	1. primer elemento
	2. segundo elemento </code> </pre>

	<p> Blockquotes: </p>
	<pre> <code class="blank no-highlight" > Soy una cita en bloque con dos párrafos.
	>
	> Soy el segundo párrafo. </code> </pre>

	<p> Bloques de código: </p>
	<pre> <code class="blank no-highlight"> Este es un `bloque de código en línea`. </code> </pre>
	<pre> <code class="blank no-highlight"> &lt;?php echo "Soy un bloque de código, porque tengo sangría
		con 4 espacios ";?&gt; </code> </pre>
	<pre> <code class = "en blanco sin resaltar"> ```
	&lt;?php echo "Soy un bloque de código"; ?&gt;
	```

	``` php
	&lt;?php echo "Los idiomas admitidos son: bash, cs, ruby, diff, javascript, css, xml, http, java, php, python, sql, ini, perl, json, cpp, markdown, no-highlight";?&gt;
	```</code> </pre>
	';


	private static $permissions = array(
		'home' => array (
		'title' => 'Inicio:',
		'description' => 'Puede acceder a la página de inicio.'
		),
		'dashboard' => array (
		'title' => 'Paneles de control:',
		'description' => 'Puede acceder a los paneles de proyectos.'
		),
		'issues' => array (
		'title' => 'Ver problemas:',
		'description' => 'Puede ver problemas públicos.'
		),
		'private_issues' => array (
		'title' => 'Ver problemas privados:',
		'description' => 'Puede ver problemas etiquetados como privados.'
		),
		'search' => array (
		'title' => 'Buscar:',
		'description' => 'Puede buscar problemas o usuarios.'
		),
		'new_issue' => array (
		'title' => 'Nuevo problema:',
		'description' => 'Puede enviar un nuevo problema.'
		),
		'edit_issue' => array (
		'title' => 'Editar problemas:',
		'description' => 'Puede editar el texto de todos los problemas y eliminarlos.'
		),
		'update_issue' => array (
		'title' => 'Problemas de actualización:',
		'description' => 'Puede actualizar problemas: cambiar estado, agregar etiquetas, cerrar y volver a abrir, ...'
		),
		'post_comment' => array (
		'title' => 'Publicar un comentario:',
		'description' => 'Puede publicar un comentario.'
		),
		'edit_comment' => array (
		'title' => 'Editar comentarios:',
		'description' => 'Puede editar todos los comentarios (los usuarios pueden editar sus propios comentarios de todos modos).'
		),
		'view_user' => array (
		'title' => 'Perfiles de usuario:',
		'description' => 'Puede ver todos los perfiles de usuario.'
		),
		'upload' => array (
		'title' => 'Publicar un archivo:',
		'description' => 'Puede adjuntar archivos a un comentario o un problema nuevo.'
		),
		'view_upload' => array (
		'title' => 'Ver cargas:',
		'description' => 'Puede acceder a todos los archivos cargados.'
		),
		'settings' => array (
		'title' => 'Cambiar configuración:',
		'description' => 'Puede acceder a esta página y modificar todas las configuraciones globales.'
		),
		'signup' => array (
		'title' => 'Registrarse:',
		'description' => 'Puede registrarse.'
		),
		'view_errors' => array (
		'title' => 'Ver errores fatales:',
		'description' => 'Puede ver la descripción de errores fatales.'
		)
	);

	public static function permissions($id, $type = 'description') {
		return self::$permissions[$id][$type];
	}

	private static $settings = array(
		'validate_url' => 'La URL no es válida.',
		'validate_email' => 'El correo electrónico no es válido.',
		'private_label_removed' => 'No puede quitar la etiqueta privada o cambiar su ID, pero puede cambiarle el nombre.',
		'default_status_removed' => 'No puede eliminar el estado predeterminado o cambiar su ID, pero puede cambiarle el nombre.',
		'default_group_removed' => 'No puede eliminar el grupo predeterminado o cambiar su ID, pero puede cambiarle el nombre.',
		'default_group_superuser_removed' => 'No puede eliminar el grupo de superusuarios o cambiar su ID, pero puede cambiarle el nombre.',
		'validate_same_username' => 'Advertencia: dos usuarios tienen el mismo nombre de usuario.',
		'validate_same_project_name' => 'Dos proyectos no pueden tener el mismo nombre. Uno ha sido renombrado automáticamente. ',
		'language_modified' => 'Actualiza esta página para verla en el nuevo idioma.'
	);

	public static function settings($id) {
		return self::$settings[$id];
	}

	private static $errors = array(
		E_ERROR => 'Error fatal',
		E_WARNING => 'Advertencia',
		E_PARSE => 'Error de análisis',
		E_NOTICE => 'Aviso',
		E_STRICT => 'Aviso',
		E_DEPRECATED => 'Desaprobado',
		'default' => 'Error'
	);
	public static function errors($no) {
		return (isset(self::$errors[$no])) ? self::$errors[$no] : self::$errors['default'];
	}
}

?>