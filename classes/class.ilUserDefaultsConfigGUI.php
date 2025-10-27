<?php

require_once __DIR__ . "/../vendor/autoload.php";

use srag\Plugins\UserDefaults\Utils\UserDefaultsTrait;

/**
 * @ilCtrl_isCalledBy ilUserDefaultsConfigGUI: ilObjComponentSettingsGUI
 */
class ilUserDefaultsConfigGUI extends ilPluginConfigGUI {

	use UserDefaultsTrait;
	const PLUGIN_CLASS_NAME = ilUserDefaultsPlugin::class;
	const TAB_SETTINGS = "settings";
	const TAB_USERS = "users";
	const TAB_GLOBAL_SETTINGS = "global_settings";
    private ilCtrl $ctrl;
    private ilTabsGUI $tabs;
    private ilUserDefaultsPlugin $pl;

    /**
	 * ilUserDefaultsConfigGUI constructor
	 */
	public function __construct() {
        global $DIC;

        // Get all assigned global roles of the current user
        $assigned_roles = $DIC->rbac()->review()->assignedGlobalRoles($DIC->user()->getId());

        // Get titles for the assigned roles
        $allowed_roles = ["Administrator", "Portal Administrator"];
        $has_permission = false;

        foreach ($assigned_roles as $role_id) {
            $role_title = ilObjRole::_lookupTitle($role_id);
            if (in_array($role_title, $allowed_roles)) {
                $has_permission = true;
                break;
            }
        }

        if (!$has_permission) {
            echo "no Permission";
            exit;
        }

        $this->ctrl = $DIC->ctrl();
        $this->tabs = $DIC["ilTabs"];
        $this->pl = ilUserDefaultsPlugin::getInstance();
    }

    /**
     * @throws ilCtrlException
     */
	public function performCommand(string $cmd): void
    {
        $this->tabs->addTab(self::TAB_SETTINGS, $this->pl->txt('tabs_settings'), $this->ctrl
			->getLinkTargetByClass(UserSettingsGUI::class));
        $this->tabs->addTab(self::TAB_USERS, $this->pl->txt('tabs_users'), $this->ctrl
			->getLinkTargetByClass(usrdefUserGUI::class));

		$nextClass = $this->ctrl->getNextClass();
		switch ($nextClass) {
			case strtolower(UDFCheckGUI::class):
                $this->tabs->activateTab(self::TAB_SETTINGS);
				$gui = new UDFCheckGUI(new UserSettingsGUI());
                break;
			case strtolower(usrdefUserGUI::class):
                $this->tabs->activateTab(self::TAB_USERS);
				$gui = new usrdefUserGUI();
                break;
            case strtolower(ilUserDefaultsRestApiGUI::class):
                $gui = new ilUserDefaultsRestApiGUI();
                break;
			default;
                $this->tabs->activateTab(self::TAB_SETTINGS);
				$gui = new UserSettingsGUI($this);
                break;
		}
        $this->ctrl->forwardCommand($gui);
    }
}
