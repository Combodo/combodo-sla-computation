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
Dict::Add('FR FR', 'French', 'Français', [
	'Class:CoverageWindow' => 'Heures Ouvrées',
	'Class:CoverageWindow+' => '',
	'Class:CoverageWindow/Attribute:description' => 'Description',
	'Class:CoverageWindow/Attribute:description+' => '',
	'Class:CoverageWindow/Attribute:friendlyname' => 'Nom sympathique',
	'Class:CoverageWindow/Attribute:friendlyname+' => '',
	'Class:CoverageWindow/Attribute:interval_list' => 'Heures Ouvrées',
	'Class:CoverageWindow/Attribute:name' => 'Nom',
	'Class:CoverageWindow/Attribute:name+' => '',
	'Class:CoverageWindowInterval' => 'Intervalle d\'heures ouvrées',
	'Class:CoverageWindowInterval/Attribute:coverage_window_id' => 'Heures Ouvrées',
	'Class:CoverageWindowInterval/Attribute:coverage_window_name' => 'Nom de la fenêtre de couverture',
	'Class:CoverageWindowInterval/Attribute:coverage_window_name+' => '',
	'Class:CoverageWindowInterval/Attribute:end_time' => 'Heure de fin',
	'Class:CoverageWindowInterval/Attribute:start_time' => 'Heure de début',
	'Class:CoverageWindowInterval/Attribute:weekday' => 'Jour de la semaine',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:friday' => 'Vendredi',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:monday' => 'Lundi',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:saturday' => 'Samedi',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:sunday' => 'Dimanche',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:thursday' => 'Jeudi',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:tuesday' => 'Mardi',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:wednesday' => 'Mercredi',
	'Class:Holiday' => 'Jour Férié',
	'Class:Holiday+' => 'Un jour non travaillé',
	'Class:Holiday/Attribute:calendar_id' => 'Calendrier',
	'Class:Holiday/Attribute:calendar_id+' => 'Le calendrier (optional) auquel est rattaché ce jour férié',
	'Class:Holiday/Attribute:calendar_name' => 'Nom du calendrier',
	'Class:Holiday/Attribute:calendar_name+' => '',
	'Class:Holiday/Attribute:date' => 'Date',
	'Class:Holiday/Attribute:name' => 'Nom',
	'Class:HolidayCalendar' => 'Calendrier des Jours Fériés',
	'Class:HolidayCalendar+' => 'Un groupe de jours fériés',
	'Class:HolidayCalendar/Attribute:holiday_list' => 'Jours Fériés',
	'Class:HolidayCalendar/Attribute:name' => 'Nom',
	'Coverage:Description' => 'Description',
	'Coverage:EndTime' => 'Heures de fin',
	'Coverage:StartTime' => 'Heures de début',
	'CoverageWindow:Error:MissingIntervalList' => 'Les Heures Ouvrées doivent être spécifiées',
	'Menu:CoverageWindows' => 'Heures Ouvrées',
	'Menu:CoverageWindows+' => 'Toutes les Heures Ouvrées',
	'Menu:HolidayCalendars' => 'Calendriers des Jours Fériés',
	'Menu:HolidayCalendars+' => 'Tous les Calendriers des Jours Fériés',
	'Menu:Holidays' => 'Jours Fériés',
	'Menu:Holidays+' => 'Tous les Jours Fériés',
	'WorkingHoursInterval:DlgTitle' => 'Edition de l\'intervalle',
	'WorkingHoursInterval:EndTime' => 'Heure de fin:',
	'WorkingHoursInterval:RemoveIntervalButton' => 'Supprimer l\'intervalle',
	'WorkingHoursInterval:StartTime' => 'Heure de début:',
	'WorkingHoursInterval:WholeDay' => 'Journée complète:',
]);
