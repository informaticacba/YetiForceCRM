<?php
/**
 * Config editor edit view file.
 *
 * @package   Settings.View
 *
 * @copyright YetiForce S.A.
 * @license   YetiForce Public License 5.0 (licenses/LicenseEN.txt or yetiforce.com)
 */
/**
 * Config editor edit view class.
 */
class Settings_ConfigEditor_Edit_View extends Settings_Vtiger_Index_View
{
	/** {@inheritdoc} */
	protected $pageTitle = 'LBL_CONFIG_EDITOR';

	/** {@inheritdoc} */
	public function process(App\Request $request)
	{
		$qualifiedName = $request->getModule(false);
		$moduleModel = Settings_ConfigEditor_Module_Model::getInstance()->init('Main');

		$viewer = $this->getViewer($request);
		$viewer->assign('MODEL', $moduleModel);
		$viewer->view('Edit.tpl', $qualifiedName);
	}
}
