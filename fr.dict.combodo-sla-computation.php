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

Dict::Add('FR FR', 'French', 'Français', array(
	'Menu:CoverageWindows' => 'Heures Ouvrées',
	'Menu:CoverageWindows+' => 'Toutes les Heures Ouvrées',
	'Class:CoverageWindow' => 'Heures Ouvrées',
	'Class:CoverageWindow+' => '',
	'Class:CoverageWindow/Attribute:name' => 'Nom',
	'Class:CoverageWindow/Attribute:name+' => '',
	'Class:CoverageWindow/Attribute:description' => 'Description',
	'Class:CoverageWindow/Attribute:description+' => '',
	'Class:CoverageWindow/Attribute:monday_start' => 'Début Lundi',
	'Class:CoverageWindow/Attribute:monday_start+' => '',
	'Class:CoverageWindow/Attribute:monday_end' => 'Fin Lundi',
	'Class:CoverageWindow/Attribute:monday_end+' => '',
	'Class:CoverageWindow/Attribute:tuesday_start' => 'Début Mardi',
	'Class:CoverageWindow/Attribute:tuesday_start+' => '',
	'Class:CoverageWindow/Attribute:tuesday_end' => 'Fin Mardi',
	'Class:CoverageWindow/Attribute:tuesday_end+' => '',
	'Class:CoverageWindow/Attribute:wednesday_start' => 'Début Mercredi',
	'Class:CoverageWindow/Attribute:wednesday_start+' => '',
	'Class:CoverageWindow/Attribute:wednesday_end' => 'Fin Mercredi',
	'Class:CoverageWindow/Attribute:wednesday_end+' => '',
	'Class:CoverageWindow/Attribute:thursday_start' => 'Début Jeudi',
	'Class:CoverageWindow/Attribute:thursday_start+' => '',
	'Class:CoverageWindow/Attribute:thursday_end' => 'Fin Jeudi',
	'Class:CoverageWindow/Attribute:thursday_end+' => '',
	'Class:CoverageWindow/Attribute:friday_start' => 'Début Vendredi',
	'Class:CoverageWindow/Attribute:friday_start+' => '',
	'Class:CoverageWindow/Attribute:friday_end' => 'Fin Vendredi',
	'Class:CoverageWindow/Attribute:friday_end+' => '',
	'Class:CoverageWindow/Attribute:saturday_start' => 'Début Samedi',
	'Class:CoverageWindow/Attribute:saturday_start+' => '',
	'Class:CoverageWindow/Attribute:saturday_end' => 'Fin Samedi',
	'Class:CoverageWindow/Attribute:saturday_end+' => '',
	'Class:CoverageWindow/Attribute:sunday_start' => 'Début Dimanche',
	'Class:CoverageWindow/Attribute:sunday_start+' => '',
	'Class:CoverageWindow/Attribute:sunday_end' => 'Fin Dimanche',
	'Class:CoverageWindow/Attribute:sunday_end+' => '',
	'Coverage:Description' => 'Description',	
	'Coverage:StartTime' => 'Heures de début',	
	'Coverage:EndTime' => 'Heures de fin',
));

Dict::Add('FR FR', 'French', 'Français', array(
	// Dictionary entries go here
	'Menu:Holidays' => 'Jours Fériés',
	'Menu:Holidays+' => 'Tous les Jours Fériés',
	'Class:Holiday' => 'Jour Férié',
	'Class:Holiday+' => 'Un jour non travaillé',
	'Class:Holiday/Attribute:name' => 'Nom',
	'Class:Holiday/Attribute:date' => 'Date',
	'Class:Holiday/Attribute:calendar_id' => 'Calendrier',
	'Class:Holiday/Attribute:calendar_id+' => 'Le calendrier (optional) auquel est rattaché ce jour férié',
));


Dict::Add('FR FR', 'French', 'Français', array(
	// Dictionary entries go here
	'Menu:HolidayCalendars' => 'Calendriers des Jours Fériés',
	'Menu:HolidayCalendars+' => 'Tous les Calendriers des Jours Fériés',
	'Class:HolidayCalendar' => 'Calendrier des Jours Fériés',
	'Class:HolidayCalendar+' => 'Un groupe de jours fériés',
	'Class:HolidayCalendar/Attribute:name' => 'Nom',
	'Class:HolidayCalendar/Attribute:holiday_list' => 'Jours Fériés',
));
?>
