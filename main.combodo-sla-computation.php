<?php
// Copyright (C) 2010-2018 Combodo SARL
//


/**
 * Module combodo-sla-computation
 *
 * @author      Erwan Taloc <erwan.taloc@combodo.com>
 * @author      Romain Quetiez <romain.quetiez@combodo.com>
 * @author      Denis Flaven <denis.flaven@combodo.com>
 */



/**
 * Extension to the SLA computation mechanism
 * This class implements a behavior based on:
 * - Open hours for each day of the week
 * - An explicit list of holidays
 * @deprecated 2.5.0 for iTop 3.3.0 use CoverageBasedWorkingTimeComputer instead
 */
final class EnhancedSLAComputation
{
	/**
	 * @param Ticket $oTicket The ticket for which to compute the deadline
	 * @param integer $iDuration The duration (in seconds) in the future
	 * @param DateTime $oStartDate The starting point for the computation
	 * @param string $sCoverageOql if provided, use this OQL
	 * @param string $sHolidaysOql if provided, use this OQL
	 *
	 * @return DateTime date/time corresponding to a given delay in the future from the present,
	 *      considering only the valid (open) hours for a specified ticket
	 * @throws \CoreException
	 * @throws \CoreUnexpectedValue
	 * @throws \MissingQueryArgument
	 * @throws \MySQLException
	 * @throws \MySQLHasGoneAwayException
	 * @throws \OQLException
	 * @deprecated 2.5.0 for iTop 3.3.0 use CoverageBasedWorkingTimeComputer instead
	 */
	public static function GetDeadline($oTicket, $iDuration, DateTime $oStartDate, $sCoverageOql = '', $sHolidaysOql = '')
	{
		DeprecatedCallsLog::NotifyDeprecatedPhpMethod('use CoverageBasedWorkingTimeComputer::GetDeadline');
		$oComputer = new CoverageBasedWorkingTimeComputer();
		 if (utils::IsNotNullOrEmptyString($sCoverageOql)) {
		     $oComputer->SetCoverageOql($sCoverageOql);
		 }
		 if (utils::IsNotNullOrEmptyString($sHolidaysOql)) {
		      $oComputer->SetHolidaysOql($sHolidaysOql);
		 }
		$oDeadline = $oComputer->GetDeadline($oTicket, $iDuration, $oStartDate);

		return $oDeadline;
	}

	/**
	 * @param Ticket $oTicket The ticket for which to compute the duration
	 * @param DateTime $oStartDate The starting point for the computation (default = now)
	 * @param DateTime $oEndDate The ending point for the computation (default = now)
	 * @param string $sCoverageOql if provided, use this OQL
	 * @param string $sHolidaysOql if provided, use this OQL
	 *
	 * @return integer duration (number of seconds), considering only open hours, elapsed between two given DateTimes
	 * @throws \CoreException
	 * @throws \CoreUnexpectedValue
	 * @throws \MissingQueryArgument
	 * @throws \MySQLException
	 * @throws \MySQLHasGoneAwayException
	 * @throws \OQLException
	 * @deprecated 2.5.0 for iTop 3.3.0 use CoverageBasedWorkingTimeComputer instead
	 */
	public static function GetOpenDuration($oTicket, DateTime $oStartDate, DateTime $oEndDate, $sCoverageOql = '', $sHolidaysOql = '')
	{
		DeprecatedCallsLog::NotifyDeprecatedPhpMethod('use CoverageBasedWorkingTimeComputer::GetOpenDuration');
		$oComputer = new CoverageBasedWorkingTimeComputer();
		if (utils::IsNotNullOrEmptyString($sCoverageOql)) {
		     $oComputer->SetCoverageOql($sCoverageOql);
		}
		if (utils::IsNotNullOrEmptyString($sHolidaysOql)) {
		      $oComputer->SetHolidaysOql($sHolidaysOql);
		}
		$iDuration = $oComputer->GetOpenDuration($oTicket, $oStartDate, $oEndDate);

		return $iDuration;
	}
}