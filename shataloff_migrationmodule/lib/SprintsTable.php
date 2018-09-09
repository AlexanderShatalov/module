<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 10.09.2018
 * Time: 0:17
 */

namespace shataloff_migrationmodule;

use \Bitrix\Main\Entity;

class SprintsTable extends Entity\DataManager
{
    public static function getTableName()
    {
        return 'sprint_migration_versions';
    }

    public static function getMap()
    {
        return array(
            new Entity\IntegerField('ID', array(
                'primary' => true
            )),
            new Entity\StringField('version'),
            new Entity\StringField('hash'),
        );
    }
}