<?php

$lang = array(

/* General word list */
'and' => 'y',

'and_n_others' => 'y %d otros...',

'at' => 'en',

'auto_redirection' => 'Serás redireccionado automáticamente en %x segundos',

'back' => 'Volver',

'by' => 'por',

'click_if_no_redirect' => 'Presiona aquí si no has sido redireccionado automáticamente',

'disabled' => 'deshabilitado',

'dot' => 'punto',

'enabled' => 'habilitado',

'encoded_email' => '(Debe estar habilitado JavaScript para ver esta dirección de correo)',

'first' => 'Primero',

'id' => 'ID',

'last' => 'Último',

'next' => 'Siguiente',

'no' => 'No',

'not_authorized' => 'No estás autorizado para realizar esta acción',

'not_available' => 'No disponible',

'of' => 'de',

'off' => 'Apagado',

'on' => 'Encendido',

'or' => 'o',

'pag_first_link' => '&lsaquo; Primero',

'pag_last_link' => 'Último &rsaquo;',

'page' => 'Página',

'preference' => 'Preferencia',

'prev' => 'Anterior',

'return_to_previous' => 'Regresar a la Página Anterior',

'search' => 'Buscar',

'setting' => 'Ajuste',

'site_homepage' => 'Inicio del Sitio',

'submit' => 'Enviar',

'system_off_msg' => 'Este sitio se encuentra inactivo.',

'thank_you' => '¡Gracias!',

'update' => 'Actualizar',

'updating' => 'Actualizando',

'yes' => 'Si',


/* Errors */
'captcha_incorrect' => 'No ha enviado la palabra exáctamente como aparece en la imágen',

'captcha_required' => 'Debes enviar la palabra que aparece en la imagen',


'checksum_changed_accept' => 'Aceptar cambios',

'checksum_changed_warning' => 'Uno o más archivos core han sido alterados:',

'checksum_email_message' => 'ExpressionEngine ha detectado la modificación de un archivo core en: {url}

Los siguientes archivos están afectados:
{changed}

Si realizaste estos cambios, acepta las modificaciones en la página de inicio del panel de control. Si no modificaste estos archivos, puedes indicar un intento de piratería. Compruebe los archivos en busca de cualquier contenido sospechoso (JavaScript o iFrames) y ponte en contacto con el soporte de ExpressionEngine:
https://expressionengine.com/support ',

'checksum_email_subject' => 'Se modificó un archivo core en tu sitio.',

'csrf_token_expired' => 'Este formulario ha expirado. Por favor, actualiza y prueba de nuevo.',

'current_password_incorrect' => 'Tu contraseña actual no se envió correctamente.',

'current_password_required' => 'Se requiere tu contraseña actual.',

'curl_not_installed' => 'cURL no está instalado en tu servidor',

'error' => 'Error',

'file_not_found' => 'El archivo %s no existe.',

'general_error' => 'Se encontraron los siguientes errores',

'generic_fatal_error' => 'Algo ha salido mal y esta URL no se puede procesar en este momento.',

'invalid_action' => 'La acción que ha solicitado no es válida.',

'invalid_url' => 'La URL que ha enviado no es válida.',

'license_disabled' => 'Your software license has been disabled or upgraded. Please visit your <a href="%s">License & Registration</a> page and install the active license from your <a href="%s" title="download account" rel="external">Download Account</a>. If this error persists, please contact your system administrator.',

'missing_encryption_key' => 'You do not have value set for <code>%s</code> in your config.php. This may leave your install open to security vulnerabilities. Restore the keys or <a href="%s">contact support</a> for help.',

'missing_mime_config' => 'Cannot import your mime-type whitelist: the file %s does not exist or cannot be read.',

'new_version_error' => 'An unexpected error occurred attempting to download the current ExpressionEngine version number. Please visit your <a href="%s" title="download account" rel="external">Download Account</a> to verify you are on the current version. If this error persists, please contact your system administrator',

'nonexistent_page' => 'No es posible encontrar la página solicitada',

'redirect_xss_fail' => 'The link you are being redirected to contained some potentially malicious or dangerous code. We recommend you hit the back button and email %s to report the link that generated this message.',

'submission_error' => 'El formulario enviado contenía los siguientes errores',

'theme_folder_wrong' => 'Your theme folder path is incorrect. Please go to <a href="%s">URL and Path Settings</a> and check the <mark>Themes Path</mark> and <mark>Themes URL</mark>.',

'unable_to_load_field_type' => 'Unable to load requested field type file: %s.<br /> Confirm the fieldtype file is located in the /system/user/addons/ directory',

'unwritable_cache_folder' => 'Your cache folder does not have proper permissions.<br />To fix: Set the cache folder (/system/user/cache/) permissions to 777 (or equivalent for your server).',

'unwritable_config_file' => 'Your configuration file does not have the proper permissions.<br />To fix: Set the config file (/system/user/config/config.php) permissions to 666 (or equivalent for your server).',

'version_mismatch' => 'Your ExpressionEngine installation&rsquo;s version (%s) is not consistent with the reported version (%s). <a href="'.DOC_URL.'installation/update.html" rel="external">Please update your installation of ExpressionEngine again</a>.',


/* Member Groups */
'banned' => 'Prohibido',

'guests' => 'Invitados',

'members' => 'Miembros',

'pending' => 'Pendiente',

'super_admins' => 'Super Administrador',


/* Template.php */
'error_fix_module_processing' => 'Compruebe que el módulo \'%x\' está instalado y que \'%y\' es un método disponible del módulo',

'error_fix_syntax' => 'Corrija la sintaxis en su plantilla.',

'error_invalid_conditional' => 'Tiene un condicional inválido en su plantilla. Revise sus condicionales para una cadena no cerrada, operadores no válidos, una falta}, o una falta {/if}.',

'error_layout_too_late' => 'Plugin o etiqueta de módulo encontrada antes de la declaración de disposición. Mueva la etiqueta de diseño a la parte superior de su plantilla. ',

'error_multiple_layouts' => 'Se encontraron múltiples diseños, asegúrese de tener solo una etiqueta de diseño por plantilla',

'error_tag_module_processing' => 'La siguiente etiqueta no se puede procesar:',

'error_tag_syntax' => 'La siguiente etiqueta tiene un error de sintaxis:',

'layout_contents_reserved' => 'El nombre "contents" está reservado para los datos de la plantilla y no puede utilizarse como una variable de diseño (es decir, {layout: set name = "contents"} o {layout = "foo / bar" contents = "" }). ',

'template_load_order' => 'Orden de carga de la plantilla',

'template_loop' => 'Ha causado un bucle de plantilla debido a sub-plantillas anidadas incorrectamente (\'%s\' recursivamente llamado)',


/* Email */
'error_sending_email' => 'No se puede enviar el correo electrónico en este momento.',

'forgotten_email_sent' => 'Si esta dirección de correo electrónico está asociada a una cuenta, las instrucciones para restablecer su contraseña acaban de ser enviadas por correo electrónico.',

'no_email_found' => 'La dirección de correo electrónico que envió no se encontró en la base de datos.',

'password_has_been_reset' => 'Tu contraseña ha sido restablecida y le hemos enviado una nueva por correo electrónico.',

'password_reset_flood_lock' => 'Has intentado restablecer su contraseña demasiadas veces hoy. Verifica las carpetas de entrada y correo no deseado para las solicitudes anteriores, o ponte en contacto con el administrador del sitio. ',


/* Timezone */
'invalid_date_format' => 'El formato de fecha que ha enviado no es válido.',

'invalid_timezone' => 'La zona horaria que enviaste no es válida.',

'no_timezones' => 'Sin zonas horarias',

'select_timezone' => 'Seleccionar zona horaria',


/* Date */
'singular' => 'uno',

'less_than' => 'menos que',

'about' => 'acerca de',

'past' => '%s atrás',

'future' => 'en %s',

'ago' => '%x atrás',

'year' => 'año',

'years' => 'años',

'month' => 'mes',

'months' => 'meses',

'fortnight' => 'quincena',

'fortnights' => 'quincenas',

'week' => 'semana',

'weeks' => 'semanas',

'day' => 'dia',

'days' => 'dias',

'hour' => 'hora',

'hours' => 'horas',

'minute' => 'minuto',

'minutes' => 'minutos',

'second' => 'segundo',

'seconds' => 'segundos',

'am' => 'am',

'pm' => 'pm',

'AM' => 'AM',

'PM' => 'PM',

'Sun' => 'Dom',

'Mon' => 'Lun',

'Tue' => 'Mar',

'Wed' => 'Mie',

'Thu' => 'Jue',

'Fri' => 'Vie',

'Sat' => 'Sab',

'Su' => 'S',

'Mo' => 'L',

'Tu' => 'M',

'We' => 'M',

'Th' => 'J',

'Fr' => 'V',

'Sa' => 'S',

'Sunday' => 'Domingo',

'Monday' => 'Lunes',

'Tuesday' => 'Martes',

'Wednesday' => 'Miércoles',

'Thursday' => 'Jueves',

'Friday' => 'Viernes',

'Saturday' => 'Sábado',

'Jan' => 'Ene',

'Feb' => 'Feb',

'Mar' => 'Mar',

'Apr' => 'Abr',

'May' => 'May',

'Jun' => 'Jun',

'Jul' => 'Jul',

'Aug' => 'Ago',

'Sep' => 'Sep',

'Oct' => 'Oct',

'Nov' => 'Nov',

'Dec' => 'Dic',

'January' => 'Enero',

'February' => 'Febrero',

'March' => 'Marzo',

'April' => 'Abril',

'May_l' => 'Mayo',

'June' => 'Junio',

'July' => 'Julio',

'August' => 'Agosto',

'September' => 'Septiembre',

'October' => 'Octubre',

'November' => 'Noviembre',

'December' => 'Diciembre',

/* - - - - - - - - - - - - - - - No necesita traducción */

'UM12' => '(UTC -12:00) Baker/Howland Island',

'UM11' => '(UTC -11:00) Niue',

'UM10' => '(UTC -10:00) Hawaii-Aleutian Standard Time, Cook Islands, Tahiti',

'UM95' => '(UTC -9:30) Marquesas Islands',

'UM9' => '(UTC -9:00) Alaska Standard Time, Gambier Islands',

'UM8' => '(UTC -8:00) Pacific Standard Time, Clipperton Island',

'UM7' => '(UTC -7:00) Mountain Standard Time',

'UM6' => '(UTC -6:00) Central Standard Time',

'UM5' => '(UTC -5:00) Eastern Standard Time, Western Caribbean Standard Time',

'UM45' => '(UTC -4:30) Venezuelan Standard Time',

'UM4' => '(UTC -4:00) Atlantic Standard Time, Eastern Caribbean Standard Time',

'UM35' => '(UTC -3:30) Newfoundland Standard Time',

'UM3' => '(UTC -3:00) Argentina, Brazil, French Guiana, Uruguay',

'UM2' => '(UTC -2:00) South Georgia/South Sandwich Islands',

'UM1' => '(UTC -1:00) Azores, Cape Verde Islands',

'UTC' => '(UTC) Greenwich Mean Time, Western European Time',

'UP1' => '(UTC +1:00) Central European Time, West Africa Time',

'UP2' => '(UTC +2:00) Central Africa Time, Eastern European Time, Kaliningrad Time',

'UP3' => '(UTC +3:00) East Africa Time, Arabia Standard Time',

'UP35' => '(UTC +3:30) Iran Standard Time',

'UP4' => '(UTC +4:00) Moscow Time, Azerbaijan Standard Time',

'UP45' => '(UTC +4:30) Afghanistan',

'UP5' => '(UTC +5:00) Pakistan Standard Time, Yekaterinburg Time',

'UP55' => '(UTC +5:30) Indian Standard Time, Sri Lanka Time',

'UP575' => '(UTC +5:45) Nepal Time',

'UP6' => '(UTC +6:00) Bangladesh Standard Time, Bhutan Time, Omsk Time',

'UP65' => '(UTC +6:30) Cocos Islands, Myanmar',

'UP7' => '(UTC +7:00) Krasnoyarsk Time, Cambodia, Laos, Thailand, Vietnam',

'UP8' => '(UTC +8:00) Australian Western Standard Time, Beijing Time, Irkutsk Time',

'UP875' => '(UTC +8:45) Australian Central Western Standard Time',

'UP9' => '(UTC +9:00) Japan Standard Time, Korea Standard Time, Yakutsk Time',

'UP95' => '(UTC +9:30) Australian Central Standard Time',

'UP10' => '(UTC +10:00) Australian Eastern Standard Time, Vladivostok Time',

'UP105' => '(UTC +10:30) Lord Howe Island',

'UP11' => '(UTC +11:00) Magadan Time, Solomon Islands, Vanuatu',

'UP115' => '(UTC +11:30) Norfolk Island',

'UP12' => '(UTC +12:00) Fiji, Gilbert Islands, Kamchatka Time, New Zealand Standard Time',

'UP1275' => '(UTC +12:45) Chatham Islands Standard Time',

'UP13' => '(UTC +13:00) Samoa Time Zone, Phoenix Islands Time, Tonga',

'UP14' => '(UTC +14:00) Line Islands',

);

// EOF
