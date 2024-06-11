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
Dict::Add('DE DE', 'German', 'Deutsch', [
	'Class:CoverageWindow' => 'Zeitfenster',
	'Class:CoverageWindow+' => '',
	'Class:CoverageWindow/Attribute:description' => 'Beschreibung',
	'Class:CoverageWindow/Attribute:description+' => '',
	'Class:CoverageWindow/Attribute:friendlyname' => 'Bezeichnung',
	'Class:CoverageWindow/Attribute:friendlyname+' => '',
	'Class:CoverageWindow/Attribute:interval_list' => 'Servicezeiten',
	'Class:CoverageWindow/Attribute:name' => 'Name',
	'Class:CoverageWindow/Attribute:name+' => '',
	'Class:CoverageWindowInterval' => 'Servicezeitinterval',
	'Class:CoverageWindowInterval/Attribute:coverage_window_id' => 'Zeitfenster',
	'Class:CoverageWindowInterval/Attribute:coverage_window_name' => 'Zeitfenstername',
	'Class:CoverageWindowInterval/Attribute:coverage_window_name+' => '',
	'Class:CoverageWindowInterval/Attribute:end_time' => 'Endzeit',
	'Class:CoverageWindowInterval/Attribute:start_time' => 'Startzeit',
	'Class:CoverageWindowInterval/Attribute:weekday' => 'Wochentag',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:friday' => 'Freitag',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:monday' => 'Montag',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:saturday' => 'Samstag',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:sunday' => 'Sonntag',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:thursday' => 'Donnerstag',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:tuesday' => 'Dienstag',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:wednesday' => 'Mittwoch',
	'Class:Holiday' => 'Feiertag',
	'Class:Holiday+' => 'Ein arbeitsfreier Tag',
	'Class:Holiday/Attribute:calendar_id' => 'Kalender',
	'Class:Holiday/Attribute:calendar_id+' => 'Der Kalender (falls vorhanden), auf den sich dieser Feiertag bezieht',
	'Class:Holiday/Attribute:calendar_name' => 'Kalendername',
	'Class:Holiday/Attribute:calendar_name+' => '',
	'Class:Holiday/Attribute:date' => 'Datum',
	'Class:Holiday/Attribute:name' => 'Name',
	'Class:HolidayCalendar' => 'Feiertagskalender',
	'Class:HolidayCalendar+' => 'Eine Gruppe von Feiertagen, zu denen andere Objekte in Beziehung stehen können',
	'Class:HolidayCalendar/Attribute:holiday_list' => 'Feiertage',
	'Class:HolidayCalendar/Attribute:name' => 'Name',
	'Coverage:Description' => 'Beschreibung',
	'Coverage:EndTime' => 'Ende (Zeit)',
	'Coverage:StartTime' => 'Beginn (Zeit)',
	'CoverageWindow:Error:MissingIntervalList' => 'Die Geschäftszeiten müssen definiert werden.',
	'Menu:CoverageWindows' => 'Zeitfenster',
	'Menu:CoverageWindows+' => 'Alle Zeitfenster',
	'Menu:HolidayCalendars' => 'Feiertagskalender',
	'Menu:HolidayCalendars+' => 'Alle Feiertagskalender',
	'Menu:Holidays' => 'Feiertage',
	'Menu:Holidays+' => 'Alle Feiertage',
	'WorkingHoursInterval:DlgTitle' => 'Servicezeitinterval bearbeiten',
	'WorkingHoursInterval:EndTime' => 'Endzeit:',
	'WorkingHoursInterval:RemoveIntervalButton' => 'Zeitinterval löschen',
	'WorkingHoursInterval:StartTime' => 'Startzeit:',
	'WorkingHoursInterval:WholeDay' => 'Ganztags:',
]);
