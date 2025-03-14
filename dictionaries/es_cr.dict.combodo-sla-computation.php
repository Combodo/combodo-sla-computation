<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2024 Combodo SAS
 * @license    https://opensource.org/licenses/AGPL-3.0
 * 
 */
/**
 * @author Erwan Taloc <erwan.taloc@combodo.com>
 * @author Romain Quetiez <romain.quetiez@combodo.com>
 * @author Denis Flaven <denis.flaven@combodo.com>
 *
 */
Dict::Add('ES CR', 'Spanish', 'Español, Castellano', [
	'Class:CoverageWindow' => 'Ventana de Cobertura',
	'Class:CoverageWindow+' => '',
	'Class:CoverageWindow/Attribute:description' => 'Descripción',
	'Class:CoverageWindow/Attribute:description+' => '',
	'Class:CoverageWindow/Attribute:friendlyname' => 'Nombre Común',
	'Class:CoverageWindow/Attribute:friendlyname+' => '',
	'Class:CoverageWindow/Attribute:interval_list' => 'Horas abiertas',
	'Class:CoverageWindow/Attribute:name' => 'Nombre',
	'Class:CoverageWindow/Attribute:name+' => '',
	'Class:CoverageWindowInterval' => 'Intervalo de Horas Abiertas',
	'Class:CoverageWindowInterval/Attribute:coverage_window_id' => 'Ventana de Cobertura',
	'Class:CoverageWindowInterval/Attribute:coverage_window_name' => 'Coverage window name~~',
	'Class:CoverageWindowInterval/Attribute:coverage_window_name+' => '~~',
	'Class:CoverageWindowInterval/Attribute:end_time' => 'Tiempo Final',
	'Class:CoverageWindowInterval/Attribute:start_time' => 'Tiempo Inicio',
	'Class:CoverageWindowInterval/Attribute:weekday' => 'Días de la Semana',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:friday' => 'Viernes',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:monday' => 'Lunes',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:saturday' => 'Sábado',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:sunday' => 'Domingo',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:thursday' => 'Jueves',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:tuesday' => 'Martes',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:wednesday' => 'Miércoles',
	'Class:Holiday' => 'Festivo',
	'Class:Holiday+' => 'Día no laborable',
	'Class:Holiday/Attribute:calendar_id' => 'Calendario',
	'Class:Holiday/Attribute:calendar_id+' => 'El calendario al cual el día festivo está relacionado (si hay alguno)',
	'Class:Holiday/Attribute:calendar_name' => 'Calendar name~~',
	'Class:Holiday/Attribute:calendar_name+' => '~~',
	'Class:Holiday/Attribute:date' => 'Fecha',
	'Class:Holiday/Attribute:name' => 'Nombre',
	'Class:HolidayCalendar' => 'Calendario de Festivos',
	'Class:HolidayCalendar+' => 'Un grupo de festividades a los que otros objetos pueden estar relacionados',
	'Class:HolidayCalendar/Attribute:holiday_list' => 'Festivos',
	'Class:HolidayCalendar/Attribute:name' => 'Nombre',
	'Coverage:Description' => 'Descripción',
	'Coverage:EndTime' => 'Tiempo Final',
	'Coverage:StartTime' => 'Tiempo Inicio',
	'CoverageWindow:Error:MissingIntervalList' => 'Open Hours have to be specified~~',
	'Menu:CoverageWindows' => 'Ventana de Cobertura',
	'Menu:CoverageWindows+' => 'Todas las Ventanas de Cobertura',
	'Menu:HolidayCalendars' => 'Calendario de Festivos',
	'Menu:HolidayCalendars+' => 'Todos los Calendarios de Festivos',
	'Menu:Holidays' => 'Festivos',
	'Menu:Holidays+' => 'Todos los Festivos',
	'WorkingHoursInterval:DlgTitle' => 'Edición de intervalo de horas abiertas',
	'WorkingHoursInterval:EndTime' => 'Tiempo Final:',
	'WorkingHoursInterval:RemoveIntervalButton' => 'Remover Intervalo',
	'WorkingHoursInterval:StartTime' => 'Tiempo Inicio:',
	'WorkingHoursInterval:WholeDay' => 'Todo el Día:',
]);
