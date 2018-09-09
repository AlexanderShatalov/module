<?
use \Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

AddEventHandler("main", "OnBuildGlobalMenu", "global_menu_shataloff_migrationmodule");

function global_menu_shataloff_migrationmodule(&$aGlobalMenu, &$aModuleMenu){
	$aModuleMenu[] = array(
		"parent_menu" => "global_menu_settings",
		"icon"        => "default_menu_icon",
		"page_icon"   => "default_page_icon",
		"text"        => Loc::getMessage("SHATALOFF_MIGRATIONMODULE_ADMIN_MENU_STRANICA_MIGRACII_TEXT"),
		"title"       => Loc::getMessage("SHATALOFF_MIGRATIONMODULE_ADMIN_MENU_STRANICA_MIGRACII_TITLE"),
		"url"         => "shataloff_migrationmodule_stranica_migracii.php"
	);

}
?>