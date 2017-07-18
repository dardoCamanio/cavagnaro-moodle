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
 * Strings for component 'report_customsql', language 'es', branch 'MOODLE_20_STABLE'
 *
 * @package   report_customsql
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addreport'] = 'Añadir una nueva consulta';
$string['anyonewhocanveiwthisreport'] = 'Cualquiera que pueda ver este informe (report/customsql__view)';
$string['archivedversions'] = 'Versiones archivadas de esta consulta';
$string['automaticallymonthly'] = 'Programada, el primer día del mes';
$string['automaticallyweekly'] = 'Programada, el primer día de la semana';
$string['availablereports'] = 'Consultas a petición';
$string['availableto'] = 'Disponible para {$a}.';
$string['backtoreportlist'] = 'Volver a la lista de consultas';
$string['changetheparameters'] = 'Cambiar los parámetros';
$string['deleteareyousure'] = '¿Está seguro de que desea eliminar esta consulta?';
$string['deletethisreport'] = 'Eliminar esta consulta';
$string['description'] = 'Descripción';
$string['displayname'] = 'Nombre de la consulta';
$string['displaynamerequired'] = 'Debe introducir un nombre para la consulta';
$string['displaynamex'] = 'Nombre de la consulta: {$a}';
$string['downloadthisreportascsv'] = 'Descargar estos resultados en formato CSV';
$string['editingareport'] = 'Edición de una consulta ad hoc de la base de datos';
$string['editthisreport'] = 'Editar esta consulta';
$string['enterparameters'] = 'Introducir los parámetros de la consulta ad hoc de la base de datos';
$string['errordeletingreport'] = 'Error al eliminar una consulta.';
$string['errorinsertingreport'] = 'Error al introducir una consulta.';
$string['errorupdatingreport'] = 'Error al actualizar una consulta.';
$string['invalidreportid'] = 'ID {$a} de la consulta no válido.';
$string['lastexecuted'] = 'Esta consulta se ejecutó por última vez el {$a->lastrun}. Se ejecutó en {$a->lastexecutiontime} s.';
$string['morethanonerowreturned'] = 'Se ha devuelto más de una fila. Esta consulta debería devolver una fila.';
$string['nodatareturned'] = 'Esta consulta no ha devuelto ningún dato.';
$string['noreportsavailable'] = 'No hay ninguna consulta disponible';
$string['norowsreturned'] = 'No se ha devuelto ninguna fila. Esta consulta debería devolver una fila.';
$string['nosemicolon'] = 'En SQL no se permite utilizar el carácter ;';
$string['note'] = 'Notas';
$string['notrunyet'] = 'Todavía no se ha ejecutado esta consulta.';
$string['onerow'] = 'La consulta ha devuelto una fila, acumular los resultados de una fila cada vez.';
$string['parametervalue'] = '{$a->name}: {$a->value}';
$string['pluginname'] = 'Consultas ad hoc de la base de datos';
$string['queryfailed'] = 'Error al ejecutar la consulta: {$a}';
$string['queryparameters'] = 'Parámetros de consulta';
$string['queryparams'] = 'Introduzca los valores predeterminados para los parámetros de consulta.';
$string['queryparamschanged'] = 'Han cambiado los marcadores de posición de la consulta.';
$string['queryrundate'] = 'fecha de ejecución de la consulta';
$string['querysql'] = 'Consulta de SQL';
$string['querysqlrequried'] = 'Deberá introducir alguna SQL.';
$string['recordlimitreached'] = 'Esta consulta ha alcanzado el límite de {$a} filas. Puede que se hayan omitido algunas filas del final.';
$string['reportfor'] = 'Consulta ejecutada el {$a}';
$string['runable'] = 'Ejecutar';
$string['runablex'] = 'Ejecutar: {$a}';
$string['schedulednote'] = 'Estas consultas se ejecutan automáticamente el primer día del mes o la semana para informar sobre el mes o la semana anterior. Estos enlaces le permiten ver los resultados acumulados hasta el momento.';
$string['scheduledqueries'] = 'Consultas programadas';
$string['typeofresult'] = 'Tipo de resultado';
$string['unknowndownloadfile'] = 'Archivo de descarga desconocido.';
$string['userswhocanconfig'] = 'Solo administradores (moodle/site:config)';
$string['userswhocanviewsitereports'] = 'Usuarios que pueden ver los informes del sistema (moodle/site:viewreports)';
$string['whocanaccess'] = 'Quién puede acceder a esta consulta';
