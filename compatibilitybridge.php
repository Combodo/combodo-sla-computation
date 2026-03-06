<?php

/*
 * @copyright   Copyright (C) 2010-2026 Combodo SAS
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

// IMPORTANT: This is a temporary compatibility bridge to enable a smooth migration from iTop 3.2- to iTop 3.3+.
// In the next version of the extension, this will be remove and the require_once from the 3.2 will be moved to the 'datamodel' section of the module.itop-sla-computation.php file.

// iTop 3.3 and newer
if (version_compare(ITOP_DESIGN_LATEST_VERSION, 3.3, '>=')) {
    require_once __DIR__ .'/src/Model/CoverageBasedWorkingTimeComputer.php';
}