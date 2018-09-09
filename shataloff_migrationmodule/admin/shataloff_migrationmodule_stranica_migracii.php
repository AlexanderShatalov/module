<? require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_before.php");
require $_SERVER["DOCUMENT_ROOT"] . "/local/modules/shataloff_migrationmodule/lib/SprintsTable.php";
use \Bitrix\Main\Localization\Loc;
use \shataloff_migrationmodule\SprintsTable;

Loc::loadMessages(__FILE__);

global $USER, $APPLICATION, $DB;

$APPLICATION->SetTitle(Loc::getMessage("TITLE"));

$test = SprintsTable::getList(
    array(
        'select'=>array('*')
    )
);

$name = SprintsTable::getTableName();

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_after.php"); ?>
<?
    while ($result = $test->fetch()) {
        $arResult[] = $result;
    }
?>

<table border="1">
    <caption><?=$name?></caption>
    <tr>
        <?foreach ($arResult[0] as $k => $v):?>

            <th><?=$k?></th>

        <?endforeach;?>
    </tr>
    <tr>
        <?foreach ($arResult[0] as $v):?>

            <td><?=$v?></td>

        <?endforeach;?>
    </tr>

</table>

<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_admin.php"); ?>

