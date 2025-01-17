<?php

/**
 * Calendar right panel view model class.
 *
 * @copyright YetiForce S.A.
 * @license   YetiForce Public License 5.0 (licenses/LicenseEN.txt or yetiforce.com)
 * @author    Arkadiusz Adach <a.adach@yetiforce.com>
 */
class Calendar_RightPanelExtended_View extends Calendar_RightPanel_View
{
	/** {@inheritdoc} */
	protected function getTpl(string $tplFile)
	{
		return "Calendar/$tplFile";
	}
}
