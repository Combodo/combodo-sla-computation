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
class EnhancedSLAComputation
{
	/**
	 * Called when the module is loaded, used for one time initialization (if needed)
	 */
	public function Init()
	{
	}

	/**
	 * @param Ticket $oTicket The ticket for which to compute the deadline
	 *
	 * @return string
	 * @since 2.3.0 N°2042 Deadline / OpenDuration extensibility
	 * @deprecated 2.5.0 for iTop 3.3.0 use CoverageBasedWorkingTimeComputer instead
	 */
	protected static function GetCoverageOql($oTicket)
	{
		return MetaModel::GetModuleSetting('combodo-sla-computation', 'coverage_oql', '');
	}

	/**
	 * @param Ticket $oTicket The ticket for which to compute the deadline
	 * @param string $sOql default OQL query
	 *
	 * @return \DBObjectSet
	 * @throws \OQLException
	 * @since 2.3.0 N°2042 Deadline / OpenDuration extensibility
	 * @deprecated 2.5.0 for iTop 3.3.0 use CoverageBasedWorkingTimeComputer instead
	 */
	protected static function GetCoverageSet($oTicket, $sOql)
	{
		$sCoverageOQL = $sOql ?: static::GetCoverageOql($oTicket);
		if ($sCoverageOQL !== '')
		{
			return new DBObjectSet(DBObjectSearch::FromOQL($sCoverageOQL), array(), array('this' => $oTicket));
		}

		return DBObjectSet::FromScratch('CoverageWindow');
	}

	/**
	 * @param Ticket $oTicket The ticket for which to compute the deadline
	 *
	 * @return string
	 * @since 2.3.0 N°2042 Deadline / OpenDuration extensibility
	 * @deprecated 2.5.0 for iTop 3.3.0 use CoverageBasedWorkingTimeComputer instead
	 */
	protected static function GetHolidaysOql($oTicket)
	{
		return MetaModel::GetModuleSetting('combodo-sla-computation', 'holidays_oql', '');
	}

	/**
	 * @param Ticket $oTicket The ticket for which to compute the deadline
	 * @param string $sOql default OQL query
	 *
	 * @return \DBObjectSet
	 * @throws \OQLException
	 * @since 2.3.0 N°2042 Deadline / OpenDuration extensibility
	 * @deprecated 2.5.0 for iTop 3.3.0 use CoverageBasedWorkingTimeComputer instead
	 */
	protected static function GetHolidaysSet($oTicket, $sOql)
	{
		$sHolidaysOQL = $sOql ?: static::GetHolidaysOql($oTicket);
		if ($sHolidaysOQL !== '')
		{
			return new DBObjectSet(DBObjectSearch::FromOQL($sHolidaysOQL), array(), array('this' => $oTicket));
		}

		return DBObjectSet::FromScratch('Holiday');
	}

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
	 *
	 *  replace with CoverageBasedWorkingTimeComputer::GetDeadline() :
	 * * example:
	 * *  before
	 * *   $oDeadline = EnhancedSLAComputation::GetDeadline($oTicket, $iDuration, $dStartDate, $sCoverageOql, $sHolidaysOql);
	 * *  after
	 * *   $oComputer = new CoverageBasedWorkingTimeComputer();
	 * *  if (utils::IsNotNullOrEmptyString($sCoverageOql)) {
	 * *      $oComputer->SetCoverageOql($sCoverageOql);
	 * *  }
	 * *  if (utils::IsNotNullOrEmptyString($sHolidaysOql)) {
	 * *      $oComputer->SetHolidaysOql($sHolidaysOql);
	 * *  }
	 * *  $oDeadline = $oComputer->GetDeadline($oTicket, $iDuration, $oStartDate);
	 */
	public static function GetDeadline($oTicket, $iDuration, DateTime $oStartDate, $sCoverageOql = '', $sHolidaysOql = '')
	{
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
	 *
	 *  replace with CoverageBasedWorkingTimeComputer::GetOpenDuration() :
	 * example:
	 *  before
	 *   $iTimeSpentBB = EnhancedSLAComputation::GetOpenDuration($oTicket, $dStartDate, $dEndDate, $sCoverageOql, $sHolidaysOql);
	 *  after
	 *   $oComputer = new CoverageBasedWorkingTimeComputer();
	 *  if (utils::IsNotNullOrEmptyString($sCoverageOql)) {
	 *      $oComputer->SetCoverageOql($sCoverageOql);
	 *  }
	 *  if (utils::IsNotNullOrEmptyString($sHolidaysOql)) {
	 *      $oComputer->SetHolidaysOql($sHolidaysOql);
	 *  }
	 *  $iTimeSpentBB = $oComputer->GetOpenDuration($oTicket, $oStartDate, $oEndDate);
	 */

	public static function GetOpenDuration($oTicket, DateTime $oStartDate, DateTime $oEndDate, $sCoverageOql = '', $sHolidaysOql = '')
	{
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

	/**
	 * Helper function to get the date/time corresponding to a given delay in the future from the present,
	 * considering only the valid (open) hours as specified by the supplied CoverageWindow object and the given
	 * set of Holiday objects.
	 *
	 * @param CoverageWindow $oCoverage The coverage window defining the open hours
	 * @param DBObjectSet $oHolidaysSet The list of holidays to take into account
	 * @param integer $iDuration The duration (in seconds) in the future
	 * @param DateTime $oStartDate The starting point for the computation
	 *
	 * @return DateTime The date/time for the deadline
	 * @deprecated 2.5.0 for iTop 3.3.0 use CoverageBasedWorkingTimeComputer instead
	 */
	public static function GetDeadlineFromCoverage(CoverageWindow $oCoverage, DBObjectSet $oHolidaysSet, $iDuration, DateTime $oStartDate)
	{
		$oComputer = new CoverageBasedWorkingTimeComputer();
		return $oComputer->GetDeadlineFromCoverage($oCoverage, $oHolidaysSet, $iDuration, $oStartDate);
	}

	/**
	 * Helper function to get the date/time corresponding to a given delay in the future from the present,
	 * considering only the valid (open) hours as specified by the supplied CoverageWindow object and the given
	 * set of Holiday objects.
	 *
	 * @param CoverageWindow $oCoverage The coverage window defining the open hours
	 * @param DBObjectSet $oHolidaysSet The list of holidays to take into account
	 * @param DateTime $oStartDate The starting point for the computation (default = now)
	 * @param DateTime $oEndDate The ending point for the computation (default = now)
	 *
	 * @return integer The duration (number of seconds) of open hours elapsed between the two dates
	 * @deprecated 2.5.0 for iTop 3.3.0 use CoverageBasedWorkingTimeComputer instead
	 */
	public static function GetOpenDurationFromCoverage($oCoverage, $oHolidaysSet, $oStartDate, $oEndDate)
	{
		$oComputer = new CoverageBasedWorkingTimeComputer();
		return $oComputer->GetOpenDurationFromCoverage($oCoverage, $oHolidaysSet, $oStartDate, $oEndDate);
	}

	/*
	 * @deprecated 2.5.0 for iTop 3.3.0 use $oCoverage->IsInsideCoverage instead
	*/
	public static function IsInsideCoverage($oCurDate, $oCoverage, $oHolidaysSet = null)
	{
		if (is_null($oCoverage))
		{
			// 24x7
			return true;
		}
		else
		{
			return $oCoverage->IsInsideCoverage($oCurDate, $oHolidaysSet);
		}
	}
	/*
	* @deprecated 2.5.0 for iTop 3.3.0 use CoverageBasedWorkingTimeComputer instead
	 */
	protected static function DumpInterval($oStart, $oEnd)
	{
		$iDuration = $oEnd->format('U') - $oStart->format('U');
		echo "<p>Interval: [ ".$oStart->format('Y-m-d H:i:s (D - w)')." ; ".$oEnd->format('Y-m-d H:i:s')." ], duration  $iDuration s</p>";
	}
}