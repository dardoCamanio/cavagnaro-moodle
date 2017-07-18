<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'scheduler', language 'es', branch 'MOODLE_33_STABLE'
 *
 * @package   scheduler
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Acción';
$string['actions'] = 'Acciones';
$string['addappointment'] = 'Añadir otro estudiante';
$string['comments'] = 'Comentarios';
$string['contentformat'] = 'Formato';
$string['course'] = 'Curso';
$string['createexport'] = 'Crear fichero de exportación';
$string['csvfieldseparator'] = 'Separador de campos para CSV';
$string['csvformat'] = 'CSV';
$string['date'] = 'Fecha';
$string['duration'] = 'Duración';
$string['emailreminder'] = 'Recordatorio por email';
$string['everyone'] = 'Todos';
$string['excelformat'] = 'Excel';
$string['exclusive'] = 'Exclusivo';
$string['exclusivity'] = 'Exclusividad';
$string['export'] = 'Exportar';
$string['field-date'] = 'Fecha';
$string['field-grade'] = 'Calificación';
$string['field-location'] = 'Localización';
$string['field-starttime'] = 'Hora de comienzo';
$string['field-studentemail'] = 'Correo del estudiante';
$string['field-studentfirstname'] = 'Nombre del estudiante';
$string['field-studentfullname'] = 'Nombre completo del estudiante';
$string['field-studentidnumber'] = 'ID del estudiante';
$string['field-studentlastname'] = 'Apellidos del estudiante';
$string['field-studentusername'] = 'Usuario del estudiante';
$string['fileformat'] = 'Formato del fichero';
$string['fileformat_help'] = 'Los siguientes formatos están disponibles:
     <ul>
          <li>Comma Separated Value (CSV). El separador de los campos, por defecto una coma, puede ser elegido debajo. Los archivos CSV se pueden abrir con la mayoría de aplicaciones de hoja de cálculo;</li>
          <li>Microsoft Excel (formato Excel 2007);</li>
          <li>Open Document spreadsheets (ODS);</li>
          <li>Formato HTML - una página web mostrando la información en formato de tabla, pudiendo ser impresa desde el navegador;</li>
          <li>PDF. Puedes elegir entre orientación vertical u horizontal del documento.</li>
     </ul>';
$string['finalgrade'] = 'Calificación final';
$string['friday'] = 'Viernes';
$string['generalconfig'] = 'Configuración general';
$string['grade'] = 'Calificación';
$string['gradeingradebook'] = 'Calificación en el calificador';
$string['group'] = 'grupo';
$string['groupbreakdown'] = 'Por tamaño del grupo';
$string['groupsize'] = 'Tamaño del grupo';
$string['htmlformat'] = 'HTML';
$string['introduction'] = 'Introducción';
$string['maxgrade'] = 'Tomar la calificación más alta';
$string['maxstudentlistsize'] = 'Tamaño máximo de la lista de alumnos';
$string['messageprovider:reminder'] = 'Recordatorio de una cita próxima';
$string['messagesent'] = 'Mensaje enviado a {$a} destinatarios';
$string['messagesubject'] = 'Asunto';
$string['minutes'] = 'minutos';
$string['minutesperslot'] = 'minutos por cada hueco';
$string['missingstudents'] = '{$a} alumnos todavía tienen que pedir cita';
$string['missingstudentsmany'] = '{$a} alumnos todavía tienen que pedir cita. No se muestra una lista debido al tamaño.';
$string['mode'] = 'Modo';
$string['modeappointments'] = 'cita(s)';
$string['modeintro'] = 'Los alumnos se pueden registrar';
$string['modeoneatatime'] = 'a la vez';
$string['modeoneonly'] = 'en este programador';
$string['modulename'] = 'Programador';
$string['modulename_help'] = 'El programador de actividades te ayuda a programar citas con tus alumnos.

Los profesores indican los huecos de tiempo para reuniones y después los alumnos eligen uno de los huecos en Moodle.
Los profesores a su vez pueden guardar el resultado de la reunión (y de forma opcional, una calificación) en el programador.

La programación grupal está disponible, es decir, cada hueco de tiempo puede tener sitio para varios estudiantes, y de manera opcional es posible programar citas para grupos enteros al mismo tiempo.';
$string['modulenameplural'] = 'Programadores';
$string['monday'] = 'Lunes';
$string['multiple'] = '(múltiple)';
$string['myappointments'] = 'Mis citas';
$string['myself'] = 'Yo';
$string['name'] = 'Nombre del programador';
$string['needteachers'] = 'No se pueden añadir huecos porque este curso no tiene profesores';
$string['negativerange'] = 'El rango es negativo. Esto no es posible.';
$string['never'] = 'Nunca';
$string['noappointments'] = 'Sin citas';
$string['noexistingstudents'] = 'No hay estudiantes disponibles para programar';
$string['nogroups'] = 'No hay grupos disponibles para programar.';
$string['noresults'] = 'Sin resultados.';
$string['noschedulers'] = 'No hay programadores';
$string['noslots'] = 'No hay huecos de cita disponibles.';
$string['noslotsavailable'] = 'No hay huecos disponibles para reservar en este momento.';
$string['noslotsopennow'] = 'No hay huecos abiertos para reservar ahora.';
$string['nostudents'] = 'Ningún estudiante para programar';
$string['nostudenttobook'] = 'Ningún estudiante para reservar';
$string['note'] = 'Calificación';
$string['noteacherforslot'] = 'Ningún profesor para los huecos';
$string['noteachershere'] = 'Ningún profesor disponible';
$string['notenoughplaces'] = 'Lo siento, no hay suficientes citas libres en este hueco.';
$string['notifications'] = 'Notificaciones';
$string['notifications_help'] = 'Cuando esta opción está activada los profesores y los alumnos recibirán notificaciones cuando se soliciten o se cancelen citas.';
$string['notseen'] = 'No visto';
$string['now'] = 'Ahora';
$string['occurrences'] = 'Apariciones';
$string['odsformat'] = 'ODS';
$string['on'] = 'en';
$string['onedaybefore'] = 'Un día antes del hueco';
$string['onelineperappointment'] = 'Una línea por cita';
$string['onelineperslot'] = 'Una línea por hueco';
$string['oneslotadded'] = 'Añadido un hueco';
$string['oneslotdeleted'] = 'Borrado un hueco';
$string['oneweekbefore'] = 'Una semana antes del hueco';
$string['onthemorningofappointment'] = 'En la mañana del día de la cita';
$string['options'] = 'Opciones';
$string['otherstudents'] = 'Otros participantes';
$string['outlineappointments'] = '{$a->attended} citas atendidas, {$a->upcoming} citas próximas.';
$string['outlinegrade'] = 'Calificación: {$a}.';
$string['overall'] = 'En general';
$string['overlappings'] = 'Algunos huecos se están solapando';
$string['pageperteacher'] = 'Una página para cada {$a}';
$string['pagination'] = 'Paginación';
$string['pagination_help'] = 'Elige si el fichero exportado debería contener una página separada para cada profesor.
En ficheros con formato Excel y ODS, estas páginas se corresponden a las pestañas (hojas de trabajo) en el libro de trabajo.';
$string['pdfformat'] = 'PDF';
$string['pdforientation'] = 'Orientación de la página PDF';
$string['pluginadministration'] = 'Administración del programador';
$string['pluginname'] = 'Programador';
$string['portrait'] = 'Retrato';
$string['preview'] = 'Vista preliminar';
$string['previewlimited'] = '(La vista preliminar está limitada a {$a} filas.)';
$string['purgeunusedslots'] = 'Limpiar los huecos no utilizados en el pasado';
$string['recipients'] = 'Destinatarios';
$string['registeredlbl'] = 'Alumno citado';
$string['reminder'] = 'Recordatorio';
$string['resetappointments'] = 'Borrar citas y calificaciones';
$string['resetslots'] = 'Borrar huecos del programador';
$string['return'] = 'Volver al curso';
$string['revoke'] = 'Cancelar la cita';
$string['saturday'] = 'Sábado';
$string['save'] = 'Guardar';
$string['savechoice'] = 'Guardar mi elección';
$string['schedule'] = 'Programar';
$string['scheduleappointment'] = 'Programar cita para {$a}';
$string['schedulecancelled'] = '{$a} : Tu cita ha sido cancelada o cambiada';
$string['schedulegroups'] = 'Programar por grupo';
$string['scheduleinnew'] = 'Programar en un hueco nuevo';
$string['scheduleinslot'] = 'Programar en hueco';
$string['scheduler'] = 'Programador';
$string['scheduler:addinstance'] = 'Añadir un nuevo programador';
$string['scheduler:appoint'] = 'Buscar huecos';
$string['scheduler:attend'] = 'Asistir a los alumnos';
$string['scheduler:canscheduletootherteachers'] = 'Programar citas para otros miembros del personal';
$string['scheduler:canseeotherteachersbooking'] = 'Ver y consultar las reservas de otros profesores';
$string['scheduler:disengage'] = 'Esta competencia está obsoleta y no hace nada';
$string['scheduler:manage'] = 'Gestionar tus huecos y citas';
$string['scheduler:manageallappointments'] = 'Gestionar todos los datos del programador';
$string['scheduler:seeotherstudentsbooking'] = 'Ver otros alumnos con reserva en el hueco';
$string['sepcolon'] = 'Dos puntos';
$string['sepcomma'] = 'Coma';
$string['sepsemicolon'] = 'Punto y coma';
$string['septab'] = 'Pestaña';
$string['showparticipants'] = 'Mostrar participantes';
$string['staffbreakdown'] = 'Por {$a}';
$string['start'] = 'Comenzar';
$string['statistics'] = 'Estadísticas';
$string['student'] = 'Estudiante';
$string['students'] = 'Estudiantes';
$string['sunday'] = 'Domingo';
$string['teacher'] = 'Profesor';
$string['thiscourse'] = 'este curso';
$string['thursday'] = 'Jueves';
$string['totalgrade'] = 'Calificación total';
$string['tuesday'] = 'Martes';
$string['wednesday'] = 'Miércoles';
$string['what'] = '¿Qué?';
$string['whathappened'] = '¿Qué ocurrió?';
$string['whatresulted'] = '¿Qué resultó?';
$string['when'] = '¿Cuándo?';
$string['where'] = '¿Dónde?';
$string['who'] = '¿Con quien?';
$string['whosthere'] = '¿Quién está?';
$string['yesallgroups'] = 'Sí, para todos los grupos';
$string['yourappointmentnote'] = 'Comentarios personales';
$string['yourslotnotes'] = 'Comentarios sobre la reunion';
