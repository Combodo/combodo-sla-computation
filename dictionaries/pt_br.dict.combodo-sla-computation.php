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
Dict::Add('PT BR', 'Brazilian', 'Brazilian', [
	'Class:CoverageWindow' => 'Janela de Cobertura',
	'Class:CoverageWindow+' => '',
	'Class:CoverageWindow/Attribute:description' => 'Descrição',
	'Class:CoverageWindow/Attribute:description+' => '',
	'Class:CoverageWindow/Attribute:friendlyname' => 'Nome usual',
	'Class:CoverageWindow/Attribute:friendlyname+' => '',
	'Class:CoverageWindow/Attribute:interval_list' => 'Horário de funcionamento',
	'Class:CoverageWindow/Attribute:name' => 'Nome',
	'Class:CoverageWindow/Attribute:name+' => '',
	'Class:CoverageWindowInterval' => 'Intervalo horário de funcionamento',
	'Class:CoverageWindowInterval/Attribute:coverage_window_id' => 'Janela de cobertura',
	'Class:CoverageWindowInterval/Attribute:coverage_window_name' => 'Coverage window name~~',
	'Class:CoverageWindowInterval/Attribute:coverage_window_name+' => '~~',
	'Class:CoverageWindowInterval/Attribute:end_time' => 'Hora de término',
	'Class:CoverageWindowInterval/Attribute:start_time' => 'Hora de início',
	'Class:CoverageWindowInterval/Attribute:weekday' => 'Dias da semana',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:friday' => 'Sexta',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:monday' => 'Segunda',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:saturday' => 'Sábado',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:sunday' => 'Domingo',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:thursday' => 'Quinta',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:tuesday' => 'Terça',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:wednesday' => 'Quarta',
	'Class:Holiday' => 'Feriado',
	'Class:Holiday+' => 'Um dia não útil',
	'Class:Holiday/Attribute:calendar_id' => 'Calendário',
	'Class:Holiday/Attribute:calendar_id+' => 'O calendário ao qual este feriado está relacionado (se houver)',
	'Class:Holiday/Attribute:calendar_name' => 'Calendar name~~',
	'Class:Holiday/Attribute:calendar_name+' => '~~',
	'Class:Holiday/Attribute:date' => 'Data',
	'Class:Holiday/Attribute:name' => 'Nome',
	'Class:HolidayCalendar' => 'Calendário de feriado',
	'Class:HolidayCalendar+' => 'Um grupo de feriados aos quais outros objetos podem se relacionar',
	'Class:HolidayCalendar/Attribute:holiday_list' => 'Feriados',
	'Class:HolidayCalendar/Attribute:name' => 'Nome',
	'Coverage:Description' => 'Descrição',
	'Coverage:EndTime' => 'Hora de término',
	'Coverage:StartTime' => 'Hora de início',
	'CoverageWindow:Error:MissingIntervalList' => 'Open Hours have to be specified~~',
	'Menu:CoverageWindows' => 'Janelas de Cobertura',
	'Menu:CoverageWindows+' => 'Todas as janelas de cobertura',
	'Menu:HolidayCalendars' => 'Calendário de feriados',
	'Menu:HolidayCalendars+' => 'Todos os calendários de feriados',
	'Menu:Holidays' => 'Feriados',
	'Menu:Holidays+' => 'Todos feriados',
	'WorkingHoursInterval:DlgTitle' => 'Edição de intervalo de horário de funcionamento',
	'WorkingHoursInterval:EndTime' => 'Hora de término:',
	'WorkingHoursInterval:RemoveIntervalButton' => 'Remover intervalo',
	'WorkingHoursInterval:StartTime' => 'Hora de início:',
	'WorkingHoursInterval:WholeDay' => 'Dia inteiro:',
]);
