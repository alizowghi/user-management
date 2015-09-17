<?php

use yii\db\Schema;
use yii\db\Migration;
use webvimark\modules\UserManagement\models\rbacDB\Permission;

class m140809_073114_insert_common_permisison_to_auth_item extends Migration
{
	public function safeUp()
	{
		Permission::create(Yii::$app->getModule(Yii::$app->user->moduleName())->commonPermissionName);
	}

	public function safeDown()
	{
		$permission = Permission::findOne(['name'=>Yii::$app->getModule(Yii::$app->user->moduleName())->commonPermissionName]);

		if ( $permission )
		{
			$permission->delete();
		}
	}
}
