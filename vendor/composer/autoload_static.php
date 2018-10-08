<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit807071db2b900537de24dda39c12ea63
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'srag\\RemovePluginDataConfirm\\' => 29,
            'srag\\Plugins\\UserDefaults\\' => 26,
            'srag\\DIC\\' => 9,
            'srag\\ActiveRecordConfig\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'srag\\RemovePluginDataConfirm\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src',
        ),
        'srag\\Plugins\\UserDefaults\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'srag\\DIC\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/dic/src',
        ),
        'srag\\ActiveRecordConfig\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/activerecordconfig/src',
        ),
    );

    public static $classMap = array (
        'ActiveRecord' => __DIR__ . '/../..' . '/../../../../../../../Services/ActiveRecord/class.ActiveRecord.php',
        'UDFCheckGUI' => __DIR__ . '/../..' . '/classes/UDFCheck/class.UDFCheckGUI.php',
        'UserSettingsGUI' => __DIR__ . '/../..' . '/classes/UserSetting/class.UserSettingsGUI.php',
        'ilAdvancedSelectionListGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/UIComponent/AdvancedSelectionList/classes/class.ilAdvancedSelectionListGUI.php',
        'ilConfirmationGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Utilities/classes/class.ilConfirmationGUI.php',
        'ilContainer' => __DIR__ . '/../..' . '/../../../../../../../Services/Container/classes/class.ilContainer.php',
        'ilContainerSorting' => __DIR__ . '/../..' . '/../../../../../../../Services/Container/classes/class.ilContainerSorting.php',
        'ilCourseConstants' => __DIR__ . '/../..' . '/../../../../../../../Modules/Course/classes/class.ilCourseConstants.php',
        'ilCourseParticipants' => __DIR__ . '/../..' . '/../../../../../../../Modules/Course/classes/class.ilCourseParticipants.php',
        'ilCustomInputGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilCustomInputGUI.php',
        'ilEventHookPlugin' => __DIR__ . '/../..' . '/../../../../../../../Services/EventHandling/classes/class.ilEventHookPlugin.php',
        'ilExAssignment' => __DIR__ . '/../..' . '/../../../../../../../Modules/Exercise/classes/class.ilExAssignment.php',
        'ilExSubmission' => __DIR__ . '/../..' . '/../../../../../../../Modules/Exercise/classes/class.ilExSubmission.php',
        'ilExplorerSelectInputGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/UIComponent/Explorer2/classes/class.ilExplorerSelectInputGUI.php',
        'ilGlyphGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/UIComponent/Glyph/classes/class.ilGlyphGUI.php',
        'ilGroupParticipants' => __DIR__ . '/../..' . '/../../../../../../../Modules/Group/classes/class.ilGroupParticipants.php',
        'ilMultiSelectInputGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilMultiSelectInputGUI.php',
        'ilObjCourse' => __DIR__ . '/../..' . '/../../../../../../../Modules/Course/classes/class.ilObjCourse.php',
        'ilObjExercise' => __DIR__ . '/../..' . '/../../../../../../../Modules/Exercise/classes/class.ilObjExercise.php',
        'ilObjGroup' => __DIR__ . '/../..' . '/../../../../../../../Modules/Group/classes/class.ilObjGroup.php',
        'ilObjOrgUnit' => __DIR__ . '/../..' . '/../../../../../../../Modules/OrgUnit/classes/class.ilObjOrgUnit.php',
        'ilObjPortfolio' => __DIR__ . '/../..' . '/../../../../../../../Modules/Portfolio/classes/class.ilObjPortfolio.php',
        'ilObjPortfolioTemplate' => __DIR__ . '/../..' . '/../../../../../../../Modules/Portfolio/classes/class.ilObjPortfolioTemplate.php',
        'ilObjStudyProgramme' => __DIR__ . '/../..' . '/../../../../../../../Modules/StudyProgramme/classes/class.ilObjStudyProgramme.php',
        'ilObjTaxonomy' => __DIR__ . '/../..' . '/../../../../../../../Services/Taxonomy/classes/class.ilObjTaxonomy.php',
        'ilObjUser' => __DIR__ . '/../..' . '/../../../../../../../Services/User/classes/class.ilObjUser.php',
        'ilPersonalSkill' => __DIR__ . '/../..' . '/../../../../../../../Services/Skill/classes/class.ilPersonalSkill.php',
        'ilPluginConfigGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Component/classes/class.ilPluginConfigGUI.php',
        'ilPortfolioAccessHandler' => __DIR__ . '/../..' . '/../../../../../../../Modules/Portfolio/classes/class.ilPortfolioAccessHandler.php',
        'ilPortfolioTemplatePage' => __DIR__ . '/../..' . '/../../../../../../../Modules/Portfolio/classes/class.ilPortfolioTemplatePage.php',
        'ilPropertyFormGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilPropertyFormGUI.php',
        'ilRepositorySelector2InputGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilRepositorySelector2InputGUI.php',
        'ilRepositorySelectorExplorerGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Repository/classes/class.ilRepositorySelectorExplorerGUI.php',
        'ilRepositorySelectorInputGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilRepositorySelectorInputGUI.php',
        'ilSubEnabledFormPropertyGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilSubEnabledFormPropertyGUI.php',
        'ilTable2GUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Table/classes/class.ilTable2GUI.php',
        'ilTableFilterItem' => __DIR__ . '/../..' . '/../../../../../../../Services/Table/interfaces/interface.ilTableFilterItem.php',
        'ilTextInputGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilTextInputGUI.php',
        'ilToolbarItem' => __DIR__ . '/../..' . '/../../../../../../../Services/UIComponent/Toolbar/interfaces/interface.ilToolbarItem.php',
        'ilTreeExplorerGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/UIComponent/Explorer2/classes/class.ilTreeExplorerGUI.php',
        'ilUserDefaultsConfigGUI' => __DIR__ . '/../..' . '/classes/class.ilUserDefaultsConfigGUI.php',
        'ilUserDefaultsPlugin' => __DIR__ . '/../..' . '/classes/class.ilUserDefaultsPlugin.php',
        'ilUserDefinedFields' => __DIR__ . '/../..' . '/../../../../../../../Services/User/classes/class.ilUserDefinedFields.php',
        'srag\\ActiveRecordConfig\\ActiveRecordConfig' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfig.php',
        'srag\\ActiveRecordConfig\\ActiveRecordConfigFormGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfigFormGUI.php',
        'srag\\ActiveRecordConfig\\ActiveRecordConfigGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfigGUI.php',
        'srag\\ActiveRecordConfig\\Exception\\ActiveRecordConfigException' => __DIR__ . '/..' . '/srag/activerecordconfig/src/Exception/ActiveRecordConfigException.php',
        'srag\\DIC\\DICStatic' => __DIR__ . '/..' . '/srag/dic/src/DICStatic.php',
        'srag\\DIC\\DICStaticInterface' => __DIR__ . '/..' . '/srag/dic/src/DICStaticInterface.php',
        'srag\\DIC\\DICTrait' => __DIR__ . '/..' . '/srag/dic/src/DICTrait.php',
        'srag\\DIC\\DIC\\AbstractDIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/AbstractDIC.php',
        'srag\\DIC\\DIC\\DICInterface' => __DIR__ . '/..' . '/srag/dic/src/DIC/DICInterface.php',
        'srag\\DIC\\DIC\\LegacyDIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/LegacyDIC.php',
        'srag\\DIC\\DIC\\NewDIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/NewDIC.php',
        'srag\\DIC\\Exception\\DICException' => __DIR__ . '/..' . '/srag/dic/src/Exception/DICException.php',
        'srag\\DIC\\Plugin\\Plugin' => __DIR__ . '/..' . '/srag/dic/src/Plugin/Plugin.php',
        'srag\\DIC\\Plugin\\PluginInterface' => __DIR__ . '/..' . '/srag/dic/src/Plugin/PluginInterface.php',
        'srag\\Plugins\\UserDefaults\\Config\\Config' => __DIR__ . '/../..' . '/src/Config/Config.php',
        'srag\\Plugins\\UserDefaults\\Form\\ilContainerMultiSelectInputGUI' => __DIR__ . '/../..' . '/src/Form/ilContainerMultiSelectInputGUI.php',
        'srag\\Plugins\\UserDefaults\\Form\\ilMultiSelectSearchInput2GUI' => __DIR__ . '/../..' . '/src/Form/ilMultiSelectSearchInput2GUI.php',
        'srag\\Plugins\\UserDefaults\\Form\\ilMultipleTextInput3GUI' => __DIR__ . '/../..' . '/src/Form/ilMultipleTextInput3GUI.php',
        'srag\\Plugins\\UserDefaults\\Form\\udfGlyphGUI' => __DIR__ . '/../..' . '/src/Form/udfGlyphGUI.php',
        'srag\\Plugins\\UserDefaults\\Form\\udfMultiLineInputGUI' => __DIR__ . '/../..' . '/src/Form/udfMultiLineInputGUI.php',
        'srag\\Plugins\\UserDefaults\\Form\\udfOrguSelectorExplorerGUI' => __DIR__ . '/../..' . '/src/Form/udfOrguSelectorExplorerGUI.php',
        'srag\\Plugins\\UserDefaults\\Form\\usrdefOrguSelectorInputGUI' => __DIR__ . '/../..' . '/src/Form/usrdefOrguSelectorInputGUI.php',
        'srag\\Plugins\\UserDefaults\\UDFCheck\\UDFCheck' => __DIR__ . '/../..' . '/src/UDFCheck/UDFCheck.php',
        'srag\\Plugins\\UserDefaults\\UDFCheck\\UDFCheckFormGUI' => __DIR__ . '/../..' . '/src/UDFCheck/UDFCheckFormGUI.php',
        'srag\\Plugins\\UserDefaults\\UDFCheck\\UDFCheckOld' => __DIR__ . '/../..' . '/src/UDFCheck/UDFCheckOld.php',
        'srag\\Plugins\\UserDefaults\\UDFCheck\\UDFCheckTableGUI' => __DIR__ . '/../..' . '/src/UDFCheck/UDFCheckTableGUI.php',
        'srag\\Plugins\\UserDefaults\\UDFCheck\\UDFCheckUDF' => __DIR__ . '/../..' . '/src/UDFCheck/UDFCheckUDF.php',
        'srag\\Plugins\\UserDefaults\\UDFCheck\\UDFCheckUser' => __DIR__ . '/../..' . '/src/UDFCheck/UDFCheckUser.php',
        'srag\\Plugins\\UserDefaults\\UserSearch\\usrdefObj' => __DIR__ . '/../..' . '/src/UserSearch/usrdefObj.php',
        'srag\\Plugins\\UserDefaults\\UserSearch\\usrdefUser' => __DIR__ . '/../..' . '/src/UserSearch/usrdefUser.php',
        'srag\\Plugins\\UserDefaults\\UserSetting\\UserSetting' => __DIR__ . '/../..' . '/src/UserSetting/UserSetting.php',
        'srag\\Plugins\\UserDefaults\\UserSetting\\UserSettingsFormGUI' => __DIR__ . '/../..' . '/src/UserSetting/UserSettingsFormGUI.php',
        'srag\\Plugins\\UserDefaults\\UserSetting\\UserSettingsTableGUI' => __DIR__ . '/../..' . '/src/UserSetting/UserSettingsTableGUI.php',
        'srag\\Plugins\\UserDefaults\\Utils\\UserDefaultsTrait' => __DIR__ . '/../..' . '/src/Utils/UserDefaultsTrait.php',
        'srag\\RemovePluginDataConfirm\\AbstractPluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/AbstractPluginUninstallTrait.php',
        'srag\\RemovePluginDataConfirm\\AbstractRemovePluginDataConfirm' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/AbstractRemovePluginDataConfirm.php',
        'srag\\RemovePluginDataConfirm\\PluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/PluginUninstallTrait.php',
        'srag\\RemovePluginDataConfirm\\RemovePluginDataConfirmException' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/RemovePluginDataConfirmException.php',
        'srag\\RemovePluginDataConfirm\\RepositoryObjectPluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/RepositoryObjectPluginUninstallTrait.php',
        'usrdefRemoveDataConfirm' => __DIR__ . '/../..' . '/classes/uninstall/class.usrdefRemoveDataConfirm.php',
        'usrdefUserGUI' => __DIR__ . '/../..' . '/classes/UserSearch/class.usrdefUserGUI.php',
        'usrdefUserTableGUI' => __DIR__ . '/../..' . '/classes/UserSearch/class.usrdefUserTableGUI.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit807071db2b900537de24dda39c12ea63::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit807071db2b900537de24dda39c12ea63::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit807071db2b900537de24dda39c12ea63::$classMap;

        }, null, ClassLoader::class);
    }
}
