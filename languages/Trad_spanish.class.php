<?php

class Trad {

# Palabras

const W_ISSUE = 'Problema';
const W_OPEN = 'Abierto';
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
const W_DECADE = 'década';
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
const W_MORE = 'MÁS';
const W_CURRENT = 'Página %nb1% de %nb2%';

const W_NOT_LOGGED = 'No ha iniciado sesión';

const W_SUSPENSION = '…';
const W_EXTRACT = '“%text%”';

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

const W_PROFILEPIC = 'Foto de perfil';

const W_RSS = 'Feed RSS';
const W_VERSION = 'Versión';

const W_CAPTCHA_IMAGE = 'Imagen CAPTCHA';
const W_CAPTCHA_REFRESH = 'Actualizar imagen';
const W_CAPTCHA_INPUT = 'Escriba el texto:';

# Verbos

const V_UPDATE = 'Actualizar';
const V_UPDATE_DETAILS = 'Actualizar detalles';
const V_UPDATE_CONTENT = 'Actualizar contenido';
const V_UPDATE_AND = 'Actualizar & %adjetivo%';
const V_CANCEL = 'Cancelar';
const V_PREVIEW = 'Vista previa';
const V_COMMENT = 'Comentario';
const V_SUBMIT = 'Enviar';
const V_SELECT_FILE = 'Seleccionar un archivo…';
const V_UPLOADING = 'Subiendo…';
const V_SAVE_CONFIG = 'Guardar configuración';
const V_APPLY = 'Aplicar';
const V_EDIT = 'Editar';
const V_SIGNUP = 'Registrarse';
const V_LOGIN = 'Iniciar sesión';
const V_CONTINUE = 'Continuar';
const V_REMOVE_ISSUE = 'Eliminar problema';
const V_CLOSE = 'cerrar';
const V_REOPEN = 'reabrir';
const V_EXPORT = 'Exportar datos sin procesar';

# Oraciones

const S_NOLABEL = '–';
const S_NODEPENDENCY = '–';
const S_COMMENT_LEAVE = 'Dejar un comentario:';
const S_AGO = '%duration% %pediod% ago';
const S_ISSUE_ABOUT = 'Acerca de este problema:';
const S_UPLOAD_ADD = 'Adjuntar un archivo:';
const S_WELCOME = 'Bienvenido, %user%';
const S_NEVER = 'Nunca';
const S_ME = 'De actualizaciones sobre problemas en los que he contribuido';
const S_ALWAYS = 'De cada actualización';
const S_START_NOTIF = 'Recibir notificaciones de nuevas actualizaciones';
const S_STOP_NOTIF = 'No recibir más notificaciones de actualizaciones';
const S_NOTFOUND = 'La página que estás buscando ya no existe...';
const S_FORBIDDEN = 'No tienes permiso para acceder a esta página. Inicia sesión o cierra sesión para continuar.';

const S_VIEW_PARTICIPATION = 'Ver su participación.';
const S_VIEW_STATUS = 'Ver problemas “%status%”.';

const S_ISSUE_CREATED = 'por %user% %time%';
const S_ISSUE_UPDATED = '%adj% por %user% %time%.';
const S_ISSUE_STATUS_UPDATED = 'Estado actualizado a %status% por %user% %time%.';

const S_RSS_ISSUE_UPDATED = '%adj% por %user%.';
const S_RSS_ISSUE_STATUS_UPDATED = 'Estado actualizado a “%status%” por %user%.';

const S_INTRO_INSTALL = 'Parece que es la primera vez que ejecuta phpmyBugs. Por favor, configúrelo:';
const S_FIRST_ISSUE_TITLE = '¿Cómo estás, calabaza?';
const S_FIRST_ISSUE = '¡Soy tu primer problema! Después de iniciar sesión, podrás eliminarme.';

const S_NO_USER = 'Ningún usuario coincide con tu solicitud.';
const S_NO_ISSUE = 'Ningún problema coincide con tu solicitud.';
const S_MATCHING_ISSUES = '%nb% problemas coincidentes';
const S_NO_ACTIVITY = 'No hay actividad reciente.';
const S_NO_UPLOAD = 'No se ha subido nada.';
const S_SIZE_REMAINING = 'Quedan %remain% del %total% permitido.';
const S_NO_PROJECT = 'No hay proyecto.';

const S_SEARCH = '#12, @user, palabras…';
const S_COPYRIGHT = 'Desarrollado por %name%.';
const S_UPGRADE = 'Obtener la última versión de <a href="https://github.com/bugtrackr/Nireus/releases/latest">GitHub</a> para <a href="https://bugtrackr.github.io/wiki/upgrade/">actualizar</a>.';

const S_LAST_UPDATES = 'Últimas actualizaciones…';

const S_STAY_LOGGEDIN = 'Mantenerme conectado';

const S_DEFAULT_DEFPROJ_DESC = 'Este es el proyecto predeterminado al que todos tienen acceso.';
const S_DEFAULT_2NDPROJ_DESC = 'Este podría ser su segundo proyecto en el que solo los usuarios registrados pueden publicar problemas.';

# Alertas

const A_ERROR_DIRECTORY = '<strong>Error:</strong> no se puede crear el directorio “%name%”.';
const A_ERROR_FILE = '<strong>Error:</strong> no se puede leer el archivo “%name%”.';
const A_ERROR_FILE_WRITE = '<strong>Error:</strong> no se puede escribir el archivo “%name%”.';
const A_ERROR_FATAL = 'Lo sentimos, algo salió mal. Comuníquese con un administrador si el problema persiste.';
const A_ERROR = '<strong>%title%:</strong><br /><br />%message%<br /><br />Archivo “<strong>%file%</strong>” en línea <strong>%line%</strong>.';

const A_SUCCESS_INSTALL = '<strong>Listo:</strong> phpmyBugs ahora está completamente configurado.';
const A_ERROR_INSTALL = '<strong>Error:</strong> phpmyBugs ya está configurado. Elimine el archivo de configuración si desea restablecer la configuración.';
const A_MODIF_SAVED = 'Se guardaron las modificaciones.';

const A_ERROR_FORM = 'Se ha producido un error. Por favor, vuelva a enviar el formulario.';
const A_ERROR_TOKEN = 'Token incorrecto. Por favor, vuelva a enviar el formulario.';
const A_ERROR_EMPTY = 'Debe especificar un nombre de usuario y una contraseña.';
const A_ERROR_SAME_USERNAME = 'Este nombre de usuario no está disponible.';
const A_SUCCESS_SIGNUP = '<strong>Listo:</strong> Ahora puede iniciar sesión.';

const A_CONFIRM_DELETE_COMMENT = '¿Está seguro de que desea eliminar este comentario?';
const A_SUCCESS_DELETE_COMMENT = 'El comentario fue eliminado.';
const A_CONFIRM_DELETE_ISSUE = '¿Está seguro de que desea eliminar este problema?';
const A_SUCCESS_DELETE_ISSUE = 'El problema fue eliminado.';
const A_CONFIRM_DELETE_UPLOAD = '¿Está seguro de que desea eliminar este archivo?';
const A_CONFIRM_DELETE_PROJECT = '¿Está seguro de que desea eliminar este proyecto? Se perderán todos los problemas correspondientes.';

const A_LOGGED = 'Ha iniciado sesión en el sistema.';
const A_LOGGED_OUT = 'Ha cerrado la sesión del sistema.';
const A_ERROR_CONNEXION = '<strong>Error:</strong> Nombre de usuario o contraseña incorrectos.';
const A_ERROR_CONNEXION_WAIT = '<strong>Error:</strong> Nombre de usuario o contraseña incorrectos. Espere %duration% %period% antes de volver a intentarlo.';
const A_ERROR_LOGIN_WAIT = 'Espere %duration% %period% antes de volver a intentarlo. Esta es una protección contra ataques maliciosos.';

const A_ERROR_UPLOAD = 'Se produjo un error. Inténtalo de nuevo.';
const A_ERROR_UPLOAD_SIZE = 'El archivo supera el tamaño máximo permitido (%nb% máx.).';
const A_ERROR_UPLOAD_FULL = 'No tienes suficiente espacio en disco para cargar este archivo: %nb% restante.';

const A_PLEASE_LOGIN_ISSUES = 'Inicia sesión para ver los problemas.';
const A_PLEASE_LOGIN_COMMENT = 'Inicia sesión para publicar un comentario. ¿Aún no tienes una cuenta? Crea una: ¡es gratis y muy rápido!';
const A_PLEASE_LOGIN_ISSUE = 'Inicia sesión para enviar un problema. ¿Aún no tienes una cuenta? Crea una: ¡es gratis y muy rápido!';
const A_SHOULD_LOGIN = 'Si tiene una cuenta, inicie sesión. Si no, considere crear una: ¡es gratis y muy rápido!';

const A_IE = 'Su navegador está obsoleto: <a href="https://www.browser-update.org/en/update.html">actualícelo o cámbielo</a>.';

# Correos

const M_NEW_COMMENT_O = '[%title% — %project% — Issue #%id%] Nuevo comentario';
const M_NEW_COMMENT = '¡Hola, %username%!

El issue #%id% — “%summary%” acaba de ser comentado por %by%. Puede leer el nuevo comentario aquí:
%url%.

Si no desea recibir más notificaciones sobre este issue, hay una opción disponible (después de iniciar sesión) a través del enlace anterior.

-----
Este es un correo electrónico automático, no responda.
';

const M_NEW_ISSUE_O = '[%title% — %project%] Nuevo problema';
const M_NEW_ISSUE = '¡Hola, %username%!

El problema #%id% — “%summary%” acaba de ser enviado por %by%. Puedes leerlo aquí:
%url%.

Si no quieres recibir más notificaciones sobre este problema, hay una opción disponible (después de iniciar sesión) a través del enlace anterior.

-----
Este es un correo electrónico automático, no respondas.
';

# Títulos

const T_INSTALLATION = 'Instalación';
const T_SETTINGS = 'Configuración';
const T_GLOBAL_SETTINGS = 'Configuración global';
const T_APPEARANCE = 'Apariencia';
const T_ISSUES = 'Problemas';
const T_GROUPS = 'Grupos';
const T_USERS = 'Usuarios';
const T_PERMISSIONS = 'Permisos';
const T_ENABLE_CAPTCHA = 'Administrar Captcha';
const T_CAPTCHA = 'Captcha';
const T_BROWSE_ISSUES = 'Examinar problemas';
const T_BROWSE_ALL_ISSUES = 'Examinar todos los problemas';
const T_ALL_ISSUES_DESCRIPTION = 'Estos son todos los problemas abiertos para todos los proyectos';
const T_NEW_ISSUE = 'Nuevo problema';
const T_ALL_ISSUES = 'Todos los problemas';
const T_PROJECTS = 'Proyectos';
const T_DASHBOARD = 'Panel de control';
const T_LAST_UPDATES = 'Últimas actualizaciones';
const T_LAST_ACTIVITY = 'Última actividad';
const T_UPLOADS = 'Subidas';
const T_SEARCH = 'Buscar';
const T_LINK_CONTACT = 'Contáctenos';
const T_LINK_LEGALNOTICE = 'Aviso legal';
const T_LINK_PRIVACYPOLICY = 'Política de privacidad';
const T_API_SETTINGS = 'API';
const T_API_ENABLE_SETTINGS = 'Administrar API';
const T_API_ACCESS_SETTINGS = 'Acceso a API';
const T_INFO = 'Información';

# FORMULARIOS

const F_USERNAME = 'Nombre de usuario:';
const F_PASSWORD = 'Contraseña:';
const F_USERNAME2 = 'Nombre de usuario';
const F_PASSWORD2 = 'Contraseña';
const F_NAME = 'Nombre:';
const F_URL = 'URL:';
const F_URL_CDN = 'URL CDN:';
const F_URL_REWRITING = 'Reescritura de URL:';
const F_INTRO = 'Introducción:';
const F_DESCRIPTION = 'Descripción:';
const F_EMAIL = 'Correo electrónico:';
const F_LINK_CONTACT = 'Enlace a la página de contacto externa (se puede dejar vacío):';
const F_LINK_LEGALNOTICE = 'Enlace al aviso legal (se puede dejar vacío):';
const F_LINK_PRIVACYPOLICY = 'Enlace a la política de privacidad (se puede dejar vacío):';
const F_MAX_UPLOAD = 'Tamaño máximo por carga:';
const F_ALLOCATED_SPACE = 'Espacio asignado por usuario:';
const F_GROUP = 'Grupo:';
const F_NOTIFICATIONS = 'Recibir notificaciones:';
const F_PROJECT_X = 'Proyecto “%name%”:';
const F_LANGUAGE = 'Idioma:';
const F_LOGS = 'Registros:';

const F_ISSUES_PAGE = 'Problemas por página:';
const F_ISSUES_PAGE_SEARCH = 'Número de problemas por página (búsqueda):';
const F_PREVIEW_ISSUE = 'Longitud de las vistas previas (problemas):';
const F_PREVIEW_SEARCH = 'Longitud de las vistas previas (búsqueda):';
const F_PREVIEW_PROJECT = 'Longitud de las vistas previas (proyectos):';
const F_LAST_EDITS = 'Número de problemas mostrados en los paneles:';
const F_LAST_ACTIVITY = 'Número de problemas mostrados en las páginas de usuario:';
const F_THEME = "Tema";
const F_TIP_THEME = "Colocar el archivo .css en";

const F_ADD_PROJECT = 'Nuevo proyecto';
const F_ADD_COLOR = 'Nuevo color';
const F_ADD_STATUS = 'Nuevo estado';
const F_ADD_LABEL = 'Nueva etiqueta';
const F_ADD_GROUP = 'Nuevo grupo';
const F_ADD_USER = 'Nuevo usuario';

const F_SORT_BY = 'Ordenar por:';
const F_SORT_ID = 'ID';
const F_SORT_MOD = 'Última actualización';
const F_SORT_DESC = 'descendente';
const F_SORT_ASC = 'ascendente';
const F_FILTER_STATUSES = 'Filtrar estados:';
const F_FILTER_STATES = 'Filtrar estados:';
const F_FILTER_LABELS = 'Filtrar etiquetas:';
const F_FILTER_USERS = 'Filtrar usuarios:';
const F_FILTER_MILESTONE = 'Filtrar hito:';

const F_WRITE = 'Escritura:';
const F_SUMMARY = 'Resumen';
const F_CONTENT = 'Contenido';

const F_STATUS = 'Estado:';
const F_RELATED = 'Relacionado:';
const F_LABELS2 = 'Etiquetas:';
const F_MILESTONE = 'Hito:';

const F_GENERAL_SETTINGS = 'Configuración general:';
const F_PROJECTS = 'Proyectos:';
const F_DATABASE = 'Base de datos:';
const F_UPLOADS = 'Subidas:';
const F_COLORS = 'Administrar colores:';
const F_DISPLAY = 'Administrar visualización:';
const F_STATUSES = 'Administrar estados:';
const F_LABELS = 'Administrar etiquetas:';
const F_GROUPS = 'Administrar grupos:';
const F_PERMISSIONS = 'Administrar permisos:';
const F_USERS = 'Administrar usuarios:';

const F_INVALID_CAPTCHA = 'El CAPTCHA que ingresó fue incorrecto. Inténtelo nuevamente.';

const F_TIP_NAME = 'Se mostrará en el encabezado de cada página.';
const F_TIP_URL_REWRITING = 'Deje este campo vacío para deshabilitar la reescritura de URL. De lo contrario, debe contener la ruta a la carpeta phpmyBugs (que comienza y termina con un "/"), relativa al nombre de dominio.';
const F_TIP_URL_CDN = 'Deje este campo vacío para deshabilitar el CDN. De lo contrario, debe contener la URL de su CDN (por ejemplo, <em>https://cdn.rawgit.com/bugtrackr/Nireus/master/</em>, puede usar este). Asegúrese de alojar todos los archivos de la carpeta <em>/public</em> en su CDN.';
const F_TIP_INTRO = 'Se mostrará en la página de inicio. Se analizará con la sintaxis Markdown. Nota: si solo hay un proyecto llamado “%name%”, la página de inicio se redirecciona automáticamente al panel del proyecto y este texto no se mostrará.';
const F_TIP_EMAIL = 'Deje este campo vacío para deshabilitar las notificaciones por correo electrónico. De lo contrario, esta dirección se usará como remitente al enviar una notificación por correo electrónico.';
const F_TIP_PASSWORD = 'Déjelo vacío si no desea cambiar la contraseña.';
const F_TIP_USER_EMAIL = 'Solo se requiere si desea recibir notificaciones.';
const F_TIP_NOTIFICATIONS = 'Esta es una configuración predeterminada: podrá cambiarla para cada problema.';
const F_TIP_NOTIFICATIONS_DISABLED = 'Nota: las notificaciones están actualmente deshabilitadas por el administrador.';
const F_TIP_DESCRIPTION = 'Se mostrará en el panel del proyecto. Se analizará con la sintaxis de Markdown.';

const F_TIP_MAX_UPLOAD = 'Cada archivo cargado no puede superar este tamaño.';
const F_TIP_ALLOCATED_SPACE = 'Un usuario no puede cargar otros archivos una vez que alcanza este límite.<br /><em>Atención:</em> si ningún usuario registrado tiene permiso para cargar archivos (esta no es la configuración predeterminada), este límite no se aplica a ellos.';

const F_TIP_ID_STATUS = '<b>Sugerencia:</b> tenga cuidado al cambiar los ID, porque cada problema mantiene su ID de estado anterior (excepto si este ID ya no existe: en este caso, se utilizará el estado predeterminado).';
const F_TIP_ID_LABEL = '<b>Consejo:</b> tenga cuidado al cambiar los ID, porque cada etiqueta de un issue mantiene su ID anterior (excepto si este ID ya no existe: en este caso, la etiqueta se elimina del issue).';
const F_TIP_ID_GROUP = '<b>Consejo:</b> tenga cuidado al cambiar los ID, porque cada usuario mantiene su ID de grupo anterior (excepto si este ID ya no existe: en este caso, se usará el grupo predeterminado).';
const F_TIP_CAPTCHA = 'Elija las acciones en las que se mostrará un captcha para los usuarios que no hayan iniciado sesión.';
const F_TIP_API_ACCESS = 'Configure el acceso a la API en el archivo <em>/database/config_api.php</em>. Para obtener más información, consulte el archivo API.md.';

const F_API_ENABLE = 'Habilite la API';

const HELP_MARKDOWN = '
<h2>MarkdsSintaxis propia:</h2>

<p>Párrafos:</p>
<pre><code class="blank no-highlight">Los párrafos están separados por una o más líneas en blanco.
Por eso, este texto se mostrará en la misma línea que la frase anterior, sin importar el salto de línea.

Para comenzar una nueva línea sin crear un nuevo párrafo:
inserte 2 espacios antes del salto de línea, como aquí.</code></pre>
<p>Énfasis:</p>
<pre><code class="blank no-highlight">*Texto en cursiva*
_Texto en cursiva nuevamente_

**Texto en negrita**
__Texto en negrita nuevamente__ </code></pre>

<p>Enlaces:</p>
<pre><code class="blank no-highlight">Este es [un ejemplo](http://example.com) de enlace en línea.
Esta es otra: &lt;http://example.com&gt;.</code></pre>

<p>Imágenes:</p>
<pre><code class="blank no-highlight">![Soy una imagen.](http://example.com/image.png)</code></pre>

<p>Encabezados:</p>
<pre><code class="blank no-highlight"># Título de nivel superior
## Título de segundo nivel
### Título de tercer nivel
#### Título de cuarto nivel</code></pre>

<p>Listas:</p>
<pre><code class="blank no-highlight">- un elemento
* otro

1. primer elemento
2. segundo elemento</code></pre>

<p>Citas en bloque:</p>
<pre><code class="blank no-highlight">> Soy una cita en bloque con dos párrafos.
>
> Soy el segundo párrafo.</code></pre>

<p>Bloques de código:</p>
<pre><code class="blank no-highlight">Este es un `bloque de código en línea`.</code></pre>
<pre><code class="blank no-highlight"> &lt;?php echo "Soy un bloque de código, porque tengo sangría
de 4 espacios"; ?&gt;</code></pre>
<pre><code class="blank no-highlight">```
&lt;?php echo "Soy un bloque de código."; ?&gt;
```

```php
&lt;?php echo "Los lenguajes admitidos son: bash, cs, ruby, diff, javascript, css, xml, http, java, php, python, sql, ini, perl, json, cpp, markdown, no-highlight"; ?&gt;
``</code></pre>
';

private static $permissions = array(
'home' => array(
'title' => 'Inicio:',
'description' => 'Puede acceder a la página de inicio y ver la lista de todos los problemas abiertos para sus proyectos.'
),
'dashboard' => array(
'title' => 'Paneles:',
'description' => 'Puede acceder a los paneles de proyectos.'
),
'issues' => array(
'title' => 'Ver problemas:',
'description' => 'Puede ver problemas públicos.'
),
'private_issues' => array(
'title' => 'Ver problemas privados:',
'description' => 'Puede ver problemas etiquetados como privados.'
),
'search' => array(
'title' => 'Buscar:',
'description' => 'Puede buscar problemas o usuarios.'
),
'new_issue' => array(
'title' => 'Nuevo issue:',
'description' => 'Puede enviar un nuevo issue.'
),
'edit_issue' => array(
'title' => 'Editar issues:',
'description' => 'Puede editar el texto de todos los issues y eliminarlos.'
),
'update_issue' => array(
'title' => 'Actualizar issues:',
'description' => 'Puede actualizar issues: cambiar el estado, agregar etiquetas, cerrar y volver a abrir, ...'
),
'post_comment' => array(
'title' => 'Publicar un comentario:',
'description' => 'Puede publicar un comentario.'
),
'edit_comment' => array(
'title' => 'Editar comentarios:',
'description' => 'Puede editar todos los comentarios (los usuarios pueden editar sus propios comentarios de todos modos).'
),
'view_user' => array(
'title' => 'Perfiles de usuario:',
'description' => 'Puede ver todos los los perfiles de usuario.'
),
'upload' => array(
'title' => 'Publicar un archivo:',
'description' => 'Puede adjuntar archivos a un comentario o a un nuevo problema.'
),
'view_upload' => array(
'title' => 'Ver archivos subidos:',
'description' => 'Puede acceder a todos los archivos subidos.'
),
'settings' => array(
'title' => 'Cambiar ajustes:',
'description' => 'Puede acceder a esta página y modificar todos los ajustes globales.'
),
'signup' => array(
'title' => 'Registrarse:',
'description' => 'Puede registrarse.'
),
'view_errors' => array(
'title' => 'Ver errores fatales:',
'description' => 'Puede ver la descripción de los errores fatales.'
)
);

public static function permissions($id, $type = 'description') {
return self::$permissions[$id][$type];
}

private static $settings = array(
'validate_url' => 'La URL no es válida.',
'validate_email' => 'El correo electrónico no es válido.',
'private_label_removed' => 'No puede eliminar la etiqueta privada ni cambiar su ID, pero puede cambiarle el nombre.',
'default_status_removed' => 'No puede eliminar el estado predeterminado ni cambiar su ID, pero puede cambiarle el nombre.',
'default_group_removed' => 'No puede eliminar el grupo predeterminado ni cambiar su ID, pero puede cambiarle el nombre.',
'default_group_superuser_removed' => 'No puede eliminar el grupo de superusuarios ni cambiar su ID, pero puede cambiarle el nombre.',
'validate_same_username' => 'Advertencia: dos usuarios tienen el mismo nombre de usuario.',
'validate_same_project_name' => 'Dos proyectos no pueden tener el mismo nombre. Uno ha sido renombrado automáticamente.',
'language_modified' => 'Actualice esta página para verla en el nuevo idioma.'
);

public static function settings($id) {
return self::$settings[$id];
}

private static $errors = array(
E_ERROR => 'Error fatal',
E_WARNING => 'Advertencia',
E_PARSE => 'Error de análisis',
E_NOTICE => 'Aviso',
E_STRICT => 'Consejo',
E_DEPRECATED => 'Obsoleto','predeterminado' => 'Error'
);
public static function errors($no) {
return (isset(self::$errors[$no])) ? self::$errors[$no] : self::$errors['predeterminado'];
}
}

?>