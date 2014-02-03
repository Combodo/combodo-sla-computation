<?php
// Copyright (C) 2010 Combodo SARL
//
//   This program is free software; you can redistribute it and/or modify
//   it under the terms of the GNU General Public License as published by
//   the Free Software Foundation; version 3 of the License.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of the GNU General Public License
//   along with this program; if not, write to the Free Software
//   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

/**
 * Localized data
 *
 * @author      Erwan Taloc <erwan.taloc@combodo.com>
 * @author      Romain Quetiez <romain.quetiez@combodo.com>
 * @author      Denis Flaven <denis.flaven@combodo.com>
 * @license     http://www.opensource.org/licenses/gpl-3.0.html LGPL
 */
//
// Class: CoverageWindow
//

Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Menu:CoverageWindows' => 'Coverage Windows',
	'Menu:CoverageWindows+' => 'Alle Windows',
	'Class:CoverageWindow' => 'Coverage Window',
	'Class:CoverageWindow+' => '',
	'Class:CoverageWindow/Attribute:name' => 'Name',
	'Class:CoverageWindow/Attribute:name+' => '',
	'Class:CoverageWindow/Attribute:description' => 'Beschreibung',
	'Class:CoverageWindow/Attribute:description+' => '',
	'Class:CoverageWindow/Attribute:monday_start' => 'Beginn am Montag',
	'Class:CoverageWindow/Attribute:monday_start+' => '',
	'Class:CoverageWindow/Attribute:monday_end' => 'Ende am Montag',
	'Class:CoverageWindow/Attribute:monday_end+' => '',
	'Class:CoverageWindow/Attribute:tuesday_start' => 'Beginn am Dienstag',
	'Class:CoverageWindow/Attribute:tuesday_start+' => '',
	'Class:CoverageWindow/Attribute:tuesday_end' => 'Ende am Dienstag',
	'Class:CoverageWindow/Attribute:tuesday_end+' => '',
	'Class:CoverageWindow/Attribute:wednesday_start' => 'Beginn am Mittwoch',
	'Class:CoverageWindow/Attribute:wednesday_start+' => '',
	'Class:CoverageWindow/Attribute:wednesday_end' => 'Ende am Mittwoch',
	'Class:CoverageWindow/Attribute:wednesday_end+' => '',
	'Class:CoverageWindow/Attribute:thursday_start' => 'Beginn am Donnerstag',
	'Class:CoverageWindow/Attribute:thursday_start+' => '',
	'Class:CoverageWindow/Attribute:thursday_end' => 'Ende am Donnerstag',
	'Class:CoverageWindow/Attribute:thursday_end+' => '',
	'Class:CoverageWindow/Attribute:friday_start' => 'Beginn am Freitag',
	'Class:CoverageWindow/Attribute:friday_start+' => '',
	'Class:CoverageWindow/Attribute:friday_end' => 'Ende am Freitag',
	'Class:CoverageWindow/Attribute:friday_end+' => '',
	'Class:CoverageWindow/Attribute:saturday_start' => 'Beginn am Samstag',
	'Class:CoverageWindow/Attribute:saturday_start+' => '',
	'Class:CoverageWindow/Attribute:saturday_end' => 'Ende am Samstag',
	'Class:CoverageWindow/Attribute:saturday_end+' => '',
	'Class:CoverageWindow/Attribute:sunday_start' => 'Beginn am Sonntag',
	'Class:CoverageWindow/Attribute:sunday_start+' => '',
	'Class:CoverageWindow/Attribute:sunday_end' => 'Ende am Sonntag',
	'Class:CoverageWindow/Attribute:sunday_end+' => '',
	'Class:CoverageWindow/Attribute:friendlyname' => 'Bezeichnung',
	'Class:CoverageWindow/Attribute:friendlyname+' => '',
));

Dict::Add('DE DE', 'German', 'Deutsch', array(
	// Dictionary entries go here
	'Menu:Holidays' => 'Feiertage',
	'Menu:Holidays+' => 'Alle Feiertage',
	'Class:Holiday' => 'Feiertag',
	'Class:Holiday+' => 'Ein arbeitsfreier Tag',
	'Class:Holiday/Attribute:name' => 'Name',
	'Class:Holiday/Attribute:date' => 'Datum',
	'Class:Holiday/Attribute:calendar_id' => 'Kalender',
	'Class:Holiday/Attribute:calendar_id+' => 'Der Kalender (falls vorhanden), auf den sich dieser Feiertag bezieht',
	'Coverage:Description' => 'Beschreibung',	
	'Coverage:StartTime' => 'Beginn (Zeit)',	
	'Coverage:EndTime' => 'Ende (Zeit)',

));


Dict::Add('DE DE', 'German', 'Deutsch', array(
	// Dictionary entries go here
	'Menu:HolidayCalendars' => 'Feiertagskalender',
	'Menu:HolidayCalendars+' => 'Alle Feiertagskalender',
	'Class:HolidayCalendar' => 'Feiertagskalender',
	'Class:HolidayCalendar+' => 'Eine Gruppe an Feiertagen, zu denen andere Objekte in Bezeihung stehen können',
	'Class:HolidayCalendar/Attribute:name' => 'Name',
	'Class:HolidayCalendar/Attribute:holiday_list' => 'Feiertage',
));
?>
